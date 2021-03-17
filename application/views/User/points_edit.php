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
            <h1>Points Information</h1>
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
                 <?php if(isset($update)){ ?>
                    <h3 class="card-title">Edit Points</h3>
                  <?php } else{ ?>
                    <h3 class="card-title">Add Points</h3>
                  <?php } ?>
               
                 <div class="card-tools col-md-2 " >
                <a href="<?php echo base_url(); ?>User/points_list" class="btn btn-sm btn-block btn-primary "  >Points List</a>
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

                       <input type="hidden" class="form-control required title-case text" name="competition" id="competition" value="<?php if(isset($competitionid)){ echo $competitionid; } ?>" disabled="">

                       <?php }?>



                      <select name="competitionid" id="competitionid"class="form-control" disabled="">
                    <option value="">Select Competition</option>

         
                   <?php foreach($competition as $competition)
                    {

                    echo '<option value="'. $competition->competitionid.'" '.$selected.'>'. $competition->title.'</option>';
                                    
                     }
                    ?>  

                     
                  </select>
                  </div>
                   <div class="form-group col-md-6">
                    <label>Winner Position</label>

                     <input type="text" class="form-control" name="winnerposition" value="<?php if(isset($winnerposition)){ echo $winnerposition; } ?>" disabled>
                   </div> 
                     <div class="form-group col-md-6">
                    <label>Points <span style="color: red;">*</span></label>

                     <input type="text" class="form-control" name="points" value="<?php if(isset($points)){ echo $points; } ?>" required>
                   </div> 
                     <div class="form-group col-md-6">
                    <label>Conversion Points <span style="color: red;">*</span></label>

                     <input type="text" class="form-control" name="conversionpoints" value="<?php if(isset($conversionpoints)){ echo $conversionpoints; } ?>" required>
                   </div> 
                  
                  

                
                
                 
                 </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <?php if(isset($update)){ ?>
                    <button id="btn_update" type="submit" class="btn btn-primary">Update </button>
                  <?php } else{ ?>
                    <button id="btn_save" type="submit" class="btn btn-success px-4">  Add</button>
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
  <script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>
  <script>
$(document).ready(function(){

 var competition = $('#competition').val();

 $("#competitionid option[value='"+competition+"']").attr("selected","selected");

});
</script>
 
</body>
</html>
