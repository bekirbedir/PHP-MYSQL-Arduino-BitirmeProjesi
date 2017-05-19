<!DOCTYPE html>
<html lang="en">

<head>
<?php error_reporting(E_ALL ^ E_DEPRECATED);
 ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <title>Yangın Alarm Proje</title>

	
    <!-- Bootstrap Core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">


    <!-- Morris Charts CSS -->
    <link href="./css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    

    <!-- Custom CSS -->
    <link href="./css/stil.css" rel="stylesheet" type="text/css">
     <!-- Custom CSS -->
    
<link rel="stylesheet" type="text/css" media="all" href="./font-awesome/css/font-awesome.min.css"/> 
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
</head>

<body>

    <div id="wrapper">
 
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">SB Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Bekir Bedir</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Bekir Bedir</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Bekir Bedir</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Bekir Bedir <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profil</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i>Gelen Kutusu</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i>Hesap Ayarları</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i>Çıkış Yap</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Anasayfa</a>
                    </li>
                    
                    <li>
                        <a href="cihazlar.php"><i class="fa fa-fw fa-desktop"></i> Cihazlar</a>
                    </li>
                      <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-list-alt"></i> Tablolar <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="yanginAlarm.php"><i class="fa fa-table" aria-hidden="true"></i>Son Güncellemeler</a>
                            </li>
                            <li>
                                <a href="kritikDurumlar.php"><i class="fa fa-table" aria-hidden="true"></i>Kritik Durumlar</a>
                            </li>
                              <li>
                                <a href="cihazAyrinti.php"><i class="fa fa-table" aria-hidden="true"></i>Cihaz Kayıtları</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="grafikler.php"><i class="fa fa-fw fa-bar-chart-o"></i>Grafikler</a>
                    </li>
                  
                    <li>
                        <a href="ayarlar.php"><i class="fa fa-fw fa-wrench"></i>Ayarlar</a>
                    </li>
                    <li>
                        <a href="yardim.php"><i class="fa fa-fw fa-info"></i>Yardım</a>
                    </li>
                    
                  
                   
                    <li>
                        <a href="yenicihaz.php"><i class="fa fa-plus-circle"></i> Kullanici Ekle</a>
                    </li>
                     <li>
                        <a href="duzenlecihaz.php"><i class="fa fa-pencil" aria-hidden="true"></i> Kullanici Duzenle</a>
                    </li>
                     <li>
                        <a href="kullanicilar.php"><i class="fa fa-user-o" aria-hidden="true"></i></i> Kullanicilar</a>
                    </li>
                    <li>    
                        <a href="bos.php"><i class="fa fa-fw fa-file"></i> Boş Sayfa</a>
                    </li>
                    <li>
                        <a href="bos.php"><i class="fa fa-fw fa-file"></i> Boş Sayfa</a>
                    </li>
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
             <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
               
                <!-- /.row -->


                <!-- /.row -->

                <div class="row">