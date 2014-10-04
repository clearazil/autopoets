<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalendarTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('calendar', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->string('address');
			$table->text('description');
			$table->time('date');
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
		Schema::table('calendar', function(Blueprint $table)
		{
			Schema::drop('calendar');
		});
	}

}
