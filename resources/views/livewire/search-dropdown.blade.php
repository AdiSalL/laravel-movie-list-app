<div class="relative">
    <input wire:model.debounce.500ms="search" type="text" class="bg-gray-800 text-sm rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline" placeholder="Search">
    <div class="absolute top-0">
        <svg class="fill-current mt-2 ml-2 text-gray-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
        </svg>
    </div>
    <div class="absolute w-64 mt-4 bg-gray-800 rounded">
        @if (strlen($search) > 2)
            <ul>
                @forelse ($searchResults as $result)
                    <li class="border-b border-gray-700">
                        <a href="#" class="block hover:bg-gray-700 px-3 py-3">{{ $result['title'] }}</a>
                    </li>
                @empty
                    <li class="border-b border-gray-700">
                        <a href="#" class="block hover:bg-gray-700 px-3 py-3">No results found</a>
                    </li>
                @endforelse
            </ul>
        @endif
    </div>
</div>
