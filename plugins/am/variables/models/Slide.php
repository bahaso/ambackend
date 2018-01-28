<?php namespace am\Variables\Models;

use Model;

/**
 * Model
 */
class Slide extends Model
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
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'am_variables_slides';

    public $attachOne = [
        'img_slide' => 'System\Models\File'
    ];
}
