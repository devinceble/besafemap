<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddLatitudeLongtitudeToPeople extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('people', function(Blueprint $table) {
			$table->string('latitude',100);
                        $table->string('longtidue',100);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('people', function(Blueprint $table) {
			 $table->dropColumn('latitude');
			 $table->dropColumn('longtidue');
		});
	}

}
