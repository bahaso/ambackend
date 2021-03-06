<?php namespace am\Variables\Models;

use Model;

/**
 * Model
 */
class Sponsor extends Model
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
        'title' => 'required',
        'img_sponsor' => 'required'  
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'am_variables_sponsors';

    public $attachOne = [
        'img_sponsor' => 'System\Models\File'
    ];
}
