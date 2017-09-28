<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comments', function(Blueprint $table)
        {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('game_id')->references('id')->on('games');

        });

        Schema::table('category_game', function(Blueprint $table)
        {
            $table->foreign('category_id')->references('id')->on('categories')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('game_id')->references('id')->on('games')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::table('game_platform', function(Blueprint $table)
        {
            $table->foreign('game_id')->references('id')->on('games')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('platform_id')->references('id')->on('platforms')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
