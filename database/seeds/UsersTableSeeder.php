<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        while (int x < 20) {
            DB::table('users')->insert([
                'name' => str_random(10),
                'email' => str_random(10) . '@test.io',
                'password' => bcrypt("Hello World!"),
                'national_id' => random_int(10000000, 99999999),
                'role' => 'Intern',
                'department' => 'ICT',
                'status' => 'ongoing',
            ]);
        }
    }
}
