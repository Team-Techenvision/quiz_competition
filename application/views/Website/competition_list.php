

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
            
              <h3 class="card-title "><!-- <i class="fa fa-list"></i>  -->Competition List Information</h3>
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
                  <th>Title</th>
                  <th>Sub Title</th>
                  <th>Option</th>
                 
               
                </tr>
                </thead>
                <tbody>
                  <?php $i = 0;
                  foreach ($mycompetition_list as $list) {
                   /* print_r($list);die();*/
                    $i++; ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $list->title ?></td>
                    <td><?php echo $list->subtitle ?></td>
                   
                    
                   <!--  <td><img src="< ?php echo base_url("assets/images/competition/".$list->photo);?>"height="150px" width="150px"/></td> -->
                      <td><a href="<?php  echo base_url(); ?>WebsiteController/star_competion/<?php echo $list->competitionid ?>" class="btn btn-info">Start</a></td>
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
  <!-- <script type="text/javascript">
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
