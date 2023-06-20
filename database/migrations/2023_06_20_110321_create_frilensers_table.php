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
        Schema::create('frilensers', function (Blueprint $table) 
        {
            $table->id();
            
            $table->string('ime');
            $table->string('prezime')->nullable(); // Ako je NULL znaci da je kompanija
            $table->string('adresa');
            $table->string('grad');
            $table->string('drzava');
            $table->integer('upwork_rating');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('frilensers');
    }
};
