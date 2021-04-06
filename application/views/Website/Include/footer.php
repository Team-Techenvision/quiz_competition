
<?php
  $company_list = $this->Website_Model->get_list_by_id('company_id','4','','','','','company');
?>


<footer class="site-footer" >
            <div class="site-footer__upper mb-2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-md-4 col-lg-4 col-sm-12 mr">
                            <div class="footer-widget footer-widget__contact">
                                <h2 class="footer-widget__title" >Contact Us</h2><!-- /.footer-widget__title -->

                                <div class="title">
                                  <i class="fas fa-map-marker-alt fafa"></i>&nbsp;&nbsp;
                                    <span class="fatitle"><?php echo $company_list[0]->company_address;?></span>
                                </div>
                                <div class="title">
                                  <i class="fas fa-phone-volume fafa"></i>&nbsp;&nbsp;
                                    <span class="fatitle"><?php echo $company_list[0]->company_mob1;?></span>
                                </div>
                                 <div class="title">
                                  <i class="far fa-envelope fafa"></i>&nbsp;&nbsp;
                                    <a class="fatitle mail"><?php echo $company_list[0]->company_email;?></a>
                                </div>
                                <!-- /.footer-widget__course-list -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-xl-3 col-md-4 col-lg-4 col-sm-12 mr1" >
                            <div class="footer-widget footer-widget__link">
                                <h2 class="footer-widget__title">Explore</h2><!-- /.footer-widget__title -->
                                <div class="footer-widget__link-wrap">
                                    <ul class="list-unstyled footer-widget__link-list">
                                        <li><a id="About" class="about" href="<?php echo base_url(); ?>About-Us">About</a></li>
                                        <li><a id="overview" class="overview" href="#">Overview</a></li>
                                        <li><a id="teachers" class="teachers" href="#">Teachers</a></li>
                                        <li><a id="pp" class="pp" href="<?php echo base_url(); ?>Privacy-Policy">Privacy Policy</a></li>
                                       
                                    </ul><!-- /.footer-widget__link-list -->
                                    <ul class="list-unstyled footer-widget__link-list">
                                         <li><a id="tandc" class="tandc" href="<?php echo base_url(); ?>Terms-and-Condition">Terms and Conditions</a></li>
                                        <li><a id="faq" class="faq" href="<?php echo base_url(); ?>FAQ">FAQ </a></li>
                                        <li><a id="contactus" class="contactus" href="<?php echo base_url(); ?>Contact-Us">Contact</a></li>
                                        <li><a id="register" class="register" href="#">Register Now</a></li>
                                    </ul><!-- /.footer-widget__link-list -->
                                </div><!-- /.footer-widget__link-wrap -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-xl-3 col-md-4 col-lg-4 col-sm-12 mr2 bg-website ">
                            <div class="footer-widget footer-widget__gallery">
                                <h2 class="footer-widget__title">Connect With Us</h2><!-- /.footer-widget__title -->
                                <ul class="site-footer__social bg-website">
                                     <a id="twit"  href="#"><i class="fab fa-twitter twit"></i></a>
                                     <a id="face" href="#"><i class="fab fa-facebook-square face"></i></a>
                                     <a id="pint" href="#"><i class="fab fa-pinterest-p pint"></i></a>
                                     <a id="insta" href="#"><i class="fab fa-instagram insta"></i></a>
                                </ul><!-- /.footer-widget__gallery -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                        
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.site-footer__upper -->
            <div class="justify-content-center " style="">
            <div class="site-footer__bottom bg-website justify-content-center">
                <div class="container text-center footcopy">
                    <p class="site-footer__copy text-center w-100">&copy; &nbsp;<span class="text-center "> Copyright 2020 </span></p>
                    <div class="site-footer__social sco">
                      
                       <a href="#" data-target="html" class="scroll-to-target site-footer__scroll-top scroll"><i class="kipso-icon-top-arrow" ></i></a> 

                       
                    </div><!-- /.site-footer__social -->
                    <!-- /.site-footer__copy -->
                </div><!-- /.container -->
            </div><!-- /.site-footer__bottom -->
          </div>
        </footer><!-- /.site-footer -->

    </div><!-- /.page-wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.search-popup__overlay -->
        <div class="search-popup__inner">
            <form action="#" class="search-popup__form">
                <input type="text" name="search" placeholder="Type here to Search....">
                <button type="submit"><i class="kipso-icon-magnifying-glass"></i></button>
            </form>
        </div><!-- /.search-popup__inner -->
    </div><!-- /.search-popup -->
 <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>   -->

    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script> -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/TweenMax.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/wow.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/countdown.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/vegas.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.ajaxchimp.min.js"></script>
    <!-- template scripts -->
    <script src="<?php echo base_url(); ?>assets/js/theme.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>

    <script>
      AOS.init();
    </script>

 <!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>  -->
