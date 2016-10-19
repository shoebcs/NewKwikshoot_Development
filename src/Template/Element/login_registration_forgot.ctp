<!--- pop ups --->

 <!-- start of Modal login -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">User Login</h4>
        </div>
<span class="help-blok vendor-enquiry-error">Please Provide your registered email id and Password.</span>
         <!--- <div class="error-strip"> <span class="vendor-enquiry-error alert alert-warning">Please fill your details </span> </div> -->
    <div class="row-inner">
            <div class="col-md-12">
                    <?php echo $this->Form->create(User, array(
                                           'url' =>  array('controller'=>'registration','action'=>'userlogin'),
                                           'role' => 'form',
                                           'type' => 'post',
                                           'id' => 'UserLogins',
                                           'onSubmit' => 'return ajaxlogin();' 
                                           )
                                   );
                echo $this->Form->input('userValid',array('type'=>'hidden','id'=>'userValid','value'=>0));      
                    ?>
                <div class="form-group">
                         <label class="sr-only" for="exampleInputEmail24">Email Address</label>
                           <?php   echo $this->Form->input('email', array(
                                                            'class' => 'form-control',
                                                            'id'=>'UserLoginEmail',
                                                            'placeholder' => 'Email',
                                                            'label' => false,
                                                            'div' => false,
                                                            'type'=>'text',
                                                            'required' =>true,
                                                            'maxlength'=>40
                                                    )
                                         );
                                ?> 
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group">
                         <label class="sr-only" for="exampleInputPassword2cc">Password</label>
                             <?php   echo $this->Form->input('password', array(
                                                            'class' => 'form-control',
                                                            'id'=>'UserLoginPassword',
                                                            'placeholder' => 'Password',
                                                            'label' => false,
                                                            'div' => false,
                                                            'type'=>'password',
                                                            'required' =>true,
                                                            'maxlength'=>40
                                                        )
                                                );
                                   ?>
                         <div class="help-block text-right">
                            <a href="" data-toggle="modal" data-target="#myModal-pass" data-dismiss="modal">Forgot Password ?</a>
                         </div>
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group">
                         <?php echo $this->Form->submit('Sign in', array(
                                                    'class' => 'btn btn-primary btn-block',
                                                    'label' => false,
                                                    'div' => false,
                                                    'value' =>'Sign in'
                                                ));
                                       ?>
                </div>
                  <?php echo $this->Form->end();?>
                     <!--</form>-->
            </div>
            <div class="bottom text-center">
                    New here ? <a href="" data-toggle="modal" data-target="#myModal-signup" data-dismiss="modal" data-dismiss="modal-backdrop"><b>Join Us</b></a>
            </div>
            </div>
      </div>
      
    </div>
  </div>
 <!-- End of Modal login -->
 
  <!-- Start of Modal forgot password -->
  <div class="modal fade" id="myModal-pass" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Forgot password</h4>
        </div>
<span class="help-blok vendor-enquiry-error">Please Provide your registered email id.</span>
    <!--- <div class="error-strip"> <span class="vendor-enquiry-error alert alert-warning">Please Provide your email id. </span> </div> -->
        <div class="row-inner2">
            <div class="col-md-12">
 
            <?php echo $this->Form->create('UserForgotPassword', array(
                                           'url' =>  array('controller' => 'registration', 'action' => 'forgotpassword'),
                                           'role' => 'form',
                                           'type' => 'post',
                                           'id' => 'login-nav',
                                           'onSubmit' => 'return ajaxforgotpassword();'
                                           )
                                   );
             echo $this->Form->input('userForgot',array('type'=>'hidden','id'=>'userForgot','value'=>0));
                           ?>

       <h3>We can help! All you need to do is enter your email ID and follow the instructions!</h3>
            <div class="form-group">
                     <label class="sr-only" for="exampleInputEmail2">Email address</label>
             <?php   echo $this->Form->input('email', array(
                                            'class' => 'form-control',
                                            'id'=>'UserForgotEmail',
                                            'placeholder' => 'Email',
                                            'label' => false,
                                            'div' => false,
                                            'type'=>'text',
                                            'required' =>true,
                                            'maxlength'=>40
                                    )
                         );
       
             ?>
                     
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>

                <div class="form-group">
                    <?php echo $this->Form->submit('Reset Password', array(
                                                    'class' => 'btn btn-primary btn-block',
                                                    'label' => false,
                                                    'div' => false,
                                                    'value' =>'Reset Password'
                                                ));
                                       ?>
                    </div>
        </div>
    
<?php echo $this->Form->end();?>
            </div>
        </div>    
    </div>
