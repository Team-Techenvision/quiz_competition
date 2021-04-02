

<!DOCTYPE html>
<html>
<style type="text/css">
  .disabled {
  pointer-events: none;
  cursor: default;
}
</style>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 mt-1">
            <h4>COMPETITION TYPE INFORMATION</h4>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<?php $page = 'competitiontype'; 
// echo $page; die();
?>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card">
            <div class="card-header ">
            
              <h3 class="card-title "><i class="fa fa-list"></i> List Competition Information</h3>
              <div class="card-tools col-md-3 " style=" margin-left: 80%;">
                <a href="add_competitiontype" class="btn btn-sm btn-block btn-primary">Add Competition Type</a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th class="wt_50">Sr No.</th>
                  <th>Competition Type</th>
                  <th class="wt_50" hidden>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php $i = 0;
                  foreach ($competitiontype_list as $list) {
                    $i++; ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $list->competitiontype ?></td>
                    <td>
                      <a href="<?php echo base_url(); ?>User/edit_competitiontype/<?php echo $list->competitiontypeid; ?>" hidden> <i class="fa fa-edit"></i> </a>
                      <a href="<?php echo base_url(); ?>User/delete_competitiontype/<?php echo $list->competitiontypeid; ?>" onclick="return confirm('Do you want to delete this competition type?');" class="ml-2 disabled " hidden> <i class="fa fa-trash text-danger"></i> </a>
                     
                    </td>
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
  <script type="text/javascript">
  <?php if($this->session->flashdata('save_success')){ ?>
    $(document).ready(function(){
      toastr.success('Competition Type Saved Successfully');
    });
  <?php } ?>
  <?php if($this->session->flashdata('update_success')){ ?>
    $(document).ready(function(){
      toastr.success('Competition Type Updated Successfully');
    });
  <?php } ?>
  <?php if($this->session->flashdata('delete_success')){ ?>
    $(document).ready(function(){
      toastr.error('Competition Type Deleted Successfully');
    });
  <?php } ?>

  </script>

</body>
</html>
