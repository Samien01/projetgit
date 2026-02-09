<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->string('titre_module', 150);
            $table->string('domaine', 100);
            $table->date('date_formation');
            $table->string('mois', 20);
            $table->integer('annee');
            $table->foreignId('utilisateur_id')->constrained('utilisateurs');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('formations');
    }
};
