

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
            
              <h5 class="card-title text-center h4"><!-- <i class="fa fa-list"></i>  -->Quiz Test</h5>
             <!--  <div class="card-tools col-md-2 " >
                <a href="add_profile" class="btn btn-sm btn-block btn-primary "  >Add Participation</a>
              </div> -->
            </div>
            <!-- /.card-header -->
              <div class="card-body">
                <div class="container border border-dark">
               <form id="form_action" role="form" action="<?php echo base_url(); ?>WebsiteController/" method="post" enctype="multipart/form-data" class="m-3">

               <?php $q = 1; foreach ($result as $value) { ?>
                  <div class="mb-3 p-2 border border-success">
                  <span class="h5 d-flex text-capitalize"><?php echo $q." ". $value['question']; ?> </span>
                  <?php if($value['answertype']=="1"){ ?>
                  
                    <?php $myString = $value['optionvalues'];
                      $myArray = explode(',', $myString);                       
                      foreach($myArray as $my_Array)
                      { ?>
                         <div class="radio">
                           <label><input type="radio" name="rodio" value="<?php echo $my_Array ;?>" >  <?php echo $my_Array ;?></label>
                         </div>
                      <?php } ?>
                    
                  <?php } elseif ($value['answertype']=="2") 
                  {?>
                     
                      <?php $myString = $value['optionvalues'];
                      $myArray = explode(',', $myString);
                      foreach($myArray as $my_Array)
                      { ?>
                      <div class="checkbox">
                        <label><input type="checkbox" value="<?php echo $my_Array ;?>"> <?php echo $my_Array ;?></label>
                        </div>                     
                        <?php } ?>                        
                   
                  <?php } elseif ($value['answertype']=="3") { ?>
                      <input type="text" name="textans" class="form-control w-75" placeholder="Answers....." style="background-color:#c1bebe;">
                <?php  } elseif ($value['answertype']=="4") { ?>
                    <textarea placeholder="Answers will be written here..."class="form-control w-75" style="background-color:#c1bebe;"></textarea>
                <?php } else { ?>
                                 <select name="ansoption" id="ansoption" class="form-control w-25">
                                 <?php $myString = $value['optionvalues'];
                                  $myArray = explode(',', $myString);
                                  foreach($myArray as $my_Array)
                                  { ?>
                                    <option value="<?php echo $my_Array ;?>" name="rodio"> <?php echo $my_Array ;?></option>
                                  <?php } ?>
                                  </select>
                <?php } ?>
                </div>
               <?php $q++; } ?>              
                <div class="d-flex m-5">
                  <input type="button" name="btn_submit" value="Submit" class="btn btn-primary">
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
  <script>
   
   $('.pis').bind("click" , function () {
          $('#profile_image').click();
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
