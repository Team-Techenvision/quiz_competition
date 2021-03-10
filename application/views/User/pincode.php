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
            <h1>Area Information</h1>
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
                <h3 class="card-title">Add Area</h3>
                <div class="card-tools col-md-2 " >
                <a href="pincode_list" class="btn btn-sm btn-block btn-primary "  >Area List</a>
              </div>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="form_action" role="form" action="" method="post">
                <div class="card-body row">
                 
                  <div class="form-group col-md-4">

                     <?php
                      if(isset($countryid)){?>

                      <input type="text" class="form-control required title-case text" name="countryid" id="countryid" value="<?php if(isset($countryid)){ echo $countryid; } ?>" disabled="">
                       <?php }?>
                      <select name="countryid" id="countryid"class="form-control" required="">
                    <option value="">Select Country</option>
                   <?php foreach($country1 as $country1)
                     {
                          echo '<option value="'. $country1->countryid.'" '.$selected.'>'. $country1->countryname.'</option>';

                               
                      }
                     ?>   
                    
                  </select>
                  </div>

                   <div class="form-group col-md-4">
                     <?php
                      if(isset($stateid)){?>

                      <input type="text" class="form-control required title-case text" name="stateid" id="stateid" value="<?php if(isset($stateid)){ echo $stateid; } ?>" disabled="">
                       <?php }?>
                      <select name="stateid" id="stateid"class="form-control" required="">
                        <option value="">Select State</option>state

                          <?php foreach($state as $state)
                          {
                          echo '<option value="'. $state->stateid.'" '.$selected.'>'. $state->statename.'</option>';
                          } ?>   
                   
                      </select>
                    </div>
                    <div class="form-group col-md-4">
                      
                      <input type="text" class="form-control required title-case text" placeholder="Enter District" name="district" id="district" value="<?php if(isset($district)){ echo $district; } ?>" >
                    </div>
                    <div class="form-group col-md-4">
                      
                      <input type="text" class="form-control required title-case text" placeholder="Enter City" name="city" id="city" value="<?php if(isset($city)){ echo $city; } ?>">

                     </div>
                     <div class="form-group col-md-3">
                       <input type="number" class="form-control required title-case text" name="pincode" id="pincode" value="<?php if(isset($pincode)){ echo $pincode; } ?>" placeholder="Enter Pincode" required>
                      </div>
                 
                 </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <?php if(isset($update)){ ?>
                    <button id="btn_update" type="submit" class="btn btn-primary">Update </button>
                  <?php } else{ ?>
                    <button id="btn_save" type="submit" class="btn btn-success px-4">Add</button>
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

</body>
</html>

