
<!DOCTYPE html>
<html>

<body class="hold-transition sidebar-mini layout-fixed">
 
<div class="wrapper winnerwrap"  style="background:url('<?php echo base_url(); ?>/assets/images/winnerfire.gif'); background-blend-mode: overlay; background-repeat: no-repeat; background-size: cover; background-color: #111111d6;">

  <!-- <div class="imgoverlay"></div> -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper resultwrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 mt-1">
            <!-- <h4>COMPETITION INFORMATION</h4> -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
<!-- <div class="row">
  <div class="col-md-5"> style="margin-left: -200px;
    margin-bottom: 47px;"-->
    <div style="text-align: center;"><img src="<?php echo base_url(); ?>/assets/images/1471940788_1129.gif"  height=150/></div>
<!-- </div> -->
<!-- <div class="col-md-2"><div style="text-align: center;"><img src="<?php echo base_url(); ?>/assets/images/MildMedicalAzurevase-size_restricted.gif" style="margin-right: -110px; margin-top: -65px;" height=200/></div>
</div>
 <div class="col-md-5">
 <div style="text-align: center;"><img src="<?php echo base_url(); ?>/assets/images/A15K8Ei.gif" style="margin-right: -360px;" height=120/></div>
  </div>
</div>
      -->
     
         
    </section>

    <section class="content">
      <div class="container-fluid">

        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card">
            <div class="card-header ">
            
              <h4 class="card-title text-center" style="color: crimson;"><!-- <i class="fa fa-list"></i>  -->Winner List Information</h4>
             <!--  <div class="card-tools col-md-2 " style=" margin-left: 80%;">
                <a href="add_competition" class="btn btn-sm btn-block btn-primary "  >Add Competition</a>
              </div> -->
            </div>
            <!-- /.card-header -->
            <div class="card-body text-center">
            <!--   <div class="form-group float-right search btn-group">
                  <input class="form-control search-input" id="tableSearch" type="search" placeholder="Search" autocomplete="off"><br>
              </div> -->

              <table id="example1" class="table table-bordered table-hover "  data-search="true">
                <thead class="thead-light">
                <tr>
                  <th class="wt_50">#</th>
                  <th>Competition</th>
                  <th>Winner Position</th>
               
                
                </tr>
                </thead>
                <tbody>
                  <?php $i = 0;
                  // print_r($winner_list);
                  foreach ($winner_list as $list) {
                    $i++; ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                   <!--  <td><?php echo $list->competitionid ?></td> -->
                   <!-- <td><?php echo $list->profileid ?></td> -->
                    <td><?php echo $list->title ?></td>
                    <td><?php echo $list->winnerposition  ?></td>
                
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
<!--   <script type="text/javascript">
    // Filter table

$(document).ready(function(){
  $("#tableSearch").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#example1 tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
  </script> -->
  
 

</body>
</html>
