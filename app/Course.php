<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    // table name
    protected $table = "courses";
    // primary key
    protected $primaryKey = 'id';
    // attributes
    protected $attributes = array();
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = array('is_visible', 'status_id', 'title', 'short_description', 'description', 'is_free', 'price', 'has_discount', 'discount', 'thumbnail_uri');

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    //protected $hidden = array();

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    //protected $casts = array();
}
