<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->id();
            $table->string('empl_matricule')->unique();
            $table->string('empl_prenom');
            $table->string('empl_nom');
            $table->enum('empl_genre', ['M','F']);
            $table->string('empl_tel')->unique();
            $table->string('empl_adresse');
            $table->enum('empl_statut', ['actif', 'inactif', 'dismissed'])->default('actif');
            $table->date('empl_date_naissance');
            $table->integer('empl_salaire');
            $table->string('empl_poste');
            $table->boolean('is_admin')->default(true);
            $table->unsignedBigInteger('departement_id');
            $table->foreign('departement_id')->references('id')->on('departements')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employes');
    }
};
