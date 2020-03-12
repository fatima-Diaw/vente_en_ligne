<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProduitsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom')->unique();
            $table->string('description');
            $table->string('qte');
            $table->string('emplacement');
            $table->integer('price');
            $table->integer('categorie_id')->unsigned();
            $table->foreign('categorie_id')-> references ('id')->on('categories')->onDelete ('cascade');
            $table->mediumText('image')->nullable;
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('produits');
    }
}
