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
                  <th>Competition Title</th>
                  <th>From-To Class</th>
                  <th>End Date</th>
                                
                  <th class="wt_50">Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php $i = 0;
                  foreach ($competition_list as $list) {
                  // print_r($list->competitiontypeid); 

                    $i++; ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $list->competitiontype ?></td>
                    <td><?php echo $list->title ?></td>
                    <td><?php echo $list->tabinputtext ?></td>
                    <td><?php echo $list->enddate ?></td>
                    <td>
                      <input type="hidden" name="competitionid" id="competitionid" value="<?php echo $list->competitionid; ?>">
                      <a href="<?php echo base_url(); ?>User/edit_competition/<?php echo $list->competitionid; ?>"> <i class="fa fa-edit"></i> </a> &nbsp;
                      <a  id="<?php echo $list->competitionid; ?>" class="competition_btn" value="<?php echo $list->competitionid; ?>" href=""> <i class="fas fa-eye"></i></a> &nbsp;
                       <a  id="<?php echo $list->competitionid; ?>" class="users_btn" value="<?php echo $list->competitionid; ?>" href=""><i class="fas fa-user"></i></a> &nbsp;
                        
                      <?php $status = $list->status; 
                          if ($status == 1) {?> 
                              <a class="btn btn-success" href="<?php echo base_url();?>User/competition_active?competitionid=<?php echo $list->competitionid;?>&active=<?php echo $list->status;?>"onclick="return confirm('Are you sure to Deactivate this competition?');" ><i class="fa fa-thumbs-up"></i></a> 
                          <?php } else {?> 
                              <a href="<?php echo base_url();?>User/competition_active?competitionid=<?php echo $list->competitionid;?>&active=<?php echo $list->status;?>"onclick="return confirm('Are you sure to Activate this competition?');" class="btn btn-danger"><i class="fa fa-thumbs-down"></i></a> 
                          <?php } ?> &nbsp;
                     

                 <!--    <a href=" < ?php echo base_url(); ?>User/competition_active/< ?php echo $list->competitionid; ?>/".&active=1>Active</a> -->


                    <!--   <a href="< ?php echo base_url(); ?>User/delete_competition/< ?php echo $list->competitionid; ?>" onclick="return confirm('Do you want to delete this competition?');" class="ml-2"> <i class="fa fa-trash text-danger"></i> </a> -->

                 

                   <?php if($list->competitiontypeid==1){ ?>

                      <a type="button" id="" name="" class="btn btn-sm btn-primary " href="<?php echo base_url(); ?>User/quizcompetition_list/<?php echo $list->competitionid; ?>">view Question</a>
                    <?php } ?>
                    </td>
                  <?php } ?>
                  </tr>

                </tbody>
              </table>
              <!-- Modal -->
               <div class="modal fade" id="exampleModalLong"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Competition Details</h5>
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
             <!-- Modal -->
               <div class="modal fade" id="exampleModal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Participant Details</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body" id="users">
                     
                 
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
      toastr.success('Competition Saved Successfully');
    });
  <?php } ?>
  <?php if($this->session->flashdata('update_success')){ ?>
    $(document).ready(function(){
      toastr.success('Competition Updated Successfully');
    });
  <?php } ?>
  <?php if($this->session->flashdata('delete_success')){ ?>
    $(document).ready(function(){
      toastr.error('Competition Deleted Successfully');
    });
  <?php } ?>
  

</script>
<!--  <script>
    $(".competition_btn").click(function() {
       
         var text = $(this).attr('value');
         // alert(text);
         $('#competition_m_id').val(text);

    });
</script> 
 -->
 <script>
    $(document).ready(function(){

      $('.competition_btn').click(function(e){

    var competitionid=$(this).attr("id");
    // var title=$('#competitionid option:selected').text();
    // alert(competitionid);
    $.post('<?php echo base_url(); ?>User/competitionName_list',
      {competitionid:competitionid},

      function(data,status){

      // alert(data);
      // console.log(data);
      $('#competition').html(data);


    });
    $('#exampleModalLong').modal('show');
    e.preventDefault();
    
    });
      
});

  </script>  

<!--    // users display by competition id  -->
  <script>
    $(document).ready(function(){

      $('.users_btn').click(function(e){

    var competitionid=$(this).attr("id");
    // var title=$('#competitionid option:selected').text();
    // alert(competitionid);
    $.post('<?php echo base_url(); ?>User/userlist_by_competitionid',
      {competitionid:competitionid},

      function(data,status){

      // alert(data);
      // console.log(data);
      $('#users').html(data);


    });
    $('#exampleModal').modal('show');
    e.preventDefault();
    
    });
      
});

  </script>  


