 <?php 
 $quizweb_user_id = $this->session->userdata('quizweb_user_id');
 $winner_list = $this->Website_Model->get_list_by_id('user_id', $quizweb_user_id,'','','','','assignwinner'); 
 
 ?>
 <!-- $winner_list = $this->Website_Model->get_list_by_id('user_id',$quizweb_user_id,'','','','','assignwinner'); ?>  -->


<!DOCTYPE html>
<html>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper competitionwrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 mt-1">
            <!-- <h4>COMPETITION INFORMATION</h4> -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card">
            <div class="card-header ">
            
              <h3 class="card-title "><!-- <i class="fa fa-list"></i>  -->Winner List Information</h3>
             <!--  <div class="card-tools col-md-2 " style=" margin-left: 80%;">
                <a href="add_competition" class="btn btn-sm btn-block btn-primary "  >Add Competition</a>
              </div> -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="form-group float-right search btn-group">
                  <input class="form-control search-input" id="tableSearch" type="search" placeholder="Search" autocomplete="off"><br>
              </div>

              <table id="example1" class="table table-bordered table-hover "  data-search="true">
                <thead class="thead-light">
                <tr>
                  <th class="wt_50">#</th>
                  <th>Competition</th>
                  <th>User Name</th>
                
                </tr>
                </thead>
                <tbody>
                  <?php $i = 0;
                  foreach ($winner_list as $list) {
                    $i++; ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $list->competitionid ?></td>
                    <td><?php echo $list->user_id ?></td>
                
                  <?php } ?>
                  </tr>

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
  </div>
 <script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>
 <!--  <script type="text/javascript">
  <?php if($this->session->flashdata('save_success')){ ?>
    $(document).ready(function(){
      toastr.success('Saved successfully');
    });
  <?php } ?>
  <?php if($this->session->flashdata('update_success')){ ?>
    $(document).ready(function(){
      toastr.success('Updated successfully');
    });
  <?php } ?>
  <?php if($this->session->flashdata('delete_success')){ ?>
    $(document).ready(function(){
      toastr.error('Deleted successfully');
    });
  <?php } ?>

  </script> -->
  <script type="text/javascript">
    // Filter table

$(document).ready(function(){
  $("#tableSearch").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#example1 tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
  </script>

</body>
</html>
