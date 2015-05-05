<?php

use Illuminate\Database\Seeder;
use App\Http\Models\Category as Category;  

class CategorySeeder extends Seeder {

	public function run() 
	{
		Category::truncate();
		Category::create([
			'name'			=> 'Themes',
			'slug'			=> 'themes'
		]);

		Category::create([
			'name'			=> 'Plugins',
			'slug'			=> 'plugins'
		]);

		Category::create([
			'name'			=> 'Reports',
			'slug'			=> 'report'
		]);

		Category::create([
			'name'			=> 'Apps',
			'slug'			=> 'apps'
		]);
	}

}