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
            <h1>Banner Information</h1>
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
                <h3 class="card-title">Add Banner</h3>
                <div class="card-tools col-md-2 " >
                <a href="banner_list" class="btn btn-sm btn-block btn-primary "  >Banner List</a>
              </div>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="form_action" role="form" action="" method="post" enctype="multipart/form-data">
                <div class="card-body row">
                  <div class="form-group col-md-12">
                    <input type="text" class="form-control required title-case text txtOnly" name="title" id="title" value="<?php if(isset($title)){ echo $title; } ?>" placeholder="Enter banner title" required>
                  </div>
                  
                  <div class="form-group col-md-12">
                    <input type="text" class="form-control txtOnly"  name="subtitle" id="subtitle" value="<?php if(isset($subtitle)){ echo $subtitle; } ?>" placeholder="Enter banner sub title" required>
                  </div>
                  <div class="form-group col-md-4">
                 <input type="file" id="profile_image" name="profile_image" onchange="readURL(this);" />
                 <?php
                 if(isset($profile_image)){?>

             
                  <img id="blah" src="<?php if(isset($profile_image)){ echo base_url();?>assets/images/banner/<?php echo $profile_image; } ?>" alt="" height="150px" width="150px" />

                  <!-- <input type="hidden" name="hiddenphoto" value="<?php if(!empty($data))echo $data[0]->profile_image; ?>"> -->
                   <?php }?>


                 </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <?php if(isset($update)){ ?>
                    <button id="btn_update" type="submit" class="btn btn-primary">Update </button>
                  <?php } else{ ?>
                    <button id="btn_save" type="submit" class="btn btn-success px-4" >  Add</button>
                  <?php } ?>
                  <a href="<?php echo base_url() ?>User/banner_list" class="btn btn-default ml-4">Cancel</a>
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




</body>
</html>
