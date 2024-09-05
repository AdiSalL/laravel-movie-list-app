
    <!-- He who is contented is rich. - Laozi -->
                  <div class="mt-8">
               <a href="{{route('show', $popularMovie['id'])}}">
                  <img src='https://image.tmdb.org/t/p/w500{{ $popularMovie["poster_path"] }}' alt="" class="hover:opacity-75 transition ease-in-out duration-75">
               </a>
               <div class="mt-2 text-sm">
                  <a href="{{route('show', $popularMovie['id'])}}" class="text-lg mt-2 hover:text-gray-300">{{$popularMovie["title"]}}</a>
                  <div class="flex items-center text-gray-400">
                     <span>
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
                     </span>
                     <span class="ml-1">{{$popularMovie["vote_average"]}}</span>
                     <span class="mx-2">|</span>
                     <span>{{$popularMovie["release_date"]}}</span>
                  </div>
                  <div class="text-gray-400">
                     @foreach($popularMovie["genre_ids"] as $genre)
                        {{$genres->get($genre)}} @if(!$loop->last) | @endif
                     @endforeach
                  </div>
               </div>
            </div> 
