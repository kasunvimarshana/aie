<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorizable extends Model
{
    //
    // table name
    protected $table = "categorizables";
    // primary key
    protected $primaryKey = 'id';
    // attributes
    protected $attributes = array();
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = array('is_visible', 'status_id', 'categorizable_type', 'categorizable_id', 'category_id');

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
    public function categorizable(){
        return $this->morphTo();
    }
    
    //one to many (inverse)
    public function category(){
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }
}
