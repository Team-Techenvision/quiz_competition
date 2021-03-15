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
<div class="wrapper" id="msg_display" >
  <!-- Content Wrapper. Contains page content -->
  <div class=" profilewrapper" style="background-image:url('<?php echo base_url(); ?>/assets/images/20252.jpg');"  >
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
             <!--  < ?php if($this->session->flashdata('message')){?>
                <div class="alert alert-danger">      
                  < ?php echo $this->session->flashdata('message')?>
                </div>
              < ?php } ?> -->
            <div class="card-header " >
             <p class="alert alert-danger msg mb-0"  id="msg" style="font-size:14px;  color: red;"></p>
              <h4 class="card-title text-center" style="color: #3156bd;"><!-- <i class="fa fa-list"></i>  -->Profile Information</h4>
             <!--  <div class="card-tools col-md-2 " >
                <a href="add_profile" class="btn btn-sm btn-block btn-primary "  >Add Participation</a>
              </div> -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
               <form id="form_update" role="form" action="<?php echo base_url(); ?>WebsiteController/edit_profile" method="post" enctype="multipart/form-data" autocomplete="off"> 
                 <div class="row" >   
                  <div class="form-group col-md-3">
                  <?php if( (isset($profile_image)) && ($profile_image != '') ) {  ?>
                  <img id="blah" class="rounded-circle " src="<?php  echo base_url();?>assets/images/profile/<?php echo $profile_image; ?>" alt="" height="150px" width="150px" />

                     <input type="hidden" name="old_image" value="<?php if(isset($profile_image)){ echo $profile_image; } ?>">

                  <?php }else{ ?>
                  <img id="blah" class="rounded-circle " src="<?php echo base_url();?>assets/images/profile/profile1.jpg" alt="" height="150px" width="150px" />
                <?php  }?>
                <br>

                  <!--  <input type="file" class="col" id="profile_image" name="profile_image" style="margin-top: 15px;" onchange="readURL(this);" /> -->
                   <div><input class="" type='file' id="profile_image" name="profile_image" style="margin-top: 15px; margin-left: 20px;" onchange="readURL(this);"  ><label id="fileLabel" class="col text-left">No Choosen file</label></div>

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
                                  <?php foreach ($profile_info as $value) {
                                    $check = $value->check_one;

                                    if($check==0){ ?>

                                    <input type="date" class="form-control notext"  name="birthdate" id="birthdate" value="<?php if(isset($birthdate)){ echo $birthdate; } ?>" placeholder="Enter Birthdate" required>

                                   <?php  }else{ ?>
                                     
                                     <input type="date" class="form-control notext"  name="birthdate" id="birthdate" value="<?php if(isset($birthdate)){ echo $birthdate; } ?>" placeholder="Enter Birthdate" disabled>


                                   <?php } } ?>


                                  


                                   

                                </div>
                               </div>
                            </div>
                            <div class="form-group col-md-12">
                             <div class="row">
                              <div class="col-md-4"><label for="inputName" class="form-label">Gender</label>&nbsp;<label style="color:red;">*</label></div>
                        
                                 <div class="col-md-8">
                                   <?php foreach ($profile_info as $value) {
                                    $check = $value->check_one;

                                    if($check==0){ ?>

                                     <?php
                                      if(isset($gender)){?>

                                      <input type="hidden" class="form-control title-case " name="" id="Gender" value="<?php if(isset($gender)){ echo $gender; } ?>" disabled="">
                                    <?php }?>  
                                  <select name="gender" id="gender"class="form-control" required="" >
                                    <option value="">Select Gender</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                  </select>

                                   <?php  }else{ ?>
                                     
                                      <?php
                                      if(isset($gender)){?>

                                      <input type="hidden" class="form-control title-case " name="" id="Gender" value="<?php if(isset($gender)){ echo $gender; } ?>" disabled="">
                                    <?php }?>  
                                  <select name="gender" id="gender"class="form-control" disabled="">
                                    <option value="">Select Gender</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                  </select>


                                   <?php } } ?>

                                 
                                 </div>
                                </div>
                                
                              </div>
                              <div class="form-group col-md-12">
                             <div class="row">
                              <div class="col-md-4"><label for="inputName" class="form-label">Alternate Mobile No.</label>&nbsp;<label style="color:red;">*</label></div>
                        
                                 <div class="col-md-8">
                                  <input type="text" min="0" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" class="form-control notext"  name="alternatemobno" id="alternatemobno" value="<?php if(isset($alternatemobno)){ echo $alternatemobno; } ?>" minlength="10" maxlength="10" placeholder="Enter Alternate Mobile No." required>

                                    <p class="mobileval mb-0" id="mobileval" style="font-size:14px;  color: red;"></p>

                                </div>
                               </div>
                            </div>

                                   <div class="form-group col-md-12">
                             <div class="row">
                              <div class="col-md-4"><label for="inputName" class="form-label">Email Address</label>&nbsp;<label style="color:red;">*</label></div>
                        
                                 <div class="col-md-8">
                                    <input type="email" class="form-control" name="emailid" id="emailid" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="<?php echo $value->user_email;  ?>" placeholder="Enter Email Address" disabled>
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
                                    <?php foreach ($profile_info as $value) {
                                    $check = $value->check_one;

                                    if($check==0){ ?>

                                   <?php
                                      if(isset($standard)){?>

                                      <input type="hidden" class="form-control title-case " name="" id="Standard" value="<?php if(isset($standard)){ echo $standard; } ?>" disabled="">
                                    <?php }?>  
                                  <select name="standard" id="standard"class="form-control" required="" >
                                  <option value="">Select Standard</option>
                                  <option value="1">Nursary</option>
                                  <option value="2">KG-I</option>
                                  <option value="3">KG-II</option>
                                  <option value="4">KG-III</option>
                                  <option value="5">1st</option>
                                  <option value="6">2nd</option>
                                  <option value="7">3rd</option>
                                  <option value="8">4th</option>
                                  <option value="9">5th</option>
                                  <option value="10">6th</option>
                                  <option value="11">7th</option>
                                  <option value="12">8th</option>
                                  <option value="13">9th</option>
                                 
                                  <option value="14">Male(18+)</option>
                                  <option value="15">Female(18+)</option>
                                </select>

                                   <?php  }else{ ?>
                                     
                                    <?php
                                      if(isset($standard)){?>

                                      <input type="hidden" class="form-control title-case " name="" id="Standard" value="<?php if(isset($standard)){ echo $standard; } ?>" disabled="">
                                    <?php }?>  
                                  <select name="standard" id="standard"class="form-control" disabled="" >
                                  <option value="">Select Standard</option>
                                  <option value="1">Nursary</option>
                                  <option value="2">KG-I</option>
                                  <option value="3">KG-II</option>
                                  <option value="4">KG-III</option>
                                  <option value="5">1st</option>
                                  <option value="6">2nd</option>
                                  <option value="7">3rd</option>
                                  <option value="8">4th</option>
                                  <option value="9">5th</option>
                                  <option value="10">6th</option>
                                  <option value="11">7th</option>
                                  <option value="12">8th</option>
                                  <option value="13">9th</option>
                                 
                                  <option value="14">Male(18+)</option>
                                  <option value="15">Female(18+)</option>
                                </select>


                                   <?php } } ?>

                                   
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
                                <div class="col-md-4"><label for="inputName" class="form-label">District</label>&nbsp;<label style="color:red;">*</label></div>
                          
                                   <div class="col-md-8">
                                    

                                      <input type="text" class="form-control title-case txtOnly" name="districtid" id="districtid" value="<?php if(isset($districtid)){ echo $districtid; } ?>" placeholder="Enter District">
                                    
                                   <!--  <select name="districtid" id="districtid"class="form-control" required="" >
                                    <option value="">select District</option>
                                     < ?php foreach($district as $district)
                                     {
                                          echo '<option value="'. $district->districtid.'" '.$selected.'>'. $district->districtname.'</option>';

                                               
                                      }
                                     ?>                                    
                                  </select> -->
                                   </div>
                                  </div>
                                
                              </div>
                              <div class="form-group col-md-12">
                               <div class="row">
                                <div class="col-md-4"><label for="inputName" class="form-label">City</label>&nbsp;<label style="color:red;">*</label></div>
                          
                                   <div class="col-md-8">
                                     

                                      <input type="text" class="form-control title-case txtOnly" name="cityid" id="cityid" value="<?php if(isset($cityid)){ echo $cityid; } ?>" placeholder="Enter City">
                                     

                                
                                    <!-- <select name="cityid" id="cityid"class="form-control" required="" >
                                    <option value="">select city</option>
                                
                                     < ?php foreach($city as $city)
                                     {
                                          echo '<option value="'. $city->cityid.'" '.$selected.'>'. $city->cityname.'</option>';

                                               
                                      }
                                     ?> 
                                  
                                  </select> -->
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
                                     <input type="text" min="0" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" class="form-control" minlength="6" maxlength="6" name="pincode" id="pincode" value="<?php echo $value->user_pincode;  ?>" placeholder="Enter pincode" disabled >
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
                   <button id="btn_update" style="padding-left: 20px; padding-right: 20px;" type="submit" class="btn btn-primary btnUpdate">Edit </button>
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
  <?php if($this->session->flashdata('mobile_error')){ ?>
    $(document).ready(function(){
      toastr.error('Mobile Number is Already Exists');
    });
  <?php } ?>
  // < ?php if($this->session->flashdata('birthdate_error')){ ?>
  //   $(document).ready(function(){
  //     toastr.error('Please Enter Correct Birthdate, Gender and Standard.');
  //   });
  // < ?php } ?>


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

 // alert("hii");

 var gender = $('#Gender').val();
 $("#gender option[value='"+gender+"']").attr("selected","selected");

 var standard = $('#Standard').val();
 $("#standard option[value='"+standard+"']").attr("selected","selected");

 var state = $('#StateId').val();
 $("#stateid option[value='"+state+"']").attr("selected","selected");

 
});
</script>

