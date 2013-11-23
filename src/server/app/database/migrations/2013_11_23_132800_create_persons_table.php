<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('persons', function(Blueprint $table) {
			$table->increments('id');
			$table->string('firstname',100)->nullable();
			$table->string('lastname',100)->nullable();
			$table->string('middlename',100)->nullable();
			$table->integer('age')->unsigned();
			$table->string('gender',100)->nullable();
			$table->integer('cell_number')->unsigned();
			$table->string('person_status',100)->nullable();
			$table->string('photo',100)->nullable();
			$table->boolean('status')->default(1);
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
		Schema::drop('persons');
	}

}
