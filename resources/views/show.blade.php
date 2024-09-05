@extends("layouts.main")

@section("content")
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row ">
            <img src='https://image.tmdb.org/t/p/w500{{ $movie["poster_path"] }}' alt="poster.jpg" class="w-64 md:w-96">
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">
                    {{$movie["title"]}} 
                </h2>
                <div class="flex flex-wrap items-center text-gray-400">
                     <span class="ml-1">{{$movie["vote_average"]}} </span>
                     <span class="mx-2">|</span>
                     <span>{{$movie["release_date"]}}</span>
                     <span class="mx-2">|</span>
                     <span>
                        @foreach($movie["genres"] as $genre)
                            {{$genre["name"]}}
                        @endforeach
                     </span>
                  </div>

                  <p class="text-gray-300 mt-8">
                    {{$movie["overview"]}}
                  </p>

                  <div class="mt-12">
                    <h4 class="text-white font-semibold md:text-2xl">Featured Crew</h4>
                    <div class="flex mt-4">
                        @foreach($movie["credits"]["crew"] as $crew)
                            @if($loop->index < 2)
                                <div class=mr-8>
                                    <div>{{$crew["name"]}}</div>
                                    <div>{{$crew["known_for_department"]}}</div>
                                    <div class="text-sm text-gray-400"></div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                  </div>

                  <div class="mt-12 w-[8em]">
                    @if(count($movie["videos"]["results"]) > 0)
                    <a href='https://youtube.com/watch?v={{$movie["videos"]["results"][1]["key"]}}' class="flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
                        <span>Play Trailer</span>
                    </a>
                    @endif
                  </div>
            </div>
         
     
        </div>
    </div>

    <div class="movie-cast border-b border-gray-800 ">
        <div class="container mx-auto px-4 py-16">
            <div class="text-4xl font-semibold">Popular Cast</div>
            
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            @foreach($movie["credits"]["cast"] as $cast)
                            @if($loop->index < 5)
                            <div class="mt-8">
               <a href="#">
                  <img src='https://image.tmdb.org/t/p/w500{{ $cast["profile_path"] }}' alt="" class="hover:opacity-75 transition ease-in-out duration-75">
               </a>
               <div class="mt-2 text-sm">
                  <a href="" class="text-lg mt-2 hover:text-gray-300">{{$cast["name"]}}</a>
                  <div class="text-gray-400">
                     {{$cast["known_for_department"]}} as {{$cast["character"]}}
                  </div>
               </div>
            </div>
                            @endif
                        @endforeach

         </div>
        </div>
    </div>

    
    <div class="movie-cast border-b border-gray-800 ">
        <div class="container mx-auto px-4 py-16">
            <div class="text-4xl font-semibold">Images</div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
             @foreach($movie["images"]["backdrops"] as $image)
                    @if($loop->index < 9)
                    <div class="mt-8 mx-2">
                        <img src='https://image.tmdb.org/t/p/w500{{ $image["file_path"]}}' alt="" class="hover:opacity-75 transition ease-in-out duration-75">
                        </div>
                        @endif
                    @endforeach
         </div>
        </div>
    </div>

@endsection