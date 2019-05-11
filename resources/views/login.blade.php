<!doctype html>
<html lang="en">
  <head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="vAudit Application">
    <meta name="author" content="Christopher Sheppard">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" rel="stylesheet">
    <link href='/css/floating-labels.css' rel='stylesheet'>
  </head>

  <body>
     <div class="container-fluid">
    <form class="form-signin" id="formLogin" name="formLogin" method="POST" action="{{ action('AppController@processFormLogin') }}">
        {{ csrf_field() }}
      <div class="text-center mb-2">
        <img class="mb-4" src="/images/app-icons/vAudit-Logo-Text.png" alt="" width="200" height="160" />

      </div>

      <div class="form-label-group mb-2">
        <input type="text" id="uswin" name="uswin" class="form-control"  required autofocus>
        <label for="uswin" >USWIN ID</label>
      </div>

      <div class="form-label-group mb-2">
        <input type="password" id="password" name="password" class="form-control" required>
        <label for="password">Password</label>
      </div>

      <button class="btn btn-lg btn-danger btn-block" type="submit">Sign In</button>
      <p class="mt-5 mb-3 text-muted text-center">&copy; {{ date('Y'). ' Verizon'}}</p>
    </form>
</div>
  </body>
</html>
