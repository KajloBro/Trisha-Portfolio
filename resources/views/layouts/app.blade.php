<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <title>Patricija Radivoj</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>

        <div class="d-flex" id="wrapper">
      
          <!-- Sidebar -->
          <div class="bg-dark" id="sidebar-wrapper">
            <div class="list-group list-group-flush text-center">
              {{-- <a href="#" class="list-group-item list-group-item-action bg-light"> --}}
                <img class="logo" src="{{ asset('img/logo/logo.png') }}" alt="">
              {{-- </a> --}}
              <a href="{{ route('home') }}" class="list-group-item list-group-item-action bg-dark">Home</a>
              <a href="{{ route('portfolio') }}" class="list-group-item list-group-item-action bg-dark">Portfolio</a>
              <a href="{{ route('about') }}" class="list-group-item list-group-item-action bg-dark">About</a>
              <a href="{{ route('contact') }}" class="list-group-item list-group-item-action bg-dark">Contact</a>
            </div>
          </div>
          <!-- /#sidebar-wrapper -->
      
          <!-- Page Content -->
          <div id="page-content-wrapper">
      
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="header-wrapper">
                {{-- <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button> --}}

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <span class="text-center">
                    <img class="logo" src="{{ asset('img/logo/logo.png') }}" alt="">
                </span>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>

                    <li class="nav-item">
                         <a class="nav-link" href="{{ route('portfolio') }}">Portfolio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>

                </ul>
                </div>
            </nav>
      
            
          @yield('content')
            
          </div>
          <!-- /#page-content-wrapper -->
      
        </div>
        <!-- /#wrapper -->
        @yield('footer')
        <!-- Menu Toggle Script -->
        @yield('scripts')
        <script src="{{ asset('js/app.js') }}"></script>

      </body>
</html>