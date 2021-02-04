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
            <h4>COMPETITION INFORMATION</h4>
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
            
              <h3 class="card-title "><i class="fa fa-list"></i> List Competition Information</h3>
              <div class="card-tools col-md-2 " style=" margin-left: 80%;">
                <a href="add_competition" class="btn btn-sm btn-block btn-primary "  >Add Competition</a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th class="wt_50">#</th>
                  <th>Competition Type</th>
                  <th>Title</th>
                  <th>From-To Class</th>
                  <th>End Date</th>
                                
                  <th class="wt_50">Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php $i = 0;
                  foreach ($competition_list as $list) {
                    $i++; ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $list->competitiontype ?></td>
                    <td><?php echo $list->title ?></td>
                    <td><?php echo $list->class ?></td>
                    <td><?php echo $list->enddate ?></td>
                    <td>
                      <input type="hidden" name="competitionid" id="competitionid" value="<?php echo $list->competitionid; ?>">
                      <a href="<?php echo base_url(); ?>User/edit_competition/<?php echo $list->competitionid; ?>"> <i class="fa fa-edit"></i> </a>

                      <a href="<?php echo base_url(); ?>User/delete_competition/<?php echo $list->competitionid; ?>" onclick="return confirm('Do you want to delete this competition?');" class="ml-2"> <i class="fa fa-trash text-danger"></i> </a>

                     <!--  <a type="button" id="example" class="btn btn-sm btn-primary competition_btn" value="<?php echo $list->competitionid; ?>" href="">< ?php echo $list->competitionid; ?> View</a> -->

                      <a type="button" id="" name="" class="btn btn-sm btn-primary " href="<?php echo base_url(); ?>User/quizcompetition_list/<?php echo $list->competitionid; ?>">view Question</a>
                    </td>
                  <?php } ?>
                  </tr>

                </tbody>
              </table>
              <!-- Modal -->
             <!--  <div class="modal fade" id="exampleModal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Competition Details</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form> 
                       <input type="text" name="competition_id" id="competition_m_id" value="<?php echo $list->competitionid;?>">   -->
                        <!-- <div class="form-group">
                          <label for="message-text" class="col-form-label"> photo:</label>
                          <label for="message-text" id="photoPath" class="col-form-label"></label>
                          <img style="width:50px; height: 60px;" src="<?php echo base_url();?>upload/<?php echo 'photoPath'; ?>" class="thumbnail">
                        </div> -->
                      <!--   <div class="form-group">
                          <label for="recipient-name"  class="col-form-label">Competition Type :</label>
                          <label for="recipient-name" id="titlell" type="text" class="col-form-label"></label>
                        </div> -->
                        <!-- <div class="form-group">
                          <label for="message-text" class="col-form-label">Vehicle Name:</label>
                          <label for="message-text" id="vehiclell" class="col-form-label"></label>
                        </div>
                        <div class="form-group">
                           <label for="message-text" class="col-form-label">Vehicle Number:</label>
                           <label for="message-text"  id="numberll" class="col-form-label"></label>
                        </div>
                        <div class="form-group">
                          <label for="message-text" class="col-form-label">Contact Number:</label>
                          <label for="message-text"  id="contactll" class="col-form-label"></label>
                        </div>
                        <div class="form-group">
                          <label for="text" class="col-form-label">BirthDate:</label>
                          <input type="Date" id="birthdate1" class="form-control col-md-4" name="birthDate">
                        </div> -->
                   <!--  </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                      <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                  <!--   </div>
                  </div>
                </div>
              </div> -->
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
      toastr.success('Competition Saved Successfully');
    });
  <?php } ?>
  <?php if($this->session->flashdata('update_success')){ ?>
    $(document).ready(function(){
      toastr.success('Competition Updated successfully');
    });
  <?php } ?>
  <?php if($this->session->flashdata('delete_success')){ ?>
    $(document).ready(function(){
      toastr.error('Competition Deleted Successfully');
    });
  <?php } ?>

</script>
<!-- <script>
    $(".competition_btn").click(function() {
       
         var text = $(this).attr('value');
         alert(text);
         $('#competition_m_id').val(text);

    });
</script> -->

  <!-- <script>
    $(document).ready(function(){

      $('#example').click(function(){

    var competitionid=$('#competition_m_id').val();
    // var driverName=$('#competitionid option:selected').text();
    alert(competitionid);
                    
       $.ajax({
        url:"<?php echo base_url(); ?>User/competitionName_list",
        method: "POST",
        data: {'competitionid':competitionid},
       // dataType:'json',
        success: function(data) {

        alert(data);
     
          // console.log(data);
         // console.log(data[0]['title']);
          // $('#titlell').text(data[0]['title']);
         //  $('#driverll').text(data[0]['driverName']);

         //   $('#vehiclell').text(data[0]['vehicleName']);
         //   $('#numberll').text(data[0]['vehicleNumber']);
         //    $('#contactll').text(data[0]['contactNumber']);
         //    $('#birthdate1').val(data[0]['birthDate']);
          
        }
      });
       $("#exampleModal").modal("show");

    });
});

  </script>  -->

