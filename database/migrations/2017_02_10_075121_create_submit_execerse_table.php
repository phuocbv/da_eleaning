<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmitExecerseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submit_execerses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->dateTime('time');
            $table->string('status')->default('init');
            $table->boolean('review')->default(false);
            $table->string('url');
            $table->integer('point')->default(0);
            $table->integer('share_course_id')->unsigned();
            $table->foreign('share_course_id')->references('id')->on('share_courses')->onDelete('cascade');
            $table->integer('index_id')->unsigned();
            $table->foreign('index_id')->references('id')->on('indexs')->onDelete('cascade');
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
        Schema::dropIfExists('submit_execerses');
    }
}
