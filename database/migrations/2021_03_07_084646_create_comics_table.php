<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->text('jingle');
            $table->string('title', 50);
            $table->text('description');
            $table->string('price', 20);
            $table->string('author', 50);
            $table->string('artist', 50);
            $table->text('cover');
            $table->text('poster');
            $table->boolean('available');
            $table->integer('volume');
            $table->integer('pages');
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
        Schema::dropIfExists('comics');
    }
}
