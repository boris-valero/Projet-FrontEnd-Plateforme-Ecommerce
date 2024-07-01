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
    $table->increments('id');
    $table->string('name');
    $table->string('firstname');
    $table->string('email')->unique();
    $table->string('address'); 
    $table->string('password');
    $table->timestamp('email_verified_at');
    $table->timestamps(); // Ajoute les colonnes created_at et updated_at
    $table->rememberToken();
});


      Schema::create('products', function (Blueprint $table) {
    $table->increments('id');
    $table->string('name');
    $table->string('dimension')->nullable(); // 'dimension' peut être nullable si c'est optionnel
    $table->string('material')->nullable(); // 'material' peut être nullable si c'est optionnel
    $table->string('color');
    $table->text('description');
    $table->decimal('price', 8, 2); // Précision 8 chiffres au total, 2 décimales
    $table->binary('picture')->nullable(); // 'picture' peut être nullable si c'est optionnel
    $table->timestamps();
    
});


      Schema::create('commands', function (Blueprint $table) {
    $table->increments('id');
    $table->date('command_date');
    $table->unsignedInteger('user_id');
    $table->unsignedInteger('product_id');
    $table->timestamps();

    // Définition des clés étrangères
    $table->foreign('user_id')->references('id')->on('users');
    $table->foreign('product_id')->references('id')->on('products');
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commands');
        Schema::dropIfExists('products');
        Schema::dropIfExists('users');
    }
};
