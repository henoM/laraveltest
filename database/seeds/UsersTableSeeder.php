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
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admins@gmail.com',
            'password' => bcrypt('secret'),
            'role_id' => '1',
            'is_active' => 1,
            'address' =>'street'
        ]);
    }
}
