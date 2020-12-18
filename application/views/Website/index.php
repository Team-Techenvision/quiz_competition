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
                <div class="main-slide">
                  <div class="row">
                    <div class=" col-md-6 col-12 grad">
                        <h1><?php echo $list->title; ?> </h1>
                        <p><?php echo $list->subtitle; ?></p>
                        <!-- <p class=""><a href="#"> Reand More  <span class="ml-3 arrow"> 
                          <img class="svg-arw" src="<?php echo base_url(); ?>assets/images/website/arrow.svg">
                        </span> </a>  </p>-->
                    </div>
                    <div class="col-md-6 col-12 image_div">
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
                    <div class="col-xl-6">

                        <div id="" class="px-4 py-2 text-white "  >
                          <h4 class="comptitle mb-0">
                             It's Amazing
                           </h4>
                           <span class="section-divider"></span>   

              </div>
                        <div class="about-two__content text-white abt">

                            <div class="col-xl-12 col-md-12 col-sm-12 col-12 " >
                              <!-- data-aos="fade-up" data-aos-duration="7000" -->

                  <!-- <h4 class="mt-3"><span class="number_area">1 </span><span class="font-we text-uppercase"></span></h4> -->
                  <p>We plan 30 different competition activities every month. Your child can perform, experiment &amp;
                    participate in all the activities from the comfort of your home. This keeps your child fresh, active
                    &amp; motivated.</p>

                </div>

                        </div> <!-- /.about-two__content -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-xl-6 d-flex justify-content-xl-end justify-content-sm-center imagemr">

                        <iframe width="80%" height="280" class="border mt-md-5 mt-xl-5 mt-sm-0 mt-0" src="https://www.youtube.com/embed/CtL-fJdHUTQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>

                        </div><!-- /.about-two__image -->
                    </div><!-- /.col-lg-6 -->

            </div><!-- /.container -->
        </section><!-- /.about-two -->

        <section class="competition">

          <br><br>

            <div class="container">

                 <div id="" class="px-4 py-2 text-white text-center">
                  <h5 class="section__meta mb-2">Choose Your Competition Activities</h5>
                <h4 class="text-center ">
                 <span class="text-white comptitle" > Competition Activities </span>
                </h4><span class="section-divider"></span>            
                 </div>
             

              <div class="row">
                <div class="col-lg-12">
                    <div class="section-tab margin-top-28px margin-bottom-55px">
                        <ul class="nav nav-tabs justify-content-center text-center" role="tablist" id="review" style=" border: none;">
                           <?php $i = 0;
                  foreach ($tab_list as $list) {
                    $i++; ?>
                            <li role="presentation" class="li">

                                <a href="#<?php echo $list->tabid;?>" role="tab" data-toggle="tab" class="theme-btn  " aria-selected="true">
                                    <?php echo $list->tabinputtext;?>
                                </a>
                            </li>
                          <?php } ?>
                            <!-- <li role="presentation" class="li">
                                <a href="#nur-class1" role="tab" data-toggle="tab" class="theme-btn " aria-selected="false">
                                    2nd-5th
                                </a>
                            </li>
                            <li role="presentation" class="li">
                                <a href="#nur-class1" role="tab" data-toggle="tab" class="theme-btn " aria-selected="false">
                                    6th-9th
                                </a>
                            </li>
                            <li role="presentation" class="li">
                                <a href="#nur-class1" role="tab" data-toggle="tab" class="theme-btn " aria-selected="false">
                                    Males(18+)
                                </a>
                            </li>
                            <li role="presentation" class="li">
                                <a href="#nur-class1" role="tab" data-toggle="tab" class="theme-btn " aria-selected="false">
                                    Females(18+)
                                </a>
                            </li> -->
                        </ul>
                    </div><!-- end section-tab -->
                </div><!-- end col-lg-12 -->
            </div>
<!-- <div class="row">
               <ul class="nav nav-tabs"  role="tablist" style="background-color: lightgray;width:600px;">
    <li class="nav-item " style="width:100px;">
      <a class="nav-link active" data-toggle="tab" href="#nur-class1">Nur-1st</a>
    </li>

    <li class="nav-item "style="width:100px;">
      <a class="nav-link" data-toggle="tab" href="#class2-class5">2nd-5th</a>
    </li>

    <li class="nav-item" style="width:100px;">
      <a class="nav-link" data-toggle="tab" href="#class6-class9">6th-9th</a>
    </li>
    <li class="nav-item" style="width:150px;">
      <a class="nav-link" data-toggle="tab" href="#males">Males(18+)</a>
    </li>
    <li class="nav-item" style="width:150px;">
      <a class="nav-link" data-toggle="tab" href="#females">Females(18+)</a>
    </li>
  </ul>

</div> -->
<!-- Tab panes -->

  <div class="tab-content">
    <div id="<?php echo $list->tabinputtextid;?>" class="container tab-pane active"><br>
