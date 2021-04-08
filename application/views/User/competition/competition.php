<!DOCTYPE html>
<html>
<style type="text/css">
  .error{
    color: red;

  }
  #gender-error{
    position: absolute;
    top: 18px;
  }

</style>
 <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/> -->


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
                  <?php if(isset($update)){ ?>
                    <h3 class="card-title">Edit Competition</h3>
                  <?php }else{ ?>
                    <h3 class="card-title">Add Competition</h3>
                  <?php } ?>

                <div class="card-tools col-md-3 " >
                <a href="<?php echo base_url(); ?>User/competition_list" class="btn btn-sm btn-block btn-primary "  >Competition List</a>
              </div>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="form_action" name="comp_action1"  role="form" action="" method="post" enctype="multipart/form-data" autocomplete="off">
                <div class="card-body row">
                <div class="row">
                  <div class="form-group col-md-12">
                    <label>Competition Type <span style="color: red;">*</span></label>
                      <?php
                      if(isset($competitiontypeid)){?>

                       <input type="hidden" class="form-control required title-case text" name="competitiontype" id="competitiontype" value="<?php if(isset($competitiontypeid)){ echo $competitiontypeid; } ?>" disabled="">
                       <?php }?>

                       <?php if(isset($update)){ ?>

                 <select name="competitiontypeid" id="competitiontypeid" class="form-control competitiontypeid1" readonly>
                        <option value="">Select Competition Type</option>
                          <?php foreach($competitiontype as $competitiontype)
                          {

                          echo '<option value="'. $competitiontype->competitiontypeid.'" '.$selected.'>'. $competitiontype->competitiontype.'</option>';
                                         
                           }
                          ?>  
                       </select>
              <?php }else{ ?>
                 <select name="competitiontypeid" id="competitiontypeid" class="form-control" required>
                        <option value="">Select Competition Type</option>
                          <?php foreach($competitiontype as $competitiontype)
                          {

                          echo '<option value="'. $competitiontype->competitiontypeid.'" '.$selected.'>'. $competitiontype->competitiontype.'</option>';
                                         
                           }
                          ?>  
                       </select>
              <?php } ?>

                     
                  </div> 
                   <!--  <div class="form-group col-md-12" id="quiz">
                      <label>Quiz Subject </label>
                    <input type="text" class="form-control required title-case text txtOnly" name="quizsubject" id="quizsubject" value="< ?php if(isset($quizsubject)){ echo $quizsubject; } ?>" placeholder="Enter Quiz Subject" >
                  </div> -->
                  <div class="form-group col-md-12">
                    <label>Competition Title <span style="color: red;">*</span></label>
                    <input type="text"  class="form-control required title-case text " name="title" id="title" onkeypress="return blockSpecialChar(event)"  value="<?php if(isset($title)){ echo $title; } ?>"  placeholder="Enter title" required >
                  </div>
                  
                  <div class="form-group col-md-12">
                    <label>Competition Sub Title <span style="color: red;">*</span></label>

                    <input type="text" class="form-control" name="subtitle" id="subtitle" onkeypress="return blockSpecialChar(event)" value="<?php if(isset($subtitle)){ echo $subtitle; } ?>" placeholder="Enter sub title" required>
                  </div>
                   <div class="form-group col-md-12">
                    <label>Competition Subject</label>

                      <textarea class="form-control" name="subjectstextarea" id="subjectstextarea" placeholder="Enter Competition Subject" rows="6" cols="50" ><?php if(isset($subjectstextarea)){ echo $subjectstextarea; } ?></textarea>

                    </div>
                
                   <div class="form-group col-md-4">
                    <label>Class <span style="color: red;">*</span></label>

                      <?php
                      if(isset($standard)){?>

                       <input type="hidden" class="form-control title-case text" name="classname" id="classname" value="<?php if(isset($standard)){ echo $standard; } ?>" disabled="">
                       <?php }?>


                       <?php if(isset($update)){ ?>

                         <select name="standard" id="standard" onchange="change();" class="form-control standard1" readonly>
                        <option value="">Select From Class-To Class</option>
                       <?php foreach($class as $classname)
                        {

                        echo '<option value="'. $classname->tabinputtextid.'" '.$selected.'>'. $classname->tabinputtext.'</option>';
                                        
                         }
                        ?>    
                      </select>
                        <?php }else{ ?>

                          <select name="standard" id="standard" onchange="change();" class="form-control" required >
                            <option value="">Select From Class-To Class</option>
                           <?php foreach($class as $classname)
                            {

                            echo '<option value="'. $classname->tabinputtextid.'" '.$selected.'>'. $classname->tabinputtext.'</option>';
                                            
                             }
                            ?>    
                          </select>
                           <p class="standval mb-0" id="standval" style="font-size:14px;  color: red;"></p>
                            <?php } ?>


                      
                  </div>
                 
                  
                  <div class="form-group col-md-4">
                    <label>Tab Input Text <span style="color: red;">*</span></label>

                      <?php
                      if(isset($tabinputtextid)){?>

                       <input type="hidden" class="form-control required title-case text" name="tabinputtextid1" id="tabinputtext" value="<?php if(isset($tabinputtextid)){ echo $tabinputtextid; } ?>" disabled="">
                       <?php }?>



                      <select name="tabinputtextid" id="tabinputtextid" class="form-control tabinputtextid" readonly="readonly" >
                        <option value="">Select Input Text</option>


                    <?php foreach($tabinputtext as $tabinputtext)
                        {

                        echo '<option value="'. $tabinputtext->tabinputtextid.'" '.$selected.'>'. $tabinputtext->tabinputtext.'</option>';
                                        
                         }
                        ?>  

                         
                      </select>
                    </div>
                   <!--  <p  style="color: blue; position: absolute;top: 740px;" class="ml-2 pl-1 mt-2 border border-dark">Note: Select same option from class and tab input text dropdown lists.</p>
                  -->
                     <div class="form-group col-md-4">
                    <label> End Date <span style="color: red;">*</span></label>

                   <!--  <input type="text" pattern="\d{1,2}/\d{1,2}/\d{4}" class="form-control required title-case text datepicker" data-provide="datepicker" name="enddate" id="enddate" value="<?php if(isset($enddate)){ echo $enddate; } ?>" placeholder=" Enter End Date" required> -->
                  
                    <input class="form-control date_input" data-date-format="dd/mm/yyyy" id="enddate"  name="enddate" value="<?php if(isset($enddate)){ echo $enddate; } ?>" placeholder="dd/mm/yyyy" required>
                  </div>
                </div>
                <br>
                <div class="row">
                  <!-- hidden field -->
                    <div class="form-group col-md-6" hidden>
                    <label>Competition level <span style="color: red;">*</span></label>

                      <?php
                      if(isset($levelid)){?>

                       <input type="hidden" class="form-control required title-case " name="levelid" id="level" value="<?php if(isset($levelid)){ echo $levelid; } ?>" disabled="">
                       <?php }?>



                      <select name="levelid" id="levelid"class="form-control" >
                    <option value="">Select Level</option>
         
                      <?php foreach($level as $level)
                        {

                        echo '<option value="'. $level->levelid.'" '.$selected.'>'. $level->levelname.'</option>';
                                        
                         }
                        ?>  

                     
                  </select>
                  </div>
                   <div class="form-group col-md-6">
                    <label>From Age <span style="color: red;">*</span></label>

                    <input type="text" min="0" maxlength="2"   class="form-control required title-case text notext" name="fromage" id="fromage" value="<?php if(isset($fromage)){ echo $fromage; } ?>" placeholder="From Age" required readonly>
                  </div>
                   <div class="form-group col-md-6">
                    <label>To Age <span style="color: red;">*</span></label>

                    <input type="text" min="0" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57"  class="form-control required title-case text notext " name="toage"  maxlength="2"  id="toage" value="<?php if(isset($toage)){ echo $toage; } ?>" placeholder=" To Age" required readonly>
                  </div>
                  <div class="col-md-12">
                    <label>Participant Type <span style="color: red;">*</span></label>
                  <div class="form-group row "> 
                      <?php  if(empty($gender)){$gender="";} ?>

                        <?php if(isset($update)){ ?>
                   <div class="radio col-md-3">
                    <label><input type="radio" name="gender" value="3" <?php if($gender=="3") { echo "checked";} ?> required readonly> All</label>
                  </div>
                  <div class="radio col-md-3">
                    <label><input type="radio" name="gender" value="1" <?php if($gender=="1") { echo "checked";} ?> readonly> Male</label>
                  </div>
                  <div class="radio col-md-6">
                    <label><input type="radio" name="gender" value="2" <?php if($gender=="2") { echo "checked";} ?> readonly> Female</label>
                  </div>
                  <?php }else{ ?>
                    <div class="radio col-md-3">
                    <label><input type="radio" name="gender" value="3" <?php if($gender=="3") { echo "checked";} ?> required > All</label>
                  </div>
                  <div class="radio col-md-3">
                    <label><input type="radio" name="gender" value="1" <?php if($gender=="1") { echo "checked";} ?> > Male</label>
                  </div>
                  <div class="radio col-md-6">
                    <label><input type="radio" name="gender" value="2" <?php if($gender=="2") { echo "checked";} ?> > Female</label>
                  </div>
                  <?php } ?>

                  
                  <p  style="color: blue;" class="ml-2 mt-3 pl-1 border border-dark">Note: If select Female(18+) / Male (18+) / (All & other class options) from class dropdownlist then correspondingly select Female(18+) / Male (18+) / All from paticipant Type radiobuttons.</p>
                  </div>
                  </div>
                   
                   <!--  <div class="form-group col-md-6">
                    <label>Points <span style="color: red;">*</span></label>

                    <input type="number" min="0" step="1" oninput="validity.valid||(value='')" class="form-control required title-case text notext " name="points" id="points" value="< ?php if(isset($points)){ echo $points; } ?>" placeholder=" Enter Points" required>
                  </div>
                   <div class="form-group col-md-6">
                    <label>Conversion Points <span style="color: red;">*</span></label>

                    <input type="number" min="0" step="1" oninput="validity.valid||(value='')" class="form-control required title-case text notext " name="conversionpoints" id="conversionpoints" value="< ?php if(isset($conversionpoints)){ echo $conversionpoints; } ?>" placeholder=" Enter Conversion Points" required>
                  </div> -->
                  <div class="form-group col-md-6">
                    <label>Competition User Type <span style="color: red;">*</span> </label>

                    <?php
                      if(isset($competitionusertype)){?>

                       <input type="hidden" class="form-control required title-case text" name="competitionusertype" id="competitionuser" value="<?php if(isset($competitionusertype)){ echo $competitionusertype; } ?>" disabled="">
                       <?php }?>
                        <?php if(isset($update)){ ?>
                            <select name="competitionusertype" id="competitionusertype" class="form-control competitionusertype1" readonly>
                              <!-- disabled -->
                            <option value="">Competition User Type</option>
                            <option value="1">All</option>
                            <option value="2">one to one</option>
                           
                            </select>
                          <?php }else{ ?>
                            <select name="competitionusertype" id="competitionusertype" class="form-control" required>
                            <option value="">Competition User Type</option>
                            <option value="1">All</option>
                            <option value="2">one to one</option>
                           
                            </select>
                          <?php } ?>
                   
                  </div>
                     
                  
                  <div class="form-group col-md-6">
                    <label>Competition Image <span style="color: red;">*</span></label>

                   
               
