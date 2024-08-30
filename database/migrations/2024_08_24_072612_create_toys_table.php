<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('product_categories', function (Blueprint $table) {
            $table->uuid('id')->default(Str::uuid())->unique()->primary();
            $table->string('title');
            $table->timestamps();
        });
        Schema::create('products', function (Blueprint $table) {
            $table->uuid('p_id')->default(Str::uuid())->unique()->primary();
            $table->string('name');
            $table->string('description');
            $table->string('img');
            $table->uuid('product_category_id');
            $table->foreign('product_category_id')->references('id')->on('product_categories')->onDelete('cascade');
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
        Schema::dropIfExists('toys');
    }
}
