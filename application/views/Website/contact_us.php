
<?php
  $company_list = $this->Website_Model->get_list_by_id('company_id','4','','','','','company');
?>

<section class="contact-us pt-5 py-5 bgbackgroundpages" >
            <div class="container">
              <h2 class="mb-5 text-white text-center">Contact Us</h2>
                <div class="row">
                  <div class="col-md-4 contactcol">
                    <form action="">
                      <div class="row contactusrow">

                        <div class="form-group col-md-12">
                        <label for="name" class="text-white">Name</label>
                        <input type="text" class="form-control" placeholder="Enter Name" id="name">
                      </div>
                      <div class="form-group col-md-12">
                        <label for="email" class="text-white">Email</label>
                        <input type="email" class="form-control" placeholder="Enter email" id="email">
                      </div>
                       <div class="form-group col-md-12">
                        <label for="mobno" class="text-white">Email</label>
                        <input type="number" class="form-control" placeholder="Enter Mobile No." id="mobno">
                      </div>
                      <div class="form-group col-md-12">
                        <label for="Messages" class="text-white">Messages</label>
                        <textarea type="text" class="form-control" placeholder="Enter Messages" id="Messages"></textarea>
                      </div>
                       <div class="form-group col-md-12">
                      <button type="submit" class="btn btn btn-outline-primary">SUBMIT</button>
                      </div>
                      </div>
                     </form>

                   
                  </div>
                  <div class="col-md-8 mt-2 contactcol">
                      
                      <div class="row">
                                       <!--Google map-->
                      <div id="map-container-google-1" class="z-depth-1-half map-container" style=" width: 100%">
                        <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                          style="border:0" allowfullscreen></iframe>
                      </div>

                      <!--Google Maps-->
                  </div>
                  <div class="row" style="margin-top: -80px;">
                       <div class="col-md-4 contactaddress">
                          <div class="row mt-4 mb-4"><img class="center" src="<?php echo base_url(); ?>assets/images/google.jpg" height="30" width="30"></div>
                          <div class="row">
                           <span class="contactaddress"><?php echo $company_list[0]->company_address;?></span>
                         </div>
                        </div><br>
                        <div class="col-md-4 contactaddress">
                           <div class="row mt-4 mb-4"><img src="<?php echo base_url(); ?>assets/images/contact.jpg" height="30" width="30"></div>
                            <div class="row " ><span class="text-center"style="margin-left: 40%;"><?php echo $company_list[0]->company_mob1;?></span></div>
                        </div><br>
                        <div class="col-md-4 contactaddress">
                            <div class="row mt-4 mb-4"><img src="<?php echo base_url(); ?>assets/images/mail.jpg" height="30" width="30"></div>
                            <div class="row  " style="margin-left: 25%;"> <a class="contactaddress"><?php echo $company_list[0]->company_email;?></a></div>
                       </div><br>
                   </div>
                  </div>
                  
            </div>
          
          </div>

</section>


<section class="map bgbackgroundpages pb-5" style="">
            <div class="container">
                <div class="row">
                
                 
                 
                 
                  
            </div>
          
          </div>

</section>
            