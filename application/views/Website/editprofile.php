<!--  -->
<style type="text/css">
  input[type=file]{
    width:120px;
    color:transparent;
}
</style>
<!DOCTYPE html>
<html>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper" >
  <!-- Content Wrapper. Contains page content -->
  <div class=" profilewrapper" style="background-image:url('<?php echo base_url(); ?>/assets/images/20252.jpg');" >
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
               <form id="form_action" role="form" action="<?php echo base_url(); ?>WebsiteController/edit_profile" method="post" enctype="multipart/form-data" autocomplete="off"> 
                 <div class="row" >   
                  <div class="form-group col-md-3">
                  <?php if( (isset($profile_image)) && ($profile_image != '') ) {  ?>
                  <img id="blah" class="rounded-circle " src="<?php  echo base_url();?>assets/images/profile/<?php echo $profile_image; ?>" alt="" height="150px" width="150px" />

                     <input type="hidden" name="old_image" value="<?php if(isset($profile_image)){ echo $profile_image; } ?>">

                  <?php }else{ ?>
                  <img id="blah" class="rounded-circle " src="<?php echo base_url();?>assets/images/profile/profile1.jpg" alt="" height="150px" width="150px" />
                <?php  }?>
                <br>

                   <!-- <input type="file" class="col" id="profile_image" name="profile_image" style="margin-top: 15px;" onchange="readURL(this);" /> -->
                   <div><input type='file' id="profile_image" name="profile_image" style="margin-top: 15px;" onchange="readURL(this);" ><label id="fileLabel">No Choosen file</label></div>

                  <!-- 
                  src="<?php if(isset($profile_image)){ echo base_url();?>assets/images/banner/<?php echo $profile_image; } ?>" -->
                   
                      <!--  <img id="blah"  class="rounded-circle" src="<?php  echo base_url();?>assets/images/profile1.jpg" alt="" height="150px" width="150px" /> -->
                   </div> 
                   <div class="form-group col-md-9">
                      <div class="row" >
                        <?php foreach ($user_list as $value) { ?>
                        <div class="form-group col-md-12">
                             <div class="row">
                              <div class="col-md-4"><label for="inputName" class="form-label">Full Name</label>&nbsp;<label style="color:red;">*</label></div>
                        
                                 <div class="col-md-8">
                                  <input type="text" class="form-control txtOnly"  name="fullname" id="fullname" value="<?php echo $value->user_name;  ?>"placeholder="Enter Full Name" required>

                                </div>
                               </div>
                          </div>
                         
                           <div class="form-group col-md-12">
                            <div class="row">
                              <div class="col-md-4"><label>Parent Name</label>&nbsp;<label style="color:red;">*</label></div>
                        
                         <div class="col-md-8"><input type="text" class="form-control txtOnly" name="parentname" id="parentname" value="<?php if(isset($parentname)){ echo $parentname; } ?>" placeholder="Enter Parent Name" required></div>
                       </div>
                      <!--   <input type="hidden" name="competition_id" id="competition_model_id" value="< ?php if(isset($competitionid)){ echo $competitionid; } ?>">
                   -->
                      </div>
                    
                          <div class="form-group col-md-12">
                             <div class="row">
                              <div class="col-md-4"><label for="inputName" class="form-label">BirthDate</label>&nbsp;<label style="color:red;">*</label></div>
                        
                                 <div class="col-md-8">
                                  <input type="date" class="form-control notext"  name="birthdate" id="birthdate" value="<?php if(isset($birthdate)){ echo $birthdate; } ?>" placeholder="Enter Birthdate" required>

                                </div>
                               </div>
                            </div>
                            <div class="form-group col-md-12">
                             <div class="row">
                              <div class="col-md-4"><label for="inputName" class="form-label">Gender</label>&nbsp;<label style="color:red;">*</label></div>
                        
                                 <div class="col-md-8">
                                  <?php
                                      if(isset($gender)){?>

                                      <input type="hidden" class="form-control title-case " name="" id="Gender" value="<?php if(isset($gender)){ echo $gender; } ?>" disabled="">
                                    <?php }?>  
                                  <select name="gender" id="gender"class="form-control" required="" >
                                    <option value="">Select Gender</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                  </select>
                                 </div>
                                </div>
                                
                              </div>
                              <div class="form-group col-md-12">
                             <div class="row">
                              <div class="col-md-4"><label for="inputName" class="form-label">Alternate Mobile No.</label>&nbsp;<label style="color:red;">*</label></div>
                        
                                 <div class="col-md-8">
                                  <input type="text" class="form-control notext"  name="alternatemobno" id="alternatemobno" value="<?php if(isset($alternatemobno)){ echo $alternatemobno; } ?>" minlength="10" maxlength="10" placeholder="Enter Alternate Mobile No." required>

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
                              <div class="col-md-4"><label for="inputName" class="form-label">School/College Name</label>&nbsp;<label style="color:red;">*</label></div>
                        
                                 <div class="col-md-8">
                                  <input type="text" class="form-control required title-case txtOnly" name="schoolcollegename" id="schoolcollegename" value="<?php if(isset($schoolcollegename)){ echo $schoolcollegename; } ?>" placeholder="Enter School/college Name"  required=""></div>
                                </div>
                                  </div>

                             <div class="form-group col-md-12">
                             <div class="row">
                              <div class="col-md-4"><label for="inputName" class="form-label">Standard</label>&nbsp;<label style="color:red;">*</label></div>
                        
                                 <div class="col-md-8">
                                   <?php
                                      if(isset($standard)){?>

                                      <input type="hidden" class="form-control title-case " name="" id="Standard" value="<?php if(isset($standard)){ echo $standard; } ?>" disabled="">
                                    <?php }?>  
                                  <select name="standard" id="standard"class="form-control" required="" >
                                  <option value="">Select Standard</option>
                                  <option value="1">1st</option>
                                  <option value="2">2nd</option>
                                  <option value="3">3rd</option>
                                  <option value="4">4th</option>
                                  <option value="5">5th</option>
                                  <option value="6">6th</option>
                                  <option value="7">7th</option>
                                  <option value="8">8th</option>
                                  <option value="9">9th</option>
                                  <option value="10">10th</option>
                                  <option value="11">11th</option>
                                  <option value="12">12th</option>
                                  <option value="13">Male(18+)</option>
                                  <option value="14">Female(18+)</option>
                                </select>
                                 </div>
                                </div>
                                
                              </div>
                             <div class="form-group col-md-12">
                             <div class="row">
                              <div class="col-md-4"><label for="inputName" class="form-label">State</label>&nbsp;<label style="color:red;">*</label></div>
                        
                                 <div class="col-md-8">
                                    <?php
                                      if(isset($stateid)){?>

                                      <input type="hidden" class="form-control title-case " name="" id="StateId" value="<?php if(isset($stateid)){ echo $stateid; } ?>" disabled="">
                                       <?php }?>  
                                
                                  <select name="stateid" id="stateid"class="form-control" required="" >
                                  <option value="">Select State</option>
                                    <?php foreach($state as $state)
                                     {
                                          echo '<option value="'. $state->stateid.'" '.$selected.'>'. $state->statename.'</option>';

                                               
                                      }
                                     ?>   
                                </select>
                                 </div>
                                </div>
                                
                              </div>
                              <div class="form-group col-md-12">
                               <div class="row">
                                <div class="col-md-4"><label for="inputName" class="form-label">City</label>&nbsp;<label style="color:red;">*</label></div>
                          
                                   <div class="col-md-8">
                                       <?php
                                      if(isset($cityid)){?>

                                      <input type="hidden" class="form-control title-case " name="" id="CityId" value="<?php if(isset($cityid)){ echo $cityid; } ?>" disabled="">
                                       <?php }?> 

                                
                                    <select name="cityid" id="cityid"class="form-control" required="" >
                                    <option value="">select</option>
                                
                                     <?php foreach($city as $city)
                                     {
                                          echo '<option value="'. $city->cityid.'" '.$selected.'>'. $city->cityname.'</option>';

                                               
                                      }
                                     ?> 
                                  
                                  </select>
                                   </div>
                                  </div>
                                
                              </div>
                              <div class="form-group col-md-12">
                               <div class="row">
                                <div class="col-md-4"><label for="inputName" class="form-label">District</label>&nbsp;<label style="color:red;">*</label></div>
                          
                                   <div class="col-md-8">
                                     <?php
                                      if(isset($districtid)){?>

                                      <input type="hidden" class="form-control title-case " name="" id="DistrictId" value="<?php if(isset($districtid)){ echo $districtid; } ?>" disabled="">
                                       <?php }?> 
                                    <select name="districtid" id="districtid"class="form-control" required="" >
                                    <option value="">District</option>
                                     <?php foreach($district as $district)
                                     {
                                          echo '<option value="'. $district->districtid.'" '.$selected.'>'. $district->districtname.'</option>';

                                               
                                      }
                                     ?>                                    
                                  </select>
                                   </div>
                                  </div>
                                
                              </div>
                                  
                                  
                               <div class="form-group col-md-12">
                             <div class="row">
                              <div class="col-md-4"><label for="inputName" class="form-label">Address</label>&nbsp;<label style="color:red;">*</label></div>
                        
                                 <div class="col-md-8">
                                    <textarea type="text" class="form-control required title-case" name="address" id="address" value="" placeholder="Enter Address" required="" ><?php if(isset($address)){ echo $address; } ?></textarea>
                                  </div></div>
                                  </div>
                                  
                            <div class="form-group col-md-12">
                             <div class="row">
                              <div class="col-md-4"><label for="inputName" class="form-label">Pincode</label>&nbsp;<label style="color:red;">*</label></div>
                        
                                 <div class="col-md-8">
                                 <!--  <?php
                                      if(isset($pincode)){?>

                                      <input type="text" class="form-control title-case " name="pincode" id="pincode" value="<?php if(isset($pincode)){ echo $pincode; } ?>" disabled="">
                                       <?php }?>   -->
                                     <input type="text" class="form-control" minlength="6" maxlength="6" name="pincode" id="pincode" value="<?php echo $value->user_pincode;  ?>" placeholder="Enter pincode" required>
                                    </div></div>
                                  </div>
                            <?php } ?>

                        </div>

                      </div>

                    </div>      
                    <div class="row " >   
                   <div class="form-group col-md-5"></div>
                   <div class="form-group col-md-2">
                     <!-- <center><div class="button11" id="button-6">
                       <div id="spin"></div>
                       <a href="#" id="btn_update" type="submit" >Update</a>
                      </div></center> -->
                   <button id="btn_update" style="padding-left: 20px; padding-right: 20px;" type="submit" class="btn btn-primary">Edit </button>
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
                var a = document.getElementById('profile_image');
              if(a.value == "")
              {
                  fileLabel.innerHTML = "Choose file";
              }
              else
              {
                  var theSplit = a.value.split('\\');
                  fileLabel.innerHTML = theSplit[theSplit.length-1];
              }
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
   <script>
$(document).ready(function(){


 var gender = $('#Gender').val();
 $("#gender option[value='"+gender+"']").attr("selected","selected");

 var standard = $('#Standard').val();
 $("#standard option[value='"+standard+"']").attr("selected","selected");

 var state = $('#StateId').val();
 $("#stateid option[value='"+state+"']").attr("selected","selected");

 var city = $('#CityId').val();
 $("#cityid option[value='"+city+"']").attr("selected","selected");

 var district = $('#DistrictId').val();
 $("#districtid option[value='"+district+"']").attr("selected","selected");
 
 $('#stateid').change(function(){
  // alert('hii');

  var stateid = $('#stateid').val();
  // alert(stateid);

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
<!-- <script type="text/javascript">
  window.pressed = function(){
    var a = document.getElementById('profile_image');
    if(a.value == "")
    {
        fileLabel.innerHTML = "Choose file";
    }
    else
    {
        var theSplit = a.value.split('\\');
        fileLabel.innerHTML = theSplit[theSplit.length-1];
    }
};
</script> -->
 
</body>
</html>
