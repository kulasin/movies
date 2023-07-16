<?php
namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class FollowingController extends Controller
{
    public function store(Request $request, $id)
    {
        $movie = Movie::findOrFail($id);

        // Associate the movie with the authenticated user
        auth()->user()->following()->attach($movie);

        return response()->json(['message' => 'Movie followed']);
    }
}

