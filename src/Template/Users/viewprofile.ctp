<?php echo $this->Html->css('bootstrap.css'); ?> 
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User | Profile
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
        <li class="active">Profile</li>
      </ol>
    </section>
    
    <section class="content">
      <div class="row">
       <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
                <?php echo $this->Html->image('shoeb1.jpg', array('alt'=>'User image' , 'class'=>'profile-user-img img-responsive img-circle','title'=>'User image')); ?>
<!--              <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">-->

              <h3 class="profile-username text-center">
              <?php  echo $this->request->session()->read('Name'); ?>
              </h3>

<!--              <p class="text-muted text-center">Software Engineer</p>-->

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Email</b> <a class="pull-right"><?php  echo $this->request->session()->read('Email'); ?></a>
                </li>
                <li class="list-group-item">
                  <b>Phone</b> <a class="pull-right"><?php  echo $this->request->session()->read('Phone'); ?></a>
                </li>
                <li class="list-group-item">
                  <b>City</b> <a class="pull-right"><?php  echo $this->request->session()->read('City'); ?></a>
                </li>
                <li class="list-group-item">
                  <b>State</b> <a class="pull-right"><?php  echo $this->request->session()->read('State'); ?></a>
                </li>
                <li class="list-group-item">
                  <b>Country</b> <a class="pull-right"><?php  echo $this->request->session()->read('Country'); ?></a>
                </li>
              </ul>

              <?php echo $this->Html->link('Update Your Profile', array('action' => 'update',  $this->request->session()->read('ID')) ,array('class' => 'btn btn-primary btn-block'),array('escape' => false)); ?>  
<!--              <a href="#" class="btn btn-primary btn-block"><b>Update Your Profile</b></a>-->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->
       
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    
    <!-- Main content -->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

