<?php namespace RainLab\Blog\Controllers;

use Flash;
use Redirect;
use BackendMenu;
use Backend\Classes\Controller;
use ApplicationException;
use RainLab\Blog\Models\Post;
use Am\Post\Models\PostMap;
use Am\Variables\Models\Setting;

class Posts extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
        'Backend.Behaviors.ImportExportController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $importExportConfig = 'config_import_export.yaml';
    public $relationConfig;

    public $requiredPermissions = ['rainlab.blog.access_other_posts', 'rainlab.blog.access_posts'];

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('RainLab.Blog', 'blog', 'posts');
    }

    public function index()
    {
        $this->vars['postsTotal'] = Post::count();
        $this->vars['postsPublished'] = Post::isPublished()->count();
        $this->vars['postsDrafts'] = $this->vars['postsTotal'] - $this->vars['postsPublished'];

        $this->asExtension('ListController')->index();
    }

    public function create()
    {
        BackendMenu::setContextSideMenu('new_post');

        $this->bodyClass = 'compact-container';
        $this->addCss('/plugins/rainlab/blog/assets/css/rainlab.blog-preview.css');
        $this->addJs('/plugins/rainlab/blog/assets/js/post-form.js');

        return $this->asExtension('FormController')->create();
    }

    public function update($recordId = null)
    {
        $this->bodyClass = 'compact-container';
        $this->addCss('/plugins/rainlab/blog/assets/css/rainlab.blog-preview.css');
        $this->addJs('/plugins/rainlab/blog/assets/js/post-form.js');

        return $this->asExtension('FormController')->update($recordId);
    }

    public function listExtendQuery($query)
    {
        if (!$this->user->hasAnyAccess(['rainlab.blog.access_other_posts'])) {
            $query->where('user_id', $this->user->id);
        }
    }

    public function formExtendQuery($query)
    {
        if (!$this->user->hasAnyAccess(['rainlab.blog.access_other_posts'])) {
            $query->where('user_id', $this->user->id);
        }
    }

    public function formExtendFieldsBefore($widget)
    {
        if (!$model = $widget->model) {
            return;
        }

        if ($model instanceof Post && $model->isClassExtendedWith('RainLab.Translate.Behaviors.TranslatableModel')) {
            $widget->secondaryTabs['fields']['content']['type'] = 'RainLab\Blog\FormWidgets\MLBlogMarkdown';
        }
    }

    public function index_onDelete()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {

            foreach ($checkedIds as $postId) {
                if ((!$post = Post::find($postId)) || !$post->canEdit($this->user)) {
                    continue;
                }

                $post->delete();
            }

            Flash::success('Successfully deleted those posts.');
        }

        return $this->listRefresh();
    }

    /**
     * {@inheritDoc}
     */
    public function listInjectRowClass($record, $definition = null)
    {
        if (!$record->published) {
            return 'safe disabled';
        }
    }

    public function formBeforeCreate($model)
    {
        $model->user_id = $this->user->id;
    }

    public function onRefreshPreview()
    {
        $data = post('Post');

        $previewHtml = Post::formatHtml($data['content'], true);

        return [
            'preview' => $previewHtml
        ];
    }

    /**
     * For articles map in menu
     */
    public function formAfterSave( $model )
    {
        $db_post_map = PostMap::wherePostId( $model->id )->wherePostType( $model->category_type )->first();

        if( !$db_post_map )
        {
            $db_post_map = new PostMap;
            $db_post_map->post_id   = $model->id;
        }

        //change post map type
        $db_post_map->post_type = $model->category_type;
        $db_post_map->title = $model->title;
        $db_post_map->slug  = $model->slug;
        $db_post_map->save();

        $model->post_map_id = $db_post_map->id;
        $model->save();

        $db_setting = Setting::first();
        //save link url
        $db_post_map->post_url_link = $db_setting->setUrlArticle( $db_post_map->id, $db_post_map->slug );
        $db_post_map->save();

    }
}
