<?php  
$quizweb_user_id = $this->session->userdata('quizweb_user_id');
$user_list = $this->Website_Model->get_list_by_id('user_id',$quizweb_user_id,'','','','','user');
?>
<style type="text/css">
  /*label .subject{
    margin-top: 0px!important; 
    margin-bottom: -20px!important;
  }*/
  label .subject {
    margin-bottom: -20px!important;
}
</style>
<style type="text/css">
  #toast-container{
  
  }
  /*.profileerr .toast-top-right{

    top:50%;
    right: 22%;
  }*/
  .toast-top-right{

    top:50%;
    right: 30%;
  }
    .toast {
    width: 100% !important;
    max-width: 600px!important;
  
    font-size: 22px!important;
   
   }
</style>
<!DOCTYPE html>
<html>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="competitionwrapper"  style="background-image:url('<?php echo base_url(); ?>/assets/images/17973908.jpg');background-blend-mode: overlay;
    background-repeat: no-repeat;
    background-size: cover;
    background-color: #ecf1eabf;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 mt-1">
            <!-- <h4>PARTICIPATION PROFILE INFORMATION</h4> -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12 text-black" style="font-size: 16px; font-weight: 400;">
            <!-- general form elements -->
           <div class="">
<!--             <div class="card-header "> -->
            
              <!-- <h5 class="card-title text-center h4" style="color: crimson;"><i class="fa fa-list"></i> 
                Competition Information
              </h5> -->
             <!--  <div class="card-tools col-md-2 " >
                <a href="add_profile" class="btn btn-sm btn-block btn-primary "  >Add Participation</a>
              </div> -->
            <!-- </div> -->
            <!-- /.cardd-header -->
              <div class="">
               
                 
                <?php foreach ($competition_list as $value) { 
                    
                    $comptype = $value->competitiontypeid;
                    $competitionid = $value->competitionid;
                    $upload = $value->uploadfile;
                    $email = $value->email;
                    $whatsapp = $value->whatsapp;
                    $file_format = $value->file_format;
                    $upload_audio = $value->upload_audio;
                    $upload_vedio = $value->upload_vedio;
                    $upload_image = $value->upload_image;
                    $file_size = $value->file_size;

// print_r($file_size);
// print_r($upload_audio);
// print_r($upload_vedio);
// print_r($upload_image);

                  ?>
              
                 <div class="row mb-4">
                    <div class="col-md-3 m-4" >
                    <img src="<?php echo base_url("assets/images/competition/".$value->photo);?>"height="330px" width="300px" style="border-radius: 10px;"  />
                   </div>
                   <div class="col-md-7 m-4 ">
                      <div class="col ml-4 mb-4 userSTitle" style="font-size: 30px;font-weight: 600;color: #225dca;" >
                         <?php echo $value->title; ?>
                         
                     </div>
                     <div class="col ml-4" >
                          <label class="text-dark labelSC">Competition Type : </label>
                          <?php echo $value->competitiontype; ?>
                     </div>
                      <div class="col ml-4" >
                          <label class="text-dark labelSC">Competition Subject : </label>
                           <label class="subject" style="margin-bottom: -20px!important;"><?php echo $value->subjectstextarea; ?></label>
                     </div>
                   
                      <div class="col ml-4" >
                         <label class="text-dark labelSC">Class : </label>
                         <?php echo $value->tabinputtext; ?>
                     </div>
                       <div class="col ml-4" >
                         <label class="text-dark labelSC">End Date : </label>
                         <?php $newDate = date("d-m-Y", strtotime($value->enddate));    echo $newDate; ?>
                     </div>
                       <div class="col ml-4" >
                         <label class="text-dark labelSC">Age : </label>
                          <label>From </label>
                         <?php echo $value->fromage; ?>
                          <label>To </label>
                         <?php echo $value->toage; ?>
                     </div>

                   </div>
                 </div>
                 <div class="row mb-4">
                    <div class="col-md-12 ml-4 " >
                         <label class="labelS">Terms and Conditions </label><br>
                         <?php echo $value->termsandconditions; ?>
                     </div>
                 </div>
                  <div class="row mb-4">
                    <div class="col-md-12 ml-4" >
                         <label class="labelS">Instructions</label><br>
                         <?php echo $value->instruction; ?>
                     </div>
                 </div>
                     <div class="col-ml-4" style="margin-left: 40px;margin-top: 20px;">
                     <form id="form_action" role="form" action="<?php echo base_url(); ?>WebsiteController/competition_uploadfile" method="post" enctype="multipart/form-data">

                           <?php if($comptype=='1'){ ?>
                             
                           <?php  if(empty($check_quiz_submit)) { 
                                // print_r($check_quiz_submit)
                                ?>
                              
                               <div class="button11" id="button-6">
                                     <div id="spin"></div>
                                     <a href="<?php  echo base_url(); ?>WebsiteController/star_competion/<?php echo $value->competitionid ?>"  >Start</a>
                                </div>
                             <?php  } ?>                      

                                 

                            
                              <!--  href="<?php  echo base_url(); ?>WebsiteController/star_competion/<?php echo $value->competitionid ?>" -->


                          
                                 
                             <?php }else {?>
                              <div class="row text-left">
                                
                                <?php if($whatsapp=='1') {?>
                                   <div class="form-group col-md-1">
                                    <a href="https://wa.me/91<?php echo $value->whatsappnumber; ?>?text=I%20am%20interested%20in%20your%20competition" target="_blank" ><img src="<?php echo base_url();?>assets/images/whatsapp.jpg"  height="40px" width="40px"/></a>
                                  </div>
                                <?php }?>
                                 <?php if($email=='1') {?>
                                   <div class="form-group col-md-1">
                                  <a href = "mailto: abc@example.com"><img src="<?php echo base_url();?>assets/images/email.jpg" height="45px" width="45px"/></a>
                                  </div>
                                <?php }?>
                                  <div class="form-group col-md-10">
                                      <input type="hidden" id="competitionid" name="competitionid" value="<?php echo $value->competitionid; ?>"  />

                               

                                <?php 
                                  
                                  if($file_format=='2'){ 

                                 if($upload_audio=='1') {?>
                                  
                                 <!--    <audio  src="< ?php echo base_url(); ?>/assets/images/competition_audio/< ?php echo $uploadaudio; ?>" controls></audio> -->

                                 <!--  < ?php if($this->session->flashdata('filesize_error')){
                                           echo 'Please Upload File is'.$file_size.'MB' ;
                                        
                                  } ?> -->
                                  <input type="hidden" id="upload_audio1" name="file_format" value="<?php echo $file_format; ?>" />

                                  <input type="hidden" id="file_size1" name="file_size" value="<?php echo $file_size; ?>" />


                                  <!--   <div class="form-group"> -->
                                      <!-- < ?php if(empty(var)) { 

                                          // print_r($uploadaudio);
                                       ?> -->
                                     <input type="file" id="upload_audio" onchange="previewAudio(this); Validate_audio(this);" name="upload_audio" accept="audio/*" required/>



                                   <!-- <  ?php } ?> -->

                             <p class="text-primary" style="position: absolute;">Note:Only .mp3, .ogg, .webm Audio Files are allowed </p>

                                                
                                <?php  } }else if($file_format=='3'){?>
                                 <?php if($upload_vedio=='1') {?>

                                    <!-- <div class="form-group "> -->
                                       <input type="hidden" id="upload_vedio1" name="file_format" value="<?php echo $file_format; ?>" />
                                       <input type="hidden" id="file_size2" name="file_size" value="<?php echo $file_size; ?>" />

                                     <input type="file" id="upload_vedio" name="upload_vedio" onchange="Validate_video(this);"  accept="video/*" required/>

                                      <p class="text-primary" style="position: absolute;">Note:Only .mp4, .3pg, .mkv, .wmv Video Files are allowed </p>
                                    <!-- </div> -->
                                
                                <?php  } }else if($file_format=='4'){?>

                                <?php if($upload_image=='1') {?>

                                    <!-- <div class="form-group"> -->
                                      <input type="hidden" id="upload_image1" name="file_format" value="<?php echo $file_format; ?>" />
                                      <input type="hidden" id="file_size3" name="file_size" value="<?php echo $file_size; ?>" />

                                     <input type="file" id="upload_image" name="upload_image" onchange="ValidateSingleInput(this);" accept="image/*" required />
                                    <!-- </div> -->

                                     <p class="text-primary" style="position: absolute;">Note:Only .jpg, .jpeg, .png Image Files are allowed </p>
                                
                                <?php  } }else{?>
                                    <?php if($upload=='1') {?>

                                    <!-- <div class="form-group "> -->
                                       <input type="hidden" id="uploadfile1" name="file_format" value="<?php echo $file_format; ?>" />
                                       <input type="hidden" id="file_size4" name="file_size" value="<?php echo $file_size; ?>" />

                                     <input type="file" id="uploadfile" name="uploadfile" onchange="Validate_file(this);" required />
                                    <!-- </div> -->

                                    <p class="text-primary" style="position: absolute;">Note:Only .pdf, .doc, .docx File are allowed </p>
                                
                                <?php  } }?>
                                    <!-- <img id="blah" src="<?php if(isset($uploadfile)){ echo base_url();?>assets/images/competition/<?php echo $uploadfile; } ?>" alt="" height="150px" width="150px" /> -->
                                    <!-- <div class="form-group"> -->
                                       
                                        <button id="btn_save" type="submit" class="btn btn-primary px-4">Submit</button>
                                     
                                      
                                      
                                   <!--  <button id="btn_save"  type="submit" class="btn btn-primary px-4">Submit</button> -->
                                  <!-- </div> -->


                                   
                                  </div>
                                 
                             
                             <!--   <a href="<?php  echo base_url(); ?>WebsiteController/star_competion/<?php echo $value->competitionid ?>" class="btn btn-info">Start</a> -->
        

                            <?php } ?>

                            <?php if(empty($check_userscore_exists)){}else{ ?>
                                <div class="button11" id="button-6">
                                 <div id="spin"></div>
                                 <a href="<?php echo base_url(); ?>WebsiteController/after_user_submitted_quiz_display/<?php echo $competitionid; ?>/<?php echo $quizweb_user_id; ?>" >view Result</a>
                                </div>
                              <?php } ?>
                              <!-- after_user_submitted_quiz_display/'.$competition_id.'/'.$user_id -->
<!-- 
                                 <a id="btn_save" type="submit" class="btn btn-primary px-4">view Result</a> -->

                             </form>

                            
                              <div class="col-md-12 mt-5">
                                <?php if($comptype!='1'){ ?>
                                     <!-- < ?php 
                                      if($file_format=='1'){
                                 
                                    if(empty($uploadfile)) { 
                                    }else{

                                          // print_r($uploadaudio);
                                       ?>
                                         <! -- <input type="" name="" value="< ?php echo $uploadvedio; ?>"> -->

                                        <!-- <iframe src="< ?php echo base_url(); ?>/assets/images/competition_files/< ?php echo $uploadfile; ?>" style="width:100%;height:700px;"></iframe>  -->

                                        <!--  <iframe src="< ?php echo base_url(); ?>/assets/images/competition_files/< ?php echo $uploadfile; ?>" frameborder="0" width="960" height="749" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe> 
   
                                    
                                    < ?php } } ?> -->

                                    <?php 
                                    if($file_format=='2'){
                                    if(empty($uploadaudio)) {
                                    }else{ 

                                          // print_r($uploadaudio);
                                       ?>
                                       <!-- <input type="" name="" value="<?php echo $uploadaudio; ?>"> -->
                                     <audio id="test3" src="<?php echo base_url(); ?>/assets/images/competition_audio/<?php echo $uploadaudio; ?>" controls></audio>
                                     <?php } } ?>

                                     <?php 
                                      if($file_format=='3'){
                                 
                                    if(empty($uploadvedio)) { 
                                    }else{

                                          // print_r($uploadaudio);
                                       ?>
                                         <!-- <input type="" name="" value="<?php echo $uploadvedio; ?>"> -->
                                         <video width="320" height="240" controls>
                                           <source src="<?php echo base_url(); ?>/assets/images/competition_video/<?php echo $uploadvedio; ?>" > 
                                          
                                        </video>

                                    
                                    <?php } } ?>

                                      <?php 
                                      if($file_format=='4'){
                                 
                                    if(empty($uploadimage)) { 
                                    }else{

                                          // print_r($uploadaudio);
                                       ?>
                                       <!-- <?php echo $competitionid; ?> -->
                                          <form id="form_action" role="form" action="<?php echo base_url(); ?>WebsiteController/download/<?php echo $competitionid; ?>" method="post" >
                                    
                                          <img id="blah" src="<?php echo base_url(); ?>/assets/images/competition_images/<?php echo $uploadimage; ?>" alt="" width="320" height="240" />
                                            <br><br>
                                           <button id="" type="submit"  class="btn btn-primary"><span class="glyphicon glyphicon-download-alt"></span>Download </button>
                                         </form>

                                    <?php } } }?>
                                     </div>

                     </div>
                     

                   </div>
                 </div>
              
                 
               <?php } ?>
             
              </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          </div>
       </section>

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
  <!-- </div> -->
   <script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>
   <script>
   
   $('.pis').bind("click" , function () {
          $('#upload_image').click();
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
<script type="text/javascript">
  <?php if($this->session->flashdata('filesize_error')){ ?>
    $(document).ready(function(){ 
       
       toastr.error("<?php echo $this->session->flashdata('filesize_error'); ?>");
         
   });
  <?php } ?>
</script>
<script type="text/javascript">
  function previewAudio(input)
    {
        if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
        $('#test3').attr('src', e.target.result);
        }
            reader.readAsDataURL(input.files[0]);
        }

    }
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
<script type="text/javascript">
  var _validFile1 = [".mp3", ".ogg", ".webm"];    
function Validate_audio(oInput) {
    if (oInput.type == "file") {
        var sFileName = oInput.value;
         if (sFileName.length > 0) {
            var blnValid = false;
            for (var j = 0; j < _validFileExtensions.length; j++) {
                var sCurExtension = _validFile1[j];
                if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                    blnValid = true;
                    break;
                }
            }
             
            if (!blnValid) {
                alert("File is invalid, allowed extensions are: " + _validFile1.join(", "));
                oInput.value = "";
                return false;
            }
        }
    }
    return true;
}
</script>
<script type="text/javascript">
  var _validFile2 = [".pdf", ".doc", ".docx"];    
function Validate_file(oInput) {
    if (oInput.type == "file") {
        var sFileName = oInput.value;
         if (sFileName.length > 0) {
            var blnValid = false;
            for (var j = 0; j < _validFileExtensions.length; j++) {
                var sCurExtension = _validFile2[j];
                if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                    blnValid = true;
                    break;
                }
            }
             
            if (!blnValid) {
                alert("File is invalid, allowed extensions are: " + _validFile2.join(", "));
                oInput.value = "";
                return false;
            }
        }
    }
    return true;
}
</script>
 </body>
</html>
