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
            <h2>Competition Participated User List</h2>
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
                <h4 class="card-title">View Competition Participated User List</h4>
                <div class="card-tools col-md-3 " >
                <!-- <a href="<?php echo base_url(); ?>User/competition_list" class="btn btn-sm btn-block btn-primary">View Question</a> -->
              </div>
              </div> 
              <!-- /.card-header -->
              <!-- form start -->
              <!-- <form id="form_action" role="form" action="" method="post"> -->
                <div class="card-body">
                
                  <form id="form_action" role="form" action="<?php echo base_url(); ?>User/quiz_user_list" method="post" >
                  <div class="row"> 
	               <div class="form-group col-md-6">
                    <label>Competition Title <span style="color: red;">*</span></label>
			                 <?php

		                      if(isset($competitionid)){?>

		                       <input type="hidden" class="form-control required title-case text" name="competitionid" id="competition" value="<?php if(isset($competitionid)){ echo $competitionid; } ?>" disabled="">
		                     <?php }?>

			                 <select name="competitionid" id="competitionid"class="form-control" required="">
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
                   <button id="btn_search" type="search" style="margin-top: 32px;" class="btn btn-primary">View Participate </button>
                 </div>

                  </div>
                 </form>

               <!--    <?php foreach ($competitiontype as $value) {

                    $competition = $value->competitiontypeid;

                        // print_r($competition); die();
                      } ?> -->

                 
           <div class="form-group row">
                        <table id="dataTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th class="wt_50">#</th>
                  <th>User Id</th>
                  <th>User Name</th>
                  <!-- <th>User Name</th> -->
                  <th class="wt_50">Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php $i = 0;
                  foreach ($user_list as $list) {
                    $i++; ?>
                  <tr>
                    <td><?php echo $i; ?></td> 
                    <td><?php echo $list->user_id ?></td> 
                    <td><?php echo $list->user_name ?></td>
                   
                    <td><div class="form-group col-md-12">
                     <?php  if($list->competitiontypeid=="1"){
                     ?>
                       <a class="btn btn-primary btnviewquiz" name="user_id" id="btnviewquiz <?php echo $list->user_id ?>" href="<?php echo base_url(); ?>User/quiz_display/<?php echo $list->competitionid ?>/<?php echo $list->user_id ?>" value="<?php echo $list->user_id ?>" >View Quiz</a>
                     <?php }else{?>

                       <a class="btn btn-primary btndownload" name="user_id" id="btndownload <?php echo $list->user_id ?>" href="<?php echo base_url(); ?>User/download_user_uploadfiles/<?php echo $list->competitionid ?>/<?php echo $list->user_id ?>" value="<?php echo $list->user_id ?>" >Download</a>

                      <!--  <button class="btn btn-primary btndownload" name="user_id" id="btndownload <?php echo $list->user_id ?>" value="<?php echo $list->user_id ?>" >Download</button> -->
                     <?php } ?>
                        </div>
                     </td>


                 
                  </tr>
                   <?php } ?>

                </tbody>
              </table> 
                  </div> 
             
	                 <!--  <div id="build-wrap" name="text">

	                  </div> -->
       
                </div>                           
                <!-- /.card-body -->
              <!--  <div class="card-footer">
                  < ?php if(isset($update)){ ?>
                    <button id="btn_update" type="submit" class="btn btn-primary">Update </button>
                  < ?php } else{ ?>
                    <button id="btn_save" type="submit" class="btn btn-success px-4">Add</button>
                  < ?php } ?>
                  <a href="< ?php echo base_url() ?>User/add_competition" class="btn btn-default ml-4">Cancel</a>
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
  <?php if($this->session->flashdata('save_success')){ ?>
    $(document).ready(function(){
      toastr.success('Record Saved Successfully');
    });
  <?php } ?>
</script>

  <script>
$(document).ready(function(){

 // $('#btn_serach').click(function(){
  // alert('hii');

 // var gender = $('#Gender').val();
 // // console.log(gender);
 // $("#gender option[value='"+gender+"']").attr("selected","selected");

 var competition = $('#competition').val();
 $("#competitionid option[value='"+competition+"']").attr("selected","selected");

 // var state = $('#StateId').val();
 // $("#stateid option[value='"+state+"']").attr("selected","selected");

 // var city = $('#CityId').val();
 // $("#cityid option[value='"+city+"']").attr("selected","selected");

 // var district = $('#DistrictId').val();
 // $("#districtid option[value='"+district+"']").attr("selected","selected");

// }); 

 // $('#competitionid').change(function(){
 //  alert('hii');

 //  var competitionid = $('#competitionid').val();
 //  alert(competitionid);

 //  if(competitionid != '')
 //  {
 //   $.ajax({
 //    url:"< ?php echo base_url(); ?>User/fetch_user",
 //    method:"POST",
 //    data:{competitionid:competitionid},
 //    success:function(data)
 //    {
 //     $('#user_id').html(data);
 //     // $('#districtid').html('<option value="">Select District</option>');

 //    }
 //   });
 //  }
 //  else
 //  {
 //   $('#user_id').html('<option value="">Select User</option>');
 //     // $('#districtid').html('<option value="">Select District</option>');

 //  }
 // });

 //  $('#cityid').change(function(){
 //  var cityid = $('#cityid').val();
 //  if(cityid != '')
 //  {
 //   $.ajax({
 //    url:"< ?php echo base_url(); ?>WebsiteController/fetch_district",
 //    method:"POST",
 //    data:{cityid:cityid},
 //    success:function(data)
 //    {
 //     $('#districtid').html(data);
     
 //    }
 //   });
 //  }
 //  else
 //  {
 //   $('#districtid').html('<option value="">Select District</option>');
   

 //  }
 // });
 
});
</script>
</body>
</html>
