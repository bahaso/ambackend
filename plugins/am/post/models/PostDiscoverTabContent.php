<?php namespace Am\Post\Models;

use Model;

/**
 * Model
 */
class PostDiscoverTabContent extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'am_post_discover_tab_contents';

    public $attachOne = [
        'tabContentImage' => 'System\Models\File'
    ];

    public $belongsTo = [
        'discover_tab' => [
            'Am\Post\Models\PostDiscoverTab'
        ]
    ];
}
