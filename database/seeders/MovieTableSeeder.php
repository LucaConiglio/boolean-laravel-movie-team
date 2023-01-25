<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i<20; $i++) {
            $myMovie = new Movie();
            $myMovie ->title = "Titolo Movie $i";
            $myMovie ->original_title = "Titolo Originale Movie $i";
            $myMovie ->nationality = "Nazionalità Movie $i";
            $myMovie ->date = "2023-01-25";
            $myMovie ->genere = "Genere Movie $i";
            $myMovie -> save();
        }
    }
}
