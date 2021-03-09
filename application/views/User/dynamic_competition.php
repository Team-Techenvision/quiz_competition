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
            <h2>Dynamic Quiz Competition</h2>
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
                <h4 class="card-title">Add Quiz</h4>
                <div class="card-tools col-md-3 " >
                <a href="<?php echo base_url(); ?>User/competition_list" class="btn btn-sm btn-block btn-primary">View Question</a>
              </div>
              </div> 
              <!-- /.card-header -->
              <!-- form start -->
              <form id="form_action" role="form" action="" method="post">
                <div class="card-body">
                <div class="row">
	               <div class="form-group col-md-6">
                <!--   < ?php foreach ($competition as $value) {
                    // print_r($competition);

                    $competitiontype = $value->competitiontypeid;


                    // print_r($competitiontype==1);
                  } ?> -->
                  <label>Competition Title <span style="color: red;">*</span></label>
			                 <?php

                        
    
                         
		                      if(isset($competitionid)){?>

		                       <input type="text" class="form-control required title-case text" name="competitionid" id="competitionid" value="<?php if(isset($competitionid)){ echo $competitionid; } ?>" disabled="">
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
	                  <div class="form-group col-md-12">
	                  	<label>Question <span style="color: red;">*</span></label>
			             <input type="text" class="form-control required title-case text" name="question" id="question"  value="<?php if(isset($question)){ echo $question; } ?>" placeholder="Enter Question" required="">

		                    <p class="queval mb-0" id="queval" style="font-size:14px;  color: red;"></p>
                      </div>
                        <div class="form-group col-md-12">
                             <label>Answer Type <span style="color: red;">*</span></label>
                             <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="answertype" value="1" checked>Radio Button
                                </label>
                              </div>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="answertype" value="2">Check Box
                                </label>
                              </div>
                              <div class="form-check disabled">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="answertype" value="3" >Text Box
                                </label>
                              </div>
                               <div class="form-check disabled">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="answertype" value="4">TextArea
                                </label>
                              </div>
                               <div class="form-check disabled">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="answertype" value="5">Dropdown List
                                </label>
                              </div>


                     </div>
                  </div>
             
	                 <!--  <div id="build-wrap" name="text">

	                  </div> -->
       
                </div>                           
                <!-- /.card-body -->
               <div class="card-footer">
                  <?php if(isset($update)){ ?>
                    <button id="btn_update" type="submit" class="btn btn-primary">Update </button>
                  <?php } else{ ?>
                    <button id="btn_save" type="submit" class="btn btn-success px-4">Add</button>
                  <?php } ?>
                  <a href="" onclick="this.form.reset();" class="btn btn-default ml-4">Cancel</a>
                </div> 
              </form>
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
<!-- <script src="<?php echo base_url(); ?>assets/dist/js/form-builder.min.js"></script> -->
<!-- <script src="<?php echo base_url(); ?>assets/dist/js/form-render.min.js"></script> -->
<!-- <script>
jQuery($ => {
  const fbTemplate = document.getElementById('build-wrap');
  $(fbTemplate).formBuilder();
});
</script>
 -->
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
   

  $('#question').on('change',function(){
    // alert("hii");

     var comp = $('#competitionid').val();
     var que = $('#question').val();
     // alert(mobile);
    
   
      $.ajax({
           url:"<?php echo base_url(); ?>User/check_dynamic_question",
           method:"POST",
           data:{question:que,competitionid:comp},

           success:function(data)
            {   

               // alert(data);
               // console.log(data);
                 if(data == "true"){

                   $('.queval').hide();

                 }else{
                // alert(data);
                 $('.queval').html(data);
                 $('#question').val('');
                }               
           }
         });
       // e.preventdefault();
  });

</script>
</body>
</html>
