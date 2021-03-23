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
              
                <h3 class="card-title">Add Bulk</h3>
              
                <div class="card-tools col-md-2 " >
                <a href="<?php echo base_url(); ?>User/user_list" class="btn btn-sm btn-block btn-primary">User List</a>
              </div>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="form_action" name="user_form1" role="form" action="<?php echo base_url();?>User/importFile" method="post" enctype="multipart/form-data">
                <div class="card-body row">
                    <div class="form-group col-md-6">
                    <label> Upload excel file <span style="color: red;">*</span></label>
                     <input type="file" name="uploadFile" value="" required="" />
                  </div>
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <?php if(isset($update)){ ?>
                    <button id="btn_update" type="submit" class="btn btn-primary">Update </button>
                  <?php } else{ ?>
                    <button id="btn_save" type="submit" value="Upload" name="submit" class="btn btn-success px-4">Add</button>
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
<!-- <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script> -->
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

 

</body>

</html>