<!-- onchange="readURL(this);" -->
                 <?php
                 if(isset($photo)){?>

                  <input type="file" id="photo" onchange="ValidateSingleInput(this); readURL(this);"  name="photo"  class="mb-2" />

                   

                  <img id="blah" src="<?php if(isset($photo)){ echo base_url();?>assets/images/competition/<?php echo $photo; } ?>" alt="" height="150px" width="150px" />

                   <input type="hidden" name="old_photo" value="<?php if(isset($photo)){ echo $photo; } ?>"> 

                  <?php }else{?>

                     <input type="file" id="photo" onchange="ValidateSingleInput(this); readURL(this);"  name="photo"  required="" />


                  <?php }?>
                   
                   <p  style="color: blue;" class="ml-2 pl-1 border border-dark mt-2">Note: Only .jpg, .jpeg, .png Image Files are allowed.</p>

                  </div>
               
                   <div class="form-group col-md-12">
                    <label>Terms and Conditions <span style="color: red;">*</span></label>

                    <textarea class="form-control" name="termsandconditions" id="termsandconditions" placeholder="Enter Terms and Conditions" rows="6" cols="50" required="required"><?php if(isset($termsandconditions)){ echo $termsandconditions; } ?></textarea>
                   </div>
                 
                    <div class="form-group col-md-12">
                    <label>Instructions <span style="color: red;">*</span></label>

                    <textarea class="form-control" name="instruction" id="instruction" placeholder="Enter Instruction" rows="6" cols="50" required="required"><?php if(isset($instruction)){ echo $instruction; } ?></textarea>
                   </div>
                     <div class="form-group col-md-12">
                    <label>File Format</label>

                    <?php
                      if(isset($file_format)){?>

                       <input type="hidden" class="form-control required title-case text file_format" name="file_format" id="fileformat" value="<?php if(isset($file_format)){ echo $file_format; } ?>" disabled="">
                       <?php }?>
                       <?php if(isset($update)){ ?>
                      <select name="file_format" id="file_format"class="form-control file_format1" readonly>
                        <option value="">Select File Format</option>
                       
                        <option value="1">Document File / PDF file</option>
                        <option value="2">Audio File</option>
                        <option value="3">Video File</option>
                        <option value="4">Image File</option>
                       
                      </select>
                      <?php }else{ ?>
                         <select name="file_format" id="file_format"class="form-control " >
                        <option value="">Select File Format</option>
                       
                        <option value="1">Document File / PDF file</option>
                        <option value="2">Audio File</option>
                        <option value="3">Video File</option>
                        <option value="4">Image File</option>
                       
                      </select>
                      <?php } ?>
                  

                  <p  style="color: blue;" class="ml-2 pl-1 border border-dark mt-2">Note: If select (Document file/ powerpoint File)/ Audio File/ Video File/ Image File then correspondingly checked checkbox of Upload.</p>

                  </div>
                    <div class="form-group col-md-12">
                    <label>File Size</label>
                     <?php
                      if(isset($file_size)){?>

                       <input type="hidden" class="form-control required title-case text " name="file_size" id="filesize" value="<?php if(isset($file_size)){ echo $file_size; } ?>" disabled="">
                       <?php }?>

                    <select name="file_size" id="file_size"class="form-control" >


                        <option value="">Select File Size</option>
                       
                        <option value="1">1 MB</option>
                        <option value="2">2 MB</option>
                        <option value="3">3 MB</option>
                        <option value="4">4 MB</option>
                        <option value="5">5 MB</option>
                        <option value="6">6 MB</option>
                        <option value="7">7 MB</option>
                        <option value="8">8 MB</option>
                        <option value="9">9 MB</option>
                        <option value="10">10 MB</option>
                       
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
                        <input type="checkbox" id="email"  name="email" value="1" <?php if($email=="1") { echo "checked";} ?>> E-mail </div>
                        <div class="col-md-10">
                          <input type="email" class="form-control  title-case text " pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="emailaddress" id="emailaddress" value="<?php if(isset($emailaddress)){ echo $emailaddress; } ?>"  placeholder=" Enter E-mail Address" disabled></div>
                      </div><br>
                       <div class="row">
                          <div class="col-md-2">
                             <?php  if(empty($whatsapp)){$whatsapp="";} ?>
                        <input type="checkbox" id="whatsapp" name="whatsapp" value="1"<?php if($whatsapp=="1") { echo "checked";} ?> > Whatsapp  </div>
                        <div class="col-md-10">

                          <input type="text"  min="0" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" class="form-control  title-case text " name="whatsappnumber" id="whatsappnumber" maxlength="10" minlength="10" value="<?php if(isset($whatsappnumber)){ echo $whatsappnumber; } ?>" placeholder=" Enter Whatsapp Number" disabled></div>

                      </div>

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
  <script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>
  <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>

