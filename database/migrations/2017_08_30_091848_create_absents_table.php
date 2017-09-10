<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absents',function(Blueprint $table){
            $table->increments('id');
            $table->integer('people_id')->unsigned();
            $table->string('date_absent');
            $table->string('status');
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
    public function down()
    {
        Schema::drop('absents');
    }
}
