<?php namespace RainLab\Blog\Controllers;

use Flash;
use Redirect;
use BackendMenu;
use Backend\Classes\Controller;
use ApplicationException;
use RainLab\Blog\Models\Post;

class Galleries extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $relationConfig;

    public $requiredPermissions = ['rainlab.blog.access_other_posts', 'rainlab.blog.access_posts'];

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('RainLab.Blog', 'blog', 'galleries');
    }

    public function index()
    {
        $this->asExtension('ListController')->index();
    }
    
    public function listExtendQuery($query)
    {
        if (!$this->user->hasAnyAccess(['rainlab.blog.access_other_posts'])) {
            $query->where('user_id', $this->user->id);
        }

        $query->whereCategoryType('photo-gallery');
    }
}
