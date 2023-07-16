<?php
use Tests\TestCase;
use App\Models\Movie;

class MovieTest extends TestCase
{
    /**
     * Test retrieving all movies from the database.
     */
    public function test_get_all_movies(): void
    {
        // Arrange
        $expectedMovieCount = 5;
        
        // Create 5 movies using the Movie model factory
        Movie::factory()->count($expectedMovieCount)->create();
        
        // Act
        $response = $this->get('/home');
        
        // Assert
        $response->assertStatus(200);
        $response->assertJsonCount($expectedMovieCount, 'data');
    }
}
