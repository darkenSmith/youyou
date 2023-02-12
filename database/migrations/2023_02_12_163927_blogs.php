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
        Schema::create('blogs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->integer('user_id')->unsigned();
            $table->string('title');
            $table->string('stub');
            $table->jsonb('tags');
            $table->text('content');
            $table->boolean('is_approved');
            $table->boolean('is_public');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreignUuid('profile_id')->references('id')->on('profiles');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('blogs');
    }
};
