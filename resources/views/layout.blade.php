<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restaurant app</title>
    <link rel="stylesheet" type="text/css" href="{{ url('assests/css/fontawesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assests/css/bootstrap.min.css') }}">
    <script type="text/javascript" src="{{ url('assests/css/bootstrap.min.js') }}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Restro App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/add">add users</a>
            </li>
            {{-- <li class="nav-item dropdown"> --}}
              {{-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> --}}
                {{-- Dropdown --}}
              {{-- </a> --}}
              {{-- <div class="dropdown-menu" aria-labelledby="navbarDropdown"> --}}
                {{-- <a class="dropdown-item" href="#">Action</a> --}}
                {{-- <a class="dropdown-item" href="#">Another action</a> --}}
                {{-- <div class="dropdown-divider"></div> --}}
                {{-- <a class="dropdown-item" href="#">LOgin</a> --}}
              {{-- </div> --}}
            {{-- </li> --}}
            <li class="nav-item">
              <a class="nav-link " href="/list">list users</a>
            </li>
          </ul>
          {{-- <form class="form-inline my-2 my-lg-0"> --}}
            {{-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> --}}
            {{-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> --}}
          {{-- </form> --}}
        </div>
      </nav>

        @yield('content')
    </div>
    <footer></footer>
</body>
</html>
