<?php

use Illuminate\Database\Seeder;

use App\Role;
use App\Permission;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //search permission
        $devPermission = Permission::where('slug','edit-event')->first();
        //create role
        $newRole = Role::create([
            'slug' => 'super-user',
            'name' => 'Super User'
        ]);
        //attach role permission
        $newRole->permissions()->attach($devPermission);
    }
}
