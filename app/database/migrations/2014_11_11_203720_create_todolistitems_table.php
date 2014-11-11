<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTodolistitemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('todolistitems', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('list_id')->unsigned();
			$table->foreign('list_id')->references('id')->on('todolists');
			$table->string('task',100);
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
		Schema::drop('todolistitems');
	}

}
