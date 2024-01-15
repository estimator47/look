<?php

//use DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Catalogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalogs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('material_id');
            $table->unsignedBigInteger('type_id');
            $table->string('title_en');
            $table->text('info_en');
            $table->string('description_en');
            $table->string('title_ru');
            $table->text('info_ru');
            $table->string('description_ru');
            $table->string('size');
            $table->text('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();

            $table->foreign('type_id')->references('id')->on('types')->onDelete('CASCADE');
            $table->foreign('material_id')->references('id')->on('materials')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('catalogs');
    }
}
