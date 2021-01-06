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
            <h2>Dynamic Competition</h2>
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
              </div> 
              <!-- /.card-header -->
              <!-- form start -->
              <form id="form_action" role="form" action="" method="post">
                <div class="card-body">
                <div class="row">
	                <!--  <div class="form-group col-md-6">
			                 <?php
		                      if(isset($competitionid)){?>

		                       <input type="text" class="form-control required title-case text" name="competitionid" id="competitionid" value="<?php if(isset($competitionid)){ echo $competitionid; } ?>" disabled="">
		                     <?php }?>

			                 <select name="competitionid" id="competitionid"class="form-control" required="">
			                    <option value="">Select Competition</option>
			         
			                    <?php foreach($competition as $competition)
			                    {

			                    echo '<option value="'. $competition->competitionid.'" '.$selected.'>'. $competition->title.'</option>';
			                                    
			                     }
			                    ?>  

			                     
			                 </select>
	                  </div> -->
	                  <div class="form-group col-md-12">
	                  	<label>Question</label>
			             <input type="text" class="form-control required title-case text" name="question" id="question"  value="<?php if(isset($question)){ echo $question; } ?>" placeholder="Enter Question">
		                   
                      </div>
                        <div class="form-group col-md-12">
                             <label>Answer Type</label>
		                       <div class="form-check">
		              
		      
		                        <?php 
		                         // echo $answertype;
		                              if(empty($answertype)){$answertype="";}
		                              $b = explode(",", $answertype);

		                              // print_r($answertype);
		                     
		                         ?> 

		                        <input type="checkbox" id="answertype" name="answertype[]" value="btn_rb" <?php if(in_array("btn_rb",$b)) { echo "checked";} ?> > Radio Button <br> 
		                        <input type="checkbox" id="answertype" name="answertype[]" value="btn_cb" <?php if(in_array("btn_cb",$b)){ echo "checked";} ?> > Check Box <br>
		                        <input type="checkbox" id="answertype" name="answertype[]" value="btn_txta" <?php if(in_array("btn_txta",$b)){ echo "checked";} ?>> Textarea

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
                  <a href="<?php echo base_url() ?>User/dashboard" class="btn btn-default ml-4">Cancel</a>
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

</body>
</html>
