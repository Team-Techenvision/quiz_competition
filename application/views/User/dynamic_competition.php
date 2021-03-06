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
              <form id="form_action" role="form" action="" enctype="multipart/form-data" method="post" autocomplete="off">
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
                       <div class="form-group col-md-6">
            
                      <label>File Format </label>
                       <?php
                          if(isset($file_type)){?>

                           <input type="text" class="form-control required title-case text" name="file_type" id="filetype" value="<?php if(isset($file_type)){ echo $file_type; } ?>" disabled="">
                         <?php }?>

                           <select name="file_type" id="file_type"class="form-control">
                              <option value="0">Select File Format</option>
                              <option value="1">Image Upload</option>
                              <option value="2">Video Upload</option>    
                           </select>
                        </div> 
                        <div class="form-group col-md-6" id="u_image">
                            <label>Upload Image</label>

                           <input class="form-control" type="file" id="upload_image" name="upload_image" onchange="ValidateSingleInput(this);"  accept="image/*"  /> 
                            <p  style="color: blue;" class="ml-2 mt-3 pl-1 border border-dark">Note:Only .jpg, .jpeg, .png Image Files are allowed.</p>
                        </div>
                         <div class="form-group col-md-6" id="u_video">
                            <label>Upload Video</label>

                           <input class="form-control" type="file" id="upload_video" name="upload_file" onchange="Validate_video(this);" accept="video/*"  /> 
                           <p  style="color: blue;" class="ml-2 mt-3 pl-1 border border-dark">Note:Only .mp4, .3pg, .mkv, .wmv Video Files are allowed.</p>

                        </div>
                         <div class="form-group col-md-12">
                           <p  style="color: blue;" class="ml-2 pl-1 border border-dark mt-2">Note: When the user selected any one option from 'File Format' then the user must select Radiobutton from 'Answer Type'.</p>
                         </div>


                        <div class="form-group col-md-12">
                             <label>Answer Type <span style="color: red;">*</span></label>
                             <div class="form-check r1">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="answertype" value="1" checked>Radio Button
                                </label>
                              </div>
                              <div class="form-check r2">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="answertype" value="2">Check Box
                                </label>
                              </div>
                              <div class="form-check  r3 ">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="answertype" value="3" >Text Box
                                </label>
                              </div>
                               <div class="form-check r4 ">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="answertype" value="4">TextArea
                                </label>
                              </div>
                               <div class="form-check r5 ">
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
                  <a href="<?php echo base_url(); ?>User/competition_list" onclick="this.form.reset();" class="btn btn-default ml-4">Cancel</a>
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
  <script type="text/javascript">
  <?php if($this->session->flashdata('upload_success')){ ?>
    $(document).ready(function(){
      toastr.success('File Uploaded Successfully');
    });
  <?php } ?>
</script>
<script type="text/javascript">
  <?php if($this->session->flashdata('upload_error')){ ?>
    $(document).ready(function(){
      toastr.error('File not Uploaded ');
    });
  <?php } ?>
</script>
<script>
  <?php if($this->session->flashdata('save_success')){ ?>
    $(document).ready(function(){
      toastr.success('Record Saved Successfully');
    });
  <?php } ?>
</script>
<script type="text/javascript">
  <?php if($this->session->flashdata('question_exists_error')){ ?>
    $(document).ready(function(){
      toastr.error('Question Already Exists');
    });
  <?php } ?>
</script>

<script type="text/javascript">
  $(document).ready(function(){

        $("#u_video").hide();
        $("#u_image").hide();

    $('#file_type').on('change', function() {

      $(".r2").hide();
      $(".r3").hide();
      $(".r4").hide();
      $(".r5").hide();

      if (this.value == '1')

      {
        $("#u_image").show();
        $("#upload_image").prop('required',true);
        $("#upload_video").prop('required',false);
        $("#u_video").hide();

      }
      else if (this.value == '2')
      {
        $("#u_video").show();
        $("#upload_video").prop('required',true);
        $("#upload_image").prop('required',false);
        $("#u_image").hide();

      }
      else
      {
        $("#u_video").hide();
        $("#u_image").hide();
        $("#upload_video").prop('required',false);
        $("#upload_image").prop('required',false);
        $(".r2").show();
        $(".r3").show();
        $(".r4").show();
        $(".r5").show();


      }
    });
});
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
                 if(data != "true"){

                   // $('.queval').hide();
                 $('.queval').html("Question Already Exists.");
                 $('.queval').show().delay(2000).fadeOut();
                 $('#question').val('');

                 }
                //  else{
                // // alert(data);
                //  $('.queval').html(data);
                //  $('#question').val('');
                // }               
           }
         });
       // e.preventdefault();
  });

</script>
<script type="text/javascript">
  var _validFileExtensions = [".jpg", ".jpeg", ".png"];    
function ValidateSingleInput(oInput) {
    if (oInput.type == "file") {
        var sFileName = oInput.value;
         if (sFileName.length > 0) {
            var blnValid = false;
            for (var j = 0; j < _validFileExtensions.length; j++) {
                var sCurExtension = _validFileExtensions[j];
                if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                    blnValid = true;
                    break;
                }
            }
             
            if (!blnValid) {
                alert("File is invalid, allowed extensions are: " + _validFileExtensions.join(", "));
                oInput.value = "";
                return false;
            }
        }
    }
    return true;
}
</script>
<script type="text/javascript">
  var _validFile = [".mp4", ".3pg", ".mkv" , ".wmv" ];    
function Validate_video(oInput) {
    if (oInput.type == "file") {
        var sFileName = oInput.value;
         if (sFileName.length > 0) {
            var blnValid = false;
            for (var j = 0; j < _validFileExtensions.length; j++) {
                var sCurExtension = _validFile[j];
                if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                    blnValid = true;
                    break;
                }
            }
             
            if (!blnValid) {
                alert("File is invalid, allowed extensions are: " + _validFile.join(", "));
                oInput.value = "";
                return false;
            }
        }
    }
    return true;
}
</script>
<!-- <script type="text/javascript">
//for image upload
 $("#upload_image").change(function () {

    var validExtensions = [".jpg", ".jpeg", ".png"]
    var file = $(this).val().split('.').pop();
    if (validExtensions.indexOf(file) == -1) {
        alert("Only formats are allowed : "+validExtensions.join(', '));
         var file = $(this).val("");
    }

});


 //for video upload
 $("#upload_video").change(function () {

    var validExtensions = [".mp4", ".3pg", ".mkv" , ".wmv"]
    var file = $(this).val().split('.').pop();
    if (validExtensions.indexOf(file) == -1) {
        alert("Only formats are allowed : "+validExtensions.join(', '));
         var file = $(this).val("");
    }

});
</script> -->
</body>
</html>
