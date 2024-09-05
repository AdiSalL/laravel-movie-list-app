<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="font-sans   bg-gray-900 text-white">
  <nav class="border-b flex  border-gray-800">
    <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-4">
      <ul class="flex flex-col gap-2 sm:flex-row items-center">
        <li>
          <a href="#">Movie App</a>
        </li>
        <li class="md:ml-16">
          <a href="#" class="hover:text-gray-300">Movies</a>
        </li>
        <li class="md:ml-6">
          <a href="#" class="hover:text-gray-300">TV Shows</a>
        </li>
        <li class="md:ml-6">
          <a href="#" class="hover:text-gray-300">Actors</a>
        </li>
      </ul>
      <div class="flex flex-col md:flex-row items-center">
        <div class="relative">
          <input type="text" class="bg-gray-800 text-sm rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline" placeholder="Search">
          <div class="absolute top-0">
          <svg class="fill-current mt-2 ml-2 text-gray-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
</svg>
          </div>
        </div>
        <div class="ml-4">
          <a href="#">
            <img src="/img/wife.jpg" alt="avatar" class="rounded-full w-8 h-8">
          </a>
        </div>
      </div>
    </div>
  </nav>
  @yield("content")
</body>
</html>