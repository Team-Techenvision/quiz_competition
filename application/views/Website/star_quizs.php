<!DOCTYPE html>
<html>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper profilewrapper">
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
            <div class="card-header ">
            
              <h5 class="card-title text-center h4"><!-- <i class="fa fa-list"></i>  -->
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
               <form id="form_action" role="form" action="" method="post"  class="m-3">
<!-- 
               < ?php $q = 1; foreach ($result as $value) { ?>
                  <div class="mb-3 p-2 border border-success">
                   <! --  < ?php print_r($value); ?> - ->

                  <span class="h5 d-flex text-capitalize">< ?php echo $q." ". $value['question']; ?> </span>             
                 <! -- <input type="text" name="quiz_id" value="< ?php echo $value['dynamiccompetitionid'];?>"> - ->              

                  < ?php if($value['answertype']=="1"){ ?>
                  <input type="text" name="< ?php echo $value['dynamiccompetitionid'];?>" value="< ?php echo $value['dynamiccompetitionid'];?>">
                    < ?php $myString = $value['optionvalues'];
                      $myArray = explode(',', $myString);                       
                      foreach($myArray as $my_Array)
                      { ?>
                        
                         <div class="radio">
                           <label><input type="radio" name="rdb_ans" value="< ?php echo $my_Array ;?>" >  < ?php echo $my_Array ;?></label>
                         </div>
                      < ?php } ?>
                    
                  < ?php } elseif ($value['answertype']=="2") 
                  {?>
                   <input type="text" name="quiz_id" value="< ?php echo $value['dynamiccompetitionid'];?>">
                      < ?php $myString = $value['optionvalues'];
                      $myArray = explode(',', $myString);
                      foreach($myArray as $my_Array)
                      { ?>
                      <div class="checkbox">
                        <label><input type="checkbox" name="check_ans[]" value="< ?php echo $my_Array ;?>"> < ?php echo $my_Array ;?></label>
                        </div>                     
                        < ?php } ?>                        
                   
                  < ?php } elseif ($value['answertype']=="3") { ?>
                   <input type="text" name="< ?php echo $value['dynamiccompetitionid'];?>" value="< ?php echo $value['dynamiccompetitionid'];?>">
                      <input type="text" name="txt_ans" class="form-control w-75" placeholder="Answers....." style="background-color:#c1bebe;">
                < ?php  } elseif ($value['answertype']=="4") { ?>
                    <input type="text" name="< ?php echo $value['dynamiccompetitionid'];?>" value="< ?php echo $value['dynamiccompetitionid'];?>">
                    <textarea name="txtarea_ans" placeholder="Answers will be written here..."class="form-control w-75" style="background-color:#c1bebe;"></textarea>
                < ?php } else { ?>
                  <input type="text" name="< ?php echo $value['dynamiccompetitionid'];?>" value="< ?php echo $value['dynamiccompetitionid'];?>">
                                 <select name="ddl_ans" id="ansoption" class="form-control w-25">
                                 < ?php $myString = $value['optionvalues'];
                                  $myArray = explode(',', $myString);
                                  foreach($myArray as $my_Array)
                                  { ?>
                                    <option value="< ?php echo $my_Array ;?>"> < ?php echo $my_Array ;?></option>
                                  < ?php } ?>
                                  </select>
                < ?php } ?>
                </div>
               < ?php $q++; } ?>              
                <div class="d-flex m-5">
                  <input type="submit" name="btn_submit" value="Submit" class="btn btn-primary">
                </div> -->

               <?php $q = 1; foreach ($result as $value) { ?>
                  <div class="mb-3 p-2 border border-success">
                   <!--  < ?php print_r($value); ?> -->

                  <span class="h5 d-flex text-capitalize"><?php echo $q." ". $value['question']; ?> </span>             
                 <!-- <input type="text" name="quiz_id" value="< ?php echo $value['dynamiccompetitionid'];?>"> -->              

                  <?php if($value['answertype']=="1"){ ?>
                  <input type="text" name="quiz_id[0]['quiz_id']" value="<?php echo $value['dynamiccompetitionid'];?>">
                    <?php $myString = $value['optionvalues'];
                      $myArray = explode(',', $myString);                       
                      foreach($myArray as $my_Array)
                      { ?>
                        
                         <div class="radio">
                           <label><input type="radio" name="quiz_id1[1]['quiz_id1']" value="<?php echo $my_Array ;?>" required>  <?php echo $my_Array ;?></label>
                         </div>
                      <?php } ?>
                    
                  <?php } elseif ($value['answertype']=="2") 
                  {?>

                   <input type="text" name="quiz_id[0]['quiz_id']" value="<?php echo $value['dynamiccompetitionid'];?>" required>

                      <?php $myString = $value['optionvalues'];
                      $myArray = explode(',', $myString);
                      foreach($myArray as $my_Array)
                      { ?>
                      <div class="checkbox">
                        <label><input type="checkbox" name="quiz_id1[1]['quiz_id1']" value="<?php echo $my_Array ;?>" > <?php echo $my_Array ;?></label>
                        </div>                     
                        <?php } ?>                        
                   
                  <?php } elseif ($value['answertype']=="3") { ?>

                   <input type="text" name="quiz_id[0]['quiz_id']" value="<?php echo $value['dynamiccompetitionid'];?>" >

                      <input type="text" name="quiz_id1[1]['quiz_id1']" class="form-control w-75" placeholder="Answers....." style="background-color:#c1bebe;" required>

                <?php  } elseif ($value['answertype']=="4") { ?>

                    <input type="text" name="quiz_id[0]['quiz_id']" value="<?php echo $value['dynamiccompetitionid'];?>">

                    <textarea name="quiz_id1[1]['quiz_id1']" placeholder="Answers will be written here..."class="form-control w-75" style="background-color:#c1bebe;" required></textarea>

                <?php } else { ?>

                  <input type="text" name="quiz_id[0]['quiz_id']" value="<?php echo $value['dynamiccompetitionid'];?>">

                                 <select name="quiz_id1[1]['quiz_id1']" id="ansoption" class="form-control w-25" required>

                                 <?php $myString = $value['optionvalues'];
                                  $myArray = explode(',', $myString);
                                  foreach($myArray as $my_Array)
                                  { ?>
                                    <option value="<?php echo $my_Array ;?>"> <?php echo $my_Array ;?></option>
                                  <?php } ?>
                                  </select>
                <?php } ?>
                </div>
               <?php $q++; } ?>              
                <div class="d-flex m-5">
                  <button class="btn btn-primary">Submit</button>
                  <!--<input type="submit" name="btn_submit" value="Submit" class="btn btn-primary">-->
                </div>
                  </form>
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
 
</body>
</html>
