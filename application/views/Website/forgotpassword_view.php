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
</style>
<section class="forgot_password aboutus  " style="background-color: #121a2b;" >
            <div class="container mb-5 mt-5">
                <h2 class="mb-5 text-white text-center">Forgot Password</h2>
                  <form id="form_action" role="form"  action="<?php echo base_url(); ?>WebsiteController/forgotpasswordsubmit" method="post" >
                      <div class="row mb-4 mt-4 text-center" style="color:#fffffffa;">
                  <div class="form-group col-md-3"></div>
                  <div class="form-group col-md-6">
                  <label for="email" class="text-white">Enter Your Email Address</label>
                  <input type="email" style="border-radius: 25px; height: 50px;" class="form-control text-center" name="email_id" id="email_id" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  placeholder="Enter Email Address" required>

                 </div>
                 <div class="form-group col-md-12">
                      <button type="submit" style="border-radius: 10px; " name="submit" class="btn btn btn-outline-primary pl-4 pr-4">SUBMIT</button>
                      </div>
                     <div class="form-group col-md-12 text-danger">
                       <?php if($this->session->flashdata('email_error')){
                        
                             echo 'Enter Valid Email Address';
                            
                         } ?>
                         </div>
                          <div class="form-group col-md-12 text-success">
                       <?php if($this->session->flashdata('emaillink_success')){
                        
                             echo 'Your password reset link is sent to your email Successfully';
                            
                         } ?>
                         </div>
                      
                      </div>
                  </form>
                  
                
          
          </div>

</section>
 <script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>
<!--<script type="text/javascript">-->
<!--  < ?php if($this->session->flashdata('save_success')){ ?>-->
<!--    $(document).ready(function(){-->
<!--      toastr.success('Your password reset link is send to email Successfully');-->
<!--    });-->
<!--   < ?php } ?>-->
  
   <!--< ?php if($this->session->flashdata('email_error')){ ?>-->
<!--//     $(document).ready(function(){-->
<!--//       toastr.error('Invalid Email Address');-->
<!--//     });-->
<!--//   < ?php } ?>-->

<!--  </script>-->
