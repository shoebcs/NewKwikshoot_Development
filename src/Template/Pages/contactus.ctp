<!-- home edit video Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12"> <h1>Contact Us</h1>
                <p>We are here to answer any questions you may have about our combadi experiences. Reach out to us and we'll respond as soon as we can.</p>
                </div>
            </div>
        </div>
    </section>
    
   <!-- home edit video Section close-->

    <!-- how it work Section -->
    <section id="contact_form" style="margin-top:0;">
       <div class="container">
       
       
            <div class="row">
             
             <!-- contact form -->
             
                 <div class="col-md-5 col-sm-5 col-xs-12">  
                     <span class="vendor-enquiry-error">Get in Touch With Us</span>
                         <?php echo $this->Form->create('ContactUs', array(
                                           'url' =>  array('controller'=>'pages','action'=>'contactus'),
                                           'role' => 'form',
                                           'type' => 'post',
                                           'id' => 'contact_log',
                                           'class'=>'form',
                                           'onSubmit'=>'return Contactvalidation();'
                                           )
                                   );
                    ?>
                            <div class="form-group">
                                <label for="exampleInputEmail2" class="sr-only">Name</label>
                                <?php   echo $this->Form->input('name', array(
                                            'class' => 'form-control',
                                            'id'=>'UserName',
                                            'placeholder' => 'Name*',
                                            'label' => false,
                                            'type'=>'text',
                                            'required' =>true,
                                            'maxlength'=>40
                                        ));
                                ?>
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail2" class="sr-only">Email address</label>
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
                                <label for="exampleInputEmail2" class="sr-only">Phone</label>
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
                                <label for="exampleInputEmail2" class="sr-only">Company Name</label>
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
                                <label for="exampleInputEmail2" class="sr-only">Title</label>
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
                                <label for="exampleInputPassword2" class="sr-only">Message</label>
                                <?php   echo $this->Form->input('description', array(
                                            'class' => 'text_area',
                                            'id'=>'UserMessage',
                                            'onKeyUp'=>'countChars("UserMessage","character",500)',
                                            'placeholder' => 'Messages...',
                                            'label' => false,
                                            'type'=>'textarea',
                                            'maxlength'=>500
                                        )
                                      );
                                    ?>
                            <div class="max_count">Max 500 characters are allowed</div>
                            <div class="char_count">No. of characters used:<span id="character">0</span></div>
                            </div>
                     
                     
                            <div class="form-group">
                            <label for="exampleInputPassword2" class="sr-only">Captcha</label>
                          <?php //echo $this->Html->image('nocaptcha.gif', array('alt' => 'Captcha')); ?>
                          <div class="g-recaptcha" data-sitekey="6LfM8gcUAAAAABsI2kRnHpRJK2X5KnOO7obVSagl"></div>
                          <div class="error-message" id='checkedcagerror' style="display: none; font-size:12px;margin-top: 4px;">Please select captcha.</div> 
                            </div>
                            <div class="form-group">
                                     <button class="btn btn-primary btn-block btn-red" type="submit">Send</button>
                            </div>
                     
             <?php echo $this->Form->end();?>
                    
                 </div>
                  <!-- contact form close -->
              
               <!-- contact form address -->
                 <div class="col-md-7 col-sm-7 col-xs-12">     
 					
                    <div class="office_location">
                    <h2>Office locations</h2>
                    <h3><span class="glyphicon glyphicon-map-marker"></span> Vancouver</h3>
                    <h3><span class="glyphicon glyphicon-map-marker"></span> New York</h3>
                    <h3><span class="glyphicon glyphicon-map-marker"></span> Dubai</h3>
                    
                    <ul class="social_icons">
                    
                    	<li><a href="#"><img src="../img/social1.png" alt="Facebook"></a> </li>   
                        <li><a href="#"><img src="../img/social2.png" alt="Twitter"></a> </li>   
                        <li><a href="#"><img src="../img/social3.png" alt="Instagram"></a> </li>   
                        <li><a href="#"><img src="../img/social4.png" alt="Pinterest"></a> </li>   
                        <li><a href="#"><img src="../img/social5.png" alt="Linkedin"></a> </li>   
    					
                   
                    </ul>
                    
                    </div>
                    
                    
                 </div>
                  <!-- contact form address close -->
                  
               
                
                </div>
                
    
                  </div>
                </section>
    
   <!-- how it work Section close-->

 <!-- map Section -->
    <section id="map" style="display:none;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.8339420592856!2d77.35383761549443!3d28.574748793443792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce59619ba73ab%3A0x376870bf6296819a!2sWave+City+Centre!5e0!3m2!1sen!2sin!4v1473844711492" width="1920" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
    
    
    </section>

 <!-- map Section close -->
 <?php 
