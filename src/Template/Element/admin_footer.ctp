<footer class="main-footer">
    <div class="pull-right hidden-xs">
    </div>
    <strong>Copyright &copy; 2016-2017 <a href="http://kwikshoot.com">Kwikshoot</a>.</strong> All rights
    reserved.
  </footer>

<script>
 // for Editor creation form validatin   
function EditorValidation()
{
    //var validateSend=$("#EditorRegistrationForm").val();
    var firstnameobj = $("#Editor_FirstName");
    var lastnameobj = $("#Editor_LastName");
    var emailobj = $("#Editor_Email");
    var phoneobj = $("#Editor_Phone");
   
    //alert(ajaxData);
  //  var phonenumber = trim(phoneobj.val());
     // alert(phoneobj.val());
    var firstnamevalue   =    firstnameobj.val().trim();
    var lastnamevalue    =    lastnameobj.val().trim();
    var emailvalue       =    emailobj.val().trim();
    var phonevalue       =    phoneobj.val().trim();
    var check = false;
    var errornote = $(".vendor-enquiry-error");
    var ck_email = /^[a-z|0-9|A-Z]+([_][a-z|0-9|A-Z]+)*([.][a-z|0-9|A-Z]+)*([-][a-z|0-9|A-Z]+)*([.][a-z|0-9|A-Z]+)*(([_][a-z|0-9|A-Z]+)*)?@([-0-9A-Z]{2,20})\.+([0-9A-Z]){2,4}$/i;
    var ck_contact = /^\d{10}$/;
   errornote.removeClass('alert-danger');
    errornote.html('Please fill the details');    
    if(firstnamevalue == ''){
        errornote.html('First Name can not be empty.');
        errornote.addClass('alert-danger');
        errornote.show();        
        firstnameobj.focus();
        return check;
    }else if(firstnamevalue.length < 2){
        errornote.html('First Name should have at least 2 characters.');
        errornote.addClass('alert-danger');
        errornote.show();        
        firstnameobj.focus();
        return check;
    }else if(firstnamevalue.length > 20){
        errornote.html('First Name must have no more then 20 characters.');
        errornote.addClass('alert-danger');
        errornote.show();        
        firstnameobj.focus();
        return check;
    }else if(lastnamevalue == ''){
        errornote.html('Last Name can not be empty.');
        errornote.addClass('alert-danger');
        errornote.show();        
        lastnameobj.focus();
        return check;
    }else if(lastnamevalue.length < 2){
        errornote.html('Last Name should have at least 2 characters.');
        errornote.addClass('alert-danger');
        errornote.show();        
        lastnameobj.focus();
        return check;
    }else if(lastnamevalue.length > 20){
        errornote.html('Last Name must have no more then 20 characters.');
        errornote.addClass('alert-danger');
        errornote.show();        
        lastnameobj.focus();
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
    }

       errornote.html('Please wait, registration is under process.');
 
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
  </script>