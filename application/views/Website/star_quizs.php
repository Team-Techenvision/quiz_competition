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
                         <!-- <div class="col-md-12 text-right"> <label >Time : </label>
                      <div  id="display"></div></div>
 -->
        <!-- ================================================================ -->

                        <form id="form_action" name="quiz_form" role="form" action="<?php echo base_url();?>WebsiteController/submit_quizs" method="post"  class="m-3">
                          
                          <?php 
                          // print_r($result); die();
                          $q = 1; foreach ($result as $value) { 

                             // if($value['optionvalues']){
                            // print_r($result); die();
                            ?>

                                                     
                                                        
                            <?php if($value['answertype']=="1"){ 
                               if($value['optionvalues']){
                              ?>
                              <div class="mb-3 p-2 border border-success question">
                              <span class="h5 d-flex text-capitalize"><?php echo $q." ". $value['question']; ?> </span>

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
                          </div>

                            <?php $q++; } } elseif ($value['answertype']=="2")
                            {
                             if($value['optionvalues']){
                              ?>  
                              <div class="mb-3 p-2 border border-success question">
                             <span class="h5 d-flex text-capitalize"><?php echo $q." ". $value['question']; ?> </span>                         
                            <?php $myString = $value['optionvalues'];
                            $myArray = explode(',', $myString);
                            $j=1;
                            foreach($myArray as $my_Array)
                            { ?>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="<?php echo $value['dynamiccompetitionid'];?>[]" id="<?php echo $j; ?>" value="<?php echo $j; ?>" > <?php echo $my_Array ;?></label>
                            </div>
                            <?php $j++; } ?> 
                            </div>                           
                            <?php $q++; } } elseif ($value['answertype']=="3") { ?>
                              <div class="mb-3 p-2 border border-success question">

                             <span class="h5 d-flex text-capitalize"><?php echo $q." ". $value['question']; ?> </span>

                            <input type="text" name="<?php echo $value['dynamiccompetitionid'];?>[]" class="form-control w-75" placeholder="Answers....." style="background-color:#c1bebe;" required>
                          </div>
                            <?php  $q++; } elseif ($value['answertype']=="4") { ?>
                              <div class="mb-3 p-2 border border-success question">

                             <span class="h5 d-flex text-capitalize"><?php echo $q." ". $value['question']; ?> </span>

                            <textarea name="<?php echo $value['dynamiccompetitionid'];?>[]" placeholder="Answers will be written here..."class="form-control w-75" style="background-color:#c1bebe;" required></textarea>
                          </div>
                            <?php $q++; } else { 
                             if($value['optionvalues']){
                              ?> 
                            <div class="mb-3 p-2 border border-success question">     
                             <span class="h5 d-flex text-capitalize"><?php echo $q." ". $value['question']; ?> </span>

                            <select name="<?php echo $value['dynamiccompetitionid'];?>[]" id="ansoption" class="form-control w-25" required>
                                 <option value="">select answer</option> 

                              <?php $myString = $value['optionvalues'];
                              $myArray = explode(',', $myString);
                              $k=1;
                              foreach($myArray as $my_Array)
                              { ?>
                              <option value="<?php echo $k ;?>"> <?php echo $my_Array ;?></option>
                              <?php $k++; } ?>
                            </select>
                          </div>

                            <?php $q++; } }?>
                          <?php  } ?>
                         <!--  <div class="d-flex m-5 justify-content-center ">
                               <div class="button1 hide col-md-2 btn btn-primary  " id="next">Next</div>
                               <div class="button1 hide col-md-2 btn btn-primary  ml-2" id="prev">Prev</div>
                         </div> -->
                          <div class="d-flex m-5">
                            <button class="btn btn-primary"  id="submit_quiz">Submit</button>                            
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

          
              //keys close
               // document.getElementById('content').onkeypress=function(){return false;}//not worked

 </script>
<script type="text/javascript">
  // var checkboxes = document.querySelectorAll('input[type="checkbox"]');
  // var checkedOne = Array.prototype.slice.call(checkboxes).some(x => x.checked);
// $(document).ready(function () {
//     $('#submit_quiz').click(function() {
//       checked = $(".checkbox input[type=checkbox]:checked").length;

//       if(!checked) {
//         alert("You must check at least one checkbox of correct answer.");
//         return false;
//       }
//     });
// });

