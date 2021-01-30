<!DOCTYPE html>
<html>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper competitionwrapper"  style="background-image:url('<?php echo base_url(); ?>/assets/images/97350-OKYIEE-393.jpg');background-blend-mode: overlay;
    background-repeat: no-repeat;
    background-size: cover;
    background-color: #61655f87;">
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
          <div class="col-md-12">
            <!-- general form elements -->
           <div class="card">
<!--             <div class="card-header "> -->
            
              <!-- <h5 class="card-title text-center h4" style="color: crimson;"><i class="fa fa-list"></i> 
                Competition Information
              </h5> -->
             <!--  <div class="card-tools col-md-2 " >
                <a href="add_profile" class="btn btn-sm btn-block btn-primary "  >Add Participation</a>
              </div> -->
            <!-- </div> -->
            <!-- /.card-header -->
              <div class="card-body">
                <?php foreach ($competition_list as $value) { ?>
                 <div class="row mb-4">
                   <div class="col-md-12 text-center titleS mb-4 mt-4" >
                    <?php echo $value->title; ?>
                   </div>
                    
                 </div>
                 <div class="row mb-4">
                    <div class="col-md-3 m-4" >
                    <img src="<?php echo base_url("assets/images/competition/".$value->photo);?>"height="350px" width="300px"/>
                   </div>
                   <div class="col-md-7 m-4">
                      <div class="col ml-4" >
                          <label class="text-dark labelSC">Competition Type : </label>
                          <?php echo $value->competitiontype; ?>
                     </div>
                      <div class="col ml-4" >
                         <label class="text-dark labelSC">Competition Level : </label>
                         <?php echo $value->levelname; ?>
                     </div>
                      <div class="col ml-4" >
                         <label class="text-dark labelSC">Class : </label>
                         <?php echo $value->class; ?>
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
                       <center><button class="btn-primary text-center" href="">Participate</button></center>
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
   <!-- <script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script> -->
  <!-- <script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script> -->
 
 
</body>
</html>
