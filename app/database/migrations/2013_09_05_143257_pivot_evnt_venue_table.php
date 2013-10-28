<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class PivotEvntVenueTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('evnt_venue', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('evnt_id')->unsigned()->index();
			$table->integer('venue_id')->unsigned()->index();
			$table->foreign('evnt_id')->references('id')->on('evnts')->onDelete('cascade');
			$table->foreign('venue_id')->references('id')->on('venues')->onDelete('cascade');
		});
	}



	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('evnt_venue');
	}

}
