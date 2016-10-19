<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
        <meta name="Mohit" content="">
        <?php  echo $this->Html->charset() ?>
        <title>
            Kwikshoot
        <?php //echo $cakeDescription ?>
        <?php //echo $this->fetch('title') ?>
    </title>
    <?php echo $this->Html->meta('icon') ?>
    <?php echo $this->fetch('meta') ?>
    <?php echo $this->fetch('css') ?>
    <?php echo $this->fetch('script') ?>
        <!--  Css start ------>
    <?php echo $this->Html->css('bootstrap.css'); ?>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
     

    <!--   js start   -->
    <?php echo $this->Html->script('jquery.min.js');?>
    <?php echo $this->Html->script('bootstrap.min.js');?>
    <?php echo $this->Html->script('jquery.bootstrap-responsive-tabs.min.js');?>
    <?php echo $this->html->script('jqBootstrapValidation.js');?>
    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

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
div.message error{
    color: #fff;
    text-align: center;
    cursor: pointer;
    display: block;
    font-weight: normal;
    padding: 0 1.5rem 0 1.5rem;
    transition: height 300ms ease-out 0s;
     background: #C3232D;
    color: #626262;
    top: 15px;
    right: 15px;
    z-index: 999;
    overflow: hidden;
    height: 50px;
    line-height: 2.5em;
  
}
        </style>
        
</head>
 <?php echo $this->Flash->render() ?>
 
 <body id="page-top" class="index">

    <!-- Navigation -->
    <?php echo $this->element('header'); ?>
    <!-- Navigation END-->
  
    <!-- Services Section -->
    <?php echo $this->fetch('content') ?>
  
<!--Footer Section-->

<?php echo $this->element('footer'); ?>
 
<!--Footer Section END-->

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<script>
$(document).ready(function(){
    $(".navbar-toggle").click(function(){
        $(".collapse").toggle();
    });
	

	
});
</script>
<script>
   $(document).ready(function() {
    $('#required_video_length').click(function() {
        if ($(this).is(':checked')) {
          $('#required_video_length1').val('');
          $('#required_video_length1').prop("readonly", true);
        }else{
             $('#required_video_length1').prop("readonly", false);
          }
      });
      
      $('#raw_video_length').click(function() {
        if ($(this).is(':checked')) {
          $('#raw_video_length1').val('');
          $('#raw_video_length1').prop("readonly", true);
        }else{
             $('#raw_video_length1').prop("readonly", false);
          }
      });
    
});
</script>

</body>

</html>
