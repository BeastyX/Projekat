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
                'ime' => 'Mika Mikic',
                'tip' => 0,
                'adresa' => 'Trg Republike 5',
                'grad' => 'Beograd',
                'drzava' => 'Srbija',
                'upwork_rating' => 7,
            ]
        );

        Frilenser::create(
            [
                'ime' => 'John Smith',
                'tip' => 0,
                'adresa' => 'Sunset Street 36',
                'grad' => 'Chicago',
                'drzava' => 'USA',
                'upwork_rating' => 9,
            ]
        );

        Frilenser::create(
            [
                'ime' => 'Code Monkeys',
                'tip' => 1,
                'adresa' => 'Central Street 17',
                'grad' => 'London',
                'drzava' => 'UK',
                'upwork_rating' => 3,
            ]
        );
    }
}
