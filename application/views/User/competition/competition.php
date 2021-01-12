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
            <h1>Competition Information</h1>
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
                <h3 class="card-title">Add Competition</h3>
                <div class="card-tools col-md-3 " >
                <a href="competition_list" class="btn btn-sm btn-block btn-primary "  >Competition List</a>
              </div>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="form_action" role="form" action="" method="post" enctype="multipart/form-data">
                <div class="card-body row">
                  <div class="form-group col-md-12">
                      <?php
                      if(isset($competitiontypeid)){?>

                       <input type="text" class="form-control required title-case text" name="competitiontype" id="competitiontype" value="<?php if(isset($competitiontypeid)){ echo $competitiontypeid; } ?>" disabled="">
                       <?php }?>



                      <select name="competitiontypeid" id="competitiontypeid"class="form-control" required="">
                        <option value="">Select Competition Type</option>


                    <?php foreach($competitiontype as $competitiontype)
                        {

                        echo '<option value="'. $competitiontype->competitiontypeid.'" '.$selected.'>'. $competitiontype->competitiontype.'</option>';
                                        
                         }
                        ?>  

                         
                      </select>
                  </div>
                    <div class="form-group col-md-12">
                    <input type="text" class="form-control required title-case text txtOnly" name="quizsubject" id="quizsubject" value="<?php if(isset($quizsubject)){ echo $quizsubject; } ?>" placeholder="Enter Quiz Subject" required>
                  </div>
                  <div class="form-group col-md-12">
                    <input type="text" class="form-control required title-case text txtOnly" name="title" id="title" value="<?php if(isset($title)){ echo $title; } ?>" placeholder="Enter title" required>
                  </div>
                  
                  <div class="form-group col-md-12">
                    <input type="text" class="form-control txtOnly"  name="subtitle" id="subtitle" value="<?php if(isset($subtitle)){ echo $subtitle; } ?>" placeholder="Enter sub title" required>
                  </div>
                   <div class="form-group col-md-12">
                      <textarea class="textarea" name="subjectstextarea" id="subjectstextarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php if(isset($subjectstextarea)){ echo $subjectstextarea; } ?></textarea>

                    </div>
           
                   <div class="form-group col-md-6">
                    <input type="text" class="form-control required title-case text " name="class" id="class" value="<?php if(isset($class)){ echo $class; } ?>" placeholder="Enter From Class - To Class" required>
                  </div>
                  <div class="form-group col-md-3">
                    <input type="date" class="form-control required title-case text " name="enddate" id="enddate" value="<?php if(isset($enddate)){ echo $enddate; } ?>" placeholder=" Enter End Date" required>
                  </div>
                  
                  <div class="form-group col-md-3">
                      <?php
                      if(isset($tabinputtextid)){?>

                       <input type="text" class="form-control required title-case text" name="tabinputtextid" id="tabinputtextid" value="<?php if(isset($tabinputtextid)){ echo $tabinputtextid; } ?>" disabled="">
                       <?php }?>



                      <select name="tabinputtextid" id="tabinputtextid"class="form-control" required="">
                        <option value="">Select Input Text</option>


                    <?php foreach($tabinputtext as $tabinputtext)
                        {

                        echo '<option value="'. $tabinputtext->tabinputtextid.'" '.$selected.'>'. $tabinputtext->tabinputtext.'</option>';
                                        
                         }
                        ?>  

                         
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <?php
                      if(isset($levelid)){?>

                       <input type="text" class="form-control required title-case " name="levelid" id="levelid" value="<?php if(isset($levelid)){ echo $levelid; } ?>" disabled="">
                       <?php }?>



                      <select name="levelid" id="levelid"class="form-control" required="">
                    <option value="">Select Level</option>
         
                      <?php foreach($level as $level)
                        {

                        echo '<option value="'. $level->levelid.'" '.$selected.'>'. $level->levelname.'</option>';
                                        
                         }
                        ?>  

                     
                  </select>
                  </div>
                   <div class="form-group col-md-3">
                    <input type="number" class="form-control required title-case text notext" name="fromage" id="fromage" value="<?php if(isset($fromage)){ echo $fromage; } ?>" placeholder="From Age " required>
                  </div>
                   <div class="form-group col-md-3">
                    <input type="number" class="form-control required title-case text notext" name="toage" id="toage" value="<?php if(isset($toage)){ echo $toage; } ?>" placeholder=" To Age" required>
                  </div>
                  <div class="form-group col-md-6">
                    <?php
                      if(isset($competitionusertype)){?>

                       <input type="text" class="form-control required title-case text" name="competitionusertype" id="competitionusertype" value="<?php if(isset($competitionusertype)){ echo $competitionusertype; } ?>" disabled="">
                       <?php }?>
                    <select name="competitionusertype" id="competitionusertype"class="form-control" >
                    <option value="">Competition User Type</option>
                    <option value="1">All</option>
                    <option value="2">one to one</option>
                   
                  </select>
                  </div>
                     
                  
                  <div class="form-group col-md-6">
                 <input type="file" id="photo" name="photo" onchange="readURL(this);" />

                 <?php
                 if(isset($photo)){?>
                  <img id="blah" src="<?php if(isset($photo)){ echo base_url();?>assets/images/competition/<?php echo $photo; } ?>" alt="" height="150px" width="150px" />

                  <?php }?>


                  </div>
                 <div class="form-group col-md-12">
                    <textarea type="text" class="form-control required title-case text " name="termsandconditions" id="termsandconditions" value="" placeholder="Enter Terms and Conditions" required><?php if(isset($termsandconditions)){ echo $termsandconditions; } ?></textarea>
                  </div>
                 
                    <div class="form-group col-md-12">
                    <textarea class="textarea" name="instruction" id="instruction" placeholder="Enter Instruction" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php if(isset($instruction)){ echo $instruction; } ?></textarea>
                   </div>
                  <div class="form-group col-md-12">
                    <div class="form-check">
              
                       <div class="row">
                        <div class="col-md-4">
                          <?php  if(empty($uploadfile)){$uploadfile="";} ?>
                        <input type="checkbox" id="uploadfile" name="uploadfile" value="1" <?php if($uploadfile=="1") { echo "checked";} ?> > Upload File
                        </div>
                        </div> <br> 
                        <div class="row">
                          <div class="col-md-2">
                             <?php  if(empty($email)){$email="";} ?>
                        <input type="checkbox" id="email"  name="email" value="1" <?php if($email=="1") { echo "checked";} ?>> E-mail </div><div class="col-md-10"><input type="email" class="form-control required title-case text " name="emailaddress" id="emailaddress" value="<?php if(isset($emailaddress)){ echo $emailaddress; } ?>" placeholder=" Enter E-mail Address" ></div>
                      </div><br>
                       <div class="row">
                          <div class="col-md-2">
                             <?php  if(empty($whatsapp)){$whatsapp="";} ?>
                        <input type="checkbox" id="whatsapp" name="whatsapp" value="1"<?php if($whatsapp=="1") { echo "checked";} ?> > Whatsapp  </div><div class="col-md-10"><input type="text" class="form-control required title-case text " name="whatsappnumber" id="whatsappnumber" maxlength="10" minlength="10" value="<?php if(isset($whatsappnumber)){ echo $whatsappnumber; } ?>" placeholder=" Enter Whatsapp Number" ></div>
                      </div>

                    </div>
                   </div>

 

                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <?php if(isset($update)){ ?>
                    <button id="btn_update" type="submit" class="btn btn-primary">Update </button>
                  <?php } else{ ?>
                    <button id="btn_save"  type="submit" class="btn btn-success px-4">Add</button>
                  <?php } ?>
                  <a href="<?php echo base_url() ?>User/dashboard" class="btn btn-default ml-4">Cancel</a>
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
  <script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> -->
  
  <script>
   
   $('.pis').bind("click" , function () {
          $('#photo').click();
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
          }


       
  </script>
 <script type="text/javascript">
  $(document).ready(function(){

    $("#quizsubject").hide();

    $('#competitiontypeid').on('change', function() {
      if ( this.value == '1')
      {
        $("#quizsubject").show();
      }
      else
      {
        $("#quizsubject").hide();
      }
    });
});
</script> 


</body>
</html>
