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
                  <?php if(isset($update)){ ?>
                  
                <h3 class="card-title">Edit Banner</h3>

                <?php }else{ ?>
                <h3 class="card-title">Add Banner</h3>
                <?php } ?>
              
                <div class="card-tools col-md-2 " >
                <a href="<?php echo base_url(); ?>User/banner_list" class="btn btn-sm btn-block btn-primary "  >Banner List</a>
              </div>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="form_action" role="form" action="" method="post" enctype="multipart/form-data">
                <div class="card-body row">
                  <div class="form-group col-md-12">
                   <label>Banner Title <span style="color: red;">*</span></label>
                    <!--  < ?php if(isset($update)){ ?>
                       <input type="text" class="form-control required title-case text " name="title" id="title" value="< ?php if(isset($title)){ echo $title; } ?>" placeholder="Enter banner title" disabled>
                       < ?php }else{ ?> -->
                      <input type="text" class="form-control required title-case text " name="title" id="title" value="<?php if(isset($title)){ echo $title; } ?>" placeholder="Enter banner title" required>
                     <!--  < ?php } ?>
                    -->
                   </div>
                  
                  <div class="form-group col-md-12">

                   <label>Banner Description <span style="color: red;">*</span></label>
                  <!--    < ?php if(isset($update)){ ?>
                       <textarea type="text" class="form-control "  name="subtitle" id="subtitle" value="" placeholder="Enter banner description" disabled>< ?php if(isset($subtitle)){ echo $subtitle; } ?></textarea>
                        < ?php }else{ ?> -->
                       <textarea type="text" class="form-control "  name="subtitle" id="subtitle" value="" placeholder="Enter banner description" required><?php if(isset($subtitle)){ echo $subtitle; } ?></textarea>
                     <!--   < ?php } ?> -->
                  </div>
                  <div class="form-group col-md-7">
                    <label>Banner Image <span style="color: red;">*</span></label>
                
                 <?php
                 if(isset($profile_image)){?>

                 <input type="file" id="profile_image" name="profile_image"  onchange="ValidateSingleInput(this); readURL(this);" />

                  <img id="blah" class="mb-2 mt-2" src="<?php if(isset($profile_image)){ echo base_url();?>assets/images/banner/<?php echo $profile_image; } ?>" alt="" height="150px" width="150px" />

                <input type="hidden" name="old_image" value="<?php if(isset($profile_image)){ echo $profile_image; } ?>"> 
                   <?php }else{?>
                     <input type="file" id="profile_image" name="profile_image"  onchange="ValidateSingleInput(this); readURL(this);" required="" />
                   <?php } ?>
                   
                 <p  style="color: blue;" class="ml-2 pl-1 border border-dark mt-2">Note: Only .jpg, .jpeg, .png Image Files are allowed.</p>

                 </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <?php if(isset($update)){ ?>
                    <button id="btn_update" type="submit" class="btn btn-primary">Update </button>
                  <?php } else{ ?>
                    <button id="btn_save" type="submit" class="btn btn-success px-4" >  Add</button>
                  <?php } ?>
                  <a href="<?php echo base_url(); ?>User/banner_list" onclick="this.form.reset();" class="btn btn-default ml-4">Cancel</a>
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
<script type="text/javascript">
  var _validFileExtensions = [".jpg", ".jpeg", ".png"];    
function ValidateSingleInput(oInput) {
    if (oInput.type == "file") {
        var sFileName = oInput.value;
         if (sFileName.length > 0) {
            var blnValid = false;
            for (var j = 0; j < _validFileExtensions.length; j++) {
                var sCurExtension = _validFileExtensions[j];
                if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                    blnValid = true;
                    break;
                }
            }
             
            if (!blnValid) {
                alert("File is invalid, allowed extensions are: " + _validFileExtensions.join(", "));
                oInput.value = "";
                return false;
            }
        }
    }
    return true;
}
</script>



</body>
</html>
