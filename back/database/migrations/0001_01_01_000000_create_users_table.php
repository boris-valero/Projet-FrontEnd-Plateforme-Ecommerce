<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')-> primary();
            $table->string('name');
            $table->string('firstname');
            $table->string('email')->unique();
            $table->string('adress');
            $table->string('password');
            
           
           
        });

        Schema::create('product', function (Blueprint $table) {
            $table->increments('id')-> primary();
            $table->string('name');
            $table->string('dimension');
            $table->string('material');
            $table->string('color');
            $table->text('description');
            $table->decimal('price',total:8,places:2);
            $table->binary('picture');
        });

        Schema::create('command', function (Blueprint $table) {
            $table->increments('id_command')->primary();
            $table->date('command_date');
            //clé étrangére
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('product_id')->reference('id')->on('product');
        });
    }

    /**
     * Reverse the migrations.
     */
    // public function down(): void
    // {
    //     Schema::dropIfExists('users');
    //     Schema::dropIfExists('product');
    //     Schema::dropIfExists('command');
    // }
};
