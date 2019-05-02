<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchasable extends Model
{
    //
    // table name
    protected $table = "purchasables";
    // primary key
    protected $primaryKey = 'id';
    // attributes
    protected $attributes = array();
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = array('is_visible', 'status_id', 'purchasable_type', 'purchasable_id', 'purchased_user_id');

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
    public function purchasedUser(){
        return $this->belongsTo('App\User', 'purchased_user_id', 'id');
    }
    
    //one to many (inverse)
    public function purchasable(){
        return $this->morphTo();
    }
}
