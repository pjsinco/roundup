<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('items', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
            $table->integer('wp_id')->unsigned();
            $table->enum('types', ['feature', 'article-major', 
                'article-minor', 'quote', 'ad']);
            $table->string('kicker', 140);
            $table->string('title', 256);
            $table->string('excerpt', 512);
            $table->integer('roundup_id')->unsigned();
            $table->string('link');

            $table->foreign('roundup_id')
                ->references('id')
                ->on('roundups')
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
		Schema::drop('items');
	}

}
