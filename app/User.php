<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    // table name
    protected $table = "users";
    // primary key
    protected $primaryKey = 'id';
    // attributes
    protected $attributes = array();
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = array('name', 'email', 'email_verified_at', 'password', 'is_visible', 'status_id', 'facebook_link', 'twitter_link', 'linkedin_link', 'short_title', 'biography', 'dir_uri', 'image_uri', 'stripe_public_key', 'stripe_secret_key');

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = array('password', 'remember_token');

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = array('email_verified_at' => 'datetime');
    
    //one to many (inverse)
    public function status(){
        return $this->belongsTo('App\Status', 'status_id', 'id');
    }
}