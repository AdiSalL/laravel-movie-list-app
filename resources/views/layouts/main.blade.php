<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <livewire:styles />
</head>
<body class="font-sans   bg-gray-900 text-white">
  <nav class="border-b flex  border-gray-800">
    <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-4">
      <ul class="flex flex-col gap-2 sm:flex-row items-center">
        <li>
          <a href='{{route("index")}}'>Movie App</a>
        </li>
        <li class="md:ml-16">
          <a href='{{route("index")}}' class="hover:text-gray-300">Movies</a>
        </li>
        <li class="md:ml-6">
          <a href="#" class="hover:text-gray-300">TV Shows</a>
        </li>
        <li class="md:ml-6">
          <a href="#" class="hover:text-gray-300">Actors</a>
        </li>
      </ul>
      <div class="flex flex-col md:flex-row items-center">
        <livewire:search-dropdown></livewire:search-dropdown>
        <div class="ml-4">
          <a href="#">
            <img src="/img/wife.jpg" alt="avatar" class="rounded-full w-8 h-8">
          </a>
        </div>
      </div>
    </div>
  </nav>
  @yield("content")
  <livewire:scripts />
</body>
</html>