<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('roles')->insert([
        'name' => 'admin',
        ]);

        DB::table('roles')->insert([
            'name' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admins'.'@gmail.com',
            'password' => bcrypt('secret'),
        ]);
        DB::table('role_user')->insert([
            'user_id' => '1',
            'role_id' => '1',
        ]);
    }
}
