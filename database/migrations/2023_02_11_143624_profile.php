<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles',function (Blueprint $table){
            $table->uuid('id')->primary();
            $table->integer('user_id')->unsigned();
            $table->string('user_name');
            $table->binary('display_pic')->nullable();
            $table->string('last_name');
            $table->string('first_name');
            $table->text('bio')->nullable();
            $table->timestamps();
        });

        Schema::table('profiles', function($table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('profiles');
    }
};