if($validateCheck == 1){
?>
<script>
$('#checkedcagerror').show();
</script>
<?php }?>
<script>
    
    function Contactvalidation(){
    var nameobj = $("#UserName");
    var emailobj = $("#UserEmail");
    var phoneobj = $("#UserPhone");

    //alert(ajaxData);
  //  var phonenumber = trim(phoneobj.val());
      //alert(phoneobj.val());
     var namevalue  =   nameobj.val().trim();
    var emailvalue =      emailobj.val().trim();
    var phonevalue =      phoneobj.val().trim();
    
    var check = true;
    var errornote = $(".vendor-enquiry-error");
    var ck_email = /^[a-z|0-9|A-Z]+([_][a-z|0-9|A-Z]+)*([.][a-z|0-9|A-Z]+)*([-][a-z|0-9|A-Z]+)*([.][a-z|0-9|A-Z]+)*(([_][a-z|0-9|A-Z]+)*)?@([-0-9A-Z]{2,20})\.+([0-9A-Z]){2,4}$/i;
    var ck_contact = /^\d{10}$/;
    errornote.removeClass('alert-danger');
    errornote.html('Please fill the details');    
    if(namevalue == ''){
        errornote.html('Name can not be empty.');
        errornote.addClass('alert-danger');
        errornote.show();        
        nameobj.focus();
        check = false;
        return check;
    }else if(namevalue.length < 2){
        errornote.html('Name should have at least 2 characters.');
        errornote.addClass('alert-danger');
        errornote.show();        
        nameobj.focus();
        check = false;
        return check;
    }else if(namevalue.length > 40){
        errornote.html('Name must have no more then 40 characters.');
        errornote.addClass('alert-danger');
        errornote.show();        
        nameobj.focus();
        check = false;
        return check;
    }else if(emailvalue == ''){
        errornote.html('Email address can not be empty.');
        errornote.addClass('alert-danger');
        errornote.show();        
        emailobj.focus();
        check = false;
        return check;
    }else if(emailvalue.length < 6){
        errornote.html('Email address should have at least 6 characters.');
        errornote.addClass('alert-danger');
        errornote.show();
        check = false;
        emailobj.focus();
        return check;
    }else if(emailvalue.length > 50){
        errornote.html('Email address must have no more then 50 characters.');
        errornote.addClass('alert-danger');
        errornote.show();        
        emailobj.focus();
        check = false;
        return check;
    }else if(!ck_email.test(emailvalue)){
        errornote.html('Email address is not valid.');
        errornote.addClass('alert-danger');
        errornote.show();        
        emailobj.focus();
        check = false;
        return check;
    }else if(phonevalue == ''){
        errornote.html('Mobile number can not be empty.');
        errornote.addClass('alert-danger');
        errornote.show();        
        phoneobj.focus();
        check = false;
        return check;
    }else if(!ck_contact.test(phonevalue)){
        errornote.html('Mobile number must have 10 digit only.');
        errornote.addClass('alert-danger');
        errornote.show();        
        phoneobj.focus();
        check = false;
        return check;
    }
    
   return check;  
    
}

  function countChars(message, character, max) {
			  var count = document.getElementById(message).value.length;
			  if (count < 0) { document.getElementById(character).innerHTML = "<span style=\"color: red;\">" + count + "</span>"; }
			  else { document.getElementById(character).innerHTML = count; }
		}
</script>

<style>
      .btn-primary {
   background-color: #dd0c1f;
    border-color: #dd0c1f;
    color: #fff;
    text-transform: uppercase;
}
.error-message {
    color: #ff1b03!important;
}
      </style>