

<!DOCTYPE html>
<html>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper"  style="background-image:url('<?php echo base_url(); ?>/assets/images/backcomp1.jpg');">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper competitionwrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 mt-1">
            <!-- <h4>COMPETITION INFORMATION</h4> -->
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
            
              <h4 class="card-title text-center" style="color: crimson;"><!-- <i class="fa fa-list"></i>  -->Competition List Information</h4>
             <!--  <div class="card-tools col-md-2 " style=" margin-left: 80%;">
                <a href="add_competition" class="btn btn-sm btn-block btn-primary "  >Add Competition</a>
              </div> -->
            </div>
            <!-- /.card-header -->
            <div class="card-body text-center">
              <div class="form-group float-right search btn-group">
                  <input class="form-control search-input" id="tableSearch" type="search" placeholder="Search" autocomplete="off"><br>
              </div>

              <table id="example1" class="table table-bordered table-hover "  data-search="true">
                <thead class="thead-light">
                <tr>
                  <th class="wt_50">#</th>
                  <th>Title</th>
                  <th>Sub Title</th>
                  <th>Option</th>
                 
               
                </tr>
                </thead>
                <tbody>
                  <?php $i = 0;
                  foreach ($mycompetition_list as $list) {
                    // print_r($list);die();
                    $comptype = $list->competitiontypeid;
                    $upload = $list->uploadfile;
                    $email = $list->email;
                    $whatsapp = $list->whatsapp;
                    // print_r($upload);
                    // print_r($email);
                    // print_r($whatsapp);
                    $i++; ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $list->title ?></td>
                    <td><?php echo $list->subtitle ?></td>
                   
                    
                   <!--  <td><img src="< ?php echo base_url("assets/images/competition/".$list->photo);?>"height="150px" width="150px"/></td> -->
                      <td> 
                        <form id="form_action" role="form" action="" method="post" enctype="multipart/form-data">
                           <?php if($comptype=='2'){ ?>
                             
                              <div class="row">
                                 <?php if($upload=='1') {?>
                                    <div class="form-group col-md-12">
                                   <input type="file" id="photo" name="photo" onchange="readURL(this);" />

                                  <!--  <?php if(isset($photo)){?> -->
                                    <img id="blah" src="<?php if(isset($photo)){ echo base_url();?>assets/images/competition/<?php echo $photo; } ?>" alt="" height="150px" width="150px" />

                                  <!--   <?php }?> -->

                                    <button id="btn_save"  type="submit" class="btn btn-success px-4">Submit</button>


                                    </div>
                                <?php  } ?>
                                <?php if($whatsapp=='1') {?>
                                   <div class="form-group col-md-2">
                                    <a href="https://wa.me/91<?php echo $list->whatsappnumber; ?>?text=I%20am%20interested%20in%20your%20competition"><img src="<?php echo base_url();?>assets/images/whatsapp.jpg" height="40px" width="40px"/></a>
                                  </div>
                                <?php }?>
                                 <?php if($email=='1') {?>
                                   <div class="form-group col-md-2">
                                  <a href = "mailto: abc@example.com"><img src="<?php echo base_url();?>assets/images/email.jpg" height="40px" width="40px"/></a>
                                  </div>
                                <?php }?>
                                  </div>

                                 

                            
                              <!--  href="<?php  echo base_url(); ?>WebsiteController/star_competion/<?php echo $list->competitionid ?>" -->


                             <?php }elseif ($comptype=='3') { ?>
                             

                              <div class="row">
                                 <?php if($upload=='1') {?>
                                    <div class="form-group col-md-12">
                                   <input type="file" id="photo" name="photo" onchange="readURL(this);" />

                                  <!--  <?php if(isset($photo)){?> -->
                                    <img id="blah" src="<?php if(isset($photo)){ echo base_url();?>assets/images/competition/<?php echo $photo; } ?>" alt="" height="150px" width="150px" />

                                  <!--   <?php }?> -->

                                    <button id="btn_save"  type="submit" class="btn btn-success px-4">Submit</button>


                                    </div>
                                <?php  } ?>
                              <?php if($whatsapp=='1') {?>
                                   <div class="form-group col-md-2">
                                    <a href="https://wa.me/91<?php echo $list->whatsappnumber; ?>?text=I%20am%20interested%20in%20your%20competition"><img src="<?php echo base_url();?>assets/images/whatsapp.jpg" height="40px" width="40px"/></a>
                                  </div>
                                <?php }?>
                                 <?php if($email=='1') {?>
                                   <div class="form-group col-md-6">
                                  <a href="mailto:priyanka.techenvision@gmail.com"><img src="<?php echo base_url();?>assets/images/email.jpg" height="40px" width="40px"/></a>
                                  </div>
                                <?php }?>
                                  </div>

                                 
                             <?php }else {?>
                            
                               <a href="<?php  echo base_url(); ?>WebsiteController/star_competion/<?php echo $list->competitionid ?>" class="btn btn-info">Start</a>
                            <?php } ?>

                             </form>
                          
                        </td>
                  <?php } ?>
                  </tr>

                </tbody>
              </table>
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
  <!-- <script type="text/javascript">
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

  </script> -->
  <script type="text/javascript">
    // Filter table

$(document).ready(function(){
  $("#tableSearch").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#example1 tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
  </script>

</body>
</html>
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
