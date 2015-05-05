<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->string('name',150);
			$table->string('slug',30);			
			$table->string('email')->unique();
			$table->enum('type',['Owner','Member']);
			$table->string('password', 60);
			$table->text('address');
			$table->string('phone', 20);
			$table->rememberToken();
			$table->string('photo', 150);
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
		Schema::drop('users');
	}

}
