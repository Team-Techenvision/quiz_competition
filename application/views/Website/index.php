<!-- <style type="text/css">
    .a{
        background-color: rgba(255, 255, 255, 0.7);
    color: #000;
    padding: 5px 10px;
    border-radius: 0 5px 5px 0 !important;
    position: absolute;
    top: 20px;
    left: 15px;
    font-size: 13px;
    }
    .b{
         display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
    }
</style> -->

<!-- <div class="container-fluid conhead"> -->
       <!-- <div class="row">
         <div class="col-md-12 p-0">
           <div id="slider2" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <?php $i=0; foreach ($banner_list as $list) {
                  if($list->slider_possition == 1 ){ $i++;
                ?>
                  <div class="carousel-item image-gradient <?php if($i == 1){ echo 'active'; } ?>">
                    <img class="middle-img border-img" src="<?php echo base_url('assets/images/banner/'.$list->profile_image); ?>" alt="First slide">
               
                  </div>
                <?php } } ?>
              </div>
              <a class="carousel-control-prev" href="#slider2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#slider2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
         </div>
       </div> -->

       <div class="row carousel">
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
        <div class="owl-carousel owl-theme owl-one">
          <?php if($banner_list){
            foreach ($banner_list as $list) {
              if($list->slider_possition == '1'){ ?>
              <div class="item">
                <div class="main-slide ">
                  <div class="row ">
                   <!--  <div class=" col-md-4 col-12 ">
                        <h1><?php echo $list->title; ?> </h1>
                        <p><?php echo $list->subtitle; ?></p>
                        
                    </div> -->
                    <!-- <div class="image-gradient"></div> -->
                    <div class="col-md-4 bg-website banner_text_div">
                         <h1 class="text-white"><?php echo $list->title; ?> </h1>
                        <p class="text-white"><?php echo $list->subtitle; ?></p>
                    </div>
                    <div class="col-md-8 col-12 image_div">
                        <div class="grad">
                       
                        </div>
                        <img src="<?php echo base_url(); ?>assets/images/banner/<?php echo $list->profile_image; ?>" width="100%">
                    </div>
                  </div>
                </div>
              </div>
          <?php } } } ?>
      </div>
      </div>
     </div>


 <section class="about-two">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">

                     
                        <div class="about-two__content text-white abt">

                            <div class="col-xl-12 col-md-12 col-sm-12 col-12 " >
                              <!-- data-aos="fade-up" data-aos-duration="7000" -->

                  <!-- <h4 class="mt-3"><span class="number_area">1 </span><span class="font-we text-uppercase"></span></h4> -->
                  <p class="headingtitle">We plan 30 different competition activities every month. Your child can perform, experiment participate in all the activities from the comfort of your home. This keeps your child fresh, active motivated.</p>

                </div>

                        </div> <!-- /.about-two__content -->
                    </div><!-- /.col-lg-6 -->
                  
                    </div><!-- /.col-lg-6 -->

            </div><!-- /.container -->
        </section><!-- /.about-two -->
        <section class="competition">
          <div class="container">           
  <!-- ********************************************* -->

                           

                    
                     
           
            
          </div>
          <!-- container close -->
        </section>

        <!-- /.course-one__top-title -->
