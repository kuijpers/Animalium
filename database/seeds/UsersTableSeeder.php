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
			'name'        	=> 'Dennis Kuijpers',
			'email'         => 'dennis@test.nl',
			'password'      => bcrypt('welkom'),
			'created_at'	=> date('Y-m-d H:i:s'),
			'updated_at'    => date('Y-m-d H:i:s'),
		]);
    }
}
