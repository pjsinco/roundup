<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('quotes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
            $table->string('quote', 512);
            $table->string('speaker');
            $table->string('context')->nullable();
            $table->string('link');
            $table->integer('email_id')->unsigned()->nullable();

            $table->foreign('email_id')
                ->references('id')
                ->on('emails')
                ->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('quotes');
	}

}
