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
                'ime' => 'Luka Lazarevic',
                'tip' => 0,
                'adresa' => 'Kosovska 46',
                'grad' => 'Krusevac',
                'drzava' => 'Srbija',
                'opis_delatnosti' => 'Grafički dizajner'
            ]
        );

        Dizajner::create(
            [
                'ime' => 'Pera Peric',
                'tip' => 0,
                'adresa' => 'Beogradska 25',
                'grad' => 'Beograd',
                'drzava' => 'Srbija',
                'opis_delatnosti' => 'Dizajner zvuka'
            ]
        );

        Dizajner::create(
            [
                'ime' => 'Art Studio',
                'tip' => 1,
                'adresa' => 'Boulevard 25',
                'grad' => 'New York',
                'drzava' => 'USA',
                'opis_delatnosti' => 'Grafički dizajner'
            ]
        );

    }


}
