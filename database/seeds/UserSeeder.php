<?php

use Illuminate\Database\Seeder;
use App\User as User;  

class UserSeeder extends Seeder {

	public function run() 
	{
		User::truncate();
		User::create([
			'name'				=> 'Eddy Subratha',
			'slug'				=> str_random(5),
			'email'				=> 'eddy.subratha@gmail.com',
			'password'			=> Hash::make('111111'),
			'address'			=> 'This is a description for Product 1',
			'type'				=> 'Owner',
			'phone'				=> '123-123-123',
			'photo'				=> str_random(5).'.jpg'
		]);
		User::create([
			'name'				=> 'Subratha Eddy',
			'slug'				=> str_random(5),
			'email'				=> 'mucill@gmail.com',
			'password'			=> Hash::make('111111'),
			'address'			=> 'This is a description for Product 1',
			'type'				=> 'Member',
			'phone'				=> '123-123-123',
			'photo'				=> str_random(5).'.jpg'
		]);
	}

}