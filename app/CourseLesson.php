<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseLesson extends Model
{
    //
    // table name
    protected $table = "course_lessons";
    // primary key
    protected $primaryKey = 'id';
    // attributes
    protected $attributes = array();
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = array('is_visible', 'status_id', 'title', 'section_id', 'summary', 'thumbnail_uri');

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
