<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('series', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("season");
            $table->string("language");
            $table->string("chapter");
            $table->year("premiere");
            $table->string("gender");
            $table->string("image");
            $table->foreignId("category_id");
            $table->timestamps();
        });
        Schema::create('sale_serie', function (Blueprint $table) {
            $table->id();
            $table->foreignId("sale_id");
            $table->foreignId("serie_id");
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
        Schema::dropIfExists('series');
    }
}
