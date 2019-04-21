<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Role;

class Permission extends Model
{
    //
    //many to many
    public function roles() {
        return $this->belongsToMany(Role::class, 'role_permissions');
    }
}
