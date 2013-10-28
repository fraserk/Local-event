<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class PivotEvntUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('evnt_user', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('evnt_id')->unsigned()->index();
			$table->integer('user_id')->unsigned()->index();
			$table->foreign('evnt_id')->references('id')->on('evnts')->onDelete('cascade');
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
		});
	}



	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('evnt_user');
	}

}
