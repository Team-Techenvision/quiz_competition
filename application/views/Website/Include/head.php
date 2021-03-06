
<?php
   $quizweb_user_id = $this->session->userdata('quizweb_user_id');
  // $quizweb_user_name = $this->session->set_userdata('quizweb_user_name');
  // $quizweb_company_id = $this->session->set_userdata('quizweb_company_id');
  // $quizweb_roll_id = $this->session->set_userdata('quizweb_roll_id');
  $company_list = $this->Website_Model->get_list_by_id('company_id','4','','','','','company');
  $user_list = $this->Website_Model->get_list_by_id('user_id',$quizweb_user_id,'','','','','user');
   $profile_list = $this->Website_Model->get_list_by_id('user_id',$quizweb_user_id,'','','','','profile');
    $winner_list  = $this->Website_Model->resultwinner_list($quizweb_user_id); 


// print_r($winner_list);die();

?>
<style type="text/css">
  .error{
    color: red;
    font-size: 12px;
    line-height: 1px;

  }
 /* .maxheight{
    max-height: 250px;
    overflow-y: scroll;
  }*/
  .labelerror  {
    position: relative;
    
}
  .labelerror #remember-error {
    position: absolute;
    top: 35px;
    margin-left: -20px;
}
.userLabel{
  color: #0e0e0e;
    font-size: 11px;
    margin-top: -30px;
    position: relative;
    bottom: -57px;
}
.user{
  font-size: 11px;
  color: #0e0e0e;
   position: relative;
    bottom:-57px;


}
.passwordlabel{
  font-size: 11px;
  color: #0e0e0e;
   position: relative;
   line-height: 1;
    bottom:-57px;
    /*margin-left: 25px;*/
}
label#user_password-error {
    margin-top: 15px;
} 
#user_name-error{
    margin-top: -15px;
}
#user_pincode-error{
    margin-top: -15px;

}
#user_email-error{
    margin-top: -15px;

}
#password-error{
    margin-top: -15px;

}


</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quiz Competition </title>
    <link rel="apple-touch-icon" sizes="180x180" href="C:/xampp/htdocs/website/files/assets/images/favicons/favi180x180.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>assets/images/favicons/favi32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/images/favicons/favi16x16.png">
    <link rel="manifest" href="<?php echo base_url(); ?>assets/images/favicons/site.webmanifest">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
     <!--  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
 -->

      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.theme.default.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- plugin scripts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300&display=swap" rel="stylesheet">
 
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


  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


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

                        <a class="navbar-brand" id="logo" href="<?php echo base_url(); ?>">
                            <img src="<?php echo base_url('assets/images/companylogo/'.$company_list[0]->company_logo); ?>" class="main-logo" width="150" alt="" />
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
                                <a class="menu text-white" id="home" href="<?php echo base_url(); ?>">Home</a>
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
                                <a class="menu text-white" id="aboutus" href="<?php echo base_url(); ?>About-Us">About Us</a>
                                <ul class="sub-menu">
                                    <!-- <li><a href="<?php echo base_url(); ?>About-Us">About Page</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="pricing.html">Pricing Plans</a></li>
                                    <li><a href="faq.html">FAQ'S</a></li> -->
                                </ul> <!-- /.sub-menu-->
                            </li>
                            <li>
                                <a class="menu text-white"  href="#">Courses</a>
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
                                <a class="menu text-white" id="contact" href="<?php echo base_url(); ?>Contact-Us">Contact</a>
                            </li>
                        </ul>



                    </div>


                    <!-- /.navbar-collapse -->
                         <div class="right-side-box" style="right:150px;">
                        
                    </div><!-- /.right-side-box -->
              <div class="right-side-box ddl logout" >
                  <!--   <a class="login/register text-white login-btn" href="<?php echo base_url(); ?>WebsiteController/login"  data-toggle="modal" data-target="#login">Login </a>  -->
              <?php if(isset($user_list[0]->user_name)){ 
               ?>
              
                 <div class="dropdown" >
    <button type="button" id="dropdownMenuButton" class="btn btnlogout dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Welcome <?php echo $user_list[0]->user_name;?>
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    
      <a class="dropdown-item pro_menu" href="<?php echo base_url(); ?>WebsiteController/edit_profile" >My Profile</a>
  
      <a class="dropdown-item pro_menu" href="<?php echo base_url(); ?>WebsiteController/competition_list">My Competition</a>

      <?php if(isset($winner_list[0]->user_id)) { 
        // print_r($winner_list[0]->user_id);
        ?> 
      <a class="dropdown-item pro_menu" href="<?php echo base_url(); ?>WebsiteController/winner_list">Result</a>
        <?php  }?>
      <a class="dropdown-item pro_menu" href="<?php echo base_url(); ?>WebsiteController/logout">Logout</a>
     
    </div>
  </div>
                
                   <!-- <?php print_r($quizweb_user_id); ?> -->
                   <!--  <a type="button" ><?php echo $user_list[0]->user_name;?></a> -->
                    
                     <!-- <button type="button"  value=""><?php echo $user_list->quizweb_user_id;?></button> -->

                 <?php }else{?>
                   <!-- do something when doesn't exist -->

                     <a class="login text-white login-btn" href="<?php echo base_url(); ?>WebsiteController/login" id="login-register"  data-toggle="modal" data-target="#login">Login / Register </a> 
              <?php }
               ?>
                    <!-- <a class="login/register text-white" href="<?php echo base_url(); ?>WebsiteController/add_registration" data-toggle="modal" data-target="#registration">Register</a> -->
                </div>

 <!---------------------------          Login Modal        ------------------------------------ -->

