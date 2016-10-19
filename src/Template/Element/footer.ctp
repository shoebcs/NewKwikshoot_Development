 
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5 col-xs-12 contact-section">
                    <!--<span class="copyright">Copyright &copy; Your Website 2016</span>-->
                    <h2 class="contact-title">Contact us with any questions.</h2>
                    <p>We are in the editing suite most of the time so please ask away using the quick form below and we promise to contact you within 24 hours.</p>
                </div>
                
                <div class="col-md-7 col-sm-7 col-xs-12">
                
                 <ul class="list-inline admin-sec">
                        <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>Edit now ',array('controller' => 'Jobs','action' => 'index'),array('escape' => false));  ?></li>
                        <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span>Log IN</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#myModal-signup"><span class="glyphicon glyphicon-log-out"></span>SigN up</a></li>
                    </ul>
                
                
                    <ul class="list-inline quicklinks">
                        <li><?php echo $this->Html->link('Terms & Conditions',array('controller' => 'Jobs','action' => 'index'),array('escape' => false));  ?></li>
                        <li><?php echo $this->Html->link('Privacy Notice',array('controller' => 'Jobs','action' => 'index'),array('escape' => false));  ?></li>
                        <li><?php echo $this->Html->link('About Us',array('controller' => 'Jobs','action' => 'index'),array('escape' => false));  ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

<?php echo $this->element('login_registration_forgot'); ?>


<script>
    
    function ajaxcall(){
    var validateSend=$("#userValidate").val();
    var nameobj = $("#UserName");
    var emailobj = $("#UserEmail");
    var phoneobj = $("#UserPhone");
    var companyobj = $("#UserCompany");
    var titleobj = $("#UserTitle");
    var passwordobj = $("#UserPassword");    

    var ajax_url = $("#UserRegistrations").attr('action');
    //alert(ajaxData);
  //  var phonenumber = trim(phoneobj.val());
      //alert(phoneobj.val());
     var namevalue  =   nameobj.val().trim();
    var emailvalue =      emailobj.val().trim();
    var phonevalue =      phoneobj.val().trim();
    var companyvalue =   companyobj.val().trim();
    var titlevalue =     titleobj.val().trim();
    var passwordvalue =   passwordobj.val().trim();
    var check = false;
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
        return check;
    }else if(namevalue.length < 2){
        errornote.html('Name should have at least 2 characters.');
        errornote.addClass('alert-danger');
        errornote.show();        
        nameobj.focus();
        return check;
    }else if(namevalue.length > 40){
        errornote.html('Name must have no more then 40 characters.');
        errornote.addClass('alert-danger');
        errornote.show();        
        nameobj.focus();
        return check;
    }else if(emailvalue == ''){
        errornote.html('Email address can not be empty.');
        errornote.addClass('alert-danger');
        errornote.show();        
        emailobj.focus();
        return check;
    }else if(emailvalue.length < 6){
        errornote.html('Email address should have at least 6 characters.');
        errornote.addClass('alert-danger');
        errornote.show();        
        emailobj.focus();
        return check;
    }else if(emailvalue.length > 50){
        errornote.html('Email address must have no more then 50 characters.');
        errornote.addClass('alert-danger');
        errornote.show();        
        emailobj.focus();
        return check;
    }else if(!ck_email.test(emailvalue)){
        errornote.html('Email address is not valid.');
        errornote.addClass('alert-danger');
        errornote.show();        
        emailobj.focus();
        return check;
    }else if(phonevalue == ''){
        errornote.html('Mobile number can not be empty.');
        errornote.addClass('alert-danger');
        errornote.show();        
        phoneobj.focus();
        return check;
    }else if(!ck_contact.test(phonevalue)){
        errornote.html('Mobile number must have 10 digit only.');
        errornote.addClass('alert-danger');
        errornote.show();        
        phoneobj.focus();
        return check;
    }else{
        $("#userValidate").val(1);
         var ajaxData="&name="+encodeURIComponent(namevalue) +"&company="+encodeURIComponent(companyvalue) +"&phone="+encodeURIComponent(phonevalue)+"&email="+encodeURIComponent(emailvalue)+"&password="+encodeURIComponent(passwordvalue)+"&title="+encodeURIComponent(titlevalue);
        if(validateSend == 1){
          return check;  
        }
       errornote.removeClass('alert-danger');
        errornote.html('Please wait, your registration is under process.');
        $.ajax({
            type : 'post',
            async : true,
            cache: false,
            url : ajax_url,//set the dynamic url for ajax
            data: ajaxData,
            error : function(result) {
                $("#userValidate").val(0);
            },
            success: function(result){ 
             $("#userValidate").val(0);
              if(result == 'error'){
                  errornote.html(' This Email Already Exist !!'); 
                errornote.addClass('alert-danger');    
              }else{
                //alert(ajax_url);
                //alert(result);
                errornote.html('Your registration is successfull.');
                errornote.css('color','#b9a22a');
                errornote.removeClass('alert-danger');    
                nameobj.val('');
                phoneobj.val('');
                emailobj.val('');
                companyobj.val('');
                titleobj.val('');
                passwordobj.val('');
                 window.location.href  = 'http://localhost/git/kwikshoot/users/dashboard';// return true; 
              }
             return check;
            }

        });
    }
   return check;  
    
}

