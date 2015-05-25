<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
            $table->integer('wp_id')->unsigned();
            $table->enum('type', ['feature', 'major', 'minor']);
            $table->boolean('bottom_rule');
            $table->string('kicker', 140);
            $table->string('title');
            $table->string('excerpt', 512);
            $table->integer('email_id')->unsigned()->nullable();
            $table->string('link', 512);
            $table->string('img_src', 512);
            $table->string('img_alt');

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
		Schema::drop('articles');
	}

}
