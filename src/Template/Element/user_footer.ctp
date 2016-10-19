 <footer class="main-footer">
    <div class="pull-right hidden-xs">
    </div>
    <strong>Copyright &copy; 2016-2017 <a href="http://kwikshoot.com">Kwikshoot</a>.</strong> All rights
    reserved.
  </footer>

<script>
     function ajaxcall(){
    //var validateSend=$("#userValidate").val();
    var nameobj = $("#UserName");
    var emailobj = $("#UserEmail");
    var phoneobj = $("#UserPhone");
    var companyobj = $("#UserCompany");
    var titleobj = $("#UserTitle");
    
    //alert(ajaxData);
  //  var phonenumber = trim(phoneobj.val());
      //alert(phoneobj.val());
    var namevalue  =   nameobj.val().trim();
    var emailvalue =      emailobj.val().trim();
    var phonevalue =      phoneobj.val().trim();
    var companyvalue =   companyobj.val().trim();
    var titlevalue =     titleobj.val().trim();
    var check = false;
    var errornote = $(".vendor-enquiry-error");
    var ck_email = /^[a-z|0-9|A-Z]+([_][a-z|0-9|A-Z]+)*([.][a-z|0-9|A-Z]+)*([-][a-z|0-9|A-Z]+)*([.][a-z|0-9|A-Z]+)*(([_][a-z|0-9|A-Z]+)*)?@([-0-9A-Z]{2,20})\.+([0-9A-Z]){2,4}$/i;
    var ck_contact = /^\d{10}$/;
   errornote.removeClass('alert-danger');
    if(namevalue == ''){
        errornote.html('Name can not be empty.');
        errornote.addClass('alert-danger');
        errornote.show();        
        nameobj.focus();
        return check;
    }else if(namevalue.length < 2){
        errornote.html('Wow, what a great name!  But this field needs 2 to 40 characters.');
        errornote.addClass('alert-danger');
        errornote.show();        
        nameobj.focus();
        return check;
    }else if(namevalue.length > 40){
        errornote.html('Wow, what a great name!  But this field needs 2 to 40 characters.');
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
        errornote.html('Oops, we want to make sure this is right.  The email address seems invalid.  Please re-type it.');
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
        errornote.html('Oops, we want to make sure this is right.  The email address seems invalid.  Please re-type it.');
        errornote.addClass('alert-danger');
        errornote.show();        
        phoneobj.focus();
        return check;
    } 
    
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
