<?php  
$quizweb_user_id = $this->session->userdata('quizweb_user_id');
$user_list = $this->Website_Model->get_list_by_id('user_id',$quizweb_user_id,'','','','','user');
?>


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
                    $upload = $value->uploadfile;
                    $email = $value->email;
                    $whatsapp = $value->whatsapp;

                  ?>
              
                 <div class="row mb-4">
                    <div class="col-md-3 m-4" >
                    <img src="<?php echo base_url("assets/images/competition/".$value->photo);?>"height="350px" width="300px"/>
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
                          <?php echo $value->subjectstextarea; ?>
                     </div>
                      <div class="col ml-4" >
                         <label class="text-dark labelSC">Competition Level : </label>
                         <?php echo $value->levelname; ?>
                     </div>
                      <div class="col ml-4" >
                         <label class="text-dark labelSC">Class : </label>
                         <?php echo $value->tabinputtext; ?>
                     </div>
                       <div class="col ml-4" >
                         <label class="text-dark labelSC">End Date : </label>
                         <?php echo $value->enddate; ?>
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
                                    <a href="https://wa.me/91<?php echo $value->whatsappnumber; ?>?text=I%20am%20interested%20in%20your%20competition"><img src="<?php echo base_url();?>assets/images/whatsapp.jpg" height="40px" width="40px"/></a>
                                  </div>
                                <?php }?>
                                 <?php if($email=='1') {?>
                                   <div class="form-group col-md-1">
                                  <a href = "mailto: abc@example.com"><img src="<?php echo base_url();?>assets/images/email.jpg" height="45px" width="45px"/></a>
                                  </div>
                                <?php }?>
                                 <?php if($upload=='1') {?>
                                   <!-- <form id="form_action" name="form_action" role="form" action="WebsiteController/competition_uploadfile" method="post" enctype="multipart/form-data"> -->
                                    <div class="form-group col-md-10">

                                   <input type="hidden" id="competitionid" name="competitionid" value="<?php echo $value->competitionid; ?>"  />

                                   <input type="file" id="uploadfile" name="uploadfile"   />

                         
                                    <!-- <img id="blah" src="<?php if(isset($uploadfile)){ echo base_url();?>assets/images/competition/<?php echo $uploadfile; } ?>" alt="" height="150px" width="150px" /> -->

                          

                                 <!--  <div class="button11" id="button-6">
                                     <div id="spin"></div>
                                     <a href="#" id="btn_save" type="submit" >Submit</a>
                                  </div> -->

                                    <button id="btn_save"  type="submit" class="btn btn-primary px-4">Submit</button>


                                    </div>
                                  <!-- </form> -->
                                <?php  } ?>
                                  </div>

                             
                             <!--   <a href="<?php  echo base_url(); ?>WebsiteController/star_competion/<?php echo $value->competitionid ?>" class="btn btn-info">Start</a> -->
                            <?php } ?>


                             </form>
                     </div>
                     

                   </div>
                 </div>
              
                 
               <?php } ?>
             
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
 <!--  <script>
   
   $('.pis').bind("click" , function () {
          $('#uploadfile').click();
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

</script> -->
 </body>
</html>
