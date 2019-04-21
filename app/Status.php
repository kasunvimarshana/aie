<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    //
    // table name
    protected $table = "statuses";
    // primary key
    protected $primaryKey = 'id';
    // attributes
    protected $attributes = array();

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = array('is_visible', 'name');

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
    
    //one to many
    public function users(){
        return $this->hasMany('App\User', 'status_id', 'id');
    }
}
