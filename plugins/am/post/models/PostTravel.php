<?php namespace Am\Post\Models;

use Model;

/**
 * Model
 */
class PostTravel extends Model
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
    public $table = 'am_post_travels';

    public $attachOne = [
        'travelImage' => 'System\Models\File'
    ];
}
