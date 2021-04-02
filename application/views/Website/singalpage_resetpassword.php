
<section class="reset_password aboutus  " style="background-color: #121a2b;" >
            <div class="container" style="margin-bottom: 10%; margin-top: 10%;">
                <!-- <h2 class="mb-5 text-white text-center">Reset Password</h2> -->
               
                 
                    
                       <div class="form-group col-md-12 text-danger text-center" style="font-size: 25px; font-weight: 500">
                       <?php if($this->session->flashdata('alreadyreset_error')){
                        
                             echo 'You have already reset password.';
                            
                         } ?>
                      </div>
                      
                    
                
          </div>

</section>
 <script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>
