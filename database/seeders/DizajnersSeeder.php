<?php

namespace Database\Seeders;

use App\Models\Dizajner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DizajnersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dizajner::create(
            [
                'ime' => 'Luka',
                'prezime' => 'Lazarevic',
                'adresa' => 'Kosovska 46',
                'grad' => 'Krusevac',
                'drzava' => 'Srbija',
                'opis_delatnosti' => 'Grafički dizajner'
            ]);

        Dizajner::create(
            [
                'ime' => 'Pera',
                'prezime' => 'Peric',
                'adresa' => 'Beogradska 25',
                'grad' => 'Beograd',
                'drzava' => 'Srbija',
                'opis_delatnosti' => 'Dizajner zvuka'
            ]);

        Dizajner::create(
            [
                'ime' => 'Art Studio',
                'adresa' => 'Boulevard 25',
                'grad' => 'New York',
                'drzava' => 'USA',
                'opis_delatnosti' => 'Grafički dizajner'
            ]);

    }


}
