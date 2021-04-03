<style type="text/css">
  #toast-container{
  
  }
  /*.profileerr .toast-top-right{

    top:50%;
    right: 22%;
  }*/

  .toast-top-right {
    top: 15%;
    right: 58%;
}
    .toast {
    width: 100% !important;
    max-width: 600px!important;
  
    font-size: 22px!important;
   
   }
   .labelerror #remember-error {
    position: absolute;
    top: 35px;
    margin-left: -15px;
}
.alert-danger {
    color: #efe9ea;
    background-color: #fb0505;
    border-color: #f92b41;
}
.alert-success{
    color: #efe9ea;
    background-color: #4BB543;
    border-color: #4BB543;
}
</style>
<section class="login_register aboutus  "  >
    <div class="container mb-5 mt-5">
         <div class="row" style="color:#fffffffa;">
              <div class="col-md-6 ">
                <form id="signupForm1"  name="register_page" role="form" autocomplete='off'>

           
              <h3 class="text-white text-center mt-5 mb-4">Sign Up</h3>
              <!-- <p class="p">Just enter your email address</br>and your password for join.</p> -->
              <!-- <input class=" input w100" type="email" placeholder="Insert eMail" reqired autocomplete='off' /> -->
              <div class="row ">
                <div class="form-group col-md-6">
                   <label  class="text-white">Name</label>
                   <input class="form-control txtOnly" type="text" name="user_name" id="us_name" value="<?php if(isset($user_name)){ echo $user_name; } ?>" placeholder="Enter Your Name" required="" /> 
                </div>
                <div class="form-group col-md-6">
                   <label  class="text-white">Pincode</label>
                   <input class="form-control" type="text" name="user_pincode"  min="0" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" minlength="6" maxlength="6" id="us_pincode" value="<?php if(isset($user_pincode)){ echo $user_pincode; } ?>"  placeholder="Enter Pincode" required="" />

                </div>
                 <div class="form-group col-md-6">
                <label  class="text-white">Email Address</label>
                <input type="email" class="form-control" name="user_email" id="us_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="<?php if(isset($user_email)){ echo $user_email; } ?>" placeholder="Enter Email Address" required>

              </div>
                <div class="form-group col-md-6"  >
                    <label  class="text-white">Mobile No.</label>

                 
                   <input type="text" id="us_mobile" name="user_mobile" value="<?php if(isset($user_mobile)){ echo $user_mobile; } ?>" class="form-control notext mobileNo" placeholder="Enter Mobile No." minlength="10" maxlength="10" required="" />
                    <p style="font-size: 12px;">Note: Entered mobile no. will be used as user name</p>
                  
                </div>
                <div class="form-group col-md-6" style="margin-top: -18px;">
                     <label  class="text-white">Password</label>

                    
                  <span toggle="#password-field1"  style="position: absolute; right: 35px; top: 50px; color: black;" class="fa fa-fw fa-eye field_icon toggle-password4"></span>
                   <input type="password" id="us_password" name="user_password" minlength="8" class="form-control" value="<?php if(isset($user_password)){ echo $user_password; } ?>" placeholder="Enter Password" required="" />
                    <p style="font-size: 12px; line-height: 1.5;" >Note: Password must contain uppercase, lowercase letters and number with a minimum of 8 characters</p> 


                </div>
               
                <div class="form-group col-md-6 labelerror" style="margin-top: 20px;">
                   <label class="form-check-label text-white" style="margin-left: 25px;">
                    <input class="form-check-input title-case " style ="margin-top: 10px; position: initial;" type="checkbox" name="remember" required="" /> I agree <label class="text-primary t"><a href="<?php echo base_url(); ?>Privacy-Policy">Data Protection Policy</a></label> 
                   </label>
                  </div>
              </div>

                <h6 class="alert alert-danger mobileerror1"></h6>
                <h6 class="alert alert-success mobilesuccess1"></h6>

                
              <div class="form-group col-md-12">
               <button type="submit" style="border-radius: 10px; " name="submit" class="btn btn btn-outline-primary pl-4 pr-4">Sign Up</button>
            </div>
          </form>
              </div>
              <div class="col-md-1" ></div>

              <div class="col-md-5"  style="border-left: 1px solid white;">
                <form  id="signInForm1" name="SignIn1" role="form" autocomplete='off'>
         
           <h3 class="text-white text-center mt-5 mb-4">Sign In</h3>
            <!-- <button class=" fb" type="button">Log In With Facebook</button> -->
            <!-- <p class="p">- or -</p> -->
            <div class="row">
             <div class="form-group col-md-2"></div>
            <div class="form-group col-md-8">
            
              <label  class="text-white">Mobile No.</label>
             <input type="text" id="l_mobile"  name="mobile" class="form-control notext"  min="0" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" placeholder="Enter Mobile No." minlength="10" maxlength="10"  />
              <p style="font-size: 12px;">Note: Entered mobile no. will be used as user name</p>
            </div>
              <div class="form-group col-md-2"></div>
                <div class="form-group col-md-2"></div>
       

             <div class="form-group col-md-8">
             <span style="position: absolute; right: 35px; top: 50px; color: black;" toggle="#password-field"  class="fa fa-fw fa-eye field_icon toggle-password5"></span>
             <label  class="text-white">Password</label>
             <input type="password" class="form-control" name="password" id="l_password" placeholder="Password" >
           </div>
             <div class="form-group col-md-2"></div>
               <div class="form-group col-md-2"></div>

            <div class="form-group col-md-8">
             <label class="text-primary t"> <a href="<?php echo base_url(); ?>WebsiteController/forgotpassword">Forgot Password?</a></label>
            </div>
              <div class="form-group col-md-2"></div>
               <div class="form-group col-md-2"></div>
                <div class="form-group col-md-8">
        
          
            <h6 class="alert alert-success successresponse1"></h6>
            <h6 class="alert alert-danger errorresponse1"></h6>
            </div>
               <div class="form-group col-md-2"></div>


             <div class="form-group col-md-2"></div>
          
            <div class="form-group  col-md-8">
               <button type="submit" style="border-radius: 10px; " name="submit" class="btn btn btn-outline-primary pl-4 pr-4">Sign In</button>
            </div>
             
           </div>
        
          </form> 
              </div>
         </div>     
    </div>

