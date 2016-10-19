<!DOCTYPE html>
<html>
<head> <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php echo $cakeDescription ?>:
    <?php echo $this->fetch('title') ?>
</title>
<?php echo $this->Html->meta('icon') ?>
<?php echo $this->fetch('meta') ?>
<?php //echo $this->fetch('css') ?>
<?php //echo $this->fetch('script') ?>

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
 
    <!-- Bootstrap Core CSS -->
<!--<link href="css/bootstrap.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet"> -->
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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

    <?php echo $this->element('user_header'); ?>
    <!-- Navigation -->
    <?php echo $this->element('usersidebar'); ?>
    <!-- Navigation END-->
  
    <!-- Services Section -->
    <?php echo $this->fetch('content') ?>
  
<!--Footer Section-->

<?php echo $this->element('user_footer'); ?>
 
<!--Footer Section END-->

   
  <div class="control-sidebar-bg"></div>
</div>

</body>

</html>