function ajaxlogin(){
    
     var validateSend=$("#userValid").val();
    var passwordobj = $("#UserLoginPassword");
    var emailobj = $("#UserLoginEmail");
    var ajax_url = $("#UserLogins").attr('action');
    //alert(validateSend);
  //  var phonenumber = trim(phoneobj.val());
      //alert(phoneobj.val());
     var passwordvalue  =   passwordobj.val().trim();
    var emailvalue =      emailobj.val().trim();
    var check = false;
    var errornote = $(".vendor-enquiry-error");
    errornote.removeClass('alert-danger');
    errornote.html('Please fill the details');    
     
        $("#userValid").val(1);
         var ajaxData="&email="+encodeURIComponent(emailvalue) +"&action=userlogin&password="+encodeURIComponent(passwordvalue);
        if(validateSend == 1){
          return check;  
        }
       //alert(ajax_url);
        errornote.removeClass('alert-danger');
        errornote.html('Please wait, Just checking authentication');
        $.ajax({
            type : 'post',
            async : true,
            cache: false,
            url : ajax_url,//set the dynamic url for ajax
            data: ajaxData,
            error : function(status) {
                $("#userValid").val(0);
            },
            success: function(status){ 
             $("#userValid").val(0);
               if(status == 'error'){
                  // alert(status);
                 errornote.html('Invalid Details or User is Inactive'); 
                 errornote.addClass('alert-danger');    
              }else{
                 window.location.href  = 'http://localhost/git/kwikshoot/users/dashboard';// return true; 
              }
          //alert(status);
             return check;
            }

        });
    
   return check; 
}

function ajaxforgotpassword()
{
     var validateSend=$("#userForgot").val();
    var emailobj = $("#UserForgotEmail");
    var ajax_url = $("#login-nav").attr('action');
    //alert(ajax_url);
    var emailvalue  =    emailobj.val().trim();
   // alert(emailvalue);
    var check = false;
    var errornote = $(".vendor-enquiry-error");
     errornote.html('');
        $("#userForgot").val(1);
         var ajaxData="&email="+encodeURIComponent(emailvalue);
        if(validateSend == 1){
          return check;  
        }
       //alert(ajax_url);
        errornote.removeClass('alert-danger');
        errornote.html('Please wait, Just checking authentication');
        $.ajax({
            type : 'post',
            async : true,
            cache: false,
            url : ajax_url,//set the dynamic url for ajax
            data: ajaxData,
            //alert(ajaxData);
            error : function(status) {
                $("#userForgot").val(0);
                //alert(result);
            },
           success: function(status){ 
             $("#userForgot").val(0);
            // alert(result);
              if(status == 'error'){
                  //alert(status);
                errornote.html('This Email is not exist !!'); 
                errornote.addClass('alert-danger');    
              }else{
                errornote.html('Email sent , Please check your email!!');
                errornote.css('color','#b9a22a');
                errornote.removeClass('alert-danger');    
                emailobj.val('');
              }
             return check;
            }

        });
    
   return check; 
}




function isNumberKey(id,le,evt){// check the number key
        
     var charCode = (evt.which) ? evt.which : evt.keyCode;
//     alert(charCode);
     if(charCode === 46 || charCode === 8 || charCode === 37 || charCode === 39 || charCode === 9){ //for back space
        return true;
     }
     if(charCode > 47 && charCode < 58){// number key code
        var amount = document.getElementById(id).value;
        if (amount.length === le){//length of number
            if (charCode === 8){
                return true;
            }else{
                return false;
            }
        }
     }else{
        return false;
     }
    }
    
    