<!-- <script src="< ?php echo base_url(); ?>assets/js/form-builder.min.js"></script> -->
<!-- <script src="< ?php echo base_url(); ?>assets/js/form-render.min.js"></script> -->
<script> 

   // <!-- template scripts -->


      AOS.init();
    </script>

       <!-- SignIn validation  -->
 <script type="text/javascript">
 
  // Wait for the DOM to be ready
$(function() {

  
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='SignIn']").validate({

    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      // user_name: "required",
      // user_pincode: "required",
      mobile: "required",
      password: "required",
      // email: {
      //   required: true,
      //   // Specify that email should be validated
      //   // by the built-in "email" rule
      //   email: true
      // },
      
    },
    // Specify validation error messages
    messages: {
      // user_name: "Please enter your name",
      mobile: "Please enter valid mobile number.",
      password: "Please enter a valid password.",
      // user_pincode: "Please enter a valid pincode",
      // address: "Please enter Street Address"
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      
     
      // form.submit();
        $.ajax({
                 type: "POST",
                 url: "<?php echo base_url(); ?>WebsiteController/login1",
                 data: $(form).serialize(),
                 success: function(data) {

                  // alert(data);
 
                   if(data=='Sign In Successful'){

                    // alert(data);

                      $('.alert-success').html(data);
                      $('.successresponse').show().delay(5000).fadeOut();
                      $('.errorresponse').hide();


                      window.location.reload();
                     }
                     else{
                      $('.alert-danger').html(data);
                      $('.errorresponse').show().delay(5000).fadeOut();
                      $('.successresponse').hide();
                      
                      document.getElementById("signInForm").reset();
                     }
                         
                 }
             });
    }
  });
 
});
 </script> 
   <!-- SignUp validation  -->
 
 <!-- only text no number  -->
 <script>
 $( document ).ready(function() {
                $( ".txtOnly" ).keypress(function(e) {
                    var key = e.keyCode;
                    if (key >= 48 && key <= 57) {
                        e.preventDefault();
                    }
                });
            });
 </script>

 <!-- only number input -->
 <script>
  document.querySelector(".notext").addEventListener("keypress", function (evt) {
    if (evt.which != 8 && evt.which != 0 && evt.which < 48 || evt.which > 57)
    {
        evt.preventDefault();
    }
});
 </script>

  <script type="text/javascript">
      $('.owl-one').owlCarousel({
    loop:true,
    stagePadding: 45,
    margin:10,
    nav:true,
    dots: false,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
    </script>

    <script type="text/javascript">
      $(document).ready(function(){

      
    $(".theme-btn").click(function(){
        var value = $(this).attr('data-filter');

        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');

        }
    });

    if ($(".theme-btn").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});
    </script>

       <script>
      $(".competition_btn").click(function() {
        var competition_btn_id = $(this).val();
        // alert(competition_btn_id);
     $('#competition_model_id').val(competition_btn_id); 
     $('#instruction_model_id').val(competition_btn_id); 
});
                    </script>

</body>

</html>
