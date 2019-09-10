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
		DB::table('personas')->insert([
			'id' => 1,
            'nombre' => 'admin'
        ]);
		
         DB::table('users')->insert([
			'id' => 1,
            'usuario' => 'admin',
			'idrol' => 1,
			'remember_token' => str_random(10),
            'password' => bcrypt('password')
        ]);
	
    }
}