<div class="modal fade " style="" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered " role="document">
    <div class="modal-content logincontent">
     

      <div class="modal-body  ">

       
          <form class="signUp form conSU" width="1000" id="signupForm" name="SignUp" role="form" autocomplete='off'>

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
              <h4 class="h3">Create Your Account</h4>
              <!-- <p class="p">Just enter your email address</br>and your password for join.</p> -->
              <!-- <input class=" input w100" type="email" placeholder="Insert eMail" reqired autocomplete='off' /> -->
              <div class="row maxheight">
                <div class="form-group col-md-6 " style="margin-bottom: 0px!important;padding-right:  0px!important;">
                   <input class="input txtOnly" type="text" name="user_name" id="user_name" value="<?php if(isset($user_name)){ echo $user_name; } ?>" placeholder="Enter Your Name" required="" /> 
                </div>
                <div class="form-group col-md-6" style="margin-bottom: 0px!important;padding-left: 0px!important;">
                   <input class="input" type="text" name="user_pincode"  min="0" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" minlength="6" maxlength="6" id="user_pincode" value="<?php if(isset($user_pincode)){ echo $user_pincode; } ?>"  placeholder="Enter Pincode" required="" />

                </div>
                 <div class="form-group col-md-6"style="margin-bottom: 0px!important;padding-right: 0px!important;">

                <input type="email" class="input" name="user_email" id="user_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="<?php if(isset($user_email)){ echo $user_email; } ?>" placeholder="Enter Email Address" required>

              </div>
                <div class="form-group col-md-6" style="margin-top: -10px; margin-bottom: 0px!important;padding-left: 0px!important;" >
                  <label class="userLabel">Note: Entered mobile no. will be used as user name</label>
                   <input type="text" id="user_mobile" name="user_mobile" value="<?php if(isset($user_mobile)){ echo $user_mobile; } ?>" class="input notext mobileNo" placeholder="Enter Mobile No." minlength="10" maxlength="10" required="" />

                  
                </div>
                <div class="form-group col-md-6" style="margin-top: -25px; margin-bottom: 0px!important;padding-right: 0px!important;">
                     <label class="passwordlabel">Note: Password must contain uppercase, lowercase letters and number with a minimum of 8 characters</label>
                  <span toggle="#password-field1"  style="position: absolute; right: 20px; font-size: 16px;" class="fa fa-fw fa-eye field_icon toggle-password1"></span>
                   <input type="password" id="user_password" name="user_password" minlength="8" class="input" value="<?php if(isset($user_password)){ echo $user_password; } ?>" placeholder="Enter Password" required="" /> 


                </div>
               
                <div class="form-group col-md-6 labelerror" style="margin-top: 10px; margin-bottom: 0px!important; font-size: 14px; padding-left: 0px!important;">
                   <label class="form-check-label " style="margin-left: 0px;">
                    <input class="form-check-input title-case " style ="margin-top: 10px; position: initial;" type="checkbox" name="remember" required="" /> I agree <label class="text-primary t" style="font-size: 14px;"><a href="<?php echo base_url(); ?>Privacy-Policy">Data Protection Policy</a></label> 
                   </label>
                  </div>
              </div>
            
             
             
              

                <!--    <input type="password" id="user_password" minlength="8" maxlength="8" name="user_password" value="<?php if(isset($user_password)){ echo $user_password; } ?>" class="input notext" placeholder="Enter Password" required="" /> -->

                   
                   

                  
             
                 <h6 class="alert alert-danger mobileerror" style="top: 5px;"></h6>
                 <h6 class="alert alert-success mobilesuccess" style="top: 5px;"></h6>
                  

              <button class="form-btn button sx back" type="button">Back</button>
              <button class="form-btn button dx" type="submit">Sign Up</button>
          </form>
         <!-- <?php if(isset($error_msg)){ echo $error_msg; } ?> -->
         <form class="signIn form con" id="signInForm" name="SignIn" role="form" autocomplete='off'>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="h3" style="margin-bottom: -5px;">Welcome Back !</h4>
            <!-- <button class=" fb" type="button">Log In With Facebook</button> -->
            <!-- <p class="p">- or -</p> -->
            <div class="form-group"  style="margin-bottom: 0px!important;">
              <label class="user">Note: Entered mobile no. will be used as user name</label>
            <input type="text" id="mobile"  name="mobile" class="input notext"  min="0" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" placeholder="Enter Mobile No." minlength="10" maxlength="10"  />
            </div>
          <!--   <span class="text-red"> < ?php echo form_error('mobile'); ?></span> -->
            <!-- <div id="infoMessage">< ?php echo form_error('mobile'); ?></div> -->
             <div class="form-group"  style="margin-bottom: 0px!important;">
             <span style="position: absolute; right: 20px; font-size: 16px;" toggle="#password-field"  class="fa fa-fw fa-eye field_icon toggle-password"></span>
             <input type="password" class="input" name="password" id="password" placeholder="Password" >
           </div>

            <div class="form-group"  style="margin-bottom: 0px!important;">
             <label class="text-primary t"> <a href="<?php echo base_url(); ?>WebsiteController/forgotpassword">Forgot Password?</a></label>
            </div>
          
           <!--  <span class="text-red"> < ?php echo form_error('password'); ?> </span> -->

            <h6 class="alert alert-success successresponse"></h6>
            <h6 class="alert alert-danger errorresponse"></h6>
       
            <button class="form-btn button sx sign-in" type="button">Sign Up</button>
            <button class="form-btn button dx" type="submit" >Sign In</button>

             <!-- <div id="messages"></div> -->
         
          </form> 
 <!-- <?php if(isset($script)){ echo $script; } ?> -->
     
        
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
  <script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script> 
     <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> 
