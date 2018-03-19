<?php namespace am\Attachments\Models;

use Model;

use Am\Post\Models\PostMap;
use Benfreke\Menumanager\Models\Menu;
/**
 * Model
 */
class Publication extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var array Validation rules
     */
    public $rules = [
        'title' => 'required'
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'am_attachments_';

    public $attachOne = [
        'datafile' => 'System\Models\File'
    ];

    public $belongsTo = [
        'post_map' => 'Am\Post\Models\PostMap'
    ];

    public function beforeDelete()
    {
        $db_post_map = PostMap::wherePostId($this->id)->wherePostType('publication')->first();
       
        if( $db_post_map )
        {
            $db_menu = Menu::wherePostMapId( $db_post_map->id )->first();

            if( $db_menu )
            {
                $db_menu->post_map_id = NULL;
                $db_menu->save();
            }
            
            $db_post_map->delete();
        }
    }
}