<script type="text/javascript">
  <?php if($this->session->flashdata('checkstandard_error')){ ?>
    $(document).ready(function(){
      toastr.error('Competition already exists for this standard');
    });
  <?php } ?>



</script>

<script type="text/javascript">
  $(document).ready(function(){

   $('.competitiontypeid1').attr("style", "pointer-events: none;");
   $('.standard1').attr("style", "pointer-events: none;");
   $('.tabinputtextid').attr("style", "pointer-events: none;");
   $('.competitionusertype1').attr("style", "pointer-events: none;");
   $('.file_format1').attr("style", "pointer-events: none;");

        // $("#u_video").hide();
        // $("#u_image").hide();

    $('#file_format').on('change', function() {



      if (this.value == '1')
      {
        $("#file_size").prop('required',true);
      }
      else if(this.value == '2')
      {
        // alert("hii");
         $("#file_size").prop('required',true);
      }
      else if(this.value == '3')
      {
         $("#file_size").prop('required',true);
      }
      else if(this.value == '4')
      {
         $("#file_size").prop('required',true);
      }
      else
      {
         $("#file_size").prop('required',false);
       }
    });
});
</script>
<script>
   

  $('#standard').on('change',function(){
    // alert("hii");

     var comp = $('#standard').val();
     var title = $('#title').val();
     // alert(comp);
    
   
      $.ajax({
           url:"<?php echo base_url(); ?>User/check_standard_competition",
           method:"POST",
           data:{standard:comp,title:title},

           success:function(data)
            {   

               // alert(data);
               // console.log(data);
                 if(data != "true"){

                   // $('.competval').hide();

                 $('.standval').html("Competition already exists for this standard.");
                 $('.standval').show().delay(2000).fadeOut();
                 $('#standard').val('');
                 $('#tabinputtextid').val('');

                 }
                //  else{
                // // alert(data);
                //  $('.competval').html(data);
                //  $('#competitionid').val('');
                // }               
           }
         });
       // e.preventdefault();
  });

