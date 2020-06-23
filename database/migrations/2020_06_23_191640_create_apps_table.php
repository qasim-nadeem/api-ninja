<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apps', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('user_session_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('token')->nullable();
            $table->timestamps();
        });
        Schema::table('apps', function($table) {
            $table->foreign('user_id')->references('id')->on('users');
        });

        /*
         *
         * for starting app app ids from 786.
         */
        \Illuminate\Support\Facades\DB::update("ALTER TABLE apps AUTO_INCREMENT = 786;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apps');
    }
}
