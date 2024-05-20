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
        Schema::create('libroreclamaciones', function (Blueprint $table) {
            $table->id();
            $table->string('dni', 100)->default('');
            $table->string('nombre', 250)->default('');
            $table->string('apellidos', 250)->default('');
            $table->string('domicilio', 250)->default('');
            $table->string('email', 250)->default('');
            $table->string('telefono', 250)->default('');
            $table->string('tipo', 100)->default('');#reclamo o queja
            $table->string('descripcion_objeto', 250)->default('');
            $table->text('descripcion_detallada');#máximo 1000
            $table->string('monto', 250)->default('');
            $table->string('adjuntar_documento', 250)->default('');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libroreclamaciones');
    }
};
