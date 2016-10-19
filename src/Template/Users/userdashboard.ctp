
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Kwikshoot | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <?php echo $this->Html->css('dashboard/bootstrap/css/bootstrap.min.css'); ?>
 <?php echo $this->Html->css('dashboard/dist/css/AdminLTE.min.css'); ?>
   <?php echo $this->Html->css('dashboard/plugins/jvectormap/jquery-jvectormap-1.2.2.css'); ?>
  <?php echo $this->Html->css('dashboard/dist/css/skins/_all-skins.min.css'); ?>
<!--  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">-->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
 <?php echo $this->Html->script('dashboard/plugins/jQuery/jquery-2.2.3.min.js');?>
<?php echo $this->Html->script('dashboard/bootstrap/js/bootstrap.min.js');?>
<?php echo  $this->Html->script('dashboard/plugins/fastclick/fastclick.js');?>
<?php echo  $this->Html->script('dashboard/dist/js/app.min.js');?>
<?php echo  $this->Html->script('dashboard/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js');?>
<?php echo  $this->Html->script('dashboard/plugins/jvectormap/jquery-jvectormap-world-mill-en.js');?>
<?php echo $this->Html->script('dashboard/plugins/slimScroll/jquery.slimscroll.min.js');?>
<?php echo $this->Html->script('dashboard/plugins/chartjs/Chart.min.js');?>
<?php echo  $this->Html->script('dashboard/dist/js/pages/dashboard2.js');?>
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    
    <a href="<?php echo $this->html->url(array('controller'=>'', 'action'=>'index'));?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>K</b>SHT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Kwikshoot</b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- Tasks: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
<!--              <img src="img/shoeb1.jpg" class="user-image" alt="User Image">-->
              <?php echo $this->Html->image('shoeb1.jpg', array('alt'=>'User image' , 'class'=>'user-image','title'=>'User image')); ?>
              <span class="hidden-xs">Mohd Shoeb</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
<!--                <img src="img/shoeb1.jpg" class="img-circle" alt="User Image">-->
                <?php echo $this->Html->image('shoeb1.jpg', array('alt'=>'User image' , 'class'=>'img-circle','title'=>'User image')); ?>
                <p>
                  Mohd Shoeb - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
<!--                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>-->
                <div class="pull-right">
                    <?php echo $this->Html->link('Sign Out',array('controller'=>'registration' ,'action' => 'adminlogin'),array('escape' => false ,'class'=>'btn btn-default btn-flat'));  ?>  
<!--                  <a href="#" class="btn btn-default btn-flat">Sign out</a>-->
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
      <div class="user-panel">
        <div class="pull-left image">
<!--          <img src="img/shoeb1.jpg" class="img-circle" alt="User Image">-->
           <?php echo $this->Html->image('shoeb1.jpg', array('alt'=>'User image' , 'class'=>'img-circle','title'=>'User image')); ?>
        </div>
        <div class="pull-left info">
          <p>Mohd Shoeb</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
     
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="active treeview">
<!--            <a href="index">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>-->
          <?php echo $this->Html->link('<i class="fa fa-dashboard"></i><span>Dashboard</span>',array('action' => 'index'),array('escape' => false));  ?>  
        </li>
        <li class="treeview">
<!--          <a href="pages/user_listing.html">
            <i class="fa fa-users"></i>
            <span>User Listing</span>
          </a>-->
             <?php echo $this->Html->link('<i class="fa fa-users"></i><span>User Listing</span>',array('action' => 'userlisting'),array('escape' => false));  ?> 
        </li>
        <li>
<!--       <! --  <a href="pages/job_listing.html"><i class="fa fa-users">  <span>User Listing</span></i>  </a>-->
             
      <?php echo $this->Html->link('<i class="fa fa-video-camera"></i><span>Job Listing</span>',array('controller' => 'jobs','action' => 'joblisting'),array('escape' => false));  ?> 
        
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Editors</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
<!--                <a href="#"><i class="fa fa-circle-o"></i> Add New</a>-->
            <?php echo $this->Html->link('<i class="fa fa-circle-o"></i><span>Add New</span>',array('controller' => 'editors','action' => 'addnew'),array('escape' => false));  ?> 
            </li>
           <li>
<!--                 <a href="pages/editors.html"><i class="fa fa-circle-o"></i> View All</a>-->
            <?php echo $this->Html->link('<i class="fa fa-circle-o"></i><span>View All</span>',array('controller' => 'editors','action' => 'editorlisting'),array('escape' => false));  ?> 
            </li>
            
          </ul>
        </li>
        
        <li class="treeview">
<!--          <a href="pages/job_calculator.html">
            <i class="fa fa-calculator"></i> <span>Job Calculator</span>
            
          </a>-->
            <?php echo $this->Html->link('<i class="fa fa-calculator"></i><span>Job Calculator</span>',array('action' => 'jobcalculator'),array('escape' => false));  ?> 
        </li>
        <li class="treeview">
<!--          <a href="pages/transaction_listing.html">
            <i class="fa fa-list"></i> <span>Transaction Listing</span>
          </a>-->
            <?php echo $this->Html->link('<i class="fa fa-list"></i><span>Transaction Listing</span>',array('action' => 'translisting'),array('escape' => false));  ?> 
        </li>
        <li>
          <a href="#">
            <i class="fa fa-cog"></i> <span>Setting</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
            <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Change Password</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Sign Out</a></li>
            
          </ul>
        </li>
        
        
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Users</span>
              <span class="info-box-number">98,5624</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-video-camera"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Job</span>
              <span class="info-box-number">41,410</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-user"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Editors</span>
              <span class="info-box-number">53</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
      
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Monthly Recap Report</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>

              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-8">
                  <p class="text-center">
                    <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                  </p>

                  <div class="chart">
                    <!-- Sales Chart Canvas -->
                    <canvas id="salesChart" style="height: 180px;"></canvas>
                  </div>
                  <!-- /.chart-responsive -->
                </div>
                <!-- /.col -->
                
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- ./box-body -->
            
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Main row -->
      
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.5
    </div>
    <strong>Copyright &copy; 2016-2017 <a href="http://kwikshoot.com">Kwikshoot</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>

</body>
</html>
