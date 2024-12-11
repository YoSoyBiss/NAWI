<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('progress', function (Blueprint $table) {
            $table->id();

            // Relación con el usuario: Aseguramos que el campo 'user_id' se conecta correctamente con la tabla 'users'
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');

            // Relación con el ejercicio: Aseguramos que el campo 'exercise_id' se conecta correctamente con la tabla 'exercises'
            $table->foreignId('exercise_id')->constrained('exercises')->onDelete('cascade');

            // Almacenamos cuántas respuestas correctas e incorrectas tiene el usuario
            $table->integer('correct_answers')->default(0);
            $table->integer('incorrect_answers')->default(0);

            // Almacenamos la cantidad total de preguntas de ese ejercicio
            $table->integer('total_questions');

            // Para evitar problemas de valores nulos, puedes definir valores predeterminados
            // y también asegurarte de que los campos no sean nulos
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Elimina la tabla 'progress' en caso de que necesitemos revertir la migración
        Schema::dropIfExists('progress');
    }
};
