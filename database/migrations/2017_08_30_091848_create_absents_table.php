<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsentsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('absents', function (Blueprint $table) {
				$table->increments('id');
				$table->integer('people_id')->unsigned();
				$table->string('date_absent');
				$table->string('status');
				$table->string('bill');
				$table->timestamps();
				$table->softDeletes();

				$table->foreign('people_id')->references('id')->on('peoples')->onDelete('cascade')->onUpdate('cascade');
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('absents');
	}
}
