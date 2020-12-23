
<?php
  $company_list = $this->Website_Model->get_list_by_id('company_id','4','','','','','company');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quiz Competition </title>
    <link rel="apple-touch-icon" sizes="180x180" href="C:/xampp/htdocs/website/files/assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo base_url(); ?>assets/images/favicons/site.webmanifest">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.theme.default.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- plugin scripts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,500i,600,700,800%7CSatisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free-5.11.2-web/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/kipso-icons/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vegas.min.css">

    <!-- template styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/website.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">

    <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>
</head>

<body >
    <div class="preloader"><span></span></div><!-- /.preloader -->
    <div class="page-wrapper" style=" background-color:  linear-gradient( #141b29, #0c111b ); ">
       <!--  <div class="topbar-one">
            <div class="container">
                <div class="topbar-one__left">
                    <a href="#">needhelp@kipso.com</a>
                    <a href="#">444 888 0000</a>
                </div>/.topbar-one__left
                <div class="topbar-one__right">
                    <a href="#">Login</a>
                    <a href="#">Register</a>
                </div> /.topbar-one__right -->
            <!-- </div>/.container -->
        <!-- </div> /.topbar-one -->
        <header class="site-header site-header__header-one " style="background-color:;}">
            <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky">
                <div class="container clearfix">
                    <!-- Brand and toggle get grouped for better mobile display -->

                    <div class="logo-box clearfix">

                        <a class="navbar-brand" href="<?php echo base_url(); ?>">
                            <img src="<?php echo base_url('assets/images/companylogo/'.$company_list[0]->company_logo); ?>" class="main-logo" width="128" alt="" />
                        </a>

                        <!-- <div class="header__social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-square"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div> --><!-- /.header__social -->
                        <button class="menu-toggler" data-target=".main-navigation">
                            <span class="kipso-icon-menu"></span>
                        </button>
                    </div>
        <!-- /.logo-box -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="main-navigation ">
                        <ul class=" navigation-box navbox">
                            <li class="current">
                                <a class="menu text-white" href="<?php echo base_url(); ?>">Home</a>
                                <ul class="sub-menu">
                                    <!-- <li><a href="index.html">Home 01</a></li>
                                    <li><a href="index-2.html">Home 02</a></li>
                                    <li><a href="index-3.html">Home 03</a></li>
                                    <li><a href="#">Header Versions</a>
                                        <ul class="sub-menu">
                                            <li><a href="index.html">Header 01</a></li>
                                            <li><a href="index-2.html">Header 02</a></li>
                                            <li><a href="index-3.html">Header 03</a></li>
                                        </ul>
                                    </li>-->
                                </ul><!-- /.sub-menu -->
                            </li>
                            <li>
                                <a class="menu text-white" href="#">Pages</a>
                                <ul class="sub-menu">
                                    <!-- <li><a href="<?php echo base_url(); ?>About-Us">About Page</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="pricing.html">Pricing Plans</a></li>
                                    <li><a href="faq.html">FAQ'S</a></li> -->
                                </ul> <!-- /.sub-menu-->
                            </li>
                            <li>
                                <a class="menu text-white" href="#">Courses</a>
                                <ul class="sub-menu">
                                   <!--  <li><a href="courses.html">Courses</a></li>
                                    <li><a href="course-details.html">Course Details</a></li> -->
                                </ul> <!-- /.sub-menu-->
                            </li>
                            <li>
                                <a class="menu text-white" href="#">Teachers</a>
                                <!-- <ul class="sub-menu">
                                    <li><a href="teachers.html">Teachers</a></li>
                                    <li><a href="team-details.html">Teachers Details</a></li>
                                    <li><a href="become-teacher.html">Become Teacher</a></li>
                                </ul> --><!-- /.sub-menu -->
                            </li>
                            <li>
                                <a class="menu text-white" href="#">News</a>
                               <!--  <ul class="sub-menu">
                                    <li><a href="news.html">News Page</a></li>
                                    <li><a href="news-details.html">News Details</a></li>
                                </ul> --><!-- /.sub-menu -->
                            </li>
                            <li>
                                <a class="menu text-white" href="#">Contact</a>
                            </li>
                        </ul>



                    </div>


                    <!-- /.navbar-collapse -->
                         <div class="right-side-box" style="right:150px;">
                        
                    </div><!-- /.right-side-box -->
              <div class="right-side-box" >
                    <a class="login/register text-white login-btn" href="<?php echo base_url(); ?>WebsiteController/login"  data-toggle="modal" data-target="#login">Login </a> 
                    <!-- <a class="login/register text-white" href="<?php echo base_url(); ?>WebsiteController/add_registration" data-toggle="modal" data-target="#registration">Register</a> -->
                </div>

 <!---------------------------          Login Modal        ------------------------------------ -->

