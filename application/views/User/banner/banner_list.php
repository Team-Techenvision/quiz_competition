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
            <h4>BANNER INFORMATION</h4>
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
            <div class="card-header">
              <h3 class="card-title"><i class="fa fa-list"></i> List Banner Information</h3>
              <div class="card-tools">
                <a href="<?php echo base_url(); ?>User/add_banner" class="btn btn-sm btn-block btn-primary">Add Banner</a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th class="wt_50">Sr No.</th>
                  <th>Banner Title</th>
                  <th>Banner Description</th>
                  <th>Profile Image</th>
                 
                  <th class="wt_50">Action</th>
                </tr>
                </thead>
               <tbody>
                  <?php $i = 0;
                  foreach ($banner_list as $list) {
                    $i++; ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $list->title ?></td>
                    <td><?php echo $list->subtitle ?></td>
                    <td><img src="<?php echo base_url("assets/images/banner/".$list->profile_image);?>"height="150px" width="150px"/></td>
                   
                   <td>
                      <a href="<?php echo base_url(); ?>User/edit_banner/<?php echo $list->bannerid; ?>"> <i class="fa fa-edit"></i> </a>
                   
                           <a href="<?php echo base_url(); ?>User/delete_banner/<?php echo $list->bannerid; ?>" onclick="return confirm('Do you want to delete this banner?');" class="ml-2" > <i class="fa fa-trash text-danger"></i> </a>
                    
                     
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
      toastr.success('Banner Saved Successfully');
    });
  <?php } ?>
  <?php if($this->session->flashdata('update_success')){ ?>
    $(document).ready(function(){
      toastr.success('Banner Updated Successfully');
    });
  <?php } ?>
  <?php if($this->session->flashdata('delete_success')){ ?>
    $(document).ready(function(){
      toastr.error('Banner Deleted Successfully');
    });
  <?php } ?>

  </script>

</body>
</html>
