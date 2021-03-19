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
.result{

      margin-top: 35%;
}
.row .test-result .progress-test {
    justify-content: center;

}
.test-result .circle {
    background: #2098f3;
    border-radius: 200px;
    color: white;
    height: 100px;
    font-weight: bold;
    width: 100px;
    display: table;
    margin: 20px auto;
}
.test-result .circle-orange {
    background: #fd6500;
}
.test-result .circle-green {
    background: #41b354;
}
.test-result .circle-red {
    background: #ff322d;
}
.test-result .circle-black {
    background: #484848;
}
/*.test-mark-box {
    / * background: url(../images/test-result-bg.jpg) no-repeat; * /
    background-size: 100% 100%;
    padding: 30px 20px 0px 20px;
    border-bottom: 1px solid #e6e3d9;
    background-image: linear-gradient(to bottom, #fff4d1 31%, #ffffff 95%);
    border-radius: 12px;
}*/
</style>
<!DOCTYPE html>
<html>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="resultuserwrapper"  style="background-image:url('<?php echo base_url(); ?>/assets/images/17973908.jpg');background-blend-mode: overlay;
    background-repeat: no-repeat;
    background-size: cover;
    background-color: #ecf1eabf;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 col-xs-12 col-md-12 col-xl-12 col-lg-12 mt-1 text-black text-center">
            <h2>Test Result</h2>
          </div>
        </div>
        <?php foreach ($score_display as $value) {
          $total_question = $value['total_question'];
          $correct_answer = $value['correct_answer'];
          $score_percentage = $value['score_percentage'];

          $wrong_answer = $total_question - $correct_answer;

          // print_r($wrong_answer);
         ?>
           <div class="row test-result progress-test text-center text-black">      
           <div class="col-md-2"></div>                       
                 <div class="col-md-2">
                  <div class="circle circle-blue">
                    <p class="result"> <?php echo $total_question; ?> </p>                 
                   </div>
                  <p class="question">Questions </p>
                </div>
                 <div class="col-md-2 ">
                  <div class="circle circle-orange ">
                    <p class="result"><?php echo $score_percentage; ?>% </p>
                  </div>
                  <p class="question">Score </p>
                </div>
                 <div class="col-md-2 ">
                  <div class="circle circle-green">
                    <p class="result"><?php echo $correct_answer; ?> </p>
                  </div>
                  <p class="question">Correct </p>
                </div>  
                <div class="col-md-2 ">
                  <div class="circle circle-red">
                    <p class="result"><?php echo $wrong_answer; ?></p>
                  </div>
                  <p class="question">Wrong </p>
                </div>  
                <!-- <div class="col-md-2 ">
                  <div class="circle circle-black">
                    <p class="result">4 </p>
                  </div>
                  <p class="question">Unanswered </p>
                </div>   -->
                <!-- <div class="col-md-2 ">
                  <div class="circle circle-yellow">
                    <p class="result">0 </p>
                  </div>
                  <p class="question">Total Score </p>
                </div>   -->
              </div>
            <?php } ?>
        <!-- </div> -->
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">

      <div class="container-fluid">
        <div class="card row">
          <!-- left column -->
          <div class=" card-body col-md-12 text-black" style="font-size: 16px; font-weight: 400;">
            <!-- general form elements -->
         
              <div class="row ml-5">
      
                         
                        <h5 class="text-center h4" style="color: #3156bd;margin-left: 40%;"><!-- <i class="fa fa-list"></i>  -->
                      <?php $q_id="0"; foreach ($result as $value) { $q_id = $value['competitionid'];} ?>
                      <?php foreach ($this->Website_Model->view_ques($q_id) as $value)
                      {
                      echo $value['title'];
                      }
                      ?></h5>
                      <br><br>
                      <div class="form-group col-sm-12  mb-4 text-center">
                      <!-- <label>Name : </label> -->
                      <?php foreach ($users as $value) { ?>
                       <h4 class="text-success"> Dear "<?php echo $value->user_name; ?>" congrats for the score. </h4>
                      <?php } ?>

                      <h4 style="font-weight: 400;">Please find the status of the Test you have gone through.</h4>
                      </div>

                    
                                                  
                          <?php $q = 1; foreach ($quiz_display as $value) { 



                            $correct = $value['correctans'];
                            $correctA = explode(',', $correct);

                            $selectanswertext = $value['selectanswertext'];
                            $question_id = $value['question_id'];
                            $checkanswer = $value['checkanswer'];
                             
                             // if($checkanswer==1){
                             //    echo '1';
                             //  }else{
                             //    echo '0';
                             //  }
                              


                            // print_r($quiz_display);

                            ?>
                            <!-- <input type="hidden" name="question_id" value="<?php echo $question_id; ?>"> -->
                          <!-- < ?php if($value['answertype']!="3" && $value['answertype']!="4"){ ?>                           -->

                          <div class="mb-3 p-2 col-md-12 "> 
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
                                 
                                <?php echo $s; ?>. <input type="radio" name=""  >  <?php echo $my_Array ;?></label>
                            </div>
                           <?php $s++;} ?>     

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
                            $t=1;
                            foreach($myArray as $my_Array)
                            { ?>
                            <div class="checkbox">
                              <label>

                                <?php echo $t; ?>. <input type="checkbox" name="" value="<?php echo $my_Array ;?>" > <?php echo $my_Array ;?></label>
                            </div>
                            <?php $t++; } ?>                            
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
                         

                            <!-- < ?php } ?>  -->    


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
                            <h5 class="alert alert-success correct w-50">Correct</h5>

                           


                              <label>Correct Anwer: <?php echo $my_Array; ?></label>
                              <input type="hidden" name="" id="databasecorrect" value="<?php echo $my_Array; ?>"> 
                              <br>
                              <label>Your Choosed Anwer: <?php echo $value['selectanswertext']; ?></label>
                              <input type="hidden" name="" id="userselected" value="<?php echo $value['selectanswertext']; ?>"> 
                           <?php } }else{
                             
                              $wrong = "hello";
                              $databasecorrect = $my_Array;
                               $userselected = $selectanswertext; 
                                // print_r($databasecorrect);
                               // print_r($userselected); ?>

                            <?php if(empty($wrong)){}else{ ?>
                             <input type="hidden" name="<?php echo $value['question_id'];?>" id="incorrectcalue" value="0">
                            <h5 class="alert alert-danger incorrect w-50">Incorrect</h5>
                              <?php } ?>
                            <!-- <h5 class="alert alert-success correct">Incorrect</h5> -->

                              <label>Correct Answer: <?php echo $my_Array; ?></label>
                              <input type="hidden" name="" id="databasecorrect" value="<?php echo $my_Array; ?>"> 
                              <br>
                              <label>Your Choosed Answer: <?php echo $value['selectanswertext']; ?></label>
                              <input type="hidden" name="" id="userselected" value="<?php echo $value['selectanswertext']; ?>"> 
                            <?php   } }  ?>
                            
                           

              <!-- <label>Correct Answer : <?php echo $my_Array; ?></label> -->
                      
                            
                            
                          </div>
                           <div class="col-sm-12 mb-3">
                          <?php 
                         if($value['answertype']=="3" || $value['answertype']=="4"){ ?>
                            <label>User Answer :  <?php echo $value['selectanswertext']; ?></label>
                          <div class="col-md-12">
                             <div class="form-group row"> 
                               <?php if($checkanswer=='1'){ ?>
                                <h5 class="alert alert-success correct w-50">Correct</h5>
                                <!-- <input type="text" name="" value="<?php echo $value['question_id'];?>"> -->
                            <?php   }else{ ?>
                               <h5 class="alert alert-danger incorrect w-50">Incorrect</h5>
                               <!--  <input type="text" name="" value="<?php echo $value['question_id'];?>">
 -->
                            <?php } ?>
                                  
                              </div>
                          </div>
                        
                          <?php } ?> 
                      </div> 

                    

                          <?php $q++;
                           


                           }   
                         ?>

                        
             

                     <!--     <input type="hidden" name="totalquest" value="<?php echo $q-1; ?>"> -->
              
                    </div>
                 
             
             
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
  

 </body>
</html>
