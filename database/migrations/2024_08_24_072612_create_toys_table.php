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
            $table->string('price');
            $table->string('description');
            $table->string('img');
            $table->uuid('product_category_id');
            $table->foreign('product_category_id')->references('id')->on('product_categories')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('users', function (Blueprint $table) {
            $table->increments('Cid');
            $table->string('customer_name', 50);
            $table->string('email');
            $table->string('address');
            $table->string('gender');
            $table->string('role');
            $table->string('username')->unique();
            $table->string('password');

            $table->string('avatar')->nullable();
        });
        Schema::create('admin', function (Blueprint $table) {
            $table->increments('Aid');
            $table->string('name', 50);
            $table->string('email');
            $table->string('phone');
            $table->string('gender');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('avatar')->nullable();

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
