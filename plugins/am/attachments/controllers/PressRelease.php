<?php namespace am\Attachments\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

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
}
