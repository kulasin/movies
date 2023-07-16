<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;




class MovieSeeder extends Seeder
{
    public function run()
    {
        $movies = [
            [
                'title' => 'The Shawshank Redemption',
                'description' => 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.',
                'genre' => 'Drama',
                'rating' => 7,
            ],
            [
                'title' => 'The Godfather',
                'description' => 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.',
                'genre' => 'Crime',
                'rating' => 9,
            ],
            [
                'title' => 'Pulp Fiction',
                'description' => 'The lives of two mob hitmen, a boxer, a gangster and his wife, and a pair of diner bandits intertwine in four tales of violence and redemption.',
                'genre' => 'Crime',
                'rating' => 8,
            ],
            [
                'title' => 'The Dark Knight',
                'description' => 'When the menace known as the Joker wreaks havoc and chaos on the people of Gotham, Batman must accept one of the greatest psychological and physical tests of his ability to fight injustice.',
                'genre' => 'Action',
                'rating' => 9,
            ],
            [
                'title' => 'Fight Club',
                'description' => 'An insomniac office worker and a devil-may-care soapmaker form an underground fight club that evolves into something much, much more.',
                'genre' => 'Drama',
                'rating' => 8,
            ],
            [
                'title' => 'Inception',
                'description' => 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a CEO.',
                'genre' => 'Action',
                'rating' => 9,
            ],
            [
                'title' => 'The Matrix',
                'description' => 'A computer hacker learns from mysterious rebels about the true nature of his reality and his role in the war against its controllers.',
                'genre' => 'Action',
                'rating' => 10,
            ],
            [
                'title' => 'Goodfellas',
                'description' => 'The story of Irish-Italian American mobster Henry Hill, as he lives from childhood to middle age, covering his relationship with his wife and his mob partners.',
                'genre' => 'Crime',
                'rating' => 7,
            ],
            [
                'title' => 'The Silence of the Lambs',
                'description' => 'A young FBI cadet must confide in an incarcerated and manipulative killer to receive his help on catching another serial killer who skins his victims.',
                'genre' => 'Thriller',
                'rating' => 7,
            ],
            [
                'title' => 'Forrest Gump',
                'description' => 'The presidencies of Kennedy and Johnson, the Vietnam War, the Watergate scandal, and other historical events unfold through the perspective of an Alabama man with an IQ of 75.',
                'genre' => 'Drama',
                'rating' => 8,
            ],
        ];

        foreach ($movies as $movie) {
            Movie::create($movie);
        }
    }
}

