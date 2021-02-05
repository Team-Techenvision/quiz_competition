

<!DOCTYPE html>
<html>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper" style="background-image:url('<?php echo base_url(); ?>/assets/images/backprofile.jpg');">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper profilewrapper">
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
        <div class="row" >
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card" style="border-radius: 2.25rem!important; border:none!important;">
            <div class="card-header ">
            
              <h4 class="card-title text-center" style="color: #e22d2d;"><!-- <i class="fa fa-list"></i>  -->Profile Information</h4>
             <!--  <div class="card-tools col-md-2 " >
                <a href="add_profile" class="btn btn-sm btn-block btn-primary "  >Add Participation</a>
              </div> -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
               <form id="form_action" role="form" action="<?php echo base_url(); ?>WebsiteController/edit_profile" method="post" enctype="multipart/form-data"> 
                 <div class="row" >   
                  <div class="form-group col-md-4">
                  <?php if( (isset($profile_image)) && ($profile_image != '') ) {  ?>
                  <img id="blah" class="rounded-circle " src="<?php  echo base_url();?>assets/images/profile/<?php echo $profile_image; ?>" alt="" height="150px" width="150px" />

                  <?php }else{ ?>
                  <img id="blah" class="rounded-circle " src="<?php echo base_url();?>assets/images/profile/profile1.jpg" alt="" height="150px" width="150px" />
                <?php  }?>
                <br>

                   <input type="file" class="col" id="profile_image" name="profile_image" style="margin-top: 15px;" onchange="readURL(this);" />

                  <!-- 
                  src="<?php if(isset($profile_image)){ echo base_url();?>assets/images/banner/<?php echo $profile_image; } ?>" -->
                   
                      <!--  <img id="blah"  class="rounded-circle" src="<?php  echo base_url();?>assets/images/profile1.jpg" alt="" height="150px" width="150px" /> -->
                   </div> 
                   <div class="form-group col-md-8">
                      <div class="row" >
                           <div class="form-group col-md-12">
                            <div class="row">
                              <div class="col-md-4"><label>Parent Name</label>&nbsp;<label style="color:red;">*</label></div>
                        
                         <div class="col-md-8"><input type="text" class="form-control txtOnly" name="parentname" id="parentname" value="<?php if(isset($parentname)){ echo $parentname; } ?>" placeholder="Enter Parent Name" required></div>
                       </div>
                        <input type="hidden" name="competition_id" id="competition_model_id" value="<?php if(isset($competitionid)){ echo $competitionid; } ?>">
                  
                      </div>
                    
                        <div class="form-group col-md-12">
                             <div class="row">
                              <div class="col-md-4"><label for="inputName" class="form-label">Participant Age</label>&nbsp;<label style="color:red;">*</label></div>
                        
                                 <div class="col-md-8">
                                  <input type="text" class="form-control notext"  name="age" id="age" value="<?php if(isset($age)){ echo $age; } ?>" minlength="2" maxlength="2"placeholder="Enter age" required>

                                </div>
                                  </div>
                                  </div>

                                   <div class="form-group col-md-12">
                             <div class="row">
                              <div class="col-md-4"><label for="inputName" class="form-label">Email Address</label>&nbsp;<label style="color:red;">*</label></div>
                        
                                 <div class="col-md-8">
                                    <input type="email" class="form-control" name="emailid" id="emailid" value="<?php if(isset($emailid)){ echo $emailid; } ?>" placeholder="Enter Email Address" required>
                                  </div></div>
                                  </div>

                                   
                                 
                                  <div class="form-group col-md-12">
                             <div class="row">
                              <div class="col-md-4"><label for="inputName" class="form-label">School/College Name</label></div>
                        
                                 <div class="col-md-8">
                                  <input type="text" class="form-control required title-case txtOnly" name="schoolcollegename" id="schoolcollegename" value="<?php if(isset($schoolcollegename)){ echo $schoolcollegename; } ?>" placeholder="Enter School/college Name"  ></div>
                                </div>
                                  </div>

                             <div class="form-group col-md-12">
                             <div class="row">
                              <div class="col-md-4"><label for="inputName" class="form-label">Grade</label></div>
                        
                                 <div class="col-md-8">
                                 <!--   <?php
                                      if(isset($grade)){?>

                                      <input type="text" class="form-control title-case " name="grade" id="grade" value="<?php if(isset($grade)){ echo $grade; } ?>" disabled="">
                                    <?php }?>   -->
                                  <select name="grade" id="grade"class="form-control" >
                                  <option value="">Select Grade</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                </select>
                                 </div>
                                </div>
                                
                              </div>
                                  
                                  
                               <div class="form-group col-md-12">
                             <div class="row">
                              <div class="col-md-4"><label for="inputName" class="form-label">Address</label></div>
                        
                                 <div class="col-md-8">
                                    <textarea type="text" class="form-control required title-case" name="address" id="address" value="" placeholder="Enter Address" ><?php if(isset($address)){ echo $address; } ?></textarea>
                                  </div></div>
                                  </div>
                                  
                            <div class="form-group col-md-12">
                             <div class="row">
                              <div class="col-md-4"><label for="inputName" class="form-label">Pincode</label>&nbsp;<label style="color:red;">*</label></div>
                        
                                 <div class="col-md-4">
                                 <!--  <?php
                                      if(isset($pincode)){?>

                                      <input type="text" class="form-control title-case " name="pincode" id="pincode" value="<?php if(isset($pincode)){ echo $pincode; } ?>" disabled="">
                                       <?php }?>   -->
                                     <input type="text" class="form-control" minlength="6" maxlength="6" name="pincode" id="pincode" value="<?php if(isset($pincode)){ echo $pincode; } ?>" placeholder="Enter pincode" required>
                                    </div></div>
                                  </div>
                                    </div>

                      </div>

                    </div>      
                    <div class="row " >   
                   <div class="form-group col-md-5"></div>
                   <div class="form-group col-md-2">
                     <center><div class="button11" id="button-6">
                       <div id="spin"></div>
                       <a href="#" id="btn_update" type="submit" >Update</a>
                      </div></center>
                  <!--  <button id="btn_update" style="padding-left: 20px; padding-right: 20px;" type="submit" class="btn btn-primary">Edit </button> -->
                 </div>
               </div>
              
                  </form>
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
   <script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>
  <script type="text/javascript">
  <?php if($this->session->flashdata('save_success')){ ?>
    $(document).ready(function(){
      toastr.success('Saved successfully');
    });
  <?php } ?>
  <?php if($this->session->flashdata('update_success')){ ?>
    $(document).ready(function(){
      toastr.success('Updated successfully');
    });
  <?php } ?>
  <?php if($this->session->flashdata('delete_success')){ ?>
    $(document).ready(function(){
      toastr.error('Deleted successfully');
    });
  <?php } ?>

  </script>
  <script>
   
   $('.pis').bind("click" , function () {
          $('#profile_image').click();
   });
   
    function readURL(input) {
              if (input.files && input.files[0]) {
                  var reader = new FileReader();

                  reader.onload = function (e) {
                      $('#blah')
                          .attr('src', e.target.result);
                  };

                  reader.readAsDataURL(input.files[0]);
              }
          }
  </script>
 
</body>
</html>
