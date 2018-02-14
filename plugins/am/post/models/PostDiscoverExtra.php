<?php namespace Am\Post\Models;

use Model;

/**
 * Model
 */
class PostDiscoverExtra extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /**
     * @var array Validation rules
     */
    public $rules = [
        'title' => 'required'
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'am_post_discover_extras';

    public $attachOne = [
        'discoverExtraImage' => 'System\Models\File'
    ];

    public $belongsTo = [
        'discover' => [
            'Am\Post\Models\PostDiscover'
        ]
    ];
}
