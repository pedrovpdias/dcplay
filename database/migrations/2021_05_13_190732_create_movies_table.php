<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use SebastianBergmann\Timer\Duration;

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
            $table->string('name')->nullable($value = false);
            $table->text('synopsis')->nullable($value = false);
            $table->integer('duration')->nullable($value = false);
            $table->integer('ratting')->nullable($value = false);
            $table->date('launch')->nullable($value = false);
            $table->string('director');
            $table->string('genres');
            $table->string('writers');
            $table->string('collection')->nullable($value = true);
            $table->integer('highlight')->nullable($value = false)->default(0);
            $table->string('url')->nullable($value = false);
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
