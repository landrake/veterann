<!DOCTYPE html>
<html lang="en">

<head>

    <title>FORM CAVET</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Cavet Apps">

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/datepicker.min.css" />
    <link rel="stylesheet" href="assets/css/datepicker3.css" />
    <link rel="stylesheet" href="assets/css/style.css" />

    <!-- jQuery -->
    <script src="assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/datepicker.min.js"></script>

</head>

<body>

    <div class="header-black">
        
    </div>
    <div class="header">
        <div class="header-left col-xs-8">
            <img class="img img-responsive pull-left" src="assets/images/logo_dir_veteran.png">
            <div class="header-title">
                <h3>SISTEM INFORMASI PERSONEL DAN VETERAN</h3>
                <h3>DIREKTORAT VETERAN</h3>
                <h6>DIREKTORAT JENDRAL POTENSI PERTAHANAN<br>KEMENTERIAN PERTAHANAN REPUBLIK INDONESIA</h6>
            </div>
        </div>
        <div class="header-right col-xs-4">
            <div class="pull-right">
                <img class="img img-responsive pull-left" src="assets/images/date.png">
                <div class="time" id="jam"></div>
                <div class="date"><?php echo date("d F Y"); ?></div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-default" role="navigation" id="custom-nav">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Beranda</a>
                    </li>
                    <li>
                        <a href="#">Data Veteran</a>
                    </li>
                    <li>
                        <a href="#">Eksport Data</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>