</section>
 <script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>
<script type="text/javascript">
  <?php if($this->session->flashdata('register_page_success')){ ?>
    $(document).ready(function(){
    toastr.success('Sign Up Successfully');
  });
<?php } ?>
  
<?php if($this->session->flashdata('mobileno_check_error')){ ?>
   $(document).ready(function(){
      toastr.error('Mobile Number is Already Exists');
    });
   <?php } ?>

   <?php if($this->session->flashdata('email_check_error')){ ?>
   $(document).ready(function(){
      toastr.error('Email Address is Already Exists');
    });
   <?php } ?>

 </script>
 <script type="text/javascript">
  <?php if($this->session->flashdata('Login_error')){ ?>
   $(document).ready(function(){
      toastr.error('Please Register to Participate');
   });
  <?php } ?>
</script>
<script type="text/javascript">
   $(document).ready(function(){
      $('.mobileerror1').hide();
      $('.mobilesuccess1').hide(); 
      $('.successresponse1').hide(); 
      $('.errorresponse1').hide();
   });
  // Wait for the DOM to be ready
$(function() {

jQuery.validator.addMethod("validate_email", function(value, element) {

    if (/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(value)) {
        return true;
    } else {
        return false;
    }
});
$.validator.addMethod("pwcheck", function(value, element) {
    return this.optional(element) || /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,64}$/.test(value);
  //(?=.*[a-zA-Z\d].*)[a-zA-Z\d!@#$%&*]
}, "");   
// $.validator.addMethod("pwcheck", function(value) {
//    return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value) // consists of only these
//        && /[a-z]/.test(value) // has a lowercase letter
//        && /\d/.test(value) // has a digit
// });
  
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='register_page']").validate({


    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      user_name: "required",
      user_pincode: "required",
      user_mobile: "required",
      user_email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        validate_email: true
      },
      remember:"required",
      user_password: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        pwcheck: true
      },
      
    },
    // Specify validation error messages
    messages: {
      user_name: "Please enter your name.",
      user_mobile: "Please enter valid mobile number.",
      user_password: "Please enter valid password.",
      user_email: "Please enter valid Email Address.",
      // user_password: "Password contain uppercase, lowercase letters and number with minimum 8 characters.",

      user_pincode: "Please enter a valid pincode.",
      remember: "Please check this box if you want to proceed."
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      // form.submit();
      // alert("hii");

     var umobile = $('#us_mobile').val();
     var upincode = $('#us_pincode').val();
     var uname = $('#us_name').val();
     var upassword = $('#us_password').val();

     var uemail = $('#us_email').val();
    
      // alert(mobile);
      // alert(pincode);
      // alert(uname);
      // alert(password);
   
      $.ajax({
           url:"<?php echo base_url(); ?>WebsiteController/add_registration",
           method:"POST",
           data:{user_mobile:umobile,user_pincode:upincode,user_name:uname,user_password:upassword,user_email:uemail},
           success:function(data)
            {   

               // alert(data);
               // console.log(data);
                 if(data=='Sign Up Successfully'){

                  
                $('.alert-success').html(data);
                $('.mobileerror1').hide();
                $('.mobilesuccess1').show().delay(10000).fadeOut();

                document.getElementById("signupForm1").reset();

                  window.location = "<?php echo base_url(); ?>WebsiteController/edit_profile";
               }
               else{
                // alert(data);
                // $('#user_mobile').val("");

                $('.alert-danger').html(data);
                $('.mobileerror1').show().delay(10000).fadeOut();
                $('.mobilesuccess1').hide();  
                // document.getElementById("signupForm").reset();
               }
               

            }


            });
     
       }
  });
 
});

 </script> 


 <!-- signIn -->

 <script type="text/javascript">
 
  // Wait for the DOM to be ready
