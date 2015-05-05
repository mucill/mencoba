<?php

use Illuminate\Database\Seeder;
use App\Http\Models\Products as Products;  

class ProductSeeder extends Seeder {

	public function run() 
	{
		Products::truncate();
		Products::create([
			'user_id'		=> '1',
			'category_id'	=> '2',
			'name'			=> 'Product 1',
			'slug'			=> 'product-1',
			'description'	=> 'This is a description for Product 1',
			'price'			=> '50000',
			'keyword'		=> 'product,theme,free',
			'status'		=> 'Accepted'
		]);

		Products::create([
			'user_id'		=> '1',
			'category_id'	=> '1',
			'name'			=> 'Product 2',
			'slug'			=> 'product-2',
			'description'	=> 'This is a description for Product 2',
			'price'			=> '60000',
			'keyword'		=> 'product,theme,free',
			'status'		=> 'Accepted'
		]);

		Products::create([
			'user_id'		=> '2',
			'category_id'	=> '1',
			'name'			=> 'Product 3',
			'slug'			=> 'product-3',
			'description'	=> 'This is a description for Product 3',
			'price'			=> '550000',
			'keyword'		=> 'product,theme,free',
			'status'		=> 'Rejected'
		]);

		Products::create([
			'user_id'		=> '2',
			'category_id'	=> '3',
			'name'			=> 'Product 4',
			'slug'			=> 'product-4',
			'description'	=> 'This is a description for Product 4',
			'price'			=> '750000',
			'keyword'		=> 'product,theme,free',
			'status'		=> 'Pending'
		]);
	}

}