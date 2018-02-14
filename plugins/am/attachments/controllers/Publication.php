<?php namespace am\Attachments\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Publication extends Controller
{
    public $implement = [        
    'Backend\Behaviors\ListController',        
    'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('am.Attachments', 'attachments-menu', 'publication-item');
    }

    public function formBeforeSave( $model )
    {
        $model->category = 'publication';
    }

    public function listExtendQuery($query)
    {
        $query->whereCategory('publication');
    }
}
