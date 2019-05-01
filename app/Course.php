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
    
    //one to many (inverse)
    public function status(){
        return $this->belongsTo('App\Status', 'status_id', 'id');
    }
    
    //one to one (morph)
    public function publishable(){
        return $this->morphOne('App\Publishable', 'publishable');
    }
    
    //one to many (morph)
    public function categorizables(){
        return $this->morphMany('App\Categorizable', 'categorizable');
    }
    
    //many to many through (morph)
    public function categories(){
        return $this->morphToMany(
            'App\Category',
            'categorizable',
            'categorizables',
            'category_id',
            'categorizable_id'
        );
    }
    
    //one to many (morph)
    public function outcomeable(){
        return $this->morphMany('App\Outcomeable', 'outcomeable');
    }
    
    //one to many (morph)
    public function requirementable(){
        return $this->morphMany('App\Requirementable', 'requirementable');
    }
    
    //one to many (morph)
    public function likeables(){
        return $this->morphMany('App\Likeable', 'likeable');
    }
    
    //one to many (morph)
    public function watchables(){
        return $this->morphMany('App\Watchable', 'watchable');
    }
    
    //one to many (morph)
    public function wishables(){
        return $this->morphMany('App\Wishable', 'wishable');
    }
    
    //one to many
    public function courseSections(){
        return $this->hasMany('App\CourseSection', 'course_id', 'id');
    }
    
    //one to many through
    public function courseLessons(){
        return $this->hasManyThrough(
            'App\CourseLesson',
            'App\CourseSection',
            'course_id',
            'section_id',
            'id',//this table's primary key
            'id'//other table's primary key
        );
    }
    
}
