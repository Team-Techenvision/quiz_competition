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
            <h1>Prize Information</h1>
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
                <h3 class="card-title">Add Prize</h3>
                 <div class="card-tools col-md-2 " >
                <a href="<?php echo base_url(); ?>User/prize_list" class="btn btn-sm btn-block btn-primary "  >Prize List</a>
              </div>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="form_action" role="form" action="" method="post" >
                <div class="card-body row">
                  <div class="form-group col-md-6">
                   <label>Competiton Title <span style="color: red;">*</span></label>
                    
                      <?php
                      if(isset($competitionid)){ 

                       ?>

                       <input type="text" class="form-control required title-case text" name="competitionid" id="competitionid" value="<?php if(isset($competitionid)){ echo $competitionid; } ?>" disabled="">

                       <?php }?>



                      <select name="competitionid" id="competitionid"class="form-control" required="">
                    <option value="">Select Competition</option>

         
                   <?php foreach($competition as $competition)
                    {

                    echo '<option value="'. $competition->competitionid.'" '.$selected.'>'. $competition->title.'</option>';
                                    
                     }
                    ?>  

                     
                  </select>
                  </div>
                   <div class="form-group col-md-6">
                    <label>Level <span style="color: red;">*</span></label>
                      <?php
                      if(isset($levelid)){
                     
                       ?>

                       <input type="text" class="form-control required title-case text" name="levelid" id="levelid" value="<?php if(isset($levelid)){ echo $levelid; } ?>" disabled="">
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
                   <div class="form-group col-md-4">
                    <label>Winner Position <span style="color: red;">*</span></label>
                    <?php
                      if(isset($levelid)){
                     
                       ?>

                       <input type="text" class="form-control required title-case text" name="winnerposition" id="winnerposition" value="<?php if(isset($winnerposition)){ echo $winnerposition; } ?>" disabled="">
                       <?php  }?>

                    <select name="winnerposition" id="winnerposition" class="form-control" required="">
                    <option value="">Select Winner Position</option>
                    <option value="1">1st Position</option>
                    <option value="2">2nd Position</option>
                    <option value="3">3rd Position</option>
                   
                  </select>
                   </div>
                   <div class="form-group col-md-4">
                    <label>Prize <span style="color: red;">*</span></label>
                     <input type="number" min="0" step="1" oninput="validity.valid||(value='');" class="form-control required title-case " name="prize" id="prize" value="<?php if(isset($prize)){ echo $prize; } ?>" placeholder="Enter prize " required >
                   </div>
                    
                 
                 </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <?php if(isset($update)){ ?>
                    <button id="btn_update" type="submit" class="btn btn-primary">Update </button>
                  <?php } else{ ?>
                    <button id="btn_save" type="submit" class="btn btn-success px-4">  Add</button>
                  <?php } ?>
                  <a href="<?php echo base_url() ?>User/prize_list" class="btn btn-default ml-4">Cancel</a>
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
 
</body>
</html>
