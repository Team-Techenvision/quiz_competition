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
            <h1>Level Information</h1>
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
                <h3 class="card-title">Add Level</h3>
                <div class="card-tools col-md-2 " >
                <a href="<?php echo base_url(); ?>User/level_list" class="btn btn-sm btn-block btn-primary "  >Level List</a>
              </div>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="form_action" role="form" action="" method="post" >
                <div class="card-body row">
                 <div class="form-group col-md-12">
                  <label>Level <span style="color: red;">*</span></label>
                    <input type="text" class="form-control required title-case " name="levelname" id="levelname" value="<?php if(isset($levelname)){ echo $levelname; } ?>" placeholder="Enter Level " required="">

                    <p class="levelval mb-0" id="levelval" style="font-size:14px;  color: red;"></p>
                  </div>
                  

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <?php if(isset($update)){ ?>
                    <button id="btn_update" type="submit" class="btn btn-primary">Update </button>
                  <?php } else{ ?>
                    <button id="btn_save" type="submit" class="btn btn-success px-4">  Add</button>
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
  <script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>
  <script type="text/javascript">
  <?php if($this->session->flashdata('level_exists_error')){ ?>
    $(document).ready(function(){
      toastr.error('Competition Level Already Exists');
    });
  <?php } ?>
</script>
  <script>
   

  $('#levelname').on('change',function(){
    // alert("hii");

     var level = $('#levelname').val();
     // alert(mobile);
    
   
      $.ajax({
           url:"<?php echo base_url(); ?>User/check_level",
           method:"POST",
           data:{levelname:level},

           success:function(data)
            {   

               // alert(data);
               // console.log(data);
                 if(data == "true"){

                   $('.levelval').hide();

                 }else{
                // alert(data);
                 $('.levelval').html(data);
                 $('#levelname').val('');
                }               
           }
         });
       // e.preventdefault();
  });

</script>
</body>
</html>
