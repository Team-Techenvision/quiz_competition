<?php  

$quizweb_user_id = $this->session->userdata('quizweb_user_id');
$competition_list = $this->Website_Model->competition_list('competitionid','','','','','','competition'); 
$banner_list = $this->Website_Model->banner_list('bannerid');
$tab_list = $this->Website_Model->tab_list('tabinputtextid');
$user_list = $this->Website_Model->get_list_by_id('user_id',$quizweb_user_id,'','','','','user');
$profile_list = $this->Website_Model->get_list_by_id('user_id',$quizweb_user_id,'','','','','profile');

$userprofile_list = $this->Website_Model->get_list_by_id('user_id',$quizweb_user_id,'','','','','userprofile_master');

// $competitionid = $this->input->post('53');
// $profile_list = $this->Website_Model->check_competition($quizweb_user_id);


// print_r($userprofile_list);die();

?>
<!-- <style type="text/css">
.button11 {
  position: relative;
  overflow: hidden;
  cursor: pointer;
}

.button11 button {
  position: relative;
  transition: all .45s ease-Out;
}

.spin {
  width: 0;
  height: 0;
  opacity: 0;
  left: 70px;
  top: 20px;
  transform: rotate(0deg);
  background: none;
  position: absolute;
  transition: all .5s ease-Out;
}

.button11:hover .spin {
  width: 200%;
  height: 500%;
  opacity: 1;
  left: -70px;
  top: -70px;
  background: #1d69bb;
  transform: rotate(80deg);
}

.button11:hover button {
  color: #fff;
}

</style> -->
<style type="text/css">
  #toast-container{
  
  }
  /*.profileerr .toast-top-right{

    top:50%;
    right: 22%;
  }*/
  .toast-top-right{

    top:50%;
    right: 30%;
  }
    .toast {
    width: 100% !important;
    max-width: 600px!important;
  
    font-size: 22px!important;
   
   }
</style>

<!-- <style type="text/css">
    .a{
        background-color: rgba(255, 255, 255, 0.7);
    color: #000;
    padding: 5px 10px;
    border-radius: 0 5px 5px 0 !important;
    position: absolute;
    top: 20px;
    left: 15px;
    font-size: 13px;
    }
    .b{
         display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
    }
</style> -->

<!-- <div class="container-fluid conhead"> -->
       <!-- <div class="row">
         <div class="col-md-12 p-0">
           <div id="slider2" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                < ?php $i=0; foreach ($banner_list as $list) {
                  if($list->slider_possition == 1 ){ $i++;
                ?>
                  <div class="carousel-item image-gradient < ?php if($i == 1){ echo 'active'; } ?>">
                    <img class="middle-img border-img" src="< ?php echo base_url('assets/images/banner/'.$list->profile_image); ?>" alt="First slide">
               
                  </div>
                < ?php } } ?>
              </div>
              <a class="carousel-control-prev" href="#slider2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#slider2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
         </div>
       </div> -->

       <div class="row carousel">
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
        <div class="owl-carousel owl-theme owl-one">
        <?php if($banner_list){
            foreach ($banner_list as $list) {
              if($list->slider_possition == '1'){ ?>
              <div class="item">
                <div class="main-slide ">
                  <div class="row ">
                   <!--  <div class=" col-md-4 col-12 ">
                        <h1>< ?php echo $list->title; ?> </h1>
                        <p>< ?php echo $list->subtitle; ?></p>
                        
                    </div> -->
                    <!-- <div class="image-gradient"></div> -->
                    <div class="col-md-4 bg-website banner_text_div">
                         <h1 class="text-white"><?php echo $list->title; ?> </h1>
                        <p class="ptitle"><?php echo $list->subtitle; ?></p>
                    </div>
                    <div class="col-md-8 col-12 image_div">
                        <div class="grad">
                       
                        </div>
                        <img src="<?php echo base_url(); ?>assets/images/banner/<?php echo $list->profile_image; ?>" width="100%">
                    </div>
                  </div>
                </div>
              </div>
          <?php } } } ?>
      </div>
      </div>
     </div>


 <section class="about-two">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">

                     
                        <div class="about-two__content  abt">

                            <div class="col-xl-12 col-md-12 col-sm-12 col-12 " >
                              <!-- data-aos="fade-up" data-aos-duration="7000" -->

                  <!-- <h4 class="mt-3"><span class="number_area">1 </span><span class="font-we text-uppercase"></span></h4> -->
                  <p class="headingtitle">We plan 30 different competition activities every month. Your child can perform, experiment participate in all the activities from the comfort of your home. This keeps your child fresh, active motivated.</p>

                </div>

                        </div> <!-- /.about-two__content -->
                    </div><!-- /.col-lg-6 -->
                  
                    </div><!-- /.col-lg-6 -->

            </div><!-- /.container -->
        </section><!-- /.about-two -->

      <section class="featured">
        <div class="container">
        <div class="row featuredrow">   
        <div class="col-md-12" align="center">
            <!-- <button class="theme-btn " data-filter="all">All</button> -->

            <!-- Tab button fetch dyanamic start  -->
                <?php $i = 0;
                  foreach ($tab_list as $list) {
                    $i++; ?>
                      <button class="theme-btn" data-filter="<?php echo $list->tabid;?>">  <?php echo $list->tabinputtext;?> </button>

                <?php } ?>
                   <!-- Tab button fetch dyanamic ends  -->
          </div>
       

          <!-- cart fetch dyanamic start  -->
      <?php if($competition_list){

          foreach ($competition_list as $list) {

           // $tab = $list->tabid;


          // if($list==null){
          //     echo "no competition available";
          // } 

            // print_r($tab);
        ?>
              <?php  
               // print_r($list);
             if(!isset($list->title)){?>

         <h4 class="text-white">no competition available <?php echo $list->title; ?></h4>


         <?php } else{?>        
           <div class="col-xl-3 col-md-3 col-sm-12 col-12 mt-4 mobile_area singleview filter <?php echo $list->tabid;?> all " >
         

              <div class="row ">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12 over" >
                 <img src="<?php echo base_url('assets/images/competition/'.$list->photo); ?>" style=" height:300px; width: 100%;  border-radius: 10px; vertical-align: middle; border-style: none;" alt="intellithon" class="img-fluid" >
              
             <div class="overlay">
                  <div class="text">
                      <a class="text-white" href="<?php echo base_url(); ?>WebsiteController/competition_singlepage/<?php echo "$list->competitionid"; ?>" ><h5 > <?php echo $list->title;?>  </h5></a>
                    <h6> <?php echo $list->subtitle;?> </h6>

                   <form id="myForm" role="form"   action="<?php echo base_url(); ?>WebsiteController/insert_profiledata" method="post" >

                     <input type="hidden" name="competition_id" id="competition_model_id" value="<?php echo $list->competitionid;?>">

                     <p><button href="" data-toggle="modal" id="participate_btn" data-target="#participate"  class="competition_btn pb-4" type="submit" value="<?php echo $list->competitionid;?>"><i class="fa fa-plus" aria-hidden="true"></i> Participate</button></p>

                   </form>
                    
                 
                  </div>
                </div>
              <div class="tag_inherit a" > <?php echo $list->tabinputtext;?>  </div>
            </div>
          </div>

        </div>
   

        <?php   }  } } ?>  

         <!-- cart fetch dyanamic Ends  -->
        </div>  <!-- main row Ends  -->
    </div> <!-- main container  Ends  -->
    </section>


