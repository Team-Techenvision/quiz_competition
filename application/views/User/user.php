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
    .error{
      color: red;
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
                <?php if(isset($update)){ ?>

                <h3 class="card-title">Edit User</h3>

                <?php }else{ ?>
                <h3 class="card-title">Add User</h3>
                <?php } ?>
                <div class="card-tools col-md-2 " >
                <a href="<?php echo base_url(); ?>User/user_list" class="btn btn-sm btn-block btn-primary">User List</a>
              </div>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="form_action" name="user_form1" role="form" action="" method="post">
                <div class="card-body row">
                  <div class="form-group col-md-12">
                    <label>Name<span style="color: red;">*</span></label>
                    <input type="text" class="form-control required title-case text txtOnly"  onkeypress="return blockSpecialChar(event)" name="user_name" id="user_name" value="<?php if(isset($user_name)){ echo $user_name; } ?>" placeholder="Enter Name" required>
                  </div>
                   <div class="form-group col-md-12" hidden>
                    <label>Address<span style="color: red;">*</span></label>

                    <textarea type="text" class="form-control required title-case text " name="user_address" id="user_address"  placeholder="Enter Address"  ><?php if(isset($user_address)){ echo $user_address; } ?></textarea>
                  </div>
                     <div class="form-group col-md-12">
                    <label>Pincode<span style="color: red;">*</span></label>
                    <input type="text" min="0" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" class="form-control required title-case text " minlength="6" maxlength="6" name="user_pincode" id="user_pincode" value="<?php if(isset($user_pincode)){ echo $user_pincode; } ?>" placeholder="Enter Pincode" required>
                  </div>
                  <div class="form-group col-md-12" hidden>
                    <label>City<span style="color: red;">*</span></label>

                    <input type="text" class="form-control required txtOnly" name="user_city" id="user_city" value="<?php if(isset($user_city)){ echo $user_city; } ?>" placeholder="Enter City" >
                  </div>
                  <div class="form-group col-md-12">
                    <label>Mobile No<span style="color: red;">*</span></label>

                    <input type="text"  min="0" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57"  id="user_mobile" name="user_mobile" value="<?php if(isset($user_mobile)){ echo $user_mobile; } ?>" class="form-control required notext" placeholder="Enter Mobile No." minlength="10" maxlength="10" required>
                 
                  </div>
                  <div class="form-group col-md-12">
                    <label>Email Address<span style="color: red;">*</span></label>

                    <input type="email" class="form-control" name="user_email" id="user_email" value="<?php if(isset($user_email)){ echo $user_email; } ?>" placeholder="Enter Email Address" required>
                  </div>
                  <div class="form-group col-md-12">
                    <label>Password<span style="color: red;">*</span></label>

                   <!--  <input type="password" class="form-control " name="user_password" id="user_password" value="<?php if(isset($user_password)){ echo $user_password; } ?>" placeholder="Enter Password" required> -->

                      <input input type="password" id="user_password" name="user_password" class="form-control required"  minlength="8" value="<?php if(isset($user_password)){ echo $user_password; } ?>" placeholder="Enter Password" required="" /> <span style="margin-left: -30px;" toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password"></span>

                     <p  style="color: blue;" class="ml-2 pl-1 border border-dark mt-2">Note: Password must contain uppercase, lowercase letters, special symbol, and number with a minimum of 8 characters.</p>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <?php if(isset($update)){ ?>
                    <button id="btn_update" type="submit" class="btn btn-primary">Update </button>
                  <?php } else{ ?>
                    <button id="btn_save" type="submit" class="btn btn-success px-4">Add</button>
                  <?php } ?>
                <a href="<?php echo base_url(); ?>User/user_list" onclick="this.form.reset();" class="btn btn-default ml-4">Cancel</a>
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

  <!-- <script src="https://code.jquery.com/jquery-2.1.4.js"></script> -->
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
<!-- <script src="trunk/dev/validation.js"></script> -->
  

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
  var user_email1 = $('#user_email').val();
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
  // // Check Email Duplication..
  // var user_email1 = $('#user_email').val();
  // $('#user_email').on('change',function(){
  //   var customer_email = $(this).val();
  //   $.ajax({
  //     url:'< ?php echo base_url(); ?>User/check_duplication',
  //     type: 'POST',
  //     data: {"column_name":"customer_email",
  //            "column_val":customer_email,
  //            "table_name":"customer_information"},
  //     context: this,
  //     success: function(result){
  //       if(result > 0){
  //         $('#user_email').val(user_email1);
  //         toastr.error(customer_email+' Email Id Exist.');
  //       }
  //     }
  //   });
  // });
</script>

<script type="text/javascript">
  $(document).on('click', '.toggle-password', function() {

    $(this).toggleClass("fa-eye fa-eye-slash");
    
    var input = $("#user_password");
    input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
});
</script>

 <script type="text/javascript">
 
  // Wait for the DOM to be ready
$(function() {



  jQuery.validator.addMethod("validate_email", function(value, element) {

    if (/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(value)) {
        return true;
    } else {
        return false;
    }
});

$.validator.addMethod("pwcheck", function(value, element) {
    return this.optional(element) || /^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[!@#$%&*])[a-zA-Z0-9!@#$%&*]+$/.test(value);
  //(?=.*[a-zA-Z\d].*)[a-zA-Z\d!@#$%&*]
}, "");    
  
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='user_form1']").validate({

    // Specify validation rules
    rules: {

      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      // user_name2: "required",
      // title: "required",
      // address: "required",
      // pin_code: "required",
     user_email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        validate_email: true
      },
      user_password: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        pwcheck: true
      },
      
    },
    // Specify validation error messages
    messages: {
      // user_name2: "Please enter user name",
      // title: "Please enter competition title",
      user_email: "Please enter a valid email address",
      user_password: "Please enter valid password.",
      // pin_code: "Please enter a valid pincode",
      // address: "Please enter Street Address"
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      // alert("hello");
      form.submit();
    }
  });
});
 </script>

</body>

</html>
