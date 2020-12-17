<!DOCTYPE html>
<html>
<style type="text/css">
  .t:hover{
        
  text-decoration: underline !important;
    }
</style>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 text-center mt-2">
            <h2>Registration Information</h2>
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
                <h4 class="card-title">Add Registration</h4>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="form_action" role="form" action="" method="post">
                <div class="card-body row">
                  <div class="form-group col-md-12">
                    <input type="text" class="form-control txtOnly" name="user_name" id="user_name" value="<?php if(isset($user_name)){ echo $user_name; } ?>" placeholder="Enter Participant Name" required>
                  </div>
                   
                   <div class="form-group col-md-4">
                    <input type="number" class="form-control " name="user_pincode" id="user_pincode" value="<?php if(isset($user_pincode)){ echo $user_pincode; } ?>" placeholder="Enter Pincode" required>
                  </div>
                   <div class="form-group col-md-4">
                    <input type="number" class="form-control " name="user_mobile" id="user_mobile" maxlength="10" value="<?php if(isset($user_mobile)){ echo $user_mobile; } ?>" placeholder="Enter Whatsapp No." required>
                  </div>
                  <div class="form-group form-check col-md-12">
                  <label class="form-check-label " style="margin-left: 20px;">
                    <input class="form-check-input title-case " style ="margin-top: 10px;" type="checkbox" name="remember" required> I agree <label class="text-primary t">Data Protection Policy</label> 
                  </label>
                </div>
                <div class="form-group col-md-12">
                  <label >Already have account  &nbsp; <a class="text-primary t" href="<?php echo base_url(); ?>WebsiteController/login">login now</a></label>
                  </div>
                
                </div>                           
                <!-- /.card-body -->
                <div class="card-footer">
                  <?php if(isset($update)){ ?>
                    <button id="btn_update" type="submit" class="btn btn-primary">Update </button>
                  <?php } else{ ?>
                    <button id="btn_save" type="submit" class="btn btn-success px-4">Submit</button>
                  <?php } ?>
                  <a href="" class="btn btn-default ml-4"  onclick="this.form.reset();">Cancel</a>
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
     <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> 

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
  <script>
var user_mobile21 = $('#user_mobile').val();
  $('#user_mobile').on('change',function(){
    var user_mobile = $(this).val();
    $.ajax({
      url:'<?php echo base_url(); ?>WebsiteController/check_duplication',
      type: 'POST',
      data: {"column_name":"user_mobile",
             "column_val":user_mobile,
             "table_name":"user"},
      context: this,
      success: function(result){
        // alert(result);
        if(result > 0){
          $('#user_mobile').val(user_mobile21);
          // toastr.error(user_mobile2+' Mobile No Exist.');
          alert(user_mobile+' Mobile Number Exist.');
        }
      }
    });
  });

</script>
</body>
</html>
