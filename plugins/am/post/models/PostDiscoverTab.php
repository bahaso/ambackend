<?php namespace Am\Post\Models;

use Model;

/**
 * Model
 */
class PostDiscoverTab extends Model
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
    public $table = 'am_post_discover_tabs';


    public $attachOne = [
        'discoverTabImage' => 'System\Models\File'
    ];

    public $belongsTo = [
        'discover' => [
            'Am\Post\Models\PostDiscover'
        ]
    ];
}
