<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
           <?php echo $this->Html->image('shoeb1.jpg', array('alt'=>'User image' , 'class'=>'img-circle','title'=>'User image')); ?>
        </div>
        <div class="pull-left info">
          <p><?php echo $this->request->session()->read('First_Name'); ?>
          <?php echo $this->request->session()->read('Last_Name'); ?>
          </p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
     
      <ul class="sidebar-menu">
        <li class="active treeview">

          <?php echo $this->Html->link('<i class="fa fa-dashboard"></i><span>Dashboard</span>',array('controller' => 'editors','action' => 'dashboard'),array('escape' => false));  ?>  
        </li>
       <li>
      <?php echo $this->Html->link('<i class="fa fa-user"></i><span>Profile</span>',array('controller' => 'editors','action' => 'viewprofile'),array('escape' => false));  ?> 
        </li>
       <li>          
 <?php echo $this->Html->link('<i class="fa fa-video-camera"></i><span>My Job</span>',array('controller' => 'jobs','action' => 'joblisting'),array('escape' => false));  ?> 
        </li> 
        <li>
          <a href="#">
            <i class="fa fa-cog"></i> <span>Setting</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
            <ul class="treeview-menu">
            <li><?php echo $this->Html->link('<i class="fa fa-sign-out"></i>Change Password',array('controller'=>'editors' ,'action' => 'updatepassword'),array('escape' => false));  ?> </li>
            <li> <?php echo $this->Html->link('<i class="fa fa-sign-out"></i>Sign Out',array('controller'=>'registration' ,'action' => 'editorlogout'),array('escape' => false));  ?> </li>
            
          </ul>
        </li>
    </section>
    <!-- /.sidebar -->
  </aside>