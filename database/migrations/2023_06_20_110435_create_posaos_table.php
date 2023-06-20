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
        Schema::create('posaos', function (Blueprint $table) 
        {
            $table->id();
            
            $table->date('datum_pocetka');
            $table->date('datum_zavrsetka');
            $table->double('budzet');
            $table->longText('opis_ideje');
            $table->integer('status');          // 0 - zapocet, 1 - zavrsen

            $table->foreignId('frilenser_id')->constrained();
            $table->foreignId('klijent_id')->constrained();
            $table->foreignId('dizajner_id')->constrained();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posaos');
    }
};
