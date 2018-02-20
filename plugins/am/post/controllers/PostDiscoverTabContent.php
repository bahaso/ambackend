<?php namespace Am\Post\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class PostDiscoverTabContent extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Am.Post', 'discover-post-menu', 'discover-tab-content-item');
    }
}