</script>

            <!-- ////////////////////////////////////////////////////////////////////////////// -->
      <!--       <script>
       $(document).ready(function() {
   
   
   
   
   
    //Store the total number of questions
   var totalQuestions = $('.question').size();
   // alert(totalQuestions);
   //Set the current question to display to 1
   var currentQuestion = 0;
   //Store the selector in a variable.
   //It is good practice to prefix jQuery selector variables with a $
   $questions = $('.question');
   $prev=$('#prev');
   $next=$('#next');
   
   
   
   
   //Hide all the questions
   $questions.hide();
   
   
   
   
   $prev.hide();
   //Show the first question
   $($questions.get(currentQuestion)).fadeIn();
   //attach a click listener to the HTML element with the id of 'next'
   $('#next').click(function () {
        //fade out the current question,
        //putting a function inside of fadeOut calls that function
        //immediately after fadeOut is completed,
        //this is for a smoother transition animation
        $($questions.get(currentQuestion)).fadeOut(function () {
           //increment the current question by one
           currentQuestion = currentQuestion + 1;
           if(currentQuestion<=1) $('.button1').fadeIn();
          //alert(currentQuestion);
           if (isNaN(currentQuestion) || currentQuestion == totalQuestions ) {
        $('#next').fadeOut();
       $($questions.get(currentQuestion)).fadeIn();
      }
           //if there are no more questions do stuff
           if (currentQuestion == totalQuestions) {
              // var result = sum_values()
               //do stuff with the result
               //alert(totalQuestions);
               $('#prev').fadeIn();
               $('#next').fadeOut();
               currentQuestion=currentQuestion-1
               $($questions.get(currentQuestion)).fadeIn();
           } else {
               $('#next').fadeIn();
               //otherwise show the next question
               $($questions.get(currentQuestion)).fadeIn();
           }
       });
   });
   
   
$('#prev').click(function () {
   //fade out the current question,
   //putting a function inside of fadeOut calls that function
   //immediately after fadeOut is completed,
   //this is for a smoother transition animation
   $($questions.get(currentQuestion)).fadeOut(function () {
      //Decrement the current question by one
      currentQuestion = currentQuestion - 1;
      //if there are no more questions do stuff
      if (isNaN(currentQuestion) || currentQuestion <= 0 ) {
       $('#prev').fadeOut();
       $($questions.get(currentQuestion)).fadeIn();
      }
      if (currentQuestion == totalQuestions) {
          currentQuestion=currentQuestion-1
          $($questions.get(currentQuestion)).fadeIn();
      } else {
       $('#next').fadeIn();
          //otherwise show the next question
          $($questions.get(currentQuestion)).fadeIn();
      }
   });
   
   });
   });
   </script>  -->
   <!-- //////////////    Timer         //////////////// -->

   <script type="text/javascript">

  //  var countdown = 30 * 60 * 1000;
//var timerId = setInterval(function(){
 // countdown -= 1000;
//  var min = Math.floor(countdown / (60 * 1000));
  //var sec = Math.floor(countdown - (min * 60 * 1000));  // wrong
//  var sec = Math.floor((countdown - (min * 60 * 1000)) / 1000);  //correct

//  if (countdown <= 0) {
//     alert("30 min!");
//     //doSomething();
//  } else {
   //  $("#display").html(min + " : " + sec);
 // }

//}, 1000); //1000ms. = 1sec.
     // function CountDown(duration, display) {
     //       if (!isNaN(duration)) {
     //           var timer = duration, minutes, seconds;
               
     //         var interVal=  setInterval(function () {
     //               minutes = parseInt(timer / 60, 10);
     //               seconds = parseInt(timer % 60, 10);

     //               minutes = minutes < 10 ? "0" + minutes : minutes;
     //               seconds = seconds < 10 ? "0" + seconds : seconds;

     //               $(display).html("<b>" + minutes + "m : " + seconds + "s" + "</b>");
     //               if (--timer < 0) {
     //                   timer = duration;
     //                  SubmitFunction();
     //                  $('#display').empty();
     //                  clearInterval(interVal)
     //               }
     //               },1000);
     //       }
     //   }
       
     //   function SubmitFunction(){
     //  $('form').submit();
     //   window.location = "< ?php echo base_url(); ?>WebsiteController";
       
     //   }
   
     //    CountDown(300,$('#display'));
     
   </script>
            
          </body>
        </html>