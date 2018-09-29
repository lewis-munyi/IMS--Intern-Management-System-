<?php

use Illuminate\Database\Seeder;
use App\Role;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = new Role();
        $role_user->name = 'Intern';
        $role_user->description = 'An intern';
        $role_user->save();

        $role_author = new Role();
        $role_author->name = 'Super Admin';
        $role_author->description = 'An Author';
        $role_author->save();

        $role_admin = new Role();
        $role_admin->name = 'Admin';
        $role_admin->description = 'An Admin';
        $role_admin->save();

        $role_admin = new Role();
        $role_admin->name = 'Human resource';
        $role_admin->description = 'Human resource';
        $role_admin->save();
    }
}
