<?php

use Illuminate\Database\Migrations\Migration;

class AddSoftdeleteToEvnts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('evnts', function($t)
			{
				$t->softdeletes();
			}
			);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}