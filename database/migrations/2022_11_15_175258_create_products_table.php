<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories_products', function (Blueprint $table) {
            $table->id('id')->index('cat_id');
            $table->string("category");
            $table->timestamps();
        });

        Schema::create('products', function (Blueprint $table) {
            $table->id('id')->index('prod_id');
            $table->string('name', 100);
            $table->integer('qtd');
            $table->float('price');
            $table->text('desc');
            $table->foreign('cat_id')->references('id')->on('categories_products')->onDelete('cascade');
            $table->foreign('comp_id')->references('id')->on('companies')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('services', function (Blueprint $table) {
            $table->id('id')->index('serv_id');
            $table->string('name', 100);
            $table->float('price');
            $table->text('desc');
            $table->foreign('cat_id')->references('id')->on('categories_products')->onDelete('cascade');
            $table->foreign('comp_id')->references('id')->on('companies')->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
};
