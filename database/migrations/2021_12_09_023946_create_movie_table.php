<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->float('price', 5, 2);
            $table->string('runtime');
            $table->string('rating');
            $table->string('img')->default('app/public/movies/placeholder.png');
            $table->year('year');
            $table->longText('description');
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();
            // $table->enum('timeslot', ['11:00 AM', '1:00 PM', '3:00 PM','6:00 PM']);
            // $table->unsignedBigInteger('genre_id');
            // $table->foreignId('genre_id')->reference('id')->on('genre');
            // $table->string('director');
            // $table->string('stars');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie');
    }
}
