<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ads', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
            $table->string('ad_link', 512);
            $table->string('img_src', 512);
            $table->string('title', 512);
            $table->integer('email_id')->unsigned();

            $table->foreign('email_id')
                ->references('id')
                ->on('emails');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ads');
	}

}
