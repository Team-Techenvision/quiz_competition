<!DOCTYPE html>
<html>
<?php
  $page = "company_information";
  include('head.php');
?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <?php include('navbar.php'); ?>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <?php include('sidebar.php'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 text-center mt-2">
            <h1>COMPANY INFORMATION</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-10 offset-md-1">
            <!-- general form elements -->
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Company Information</h3>
              </div>
               <form id="form_action" role="form" action="" method="post" enctype="multipart/form-data">
              <div class="card-body row">
                  <div class="form-group col-md-12">
                    <input type="text" class="form-control" name="company_name" id="company_name" value="<?php if(isset($company_name)){ echo $company_name; } ?>" placeholder="Enter Company Name" required>
                  </div>
                  <div class="form-group col-md-12">
                    <textarea class="form-control" rows="3" name="company_address" id="company_address" placeholder="Enter Company Address" required><?php if(isset($company_address)){ echo $company_address; } ?></textarea>
                  </div>
                  <div class="form-group col-md-6">
                    <input type="number" class="form-control" name="company_pincode" id="company_pincode" value="<?php if(isset($company_pincode)){ echo $company_pincode; } ?>" placeholder="Enter Pincode" required>
                  </div>
                   <div class="form-group col-md-6">
                    <input type="number" class="form-control" name="company_mob1" id="company_mob1" value="<?php if(isset($company_mob1)){ echo $company_mob1; } ?>" placeholder="Mobile No. 1" required>
                  </div>
                   <div class="form-group col-md-6">
                    <input type="email" class="form-control" name="company_email" id="company_email" value="<?php if(isset($company_email)){ echo $company_email; } ?>" placeholder="Email" required>
                  </div>
                    <div class="form-group col-md-4">
                 <input type="file" id="company_logo" name="company_logo" onchange="readURL(this);" / >

                 <?php
                 if(isset($company_logo)){?>
                  <img id="blah" src="<?php if(isset($company_logo)){ echo base_url();?>assets/images/companylogo/<?php echo $company_logo; } ?>" alt="" height="150px" width="150px" />

                  <?php }?>


                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <?php if(isset($update)){ ?>
                    <button type="submit" id="btn_update" class="btn btn-primary">Update Company</button>
                  <?php }else{ ?>
                    <button type="submit" id="btn_save" class="btn btn-success">Create Company</button>
                  <?php } ?>
                  <a href="<?php echo base_url(); ?>Admin/company_information_list" class="btn btn-default ml-4">Cancel</a>
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
  <!-- /.content-wrapper -->
  <?php include('footer.php'); ?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php include('script.php') ?>

 <script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>
  <script>
   
   $('.pis').bind("click" , function () {
          $('#company_logo').click();
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


<script type="text/javascript">
// Check Mobile Duplication..
  var company_mob11 = $('#company_mob1').val();
  $('#company_mob1').on('change',function(){
    var company_mob1 = $(this).val();
    $.ajax({
      url:'<?php echo base_url(); ?>User/check_duplication',
      type: 'POST',
      data: {"column_name":"company_mob1",
             "column_val":company_mob1,
             "table_name":"company"},
      context: this,
      success: function(result){
        if(result > 0){
          $('#company_mob1').val(company_mob11);
          toastr.error(company_mob1+' Mobile No Exist.');
        }
      }
    });
  });

// Check Email Duplication..
  var company_email1 = $('#company_email').val();
  $('#company_email').on('change',function(){
    var company_email = $(this).val();
    $.ajax({
      url:'<?php echo base_url(); ?>User/check_duplication',
      type: 'POST',
      data: {"column_name":"company_email",
             "column_val":company_email,
             "table_name":"company"},
      context: this,
      success: function(result){
        if(result > 0){
          $('#company_email').val(company_email1);
          toastr.error(company_email+' Email Id Exist.');
        }
      }
    });
  });
</script>
</body>
</html>
