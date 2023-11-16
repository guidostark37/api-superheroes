<?php


use App\Models\Equipo;
use App\Models\Mision;
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
        Schema::create('mision_equipos', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Equipo::class)->constrained();
            $table->foreignIdFor(Mision::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mision_equipos');
    }
};
