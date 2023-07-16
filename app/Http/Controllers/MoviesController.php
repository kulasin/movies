<?php


namespace App\Http\Controllers;
use App\Models\Movie;
use App\Http\Controllers\Controller;






use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index()
    {
        $movies = Movie::orderBy('id', 'desc')->paginate(5);
        return view('home', compact('movies'));
    }


    public function followed()
    {
        $user = auth()->user();
    $movies = $user->movies()->paginate(10);
    return view('followed', compact('movies'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'genre' => 'required',
            'rating' => 'required|numeric|min:0|max:10',
        ]);

        $movie = Movie::create($validatedData);

        if ($movie) {
            return redirect()->route('home'); 
        } else {
            return redirect()->back()->with('error', 'Failed to create the movie.');
        }
    }

    public function show($slug)
{
    $movie = Movie::where('slug', $slug)->firstOrFail();
    return view('view', compact('movie'));
}

    public function destroy($slug)
{
    $movie = Movie::where('slug', $slug)->firstOrFail();
    $movie->delete();
    return redirect()->route('home')->with('success', 'Movie deleted successfully.');
}

    public function follow($slug)
    {
        $movie = Movie::where('slug', $slug)->firstOrFail();
        
        // Get the authenticated user
        $user = auth()->user();
        
        // Attach the movie to the user's followed movies
        $user->movies()->attach($movie);
    
        return redirect()->back()->with('success', 'Movie followed successfully.');
    }

    public function unfollow($slug)
{
    $movie = Movie::where('slug', $slug)->firstOrFail();
    
    // Get the authenticated user
    $user = auth()->user();
    
    // Detach the movie from the user's followed movies
    $user->movies()->detach($movie);
    
    return redirect()->back()->with('success', 'Movie unfollowed successfully.');
}

    
}

