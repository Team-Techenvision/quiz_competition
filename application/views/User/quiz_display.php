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
                   <div class="card-tools col-md-5 " >
                <a href="<?php echo base_url(); ?>User/quiz_user_list" class="btn btn-sm btn-block btn-primary" >Competition Participated User List</a>
              </div>
              </div> 
              <!-- /.card-header -->
              <!-- form start -->
              <!-- <form id="form_action" role="form" action="" method="post"> -->
                 <form id="form_action" name="quiz_form" role="form" action="<?php echo base_url(); ?>User/admincheck_quiz" method="post"  class="m-3">
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
                            $question_id = $value['question_id'];



                            // print_r($result);

                            ?>
                            <!-- <input type="hidden" name="question_id" value="<?php echo $question_id; ?>"> -->
                          <div class="mb-3 p-2 col-md-12">                           
                            <span class="h6 d-flex text-capitalize"><?php echo $q.". ". $value['question']; ?> </span>                            
                            <?php if($value['answertype']=="1"){ ?>                           
                            <?php $myString = $value['optionvalues'];
                            $myArray = explode(',', $myString);
                            $s=1;
                            foreach($myArray as $my_Array)
                            { 
                              ?>                            
                            <div class="radio">
                              <label>
                                <?php echo $s; ?>. 
                                <input type="radio" name="" value="<?php if(isset($emailaddress)){ echo $emailaddress; } ?>" > <?php echo $my_Array ;?></label>
                            </div>


                            <?php $s++; } ?>                            
                            <?php } elseif ($value['answertype']=="2")
                            {?>                           
                            <?php $myString = $value['optionvalues'];
                            $myArray = explode(',', $myString);
                            $r=1;
                            foreach($myArray as $my_Array)
                            { ?>
                            <div class="checkbox">
                              <?php echo $r; ?>. 
                              <label><input type="checkbox" name="" value="<?php echo $my_Array ;?>" > <?php echo $my_Array ;?></label>
                            </div>
                            <?php $r++; } ?>                            
                            <?php } elseif ($value['answertype']=="3") { ?>                            
                            <input type="text" name=""  class="form-control w-75" placeholder="Answers....." style="background-color:#c1bebe;" >
                          

                            <?php  } elseif ($value['answertype']=="4") { ?>                            
                            <textarea name="" placeholder="Answers will be written here..."class="form-control w-75" style="background-color:#c1bebe;" ></textarea>


                          
                            <?php } else { ?>                            
                            <select name="" id="ansoption" class="form-control w-25" >
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

                         <?php 
                         if($value['answertype']!="3" && $value['answertype']!="4"  ){
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
                            <input type="hidden" name="<?php echo $value['question_id'];?>" id="correctvalue" value="1">  
                            <h5 class="alert alert-success correct">Correct</h5>

                            <label>Correct Anwer: <?php echo $my_Array; ?></label>
                              <input type="hidden" name="" id="databasecorrect" value="<?php echo $my_Array; ?>"> 
                              <br>
                              <label>User Anwer: <?php echo $value['selectanswertext']; ?></label>
                              <input type="hidden" name="" id="userselected" value="<?php echo $value['selectanswertext']; ?>"> 
                            <?php } ?>
                           <?php }else{
                             
                              $wrong = "hello";
                              $databasecorrect = $my_Array;
                               $userselected = $selectanswertext; 
                                // print_r($databasecorrect);
                               // print_r($userselected); ?>

                            <?php if(empty($wrong)){}else{ ?>
                             <input type="hidden" name="<?php echo $value['question_id'];?>" id="incorrectcalue" value="0">
                            <h5 class="alert alert-danger incorrect">Incorrect</h5>
                            <label>Correct Anwer: <?php echo $my_Array; ?></label>
                              <input type="hidden" name="" id="databasecorrect" value="<?php echo $my_Array; ?>"> 
                              <br>
                              <label>User Anwer: <?php echo $value['selectanswertext']; ?></label>
                              <input type="hidden" name="" id="userselected" value="<?php echo $value['selectanswertext']; ?>"> 
                              <?php } ?>
                            <!-- <h5 class="alert alert-success correct">Incorrect</h5> -->

                              
                            <?php   } } ?>
                            
                           

              <!-- <label>Correct Answer : <?php echo $my_Array; ?></label> -->
                      
                            <input type="hidden" name="" id="databasecorrect" value="<?php echo $my_Array; ?>"> 
                            
                       <!--    </div> -->
                         <!--  <div class="col-sm-12 mb-3"> -->
                          <?php 
                         if($value['answertype']=="3" || $value['answertype']=="4"){ ?>
                            <label>User Answer :  <?php echo $value['selectanswertext']; ?></label>
                          <div class="col-md-12">
                             <div class="form-group row"> 
                             
                                    <div class="radio col-md-2">
                                      <label><input class="correctradio" type="radio" name="<?php echo $value['question_id'];?>" value="1"> Correct</label>
                                    </div>
                                    <div class="radio col-md-2">
                                      <label><input class="incorrectradio" type="radio" name="<?php echo $value['question_id'];?>" value="0" > Incorrect</label>
                                    </div>
                              </div>
                          </div>
                        
                          <?php } ?>
                            <input type="hidden" name="" id="userselected" value="<?php echo $value['selectanswertext']; ?>">
                       </div> 

                    

                          <?php $q++;
                           


                           }   
                         ?>

                     <!--     <input type="hidden" name="totalquest" value="<?php echo $q-1; ?>"> -->
              
                    </div>
                </div>
             
	                                   
                <!-- /.card-body -->
               <div class="card-footer">
                  <?php if(isset($update)){ ?>
                    <button id="btn_update" type="submit" class="btn btn-primary">Update </button>
                  <?php } else{ ?>
                    <button id="btn_save" type="submit" class="btn btn-success px-4">Submit</button>
                  <?php } ?>
                  <a href="" onclick="this.form.reset();" class="btn btn-default ml-4">Cancel</a>
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