<!-- jQuery -->
<!-- <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script> -->
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>   -->
 <script type="text/javascript">
<?php if($this->session->flashdata('msg')){ ?>
  $(document).ready(function(){
    // alert();
    $('.msg_invalid').show().delay(5000).fadeOut();
  });
<?php } ?>
</script>

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
<script type="text/javascript">
 $(".login").click(function(){

  $(".signIn").addClass("active-sx");
  $(".signUp").addClass("inactive-dx");
  $(".signUp").removeClass("active-dx");
  $(".signIn").removeClass("inactive-sx");

 });

  $(".sign-in").click(function(){
  $(".signUp").addClass("active-dx");
  $(".signIn").addClass("inactive-sx");
  $(".signIn").removeClass("active-sx");
  $(".signUp").removeClass("inactive-dx");
});

  $(".back").click(function(){
  $(".signIn").addClass("active-sx");
  $(".signUp").addClass("inactive-dx");
  $(".signUp").removeClass("active-dx");
  $(".signIn").removeClass("inactive-sx");
});


</script>
<script type="text/javascript">
  $( document ).ready(function() {
   
     $('.successresponse').hide();  
     $('.errorresponse').hide();  
     $('.mobileerror').hide();  
     $('.mobilesuccess').hide();  
});
         
  
</script>
 <!-- <script>

  $('#signInForm').submit(function(e) {



     var mobile = $('#mobile').val();
      var password = $('#password').val();
      // alert(mobile);
      // alert(password);
      $.ajax({
           url:"< ?php echo base_url(); ?>WebsiteController/login1",
           method:"POST",
           data:{mobile:mobile,password:password},
           success:function(data)
            {
              
               // alert(data);
               // console.log(data);
               if(data=='Sign In Successful'){

                $('.alert-success').html(data);
                $('.successresponse').show().delay(3000).fadeOut();
                $('.errorresponse').hide();


                window.location.reload();
               }
               else{
                $('.alert-danger').html(data);
                $('.errorresponse').show().delay(3000).fadeOut();
                $('.successresponse').hide();
                
                document.getElementById("signInForm").reset();
               }

            }

            });
            e.preventDefault();
  });
