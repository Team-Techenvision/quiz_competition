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
                <h3 class="card-title">Add Assign Competition</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="form_action" role="form" action="assigncompetition_list" method="post" >
                <div class="card-body row">
                                
                     <div class="form-group col-md-6">
                    <!--   <?php
                      if(isset($competitionid)){?>

                       <input type="text" class="form-control required title-case text" name="competitionid" id="competitionid" value="<?php if(isset($competitionid)){ echo $competitionid; } ?>" disabled="">
                       <?php }?> -->



                      <select name="competitionid" id="competitionid"class="form-control" required="">
                    <option value="">Select Input Text</option>
         
                    <?php foreach($competition as $competition)
                    {

                    echo '<option value="'. $competition->competitionid.'" '.$selected.'>'. $competition->title.'</option>';
                                    
                     }
                    ?>  

                     
                  </select>
                  </div>
                  <div class="form-group col-md-4">
                     <!--  <?php
                      if(isset($pincode)){?>

                       <input type="text" class="form-control required title-case text" name="pincode" id="pincode" value="<?php if(isset($pincode)){ echo $pincode; } ?>" disabled="">
                       <?php }?>
 -->


                      <select name="pincode" id="pincode"class="form-control" required="">
                    <option value="">Select Input Text</option>
         
                    <?php foreach($pincode as $pincode)
                    {

                    echo '<option value="'. $pincode->profileid.'" '.$selected.'>'. $pincode->pincode.'</option>';
                                    
                     }
                    ?>  

                     
                  </select>
                  </div>
                   <div class="form-group col-md-2">
                   <button id="btn_search" type="search" class="btn btn-primary">Search </button>
                 </div>
                  <!-- table fetch Participant name -->
                   <?php
                               if(isset($assigncompetition_list)){?>
                  <div class="form-group col-12">

                             

                 <table id="" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th class="wt_50">#</th>
                  <th>User Name</th>
                  <th class="wt_50">Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php $i = 0;
                  foreach ($assigncompetition_list as $list) {
                    $i++; ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $list->user_name ?></td>
                    <td>
                      <button class="btn btn-primary">
                        Add Competition 
                     </button>
                    </td>
                  <?php } ?>
                  </tr>

                </tbody>
              </table> 
              
                 </div>
                  <?php } ?>  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <?php if(isset($update)){ ?>
                    <button id="btn_update" type="submit" class="btn btn-primary">Update </button>
                  <?php } else{ ?>
                    <button id="btn_save" type="submit" class="btn btn-success px-4">Add</button>
                  <?php } ?>
                  <a href="" class="btn btn-default ml-4">Cancel</a>
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
 
<script type="text/javascript">
 $("#btn_search").click(function () {
     // $("#mytable").each(function () {
        
             // $(this).append(tds);
        
     // });
});
</script>
</body>
</html>
