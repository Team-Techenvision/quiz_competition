  

<!DOCTYPE html>
<html>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 text-center mt-2">
            <h1>Participant Profile Information</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-8 offset-md-2">
            <!-- general form elements -->
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Add Participant Profile</h3>
                  <div class="card-tools col-md-3 " >
                <a href="<?php echo base_url(); ?>User/participate_list" class="btn btn-sm btn-block btn-primary">Participate List</a>
              </div>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             <!--  <form id="form_action" role="form" action="<?php echo base_url(); ?>User/search_participateinfo" method="post">
              <div class="card-body row">
                
                 <div class="form-group col-md-4">
                      <label>Mobile No <span style="color: red;">*</span></label>
                      <input type="text" min="0" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57"  class="form-control " name="user_mobile" id="user_mobile" maxlength="10" minlength="10" value="<?php if(isset($user_mobile)){ echo $user_mobile; } ?>" placeholder="Enter Mobile No" >
                  </div>
                  <div class="form-group col-md-2">
                  <button id="btn_serach" type="search" style="margin-top: 32px;" class="btn btn-primary">Search </button>
                  </div>
               
                </div>  
              </form> -->
              <form id="form_action" role="form" action="" method="post">
               <div class="card-body row">

               
                <!--  <?php if(isset($profile_image)) {  ?>
                  <div class="form-group col-md-12">
                    <label>Profile Image </label>
                   
                  <img id="blah" class="rounded-circle " src="<?php  echo base_url();?>assets/images/profile/<?php echo $profile_image; ?>" alt="" height="150px" width="150px" />

                   <input type="hidden" name="old_image" value="<?php if(isset($profile_image)){ echo $profile_image; } ?>"> -->

                  
                <!--   </div>
                  <?php }?> -->
                    <input type="hidden" class="form-control txtOnly" name="userprofileid" id="userprofileid" value="<?php if(isset($userprofileid)){ echo $userprofileid; } ?>" >

                     <input type="hidden" class="form-control txtOnly" name="user_id" id="user_id" value="<?php if(isset($user_id)){ echo $user_id; } ?>" >
                
                   <div class="form-group col-md-12">
                    
                    <label>Full Name <span style="color: red;">*</span></label>
                    <input type="text" class="form-control txtOnly" name="fullname" id="fullname" value="<?php if(isset($fullname)){ echo $fullname; } ?>" placeholder="Enter Full Name" required="">
              
                  </div>
               
                  <div class="form-group col-md-12">
                    <label>Parent Name <span style="color: red;">*</span></label>
                    <input type="text" class="form-control txtOnly" name="parentname" id="parentname" value="<?php if(isset($parentname)){ echo $parentname; } ?>" placeholder="Enter Parent Name" required="">
                  </div>
                   <div class="form-group col-md-12">
                    <label>Email Address <span style="color: red;">*</span></label>
                    <input type="email" class="form-control" name="emailid" id="emailid" value="<?php if(isset($emailid)){ echo $emailid; } ?>" placeholder="Enter Email Address" required="">
                  </div>
                   <div class="form-group col-md-4">
                    <label>BirthDate <span style="color: red;">*</span></label>
                    <input type="date" class="form-control notext" name="birthdate" id="birthdate" value="<?php if(isset($birthdate)){ echo $birthdate; } ?>" placeholder="Enter Birthdate" required="">
                  </div>

                    <div class="form-group col-md-4">
                    <label>Gender <span style="color: red;">*</span></label>
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
                     <div class="form-group col-md-4">
                    <label>Alternative Mobile No. <span style="color: red;">*</span></label>
                      <input type="text" class="form-control notext"  name="alternatemobno" id="alternatemobno" value="<?php if(isset($alternatemobno)){ echo $alternatemobno; } ?>" minlength="10" maxlength="10" placeholder="Enter Alternate Mobile No." required>
                  </div>
                 
                   <div class="form-group col-md-6">
                   <label>Competition Title <span style="color: red;">*</span></label>
                  <?php
                      if(isset($competitionid)){
                        ?>

                      <input type="hidden" class="form-control required title-case text" name="competitionid" id="competitionid" value="<?php if(isset($competitionid)){ echo $competitionid; } ?>" disabled="">
                       <?php }?>  
                      <select name="competitionid" id="compet"class="form-control" required="">
                    <option value="">Select Competition</option>
                   <?php foreach($competition as $competition)
                     {
                          echo '<option value="'. $competition->competitionid.'" '.$selected.'>'. $competition->title.'</option>';

                               
                      }
                     ?>   
                    
                  </select>
                   <p class="compval mb-0" id="compval" style="font-size:14px;  color: red;"></p>
                  </div>

                   <div class="form-group col-md-6">
                    <label>Standard <span style="color: red;">*</span></label>
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
                  </div>
                  <div class="form-group col-md-12">
                    <label>School/College Name <span style="color: red;">*</span></label>
                  <input type="text" class="form-control required title-case text txtOnly" name="schoolcollegename" id="schoolcollegename" value="<?php if(isset($schoolcollegename)){ echo $schoolcollegename; } ?>" placeholder="Enter School/college Name" required >
                  </div>
                  
                  
                  <div class="form-group col-md-12">
                    <label>Address <span style="color: red;">*</span></label>
                    <textarea type="text" class="form-control required title-case text" name="address" id="address" value="" placeholder="Enter Address" required=""><?php if(isset($address)){ echo $address; } ?></textarea>
                  </div>
                  <div class="form-group col-md-6">
                    <label>State <span style="color: red;">*</span></label>
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
                   <div class="form-group col-md-6">
                    <label>District <span style="color: red;">*</span></label>
                         
                         <input type="text" class="form-control title-case " name="districtid" id="districtid" value="<?php if(isset($districtid)){ echo $districtid; } ?>" required="">
                                      
                                   <!--  <select name="districtid" id="districtid"class="form-control" required="" >
                                    <option value="">District</option>
                                     < ?php foreach($district as $district)
                                     {
                                          echo '<option value="'. $district->districtid.'" '.$selected.'>'. $district->districtname.'</option>';

                                               
                                      }
                                     ?>                                    
                                  </select> -->
                  </div>
                   
                     <div class="form-group col-md-6">
                    <label>City <span style="color: red;">*</span></label>
                        
                        <input type="text" class="form-control title-case " name="cityid" id="cityid" value="<?php if(isset($cityid)){ echo $cityid; } ?>" required="">
                                     

                                
                                   <!--  <select name="cityid" id="cityid"class="form-control" required="" >
                                    <option value="">select</option>
                                
                                     < ?php foreach($city as $city)
                                     {
                                          echo '<option value="'. $city->cityid.'" '.$selected.'>'. $city->cityname.'</option>';

                                               
                                      }
                                     ?> 
                                  
                                  </select> -->
                  </div>
                  
                    <div class="form-group col-md-6">
                       
                      <label>Pincode <span style="color: red;">*</span></label>
                       <input type="text" min="0" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57"  class="form-control" minlength="6" maxlength="6" name="pincode" id="pincode" value="<?php if(isset($pincode)){ echo $pincode; } ?>" placeholder="Enter pincode" required>
                      
                  </div>
              
                 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <?php if(isset($update)){ ?>
                    <button id="btn_update" type="submit" class="btn btn-primary">Update </button>
                  <?php } else{ ?>
                    <button id="btn_save" type="submit" class="btn btn-success px-4">Add</button>
                  <?php } ?>
                   <a href="" onclick="this.form.reset();" class="btn btn-default ml-4">Cancel</a>
                </div>
              </form>
            </div>

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
  </div>
  <br>
  <script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script> 

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  

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
    <script>
