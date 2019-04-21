<?php

namespace App\Permissions;

use App\Permission;
use App\Role;

trait HasPermissionsTrait{

    //many to many
    public function roles(){
        return $this->belongsToMany(Role::class, 'user_roles');
    }

    //many to many
    public function permissions(){
        return $this->belongsToMany(Permission::class, 'user_permissions');
    }
    
    //function
    public function hasRole( ... $roles ){
        foreach ($roles as $role) {
            if ($this->roles->contains('slug', $role)){
                return true;
            }
        }
        return false;
    }
    
    /*
    //function
    protected function hasPermissionTo($permission){
        return $this->hasPermission($permission);
    }
    */
    
    //function
    public function hasPermissionTo($permission) {
        return $this->hasPermissionThroughRole($permission) || $this->hasPermission($permission);
    }

    //function
    protected function hasPermission($permission){
        return (bool) $this->permissions->where('slug', $permission->slug)->count();
    }
    
    //function
    public function hasPermissionThroughRole($permission) {
        foreach ($permission->roles as $role){
            if($this->roles->contains($role)) {
                return true;
            }
        }
        return false;
    }
    
    //function
    public function givePermissionsTo(... $permissions) {
        $permissions = $this->getAllPermissions($permissions);
        //dd($permissions);
        if($permissions === null) {
            return $this;
        }
        $this->permissions()->saveMany($permissions);
        return $this;
    }
    
    public function deletePermissions( ... $permissions ) {
        $permissions = $this->getAllPermissions($permissions);
        $this->permissions()->detach($permissions);
        return $this;
    }
}