function ajaxjobform(){
    alert("dd");
    var validateSend    = $("#userValidate").val();
    var objective_of_your_video_other   = $("#objective_of_your_video_other");
    var required_video_length           = $("#required_video_length");
    var required_video_length1          = $("#required_video_length1");
    var raw_video_length                = $("#raw_video_length");
    var raw_video_length1               = $("#raw_video_length1");
    var video_start_end_points          = $("#video_start_end_points");
    
    var extra_minute_of_raw_video_above_10_minutes          = $("#extra_minute_of_raw_video_above_10_minutes");
    var extra_custom_title_page         = $("#extra_custom_title_page");
    var extra_single_graphic_overlay    = $("#extra_single_graphic_overlay");
    var extra_green_screen_keying       = $("#extra_green_screen_keying");
    var extra_music_overlay             = $("#extra_music_overlay");
    var extra_image_screen_takeover     = $("#extra_image_screen_takeover");
    var extra_image_overlay_on_screen   = $("#extra_image_overlay_on_screen");
    var extra_minimum_for_subtitles     = $("#extra_minimum_for_subtitles");
       

    var ajax_url = $("#UserRegistrations").attr('action');
    //alert(ajaxData);
  //  var phonenumber = trim(phoneobj.val());
      //alert(phoneobj.val());
    var objective_of_your_video_other_value = objective_of_your_video_other.val().trim();
    var required_video_length_value     = required_video_length.val().trim();
    var required_video_length1_value          = required_video_length1.val().trim();
    var raw_video_length_value          = raw_video_length.val().trim();
    var raw_video_length1_value             = raw_video_length1.val().trim();
    var video_start_end_points_value        = video_start_end_points.val().trim();
    
    var extra_minute_of_raw_video_above_10_minutes_value         = extra_minute_of_raw_video_above_10_minutes.val().trim();
    var extra_custom_title_page_value      = extra_custom_title_page.val().trim();
    var extra_single_graphic_overlay_value   = extra_single_graphic_overlay.val().trim();
    var extra_green_screen_keying_value    = extra_green_screen_keying.val().trim();
    var extra_music_overlay_value            = extra_music_overlay.val().trim();
    var extra_image_screen_takeover_value  = extra_image_screen_takeover.val().trim();
    var extra_image_overlay_on_screen_value  = extra_image_overlay_on_screen.val().trim();
    var extra_minimum_for_subtitles_value  = extra_minimum_for_subtitles.val().trim();
    
    
    var check = false;
    var errornote = $(".vendor-enquiry-error");
    var ck_email = /^[a-z|0-9|A-Z]+([_][a-z|0-9|A-Z]+)*([.][a-z|0-9|A-Z]+)*([-][a-z|0-9|A-Z]+)*([.][a-z|0-9|A-Z]+)*(([_][a-z|0-9|A-Z]+)*)?@([-0-9A-Z]{2,20})\.+([0-9A-Z]){2,4}$/i;
    var ck_contact = /^\d{10}$/;
    errornote.removeClass('alert-danger');
    errornote.html('Please fill the details');    
    if(video_start_end_points_value == ''){
        errornote.html('Pleases pecific beginning and ending points ');
        errornote.addClass('alert-danger');
        errornote.show();        
        video_start_end_points.focus();
        return check;
    
    }else{
        $("#userValidate").val(1);
         var ajaxData="&objective_of_your_video_other="+encodeURIComponent(objective_of_your_video_other_value);
        if(validateSend == 1){
          return check;  
        }
       errornote.removeClass('alert-danger');
        errornote.html('Please wait, your registration is under process.');
        $.ajax({
            type : 'post',
            async : true,
            cache: false,
            url : ajax_url,//set the dynamic url for ajax
            data: ajaxData,
            error : function(result) {
                $("#userValidate").val(0);
            },
            success: function(result){ 
             $("#userValidate").val(0);
              if(result == 'error'){
                  errornote.html('This Email is Alresdy exist !!'); 
                errornote.addClass('alert-danger');    
              }else{
                //alert(ajax_url);
                //alert(result);
                errornote.html('Your registration is successfull.');
                errornote.css('color','#b9a22a');
                errornote.removeClass('alert-danger');    
                nameobj.val('');
                phoneobj.val('');
                emailobj.val('');
                companyobj.val('');
                titleobj.val('');
                passwordobj.val('');
              }
             return check;
            }

        });
    }
   return check;  
    
}
  
    </script>