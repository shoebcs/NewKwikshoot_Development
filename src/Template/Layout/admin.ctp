
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Kwikshoot | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <?php echo $this->Html->css('dashboard/bootstrap/css/bootstrap.css'); ?>
 <?php echo $this->Html->css('dashboard/dist/css/AdminLTE.css'); ?>
   <?php //echo $this->Html->css('dashboard/plugins/jvectormap/jquery-jvectormap-1.2.2.css'); ?>
  <?php echo $this->Html->css('dashboard/dist/css/skins/_all-skins.min.css'); ?>
  <?php echo $this->Html->css('dashboard/plugins/datatables/dataTables.bootstrap.css'); ?>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
 <?php echo $this->Html->script('dashboard/plugins/jQuery/jquery-2.2.3.min.js');?>
<?php echo $this->Html->script('dashboard/bootstrap/js/bootstrap.min.js');?>
<?php echo  $this->Html->script('dashboard/plugins/fastclick/fastclick.js');?>
<?php echo  $this->Html->script('dashboard/dist/js/app.min.js');?>
<?php echo $this->Html->script('dashboard/plugins/slimScroll/jquery.slimscroll.min.js');?>
<?php //echo $this->Html->script('dashboard/plugins/chartjs/Chart.min.js');?>
<?php //echo  $this->Html->script('dashboard/dist/js/pages/dashboard2.js');?>
  <?php echo  $this->Html->script('dashboard/plugins/datatables/jquery.dataTables.min.js');?>
  <?php echo  $this->Html->script('dashboard/plugins/datatables/dataTables.bootstrap.min.js');?>

</head>
    <style>
div.message {
    text-align: center;
    cursor: pointer;
    display: block;
    font-weight: normal;
    padding: 0 1.5rem 0 1.5rem;
    transition: height 300ms ease-out 0s;
    background-color: #a0d3e8;
    color: #626262;
    top: 15px;
    right: 15px;
    z-index: 999;
    overflow: hidden;
    height: 50px;
    line-height: 2.5em;
}
.error-message{color:red;}
        </style>
        
</head>

           
    <?php echo $this->Flash->render() ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">    
<body id="page-top" class="index">

    <?php echo $this->element('admin_header'); ?>
    <!-- Navigation -->
    <?php echo $this->element('admin_sidebar'); ?>
    <!-- Navigation END-->
  
    <!-- Services Section -->
    <?php echo $this->fetch('content') ?>
  
<!--Footer Section-->

<?php echo $this->element('admin_footer'); ?>
 
<!--Footer Section END-->

   
  <div class="control-sidebar-bg"></div>
</div>

</body>

</html>
