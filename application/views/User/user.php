<?php $page = 'user'; 
// echo $page; die();
?>
<style type="text/css">
   .field_icon {
        float: right;
        margin-right: 14px;
        margin-top: -27px;
        position: relative;
        z-index: 2;
        color: black;
    }
</style>
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
            <h1>User Information</h1>
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
                <h3 class="card-title">Add User</h3>
                <div class="card-tools col-md-2 " >
                <a href="<?php echo base_url(); ?>User/user_list" class="btn btn-sm btn-block btn-primary">User List</a>
              </div>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="form_action" role="form" action="" method="post">
                <div class="card-body row">
                  <div class="form-group col-md-12">
                    <label>Name<span style="color: red;">*</span></label>
                    <input type="text" class="form-control required title-case text txtOnly" name="user_name" id="user_name" value="<?php if(isset($user_name)){ echo $user_name; } ?>" placeholder="Enter Name of User" required="required">
                  </div>
                   <div class="form-group col-md-12">
                    <label>Address<span style="color: red;">*</span></label>

                    <textarea type="text" class="form-control required title-case text " name="user_address" id="user_address" value="" placeholder="Enter Address of User" required ><?php if(isset($user_address)){ echo $user_address; } ?></textarea>
                  </div>
                     <div class="form-group col-md-12">
                    <label>Pincode<span style="color: red;">*</span></label>
                    <input type="text" class="form-control required title-case text " minlength="6" maxlength="6" name="user_pincode" id="user_pincode" value="<?php if(isset($user_pincode)){ echo $user_pincode; } ?>" placeholder="Enter Pincode" required>
                  </div>
                  <div class="form-group col-md-12">
                    <label>City<span style="color: red;">*</span></label>

                    <input type="text" class="form-control txtOnly" name="user_city" id="user_city" value="<?php if(isset($user_city)){ echo $user_city; } ?>" placeholder="Enter City" required>
                  </div>
                  <div class="form-group col-md-12">
                    <label>Mobile No<span style="color: red;">*</span></label>

                    <input type="text" id="user_mobile" name="user_mobile" value="<?php if(isset($user_mobile)){ echo $user_mobile; } ?>" class="form-control notext" placeholder="Enter Mobile No." minlength="10" maxlength="10" required>
                 
                  </div>
                  <div class="form-group col-md-12">
                    <label>Email Address<span style="color: red;">*</span></label>

                    <input type="email" class="form-control" name="user_email" id="user_email" value="<?php if(isset($user_email)){ echo $user_email; } ?>" placeholder="Enter Email Address" required>
                  </div>
                  <div class="form-group col-md-12">
                    <label>Password<span style="color: red;">*</span></label>

                   <!--  <input type="password" class="form-control " name="user_password" id="user_password" value="<?php if(isset($user_password)){ echo $user_password; } ?>" placeholder="Enter Password" required> -->

                      <input input type="password" id="user_password" name="user_password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" value="<?php if(isset($user_password)){ echo $user_password; } ?>" placeholder="Enter Password" required="" /> <span style="margin-left: -30px;" toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password"></span>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <?php if(isset($update)){ ?>
                    <button id="btn_update" type="submit" class="btn btn-primary">Update </button>
                  <?php } else{ ?>
                    <button id="btn_save" type="submit" class="btn btn-success px-4">Add</button>
                  <?php } ?>
                  <a href="<?php echo base_url() ?>User/user_list" class="btn btn-default ml-4">Cancel</a>
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
  <script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->

<script type="text/javascript">
// Check Mobile Duplication..
  var user_mobile1 = $('#user_mobile').val();
  $('#user_mobile').on('change',function(){
    var user_mobile = $(this).val();
    $.ajax({
      url:'<?php echo base_url(); ?>User/check_duplication',
      type: 'POST',
      data: {"column_name":"user_mobile",
             "column_val":user_mobile,
             "table_name":"user"},
      context: this,
      success: function(result){
        if(result > 0){
          $('#user_mobile').val(user_mobile1);
          toastr.error(user_mobile+' Mobile No Exist.'); 
        }
        
      }
    });
  });

// Check Email Duplication..
  var user_email1 = $('#mobile').val();
  $('#user_email').on('change',function(){
    var user_email = $(this).val();
    $.ajax({
      url:'<?php echo base_url(); ?>User/check_duplication',
      type: 'POST',
      data: {"column_name":"user_email",
             "column_val":user_email,
             "table_name":"user"},
      context: this,
      success: function(result){
        if(result > 0){
          $('#user_email').val(user_email1);
          toastr.error(user_email+' Email Id Exist.');
        }
      }
    });
  });
</script>

<script type="text/javascript">
  $(document).on('click', '.toggle-password', function() {

    $(this).toggleClass("fa-eye fa-eye-slash");
    
    var input = $("#user_password");
    input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
});
</script>

</body>
</html>
