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
            <h4>QUIZ INFORMATION</h4>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
           <div class="form-group col-md-7">
                 <p  style="color: blue;" class="ml-2 pl-1 border border-dark ">Note: Questions denoted by "!" marks are invalid. Please delete invalid questions. </p>
               </div>
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card">
            <div class="card-header">
              <h3 class="card-title"><i class="fa fa-list"></i> List Quiz Information</h3>
             
              <div class="card-tools">
                <a href="<?php echo base_url(); ?>User/dynamiccompetition" class="btn btn-sm btn-block btn-primary">Add Quiz</a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th class="wt_50">Sr No.</th>
                  <th>Question</th>
                
                  <th class="wt_50">Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                // print_r($quizcompetition_list);
                  $i = 0;

                  foreach ($quizcompetition_list as $list) {

                    $i++; ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $list->question ?></td>
                   
                    <td>
                     <?php 
                     
                     if($list->optionvalues){
                      // if($list->answertype==3 && $list->answertype==4){
                      ?>
                      <a href="<?php echo base_url(); ?>User/edit_quizcompetition/<?php echo $list->competitionid; ?>/<?php echo $list->dynamiccompetitionid; ?>"> <i class="fa fa-edit"></i> </a>

                    <?php  }else{ 
                   if($list->answertype!=3 && $list->answertype!=4){
                      ?>
                         <span class="mr-2" ><i class="fas fa-exclamation 4x text-info font-weight-bold"  title="Question is not Valid"></i></span>

                    <?php }else{ ?>
                         <a href="<?php echo base_url(); ?>User/edit_quizcompetition/<?php echo $list->competitionid; ?>/<?php echo $list->dynamiccompetitionid; ?>"> <i class="fa fa-edit"></i> </a>

                    <?php } }?>
                      <a href="<?php echo base_url(); ?>User/delete_quizcompetition/<?php echo $list->competitionid; ?>/<?php echo $list->dynamiccompetitionid; ?>" onclick="return confirm('Do you want to Delete this question?');" class="ml-2"> <i class="fa fa-trash text-danger"></i> </a>
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
      toastr.success('Saved Successfully');
    });
  <?php } ?>
  <?php if($this->session->flashdata('update_success')){ ?>
    $(document).ready(function(){
      toastr.success('Question Updated Successfully');
    });
  <?php } ?>
  <?php if($this->session->flashdata('delete_success')){ ?>
    $(document).ready(function(){
      toastr.error('Question Deleted Successfully');
    });
  <?php } ?>

  </script>

</body>
</html>
