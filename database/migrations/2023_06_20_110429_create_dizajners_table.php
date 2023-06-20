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
        Schema::create('dizajners', function (Blueprint $table) {
            $table->id();

            $table->string('ime');
            $table->string('prezime')->nullable();
            $table->string('adresa');
            $table->string('grad');
            $table->string('drzava');
            $table->string('opis_delatnosti');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dizajners');
    }
};