<?php

    $user = $request->user(); //getting the current logged in user
    dd($user->hasRole('admin','editor')); // and so on

    dd($user->can('permission-slug'));

    $ php artisan make:seeder PermissionTableSeeder
    $ php artisan make:seeder RoleTableSeeder
    $ php artisan make:seeder UserTableSeeder
        
    /////////////////////////////////////////
    //UserTableSeeder.php
    $dev_role = Role::where('slug','developer')->first();
    $manager_role = Role::where('slug', 'manager')->first();
    $dev_perm = Permission::where('slug','create-tasks')->first();
    $manager_perm = Permission::where('slug','edit-users')->first();

    $developer = new User();
    $developer->name = 'Usama Muneer';
    $developer->email = 'usama@thewebtier.com';
    $developer->password = bcrypt('secret');
    $developer->save();
    $developer->roles()->attach($dev_role);
    $developer->permissions()->attach($dev_perm);

    $manager = new User();
    $manager->name = 'Asad Butt';
    $manager->email = 'asad@thewebtier.com';
    $manager->password = bcrypt('secret');
    $manager->save();
    $manager->roles()->attach($manager_role);
    $manager->permissions()->attach($manager_perm);
    /////////////////////////////////////////
    /////////////////////////////////////////
    $dev_permission = Permission::where('slug','create-tasks')->first();
    $manager_permission = Permission::where('slug', 'edit-users')->first();

    //RoleTableSeeder.php
    $dev_role = new Role();
    $dev_role->slug = 'developer';
    $dev_role->name = 'Front-end Developer';
    $dev_role->save();
    $dev_role->permissions()->attach($dev_permission);

    $manager_role = new Role();
    $manager_role->slug = 'manager';
    $manager_role->name = 'Assistant Manager';
    $manager_role->save();
    $manager_role->permissions()->attach($manager_permission);
    /////////////////////////////////////////
    /////////////////////////////////////////
    //PermissionTableSeeder.php
    $dev_role = Role::where('slug','developer')->first();
    $manager_role = Role::where('slug', 'manager')->first();

    $createTasks = new Permission();
    $createTasks->slug = 'create-tasks';
    $createTasks->name = 'Create Tasks';
    $createTasks->save();
    $createTasks->roles()->attach($dev_role);

    $editUsers = new Permission();
    $editUsers->slug = 'edit-users';
    $editUsers->name = 'Edit Users';
    $editUsers->save();
    $editUsers->roles()->attach($manager_role);
    /////////////////////////////////////////

    $user = $request->user();
    dd($user->hasRole('developer')); //will return true, if user has role
    dd($user->givePermissionsTo('create-tasks')); // will return permission, if not null
    dd($user->can('create-tasks')); // will return true, if user has permission

    @role('admin')
        <h1>Hello from the admin</h1>
    @endrole

?>