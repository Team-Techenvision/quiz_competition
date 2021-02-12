<?php  
$quizweb_user_id = $this->session->userdata('quizweb_user_id');
$user_list = $this->Website_Model->get_list_by_id('user_id',$quizweb_user_id,'','','','','user');
?>


<!DOCTYPE html>
<html>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper competitionwrapper"  style="background-image:url('<?php echo base_url(); ?>/assets/images/17973908.jpg');background-blend-mode: overlay;
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
          <div class="col-md-12 " >
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
                   <div class="col-md-7 m-4">
                      <div class="col ml-4 userSTitle" style="font-size: 30px;font-weight: 600;color: #225dca;" >
                         <?php echo $value->title; ?>
                         
                     </div>
                      <div class="col ml-4 userSSubtitle" >
                      <?php echo $value->subtitle; ?>
                     </div>
                     <div class="col-ml-4" style="margin-left: 40px;margin-top: 20px;">
                     <form id="form_action" role="form" action="" method="post" enctype="multipart/form-data">
                           <?php if($comptype=='2'){ ?>
                             
                              <div class="row text-left">
                                
                                <?php if($whatsapp=='1') {?>
                                   <div class="form-group col-md-2">
                                    <a href="https://wa.me/91<?php echo $value->whatsappnumber; ?>?text=I%20am%20interested%20in%20your%20competition"><img src="<?php echo base_url();?>assets/images/whatsapp.jpg" height="40px" width="40px"/></a>
                                  </div>
                                <?php }?>
                                 <?php if($email=='1') {?>
                                   <div class="form-group col-md-2">
                                  <a href = "mailto: abc@example.com"><img src="<?php echo base_url();?>assets/images/email.jpg" height="45px" width="45px"/></a>
                                  </div>
                                <?php }?>
                                 <?php if($upload=='1') {?>
                                    <div class="form-group col-md-12">
                                   <input type="file" id="photo" name="photo" onchange="readURL(this);" />

                                  <!--  <?php if(isset($photo)){?> -->
                                    <img id="blah" src="<?php if(isset($photo)){ echo base_url();?>assets/images/competition/<?php echo $photo; } ?>" alt="" height="150px" width="150px" />

                                  <!--   <?php }?> -->

                                  <div class="button11" id="button-6">
                                     <div id="spin"></div>
                                     <a href="#" id="btn_save" type="submit" >Submit</a>
                                  </div>

                                   <!--  <button id="btn_save"  type="submit" class="btn btn-success px-4">Submit</button> -->


                                    </div>
                                <?php  } ?>
                                  </div>

                                 

                            
                              <!--  href="<?php  echo base_url(); ?>WebsiteController/star_competion/<?php echo $value->competitionid ?>" -->


                             <?php }elseif ($comptype=='3') { ?>
                             

                              <div class="row text-left">
                                
                              <?php if($whatsapp=='1') {?>
                                   <div class="form-group col-md-2">
                                    <a href="https://wa.me/91<?php echo $value->whatsappnumber; ?>?text=I%20am%20interested%20in%20your%20competition"><img src="<?php echo base_url();?>assets/images/whatsapp.jpg" height="40px" width="40px"/></a>
                                  </div>
                                <?php }?>
                                 <?php if($email=='1') {?>
                                   <div class="form-group col-md-2">
                                  <a href="mailto:priyanka.techenvision@gmail.com"><img src="<?php echo base_url();?>assets/images/email.jpg" height="45px" width="45px"/></a>
                                  </div>
                                <?php }?>
                                 <?php if($upload=='1') {?>
                                    <div class="form-group col-md-12">
                                   <input type="file" id="photo" name="photo" onchange="readURL(this);" />

                                  <!--  <?php if(isset($photo)){?> -->
                                    <img id="blah" src="<?php if(isset($photo)){ echo base_url();?>assets/images/competition/<?php echo $photo; } ?>" alt="" height="150px" width="150px" />

                                  <!--   <?php }?> -->

                                  <div class="button11" id="button-6">
                                     <div id="spin"></div>
                                     <a href="#" id="btn_save" type="submit" >Submit</a>
                                  </div>

                                   <!--  <button id="btn_save"  type="submit" class="btn btn-success px-4">Submit</button> -->


                                    </div>
                                <?php  } ?>
                                  </div>

                                 
                             <?php }else {?>

                               <div class="button11" id="button-6">
                                     <div id="spin"></div>
                                     <a href="<?php  echo base_url(); ?>WebsiteController/star_competion/<?php echo $value->competitionid ?>"  >Start</a>
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

  <script type="text/javascript">
  <?php if($this->session->flashdata('quizsubmit_success')){ ?>
    $(document).ready(function(){
      toastr.success('Quiz Submitted Successfully');
    });
  <?php } ?>
</script>
 <script type="text/javascript">
  $('#btn_save').click(function(){
    // alert('hii');

   if($.trim($('#emailid').val()) == ''||$.trim($('#parentname').val()) == ''||$.trim($('#age').val()) == ''||$.trim($('#pincode').val()) == ''){
      alert('Fill all the necessary fields');
   }
   else{
    return confirm('Are you sure you want to participate?')
   }
});

function myFunction() {
            document.getElementById("myForm").reset();
        }

</script>
 
</body>
</html>