</script>

  <!-- <script src="https://code.jquery.com/jquery-2.1.4.js"></script> -->

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script> -->

<!-- datepicker dd/mm/yyyy -->
<script type="text/javascript">
        $(function () {
            /*--FOR DATE----*/
            var date = new Date();
            var today = new Date(date.getFullYear(), date.getMonth(), date.getDate()+1);

            //Date1
            $('#enddate').datepicker({
              format: 'dd-mm-yyyy',
              todayHighlight:'',
              startDate: today,
              endDate:0,
              autoclose: true
            });

        });
</script>


<!-- <script type="text/javascript">
  $(function(){

    // var t = new Date(currentdate.setMonth(currentdate.getMonth()-3));

    var dtToday = new Date();

    // alert(t);
    
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate() + 1;
    var year = dtToday.getFullYear();


    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var minDate = year + '-' + month + '-' + day;
    // alert(maxDate);
    $('#enddate').attr('min', minDate);
});
</script>  -->

<script type="text/javascript">
  
 
    // $('#enddate').datepicker({
        // weekStart: 1,
        // daysOfWeekHighlighted: "",
        // autoclose: true,
        // todayHighlight: true,
         // numberOfMonths: 3,
        // showButtonPanel: true,
        // minDate: dateToday
    // });
    // $('#enddate').datepicker();
