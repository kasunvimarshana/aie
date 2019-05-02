<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SourceType extends Model
{
    //
    // table name
    protected $table = "source_types";
    // primary key
    protected $primaryKey = 'id';
    // attributes
    protected $attributes = array();
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = array('is_visible', 'status_id', 'name', 'icon_uri');

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
    
    //one to many
    public function resourceables(){
        return $this->hasMany('App\Resourceable', 'source_type_id', 'id');
    }
    
    //meny to meny through (inverse)
    public function courseLessons(){
        return $this->morphedByMany(
            'App\CourseLesson', 
            'resourceable', 
            'resourceables', 
            'source_type_id',
            'resourceable_id'
        );
    }
    
}
