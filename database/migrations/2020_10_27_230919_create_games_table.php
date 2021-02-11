<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("type");
            $table->year("game_year");
            $table->text("requirements");
            $table->integer("price");
            $table->integer("quantity");
            $table->string("platform");
            $table->string("image");
            $table->foreignId("category_id");
            $table->timestamps();
        });
        Schema::create('game_sale', function (Blueprint $table) {
            $table->id();
            $table->foreignId("sale_id");
            $table->foreignId("game_id");
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
        Schema::dropIfExists('games');
    }
}
