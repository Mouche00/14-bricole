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
        Schema::create('artisan_competance', function (Blueprint $table) {
            $table->id();
            $table->float('tarif');
            $table->foreignId('artisan_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('competance_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artisan_competance');
    }
};
