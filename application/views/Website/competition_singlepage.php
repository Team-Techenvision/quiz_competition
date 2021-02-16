<?php  
$quizweb_user_id = $this->session->userdata('quizweb_user_id');
$user_list = $this->Website_Model->get_list_by_id('user_id',$quizweb_user_id,'','','','','user');
$profile_list = $this->Website_Model->get_list_by_id('user_id',$quizweb_user_id,'','','','','profile');
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
                <?php foreach ($competition_list as $value) { ?>
                 <div class="row mb-4">
                   <div class="col-md-12 text-center titleS mb-4 mt-4" >
                    <?php echo $value->title; ?>
                   </div>
                    
                 </div>
                 <div class="row mb-4">
                    <div class="col-md-3 m-4" >
                    <img class="imgBox" src="<?php echo base_url("assets/images/competition/".$value->photo);?>"height="350px" width="300px"/>
                   </div>
                   <div class="col-md-7 m-4">
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
                   <div class="row mb-4">
                    <div class="col-md-12 ml-4" >
                       <form id="myForm" role="form"   action="<?php echo base_url(); ?>WebsiteController/insert_profiledata" method="post" >

                     <input type="hidden" name="competition_id" id="competition_model_id" value="<?php echo $value->competitionid;?>">
                      <center><button  data-toggle="modal"  data-target="#participate"  class="btn btn-primary" value="<?php echo $value->competitionid;?>">Participate</button> </center>
                          <!-- <div class="button11" id="button-6">
                          <div id="spin"></div>
                          <a href="#" data-toggle="modal"  data-target="#participate" type="submit" value="< ?php echo $value->competitionid;?>">Participate</a>
                        </div> -->

                     <!-- <p><button href="" data-toggle="modal" id="participate_btn" data-target="#participate"  class="competition_btn pb-4" type="submit" value="< ?php echo $list->competitionid;?>"><i class="fa fa-plus" aria-hidden="true"></i> Participate</button></p> -->

                   </form>
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
   <!-- <script src="< ?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script> -->
  <!-- <script src="< ?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script> -->
<!--  <script type="text/javascript">
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

</script> -->
 
</body>
</html>
