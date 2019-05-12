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
    <div class="container text-center va-welcome-div" style="margin:0;padding:0;min-height:100%;max-height:100%">
        <div class="row text-center" style="position:fixed;top:5%;width:100%;padding:0px;margin:auto;overflow:hidden;">
            <div class="col-sm-12 col-md-12">
                <div class="container-fluid text-center mb-2">
                  <img class="mb-4" src="/images/app-icons/vAudit-Logo-Text.png" alt="" style="min-height:100px;max-height:250px;min-width:25%;max-width:55%;"/>
                </div>
            </div>
        </div>
        <div class="row text-center" style="vertical-align:middle;position:fixed;top:30%;width:100%;height:50%;margin:auto;">
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
        <div class="row text-center" style="vertical-align:middle;width:100%;padding:0px;margin:auto;border-top:1px solid white;border-bottom:1px solid white;color:white;bottom:15%;position:fixed;">
            <div class="col-sm-12 col-md-12" style="vertical-align:middle;">
                <a href="/login">
                <button class="btn btn-danger btn-block" type="button" href="/login" style="border:2px solid black;vertical-align:middle;color:white;font-weight:bold;">
                    Log In <i class="fas fa-sign-in-alt"></i>
                </button>
            </a>
            </div>
        </div>
        <div class="row text-center" style="vertical-align:middle;width:100%;padding:0px;margin:auto;border-top:1px solid white;border-bottom:1px solid white;color:white;bottom:5%;position:fixed;">
            <div class="col-sm-6 col-md-6" style="vertical-align:middle;width:50%">
                <a href="/about">
                <button class="btn btn-danger btn-block" type="button" style="border:2px solid black;vertical-align:middle;color:white;font-weight:bold;">
                    <i class="fas fa-info-circle"></i> About
                </button>
            </a>
            </div>
            <div class="col-sm-6 col-md-6" style="vertical-align:middle;width:50%">
                <button class="btn btn-danger btn-block" type="button" href="/login" style="border:2px solid black;vertical-align:middle;color:white;font-weight:bold;">
                    <i class="fas fa-question-circle"></i> Help
                </button>
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
