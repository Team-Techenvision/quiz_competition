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
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="form_action" role="form" action="" method="post" enctype="multipart/form-data">
                <div class="card-body row">
                  <div class="form-group col-md-12">
                    <input type="text" class="form-control required title-case text txtOnly" name="title" id="title" value="<?php if(isset($title)){ echo $title; } ?>" placeholder="Enter title" required>
                  </div>
                  
                  <div class="form-group col-md-12">
                    <input type="text" class="form-control txtOnly"  name="subtitle" id="subtitle" value="<?php if(isset($subtitle)){ echo $subtitle; } ?>" placeholder="Enter sub title" required>
                  </div>
                   <div class="form-group col-md-12">
                    <input type="text" class="form-control required title-case text " name="class" id="class" value="<?php if(isset($class)){ echo $class; } ?>" placeholder="Enter From Class - To Class" required>
                  </div>
                     <div class="form-group col-md-6">
                      <?php
                      if(isset($photo)){?>

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
                 <input type="file" id="photo" name="photo" onchange="readURL(this);" />

                 <?php
                 if(isset($photo)){?>
                  <img id="blah" src="<?php if(isset($photo)){ echo base_url();?>assets/images/competition/<?php echo $photo; } ?>" alt="" height="150px" width="150px" />

                  <?php }?>


                  </div>
                 <div class="form-group col-md-12">
                    <textarea type="text" class="form-control required title-case text" name="termsandconditions" id="termsandconditions" value="" placeholder="Enter Terms and Conditions" required><?php if(isset($termsandconditions)){ echo $termsandconditions; } ?></textarea>
                  </div>
                 
                    <div class="form-group col-md-12">
                    <textarea type="text" class="form-control required title-case text" name="instruction" id="instruction" value="" placeholder="Enter Instruction" required><?php if(isset($instruction)){ echo $instruction; } ?></textarea>
                  </div>
                 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <?php if(isset($update)){ ?>
                    <button id="btn_update" type="submit" class="btn btn-primary">Update </button>
                  <?php } else{ ?>
                    <button id="btn_save" type="submit" class="btn btn-success px-4">Add</button>
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



</body>
</html>
