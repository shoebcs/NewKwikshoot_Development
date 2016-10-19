<?php echo $this->Html->css('bootstrap.css'); ?> 
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
        <div class="register-box">
  <div class="register-logo">
    <a href="#">Update User Details</a>
  </div>

  <div class="register-box-body">
<!--    <p class="login-box-msg">Please Update the User Details</p>-->
      <span class="help-blok vendor-enquiry-error">Please Update the User Details</span><br>
    <?php //echo $this->Form->create($updater); ?>
    <?php echo $this->Form->create($updater, array(
                                                'url' =>  array('controller'=>'users','action'=>'update'),
                                                'role' => 'form',
                                                'type' => 'post',
                                                'id' => 'UserUpdateDetails',
                                                'onSubmit'=>'return ajaxcall();'
                                                )
                                  );
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
                                            'maxlength'=>40
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
        
    <div class="form-group has-feedback">
      <?php  echo $this->Form->input('city', array(
                                            'class' =>'form-control',
                                            'placeholder' => 'City',
                                            'label' => false,
                                            'maxlength'=>40
                                             )); ?>
    </div>
    <div class="form-group has-feedback">
      <?php  echo $this->Form->input('state', array(
                                            'class' =>'form-control',
                                            'placeholder' => 'State',
                                            'label' => false,
                                            'maxlength'=>40
                                             )); ?>
    </div>
    <div class="form-group has-feedback">
      <?php  echo $this->Form->input('country', array(
                                            'class' =>'form-control',
                                            'placeholder' => 'Country',
                                            'label' => false,
                                            'maxlength'=>50
                                             )); ?>
    </div>
    <div class="form-group">
        <button class="pull-left btn btn-info m_left"> <?php echo $this->Html->link('Cancel',array('action'=>'viewprofile')); ?></button>
        <div class="pull-left">
          <?php echo $this->Form->submit('Submit', array(
                                     'class' => 'btn btn-primary btn-block btn-flat',
                                 ));
                        ?>
        </div>
        <!-- /.col -->
      </div>  
        <?php echo $this->Form->end();?>
          </div>
          <!-- /.form-box -->
        </div>
            </section>

            </div>

<!-- /.register-box -->

<!-- jQuery 2.2.3 -->
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
