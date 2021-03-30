<style type="text/css">
  #toast-container{
  
  }
  /*.profileerr .toast-top-right{

    top:50%;
    right: 22%;
  }*/
  .toast-top-right{

    top:50%;
    right: 30%;
  }
    .toast {
    width: 100% !important;
    max-width: 600px!important;
  
    font-size: 22px!important;
   
   }
   .passwordlabel{
  font-size: 11px;
  color: white;
   position: relative;
   line-height: 1;
    bottom:-85px;
}
label#user_password-error {
    margin-top: 15px;
} 
 #newpassword-error{
   position: relative;
    bottom: -35px;
}
</style>
<section class="reset_password aboutus  " style="background-color: #121a2b;" >
            <div class="container mb-5 mt-5">
                <h2 class="mb-5 text-white text-center">Reset Password</h2>
                  <form id="form_action" role="form" name="reset_pass" action="<?php echo base_url(); ?>WebsiteController/reset" method="post" >
                      <div class="row mb-4 mt-4 text-center" style="color:#fffffffa;">
                  <div class="form-group col-md-4"></div>
                  <div class="form-group col-md-4 mb-5">
                  <label  class="text-white">New Password</label>
                    <label class="passwordlabel">Note: Password must contain uppercase, lowercase letters and number with a minimum of 8 characters</label>
                  <span toggle="#password-field1"  style="position: absolute; right: 35px; top :90px;
    color: black;" class="fa fa-fw fa-eye field_icon toggle-password2"></span>
                  <input type="password"  style="border-radius: 25px; height: 50px;" class="form-control text-center" name="newpassword" id="newpassword" placeholder="Enter Your New Password" required="">

                 </div>
                  <div class="form-group col-md-4 "></div>


                  <div class="form-group col-md-4"></div>

                  <div class="form-group col-md-4">
                  <label  class="text-white">Re-Enter New Password</label>
                    <span style="position: absolute; right: 35px;  top :60px;
    color: black;" toggle="#password-field"  class="fa fa-fw fa-eye field_icon toggle-password3"></span>
                  <input type="password" style="border-radius: 25px; height: 50px;" class="form-control text-center" name="retypepassword" id="retypepassword" placeholder="Re-Enter Your New Password" required="">

                 </div>
                 <div class="form-group col-md-12">
                      <button type="submit" style="border-radius: 10px; " name="submit" class="btn btn btn-outline-primary pl-4 pr-4">Save</button>
                      </div>
                      
                      <div class="form-group col-md-12 text-danger">
                       <?php if($this->session->flashdata('emailcheck_error')){
                        
                             echo 'Password did not match';
                            
                         } ?>
                         </div>
                      </div>
                  </form>
                  
                
          
          </div>

</section>
 <script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>
 <!--  <script type="text/javascript">
  < ?php if($this->session->flashdata('save_success')){ ?>
    $(document).ready(function(){
      toastr.success('Banner Saved Successfully');
    });
  < ?php } ?>
  
  < ?php if($this->session->flashdata('delete_success')){ ?>
    $(document).ready(function(){
      toastr.error('Banner Deleted Successfully');
    });
  < ?php } ?>

  </script> -->
  <script type="text/javascript">
  $(document).on('click', '.toggle-password2', function() {

    $(this).toggleClass("fa-eye fa-eye-slash");
    
    var input = $("#newpassword");
    input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
});
</script>

<script type="text/javascript">
  $(document).on('click', '.toggle-password3', function() {

    $(this).toggleClass("fa-eye fa-eye-slash");
    
    var input = $("#retypepassword");
    input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
});
</script>
  <script type="text/javascript">
 
  // Wait for the DOM to be ready
$(function() {


$.validator.addMethod("pwcheck", function(value, element) {
    return this.optional(element) || /^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[!@#$%&*])[a-zA-Z0-9!@#$%&*]+$/.test(value);
  //(?=.*[a-zA-Z\d].*)[a-zA-Z\d!@#$%&*]
}, "");   
// $.validator.addMethod("pwcheck", function(value) {
//    return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value) // consists of only these
//        && /[a-z]/.test(value) // has a lowercase letter
//        && /\d/.test(value) // has a digit
// });
  
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='reset_pass']").validate({


    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      
      newpassword: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        pwcheck: true
      },
      
    },
    // Specify validation error messages
    messages: {
     
      newpassword: "Please enter valid password.",
    
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
      
   }
  });
 
});



 </script> 