<script type="text/javascript">
  $(function(){

    // var t = new Date(currentdate.setMonth(currentdate.getMonth()-3));

    var dtToday = new Date();

    // alert(t);
    
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear() - 3;


    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var maxDate = year + '-' + month + '-' + day;
    // alert(maxDate);
    $('#birthdate').attr('max', maxDate);
});
</script> 
 
<!-- For mobile no validation if enter alternate number is user registration mobile no -->
 <script>
 
   $('#alternatemobno').on('change',function(){
    // alert("hii");

     var mobile = $('#alternatemobno').val();
     // alert(mobile);
    
   
      $.ajax({
           url:"<?php echo base_url(); ?>WebsiteController/check_user_mobile",
           method:"POST",
           data:{alternatemobno:mobile},

           success:function(data)
            {   

               // alert(data);
               // console.log(data);
                 if(data == "true"){

                   $('.mobileval').hide();

                 }else{
                // alert(data);
                 $('.mobileval').html(data);
                 $('#alternatemobno').val('');
                }               
           }
         });
       // e.preventdefault();
  });

</script>


<!-- Validation For standard(Male 18+ , female 18+ ), gender and birthdate -->
 <script>
 $(document).ready(function(){
    $('.msg').hide();

  $('#form_update').on('submit', function(e){
        e.preventDefault();
   // $('.btnUpdate').click(function(){
    // alert("hii");


     var stand = $('#standard').val();
     var gender = $('#gender').val();
     var birthdate = $('#birthdate').val();
     // alert(stand);
     // alert(gender);
     // alert(birthdate);
    
   
      $.ajax({
           url:"<?php echo base_url(); ?>WebsiteController/check_userdata_profile",
           method:"POST",
           data:{standard:stand,gender:gender,birthdate:birthdate},

           success:function(data)
            {   

               // alert(data);
               // console.log(data);
                 if(data == "correct"){
                     // alert(data);
                   $('.msg').hide();
                   // $("#form_update").submit();
                   document.getElementById("form_update").submit();
                   // window.location = "< ?php echo base_url(); ?>WebsiteController";

                 }else{

                // alert(data);
                // window.location = "< ?php echo base_url(); ?>WebsiteController/edit_profile";
                 $('.msg').show();
                 $('.msg').html(data);
                 $([document.documentElement, document.body]).animate({
                      scrollTop: $("#msg_display").offset().top
                  }, 500);
                  // $('#msg').focus();
                 // $('#alternatemobno').val('');
                }               
           }
         });
       // e.preventdefault();
  });
  });

</script>

 <script>
   

  $('#btn_update').on('change',function(){
    // alert("hii");

     var mobile = $('#alternatemobno').val();
     // alert(mobile);
    
   
      $.ajax({
           url:"<?php echo base_url(); ?>WebsiteController/edit_profile",
           method:"POST",
           data:{alternatemobno:mobile},

           success:function(data)
            {   

               // alert(data);
               // console.log(data);
                 if(data == "true"){

                   $('.mobileval').hide();

                 }else{
                // alert(data);
                 $('.mobileval').html(data);
                 $('#alternatemobno').val('');
                }               
           }
         });
       // e.preventdefault();
  });

</script>

</body>
</html>
