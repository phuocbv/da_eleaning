<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModifyUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function ($table) {
            $table->string('avatar')->nullable();
            $table->boolean('is_active')->default(false);
            $table->integer('role');
            $table->string('facebook_id')->unique()->nullable();
            $table->string('google_id')->unique()->nullable();
            $table->string('twitter_id')->unique()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function($table) {
            $table->dropColumn(['avatar', 'is_active', 'role', 'facebook_id', 'google_id', 'twitter_id']);
        });
    }
}
