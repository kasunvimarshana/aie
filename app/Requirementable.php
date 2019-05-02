<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requirementable extends Model
{
    //
    // table name
    protected $table = "requirementables";
    // primary key
    protected $primaryKey = 'id';
    // attributes
    protected $attributes = array();
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = array('is_visible', 'status_id', 'requirementable_type', 'requirementable_id', 'name');

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
    
    //one to many (inverse)
    public function requirementable(){
        return $this->morphTo('requirementable', 'requirementable_type', 'requirementable_id');
    }
}
