<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePeopleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('people', function(Blueprint $table) {
			$table->increments('id');
			$table->string('firstname',100)->nullable();
			$table->string('lastname',100)->nullable();
			$table->string('middlename',100)->nullable();
			$table->integer('age')->unsigned();
			$table->string('gender',100)->nullable();
			$table->string('cell_number',50)->nullable();
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
		Schema::drop('people');
	}

}
