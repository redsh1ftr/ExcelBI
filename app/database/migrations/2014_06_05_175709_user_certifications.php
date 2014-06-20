<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserCertifications extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_certs', function($table){
			$table->increments('id');
			$table->integer('uid');
			$table->string('cert_id');
			$table->string('type');
			$table->DateTime('cert_recd');
			$table->DateTime('cert_exp');
			$table->DateTime('reminder');
			$table->string('certificate')->nullable();
			$table->integer('active')->nullable();
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
		Schema::drop('user_certs');
	}

}
