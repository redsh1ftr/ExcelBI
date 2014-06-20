<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CertifcationList extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
			Schema::create('certification_list', function($table){
			$table->increments('id');
			$table->string('name');
			$table->string('type');
			$table->string('desc');
			$table->integer('term');
			$table->string('term_');
			$table->string('reminder_term');
			$table->string('reminder_term_');
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
		Schema::drop('certification_list');
	}

}
