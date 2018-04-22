<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Crime Report</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="../../index2.html" class="navbar-brand"><b>Crime</b>Report</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="#">Home</a></li>
            <li><a href="../newsdisplay.php">News</a></li>
            <li><a href="../safety.php">Safety Tips</a></li>
            <li><a href="../map.html">Help</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Log In <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="../login.php">User</a></li>
                <li class="divider"></li>
                <li><a href="../plogin.php">Policeman</a></li>
                <li class="divider"></li>
                <li><a href="../adminlogin.php">Admin</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">

      <!-- Main content -->
      <section class="content">
        
        <div class="box box-default">
          
          <div class="row">

            <div class="col-md-6">
              <!-- Widget: user widget style 1 -->
              <div class="box box-widget widget-user-2">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-gray">
                  <div class="widget-user-image">
                    <img class="img-circle" src="../dist/img/target.png" alt="User Avatar">
                  </div>
                  <!-- /.widget-user-image -->
                  <h3 class="widget-user-username">Our Mission</h3>
                  <h5 class="widget-user-desc">Fighting Against Crime</h5>
                </div>
                <div class="box-footer padding">
                  <marquee id="p" behavior="scroll" direction="down" scrollamount="8">
                    <ul class="nav nav-stacked">
                      <li class="box-header with-border bg-gray">Protect your family</li>
                      <li class="box-header with-border bg-gray">Your community and the Nation</li>
                      <li class="box-header with-border bg-gray">Terminate Jongi and terrorism activity</li>
                      <li class="box-header with-border bg-gray">Isolate the narcotic procession</li>
                      <li class="box-header with-border bg-gray">Find the identity of wanted fugitives and missing persons</li>
                      <li class="box-header with-border bg-gray">Top most wanted Criminal</li>
                      <li class="box-header with-border bg-gray">Kidnapping & Missing Person</li>
                      <li class="box-header with-border bg-gray">Bank Robbers</li>
                    </ul>
                  </marquee>
                </div>
              </div>
              <!-- /.widget-user -->
            </div>

            <div class="col-md-6">
              <!-- Widget: user widget style 1 -->
              <div class="box box-widget widget-user-2">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-red">
                  <!-- /.widget-user-image -->
                  <marquee behavior="alternate" direction="right" scrollamount="4">
                    <h3 class="widget-user-username">Most Wanted Criminals</h3>
                    <h5 class="widget-user-desc"></h5>
                  </marquee>
                </div>
                <div class="box-footer padding">
                  <marquee id="want" behavior="scroll" direction="down" scrollamount="15" onmouseover="this.stop()" onmouseout="this.start()">
                    <ul class="nav nav-stacked">
                      <li class="box-header with-border bg-white">
                        <img  src="../image/FreedomSohel.gif" width="180px" height="200px" / <br><h5>Sohel Rana Chowdhory</h5>
                      </li>
                      <li class="box-header with-border bg-gray">
                        <img  src="../image/img2.gif" width="180px" height="200px" / <br><h5 >Liakat Hossen </h5>
                      </li>
                      <li class="box-header with-border bg-gray">
                        <img  src="../image/img1.gif" width="180px" height="200px"/ <br><h5>Haris Ahmed </h5>
                      </li>
                      <li class="box-header with-border bg-gray">
                        <img  src="../image/img5.gif" width="180px" height="200px"/ <br><h5>Khandakar Tanveer Islam @ Joy </h5>
                      </li>
                      <li class="box-header with-border bg-gray">
                        <img  src="../image/prakash.gif" width="180px" height="200px"/ <br><h5>Prokash Kumar Biswas  </h5>
                      </li>
                      <li class="box-header with-border bg-gray">
                        <img  src="../image/JaforAhmedManik.gif" width="180px" height="200px"/ <br><h5>Jafor Ahmed @ Manik </h5>
                      </li>
                      <li class="box-header with-border bg-gray">
                        <img  src="../image/AgaShamim.gif" width="180px" height="200px"/ <br><h5>Shamim Ahmed</h5>
                      </li>
                    </ul>
                  </marquee>
                </div>
              </div>
              <!-- /.widget-user -->
            </div>  

          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
      </div>
      <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
      reserved.
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
<style>
#want{
  height:400px;
}
</style>
</html>