<?php

use App\Models\Equipo;
use App\Models\Planeta;
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
        Schema::create('heroes', function (Blueprint $table) {
            $table->id();
            $table->String('nombre_heroe')->unique();
            $table->string('password');
            $table->String('año_inicio');
            $table->integer('nivel');
            $table->foreignIdFor(Planeta::class)->constrained()->nullable();
            $table->foreignIdFor(Equipo::class)->constrained()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('heroes');
    }
};
