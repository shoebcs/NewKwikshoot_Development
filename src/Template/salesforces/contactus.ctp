<div class="register-box">
  <div class="register-logo">
    <a href="#"><b>Kwikshoot Contact us</b></a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Please Fill out all below Fields</p>

   <?php echo $this->Form->create($user); ?>
      <div class="form-group has-feedback">
               <?php  echo $this->Form->input('first_name', array(
                                            'class' =>'form-control',
                                            'placeholder' => 'First Name',
                                            'type'=>'text',                                                                           
                                            'required' =>true,
                                            'maxlength'=>50
                                             )); ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
    <div class="form-group has-feedback">
               <?php  echo $this->Form->input('last_name', array(
                                            'class' =>'form-control',
                                            'placeholder' => 'Last Name',
                                            'type'=>'text',                                                                           
                                            'required' =>true,
                                            'maxlength'=>50
                                             )); ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
         <?php  
         echo $this->Form->input('email', array( 'type' => 'email',
                                                                        'class' =>'form-control',
                                                                        'placeholder' => 'Email',
                                                                        'type'=>'text',                                                                           
                                                                        'required' =>true,
                                                                        'maxlength'=>50
                                                                    )
                                                        ); 
         ?>
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
         <?php  
         echo $this->Form->input('phone', array( 
                                                                        'class' =>'form-control',
                                                                        'placeholder' => 'Phone',
                                                                        'type'=>'text',                                                                           
                                                                        'required' =>true,
                                                                        'maxlength'=>10
                                                                    )
                                                        ); 
         ?>
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>
     
<!--      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Retype password">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>-->
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> I agree to the <a href="#">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <?php echo $this->Form->submit('Submit', array(
                                     'class' => 'btn btn-primary btn-block btn-flat',
                                 ));
                        ?>
        </div>
         <?php echo $this->Html->link('Cancel' , array('action'=>'index') ,array('escape'=>'false', 'class'=>'btn btn-fprimary btn-block btn-flat'));?>
        <!-- /.col -->
      </div>
    
<!--    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
        Google+</a>
    </div>-->

       
  <?php echo $this->Form->end(); ?>
  </div>
  <!-- /.form-box -->
</div> 