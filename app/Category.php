<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    // table name
    protected $table = "categories";
    // primary key
    protected $primaryKey = 'id';
    // attributes
    protected $attributes = array();
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = array('is_visible', 'status_id', 'name', 'icon_uri', 'has_sub', 'parent_id');

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
    public function categorizables(){
        return $this->hasMany('App\Categorizable', 'category_id', 'id');
    }
    
    //meny to meny through (inverse)
    public function courses(){
        return $this->morphedByMany(
            'App\Course', 
            'categorizable', 
            'categorizables', 
            'category_id',
            'categorizable_id'
        );
    }
}
