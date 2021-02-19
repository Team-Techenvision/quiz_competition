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
            <h1>Competition Information</h1>
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
                <h3 class="card-title">Add Competition</h3>
                <div class="card-tools col-md-3 " >
                <a href="<?php echo base_url(); ?>User/competition_list" class="btn btn-sm btn-block btn-primary "  >Competition List</a>
              </div>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="form_action" name="form_action" role="form" action="" method="post" enctype="multipart/form-data">
                <div class="card-body row">
                  <div class="form-group col-md-12">
                    <label>Competition Type <span style="color: red;">*</span></label>
                      <?php
                      if(isset($competitiontypeid)){?>

                       <input type="hidden" class="form-control required title-case text" name="competitiontype" id="competitiontype" value="<?php if(isset($competitiontypeid)){ echo $competitiontypeid; } ?>" disabled="">
                       <?php }?>

                

                      <select name="competitiontypeid" id="competitiontypeid"class="form-control" required="">
                        <option value="">Select Competition Type</option>


                    <?php foreach($competitiontype as $competitiontype)
                        {

                        echo '<option value="'. $competitiontype->competitiontypeid.'" '.$selected.'>'. $competitiontype->competitiontype.'</option>';
                                       
                         }
                        ?>  

                         
                      </select>
                  </div> 
                   <!--  <div class="form-group col-md-12" id="quiz">
                      <label>Quiz Subject </label>
                    <input type="text" class="form-control required title-case text txtOnly" name="quizsubject" id="quizsubject" value="< ?php if(isset($quizsubject)){ echo $quizsubject; } ?>" placeholder="Enter Quiz Subject" >
                  </div> -->
                  <div class="form-group col-md-12">
                    <label>Competition Title <span style="color: red;">*</span></label>
                    <input type="text" class="form-control required title-case text " name="title" id="title" value="<?php if(isset($title)){ echo $title; } ?>" placeholder="Enter title" required="" >
                  </div>
                  
                  <div class="form-group col-md-12">
                    <label>Competition Sub Title <span style="color: red;">*</span></label>

                    <input type="text" class="form-control "  name="subtitle" id="subtitle" value="<?php if(isset($subtitle)){ echo $subtitle; } ?>" placeholder="Enter sub title" required="">
                  </div>
                   <div class="form-group col-md-12">
                    <label>Competition Topics</label>

                      <textarea class="textarea" name="subjectstextarea" id="subjectstextarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php if(isset($subjectstextarea)){ echo $subjectstextarea; } ?></textarea>

                    </div>
           
                   <div class="form-group col-md-6">
                    <label>Class <span style="color: red;">*</span></label>

                      <?php
                      if(isset($standard)){?>

                       <input type="hidden" class="form-control required title-case text" name="classname" id="classname" value="<?php if(isset($standard)){ echo $standard; } ?>" disabled="">
                       <?php }?>

                      <select name="standard" id="standard" class="form-control" required="">
                        <option value="">Select From Class-To Class</option>


                    <?php foreach($class as $classname)
                        {

                        echo '<option value="'. $classname->tabinputtextid.'" '.$selected.'>'. $classname->tabinputtext.'</option>';
                                        
                         }
                        ?>  

                         
                      </select>
                  </div>
                  <div class="form-group col-md-3">
                    <label> End Date <span style="color: red;">*</span></label>

                    <input type="date" class="form-control required title-case text " name="enddate" id="enddate" value="<?php if(isset($enddate)){ echo $enddate; } ?>" placeholder=" Enter End Date" required="">
                  </div>
                  
                  <div class="form-group col-md-3">
                    <label>Tab Input Text <span style="color: red;">*</span></label>

                      <?php
                      if(isset($tabinputtextid)){?>

                       <input type="hidden" class="form-control required title-case text" name="tabinputtextid" id="tabinputtext" value="<?php if(isset($tabinputtextid)){ echo $tabinputtextid; } ?>" disabled="">
                       <?php }?>



                      <select name="tabinputtextid" id="tabinputtextid"class="form-control" required="">
                        <option value="">Select Input Text</option>


                    <?php foreach($tabinputtext as $tabinputtext)
                        {

                        echo '<option value="'. $tabinputtext->tabinputtextid.'" '.$selected.'>'. $tabinputtext->tabinputtext.'</option>';
                                        
                         }
                        ?>  

                         
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                    <label>Competition level <span style="color: red;">*</span></label>

                      <?php
                      if(isset($levelid)){?>

                       <input type="hidden" class="form-control required title-case " name="levelid" id="level" value="<?php if(isset($levelid)){ echo $levelid; } ?>" disabled="">
                       <?php }?>



                      <select name="levelid" id="levelid"class="form-control" required="">
                    <option value="">Select Level</option>
         
                      <?php foreach($level as $level)
                        {

                        echo '<option value="'. $level->levelid.'" '.$selected.'>'. $level->levelname.'</option>';
                                        
                         }
                        ?>  

                     
                  </select>
                  </div>
                   <div class="form-group col-md-3">
                    <label>From Age <span style="color: red;">*</span></label>

                    <input type="text" min="0" maxlength="2"   class="form-control required title-case text notext" name="fromage" id="fromage" value="<?php if(isset($fromage)){ echo $fromage; } ?>" placeholder="From Age " required="">
                  </div>
                   <div class="form-group col-md-3">
                    <label>To Age <span style="color: red;">*</span></label>

                    <input type="text" min="0" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57"  class="form-control required title-case text notext " name="toage"  maxlength="2"  id="toage" value="<?php if(isset($toage)){ echo $toage; } ?>" placeholder=" To Age" required="">
                  </div>
                  <div class="col-md-12">
                    <label>Participant Type</label>
                  <div class="form-group row"> 
                      <?php  if(empty($gender)){$gender="";} ?>
                  <div class="radio col-md-2">
                    <label><input type="radio" name="gender" value="3" <?php if($gender=="3") { echo "checked";} ?>> All</label>
                  </div>
                  <div class="radio col-md-2">
                    <label><input type="radio" name="gender" value="1" <?php if($gender=="1") { echo "checked";} ?>> Male</label>
                  </div>
                  <div class="radio col-md-2">
                    <label><input type="radio" name="gender" value="2" <?php if($gender=="3") { echo "checked";} ?> > Female</label>
                  </div>
                  </div>
                  </div>
                    <div class="form-group col-md-6">
                    <label>Points <span style="color: red;">*</span></label>

                    <input type="number" min="0" step="1" oninput="validity.valid||(value='')" class="form-control required title-case text notext " name="points" id="points" value="<?php if(isset($points)){ echo $points; } ?>" placeholder=" Enter Points" required="">
                  </div>
                   <div class="form-group col-md-6">
                    <label>Conversion Points <span style="color: red;">*</span></label>

                    <input type="number" min="0" step="1" oninput="validity.valid||(value='')" class="form-control required title-case text notext " name="conversionpoints" id="conversionpoints" value="<?php if(isset($conversionpoints)){ echo $conversionpoints; } ?>" placeholder=" Enter Conversion Points" required="">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Competition User Type</label>

                    <?php
                      if(isset($competitionusertype)){?>

                       <input type="hidden" class="form-control required title-case text" name="competitionusertype" id="competitionuser" value="<?php if(isset($competitionusertype)){ echo $competitionusertype; } ?>" disabled="">
                       <?php }?>
                    <select name="competitionusertype" id="competitionusertype"class="form-control" >
                    <option value="">Competition User Type</option>
                    <option value="1">All</option>
                    <option value="2">one to one</option>
                   
                  </select>
                  </div>
                     
                  
                  <div class="form-group col-md-6">
                    <label>Competition Image <span style="color: red;">*</span></label>

                 <input type="file" id="photo" name="photo" onchange="readURL(this);"  />

                 <?php
                 if(isset($photo)){?>
                  <img id="blah" src="<?php if(isset($photo)){ echo base_url();?>assets/images/competition/<?php echo $photo; } ?>" alt="" height="150px" width="150px" />

                   <input type="hidden" name="old_photo" value="<?php if(isset($photo)){ echo $photo; } ?>"> 

                  <?php }?>


                  </div>
               
                   <div class="form-group col-md-12">
                    <label>Terms and Conditions <span style="color: red;">*</span></label>

                    <textarea class="textarea" name="termsandconditions" id="termsandconditions" placeholder="Enter Terms and Conditions" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required=""><?php if(isset($termsandconditions)){ echo $termsandconditions; } ?></textarea>
                   </div>
                 
                    <div class="form-group col-md-12">
                    <label>Instructions <span style="color: red;">*</span></label>

                    <textarea class="textarea" name="instruction" id="instruction" placeholder="Enter Instruction" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required=""><?php if(isset($instruction)){ echo $instruction; } ?></textarea>
                   </div>
                     <div class="form-group col-md-12">
                    <label>File Format</label>

                    <?php
                      if(isset($file_format)){?>

                       <input type="hidden" class="form-control required title-case text" name="file_format" id="fileformat" value="<?php if(isset($file_format)){ echo $file_format; } ?>" disabled="">
                       <?php }?>
                    <select name="file_format" id="file_format"class="form-control" >
                   
                    <option value="1">Document File / PowerPoint file</option>
                    <option value="2">Audio File</option>
                    <option value="3">Video File</option>
                    <option value="4">Image File</option>
                   
                  </select>
                  </div>
                  <div class="form-group col-md-12">
                    <label>Options</label>

                    <div class="form-check">

                       <div class="row uploadfile">
                        <div class="col-md-4">
                          <?php  if(empty($uploadfile)){$uploadfile="";} ?>
                        <input type="checkbox" id="uploadfile" name="uploadfile" value="1" <?php if($uploadfile=="1") { echo "checked";} ?> > Upload File
                        </div>
                        </div> 
                         <div class="row upload_audio">
                        <div class="col-md-4">
                          <?php  if(empty($upload_audio)){$upload_audio="";} ?>
                        <input type="checkbox" id="upload_audio" name="upload_audio" value="1" <?php if($upload_audio=="1") { echo "checked";} ?> > Upload Audio
                        </div>
                        </div> 
                         <div class="row upload_vedio">
                        <div class="col-md-4">
                          <?php  if(empty($upload_vedio)){$upload_vedio="";} ?>
                        <input type="checkbox" id="upload_vedio" name="upload_vedio" value="1" <?php if($upload_vedio=="1") { echo "checked";} ?> > Upload Video
                        </div>
                        </div> 
              
                       <div class="row upload_image">
                        <div class="col-md-4">
                          <?php  if(empty($upload_image)){$upload_image="";} ?>
                        <input type="checkbox" id="upload_image" name="upload_image" value="1" <?php if($upload_image=="1") { echo "checked";} ?> > Upload Image
                        </div>
                        </div><br>
                        <div class="row" >
                          <div class="col-md-2">
                             <?php  if(empty($email)){$email="";} ?>
                        <input type="checkbox" id="email"  name="email" value="1" <?php if($email=="1") { echo "checked";} ?>> E-mail </div><div class="col-md-10"><input type="email" class="form-control required title-case text " name="emailaddress" id="emailaddress" value="<?php if(isset($emailaddress)){ echo $emailaddress; } ?>" placeholder=" Enter E-mail Address" ></div>
                      </div><br>
                       <div class="row">
                          <div class="col-md-2">
                             <?php  if(empty($whatsapp)){$whatsapp="";} ?>
                        <input type="checkbox" id="whatsapp" name="whatsapp" value="1"<?php if($whatsapp=="1") { echo "checked";} ?> > Whatsapp  </div><div class="col-md-10"><input type="text" class="form-control required title-case text " name="whatsappnumber" id="whatsappnumber" maxlength="10" minlength="10" value="<?php if(isset($whatsappnumber)){ echo $whatsappnumber; } ?>" placeholder=" Enter Whatsapp Number" ></div>
                      </div>

                    </div>
                   </div>

 

                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <?php if(isset($update)){ ?>
                    <button id="btn_update" type="submit" class="btn btn-primary">Update </button>
                  <?php } else{ ?>
                    <button id="btn_save"  type="submit" class="btn btn-success px-4">Add</button>
                  <?php } ?>
                  <a href="<?php echo base_url() ?>User/competition_list" class="btn btn-default ml-4">Cancel</a>
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
  <script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> -->
  
  <script>
   
   $('.pis').bind("click" , function () {
          $('#photo').click();
   });
   
    function readURL(input) {
              if (input.files && input.files[0]) {
                  var reader = new FileReader();

                  reader.onload = function (e) {
                      $('#blah')
                          .attr('src', e.target.result);
                  };

                  reader.readAsDataURL(input.files[0]);
              }

</script>
  <script>
$(document).ready(function(){

  var competitiontype = $('#competitiontype').val();
 $("#competitiontypeid option[value='"+competitiontype+"']").attr("selected","selected");

 var classname = $('#classname').val();
 $("#standard option[value='"+classname+"']").attr("selected","selected");

 var tabinputtext = $('#tabinputtext').val();
 $("#tabinputtextid option[value='"+tabinputtext+"']").attr("selected","selected");

 var levelid = $('#level').val();
 $("#levelid option[value='"+levelid+"']").attr("selected","selected");

 var competitionusertype = $('#competitionuser').val();
 $("#competitionusertype option[value='"+competitionusertype+"']").attr("selected","selected");

 // var district = $('#DistrictId').val();
 // $("#districtid option[value='"+district+"']").attr("selected","selected");

}); 
</script>

<!--  <script type="text/javascript">
  
$.validator.addMethod('le', function(value, element, param) {
      return this.optional(element) || value <= $(param).val();
}, 'Invalid value');

$('form').validate({
  rules: {
            points: {le: '#conversionpoints'},
            // fieldName2: {ge: '#fieldID1'},
             // ...
      },
      messages: {
            points: {le: 'Must be less than or equal to conversionpoints'},
            // fieldName2: {ge: 'Must be greater than or equal to field 1'},
            // ...
      }
});


</script> -->
 <script type="text/javascript">
  $(document).ready(function(){

    $(".uploadfile").show();
    $(".upload_audio").hide();
    $(".upload_image").hide();
    $(".upload_vedio").hide();

    $('#file_format').on('change', function() {
      if ( this.value == '2')
      {
        $(".uploadfile").hide();
        $(".upload_audio").show();
        $(".upload_image").hide();
        $(".upload_vedio").hide();
      }
      else if(this.value == '3'){
        $(".uploadfile").hide();
        $(".upload_audio").hide();
        $(".upload_image").hide();
        $(".upload_vedio").show();
      }else if(this.value == '4'){
        $(".uploadfile").hide();
        $(".upload_audio").hide();
        $(".upload_image").show();
        $(".upload_vedio").hide();
      }else
      {
        $(".uploadfile").show();
        $(".upload_audio").hide();
        $(".upload_image").hide();
        $(".upload_vedio").hide();
      }
    });
});
</script> 
<!-- <script type="text/javascript">
  $('.numinput').on('input', function() {
      this.value = this.value.replace(/(?!^-)[^0-9.]/g, "").replace(/(\..*)\./g, '$1'); 
});
</script>
 -->

</body>
</html>
