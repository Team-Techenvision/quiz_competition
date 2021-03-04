
<!DOCTYPE html>
<html>
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
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper"  style="background-image:url('<?php echo base_url(); ?>/assets/images/17973908.jpg');background-blend-mode: overlay;
    background-repeat: no-repeat;
    background-size: cover;
    background-color: #acc7e8bf;">
  <!-- Content Wrapper. Contains page content -->
  <div class=" competitionwrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 mt-1">
            <!-- <h4>COMPETITION INFORMATION</h4> -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid text-center">
          <!-- current competition -->
       <?php 
       if($mycompetition_list== null){ 
        ?>
        <br>
        <label class=" mb-4" style="color: #0a0a0a; font-weight: 500; font-size: 1.50rem;">To Participate in Competition Please Fill Up the Profile Details. <br><br> You have not Participated Yet in any Competition.</label><br><br>

        <div class="button11" id="button-6">
         <div id="spin"></div>
         <a href="<?php echo base_url(); ?>WebsiteController" >go to home</a>
        </div>

 
          <?php }else{ 

           foreach ($mycompetition_list as $list) { 

            $enddate = $list->enddate;
                $today = date('Y-m-d'); 
           
            }
         ?>
        <?php  if($enddate >= $today ){ ?> 

          <label class="complabal mb-4">Current Competition</label>
         <?php } ?> 

        <div class="row ">
          
          <?php   foreach ($mycompetition_list as $list) { 
// print_r($list);
            $enddate = $list->enddate;
                $today = date('Y-m-d'); 
            // print_r($enddate); 
            if($enddate >= $today){
          ?>
        
          <div class="col-xl-3 col-md-3 col-sm-12 col-12 ">
            <div class="card hovereffect">
              <img class="competitioncard" src="<?php echo base_url(); ?>/assets/images/competition/<?php echo $list->photo; ?>" height="250" >
              <div class="overlay"></div>

            </div>
             <center><label class="complabelT"> <a href="<?php echo base_url(); ?>WebsiteController/competition_usersave/<?php echo $list->competitionid; ?>" value="<?php echo $list->competitionid; ?>"><?php echo $list->title; ?></a></label></center>
          </div>

          
           <?php } }?>
        </div>
         <!-- /.row -->
          <br><br>
       <!-- Past competition -->
        <?php   if($enddate < $today){ ?>  
          <label class="complabal mb-4">Past Competition</label>
           <?php }  ?>  
         <div class="row">
          
          <?php   foreach ($mycompetition_list as $list) { 
// print_r($list);
            $enddate = $list->enddate;
                $today = date('Y-m-d'); 
            // print_r($enddate); 
            if($enddate < $today){
          ?>
        
          <div class="col-xl-3 col-md-3 col-sm-12 col-12 ">
            <div class="card hovereffect">
              <img class="competitioncard" src="<?php echo base_url(); ?>/assets/images/competition/<?php echo $list->photo; ?>" height="250" >
              <div class="overlay"></div>

            </div>
             <center><label class="complabelT"> <a href="<?php echo base_url(); ?>WebsiteController/competition_usersave/<?php echo $list->competitionid; ?>" value="<?php echo $list->competitionid; ?>"><?php echo $list->title; ?></a></label></center>
          </div>

          
           <?php } }   ?>
        </div>
      <?php  } ?>
        <!-- /.row -->

      </div><!-- /.container-fluid -->
    </section>
  </div>
   <script type="text/javascript">
  <?php if($this->session->flashdata('quizsubmit_success')){ ?>
    $(document).ready(function(){
      toastr.success('Quiz Submitted Successfully');
    });
  <?php } ?>
</script>
