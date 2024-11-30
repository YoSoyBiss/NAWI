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
        Schema::create('narrative_contents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('narrative_id')->constrained('narratives')->onDelete('cascade');
            $table->text('text');
            $table->string('video_url');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('narrative_contents');
    }
};
