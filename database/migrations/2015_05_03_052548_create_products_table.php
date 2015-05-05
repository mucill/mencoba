<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->bigInteger('user_id');
			$table->bigInteger('category_id');
			$table->string('name', 100);
			$table->string('slug', 30);
			$table->text('description');
			$table->decimal('price',10,0);
			$table->text('keyword');
			$table->enum('status',['Rejected','Accepted','Pending','Reviewed']);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
	}

}
