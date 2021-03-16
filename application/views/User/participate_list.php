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
          <div class="col-sm-12 mt-1">
            <h4>PARTICIPATION PROFILE INFORMATION</h4>
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
            
              <h5 class="card-title "><i class="fa fa-list"></i> List Participation Profile Information</h5>
              <div class="card-tools col-md-2 " >
                <a href="add_participate" class="btn btn-sm btn-block btn-primary "  >Add Participation</a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped ">
                <thead>
                <tr>
                  <th class="wt_50">#</th>
                 <!--  <th>Full Name</th>
                  <th>BirthDate</th>
                  <th>Pincode</th> -->
                  <th>Competition</th>
                  <th class="wt_50" hidden>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php $i = 0;
                  foreach ($participate_list as $list) {
                    $i++; ?>
                  <tr>
                   <td><?php echo $i; ?></td>
                  <!--  <td><?php echo $list->fullname ?></td>
                    <td><?php echo $list->birthdate ?></td>
                    <td><?php echo $list->pincode ?></td> -->
                    <td><?php echo $list['title']; ?></td>
                    
                   
                    <td hidden>
                      <a href="<?php echo base_url(); ?>User/edit_participate/<?php echo $list->profileid; ?>"> <i class="fa fa-edit"></i> </a>
                      <a href="<?php echo base_url(); ?>User/delete_participate/<?php echo $list->profileid; ?>" onclick="return confirm('Do you want to delete this participant?');" class="ml-2"> <i class="fa fa-trash text-danger"></i> </a>
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
      toastr.success('Participant Saved Successfully');
    });
  <?php } ?>
  <?php if($this->session->flashdata('update_success')){ ?>
    $(document).ready(function(){
      toastr.success('Participant Updated Successfully');
    });
  <?php } ?>
  <?php if($this->session->flashdata('delete_success')){ ?>
    $(document).ready(function(){
      toastr.error('Participant Deleted Successfully');
    });
  <?php } ?>

  </script>

</body>
</html>
