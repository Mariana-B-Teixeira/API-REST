<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\FamousBooks;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        FamousBooks::create([ 
            'title' => 'Dom Casmurro', 
            'book_review' => 4.8,
            'author' => 'Machado de Assis',
            'genre' => 'Romance',
            'pages' => 256,
            'publication_date' => '1899-01-01'
        ]);

        FamousBooks::create([ 
            'title' => 'Memórias Póstumas de Brás Cubas', 
            'book_review' => 4.9,
            'author' => 'Machado de Assis',
            'genre' => 'Romance',
            'pages' => 320,
            'publication_date' => '1881-03-15'
        ]);
    }
}