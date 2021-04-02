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
                    <div class="form-group ">
                    <label  class=" col-md-12"> Upload excel file <span style="color: red;">*</span></label>
                     <input type="file" class="col-md-12" name="uploadFile" value="" onchange="ValidateSingleInput(this);" required="" />
                      <p  style="color: blue;" class="ml-2 pl-1 border border-dark mt-2">Note:Only .xlsx, .xls, .csv Excel Files are allowed. </p>
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
 

</body>
 <script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>
<script type="text/javascript">
  <?php if($this->session->flashdata('import_error')){ ?>
    $(document).ready(function(){
      toastr.error('You have already data imported');
    });
  <?php } ?>

</script>
<script type="text/javascript">
  var _validFileExtensions = [".xlsx", ".xls", ".csv"];    
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

</html>
