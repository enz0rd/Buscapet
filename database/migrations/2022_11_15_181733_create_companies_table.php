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
        Schema::create('categories_companies', function (Blueprint $table) {
            $table->id('id')->index('cat_id');
            $table->string("category");
            $table->timestamps();
        });

        Schema::create('companies', function (Blueprint $table) {
            $table->id('id')->index('comp_id');
            $table->string('name', 100);
            $table->string('cnpj', 14);
            $table->text('desc');
            $table->foreign('cat_id')->references('id')->on('categories_companies')->onDelete('cascade');
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
        Schema::dropIfExists('companies');
    }
};
