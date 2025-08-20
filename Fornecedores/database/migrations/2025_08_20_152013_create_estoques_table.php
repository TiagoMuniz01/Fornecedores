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
        Schema::create('estoques', function (Blueprint $table) {
            $table->id(); // id da própria tabela Estoque
            $table->integer('quantidade')->unsigned(); 
            $table->decimal('valor_unitario', 10, 2); 
            $table->unsignedBigInteger('cadastro_id'); //chave estrangeira 
            $table->timestamps();

            // Relacionamento com a tabela cadastros
            $table->foreign('cadastro_id')
                  ->references('id')
                  ->on('cadastros')
                  ->onDelete('cascade'); 
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('estoques');
    }
};
