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
			$table->increments('id');
			$table->string('username','30');
			$table->string('password','30');
			$table->string('email', '50');
			$table->string('phone', 12)->nullable();
			$table->string('name', 50);
			$table->boolean('blocked')->default(0);
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
		Schema::drop('users', function(Blueprint $table)
		{
			$table->drop('users');
		});
	}

}