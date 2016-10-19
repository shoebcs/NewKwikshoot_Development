<header class="main-header">

    <!-- Logo -->
    <a href="<?php echo $this->Url->build([ "controller" => "users",   "action" => "index"]); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>K</b>SHT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><?php echo $this->Html->image('logo.png', array('alt'=>'Kwikshoot Logo' , 'title'=>'Kwikshoot Logo')); ?></span>
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
              <?php echo $this->Html->image('shoeb1.jpg', array('alt'=>'User image' , 'class'=>'user-image','title'=>'User image')); ?>
              <span class="hidden-xs">Admin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
               <?php echo $this->Html->image('shoeb1.jpg', array('alt'=>'User image' , 'class'=>'img-circle','title'=>'User image')); ?>
                <p>
                  Admin
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                    <?php echo $this->Html->link('Sign Out',array('controller'=>'registration' ,'action' => 'adminlogout'),array('escape' => false ,'class'=>'btn btn-default btn-flat'));  ?>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>

    </nav>
  </header>