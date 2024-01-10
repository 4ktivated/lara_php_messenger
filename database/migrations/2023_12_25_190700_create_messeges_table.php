<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessegesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('messeges', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('sender');
			$table->string('recipient');
			$table->text('messege');
			$table->boolean('status')->default(0);
			$table->timestamps('date');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('messeges');
	}

}
