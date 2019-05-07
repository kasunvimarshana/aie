<?php

use Illuminate\Database\Seeder;

use App\Permission;
use App\Role;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //search role
        $devRole = Role::where('slug','super-user')->first();
        //create permission
        $newPermission = Permission::create([
            'slug' => 'create-event',
            'name' => 'Create Event'
        ]);
        Permission::create([
            'slug' => 'edit-event',
            'name' => 'Edit Event'
        ]);
        Permission::create([
            'slug' => 'show-event',
            'name' => 'Show Event'
        ]);
        //attach permission role
        $newPermission->roles()->attach($devRole);
    }
}
