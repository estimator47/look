<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
 		Schema::table('types', function(Blueprint $table) {
			$table->foreign('category_id')->references('id')->on('categories')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
        Schema::table('catalogs', function(Blueprint $table) {
            $table->foreign('type_id')->references('id')->on('types')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
	}

	public function down()
	{
		Schema::table('types', function(Blueprint $table) {
			$table->dropForeign('categories_category_id_foreign');
		});
        Schema::table('catalogs', function(Blueprint $table) {
            $table->dropForeign('types_type_id_foreign');
        });
	}
}
