<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title></title>

    <!-- Bootstrap core CSS -->
<link href="/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form method="POST" action="{{ route('register') }}">
    @csrf

    <img class="mb-4" src="/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Register</h1>

    <div class="form-floating">
      <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"  value="{{ old('name') }}" id="email" placeholder="Juan Palote" required autocomplete="name" autofocus>
      <label for="name">Name</label>
    </div>

    <div class="form-floating">
      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"  value="{{ old('email') }}" id="email" placeholder="name@example.com" required autocomplete="email">
      <label for="email">Email address</label>
    </div>

    <div class="form-floating">
      <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="new password" required autocomplete="new-password">
      <label for="password">Password</label>
    </div>

    <div class="form-floating">
      <input type="password" class="form-control" id="password-confirm" name="password_confirmation" placeholder="new password" required autocomplete="new-password">
      <label for="password-confirm">Confirm password</label>
    </div>

    <div class="mb-1"></div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Create</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2026</p>
  </form>
</main>

  </body>
</html>