</script> -->
<!--  <script>

  $('#signupForm').submit(function(e) {

     var mobile = $('#user_mobile').val();
     var pincode = $('#user_pincode').val();
     var name = $('#user_name').val();
     var password = $('#user_password').val();
    
      // alert(mobile);
      // alert(pincode);
      // alert(name);
      // alert(password);
   
      $.ajax({
           url:"< ?php echo base_url(); ?>WebsiteController/add_registration",
           method:"POST",
           data:{user_mobile:mobile,user_pincode:pincode,user_name:name,user_password:password},
           success:function(data)
            {   

               // alert(data);
               // console.log(data);
                 if(data=='Sign Up Successfully'){

                  
                $('.alert-success').html(data);
                $('.mobileerror').hide();
                $('.mobilesuccess').show().delay(1000).fadeOut();
                  // window.location.reload();


                //  document.getElementById("signupForm").reset();

                // $('.mobilesuccess').hide();


                 // $(".signUp").addClass("inactive-dx");
                 //  $(".signIn").addClass("active-sx");
                 //  $(".signIn").removeClass("inactive-sx");
                 //  $(".signUp").removeClass("active-dx");  
               }
               else{
                $('.alert-danger').html(data);
                $('.mobileerror').show().delay(3000).fadeOut();
                $('.mobilesuccess').hide();  
                document.getElementById("signupForm").reset();
               }
               
              // window.location.reload();

            }


            });

            e.preventDefault();
  });
</script> -->
<script type="text/javascript">
 
  // Wait for the DOM to be ready
$(function() {

jQuery.validator.addMethod("validate_email", function(value, element) {

    if (/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(value)) {
        return true;
    } else {
        return false;
    }
});
$.validator.addMethod("pwcheck", function(value, element) {
    return this.optional(element) || /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,64}$/.test(value);
  //(?=.*[a-zA-Z\d].*)[a-zA-Z\d!@#$%&*]
}, "");   
// $.validator.addMethod("pwcheck", function(value) {
//    return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value) // consists of only these
//        && /[a-z]/.test(value) // has a lowercase letter
//        && /\d/.test(value) // has a digit
// });
  
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='SignUp']").validate({


    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      user_name: "required",
      user_pincode: "required",
      user_mobile: "required",
      user_email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        validate_email: true
      },
      remember:"required",
      user_password: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        pwcheck: true
      },
      
    },
    // Specify validation error messages
    messages: {
      user_name: "Please enter your name.",
      user_mobile: "Please enter valid mobile number.",
      user_password: "Please enter valid password.",
      user_email: "Please enter valid Email Address.",
      // user_password: "Password contain uppercase, lowercase letters and number with minimum 8 characters.",

      user_pincode: "Please enter a valid pincode.",
      remember: "Please check this box if you want to proceed."
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      // form.submit();
      

     var mobile = $('#user_mobile').val();
     var pincode = $('#user_pincode').val();
     var name = $('#user_name').val();
     var password = $('#user_password').val();

     var email = $('#user_email').val();
    
      // alert(mobile);
      // alert(pincode);
      // alert(name);
      // alert(password);
   
      $.ajax({
           url:"<?php echo base_url(); ?>WebsiteController/add_registration",
           method:"POST",
           data:{user_mobile:mobile,user_pincode:pincode,user_name:name,user_password:password,user_email:email},
           success:function(data)
            {   

               // alert(data);
               // console.log(data);
                 if(data=='Sign Up Successfully'){

                  
                $('.alert-success').html(data);
                $('.mobileerror').hide();
                $('.mobilesuccess').show().delay(5000).fadeOut();

                document.getElementById("signupForm").reset();

                  window.location = "<?php echo base_url(); ?>WebsiteController/edit_profile";
               }
               else{

                // $('#user_mobile').val("");

                $('.alert-danger').html(data);
                $('.mobileerror').show().delay(5000).fadeOut();
                $('.mobilesuccess').hide();  
                // document.getElementById("signupForm").reset();
               }
               

            }


            });

    }
  });
 
});



 </script> 
<script type="text/javascript">
  $(document).on('click', '.toggle-password1', function() {

    $(this).toggleClass("fa-eye fa-eye-slash");
    
    var input = $("#user_password");
    input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
});
</script>

<script type="text/javascript">
  $(document).on('click', '.toggle-password', function() {

    $(this).toggleClass("fa-eye fa-eye-slash");
    
    var input = $("#password");
    input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
});
</script>
