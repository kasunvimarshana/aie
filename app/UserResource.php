<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserResource extends Model
{
    //
    // table name
    protected $table = "user_resources";
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
}
