<?php namespace am\Attachments\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

use Am\Post\Models\PostMap;
use Am\Variables\Models\Setting;

class PressRelease extends Controller
{
    public $implement = [        
    'Backend\Behaviors\ListController',        
    'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('am.Attachments', 'attachments-menu', 'press-release-item');
    }

    public function formBeforeSave( $model )
    {
        $model->category = 'press-release';
    }

    public function listExtendQuery($query)
    {
        $query->whereCategory('press-release');
    }

    public function formAfterSave( $model )
    {
        $model->slug = str_slug( $model->title, '-');
        $model->save(); 
        
        $db_post_map = PostMap::wherePostId( $model->id )->wherePostType( 'press-release' )->first();

        if( !$db_post_map )
        {
            $db_post_map = new PostMap;
            $db_post_map->post_id   = $model->id;
            $db_post_map->post_type = 'press-release';
        }

        $db_post_map->title = $model->title;
        $db_post_map->slug  = str_slug( $model->title, '-');
        $db_post_map->save();

        $model->post_map_id = $db_post_map->id;
        $model->save();

        $db_setting = Setting::first();
        //save link url
        $db_post_map->post_url_link = $db_setting->setUrlArticle( $db_post_map->id, $db_post_map->slug );
        $db_post_map->save();
    }

}
