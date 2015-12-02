<?php namespace RainLab\Blog\Models;

use Model;

/**
 * IMsg Model
 */
class IMsg extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'rainlab_blog_i_msgs';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}