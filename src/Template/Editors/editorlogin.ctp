<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Kwikshoot | Login Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
   <?php echo $this->Html->css('dashboard/bootstrap/css/bootstrap.min.css'); ?>
 <?php echo $this->Html->css('dashboard/dist/css/AdminLTE.min.css'); ?>
   <?php echo $this->Html->css('dashboard/plugins/iCheck/square/blue.css'); ?>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  
  <!-- jQuery 2.2.3 -->
<?php echo $this->Html->script('dashboard/plugins/iCheck/icheck.min.js');?>
 <?php echo $this->Html->script('dashboard/plugins/jQuery/jquery-2.2.3.min.js');?>
<?php echo $this->Html->script('dashboard/bootstrap/js/bootstrap.min.js');?>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Kwikshoot Editor Login</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <?php echo $this->Form->create();
     $this->Flash->render('auth'); ?>
      <div class="form-group has-feedback">
        <?php 
        echo $this->Form->input('email', array( 'type' => 'email',
                                                                        'autocomplete' => 'off',
                                                                        'placeholder' => 'Email',                                    
                                                                        'class' => 'form-control',
                                                                        'label' => false,
                                                                        'div' => false,
                                                                        'maxlength'=>50,
                                                                        'required'=>true
                                                                    )
                                                        );
        ?>
          
<!--          <input type="email" class="form-control" placeholder="Email">-->
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <?php 
        echo $this->Form->input('password', array(  'type' => 'password',
                                                                            'placeholder' => 'Password',
                                                                            'autocomplete' => 'off',
                                                                            'class' => 'form-control',
                                                                            'label' => false,
                                                                            'div' => false,
                                                                            'maxlength'=>20,
                                                                            'required'=>true
                                                                        )
                                                        );
        ?>
<!--          <input type="password" class="form-control" placeholder="Password">-->
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
         <?php echo $this->Html->link('Cancel' , array('controller'=>'registration','action'=>'index') ,array('escape'=>'false', 'class'=>'btn btn-fprimary btn-block btn-flat'));?>
        <!-- /.col -->
      </div>

<!--    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div>-->
    <!-- /.social-auth-links -->

    <a href="#">I forgot my password</a><br>
 <?php echo $this->Form->end(); ?>

<!--    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div>-->
    <!-- /.social-auth-links -->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

</body>
</html>
