<?php  
$quizweb_user_id = $this->session->userdata('quizweb_user_id');
$user_list = $this->Website_Model->get_list_by_id('user_id',$quizweb_user_id,'','','','','user');
?>

<!DOCTYPE html>
<html>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper competitionwrapper"  style="background-image:url('<?php echo base_url(); ?>/assets/images/17973908.jpg');background-blend-mode: overlay;
    background-repeat: no-repeat;
    background-size: cover;
    background-color: #ecf1eabf;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 mt-1">
            <!-- <h4>PARTICIPATION PROFILE INFORMATION</h4> -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12 text-black" style="font-size: 16px; font-weight: 400;">
            <!-- general form elements -->
           <div class="">
<!--             <div class="card-header "> -->
            
              <!-- <h5 class="card-title text-center h4" style="color: crimson;"><i class="fa fa-list"></i> 
                Competition Information
              </h5> -->
             <!--  <div class="card-tools col-md-2 " >
                <a href="add_profile" class="btn btn-sm btn-block btn-primary "  >Add Participation</a>
              </div> -->
            <!-- </div> -->
            <!-- /.cardd-header -->
              <div class="">
                <?php foreach ($competition_list as $value) { ?>
                 <div class="row mb-4">
                   <div class="col-md-12 text-center titleS mb-4 mt-4" >
                    <?php echo $value->title; ?>
                   </div>
                    
                 </div>
                 <div class="row mb-4">
                    <div class="col-md-3 m-4" >
                    <img src="<?php echo base_url("assets/images/competition/".$value->photo);?>"height="350px" width="300px"/>
                   </div>
                   <div class="col-md-7 m-4">
                      <div class="col ml-4" >
                          <label class="text-dark labelSC">Competition Type : </label>
                          <?php echo $value->competitiontype; ?>
                     </div>
                      <div class="col ml-4" >
                         <label class="text-dark labelSC">Competition Level : </label>
                         <?php echo $value->levelname; ?>
                     </div>
                      <div class="col ml-4" >
                         <label class="text-dark labelSC">Class : </label>
                         <?php echo $value->class; ?>
                     </div>
                       <div class="col ml-4" >
                         <label class="text-dark labelSC">End Date : </label>
                         <?php echo $value->enddate; ?>
                     </div>
                       <div class="col ml-4" >
                         <label class="text-dark labelSC">Age : </label>
                          <label>From </label>
                         <?php echo $value->fromage; ?>
                          <label>To </label>
                         <?php echo $value->toage; ?>
                     </div>

                   </div>
                 </div>
                 <div class="row mb-4">
                    <div class="col-md-12 ml-4 " >
                         <label class="labelS">Terms and Conditions </label><br>
                         <?php echo $value->termsandconditions; ?>
                     </div>
                 </div>
                  <div class="row mb-4">
                    <div class="col-md-12 ml-4" >
                         <label class="labelS">Instructions</label><br>
                         <?php echo $value->instruction; ?>
                     </div>
                 </div>
                   <div class="row mb-4">
                    <div class="col-md-12 ml-4" >
                       <center><!-- <button  data-toggle="modal"  data-target="#participate"  class="btn-primary" value="<?php echo $value->competitionid;?>">Participate</button> -->

                        <div class="button11" id="button-6">
    <div id="spin"></div>
    <a href="#" data-toggle="modal"  data-target="#participate" value="<?php echo $value->competitionid;?>">Participate</a>
  </div>
                       </center>
                     </div>


                       <!-- particepation model  -->
        <div  class="modal fade bd-example-modal-lg" id="participate" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                          <div class="modal-content">
                            <?php 
                            
                             if(!isset($quizweb_user_id)){ 
                          // print_r($user_list->user_id);
                              ?>
                             
                              <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle">Please Login To Participate </h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                             
                            </div>

                            <?php }else{  ?>

                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle">Add Participate </h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                           <form id="myForm" role="form"   action="<?php echo base_url(); ?>WebsiteController/insert_profiledata" method="post">
                            <div class="modal-body ">
                          
                                <div class="card-body row" style="padding-bottom: 0px;">
                                 <input type="hidden" name="competition_id" id="competition_model_id" value="<?php echo $value->competitionid;?>">

                                  <div class="form-group col-md-12">
                                    <label>Parent Name</label>&nbsp;<label style="color:red;">*</label>
                                    <input type="text" class="form-control txtOnly" name="parentname" id="parentname" value="<?php if(isset($parentname)){ echo $parentname; } ?>" placeholder="Enter Parent Name" required>
                                  </div>
                                   <div class="form-group col-md-3">
                                    <label>Age</label>&nbsp;<label style="color:red;">*</label>
                                    <input type="number" min="0" step="1" oninput="validity.valid||(value='');" class="form-control" name="age" id="age" value="<?php if(isset($age)){ echo $age; } ?>" placeholder="Enter age" required>
                                  </div>

                                  <div class="form-group col-md-6">
                                     <label>Email Address</label>&nbsp;<label style="color:red;">*</label>
                                    <input type="email" class="form-control" name="emailid" id="emailid" value="<?php if(isset($emailid)){ echo $emailid; } ?>" placeholder="Enter Email Address" required>
                                  </div>

                                   <div class="form-group col-md-3">
                                     <label>Grade</label>
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
                                     <label>School/College Name</label>
                                  <input type="text" class="form-control required title-case txtOnly" name="schoolcollegename" id="schoolcollegename" value="<?php if(isset($schoolcollegename)){ echo $schoolcollegename; } ?>" placeholder="Enter School/college Name"  >
                                  </div>
                             
                                  
                                  
                                  <div class="form-group col-md-9">
                                     <label>Address</label>
                                    <textarea type="text" class="form-control required title-case" name="address" id="address" value="" placeholder="Enter Address" ><?php if(isset($address)){ echo $address; } ?></textarea>
                                  </div>
                                    <div class="form-group col-md-3">

                                 <!--  < ?php
                                      if($user_list->user_pincode)){?>

                                      <input type="text" class="form-control required title-case text" name="pincode" id="pincode" value="< ?php if(isset($pincode)){ echo $pincode; } ?>" disabled="">
                                       < ?php }?>   -->
                                        <label>Pincode</label>&nbsp;<label style="color:red;">*</label>
                                         <input type="number"  min="0" step="1" oninput="validity.valid||(value='');" class="form-control" name="pincode" id="pincode" value="<?php echo $user_list[0]->user_pincode; ?>" placeholder="Enter pincode" required>

                                    <!--   <select name="pincode" id="pincode"class="form-control" required="">
                                    <option value="">Select Pincode</option>
                                   < ?php foreach($pin as $pin)
                                     {
                                          echo '<option value="'. $pin->pincodeid.'" '.$selected.'>'. $pin->pincode.'</option>';
                                              }
                                     ?>   
                                    
                                  </select> -->
                                  </div>
                                 
                                </div>
                                <!-- /.card-body -->
                             
                            </div>

                        
                            <div class="modal-footer">
                            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> data-dismiss="modal"-->
                                     <?php if(isset($update)){ ?>
                                        <button id="btn_update" type="submit" class="btn btn-primary">Update </button>
                                      <?php } else{ ?>
                                        <button id="btn_save"  style="margin-left: 20px;" type="submit" class="btn btn-primary px-4">Participate</button>
                                      <?php } ?>
                                      <a href="" class="btn btn-light ml-4" data-dismiss="modal" onclick="myFunction()">Cancel</a>
                             </div>
                           </form>
                              <?php } ?>


                          </div>
                        </div>
                      </div>  <!--Prticepation Modal Ends -->
                 </div>
               <?php } ?>
             
              </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
  </div>
   <!-- <script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script> -->
  <!-- <script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script> -->
 <script type="text/javascript">
  $('#btn_save').click(function(){
    // alert('hii');

   if($.trim($('#emailid').val()) == ''||$.trim($('#parentname').val()) == ''||$.trim($('#age').val()) == ''||$.trim($('#pincode').val()) == ''){
      alert('Fill all the necessary fields');
   }
   else{
    return confirm('Are you sure want to save Record')
   }
});

function myFunction() {
            document.getElementById("myForm").reset();
        }

</script>
 
</body>
</html>
