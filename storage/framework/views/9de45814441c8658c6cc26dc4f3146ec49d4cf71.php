<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>EximDoc | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo e(asset('bower_components/bootstrap/dist/css/bootstrap.min.css')); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset('bower_components/font-awesome/css/font-awesome.min.css')); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo e(asset('bower_components/Ionicons/css/ionicons.min.css')); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('dist/css/AdminLTE.min.css')); ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo e(asset('dist/css/skins/_all-skins.min.css')); ?>">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo e(asset('bower_components/morris.js/morris.css')); ?>">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo e(asset('bower_components/jvectormap/jquery-jvectormap.css')); ?>">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo e(asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')); ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo e(asset('bower_components/bootstrap-daterangepicker/daterangepicker.css')); ?>">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo e(asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')); ?>">

  <!-- Google Font -->
  <link rel="stylesheet" href="<?php echo e(asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic')); ?>">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>E</b>D</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>EximDoc</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown tasks-menu">
            <a href="#" target="_blank" >
              Customs Exchange Rate
            </a>
          </li>


          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs"><?php echo e(Auth::user()->name); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <p>
                  <?php echo e(Auth::user()->name); ?>

                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">

                <a class="btn btn-default btn-flat" href="<?php echo e(route('logout')); ?>"
                  onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <?php echo e(__('Sign out')); ?>

                </a>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                  <?php echo csrf_field(); ?>
                </form>
                  
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class=" treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-folder-open"></i>
            <span>Master Detail</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo e(url('consigneedetail')); ?>"><i class="fa fa-user"></i> Consignee Detail</a></li>
            <li><a href="<?php echo e(url('bankdetail')); ?>"><i class="fa fa-bank"></i> Master Detail</a></li>
            <li><a href="<?php echo e(url('productdetail')); ?>"><i class="fa fa-shopping-cart"></i> Product Detail</a></li>
            <li><a href="<?php echo e(url('currency')); ?>"><i class="fa fa-money"></i>Currency</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo e(url('proformainvoice')); ?>">
            <i class="fa fa-file-text-o"></i> <span>Proforma Invoice</span>
          </a>
        </li>
        <li>
          <a href="<?php echo e(url('paymentreceiptentry')); ?>">
            <i class="fa fa-money"></i> <span>Payment Receipt Entry</span>
          </a>
        </li>
        <li>
          <a href="<?php echo e(url('generatedoc')); ?>">
            <i class="fa fa-list-alt"></i> <span>Generate Docs</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-ship"></i>
            <span>Post Shipment Docs</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo e(url('billexchange')); ?>"><i class="fa fa-exchange"></i> Bill of Exchange</a></li>
            <li><a href="<?php echo e(url('bankcollectionletter')); ?>"><i class="fa fa-envelope"></i> Bill Collection Letter</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo e(url('generatereport')); ?>">
            <i class="fa fa-area-chart"></i> <span>Generate Report</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cogs"></i>
            <span>General Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo e(url('changepassword')); ?>"><i class="fa fa-shield"></i> Change Password</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo e(url('paymentplan')); ?>">
            <i class="fa fa-inr"></i> <span>Payment Plan</span>
          </a>
        </li>
        <li>
          <a href="<?php echo e(url('planinvoice')); ?>">
            <i class="fa fa-copy"></i> <span>Plan Invoice</span>
          </a>
      </ul>

      <ul class="sidebar-menu">
        <li>
          <a><i class="fa fa-user text-aqua"></i><span>Current Plan:</span><br>
            <i class="fa fa-hand-o-right green"></i><span class="green"><b>FREE PLAN</b></span>
          </a>
        </li>
      </ul>

    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contain
    s page content -->
  <div class="content-wrapper">
   <?php echo $__env->yieldContent('content'); ?>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2019 <a href="https://adminlte.io">EximDoc</a>.</strong> All rights
    reserved.
  </footer>

  <aside class="control-sidebar control-sidebar-dark">
      <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
        <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
      </ul>
    <div class="control-sidebar-bg"></div>
  </aside>

  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo e(asset('bower_components/jquery/dist/jquery.min.js')); ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo e(asset('bower_components/jquery-ui/jquery-ui.min.js')); ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo e(asset('bower_components/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
<!-- Morris.js charts -->
<script src="<?php echo e(asset('bower_components/raphael/raphael.min.js')); ?>"></script>
<script src="<?php echo e(asset('bower_components/morris.js/morris.min.js')); ?>"></script>
<!-- Sparkline -->
<script src="<?php echo e(asset('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')); ?>"></script>
<!-- jvectormap -->
<script src="<?php echo e(asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')); ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo e(asset('bower_components/jquery-knob/dist/jquery.knob.min.js')); ?>"></script>
<!-- daterangepicker -->
<script src="<?php echo e(asset('bower_components/moment/min/moment.min.js')); ?>"></script>
<script src="<?php echo e(asset('bower_components/bootstrap-daterangepicker/daterangepicker.js')); ?>"></script>
<!-- datepicker -->
<script src="<?php echo e(asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')); ?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo e(asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')); ?>"></script>
<!-- Slimscroll -->
<script src="<?php echo e(asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')); ?>"></script>
<!-- FastClick -->
<script src="<?php echo e(asset('bower_components/fastclick/lib/fastclick.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('dist/js/adminlte.min.js')); ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo e(asset('dist/js/pages/dashboard.js')); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(asset('dist/js/demo.js')); ?>"></script>
</body>
</html>
<?php /**PATH D:\Laravel\EximDoc\resources\views/layouts/admin.blade.php ENDPATH**/ ?>