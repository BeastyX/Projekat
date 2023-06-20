<?php

namespace Database\Seeders;

use App\Models\Frilenser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FrilensersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Frilenser::create(
            [
                'ime' => 'Mika',
                'prezime' => 'Mikic',
                'adresa' => 'Trg Republike 5',
                'grad' => 'Beograd',
                'drzava' => 'Srbija',
                'upwork_rating' => 7,
            ]);

        Frilenser::create(
            [
                'ime' => 'John',
                'prezime' => 'Smith',
                'adresa' => 'Sunset Street 36',
                'grad' => 'Chicago',
                'drzava' => 'USA',
                'upwork_rating' => 9,
            ]);

        Frilenser::create(
            [
                'ime' => 'Code Monkeys',
                'adresa' => 'Central Street 17',
                'grad' => 'London',
                'drzava' => 'UK',
                'upwork_rating' => 3,
            ]);
    }
}
