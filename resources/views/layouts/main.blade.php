<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!--Fonte do Google -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        <!--CSS Bootstrap -->
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <!--CSS da aplicação --> 
         <link rel="stylesheet" href="/css/styles.css">
         <script src="/js/scripts.js"></script>
    </head>
    <body>
        <header>
          <nav class="navbar navbar-expand-lg navbar-light">
              <div class="collapse navbar-collapse" id="navbar">
                  <a href="/"class="navbar-brand">
                  <img src="/img/hdconvent.png" alt="HDC Events">
                  </a>
                  <ul class="navbar-nav">
                      <li class="nav-item">
                          <a href="/" class="nav-link">Eventos</a>
                      </li>
                      <li class="nav-item">
                          <a href="/events/create" class="nav-link">Criar Eventos</a>
                      </li>
                      <li class="nav-item">
                          <a href="/" class="nav-link">Entrar</a>
                      </li>
                      <li class="nav-item">
                          <a href="/" class="nav-link">Cadastrar</a>
                      </li>
                  </ul>
               </div>
       </header>
       @yield('content')
       <footer>
       <p>HDC Events &copy; 2021</p>
       </footer>
       <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    </body>
</html>
