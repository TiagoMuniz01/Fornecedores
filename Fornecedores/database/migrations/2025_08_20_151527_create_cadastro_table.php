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
        Schema::create('cadastros', function (Blueprint $table) {
            $table->id(); //Chave primária
            $table->string('nome', 150); 
            $table->string('endereco', 255); 
            $table->string('telefone', 20); 
            $table->char('cnpj', 14)->unique(); 
            $table->timestamps(); 
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cadastros');
    }
};

