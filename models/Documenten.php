<?php namespace Bsbvolmachten\Documenten\Models;

use Model;

/**
 * Model
 */
class Documenten extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable;

    public $attachOne = [
        'file' => 'System\Models\File'
    ];
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'bsbvolmachten_documenten_main';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'title' => 'required',
        'category' => 'required'
    ];
}
