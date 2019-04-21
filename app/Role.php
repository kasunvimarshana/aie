<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Permission;

class Role extends Model
{
    //
    //many to many
    public function permissions() {
        return $this->belongsToMany(Permission::class, 'role_permissions');
    }
}
