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
        user::create([

          'name' => 'Fer',
          'email' => 'fer@test.com',
          'password' => bcrypt('123123')
        ])
    }
}
