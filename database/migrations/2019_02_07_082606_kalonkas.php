<?php

//use DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Kalonkas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kalonkas', function (Blueprint $table) {
            $table->id();
            $table->string('title_uz');
            $table->text('info_uz');
            $table->string('title_ru');
            $table->text('info_ru');
            $table->string('source');
            $table->string('image');
            $table->integer('click')->default('0');
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
       Schema::dropIfExists('kalonkas');
    }
}
