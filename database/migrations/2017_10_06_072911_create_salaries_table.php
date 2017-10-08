<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalariesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('salaries', function (Blueprint $table) {
				$table->increments('id');
				$table->integer('people_id')->unsigned();
				$table->string('date_salary');
				$table->string('salary');
				$table->timestamps();

				$table->foreign('people_id')->references('id')->on('peoples')->onDelete('cascade')->onUpdate('cascade');
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('salaries');
	}
}
