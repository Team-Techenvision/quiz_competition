<!DOCTYPE html>
<html>
<?php
  $page = "company_information";
?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 text-center mt-2">
            <h1>WEBSITE INFORMATION</h1>
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
                <h3 class="card-title">Website Information</h3>
              </div>
              <form action="" method="post" enctype="multipart/form-data">

                <div class="card-body row">
                  <div class="form-group col-md-12">
                    <input type="text" class="form-control" name="company_name" id="company_name" value="<?php if(isset($company_name)){ echo $company_name; } ?>" placeholder="Enter Company Name">
                  </div>
                  <div class="form-group col-md-12">
                    <textarea class="form-control" rows="3" name="company_address" id="company_address" placeholder="Enter Company Address"><?php if(isset($company_address)){ echo $company_address; } ?></textarea>
                  </div>
                  <div class="form-group col-md-6">
                    <input type="number" class="form-control" name="company_pincode" id="company_pincode" value="<?php if(isset($company_pincode)){ echo $company_pincode; } ?>" placeholder="Enter Pincode">
                  </div>
                   <div class="form-group col-md-6">
                    <input type="number" class="form-control" name="company_mob1" id="company_mob1" value="<?php if(isset($company_mob1)){ echo $company_mob1; } ?>" placeholder="Mobile No. 1">
                  </div>
                   <div class="form-group col-md-6">
                    <input type="email" class="form-control" name="company_email" id="company_email" value="<?php if(isset($company_email)){ echo $company_email; } ?>" placeholder="Email">
                  </div>
                    <div class="form-group col-md-4">
                 <input type="file" id="company_logo" name="company_logo" onchange="readURL(this);" />

                 <?php
                 if(isset($company_logo)){?>
                  <img id="blah" src="<?php if(isset($company_logo)){ echo base_url();?>assets/images/competition/<?php echo $company_logo; } ?>" alt="" height="150px" width="150px" />

                  <?php }?>


                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <?php if(isset($update)){ ?>
                    <button type="submit" class="btn btn-primary">Update Company</button>
                  <?php }else{ ?>
                    <button type="submit" class="btn btn-success">Create Company</button>
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


</body>
</html>