<br>



   <section class="featured">
        <div class="container">
        <div class="row">   
        <div class="col-md-12" align="center">
            <button class="theme-btn " data-filter="all">All</button>

            <!-- Tab button fetch dyanamic start  -->
                <?php $i = 0;
                  foreach ($tab_list as $list) {
                    $i++; ?>
                      <button class="theme-btn" data-filter="<?php echo $list->tabinputtext;?>">  <?php echo $list->tabinputtext;?> </button>

                <?php } ?>
                   <!-- Tab button fetch dyanamic ends  -->
          </div>
       

          <!-- cart fetch dyanamic start  -->
      <?php if($competition_list){
          foreach ($competition_list as $list) {
        ?>
           <div class="col-xl-3 col-md-3 col-sm-12 col-12 mt-4 mobile_area filter <?php echo $list->tabinputtext;?> all ">
              <div class="row">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12 over">
                 <img src="<?php echo base_url('assets/images/competition/'.$list->photo); ?>" style=" height:300px;  border-radius: 4px 4px 4px 4px; vertical-align: middle; border-style: none;" alt="intellithon" class="img-fluid">
              
               <div class="overlay">
                  <div class="text">
                    <h5> <?php echo $list->title;?>  </h5>
                    <h6> <?php echo $list->subtitle;?> </h6>
                    <button href="" data-toggle="modal" data-target="#participate"  class="competition_btn" value="<?php echo $list->competitionid;?>"><i class="fa fa-plus" aria-hidden="true"></i> Participate</button>
                    <p href="" data-toggle="modal" data-target="#instructions_text"  class=""><i class="fa fa-plus" aria-hidden="true"></i> Instruction</p>
                  </div>
                </div>
              <div class="tag_inherit a" > <?php echo $list->tabinputtext;?>  </div>
            </div>
          </div>    
        </div>


          <!-- particepation model  -->
        <div  class="modal fade bd-example-modal-lg" id="participate" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle">Add Participate</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                           <form id="form_action" role="form" action="" method="post">
                            <div class="modal-body ">
                             
                                <div class="card-body row">
                                 <input type="text" name="competition_id" id="competition_model_id">

                                  <div class="form-group col-md-12">
                                    <input type="text" class="form-control txtOnly" name="parentname" id="parentname" value="<?php if(isset($parentname)){ echo $parentname; } ?>" placeholder="Enter Parent Name" required>
                                  </div>
                                   <div class="form-group col-md-3">
                                    <input type="number" class="form-control" name="age" id="age" value="<?php if(isset($age)){ echo $age; } ?>" placeholder="Enter age" required>
                                  </div>

                                  <div class="form-group col-md-6">
                                    <input type="email" class="form-control" name="emailid" id="emailid" value="<?php if(isset($emailid)){ echo $emailid; } ?>" placeholder="Enter Email ID" required>
                                  </div>

                                   <div class="form-group col-md-3">
                                      <select name="grade" id="grade"class="form-control" >
                                    <option value="">Select Grade</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                  </select>
                                  </div>
                                 
                                  <div class="form-group col-md-12">
                                  <input type="text" class="form-control required title-case txtOnly" name="schoolcollegename" id="schoolcollegename" value="<?php if(isset($schoolcollegename)){ echo $schoolcollegename; } ?>" placeholder="Enter School/college Name" required >
                                  </div>
                             
                                  
                                  
                                  <div class="form-group col-md-9">
                                    <textarea type="text" class="form-control required title-case" name="address" id="address" value="" placeholder="Enter Address" required><?php if(isset($address)){ echo $address; } ?></textarea>
                                  </div>
                                    <div class="form-group col-md-3">

                                  <!-- <?php
                                      if(isset($pincode)){?>

                                      <input type="text" class="form-control required title-case text" name="pincode" id="pincode" value="<?php if(isset($pincode)){ echo $pincode; } ?>" disabled="">
                                       <?php }?>   -->
                                      <select name="pincode" id="pincode"class="form-control" required="">
                                    <option value="">Select Pincode</option>
                                   <?php foreach($pin as $pin)
                                     {
                                          echo '<option value="'. $pin->pincodeid.'" '.$selected.'>'. $pin->pincode.'</option>';

                                               
                                      }
                                     ?>   
                                    
                                  </select>
                                  </div>
                                 
                                </div>
                                <!-- /.card-body -->
                             
                            </div>
                            <div class="modal-footer">
                            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> data-dismiss="modal"-->
                                     <?php if(isset($update)){ ?>
                                        <button id="btn_update" type="submit" class="btn btn-primary">Update </button>
                                      <?php } else{ ?>
                                        <button id="btn_save" type="submit" class="btn btn-success px-4">Participate</button>
                                      <?php } ?>
                                      <a href="" class="btn btn-default ml-4" data-dismiss="modal">Cancel</a>
                           </div>
                           </form>
                            
                          </div>
                        </div>
                      </div>  <!--Prticepation Modal Ends -->

                         <!--instrruction  Modal -->
                      <div class="modal fade" id="instructions_text" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle">Instructions for Participants:
                      </h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                           
                            <div class="modal-body">
                              Each team will be asked 2 questions of 10 marks each. They will be given 30 seconds for each question. If the allotted team is unable to answer the question then the question will passed on to the subsequent teams. Subsequent teams will be given 15 seconds to answer & will be awarded 5 marks for each correct answer.
                              <!-- <?php echo $list->instruction;?> --><!-- <?php echo $company_list[0]->company_address;?> -->
                            </div>
                            
                          </div>
                        </div>
                      </div>  


        <?php   }  } ?>

         <!-- cart fetch dyanamic Ends  -->
        </div>  <!-- main row Ends  -->
    </div> <!-- main container  Ends  -->
    </section>


      <script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
                      <script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script> 
                     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  


                    <script>
                    $(document).ready(function(){
                     $('#countryid').change(function(){
                      var countryid = $('#countryid').val();
                      if(countryid != '')
                      {
                       $.ajax({
                        url:"<?php echo base_url(); ?>WebsiteController/fetch_state",
                        method:"POST",
                        data:{countryid:countryid},
                        success:function(data)
                        {
                          // alert(data);
                          // console.log(data);
                         $('#stateid').html(data);
                         $('#cityid').html('<option value="">Select City</option>');
                        }
                       });
                      }
                      else
                      {
                       $('#stateid').html('<option value="">Select State</option>');
                       $('#cityid').html('<option value="">Select City</option>');
                      }
                     });

                     $('#stateid').change(function(){
                      var stateid = $('#stateid').val();
                      if(stateid != '')
                      {
                       $.ajax({
                        url:"<?php echo base_url(); ?>WebsiteController/fetch_city",
                        method:"POST",
                        data:{stateid:stateid},
                        success:function(data)
                        {
                         $('#cityid').html(data);
                         $('#districtid').html('<option value="">Select District</option>');

                        }
                       });
                      }
                      else
                      {
                       $('#cityid').html('<option value="">Select City</option>');
                         $('#districtid').html('<option value="">Select District</option>');

                      }
                     });

                      $('#cityid').change(function(){
                      var cityid = $('#cityid').val();
                      if(cityid != '')
                      {
                       $.ajax({
                        url:"<?php echo base_url(); ?>WebsiteController/fetch_district",
                        method:"POST",
                        data:{cityid:cityid},
                        success:function(data)
                        {
                         $('#districtid').html(data);
                         
                        }
                       });
                      }
                      else
                      {
                       $('#districtid').html('<option value="">Select District</option>');
                       

                      }
                     });
                     
                    });
                    </script>

                 