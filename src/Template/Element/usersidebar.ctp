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
          <p> <?php  echo $this->request->session()->read('Name'); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="active treeview">
          <?php echo $this->Html->link('<i class="fa fa-dashboard"></i><span>Dashboard</span>',array('controller'=>'users','action' => 'dashboard'),array('escape' => false));  ?>  
        </li>
        <li>
      <?php echo $this->Html->link('<i class="fa fa-user"></i><span>Profile</span>',array('controller' => 'users','action' => 'viewprofile'),array('escape' => false));  ?>     
        </li> 
        
        <li>          
 <?php echo $this->Html->link('<i class="fa fa-video-camera"></i><span>Job Listing</span>',array('controller' => 'jobs','action' => 'joblisting'),array('escape' => false));  ?> 
        </li>
        <li>    
 <?php echo $this->Html->link('<i class="fa fa-video-camera"></i><span>Add Job</span>',array('controller' => 'jobs'),array('escape' => false,'target' => '_blank'));  ?> 
        </li>
        <li>
          <a href="#">
            <i class="fa fa-cog"></i> <span>Setting</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
            <ul class="treeview-menu">
           <li> <?php echo $this->Html->link('<i class="fa fa-key"></i>Change Password',array('controller'=>'users','action' => 'updatepassword'),array('escape' => false));  ?> </li>
            <li> <?php echo $this->Html->link('<i class="fa fa-sign-out"></i>Sign Out',array('controller'=>'registration' ,'action' => 'userlogout'),array('escape' => false));  ?> </li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>


