<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_intern = Role::where('name', 'Intern')->first();
        $role_super_admin = Role::where('name', 'Super Admin')->first();
        $role_admin = Role::where('name', 'Admin')->first();
        $role_hr = Role::where('name', 'Human Resource')->first();

        $superadmin = new User();
        $superadmin->name = 'Mark Muigai';
        $superadmin->email = 'superadmin@gmail.com';
        $superadmin->password = bcrypt('superadmin');
        $superadmin->save();
        $superadmin->roles()->attach($role_super_admin);

        $admin = new User();
        $admin->name = 'Lewis Munyi';
        $admin->email = 'admin@gmail.com';
        $admin->password = bcrypt('admin');
        $admin->save();
        $admin->roles()->attach($role_admin);

        $intern = new User();
        $intern->name = 'Santana Santos';
        $intern->email = 'intern@gmail.com';
        $intern->password = bcrypt('intern');
        $intern->save();
        $intern->roles()->attach($role_intern);

        $hr = new User();
        $hr->name = 'Johnte Mzee';
        $hr->email = 'hr@gmail.com';
        $hr->password = bcrypt('humanresource');
        $hr->save();
        $hr->roles()->attach($role_hr);

    }
}
