<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    

    <!-- Scripts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    @livewireStyles
</head>
<body>
    <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="{{ url('/') }}" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        {{ config('app.name', 'Laravel') }}
      </a>
      @guest
      @else
      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
      </ul>
      @endguest

      <div class="col-md-3 text-end d-flex justify-content-end">
        @guest
            @if (Route::has('login'))
            <livewire:route-button ruta="{{ route('login') }}" texto="Login" clase="btn btn-outline-primary me-2" />
            @endif
            @if (Route::has('register'))
            <livewire:route-button ruta="{{ route('register') }}" texto="Sign-up" clase="btn btn-primary" />
            @endif
        @else 
            @livewire('logout-button')
        @endguest
      </div>
    </header>
  </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
@livewireScripts
</body>
</html>
