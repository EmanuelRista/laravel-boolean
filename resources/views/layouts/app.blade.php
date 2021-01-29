<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <title>Boolean - @yield('title')</title>
  <style>
    a {
      text-decoration: none;
    }
    .active {
      font-weight: bold;
    }
  </style>
</head>
<body class="bg-light">
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
      <a class="navbar-brand" href="#">Boolean</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          @foreach (config('routes.links') as $link)
            <li class="{{ Route::currentRouteName() == $link['id'] ? 'active' : '' }} nav-item px-2"><a href="{{ route($link['id']) }}" class="text-white">{{ $link['name'] }}</a></li>

          @endforeach                  
          </ul>
      </div>
    </nav>

  </header>

  <div class="container">
    @yield('content')
  </div>
  
</body>
</html>