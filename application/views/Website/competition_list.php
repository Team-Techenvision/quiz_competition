
<!DOCTYPE html>
<html>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper"  style="background-image:url('<?php echo base_url(); ?>/assets/images/17973908.jpg');background-blend-mode: overlay;
    background-repeat: no-repeat;
    background-size: cover;
    background-color: #586f8c36;">
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
          <?php   foreach ($mycompetition_list as $list) { 
// print_r($list);
          ?>
          <!-- left column -->
          <div class="col-xl-3 col-md-3 col-sm-12 col-12 ">
            <div class="card hovereffect">
              <img class="competitioncard" src="<?php echo base_url(); ?>/assets/images/competition/<?php echo $list->photo; ?>" height="250" >
              <div class="overlay"></div>

            </div>
             <center><label class="complabelT"> <a href="<?php echo base_url(); ?>WebsiteController/competition_usersave/<?php echo $list->competitionid; ?>" value="<?php echo $list->competitionid; ?>"><?php echo $list->title; ?></a></label></center>
          </div>
           <?php } ?>
        </div>
     
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
  </div>
