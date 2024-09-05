@extends('layouts.main')

@section('content')
   <div class=" container mx-auto px-4 pt-16">
      <div class="popular-movies">
         <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
            POPULAR MOVIES
         </h2>
         
         <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            @foreach ($popularMovies as $popularMovie)
            <x-movie-card :popularMovie="$popularMovie" :genres="$genres"/>
            @endforeach
         </div>
      </div>

      <div class="now-playing-movies mt-12">
         <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
            now playing
         </h2>
         <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
         @foreach ($nowPlaying as $popularMovie)
         <x-movie-card :popularMovie="$popularMovie" :genres="$genres"/>
         @endforeach
         </div>
      </div>
   </div>
@endsection

