<?php

namespace Database\Seeders;

use App\Models\Klijent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KlijentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Klijent::create(
            [
                'ime' => 'Benjamin Clemente',
                'tip' => 0,
                'adresa' => 'Passeig can 27',
                'grad' => 'Barcelona',
                'drzava' => 'Spain',
                'upwork_rating' => 7,
            ]
        );

        Klijent::create(
            [
                'ime' => 'Wonder Studio',
                'tip' => 1,
                'adresa' => 'Empty Street 15',
                'grad' => 'Liverpool',
                'drzava' => 'UK',
                'upwork_rating' => 6,
            ]
        );

        Klijent::create(
            [
                'ime' => 'Mobile Entertainment',
                'tip' => 1,
                'adresa' => 'Ocean Street 11',
                'grad' => 'Washington',
                'drzava' => 'USA',
                'upwork_rating' => 9,
            ]
        );
    }
}
