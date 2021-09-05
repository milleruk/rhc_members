<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');


        Role::create(['name' => 'user']);
        /** @var \App\User $user */
        $user = factory(\App\User::class)->create();

        $user->assignRole('user');
        Role::create(['name' => 'player']);
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'captain']);
        Role::create(['name' => 'committee']);

        /** @var \App\User $user */
        $admin = factory(\App\User::class)->create([
            'name' => 'Admin Dev',
            'email' => 'admin@dev.com',
            'password' => bcrypt('123456')
        ]);

        $admin->assignRole('admin');
        $admin->assignRole('captain');
        $admin->assignRole('committee');


        /** @var \App\User $user */
        $admin2 = factory(\App\User::class)->create([
            'name' => 'Captain Dev',
            'email' => 'captain@dev.com',
            'password' => bcrypt('123456')
        ]);

        $admin2->assignRole('admin');
        $admin2->assignRole('captain');

    }
}
