<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShareCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('share_courses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_share_id')->unsigned();
            $table->foreign('user_share_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('user_receive_id')->unsigned();
            $table->foreign('user_receive_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('course_id')->unsigned();
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
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
        Schema::dropIfExists('share_courses');
    }
}
