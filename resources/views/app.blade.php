<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Import de Bootstrap CSS à partir de CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Import de Tailwind CSS à partir de CDN -->
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.17/dist/tailwind.min.css">-->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Import de AlpineJS à partir de CDN -->
    <script src="//unpkg.com/alpinejs" defer></script>

    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<header class="bg-primary" style="--bs-bg-opacity:.7">
  <nav class="container mx-auto px-6 py-3">
    <div class="flex items-center justify-between">
      <div class="flex items-center">
        <a class="text-lg font-bold text-gray-100 hover:text-gray-300" href="#">
          <img src="{{Vite::asset('resources/images/logo.png')}}" alt="" class="rounded img w-[80px]">
        </a>
      </div>
      <div class="flex items-center">
        <div class="ml-10 flex items-baseline space-x-4">
          <a class="text-secondary hover:opacity-70 fw-semibold" href="#">Accueil</a>
          <a class="text-secondary hover:opacity-70 fw-semibold" href="#">Projets</a>
          <a class="text-secondary hover:opacity-70 fw-semibold" href="#">Tâches</a>
          <a class="text-secondary hover:opacity-70 fw-semibold" href="#">Factures</a>
        </div>
      </div>
    </div>
  </nav>
</header>


    <!-- Fil d'ariane -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
            @yield('breadcrumb')
        </ol>
    </nav>

    <!-- Contenu principal -->
    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-secondary py-3" style="bs-opacity:.7">
        <div class="container">
            <p class="text-center text-light">&copy; {{ date('Y') }} Planipro. Tous droits réservés.</p>
        </div>
    </footer>

    <!-- Import de jQuery, Popper.js et Bootstrap JS à partir de CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2.10.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    @yield('scripts')
</body>
</html>
