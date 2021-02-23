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
            <h2>Quiz Display</h2>
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
                <h4 class="card-title">Quiz Check</h4>
              </div> 
              <!-- /.card-header -->
              <!-- form start -->
              <!-- <form id="form_action" role="form" action="" method="post"> -->
                 <form id="form_action" name="quiz_form" role="form" action="" method="post"  class="m-3">
                <div class="card-body">
                  <div class="row">
      

             
                        <h5 class="text-center h4" style="color: #3156bd;margin-left: 38%;"><!-- <i class="fa fa-list"></i>  -->
                      <?php $q_id="0"; foreach ($result as $value) { $q_id = $value['competitionid'];} ?>
                      <?php foreach ($this->User_Model->view_ques($q_id) as $value)
                      {
                      echo $value['title'];
                      }
                      ?></h5>
                      <br><br>
                      <div class="form-group col-sm-12">
                      <label>Name : </label>
                      <?php foreach ($users as $value) {
                        echo $value->user_name;
                      } ?>
                      </div>

                    
                   
                          
                          <?php $q = 1; foreach ($result as $value) { 

                            $correct = $value['correctans'];
                            $correctA = explode(',', $correct);

                            $selectanswertext = $value['selectanswertext'];



                            // print_r($correctA);

                            ?>
                          <div class="mb-3 p-2 ">                           
                            <span class="h6 d-flex text-capitalize"><?php echo $q." ". $value['question']; ?> </span>                            
                            <?php if($value['answertype']=="1"){ ?>                           
                            <?php $myString = $value['optionvalues'];
                            $myArray = explode(',', $myString);
                            foreach($myArray as $my_Array)
                            { 
                              ?>                            
                            <div class="radio">
                              <label>
                            
                                <input type="radio" name="<?php echo $value['dynamiccompetitionid'];?>[]" value="<?php if(isset($emailaddress)){ echo $emailaddress; } ?>" > <?php echo $my_Array ;?></label>
                            </div>
                            <?php } ?>                            
                            <?php } elseif ($value['answertype']=="2")
                            {?>                           
                            <?php $myString = $value['optionvalues'];
                            $myArray = explode(',', $myString);
                            foreach($myArray as $my_Array)
                            { ?>
                            <div class="checkbox">
                              <label><input type="checkbox" name="<?php echo $value['dynamiccompetitionid'];?>[]" value="<?php echo $my_Array ;?>" > <?php echo $my_Array ;?></label>
                            </div>
                            <?php } ?>                            
                            <?php } elseif ($value['answertype']=="3") { ?>                            
                            <input type="text" name="<?php echo $value['dynamiccompetitionid'];?>[]" class="form-control w-75" placeholder="Answers....." style="background-color:#c1bebe;" >
                            <?php  } elseif ($value['answertype']=="4") { ?>                            
                            <textarea name="<?php echo $value['dynamiccompetitionid'];?>[]" placeholder="Answers will be written here..."class="form-control w-75" style="background-color:#c1bebe;" ></textarea>
                            <?php } else { ?>                            
                            <select name="<?php echo $value['dynamiccompetitionid'];?>[]" id="ansoption" class="form-control w-25" >
                              <?php $myString = $value['optionvalues'];
                              $myArray = explode(',', $myString);
                              foreach($myArray as $my_Array)
                              { ?>
                              <option value="<?php echo $my_Array ;?>"> <?php echo $my_Array ;?></option>
                              <?php } ?>
                            </select>
                            <?php } ?>
                          </div>
                          <div class="col-sm-12 mb-3">

                            
                            
                           

                    <!--   <label>Correct Answer : </label>
                      
                            <input type="hidden" name="" id="databasecorrect" value="<?php echo $my_Array; ?>"> -->
                            
                      <!--     </div>
                          <div class="col-sm-12 mb-3"> -->
                           <!--  <label>User Selected Answer :  < ?php echo $value['selectanswertext']; ?></label> -->
                           <!--  <input type="hidden" name="" id="userselected" value="< ?php echo $value['selectanswertext']; ?>"> -->
                       <!--    </div> -->

                          <?php 
                           foreach($correctA as $my_Array)
                            {   
                              // echo $my_Array;
                            }
                             if($my_Array==$selectanswertext)
                             {
                               $databasecorrect = $my_Array;
                               $userselected = $selectanswertext;
                               // print_r($databasecorrect);
                               // print_r($userselected);

                              $correct ="hii";   ?>

                            <!-- <h5 class="alert alert-danger incorrect">Correct</h5> -->
                            <?php if(empty($correct)){ }else{?>
                            <h5 class="alert alert-success correct">Correct</h5>
                            <?php } ?>
                           <?php }else{
                             
                              $wrong = "hello";
                              $databasecorrect = $my_Array;
                               $userselected = $selectanswertext; 
                                // print_r($databasecorrect);
                               // print_r($userselected); ?>

                            <?php if(empty($wrong)){}else{ ?>

                            <h5 class="alert alert-danger incorrect">Incorrect</h5>
                              <?php } ?>
                            <!-- <h5 class="alert alert-success correct">Incorrect</h5> -->

                              
                            <?php   } ?>


                      

                         

                          <?php $q++; } ?>
                        <!--   <div class="d-flex m-5">
                            <button class="btn btn-primary">Submit</button>                            
                          </div>  -->
                        <!-- </form> -->
               
                    </div>
                </div>
             
	                                   
                <!-- /.card-body -->
               <div class="card-footer">
                  <?php if(isset($update)){ ?>
                    <button id="btn_update" type="submit" class="btn btn-primary">Update </button>
                  <?php } else{ ?>
                    <button id="btn_save" type="submit" class="btn btn-success px-4">Submit</button>
                  <?php } ?>
                  <a href="<?php echo base_url() ?>User/dynamiccompetition" class="btn btn-default ml-4">Cancel</a>
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
   <script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>
<script>
  <?php if($this->session->flashdata('save_success')){ ?>
    $(document).ready(function(){
      toastr.success('Question Saved successfully');
    });
  <?php } ?>
</script>
<!-- <script type="text/javascript">
  $( document ).ready(function() {
   
     $('.incorrect').hide();  
     $('.correct').hide(); 

    
      var databasecorrect = $('#databasecorrect').val();
      var userselected = $('#userselected').val();

      

       // alert(databasecorrect);
       // alert(userselected);

       // if(databasecorrect){
       //   $('.incorrect').hide();  
       //   $('.correct').hide(); 
       // }


    });
         
  
</script> -->

<!--  <script>

  $('#form_action').submit(function(e) {



    
      // alert(mobile);
      // alert(password);
      $.ajax({
           url:"<?php echo base_url(); ?>WebsiteController/login1",
           method:"POST",
           data:{mobile:mobile,password:password},
           success:function(data)
            {
              
               // alert(data);
               // console.log(data);
               if(data=='Sign In Successful'){

                $('.alert-success').html(data);
                $('.successresponse').show().delay(3000).fadeOut();
                $('.errorresponse').hide();


                window.location.reload();
               }
               else{
                $('.alert-danger').html(data);
                $('.errorresponse').show().delay(3000).fadeOut();
                $('.successresponse').hide();
                
                document.getElementById("signInForm").reset();
               }

            }

            });
            e.preventDefault();
  });
</script>
 -->





