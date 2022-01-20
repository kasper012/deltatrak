<?php namespace Gadimliestudio\Whitepapers\Models;

use Model;

/**
 * Whitepaper Model
 */
class Whitepaper extends Model
{
    use \October\Rain\Database\Traits\Validation;



    /**
     * @var string The database table used by the model.
     */
    public $table = 'gadimliestudio_whitepapers_whitepapers';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    public $translatable = [
        'title',
        'description',
        'full_description',      
    ];



    /**
     * @var array Fillable fields
     */
    protected $fillable = [
    ];

    /**
     * @var array Validation rules for attributes
     */
    public $rules = [];

    /**
     * @var array Attributes to be cast to native types
     */
    protected $casts = [];

    /**
     * @var array Attributes to be cast to JSON
     */
    protected $jsonable = [
        'key_features',
        'specifications'
    ];

    /**
     * @var array Attributes to be appended to the API representation of the model (ex. toArray())
     */
    protected $appends = [];

    /**
     * @var array Attributes to be removed from the API representation of the model (ex. toArray())
     */
    protected $hidden = [];

    /**
     * @var array Attributes to be cast to Argon (Carbon) instances
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $hasOneThrough = [];
    public $hasManyThrough = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
