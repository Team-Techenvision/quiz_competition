<!DOCTYPE html>

<html>
<style type="text/css">
  .about {
  pointer-events: none;
}
.pp{
  pointer-events: none;
}
.overview{
  pointer-events: none;
}
.teachers{
  pointer-events: none;
}
.tandc{
  pointer-events: none;
}
.faq{
  pointer-events: none; 
}
.contactus{
  pointer-events: none;  
}
.register{
  pointer-events: none;  
}
.twit{
  pointer-events: none;  
}
.face{
  pointer-events: none;    
}
.pint{
  pointer-events: none;    
}
.insta{
  pointer-events: none;    
}
</style>
  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

      <!-- Content Wrapper. Contains page content -->
      <div class="competitionwrapper"  style="background-image:url('<?php echo base_url(); ?>/assets/images/93128-OJM4KV-79.jpg');background-blend-mode: overlay;
        background-repeat: no-repeat;
        background-size: cover;
        background-color: #14230f87;">
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
          <section class="content" id="content">
            <div class="container-fluid">
              <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                  <!-- general form elements -->
                  <div class="card">
                    <div class="card-header ">
                      
                      <h5 class="card-title text-center h4" style="color: #3156bd;"><!-- <i class="fa fa-list"></i>  -->
                      <?php $q_id="0"; foreach ($result as $value) { $q_id = $value['competitionid'];} ?>
                      <?php foreach ($this->Website_Model->view_ques($q_id) as $value)
                      {
                      echo $value['title'];
                      }
                      ?></h5>
                      <!--  <div class="card-tools col-md-2 " >
                        <a href="add_profile" class="btn btn-sm btn-block btn-primary "  >Add Participation</a>
                      </div> -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <div class="container border border-dark">

        <!-- ================================================================ -->

                        <form id="form_action" name="quiz_form" role="form" action="<?php echo base_url();?>WebsiteController/submit_quizs" method="post"  class="m-3">
                          
                          <?php 
                          // print_r($result); die();
                          $q = 1; foreach ($result as $value) { 

                            // print_r($result); die();
                            ?>
                          <div class="mb-3 p-2 border border-success">                           
                            <span class="h5 d-flex text-capitalize"><?php echo $q." ". $value['question']; ?> </span>                            
                            <?php if($value['answertype']=="1"){ ?>

                            <?php $myString = $value['optionvalues'];
                            $myArray = explode(',', $myString);
                            $i=1;
                            foreach($myArray as $my_Array)
                            { ?> 

                            <div class="radio">
                              <label><input type="radio" name="<?php echo $value['dynamiccompetitionid'];?>[]" value="<?php echo $i ;?>" required> <?php echo $my_Array ;?></label>
                            </div>



                            <?php $i++; } ?> 

                            

                            <?php if($value['file_type']=="1"){ ?>
                             <img id="blah" src="<?php echo base_url(); ?>/assets/images/quizimage_files/<?php echo $value['upload_image']; ?>" alt="" width="320" height="240" />
                           <?php } ?>
                           
                            <?php if($value['file_type']=="2"){ ?>
                            
                             <video width="320" height="240" controls>
                             <source src="<?php echo base_url(); ?>/assets/images/quizvideo_files/<?php echo $value['upload_file']; ?>" >
                              </video>
                             <?php } ?>
                          

                            <?php } elseif ($value['answertype']=="2")
                            {?>                           
                            <?php $myString = $value['optionvalues'];
                            $myArray = explode(',', $myString);
                            $j=1;
                            foreach($myArray as $my_Array)
                            { ?>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="<?php echo $value['dynamiccompetitionid'];?>[]" value="<?php echo $j; ?>" > <?php echo $my_Array ;?></label>
                            </div>
                            <?php $j++; } ?>                            
                            <?php } elseif ($value['answertype']=="3") { ?>                            
                            <input type="text" name="<?php echo $value['dynamiccompetitionid'];?>[]" class="form-control w-75" placeholder="Answers....." style="background-color:#c1bebe;" required>
                            <?php  } elseif ($value['answertype']=="4") { ?>                            
                            <textarea name="<?php echo $value['dynamiccompetitionid'];?>[]" placeholder="Answers will be written here..."class="form-control w-75" style="background-color:#c1bebe;" required></textarea>
                            <?php } else { ?>                            
                            <select name="<?php echo $value['dynamiccompetitionid'];?>[]" id="ansoption" class="form-control w-25" required>
                                <!-- <option value=" ">select answer</option> -->

                              <?php $myString = $value['optionvalues'];
                              $myArray = explode(',', $myString);
                              $k=1;
                              foreach($myArray as $my_Array)
                              { ?>
                              <option value="<?php echo $k ;?>"> <?php echo $my_Array ;?></option>
                              <?php $k++; } ?>
                            </select>
                            <?php } ?>
                          </div>
                          <?php $q++; } ?>
                          <div class="d-flex m-5">
                            <button class="btn btn-primary">Submit</button>                            
                          </div> 
                        </form>
  <!-- ====================================================================== --> 
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
            <?php if($this->session->flashdata('save_success')){ ?>
            $(document).ready(function(){
            toastr.success('Saved successfully');
            });
            <?php } ?>
            <?php if($this->session->flashdata('update_success')){ ?>
            $(document).ready(function(){
            toastr.success('Updated successfully');
            });
            <?php } ?>
            <?php if($this->session->flashdata('delete_success')){ ?>
            $(document).ready(function(){
            toastr.error('Deleted successfully');
            });
            <?php } ?>
            </script>
            <script type="text/javascript">
              //right click disable
              document.addEventListener('contextmenu', event => event.preventDefault());

              //header pointerevent close
              document.getElementById('logo').style.pointerEvents = 'none';
              document.getElementById('home').style.pointerEvents = 'none';
              document.getElementById('aboutus').style.pointerEvents = 'none';
              document.getElementById('contact').style.pointerEvents = 'none';
              document.getElementById('username').style.pointerEvents = 'none';

              //footer not working code
              // document.getElementById('About').style.pointerEvents = 'none';
              // document.getElementById('overview').style.pointerEvents = 'none';
              // document.getElementById('teachers').style.pointerEvents = 'none';
              // document.getElementById('pp').style.pointerEvents = 'none';
              // document.getElementById('tandc').style.pointerEvents = 'none';
              // document.getElementById('faq').style.pointerEvents = 'none';
              // document.getElementById('contactus').style.pointerEvents = 'none';
              // document.getElementById('register').style.pointerEvents = 'none';
              // document.getElementById('twit').style.pointerEvents = 'none';
              // document.getElementById('face').style.pointerEvents = 'none';
              // document.getElementById('pint').style.pointerEvents = 'none';
              // document.getElementById('insta').style.pointerEvents = 'none';

              //keys close
               // document.getElementById('content').onkeypress=function(){return false;}//not worked

            </script>
            
          </body>
        </html>