<?php echo $this->Html->css('bootstrap.css'); ?> 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User | Change Password
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
        <li class="active">Change Password</li>
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
              <?php  //echo $this->request->session()->read('First_Name'); ?>
              <?php // echo $this->request->session()->read('Last_Name'); ?>
              </h3>
              <?php echo $this->Form->create(); 
                $this->Flash->render('auth');
               ?> 
                <div class="form-group has-feedback">
      <div class="input text required"><label for="first-name">New Password*</label>
      <?php 
                        echo $this->Form->input('password', array( 'type' => 'password',
                                   'autocomplete' => 'off',
                                   'placeholder' => 'New Password',                                    
                                   'class' => 'form-control',
                                   'label' => false,
                                   'div' => false,
                                    'minlength'=>6,
                                   'maxlength'=>50,
                                   'value' =>$password,
                                   'required'=>true
                               )
                        );
                         ?></div>    </div>
      <div class="form-group has-feedback">
      <div class="input text required"><label for="first-name">Confirm Password*</label>
      <?php 
                        echo $this->Form->input('confirmpassword', array( 'type' => 'password',
                                   'autocomplete' => 'off',
                                   'placeholder' => 'Confirm password',                                    
                                   'class' => 'form-control',
                                   'label' => false,
                                   'div' => false,
                                   'minlength'=>6,
                                   'maxlength'=>50,
                                   'value' =>$password,
                                   'required'=>true
                               )
                        );
                         ?>
      </div>    </div>
                <div class="col-xs-4" style="left: 17px;">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
            </div>
         <?php echo $this->Form->end(); ?>
            </div>
            <!-- /.box-body -->
          </div>
          
        </div>
      </div>
      <!-- /.row -->
    </section>
    
    <!-- Main content -->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->