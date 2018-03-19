<?php namespace am\Variables\Models;

use Model;
use Am\Post\Models\PostMap;

/**
 * Model
 */
class Setting extends Model
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
    public $table = 'am_variables_settings';


    public function afterSave()
    {
        $db_post_map = PostMap::all();

        foreach( $db_post_map as $dp )
        {
            $dp->post_url_link = $this->setUrlArticle( $dp->id, $dp->slug);
            $dp->save();
        }
    }


    public function setUrlArticle( $id, $slug )
    {
        $post_url = sprintf( '%s/article/%s/%s', $this->base_url_link, $id, $slug );

        return $post_url;
    }

}
