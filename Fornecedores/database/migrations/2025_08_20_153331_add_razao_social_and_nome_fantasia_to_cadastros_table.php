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
        Schema::table('cadastros', function (Blueprint $table) {
            $table->string('razao_social', 255)->after('nome');
            $table->string('nome_fantasia', 255)->nullable()->after('razao_social');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cadastros', function (Blueprint $table) {
            $table->dropColumn(['razao_social', 'nome_fantasia']);
        });
    }
};
