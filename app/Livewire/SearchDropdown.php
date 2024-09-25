<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchDropdown extends Component
{
    public $search = "";

    public function render()
    {
        $searchResults = [];
        $apiKey = "b6650055afb0512755e5a7c936c79a79";
        if (strlen($this->search) > 2) {
            $apiKey = config('services.tmdb.api_key');
            $searchResults = Http::get('https://api.themoviedb.org/3/search/movie?query='. $this->search, [
                'api_key' => $apiKey,
            ])->json()["results"];
        }
        dump($this->search);
        return view('livewire.search-dropdown', [
            "searchResults" => $searchResults,
        ]);
    }
}