$(function() {

  
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='SignIn1']").validate({

    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      // user_name: "required",
      // user_pincode: "required",
      mobile: "required",
      password: "required",
      // email: {
      //   required: true,
      //   // Specify that email should be validated
      //   // by the built-in "email" rule
      //   email: true
      // },
      
    },
    // Specify validation error messages
    messages: {
      // user_name: "Please enter your name",
      mobile: "Please enter valid mobile number.",
      password: "Please enter a valid password.",
      // user_pincode: "Please enter a valid pincode",
      // address: "Please enter Street Address"
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      
     
      // form.submit();
        $.ajax({
                 type: "POST",
                 url: "<?php echo base_url(); ?>WebsiteController/login1",
                 data: $(form).serialize(),
                 success: function(data) {

                  // alert(data);
 
                   if(data=='Sign In Successful'){

                    // alert(data);

                      $('.alert-success').html(data);
                      $('.successresponse1').show().delay(10000).fadeOut();
                      $('.errorresponse1').hide();


                      window.location="<?php echo base_url(); ?>WebsiteController";
                     }
                     else{
                      $('.alert-danger').html(data);
                      $('.errorresponse1').show().delay(10000).fadeOut();
                      $('.successresponse1').hide();
                      
                      document.getElementById("signInForm").reset();
                     }
                         
                 }
             });
    }
  });
 
});
 </script>

 <script type="text/javascript">
  $(document).on('click', '.toggle-password4', function() {

    $(this).toggleClass("fa-eye fa-eye-slash");
    
    var input = $("#us_password");
    input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
});
</script>

<script type="text/javascript">
  $(document).on('click', '.toggle-password5', function() {

    $(this).toggleClass("fa-eye fa-eye-slash");
    
    var input = $("#l_password");
    input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
});
</script>
