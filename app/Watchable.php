<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Watchable extends Model
{
    //
    // table name
    protected $table = "watchables";
    // primary key
    protected $primaryKey = 'id';
    // attributes
    protected $attributes = array();
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = array('is_visible', 'status_id', 'watchable_type', 'watchable_id', 'user_id');

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
    public function user(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    
    //one to many (inverse)
    public function watchable(){
        return $this->morphTo();
    }
}
