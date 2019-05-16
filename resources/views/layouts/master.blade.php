<!doctype html>
<html lang='en'>
<head>
    <title>@yield('title')</title>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/offcanvas.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" type="text/css">
    <link href="{{ asset('css/vaudit.css') }}" rel="stylesheet" type="text/css">
    @yield('head')
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
      <a class="navbar-brand mr-auto mr-lg-0" href="/index">vAudit</a>
      <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault"></div>
    </nav>

    <section>
        @yield('viewName')
    </section>

    <section>
        @yield('content')
    </section>

    <section>
        @yield('alerts')
    </section>

    <nav class="va-nav-bottom navbar fixed-bottom  text-light ">
      <a class="navbar-brand" href="{{ url('/index')}}" ><i class="fas fa-home text-light"></i></a>
      <a class="nav-link va-nav-bottom-menu-button" href="#" >
          <i class="fas fa-plus-circle fa-2x" style="display:none;padding:0px;color:white;font-weight:bold;"></i>
      </a>
      <a class="nav-link" href="#" style="color:white;margin-right:2px;padding-right:2px;float:right;align:right;right:0;">&copy {{ date('Y')}} | HQNRC
      </a>
    </nav>

    {{-- Javascript Libraries --}}
    <script src="https://use.fontawesome.com/releases/v5.8.2/js/all.js"></script>

</body>
</html>
