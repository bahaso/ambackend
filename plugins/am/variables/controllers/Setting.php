<?php namespace am\Variables\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Am\Post\Models\PostMap;

class Setting extends Controller
{
    public $implement = [        
    'Backend\Behaviors\ListController',        
    'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('am.Variables', 'variables-menu', 'settings-item');
    }



    public function formAfterSave( $model )
    {
        $db_post_map = PostMap::all();

        foreach( $db_post_map as $dp )
        {
        	$post_url = sprintf( '%s/article/%s/%s', $model->base_url_link, $dp->id, $dp->slug );

        	$dp->post_url_link = $post_url;
        	$dp->save();
        }
    }
}
