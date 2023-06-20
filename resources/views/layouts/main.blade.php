<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
        <a class="navbar-brand" href="{{route('home')}}">Home</a>
        </div>
        <ul class="nav navbar-nav">
        {{-- <li class="active"><a href="{{route('poslovi.index')}}">Upwork Poslovi</a></li> --}}
        <li><a href="{{route('poslovi.index')}}">Poslovi</a></li>
        <li><a href="{{route('frilenseri.index')}}">Frilenseri</a></li>
        <li><a href="{{route('klijenti.index')}}">Klijenti</a></li>
        <li><a href="{{route('dizajneri.index')}}">Dizajneri</a></li>
        </ul>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

</body>
</html>