</div>
 <!-- End of Modal forgot password close -->
 
 <!-- Start of Modal sign up -->
  <div class="modal fade" id="myModal-signup" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Join Us</h4>
        </div>
         <span class="help-blok vendor-enquiry-error">Please Fill your Details</span>
   <!--  <div class="error-strip"> <span class="vendor-enquiry-error alert alert-warning">Please fill your details </span> </div> -->
    <div class="row-inner">
	<div class="col-md-12">
                <?php echo $this->Form->create('Users', array(
                                                'url' =>  array('controller'=>'registration','action'=>'userregistration'),
                                                'role' => 'form',
                                                'type' => 'post',
                                                'id' => 'UserRegistrations',
                                                'onSubmit'=>'return ajaxcall();'
                                                )
                                  );
           echo $this->Form->input('userValidate',array('type'=>'hidden','id'=>'userValidate','value'=>0));
                       ?>
        <div class="form-group">
         <label class="sr-only" for="exampleInputEmail2">Name</label>
         <?php   echo $this->Form->input('name', array(
                                            'class' => 'form-control',
                                            'id'=>'UserName',
                                            'placeholder' => 'Name*',
                                            'label' => false,
                                            'type'=>'text',
                                            'required' =>true,
                                            'maxlength'=>50
                                    )
                            );
                        ?>

              <span class="glyphicon glyphicon-user form-control-feedback"></span>
             
               </div>
              
        <div class="form-group">
              <label class="sr-only" for="exampleInputEmail2">Email address</label>
              <?php   echo $this->Form->input('email', array(
                                            'class' => 'form-control',
                                            'id'=>'UserEmail',
                                            'placeholder' => 'Email*',
                                            'label' => false,
                                            'div' => false,
                                            'required' =>true,
                                            'maxlength'=>40
                                    )
                            );
                    ?>
                   <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
        <div class="form-group">
                        <label class="sr-only" for="exampleInputEmail2">Phone</label>
            <?php   echo $this->Form->input('phone', array(
                                            'class' => 'form-control',
                                            'id'=>'UserPhone',
                                            'placeholder' => 'Phone*',
                                            'label' => false,
                                            'onKeyPress'=>'return isNumberKey(this.id,10,event)',
                                            'type'=>'text',
                                            'required' =>true,
                                            'maxlength'=>10
                                        )
                            );
                  ?>
                     <span class="glyphicon glyphicon-phone form-control-feedback"></span>
          </div>
<div class="form-group">
          <label class="sr-only" for="exampleInputEmail2">Company Name</label>
<!--       <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Company Name" required>-->
          <?php   echo $this->Form->input('company', array(
                                            'class' => 'form-control',
                                            'id'=>'UserCompany',
                                            'placeholder' => 'Company',
                                            'label' => false,
                                            'type'=>'text',
                                            'maxlength'=>40
                                        )
                            );
                  ?>
           <span class="glyphicon glyphicon-briefcase form-control-feedback"></span>
  </div>

    <div class="form-group">
     <label class="sr-only" for="exampleInputEmail2">Title</label>
<!--        <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Title" required>-->
      <?php   echo $this->Form->input('title', array(
                                            'class' => 'form-control',
                                            'id'=>'UserTitle',
                                            'placeholder' => 'Title',
                                            'label' => false,
                                            'type'=>'text',
                                            'maxlength'=>40
                                        )
                            );
                  ?>
    <span class="glyphicon glyphicon-film form-control-feedback"></span>
    </div>
        <div class="form-group">
          <label class="sr-only" for="exampleInputPassword2">Password</label>
          <?php   echo $this->Form->input('password', array(
                                          'class' => 'form-control',
                                          'id'=>'UserPassword',
                                          'placeholder' => 'Password*',
                                          'label' => false,
                                          'type'=>'password',
                                          'required' =>true,
                                          'minlength' =>6,
                                          'maxlength'=>40
                                      )
                              );
                      ?>  
           <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group">
               <?php echo $this->Form->submit('Join Us', array(
                                               'class' => 'btn btn-primary btn-block',
                                               'label' => false,
                                               'div' => false,
                                               'value' =>'Join Us'
                                           ));
                                  ?>
                  
            </div>
<?php echo $this->Form->end();?>
     </div>
      <div class="bottom text-center">
      Already registered ? <a href="" data-toggle="modal" data-target="#myModal" data-dismiss="modal"><b>Sign In</b></a>
             </div>
         </div>
        </div>
    </div>
</div>
 <!-- End of Modal sign up -->

<!--- pop ups close --->
<a href="" data-toggle="modal" data-target="#myModal-signup" data-dismiss="modal" data-dismiss="modal-backdrop"><b>Sign In</b></a>