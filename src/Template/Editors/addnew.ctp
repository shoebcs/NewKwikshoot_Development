<?php echo $this->Html->css('bootstrap.css'); ?> 
<body class="hold-transition register-page">
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Editor | Profile
        
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
    <a href="#">Create New Editor</a>
  </div>

  <div class="register-box-body">
<!--    <p class="login-box-msg">Please Fill Editor Details</p>
    <div class="error-strip"> <span class="vendor-enquiry-error alert alert-warning">Please Fill Editor Details </span> </div>-->
      <span class="help-blok vendor-enquiry-error">Please Fill Editor Details</span><br>
    <?php //echo $this->Form->create(); ?>
    <?php echo $this->Form->create(Editors, array(
                                           'url' =>  array('controller' => 'editors', 'action' => 'addnew'),
                                           'role' => 'form',
                                           'type' => 'post',
                                           'id' => 'EditorRegistrationForm',
                                           'onSubmit' => 'return EditorValidation();'
                                           )
                                   );
    ?>
    <div class="form-group has-feedback">
      <?php  echo $this->Form->input('first_name', array(
                                            'class' =>'form-control',
                                            'placeholder' => 'First Name*',
                                            'id'=>'Editor_FirstName',
                                            'type'=>'text',                                                                           
                                            'required' =>true,
                                             'label' => false,
                                            'maxlength'=>20
                                             )); ?>
    </div>
  
     <div class="form-group has-feedback">
      <?php  echo $this->Form->input('last_name', array(
                                            'class' =>'form-control',
                                            'placeholder' => 'Last Name*',
                                            'id'=>'Editor_LastName',
                                            'type'=>'text',                                                                           
                                            'required' =>true,
                                            'label' => false,
                                            'maxlength'=>20
                                             )); ?>
    </div>
    <div class="form-group has-feedback">
      <?php  echo $this->Form->input('email', array(
                                            'class' =>'form-control',
                                            'placeholder' => 'Email*',
                                            'id'=>'Editor_Email',
                                            'required' =>true,
                                            'label' => false,
                                             'maxlength'=>50
                                             )); ?>
    </div>
    <div class="form-group has-feedback">
      <?php  echo $this->Form->input('phone', array(
                                            'class' =>'form-control',
                                            'placeholder' => 'Phone*',
                                            'id'=>'Editor_Phone',
                                            'required' =>true,
                                            'label' => false,
                                            'onKeyPress'=>'return isNumberKey(this.id,10,event)',
                                            'minlength'=>10,
                                            'maxlength'=>10
                                             )); ?>
    </div>
     <div class="form-group has-feedback">
    <?php  echo $this->Form->input('password', array(
                                                'type' => 'password',
                                                'placeholder' => 'Password*',
                                                'id'=>'Editor_Password',
                                                'autocomplete' => 'off',
                                                'class' => 'form-control',
                                                'label' => false,
                                                  'minlength'=>6,
                                                'maxlength'=>20,
                                                'required'=>true
                                                    )
                                    );
        ?>
         </div>
    
    <div class="form-group has-feedback">
      <?php  echo $this->Form->input('city', array(
                                            'class' =>'form-control',
                                            'placeholder' => 'City',
                                            'label' => false,
                                             'maxlength'=>50
                                             )); ?>
    </div>
    <div class="form-group has-feedback">
      <?php  echo $this->Form->input('state', array(
                                            'class' =>'form-control',
                                            'placeholder' => 'State',
                                            'label' => false,
                                             'maxlength'=>50
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
    <div class="form-group has-feedback">
      <?php  echo $this->Form->input('description', array(
                                            'class' =>'form-control',
                                            'placeholder' => 'Description',
                                            'label' => false,
                                             'maxlength'=>250
                                             )); ?>
    </div>
    
    <div class="form-group">
        <button class="pull-left btn btn-info m_left"> <?php echo $this->Html->link('Cancel',array('action'=>'editorlisting')); ?></button>
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
  

<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