<script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script> 
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>   -->
<script type="text/javascript">
  <?php if($this->session->flashdata('save_success')){ ?>
    // $(document).ready(function(){

      toastr.success('User has Participated Successfully');
     
    // });
  <?php } ?>

</script>

<script type="text/javascript">
  <?php if($this->session->flashdata('updateProfile_success')){ ?>
    $(document).ready(function(){
     
        toastr.success('Profile Updated Successfully'); 
   
     
    });
  <?php } ?>
</script>

<script type="text/javascript">
  <?php if($this->session->flashdata('login_ermsg')){ ?>
    $(document).ready(function(){
      toastr.error('Invalid Details Please Login Again');
    });
  <?php } ?>
</script>

<script type="text/javascript">
  <?php if($this->session->flashdata('register_success')){ ?>
    $(document).ready(function(){
      toastr.success('Registration Successfully');
    });
  <?php } ?>
</script>

<script type="text/javascript">
  <?php if($this->session->flashdata('login_success')){ ?>
    $(document).ready(function(){
      toastr.success('Login Successfully');
    });
  <?php } ?>
</script>

<script type="text/javascript">
  <?php if($this->session->flashdata('profile_error')){ ?>
    $(document).ready(function(){
      toastr.error("Please complete your profile before participating in the competition");
    });
  <?php } ?>
</script>
<script type="text/javascript">
  <?php if($this->session->flashdata('Login_error')){ ?>
   $(document).ready(function(){
      toastr.error('Please Register to Participate');
   });
  <?php } ?>
</script>
<script type="text/javascript">
  <?php if($this->session->flashdata('class_error')){ ?>
    $(document).ready(function(){
      toastr.error('User Can not Participate in this Competition');
    });
  <?php } ?>
</script>
<script type="text/javascript">
  <?php if($this->session->flashdata('profileAlready_error')){ ?>
    $(document).ready(function(){
      toastr.error('User is Already Participated in this Competition ');
    });
  <?php } ?>
</script>
<!-- <script type="text/javascript">
  $( "#success-btn" ).click(function() {
  $( "div.success" ).fadeIn( 300 ).delay( 1500 ).fadeOut( 400 );
});
</script>
 -->
<script type="text/javascript">
  // $('#btn_save').click(function(){
    // alert('hii');

   // if($.trim($('#emailid').val()) == ''||$.trim($('#parentname').val()) == ''||$.trim($('#age').val()) == ''||$.trim($('#pincode').val()) == ''){
   //    alert('Fill all the necessary fields');
   // }
   // else{
   //  return confirm('Are you sure you want to participate?')
   // }
// });

function myFunction() {
            document.getElementById("myForm").reset();
        }

</script>

                 