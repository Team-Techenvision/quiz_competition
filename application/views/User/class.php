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
            <h1>Class Group Information</h1>
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
                <h3 class="card-title">Add Class Group</h3>
                 <div class="card-tools col-md-3 " >
                <a href="<?php echo base_url(); ?>User/class_list" class="btn btn-sm btn-block btn-primary "  >Class Group List</a>
              </div>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="form_action" role="form" action="" method="post" >
                <div class="card-body row">
                   <div class="form-group col-md-6">
                    <label>Class Group <span style="color: red;">*</span></label>
                    <input type="text" class="form-control required title-case text " name="tabinputtext" id="tabinputtext" value="<?php if(isset($tabinputtext)){ echo $tabinputtext; } ?>" placeholder="Enter Class Group" required="" >
                  </div>
                   <div class="form-group col-md-6">
                    <label>Class Tab Group <span style="color: red;">*</span></label>
                    <input type="text" class="form-control required title-case text " name="tabid" id="tabid" value="<?php if(isset($tabid)){ echo $tabid; } ?>" placeholder="Enter Class Tab Group " required="" >
                  </div>
                   <div class="form-group col-md-6">
                    <label>From Class </label>
                    <input type="text" class="form-control required title-case text " name="fromstand" id="fromstand" value="<?php if(isset($fromstand)){ echo $fromstand; } ?>" placeholder="Enter From Class"  >
                  </div>
                   <div class="form-group col-md-6">
                    <label>To Class </label>
                    <input type="text" class="form-control required title-case text " name="tostand" id="tostand" value="<?php if(isset($tostand)){ echo $tostand; } ?>" placeholder="Enter To Class" >
                  </div>
                   <div class="form-group col-md-6">
                    <?php  if(empty($alluser)){$alluser="";} ?>
                   <div class="radio">
                        <label><input type="radio" name="alluser" id="alluser" value="1"<?php if($alluser=="1") { echo "checked";} ?> > All</label>
                    </div>
                  </div>


                  
                    
                 
                 </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <?php if(isset($update)){ ?>
                    <button id="btn_update" type="submit" class="btn btn-primary">Update </button>
                  <?php } else{ ?>
                    <button id="btn_save" type="submit" class="btn btn-success px-4">  Add</button>
                  <?php } ?>
                  <a href="<?php echo base_url() ?>User/class_list" class="btn btn-default ml-4">Cancel</a>
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
 
</body>
</html>
