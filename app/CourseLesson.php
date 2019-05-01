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
    
    //one to many (inverse)
    public function status(){
        return $this->belongsTo('App\Status', 'status_id', 'id');
    }
    
    //one to many through(inverse)
    public function course(){
        return $this->hasOneThrough(
            'App\Course',
            'App\CourseSection',
            'section_id ',
            'course_id ',
            'id',//this table's primary key
            'id'//other table's primary key
        );
    }
    
    //one to many (inverse)
    public function courseSection(){
        return $this->belongsTo('App\CourseSection', 'section_id', 'id');
    }
}
