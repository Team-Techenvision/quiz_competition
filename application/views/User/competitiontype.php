
 
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
            <h1>Competition Type Information</h1>
           
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
                
                <h3 class="card-title">Add Competition Type</h3>
                <div class="card-tools col-md-4 " >
                <a href="<?php echo base_url(); ?>User/competitiontype_list" class="btn btn-sm btn-block btn-primary ">Competition Type List</a>
              </div>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="form_action" role="form" action="" method="post" autocomplete="off" >
                <div class="card-body row">
                       
                  <div class="form-group col-md-12">
                    <label>Competition Type <span style="color: red;">*</span></label>
                    <input type="text" class="form-control required title-case text " name="competitiontype" id="competitiontype" value="<?php if(isset($competitiontype)){ echo $competitiontype; } ?>"  onkeypress="return blockSpecialChar(event)"placeholder="Enter Competition Type" required>

                    <p class="comptypeval mb-0" id="comptypeval" style="font-size:14px;  color: red;"></p>

                  </div>
                  <!--  <div class="form-group col-md-6" hidden>
                    < ?php  if(empty($quiz_flag)){$quiz_flag="";} ?>
                   <div class="radio">
                        <label><input type="radio" name="quiz_flag" id="quiz_flag" value="1"< ?php if($quiz_flag=="1") { echo "checked";} ?> > Quiz</label>
                    </div>
                  </div> -->
                  
                </div>
                  
              
                <!-- /.card-body -->
                <div class="card-footer">
                  <?php if(isset($update)){ ?>
                    <button id="btn_update" type="submit" class="btn btn-primary">Update </button>
                  <?php } else{ ?>
                    <button id="btn_save"  type="submit" class="btn btn-success px-4">Add</button>
                  <?php } ?>
                   <a href="<?php echo base_url(); ?>User/competitiontype_list" onclick="this.form.reset();" class="btn btn-default ml-4">Cancel</a>
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
  <script type="text/javascript">
  <?php if($this->session->flashdata('competitiontype_exists_error')){ ?>
    $(document).ready(function(){
      toastr.error('Competition Type Already Exists');
    });
  <?php } ?>
</script>
<script>
   
 $(document).ready(function(){

  $('#competitiontype').on('change',function(){
    // alert("hii");

     var comptype = $('#competitiontype').val();
     // alert(mobile);
    
   
      $.ajax({
           url:"<?php echo base_url(); ?>User/check_competitiontype",
           method:"POST",
           data:{competitiontype:comptype},

           success:function(data)
            {  
               // alert(data);
               // console.log(data);
                 if(data != "true"){

                 $('.comptypeval').text("Competition Type Already Exists.");
                 $('.comptypeval').show().delay(2000).fadeOut();
                 $('#competitiontype').val('');

                   // $('.comptypeval').hide();

                 }
                //  else{
                // // alert(data);
                // $('.comptypeval').html(data);
                //  $('.comptypeval').show().delay(2000).fadeOut();
                //  $('#competitiontype').val('');
                // }
           }
         });
       // e.preventdefault();
  });
      // $(".comptypeval").fadeIn();
  });

</script>


</body>
</html>
