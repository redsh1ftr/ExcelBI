<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserProfile extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_profile', function($table){
			$table->increments('id');
			$table->string('f_name');
			$table->string('m_name');
			$table->string('l_name');
			$table->string('street1');
			$table->string('street2');
			$table->string('city');
			$table->string('state');
			$table->string('zip');
			$table->datetime('dob');
			$table->string('phone');
			$table->string('email');
			$table->datetime('hire_date');
			$table->string('shirt_size');
			$table->string('jacket_size');
			$table->string('active')->nullable;
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
		Schema::drop('user_profile');
	}

}
