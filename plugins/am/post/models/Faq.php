<?php namespace Am\Post\Models;

use Model;

use Am\Post\Models\PostMap;

/**
 * Model
 */
class Faq extends Model
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
    public $table = 'am_post_faqs';

    public function beforeDelete()
    {
        $db_post_map = PostMap::wherePostId($this->id)->wherePostType('faqs')->first();
       
        if( $db_post_map )
        {
            $db_post_map->delete();
        }
    }
}
