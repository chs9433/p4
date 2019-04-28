<!doctype html>
<html lang='en'>
<head>
    <title>@yield('title')</title>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" rel="stylesheet">
    <link href='/css/vaudit.css' rel='stylesheet'>
    @yield('head')
</head>
<body>
    <header>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container-fluid d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center" style="margin:auto 0; padding:2px;">
            <i class="fas fa-project-diagram" style="margin:auto;margin-right:5px;"></i>
            <h5><strong>vAudit</strong></h5>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
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

{{-- Javascript Libraries --}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js"></script>
</body>
</html>