//     $("#enddate").datepicker({
//     datesDisabled:
// });
//     $('.date_input').daterangepicker({
//     maxDate: new Date()
// })
// $( ".date_input" ).datepicker({ minDate: 0 });
</script>
  <script type="text/javascript">
  <?php if($this->session->flashdata('upload_error')){ ?>
    $(document).ready(function(){
      toastr.error('File not Uploaded ');
    });
  <?php } ?>
</script>
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

 var fileformat = $('#fileformat').val();
 $("#file_format option[value='"+fileformat+"']").attr("selected","selected");

var filesize = $('#filesize').val();
 $("#file_size option[value='"+filesize+"']").attr("selected","selected");

}); 



</script>

<script type="text/javascript">
        $(document).ready(function(){
 
            $('#standard').change(function(){ 

                var id=$(this).val();
        
                $.ajax({
                    url : "<?php echo base_url(); ?>User/fetch_class_age",
                    method : "POST",
                    data : {tabinputtextid: id},
                    // async : true,
                    // dataType : 'json',
                    success: function(data){
                        // alert(data);
                      
                          var a = JSON.parse(data);
                       
                          $("#fromage").val(a[0]['fromage']);
                          $("#toage").val(a[0]['toage']);
                        
 
                    }
                });
            
            }); 
             
        });
    </script>
    <script type="text/javascript">
      function change() {
  if (document.getElementById('standard').value == '1')
    document.getElementById("tabinputtextid").value = '1';
  else if (document.getElementById('standard').value == '2')
    document.getElementById("tabinputtextid").value = '2';
  else if (document.getElementById('standard').value == '3')
    document.getElementById("tabinputtextid").value = '3';
  else if (document.getElementById('standard').value == '4')
    document.getElementById("tabinputtextid").value = '4';
  else if (document.getElementById('standard').value == '5')
    document.getElementById("tabinputtextid").value = '5';
   else if (document.getElementById('standard').value == '6')
    document.getElementById("tabinputtextid").value = '6';
};
    </script>
    <script type="text/javascript">
      $('#tabinputtextid').change(function(e) {
       // alert('hii');
    e.preventDefault();
    // $("#txtSearch").datepicker("disable");
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

    $(".uploadfile").hide();
    $(".upload_audio").hide();
    $(".upload_image").hide();
    $(".upload_vedio").hide();

    $('#file_format').on('change', function() {
      if ( this.value == '2')
      {
        $(".uploadfile").hide();
        $(".upload_audio").show();
        $('#upload_audio').prop('checked', true);
        $('#upload_vedio').prop('checked', false);
        $('#upload_image').prop('checked', false);
        $('#uploadfile').prop('checked', false);
        $(".upload_image").hide();
        $(".upload_vedio").hide();
      }
      else if(this.value == '3'){
        $(".uploadfile").hide();
        $(".upload_audio").hide();
        $(".upload_image").hide();
        $(".upload_vedio").show();
        $('#upload_vedio').prop('checked', true);
        $('#upload_audio').prop('checked', false);
        $('#upload_image').prop('checked', false);
        $('#uploadfile').prop('checked', false);


      }else if(this.value == '4'){
        $(".uploadfile").hide();
        $(".upload_audio").hide();
        $(".upload_image").show();
        $('#upload_image').prop('checked', true);
        $('#upload_vedio').prop('checked', false);
        $('#upload_audio').prop('checked', false);
        $('#uploadfile').prop('checked', false);

        $(".upload_vedio").hide();
      }else if(this.value == '1')
      {
        $(".uploadfile").show();
        $('#uploadfile').prop('checked', true);
        $('#upload_image').prop('checked', false);
        $('#upload_vedio').prop('checked', false);
        $('#upload_audio').prop('checked', false);
        $(".upload_audio").hide();
        $(".upload_image").hide();
        $(".upload_vedio").hide();
      }else{
        $(".uploadfile").hide();
        $(".upload_audio").hide();
        $(".upload_image").hide();
        $(".upload_vedio").hide();
        $('#uploadfile').prop('checked', false);
        $('#upload_image').prop('checked', false);
        $('#upload_vedio').prop('checked', false);
        $('#upload_audio').prop('checked', false);
      }
    });
});
</script> 