$(document).ready(function(){

 // $('#btn_serach').click(function(){
  // alert('hii');competitionid

 var gender = $('#Gender').val();
 $("#gender option[value='"+gender+"']").attr("selected","selected");

 var competitionid = $('#competitionid').val();
 $("#competitionid option[value='"+competitionid+"']").attr("selected","selected");

 var standard = $('#Standard').val();
 $("#standard option[value='"+standard+"']").attr("selected","selected");

 var state = $('#StateId').val();
 $("#stateid option[value='"+state+"']").attr("selected","selected");


});
</script>
<script>
   

  $('#compet').on('change',function(){

    // alert("hii");

     var comp = $('#compet').val();
     var standard = $('#standard').val();
     var gender = $('#gender').val();
     var birthdate = $('#birthdate').val();
     // alert(birthdate);
    
   
      $.ajax({
           url:"<?php echo base_url(); ?>User/check_competition_validation",
           method:"POST",
           data:{competitionid:comp,standard:standard,gender:gender,birthdate:birthdate},

           success:function(data)
            {   

               // alert(data);
               // console.log(data);
                 if(data == "true"){

                   $('.compval').hide();

                
                 }
                 else{
                // alert(data);
                 $('.compval').html(data);
                 $('#compet').val('');
                }               
           }
         });
       // e.preventdefault();
  });

</script>

</body>
</html>

