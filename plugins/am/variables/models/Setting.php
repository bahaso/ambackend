<?php namespace am\Variables\Models;

use Model;

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
}
