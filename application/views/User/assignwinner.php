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
          <div class="col-sm-12 text-center mt-2">
            <h2>Assign Winner</h2>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-8 offset-md-2">
            <!-- general form elements -->
            <div class="card card-default">
              <div class="card-header">
                <h4 class="card-title">Add Winner</h4>
                <div class="card-tools col-md-3 " >
                <a href="<?php echo base_url(); ?>User/assign_winner_list" class="btn btn-sm btn-block btn-primary">Assign Winner List</a>
              </div>
              </div> 
              <!-- /.card-header -->
              <!-- form start -->
              
                <div class="card-body">
                
                  <form id="form_action" role="form" name="winner" action="<?php echo base_url(); ?>User/add_assignwinner" method="post" >
                  <div class="row"> 
                 <div class="form-group col-md-6">
                    <label>Competition Title <span style="color: red;">*</span></label>
                       <?php

                          if(isset($competitionid)){?>

                           <input type="hidden" class="form-control  title-case text" name="competitionid" id="competition" value="<?php if(isset($competitionid)){ echo $competitionid; } ?>" disabled="">
                         <?php }?>

                       <select name="competitionid" id="competitionid" class="form-control required" required>
                          <option value="">Select Competition</option>
               
                          <?php 
                          
                          foreach($competition as $competition)
                          {
                           
                          echo '<option value="'. $competition->competitionid.'" '.$selected.'>'. $competition->title.'</option>';
                           }              
                           
                          ?>  

                           
                       </select>
                    </div> 

                    <div class="form-group col-md-3">
                      <!--  < ?php  if(empty($competitionid)){ ?> -->
                   <button id="btn_search" type="search" style="margin-top: 32px;" class="btn btn-primary" >View Participate </button>
                

                 </div>
                 <div class="form-group col-md-12">
                   <p  style="color: blue;" class="ml-2 pl-1 border border-dark mt-2">Note: Please select the competition title first then click on view participate.</p>
                 </div>

               

                  </div>
                 </form>

                 <div id="demo" >

                 <form id="form_winner" role="form" action="<?php echo base_url(); ?>User/save_winner" method="post">

                 <div class="row">
                 <div class="form-group col-md-6">
                    <label>Winner Position <span style="color: red;">*</span></label>
                       <?php

                          if(isset($pointsid)){?>

                           <input type="hidden" class="form-control required title-case text" name="points" id="points" value="<?php if(isset($pointsid)){ echo $pointsid; } ?>" disabled="">
                         <?php }?>

                       <select name="pointsid" id="pointsid"class="form-control" required="">
                          <option value="">Select Winner Position</option>
               
                          <?php 
                          
                          foreach($points as $points)
                          { 
                            echo '<option value="'. $points->pointsid.'" '.$selected.'>'. $points->winnerposition.'</option>';
                           }              
                           
                          ?>  

                           
                       </select>
                    </div> 
                   </div>



            <?php  if(empty($competitiontypeid)){$competitiontypeid="";} ?>

              <?php 

                if($competitiontypeid=="1"){
                    ?>             
             <div class="form-group row">
               <table id="dataTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th class="wt_50">#</th>
                  <th>User Id</th>
                  <th>User Name</th>
                  <th>Score(%)</th>
                  <!-- <th>Correct Answer</th> -->
                  <!-- <th class="wt_50">Action</th> -->
                </tr>
                </thead>
                <tbody>
                  <?php $i = 0;
                  foreach ($userscore as $list) {
                    $i++; ?>
                  <tr>
                    <td><input type="radio" id="" style="margin-right: 10px;" name="user_id" value="<?php echo $list->user_id ?>" required="required"><input type="hidden" name="competitionid" value="<?php echo $list->competitionid ?>"><?php echo $i; ?></td> 
                    <td><?php echo $list->user_id ?></td> 
                    <td><?php echo $list->user_name ?></td>
                    <td><?php echo $list->score_percentage ?></td>
                    <!-- <td><?php echo $list->competitionid ?></td> -->

                  
                   <!--  <td>
                     </td> -->


                 
                  </tr>
                   <?php } ?>

                </tbody>
              </table> 
                  </div> 
                <?php  }else{ ?>
                  <div class="form-group row">
                        <table id="dataTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th class="wt_50">#</th>
                  <th>User Id</th>
                  <th>User Name</th>
                  <!-- <th>User Name</th> -->
                  <!-- <th class="wt_50">Action</th> -->
                </tr>
                </thead>
                <tbody>
                  <?php $i = 0;
                  foreach ($fetch_userlist_othercompetition as $list) {
                    // print_r($fetch_userlist_othercompetition);
                    $i++; ?>
                  <tr>
                    <td><input type="radio" id="user" style="margin-right: 10px;" name="user_id" value="<?php echo $list->user_id ?>" required="required"><input type="hidden" name="competitionid" value="<?php echo $list->competitionid ?>"><?php echo $i; ?></td> 
                    <td><?php echo $list->user_id ?></td> 
                    <td><?php echo $list->user_name ?></td>
                    <!-- <td><?php echo $list->competitionid ?></td> -->

                   
                   <!--  <td>
                     </td> -->


                 
                  </tr>
                   <?php } ?>

                </tbody>
              </table> 
                  </div> 
              <?php   } ?>
             
                   <!--  <div id="build-wrap" name="text">

                    </div> -->
                     <button id="btn_save" type="submit" class="btn btn-success px-4">Add</button>
                    <a href="<?php echo base_url(); ?>User/assign_winner_list" onclick="this.form.reset();" class="btn btn-default ml-4">Cancel</a>
            </form>
          </div>
                </div>                           
                <!-- /.card-body -->
              <!--  <div class="card-footer">
                  <?php if(isset($update)){ ?>
                    <button id="btn_update" type="submit" class="btn btn-primary">Update </button>
                  <?php } else{ ?>
                   
                  <?php } ?>
               
                </div>  -->
              <!-- </form> -->
            </div>

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
  </div>
  <br>

  <script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>
<script>
  // <?php if($this->session->flashdata('admincheck_success')){ ?>
    $(document).ready(function(){
      // toastr.success('Quiz Checked and Saved Successfully');
    // });
  // <?php } ?> 

  <?php if($this->session->flashdata('save_success')){ ?>
    $(document).ready(function(){
      toastr.success('Winner Saved Successfully');
    });
  <?php } ?>
   <?php if($this->session->flashdata('record_error')){ ?>
    $(document).ready(function(){
      toastr.error('Record Exists');
    });
  <?php } ?>
</script>

<script>
$(document).ready(function(){

 var competition = $('#competition').val();
 $("#competitionid option[value='"+competition+"']").attr("selected","selected");

});
</script>
<!-- <script type="text/javascript">
$(function() {

  
  $("form[name='winner']").validate({

    rules: {
  
      user_id: "required"
     
      
    },
  
    messages: {
      user_id: "Please select user."
    
    },
  });
});

</script> -->
<!-- <script type="text/javascript">
  // $(document).ready(function(){


  //  $('#btn_search').click(function(){
  //  });
  // });

  $(document).ready(function(){
    $('#demo').hide();

   $('#competitionid').change(function(e){
    $('#demo').show();
    e.preventDefault();

   });
   // return false;
  });
</script> -->


</body>
</html>