<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Login Information
</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
      <div class="modal-body">
      <form method="post" action="" style="margin-left: 50px;margin-right: 50px;">
        <div class="input-group mb-3">
          <input type="user_mobile" class="form-control" name="user_mobile" id="user_mobile" placeholder="Whatsapp No." required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <span class="text-red"> <?php echo form_error('user_mobile'); ?> </span>
       <!--  <div class="input-group mb-3">
          <input type="password" class="form-control" name="user_otp" id="user_otp" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div> 
        <span class="text-red"> <?php echo form_error('user_otp'); ?> </span>  -->
        
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> data-dismiss="modal"-->
         <div class="row">
          <div class="col-md-4" style="padding-left: 55px;">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div><!-- /.col -->
       
     
            <div class="form-group col-md-8" >
               <label >Don't have an account?  &nbsp; 
                <a class="text-primary t"  data-toggle="modal" data-target="#registration" href="<?php echo base_url(); ?>WebsiteController/add_registration">Register</a>
               </label>
            </div><!-- /.col -->
        </div>

      </form>    
       <div class="alert alert-danger p-2 msg_invalid" style="display:none" role="alert">
        Invalid Information
      </div>
      </div>


  <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<script type="text/javascript">
<?php if($this->session->flashdata('msg')){ ?>
  $(document).ready(function(){
    // alert();
    $('.msg_invalid').show().delay(5000).fadeOut();
  });
<?php } ?>
</script>
    </div>
  </div>
</div>


                                <!-- Registration Modal -->
<div class="modal fade" id="registration" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Registration Information
</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
      <div class="modal-body modal-bodyy">
    
        <form id="form_action" role="form" action="" method="post">
                <div class="card-body row">
                  <div class="form-group col-md-12">
                    <input type="text" class="form-control txtOnly" name="user_name" id="user_name" value="<?php if(isset($user_name)){ echo $user_name; } ?>" placeholder="Enter Participant Name" required>
                  </div>
                   
                  <div class="form-group col-md-6">

                   <?php
                      if(isset($user_pincode)){?>

                      <input type="text" class="form-control required title-case text" name="user_pincode" id="user_pincode" value="<?php if(isset($user_pincode)){ echo $user_pincode; } ?>" disabled="">
                       <?php }?> 
                      <select name="user_pincode" id="user_pincode"class="form-control" required="">
                    <option value="">Select Pincode</option>
                   <?php foreach($pincode as $pin)
                     {
                          echo '<option value="'. $pin->pincodeid.'" '.$selected.'>'. $pin->pincode.'</option>';

                               
                      }
                     ?>   
                    
                  </select>
                  </div>
                   <div class="form-group col-md-6">
                    <input type="number" class="form-control user_mobile" name="user_mobile" id="user_mobile" maxlength="10" value="<?php if(isset($user_mobile)){ echo $user_mobile; } ?>" placeholder="Enter Whatsapp No." required>
                  </div>
                  <div class="form-group form-check col-md-12">
                  <label class="form-check-label " style="margin-left: 20px;">
                    <input class="form-check-input title-case " style ="margin-top: 10px;     margin-bottom: -10px;" type="checkbox" name="remember" required> I agree <label class="text-primary t">Data Protection Policy</label> 
                  </label>
                </div>
                <div class="form-group col-md-12" style="margin-top: -12px;  margin-left: 6px;">
                  <label >Already have account  &nbsp; <a class="text-primary t" href="<?php echo base_url(); ?>WebsiteController/login">login now</a></label>
                  </div>
                
                </div>                           
                <!-- /.card-body -->
               
             
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> data-dismiss="modal"-->
        <?php if(isset($update)){ ?>
                    <button id="btn_update" type="submit" class="btn btn-primary">Update </button>
                  <?php } else{ ?>
                    <button id="btn_save" type="submit"  class="btn btn-success px-4">Register</button>
                  <?php } ?>
                  <a href="" class="btn btn-default ml-4"  onclick="this.form.reset();" data-dismiss="modal">Cancel</a>
      </div>
 </form>

      <script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script> 
     <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> 

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
  <script>
var user_mobile21 = $('#user_mobile').val();
  $('.user_mobile').on('change',function(){
    var user_mobile = $(this).val();
    $.ajax({
      url:'<?php echo base_url(); ?>WebsiteController/check_duplication',
      type: 'POST',
      data: {"column_name":"user_mobile",
             "column_val":user_mobile,
             "table_name":"user"},
      context: this,
      success: function(result){
        // alert(result);
        if(result > 0){
          $('#user_mobile').val(user_mobile21);
          // toastr.error(user_mobile2+' Mobile No Exist.');
          alert(user_mobile+' Mobile Number Exist.');
        }
      }
    });
  });

</script>
      
    </div>
  </div>
</div>

                </div>
                <!-- /.container -->
            </nav>
            <!-- <div class="site-header__decor">
                <div class="site-header__decor-row">
                    <div class="site-header__decor-single">
                        <div class="site-header__decor-inner-1"></div> --><!-- /.site-header__decor-inner -->
                    <!-- </div> --><!-- /.site-header__decor-single -->
                   <!--  <div class="site-header__decor-single">
                        <div class="site-header__decor-inner-2"></div> --><!-- /.site-header__decor-inner -->
                   <!--  </div> --><!-- /.site-header__decor-single -->
                   <!--  <div class="site-header__decor-single">
                        <div class="site-header__decor-inner-3"></div> --><!-- /.site-header__decor-inner -->
                    <!-- </div> --><!-- /.site-header__decor-single -->
               <!--  </div> --><!-- /.site-header__decor-row -->
            <!-- </div> --><!-- /.site-header__decor -->
        </header><!-- /.site-header -->

