<?php namespace Am\Post\Models;

use Model;
use Am\Post\Models\PostMap;
/**
 * Model
 */
class PostDiscover extends Model
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
    public $table = 'am_post_discovers';

    public function beforeDelete()
    {
        $db_post_map = PostMap::wherePostId($this->id)->wherePostType('discover')->first();
       
        if( $db_post_map )
        {
            $db_post_map->delete();
        }
    }
}