<div class="container">
    <div class="row">
       <?php $i = 0;
                  foreach ($competition_list as $list) {
                    $i++; ?>
        <div class="col-xl-4 col-md-4 col-sm-12 col-12 mt-4 mobile_area">
      <div class="row">

        <div class="col-xl-12 col-md-12 col-sm-12 col-12 over">
          <img src="<?php echo base_url('assets/images/competition/'.$list->photo); ?>" style="border-radius: 4px 4px 0 0; vertical-align: middle; border-style: none;" alt="intellithon" class="img-fluid">
            <div class="overlay"> </div>
          <div class="tag_inherit a" ><?php echo $list->class;?></div>
        </div>
      </div>
      <div class="row " >
        <div class="col-xl-12 col-md-12 col-sm-12 col-12" >
          <div class="col-xl-12 col-md-12 col-sm-12 col-12  py-3 " style="">
            <div class="row rowspace">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4 class="titlee mb-4" ><?php echo $list->title;?></h4>
              </div>
            </div>
            <div class="row rowspace">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-info pr-0 cstm-min-height" >
                <span><strong style="font-weight: 500;"><?php echo $list->subtitle;?></strong></span> <br>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-xl-7 col-md-12 col-sm-12 col-12  comp">
                <button class="buttontheme " style="">
               <a class="" data-toggle="modal" data-target="#participate"  >Participate</a>
               </button>
              </div>
                                              <!-- Participant Modal -->
<div class="modal fade" id="participate" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Participant Information
</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
      <div class="modal-body modal-bodyy">
    
        <form id="form_action" role="form" action="" method="post">
                <div class="card-body row">
                  <div class="form-group col-md-12">
                    <input type="text" class="form-control txtOnly" name="parentname" id="parentname" value="<?php if(isset($parentname)){ echo $parentname; } ?>" placeholder="Enter Parent Name" required>
                  </div>
                      <div class="form-group col-md-12">
                    <input type="email" class="form-control" name="emailid" id="emailid" value="<?php if(isset($emailid)){ echo $emailid; } ?>" placeholder="Enter Email ID" required>
                  </div>
                   <div class="form-group col-md-6">
                    <input type="number" class="form-control" name="age" id="age" value="<?php if(isset($age)){ echo $age; } ?>" placeholder="age" required>
                  </div>

              
                     <div class="form-group col-md-6">
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
                  <input type="text" class="form-control required title-case text txtOnly" name="schoolcollegename" id="schoolcollegename" value="<?php if(isset($schoolcollegename)){ echo $schoolcollegename; } ?>" placeholder="Enter School/college Name" required >
                  </div>
                  <div class="form-group col-md-3">

                     <?php
                      if(isset($country)){?>

                      <input type="text" class="form-control required title-case text" name="countryid" id="countryid" value="<?php if(isset($countryid)){ echo $countryid; } ?>" disabled="">
                       <?php }?>
                      <select name="countryid" id="countryid"class="form-control" >
                    <option value="">Select Country</option>
                   <?php foreach($country as $country)
                     {
                          echo '<option value="'. $country->countryid.'" '.$selected.'>'. $country->countryname.'</option>';

                               
                      }
                     ?>   
                    
                  </select>
                  </div>

                   <div class="form-group col-md-3">
                     <?php
                      if(isset($stateid)){?>

                      <input type="text" class="form-control required title-case text" name="stateid" id="stateid" value="<?php if(isset($stateid)){ echo $stateid; } ?>" disabled="">
                       <?php }?>
                      <select name="stateid" id="stateid"class="form-control" >
                        <option value="">Select State</option>
                   
                  </select>
                  </div>
                    <div class="form-group col-md-3">
                        <?php
                      if(isset($cityid)){?>

                      <input type="text" class="form-control required title-case text" name="cityid" id="cityid" value="<?php if(isset($cityid)){ echo $cityid; } ?>" disabled="">
                       <?php }?>
                      <select name="cityid" id="cityid"class="form-control" >
                    <option value="">Select City</option>
                   
                  </select>
                  </div>
                  <div class="form-group col-md-3">
                      <?php
                      if(isset($districtid)){?>

                      <input type="text" class="form-control required title-case text" name="districtid" id="districtid" value="<?php if(isset($districtid)){ echo $districtid; } ?>" disabled="">
                       <?php }?>
                      <select name="districtid" id="districtid"class="form-control" >
                    <option value="">Select District</option>
                    
                  </select>
                  </div>
                
                   
                     
                  <div class="form-group col-md-9 mb-4">
                    <textarea type="text" class="form-control required title-case text" name="address" id="address" value="" placeholder="Enter Address" required><?php if(isset($address)){ echo $address; } ?></textarea>
                  </div>
                   <div class="form-group col-md-3">
                    <input type="number" class="form-control required title-case text" name="pincode" id="pincode" value="<?php if(isset($pincode)){ echo $pincode; } ?>" placeholder="Enter Pincode" required>
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
    </div>
  </div>
</div>

              <div class="col-xl-5 col-md-12 col-sm-12 col-12 pl-xl-0 mt-xl-0 mt-md-3 mt-sm-3 mt-3 text-xl-right text-md-left text-sm-left-text-left  comp">
                 <button class="buttontheme"  style="">
                  <a class=" "  data-toggle="modal" data-target="#instructions_text">Instructions</a>
                  </div>
                </button>
               
                <!-- Modal -->
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
        <?php echo $list->instruction;?><!-- <?php echo $company_list[0]->company_address;?> -->
      </div>
      
    </div>
  </div>
</div>
              
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <?php } ?>
    <!-- ************** -->



   


</div>
</div>

    </div>
    

            </div>
        </section><!-- /.course-one__top-title -->
<br>
