<!doctype html>
<html lang='en'>
<head>
    <title>@yield('title')</title>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/vaudit.css') }}" rel="stylesheet" type="text/css">
    @yield('head')
</head>
<body>
    <header>
      <div class="navbar navbar-dark bg-dark box-shadow" style="margin:0;padding:2px;">
        <div class="container-fluid d-flex justify-content-between" >
          <a href="{{ url('/index')}}" class="navbar-brand d-flex align-items-left" style="margin:0; padding:1px;align:left;float:left;left:0; vertical-align:middle;">
            <b>vAudit</b>
            </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation" style="margin:0;right:-5px;padding:0;"><span class="navbar-toggler-icon"></span>
          </button>
      </div>
  </div>
    </header>

<section>
    @yield('content')
</section>

<section>
    @yield('alerts')
</section>

<nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-dark text-light" style="margin:auto;padding:0px;vertical-align:middle;">
  <a class="navbar-brand" href="{{ url('/index')}}" style="float:left;"><i class="fas fa-home"></i></a>
  <div style="margin:0;padding-right:2px;float:right;align:right;">&copy {{ date('Y')}} | HQNRC</div>
</nav>

{{-- Javascript Libraries --}}
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js"></script>
</body>
</html>
