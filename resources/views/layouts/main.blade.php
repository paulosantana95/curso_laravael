<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    
    <!-- Fontes do Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

    <!-- CSS Bootsstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- CSS da aplicação -->
    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/scripts.js"></script>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="collapse navbar-collapse" id="navbar">
          <a href="/" class="navbar-brand">
            <img src="/img/hdcevents_logo.svg" alt="HDC Events">
          </a>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="/" class="nav-link">Eventos</a>
            </li>
            <li class="nav-item">
              <a href="/" class="nav-link">Criar Eventos</a>
            </li>
            <li class="nav-item">
              <a href="/" class="nav-link">Entrar</a>
            </li>
            <li class="nav-item">
              <a href="/" class="nav-link">Cadastrar</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    @yield('content')
    <footer>
      <p>HDC Events &copy; 2023</p>
    </footer>
  </body>
</html>