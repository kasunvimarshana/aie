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
    
    //one to many
    public function likeables(){
        return $this->hasMany('App\Likeable', 'user_id', 'id');
    }
    
    //one to many
    public function publishables(){
        return $this->hasMany('App\Publishable', 'published_user_id', 'id');
    }
    
    //one to many
    public function purchasables(){
        return $this->hasMany('App\Purchasable', 'purchased_user_id', 'id');
    }
    
    //one to many
    public function resourceables(){
        return $this->hasMany('App\Resourceable', 'user_id', 'id');
    }
    
    //one to many
    public function watchables(){
        return $this->hasMany('App\Watchable', 'user_id', 'id');
    }
    
    //one to many
    public function wishables(){
        return $this->hasMany('App\Wishable', 'user_id', 'id');
    }
    
    //meny to meny through (inverse)
    public function likeableCourses(){
        return $this->morphedByMany(
            'App\Course', 
            'likeable', 
            'likeables', 
            'user_id',
            'likeable_id'
        );
    }
    
    //meny to meny through (inverse)
    public function publishableCourses(){
        return $this->morphedByMany(
            'App\Course', 
            'publishable', 
            'publishables', 
            'published_user_id',
            'publishable_id'
        );
    }
    
    //meny to meny through (inverse)
    public function purchasableCourses(){
        return $this->morphedByMany(
            'App\Purchasable', 
            'purchasable', 
            'purchasables', 
            'purchased_user_id',
            'purchasable_id'
        );
    }
    
    //meny to meny through (inverse)
    public function resourceableCourses(){
        return $this->morphedByMany(
            'App\Resourceable', 
            'resourceable', 
            'resourceables', 
            'user_id',
            'resourceable_id'
        );
    }
    
    //meny to meny through (inverse)
    public function watchableCourses(){
        return $this->morphedByMany(
            'App\Watchable', 
            'watchable', 
            'watchables', 
            'user_id',
            'watchable_id'
        );
    }
    
    //meny to meny through (inverse)
    public function wishableCourses(){
        return $this->morphedByMany(
            'App\Wishable', 
            'wishable', 
            'wishables', 
            'user_id',
            'wishable_id'
        );
    }
    
}