<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPublish extends Model
{
    //
    // table name
    protected $table = "user_publishes";
    // primary key
    protected $primaryKey = 'id';
    // attributes
    protected $attributes = array();
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = array('is_visible', 'status_id', 'publishable_type', 'publishable_id', 'published_user_id');

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
