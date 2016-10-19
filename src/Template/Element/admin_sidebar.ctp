<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <?php echo $this->Html->image('shoeb1.jpg', array('alt'=>'User image' , 'class'=>'img-circle','title'=>'User image')); ?>
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
     
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="active treeview">
<!--            <a href="index">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>-->
          <?php echo $this->Html->link('<i class="fa fa-dashboard"></i><span>Dashboard</span>',array('controller' => 'users','action' => 'index'),array('escape' => false));  ?>  
        </li>
        <li class="treeview">
<!--          <a href="pages/user_listing.html">
            <i class="fa fa-users"></i>
            <span>User Listing</span>
          </a>-->
             <?php echo $this->Html->link('<i class="fa fa-users"></i><span>User Listing</span>',array('controller' => 'users','action' => 'userlisting'),array('escape' => false));  ?> 
        </li>
        <li>
<!--       <! --  <a href="pages/job_listing.html"><i class="fa fa-users">  <span>User Listing</span></i>  </a>-->
             
      <?php echo $this->Html->link('<i class="fa fa-video-camera"></i><span>Job Listing</span>',array('controller'=>'jobs', 'action' => 'joblisting'),array('escape' => false));  ?> 
        
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
          <a href="#">
            <i class="fa fa-calculator"></i> <span>Job Calculator</span></a>
  <?php //echo $this->Html->link('<i class="fa fa-calculator"></i><span>Job Calculator</span>',array('action' => ''),array('escape' => false));  ?> 
        </li>
        <li class="treeview">
         <a href="#">
            <i class="fa fa-list"></i> <span>Transaction Listing</span>
          </a>
            <?php //echo $this->Html->link('<i class="fa fa-list"></i><span>Transaction Listing</span>',array('action' => '#'),array('escape' => false));  ?> 
        </li>
        <li>
          <a href="#">
            <i class="fa fa-cog"></i> <span>Setting</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
            <ul class="treeview-menu">
<!--            <li><a href="#"><i class="fa fa-circle-o"></i> Change Password</a></li>-->
             <li> <?php echo $this->Html->link('<i class="fa fa-sign-out"></i>Sign Out',array('controller'=>'registration' ,'action' => 'adminlogout'),array('escape' => false));  ?> </li>
<!--            <li><a href="#"><i class="fa fa-circle-o"></i> Sign Out</a></li>-->
            
          </ul>
        </li>
        
        
    </section>
    <!-- /.sidebar -->
  </aside>