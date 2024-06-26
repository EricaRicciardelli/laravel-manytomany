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
        Schema::create('console_game', function (Blueprint $table) {
            $table->id();
                $table->unsignedBigInteger('console_id')->nullable();
                $table->foreign('console_id')->references('id')->on('consoles');
            $table->unsignedBigInteger('game_id')->nullable();
                $table->foreign('game_id')->references('id')->on('games');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('console_game');
    }
};
