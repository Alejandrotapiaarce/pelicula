<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("gender");
            $table->string("language");
            $table->year("production");
            $table->time("duration",0);
            $table->integer("qualification");
            $table->integer("price");
            $table->integer("quantity");
            $table->date("premiere");
            $table->text("summary");
            $table->string("image");
            $table->foreignId("actor_id");
            $table->foreignId("category_id");
            $table->timestamps();
        });
        Schema::create('movie_sale', function (Blueprint $table) {
            $table->id();
            $table->foreignId("sale_id");
            $table->foreignId("movie_id");
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
        Schema::dropIfExists('movies');
    }
}
