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
			'email' => 'admin@cubiczx.com',
			'password' => bcrypt('admin'),
			'name' => 'Admin'
		]);
		DB::table('users')->insert([
			'email' => 'user@cubiczx.com',
			'password' => bcrypt('user'),
			'name' => 'user'
		]);  
    }
}
