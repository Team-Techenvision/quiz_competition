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
            <h4>USER INFORMATION</h4>
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
              <h3 class="card-title"><i class="fa fa-list"></i> List User Information</h3>
             <div class="card-tools col-md-2 " >

            <a href="<?php echo base_url(); ?>User/add_user" class="btn btn-sm btn-block btn-primary">Add User</a>
            </div>
          <div class="card-tools col-md-2 " >

            <a href="<?php echo base_url(); ?>User/add_bulk" class="btn btn-sm btn-block btn-primary">Add Bulk</a>
          </div>
              
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th class="wt_50">Sr No.</th>
                  <th>Name</th>
                  <!-- <th>City</th> -->
                  <th>Mobile No.</th>
                  <th>Email</th>
                  <th class="wt_50" >Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php $i = 0;
                  foreach ($user_list as $list) {
                    $i++; ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $list->user_name ?></td>
                    <!-- <td>< ?php echo $list->user_city ?></td> -->
                    <td><?php echo $list->user_mobile ?></td>
                    <td><?php echo $list->user_email ?></td>
                  
                    <td >
                       <input type="hidden" name="user_id" id="user_id" value="<?php echo $list->user_id; ?>">
<!-- <i class="fa fa-trophy" aria-hidden="true"></i> -->
                       <a href="" id="<?php echo $list->user_id; ?>"  class="comp_by_userid" value="<?php echo $list->user_id; ?>" title="View Competition" >  <img src="<?php echo base_url(); ?>assets/images/competition.jpg" width="50" height="25"></a>

                      <a href="<?php echo base_url(); ?>User/edit_user/<?php echo $list->user_id; ?>" hidden> <i class="fa fa-edit" ></i> </a>
                      <a href="<?php echo base_url(); ?>User/delete_user/<?php echo $list->user_id; ?>" onclick="return confirm('Do you want to delete this user?');" class="ml-2" hidden> <i class="fa fa-trash text-danger"></i> </a>
                    </td>
                  <?php } ?>
                  </tr>

                </tbody>
              </table>

                <!-- Modal -->
               <div class="modal fade" id="exampleModal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Competition Details</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body" id="competition">
                     
                 
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
                 
                    </div>
                  </div>
                </div>
              </div>
           <!-- /.end modal -->

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
      toastr.success('User Saved Successfully');
    });
  <?php } ?>
   <?php if($this->session->flashdata('import_success')){ ?>
    $(document).ready(function(){
      toastr.success('Data Import Successfully');
    });
  <?php } ?>
  <?php if($this->session->flashdata('update_success')){ ?>
    $(document).ready(function(){
      toastr.success('User Updated Successfully');
    });
  <?php } ?>
  <?php if($this->session->flashdata('delete_success')){ ?>
    $(document).ready(function(){
      toastr.error('User Deleted Successfully');
    });
  <?php } ?>

  </script>

   <script>
    $(document).ready(function(){

      $('.comp_by_userid').click(function(e){

    var user_id=$(this).attr("id");
    // var title=$('#competitionid option:selected').text();
    // alert(competitionid);
    $.post('<?php echo base_url(); ?>User/competitionlist_by_userid',
      {user_id:user_id},

      function(data,status){

      // alert(data);
      // console.log(data);
      $('#competition').html(data);
       $('#example2').DataTable({ 
          "destroy": true, //use for reinitialize datatable
      });


    });
    $('#exampleModal').modal('show');
    e.preventDefault();
    
    });
      
});

  </script>  


</body>
</html>
