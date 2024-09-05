<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use function PHPSTORM_META\elementType;

class MovieController extends Controller
{
    public function index()
    {
        $apiKey = "b6650055afb0512755e5a7c936c79a79";
        $popularMovies = Http::get('https://api.themoviedb.org/3/movie/popular', [
            'api_key' => $apiKey,
        ])->json()["results"];
  
        $nowPlaying = Http::get('https://api.themoviedb.org/3/movie/now_playing', [
            'api_key' => $apiKey,
        ])->json()["results"];


        $genreArray =  Http::get('https://api.themoviedb.org/3/genre/movie/list', [
            'api_key' => $apiKey,
        ])->json()["genres"];

        $genres = collect($genreArray)->mapWithKeys(function ($genre) {
            return [
                $genre["id"] => $genre["name"]
            ];
        });

        return view('index', [
            "popularMovies" => $popularMovies,
            "nowPlaying" => $nowPlaying,
            "genres" => $genres
        ]);
    }

    public function show(int $id) {
        $apiKey = "b6650055afb0512755e5a7c936c79a79";
        $movie = Http::get("https://api.themoviedb.org/3/movie/$id", [
            'api_key' => $apiKey,
            "append_to_response" => 'credits,videos,images'
        ])->json();

        
        $genreArray =  Http::get('https://api.themoviedb.org/3/genre/movie/list', [
            'api_key' => $apiKey,
        ])->json()["genres"];

        return view("show", [
            "movie" => $movie,
        
        ]);
    }
}
