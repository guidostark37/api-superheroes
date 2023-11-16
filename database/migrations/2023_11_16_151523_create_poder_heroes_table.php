<?php

use App\Models\Heroes;
use App\Models\Superpoder;
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
        Schema::create('poder_heroes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Heroes::class)->constrained();
            $table->foreignIdFor(Superpoder::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('poder_heroes');
    }
};
