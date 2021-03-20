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
            <h1>User Upload Files Information</h1>
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
                <h3 class="card-title">Check and Download User Uploaded Files</h3>
                 <div class="card-tools col-md-5 " >
                <a href="<?php echo base_url(); ?>User/quiz_user_list" class="btn btn-sm btn-block btn-primary" >Competition Participated User List</a>
              </div>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="form_action" role="form" action="<?php echo base_url(); ?>User/download/<?php echo $competitionid; ?>" method="post" >
                <div class="card-body row">

                     <div class="form-group col-sm-12 text-center">
                     <h4><?php echo $title; ?></h4>
                
                      </div>
                  
                      <div class="form-group col-sm-12">
                      <label>Name : </label>
                      <?php foreach ($users as $value) {
                        echo $value->user_name;
                      } ?>
                      </div>

                      <div class="form-group col-sm-12">
                        <?php if(empty($uploadimage)){ }else{?>
                          <img id="blah" src="<?php echo base_url(); ?>/assets/images/competition_images/<?php echo $uploadimage; ?>" alt="" width="320" height="240" />

                          <br><br>
                         <!-- 
                          <a class="btn btn-success btn-sm"><span class="glyphicon glyphicon-download-alt"></span> Download</a> -->

                          <button id="" type="submit"  class="btn btn-primary"><span class="glyphicon glyphicon-download-alt"></span>Download </button>
                        <?php } ?>

                         <?php if(empty($uploadaudio)){ }else{?>
                          <audio src="<?php echo base_url(); ?>/assets/images/competition_audio/<?php echo $uploadaudio; ?>" controls></audio>
                        <?php } ?>

                           <?php if(empty($uploadvedio)){ }else{?>
                          <video width="320" height="240" controls>
                          <source src="<?php echo base_url(); ?>/assets/images/competition_video/<?php echo $uploadvedio; ?>" > 
                          </video>
                        <?php } ?>

                            <?php if(empty($uploadfile)){ }else{?>
                          <iframe src="<?php echo base_url(); ?>/assets/images/competition_files/<?php echo $uploadfile; ?>" style="width:100%;height:700px;"></iframe> 

                        <?php } ?>
                      </div>
                   
                 
                 </div>
                <!-- /.card-body -->
                <div class="card-footer">
                <!--   < ?php if(isset($update)){ ?>
                    <button id="btn_update" type="submit" class="btn btn-primary">Update </button>
                  < ?php } else{ ?> -->
                   <!--  <button id="btn_save" type="submit" class="btn btn-success px-4">  Add</button> -->
                  <!-- < ?php } ?> -->
                   <a href="<?php echo base_url(); ?>User/quiz_user_list" onclick="this.form.reset();" class="btn btn-default ml-4">Cancel</a>
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
 <!-- <script> 
  function download(){ 
    axios({ 
      url:'https://source.unsplash.com/random/500x500', 
      method:'GET', 
      responseType: 'blob' 
  }) 
  .then((response) => { 
      const url = window.URL 
      .createObjectURL(new Blob([response.data])); 
          const link = document.createElement('a'); 
          link.href = url; 
          link.setAttribute('download', 'image.jpg'); 
          document.body.appendChild(link); 
          link.click(); 
  }) 
  } 
    
</script>  -->
</body>
</html>
