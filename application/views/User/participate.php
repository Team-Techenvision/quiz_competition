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
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="form_action" role="form" action="" method="post">
               <div class="card-body row">
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
                  <input type="text" class="form-control required title-case text txtOnly" name="schoolcollegename" id="schoolcollegename" value="<?php if(isset($schoolcollegename)){ echo $schoolcollegename; } ?>" placeholder="Enter School/college Name" required >
                  </div>
                  
                  
                  <div class="form-group col-md-9">
                    <textarea type="text" class="form-control required title-case text" name="address" id="address" value="" placeholder="Enter Address" required><?php if(isset($address)){ echo $address; } ?></textarea>
                  </div>
                    <div class="form-group col-md-3">

                  <?php
                      if(isset($pincode)){?>

                      <input type="text" class="form-control required title-case text" name="pincode" id="pincode" value="<?php if(isset($pincode)){ echo $pincode; } ?>" disabled="">
                       <?php }?>  
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
                <div class="card-footer">
                  <?php if(isset($update)){ ?>
                    <button id="btn_update" type="submit" class="btn btn-primary">Update </button>
                  <?php } else{ ?>
                    <button id="btn_save" type="submit" class="btn btn-success px-4">Add</button>
                  <?php } ?>
                  <a href="<?php echo base_url() ?>User/dashboard" class="btn btn-default ml-4">Cancel</a>
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
$(document).ready(function(){
 $('#countryid').change(function(){
  var countryid = $('#countryid').val();
  if(countryid != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>User/fetch_state1",
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
    url:"<?php echo base_url(); ?>User/fetch_city1",
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
    url:"<?php echo base_url(); ?>User/fetch_district1",
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


</script>

</body>
</html>

