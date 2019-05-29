<!doctype html>
<html lang='en'>
<head>
    <title>vAudit</title>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='/css/va-welcome.css' rel='stylesheet'>
</head>
<body>
    <div class="container text-center va-welcome-div m-0 p-0" style="margin:0;padding:0;min-height:100%;max-height:100%">
        <div class="row text-center" style="position:fixed;top:5%;width:100%;padding:0px;margin:auto;overflow:hidden;">
            <div class="col-xs-12 col-sm-12 col-sm-12 col-md-12">
                <div class="container text-center mb-2">
                  <img class="mb-4" src="/images/app-icons/vAudit-Logo-Text.png" alt="" style="min-height:100px;max-height:250px;min-width:25%;max-width:50%;"/>
                </div>
            </div>
        </div>
        <div class="row text-center" style="vertical-align:middle;position:fixed;top:40%;width:100%;height:50%;margin:auto;">
            <div class="col-sm-12 col-md-12">
                <div id="carouselExampleIndicators" class="carousel slide va-carousel" data-ride="carousel" >
                    <div class="carousel-inner" >
                        <div class="carousel-item active">
                            <span class="fa-stack fa-4x" style="vertical-align: top;">
                              <i class="fas fa-circle fa-stack-2x"></i>
                              <i class="fas fa-sitemap fa-stack-1x fa-inverse"></i>
                            </span>
                            <h5>Manage Audits</h5>
                        </div>
                        <div class="carousel-item">
                            <span class="fa-stack fa-4x" style="vertical-align: top;">
                              <i class="fas fa-circle fa-stack-2x"></i>
                              <i class="fas fa-clipboard-check fa-stack-1x fa-inverse"></i>
                            </span>
                            <h5>Fill Checklists</h5>
                        </div>
                        <div class="carousel-item">
                            <span class="fa-stack fa-4x" style="vertical-align: top;">
                              <i class="fas fa-circle fa-stack-2x"></i>
                              <i class="fas fa-calendar-week fa-stack-1x fa-inverse"></i>
                            </span>
                            <h5>Manage Schedules</h5>
                        </div>
                        <div class="carousel-item">
                            <span class="fa-stack fa-4x" style="vertical-align: top;">
                              <i class="fas fa-circle fa-stack-2x"></i>
                              <i class="fas fa-calendar-week fa-stack-1x fa-inverse"></i>
                            </span>
                            <h5>Use Auditor Tools</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center" style="vertical-align:middle;width:100%;padding:0px;margin:auto;border-top:1px solid white;border-bottom:1px solid white;color:white;bottom:5%;position:fixed;">
            <div class="col-sm-12 col-md-12" style="vertical-align:middle;">
                <form method="GET" action="/index">
                    <button class="btn btn-danger btn-block" type="submit">Start</button>
                </form>
            </div>
        </div>
    </div>

{{-- Javascript Libraries --}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js"></script>
</body>
</html>
