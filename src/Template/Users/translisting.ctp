
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
   <a href="<?php echo $this->Url->build([ "controller" => "users",   "action" => "index"]); ?>" class="logo">
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
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
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
             
      <?php echo $this->Html->link('<i class="fa fa-video-camera"></i><span>Job Listing</span>',array('action' => 'joblisting'),array('escape' => false));  ?> 
        
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
            <li><a href="#"><i class="fa fa-circle-o"></i> Add New</a></li>
           <li>
<!--                 <a href="pages/editors.html"><i class="fa fa-circle-o"></i> View All</a>-->
            <?php echo $this->Html->link('<i class="fa fa-circle-o"></i><span>View All</span>',array('action' => 'viewall'),array('escape' => false));  ?> 
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
        Dashboard  |  Transaction Listing
        
      </h1>
        <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
<!--              <h3 class="box-title">Hover Data Table</h3>-->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>S.No</th>
                  <th>Job Name</th>
                  <th>Job ID</th>
                  <th>Job Price</th>
                  <th>Transaction Status</th>
                </tr>
                </thead>
                <tbody>
                
                <tr>
                  <td>1.</td>
                  <td>Video
                  </td>
                  <td>568975</td>
                  <td> $195</td>
                  <td> Success</td>
                  
                </tr>
                <tr>
                  <td>2.</td>
                  <td>Shaadi-e-khas
                  </td>
                  <td>245675</td>
                  <td> $215</td>
                  <td> Pending</td>
                </tr>
                
                  
                
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Transaction Listing</li>
      </ol>
    </section>

    <!-- Main content -->

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.5
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://kwikshoot.com">Kwikshoot</a>.</strong> All rights
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
