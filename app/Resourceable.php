<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resourceable extends Model
{
    //
    // table name
    protected $table = "resourceables";
    // primary key
    protected $primaryKey = 'id';
    // attributes
    protected $attributes = array();
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = array('is_visible', 'status_id', 'resourceable_type', 'resourceable_id', 'user_id', 'source_type_id', 'source_uri');

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
    public function resourceable(){
        return $this->morphTo('resourceable', 'resourceable_type', 'resourceable_id');
    }
}
