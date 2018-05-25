<?php
/**
 * Created by PhpStorm.
 * User: Ary Sugiarto
 * Date: 07/04/17
 * Time: 20:03
 */
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-book"></i> <span>Buku Tamu</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">

                <h2><a href="login.html"> Login</a></h2>
              </div>
            </div>

            <br/>

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menu</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a><i class="fa fa-user"></i> Profile<span class="fa fa-chevron-down"></span></a>

                  </li>
                  <li><a><i class="glyphicon glyphicon-earphone"></i> Contact <span class="fa fa-chevron-down"></span></a>

                  </li>
                </ul>
              </div>
              <div class="menu_section">
              </div>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">John Doe
<span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">

            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">

            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">

            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">

            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">

            </div>
          </div>
          <!-- /top tiles -->
          <div class="container text-left">


            <div class="col-md-8 col-md-offset-2">
              <form class="form-horizontal " method="post" action="simpanproses.php" >
                <div class="form-group">
                  <div class="col-sm-3 label-column">
                    <label class="control-label" >Nama </label>
                  </div>
                  <div class="col-sm-8 input-column">
                    <input class="form-control" type="text" placeholder="Nama" name="nama">
                  </div>
                </div>
                  <div class="form-group">
                      <div class="col-sm-3 label-column">
                          <label class="control-label" >Alamat </label>
                      </div>
                      <div class="col-sm-8 input-column">
                          <input class="form-control" type="text" placeholder="Alamat" data-type="text" name="alamat">
                      </div>
                  </div>
                <div class="form-group">
                  <div class="col-sm-3 label-column">
                    <label class="control-label" >No Telephone</label>
                  </div>
                  <div class="col-sm-8 input-column">
                    <input class="form-control" type="text" placeholder="No Telephone" name="notelp">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-3 label-column">
                    <label class="control-label">Email </label>
                  </div>
                  <div class="col-sm-8 input-column" >
                    <input class="form-control" type="email" placeholder="Email" name="email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-3 label-column">
                    <label class="control-label">Tanggal </label>
                  </div>
                  <div class="col-sm-8 input-column" ><p id="demo"></p>

                    <input class="form-control" type="date" placeholder="Tanggal Bertamu" name="tgl" >
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-3 label-column">
                    <label class="control-label" >Pesan</label>
                  </div>
                  <div class="col-sm-9 input-column">
                    <textarea cols="65" rows="6" placeholder="Pesan" data-type="text" name="pesan"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-3 label-column">
                  </div>
                  <div class="col-sm-9 input-column">
                    <button class="btn btn-default submit-button" type="submit"><i class="fa fa-send"></i>Send</button>
                    <button class="btn btn-default submit-button" type="Reset"><i class="fa fa-refresh"></i> Reset</button>
                  </div>
                </div>
              </form>
                <div class="container text-left">
                    <hr class="row register-form">
                </div>
              <?php

                require_once "koneksi.php";
                $link = connect();

                $tampil = mysqli_query($link,"SELECT * FROM tamu ");


                ?>


<div class="row register-form">
    <div class="col-md-12 col-md-offset-1">
        <hr>Data Tampil</hr>
        <div class="panel panel-info">
            <div class="panel-body">
                <table class="table table-hover table-responsive">
                    <thead>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No Telephone</th>
                    <th>Email</th>
                    <th>Tgl Bertamu</th>
                    <th>Pesan</th>
                    </thead>
                    <tbody>
                    <?php
                    while ($dat = mysqli_fetch_array ($tampil)){
                        ?>
                        <tr>
                            <td><?= $dat["Id"]?></td>
                            <td><?= $dat["Nama"]?></td>
                            <td><?= $dat["Alamat"]?></td>
                            <td><?= $dat["No_telp"]?></td>
                            <td><?= $dat["Email"]?></td>
                            <td><?= $dat["Tanggal"]?></td>
                            <td><?= $dat["Pesan"]?></td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="../vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../vendors/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="../vendors/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="../vendors/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="../vendors/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="../vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="../vendors/Flot/jquery.flot.js"></script>
<script src="../vendors/Flot/jquery.flot.pie.js"></script>
<script src="../vendors/Flot/jquery.flot.time.js"></script>
<script src="../vendors/Flot/jquery.flot.stack.js"></script>
<script src="../vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="../vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="../vendors/DateJS/build/date.js"></script>
<!-- JQVMap -->
<script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="../vendors/moment/min/moment.min.js"></script>
<script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>

</body>
</html>
