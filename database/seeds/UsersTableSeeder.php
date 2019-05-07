<?php

use Illuminate\Database\Seeder;

use App\User;
use Illuminate\Support\Facades\Hash;
use App\Role;
use App\Permission;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //create a user
        $newUser = User::create([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('password'),
            'is_visible' => false,
            'is_active' => true,
            'status_id' => null,
            'short_title' => 'Admin User'
        ]);
        //search a role
        $devRole = Role::where('slug','super-user')->first();
        //search a permission
        $devPermission = Permission::where('slug','show-event')->first();
        //add role and permission
        $newUser->roles()->attach($devRole);
        $newUser->permissions()->attach($devPermission);
        //
    }
}
