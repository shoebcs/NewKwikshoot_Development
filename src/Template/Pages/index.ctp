<!DOCTYPE html>
<html>
    
    <?php
 $_SESSION['title']='Home';
 $_SESSION['menu']='home';
 include("header.ctp");
 ?> 
<body>
   <?php echo $this->Html->css('style'); ?>
<div id="wrapper">
    <div id="logo">
        <a href="#">   <?php echo $this->Html->image('logo.jpg', array('alt' => 'CakePHP' , 'height' => 40, 'width' => 150))?></a></div>
<ul id="main_nav">
 <li><a id="home" href="users/index">Home</a></li>
 <li><a id="about" href="users/about">About Us</a></li>
 <li><a id="projects" href="users/contactus">Contact US</a></li>
</ul>

<div id="content">
    
    <a href="#"><?php echo $this->Html->image('images.jpg', array('alt' => 'CakePHP' , 'height' => 150, 'width' => 960))?></a>
    <div id="main-content">
        <center> <h1>Welcome to our Site.</h1>
 our content will be shown here.
 
 </center>
 </div>
  
 <div id="login-register">
     <a href="users/login"/><button id="login"> Login </button></a>
 <a href="users/add"/><button id="register"> Registration</button></a>
 </div>
 
 <div id="how-to-register">
     <h2>How To Register ??</h2>
     <p> <ul>
         <li>Go to the web address provided to you by your instructor.</li>
         <li>Click on REGISTER NOW.</li>
<li>Enter your email address.</li>
<li>Select from one of three options.</li>
<li>Next, you will need to fill out the registration form.</li>
<li>You are now at your instructor's course.</li>
<li>To Return to Connect</li>
<center><a  href="users/add"> <button>Register</button></a> </center>
     </ul></p>
   </div> 
  <div class="post-section">

<ul id="display-inline-block-example">
	<li>This is the first part of the text, the part that will be seen originally.
         and now we have to see what we have done so far ...
    <a href="#" class="read_more">Read More</a></li>
	<li>This is the Second part of the text, the part that will be seen originally.
         and now we have to see what we have done ...
    <a href="#" class="read_more">Read More</a></li>
	<li>This is the Third part of the text, the part that will be seen originally.
         and now we have to see what we have done so far ...
    <a href="#" class="read_more">Read More</a></li>
</ul>
 </div>
    
 
 
 </div>



</div>

<?php
include('footer.ctp');
?>
</body>
</html >
<style>
      .btn-primary {
   background-color: #dd0c1f;
    border-color: #dd0c1f;
    color: #fff;
    text-transform: uppercase;
}
      </style>