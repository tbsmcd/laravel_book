<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books_tables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', '100');
            $table->bigInteger('bookdetail_id');
            $table->bigInteger('author_id');
            $table->bigInteger('publisher_id');
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
        Schema::dropIfExists('books_tables');
    }
}
