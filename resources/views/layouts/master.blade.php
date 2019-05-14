<!doctype html>
<html lang='en'>
<head>
    <title>@yield('title')</title>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/font-awesome-all.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="{{ asset('css/vaudit.css') }}" rel="stylesheet" type="text/css">
    @yield('head')
</head>
<body>
    <header>
      <div class="navbar navbar-dark box-shadow" style="background-color:gray;margin:0;padding:2px;">
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

<nav class="navbar fixed-bottom navbar-expand-sm text-light" style="background-color:red;margin:auto;padding:0px;vertical-align:middle;">
  <a class="navbar-brand" href="{{ url('/index')}}" style="float:left;"><i class="fas fa-home"></i></a>
  <div style="margin:0;padding-right:2px;float:right;align:right;">&copy {{ date('Y')}} | HQNRC</div>
</nav>

{{-- Javascript Libraries --}}
<link href="{{ asset('js/jquery-3.3.1.slim.min.js') }}" type="text/javascript">
<link href="{{ asset('js/popper.min.js') }}" type="text/javascript">
<link href="{{ asset('js/bootstrap.min.js') }}" type="text/javascript">
<script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>
</body>
</html>
