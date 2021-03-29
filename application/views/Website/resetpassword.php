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
<section class="reset_password aboutus  " style="background-color: #121a2b;" >
            <div class="container mb-5 mt-5">
                <h2 class="mb-5 text-white text-center">Reset Password</h2>
                  <form id="form_action" role="form" action="<?php echo base_url(); ?>WebsiteController/forgotpasswordsubmit" method="post" >
                      <div class="row mb-4 mt-4 text-center" style="color:#fffffffa;">
                  <div class="form-group col-md-4"></div>
                  <div class="form-group col-md-4">
                  <label for="email" class="text-white">New Password</label>
                  <input type="password" class="form-control text-center" style="border-radius: 25px; height: 50px;" name="newpassword" id="newpassword" placeholder="Enter Your New Password" >

                 </div>
                  <div class="form-group col-md-4"></div>
                  <div class="form-group col-md-4"></div>

                  <div class="form-group col-md-4">
                  <label for="email" class="text-white">Re-Enter New Password</label>
                  <input type="password" style="border-radius: 25px; height: 50px;" class="form-control text-center" name="retypepassword" id="retypepassword" placeholder="Re-Enter Your New Password" >

                 </div>
                 <div class="form-group col-md-12">
                      <button type="submit" style="border-radius: 10px; " name="submit" class="btn btn btn-outline-primary pl-4 pr-4">Save</button>
                      </div>
                        <div class="form-group col-md-12">
                       <?php if($this->session->flashdata('emailcheck_error')){
                        
                             echo 'You entered wrong password';
                            
                         } ?>
                         </div>
                      </div>
                  </form>
                  
                
          
          </div>

</section>
 <script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>
 <!--  <script type="text/javascript">
  <?php if($this->session->flashdata('save_success')){ ?>
    $(document).ready(function(){
      toastr.success('Banner Saved Successfully');
    });
  <?php } ?>
  
  <?php if($this->session->flashdata('delete_success')){ ?>
    $(document).ready(function(){
      toastr.error('Banner Deleted Successfully');
    });
  <?php } ?>

  </script> -->