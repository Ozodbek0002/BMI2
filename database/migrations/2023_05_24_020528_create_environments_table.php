<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('environments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('count');
            $table->bigInteger('w_count');
            $table->bigInteger('y_count');
            $table->foreignId('mahalla_id')->constrained('mahallas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('environments');
    }
};