<!-- <script src="trunk/dev/validation.js"></script> -->


<!-- <script type="text/javascript">
  $(function () {
 $('#file_format').change(function () {
   // var val = $(this).val();
   // alert(val);
   if($file_format)
   $('input[name="uploadfile"]').prop('checked', false);
   // $('input[name="uploadfile"][value=' + val + ']').prop('checked', true);

  });
});


</script> -->

<script type="text/javascript">
var checkBox = document.querySelector('input[name="email"]');
var textInput = document.querySelector('input[name="emailaddress"]');

// var checkBox1 = document.querySelector('input[name="whatsapp"]');
// var textInput1 = document.querySelector('input[name="whatsappnumber"]');


function toggleRequired() {

    if (textInput.hasAttribute('required') !== true) {
        textInput.setAttribute('required','required');
    }

    else {
        textInput.removeAttribute('required');  
    }

}


checkBox.addEventListener('change',toggleRequired,false);

</script>
<script type="text/javascript">
  jQuery(function($) {
    $('#email, #whatsapp').click(function() {
        var cb1 = $('#email').is(':checked');
        var cb2 = $('#whatsapp').is(':checked');
        $('#emailaddress').prop('disabled',!cb1);
        $('#whatsappnumber').prop('disabled', !cb2);
        // $('#color, #size, #model').prop('disabled', !cb2);    
    });
});
</script>
<script type="text/javascript">

var checkBoxW = document.querySelector('input[name="whatsapp"]');
var textInputW = document.querySelector('input[name="whatsappnumber"]');


function toggleRequired() {

    if (textInputW.hasAttribute('required') !== true) {
        textInputW.setAttribute('required','required');
    }

    else {
        textInputW.removeAttribute('required');  
    }

}


checkBoxW.addEventListener('change',toggleRequired,false);

</script>


 <script type="text/javascript">
 
  // Wait for the DOM to be ready
$(function() {

  jQuery.validator.addMethod("validate_email", function(value, element) {

    if (/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(value)) {
        return true;
    } else {
        return false;
    }
});
 
 
  $("form[name='comp_action1']").validate({

    // Specify validation rules
    rules: {

      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      // title: "required",
      // title: "required",
      // address: "required",
      // pin_code: "required",
     emailaddress: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        validate_email: true
      },
      
    },
    // Specify validation error messages
    messages: {
      // title: "Please enter user name",
      // title: "Please enter competition title",
      emailaddress: "Please enter a valid email address",
      // pin_code: "Please enter a valid pincode",
      // address: "Please enter Street Address"
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      // alert("hello");
      form.submit();
    }
  });
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