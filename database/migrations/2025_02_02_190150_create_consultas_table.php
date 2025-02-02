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
        Schema::create('consultas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('medico_id')->unsigned();
            $table->bigInteger('paciente_id')->unsigned();
            $table->timestamp('data')->format('Y-m-d H:i:s');
            $table->foreign('medico_id')->references('id')->on('medicos');
            $table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultas');
    }
};
