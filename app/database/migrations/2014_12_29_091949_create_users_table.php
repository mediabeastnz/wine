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

		Schema::create('users', function($table)
		{
			$table->increments('id');
			$table->string('firstname');
			$table->string('lastname');
			$table->string('email');
			$table->string('password');
			$table->rememberToken();
			$table->enum('sex', array('male', 'female'));
			$table->string('avatar');
			$table->timestamps();
			$table->softDeletes();
		});


	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('users');
	}

}