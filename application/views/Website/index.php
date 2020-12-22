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
                <?php $i=0; foreach ($banner_list as $list) {
                  if($list->slider_possition == 1 ){ $i++;
                ?>
                  <div class="carousel-item image-gradient <?php if($i == 1){ echo 'active'; } ?>">
                    <img class="middle-img border-img" src="<?php echo base_url('assets/images/banner/'.$list->profile_image); ?>" alt="First slide">
               
                  </div>
                <?php } } ?>
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
                <div class="main-slide">
                  <div class="row">
                    <div class=" col-md-6 col-12 grad">
                        <h1><?php echo $list->title; ?> </h1>
                        <p><?php echo $list->subtitle; ?></p>
                        <!-- <p class=""><a href="#"> Reand More  <span class="ml-3 arrow"> 
                          <img class="svg-arw" src="<?php echo base_url(); ?>assets/images/website/arrow.svg">
                        </span> </a>  </p>-->
                    </div>
                    <div class="image-gradient"></div>
                    <div class="col-md-6 col-12 image_div">
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
                    <div class="col-xl-6">

                        <div id="" class="px-4 py-2 text-white "  >
                          <h4 class="comptitle mb-0">
                             It's Amazing
                           </h4>
                           <span class="section-divider"></span>   

              </div>
                        <div class="about-two__content text-white abt">

                            <div class="col-xl-12 col-md-12 col-sm-12 col-12 " >
                              <!-- data-aos="fade-up" data-aos-duration="7000" -->

                  <!-- <h4 class="mt-3"><span class="number_area">1 </span><span class="font-we text-uppercase"></span></h4> -->
                  <p>We plan 30 different competition activities every month. Your child can perform, experiment &amp;
                    participate in all the activities from the comfort of your home. This keeps your child fresh, active
                    &amp; motivated.</p>

                </div>

                        </div> <!-- /.about-two__content -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-xl-6 d-flex justify-content-xl-end justify-content-sm-center imagemr">

                        <iframe width="80%" height="280" class="border mt-md-5 mt-xl-5 mt-sm-0 mt-0" src="https://www.youtube.com/embed/CtL-fJdHUTQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>

                        </div><!-- /.about-two__image -->
                    </div><!-- /.col-lg-6 -->

            </div><!-- /.container -->
        </section><!-- /.about-two -->

        <section class="competition">

          <br><br>

            <div class="container">

                  <div id="" class="px-4 py-2 text-white text-center">
                  <h5 class="section__meta mb-2">Choose Your Competition Activities</h5>
                <h4 class="text-center ">
                 <span class="text-white comptitle" > Competition Activities </span>
                </h4><span class="section-divider"></span>            
                 </div>
  <div class="row">
                <div class="col-lg-12">
                    <div class="section-tab margin-top-28px margin-bottom-55px">
                        <ul class="nav nav-tabs justify-content-center text-center" role="tablist" id="review" style=" border: none;">
                          
                            <li role="presentation" class="li">

                                <a href="#nur-class1" role="tab" data-toggle="tab" class="theme-btn  " aria-selected="true">
                                 Nur-1st   
                                </a>
                            </li>
                              <li role="presentation" class="li">

                                <a href="#class2-class5" role="tab" data-toggle="tab" class="theme-btn  " aria-selected="true">
                                2nd-5th
                                </a>
                            </li>
                              <li role="presentation" class="li">

                                <a href="#class6-class9" role="tab" data-toggle="tab" class="theme-btn  " aria-selected="true">
                                6th-9th
                                </a>
                            </li>
                              <li role="presentation" class="li">

                                <a href="#males" role="tab" data-toggle="tab" class="theme-btn  " aria-selected="true">
                                Males(18+)  
                                </a>
                            </li>
                              <li role="presentation" class="li">

                                <a href="#females" role="tab" data-toggle="tab" class="theme-btn  " aria-selected="true">
                                Females(18+
                                </a>
                            </li>

                        
                        </ul>
                    </div><!-- end section-tab -->
                </div><!-- end col-lg-12 -->
            </div>
           
<!-- <div class="row">
               <ul class="nav nav-tabs"  role="tablist" style="background-color: lightgray;width:600px;">
    <li class="nav-item " style="width:100px;">
      <a class="nav-link active" data-toggle="tab" href="#nur-class1">Nur-1st</a>
    </li>

    <li class="nav-item "style="width:100px;">
      <a class="nav-link" data-toggle="tab" href="#class2-class5">2nd-5th</a>
    </li>

    <li class="nav-item" style="width:100px;">
      <a class="nav-link" data-toggle="tab" href="#class6-class9">6th-9th</a>
    </li>
    <li class="nav-item" style="width:150px;">
      <a class="nav-link" data-toggle="tab" href="#males">Males(18+)</a>
    </li>
    <li class="nav-item" style="width:150px;">
      <a class="nav-link" data-toggle="tab" href="#females">Females(18+)</a>
    </li>
  </ul>

</div> -->
<!-- Tab panes -->
  <div class="tab-content">
    <div id="nur-class1" class="container tab-pane active"><br>
<div class="container">
    <div class="row">
        <div class="col-xl-4 col-md-4 col-sm-12 col-12 mt-4 mobile_area">
      <div class="row">

        <div class="col-xl-12 col-md-12 col-sm-12 col-12 over">
          <img src="<?php echo base_url();?>assets/images/competition/img8.jpg"  style="border-radius: 4px 4px 0 0; vertical-align: middle; border-style: none;" alt="intellithon" class="img-fluid">
           <div class="overlay"> </div>
          <div class="tag_inherit a" >Nursery - Class 1</div>
        </div>
      </div>
      <div class="row b" >
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12  py-3" style="background-color: #7db3ef;
 ">
            <div class="row rowspace">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4 class="titlee mb-4" style="">Environment</h4>
              </div>
            </div>
            <div class="row rowspace">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-info pr-0 cstm-min-height">
                <span><strong style="font-weight: 500;">Register to see competition topic</strong></span> <br>
              </div>
            </div>
            <div class="row mt-4 ">
              <div class="col-xl-7 col-md-12 col-sm-12 col-12 comp">
                <button type="button " class="btn buttontheme" data-toggle="modal" data-target="#participate" href="" ><a class="text-white" href="<?php echo base_url(); ?>WebsiteController/add_profile">Participate</a> </button>
              </div>
              <div class="col-xl-5 col-md-12 col-sm-12 col-12 pl-xl-0 mt-xl-0 mt-md-3 mt-sm-3 mt-3 text-xl-right text-md-left text-sm-left-text-left">
                <button class="btn buttontheme" type="button" data-toggle="modal" data-target="#instructions_text">Instructions</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ************** -->


 <div class="col-xl-4 col-md-4 col-sm-12 col-12 mt-4 mobile_area">
      <div class="row">
    <div class="col-xl-12 col-md-12 col-sm-12 col-12 over">
          <img src="<?php echo base_url();?>assets/images/competition/img8.jpg"  style="border-radius: 4px 4px 0 0; vertical-align: middle; border-style: none;" alt="intellithon" class="img-fluid">
           <div class="overlay"> </div>
          <div class="tag_inherit a" >Nursery - Class 1</div>
        </div>
      </div>
      <div class="row b" >
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12  py-3" style="background-color: #7db3ef;
 ">
            <div class="row rowspace">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4 class="titlee mb-4" style="">Environment</h4>
              </div>
            </div>
            <div class="row rowspace">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-info pr-0 cstm-min-height">
                <span><strong style="font-weight: 500;">Register to see competition topic</strong></span> <br>
              </div>
            </div>
            <div class="row mt-4 ">
              <div class="col-xl-7 col-md-12 col-sm-12 col-12 comp">
                <button type="button " class="btn buttontheme" data-toggle="modal" data-target="#participate" href="" ><a class="text-white" href="<?php echo base_url(); ?>WebsiteController/add_profile">Participate</a> </button>
              </div>
              <div class="col-xl-5 col-md-12 col-sm-12 col-12 pl-xl-0 mt-xl-0 mt-md-3 mt-sm-3 mt-3 text-xl-right text-md-left text-sm-left-text-left">
                <button class="btn buttontheme" type="button" data-toggle="modal" data-target="#instructions_text">Instructions</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  <!-- *********** -->

 <div class="col-xl-4 col-md-4 col-sm-12 col-12 mt-4 mobile_area">
      <div class="row">
   <div class="col-xl-12 col-md-12 col-sm-12 col-12 over">
          <img src="<?php echo base_url();?>assets/images/competition/img8.jpg"  style="border-radius: 4px 4px 0 0; vertical-align: middle; border-style: none;" alt="intellithon" class="img-fluid">
           <div class="overlay"> </div>
          <div class="tag_inherit a" >Nursery - Class 1</div>
        </div>
      </div>
      <div class="row b" >
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12  py-3" style="background-color: #7db3ef;
 ">
            <div class="row rowspace">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4 class="titlee mb-4" style="">Environment</h4>
              </div>
            </div>
            <div class="row rowspace">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-info pr-0 cstm-min-height">
                <span><strong style="font-weight: 500;">Register to see competition topic</strong></span> <br>
              </div>
            </div>
            <div class="row mt-4 ">
              <div class="col-xl-7 col-md-12 col-sm-12 col-12 comp">
                <button type="button " class="btn buttontheme" data-toggle="modal" data-target="#participate" href="" ><a class="text-white" href="<?php echo base_url(); ?>WebsiteController/add_profile">Participate</a> </button>
              </div>
              <div class="col-xl-5 col-md-12 col-sm-12 col-12 pl-xl-0 mt-xl-0 mt-md-3 mt-sm-3 mt-3 text-xl-right text-md-left text-sm-left-text-left">
                <button class="btn buttontheme" type="button" data-toggle="modal" data-target="#instructions_text">Instructions</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<!-- *********************** -->


 <div class="col-xl-4 col-md-4 col-sm-12 col-12 mt-4 mobile_area">
      <div class="row">
   <div class="col-xl-12 col-md-12 col-sm-12 col-12 over">
          <img src="<?php echo base_url();?>assets/images/competition/img8.jpg"  style="border-radius: 4px 4px 0 0; vertical-align: middle; border-style: none;" alt="intellithon" class="img-fluid">
           <div class="overlay"> </div>
          <div class="tag_inherit a" >Nursery - Class 1</div>
        </div>
      </div>
      <div class="row b" >
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12  py-3" style="background-color: #7db3ef;
 ">
            <div class="row rowspace">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4 class="titlee mb-4" style="">Environment</h4>
              </div>
            </div>
            <div class="row rowspace">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-info pr-0 cstm-min-height">
                <span><strong style="font-weight: 500;">Register to see competition topic</strong></span> <br>
              </div>
            </div>
            <div class="row mt-4 ">
              <div class="col-xl-7 col-md-12 col-sm-12 col-12 comp">
                <button type="button " class="btn buttontheme" data-toggle="modal" data-target="#participate" href="" ><a class="text-white" href="<?php echo base_url(); ?>WebsiteController/add_profile">Participate</a> </button>
              </div>
              <div class="col-xl-5 col-md-12 col-sm-12 col-12 pl-xl-0 mt-xl-0 mt-md-3 mt-sm-3 mt-3 text-xl-right text-md-left text-sm-left-text-left">
                <button class="btn buttontheme" type="button" data-toggle="modal" data-target="#instructions_text">Instructions</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<!-- *********************** -->


 <div class="col-xl-4 col-md-4 col-sm-12 col-12 mt-4 mobile_area">
      <div class="row">
     <div class="col-xl-12 col-md-12 col-sm-12 col-12 over">
          <img src="<?php echo base_url();?>assets/images/competition/img8.jpg"  style="border-radius: 4px 4px 0 0; vertical-align: middle; border-style: none;" alt="intellithon" class="img-fluid">
           <div class="overlay"> </div>
          <div class="tag_inherit a" >Nursery - Class 1</div>
        </div>
      </div>
      <div class="row b" >
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12  py-3" style="background-color: #7db3ef;
 ">
            <div class="row rowspace">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4 class="titlee mb-4" style="">Environment</h4>
              </div>
            </div>
            <div class="row rowspace">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-info pr-0 cstm-min-height">
                <span><strong style="font-weight: 500;">Register to see competition topic</strong></span> <br>
              </div>
            </div>
            <div class="row mt-4 ">
              <div class="col-xl-7 col-md-12 col-sm-12 col-12 comp">
                <button type="button " class="btn buttontheme" data-toggle="modal" data-target="#participate" href="" ><a class="text-white" href="<?php echo base_url(); ?>WebsiteController/add_profile">Participate</a> </button>
              </div>
              <div class="col-xl-5 col-md-12 col-sm-12 col-12 pl-xl-0 mt-xl-0 mt-md-3 mt-sm-3 mt-3 text-xl-right text-md-left text-sm-left-text-left">
                <button class="btn buttontheme" type="button" data-toggle="modal" data-target="#instructions_text">Instructions</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



 <div class="col-xl-4 col-md-4 col-sm-12 col-12 mt-4 mobile_area">
      <div class="row">
   <div class="col-xl-12 col-md-12 col-sm-12 col-12 over">
          <img src="<?php echo base_url();?>assets/images/competition/img8.jpg"  style="border-radius: 4px 4px 0 0; vertical-align: middle; border-style: none;" alt="intellithon" class="img-fluid">
           <div class="overlay"> </div>
          <div class="tag_inherit a" >Nursery - Class 1</div>
        </div>
      </div>
      <div class="row b" >
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12  py-3" style="background-color: #7db3ef;">
            <div class="row rowspace">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4 class="titlee mb-4" style="">Environment</h4>
              </div>
            </div>
            <div class="row rowspace">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-info pr-0 cstm-min-height">
                <span><strong style="font-weight: 500;">Register to see competition topic</strong></span> <br>
              </div>
            </div>
            <div class="row mt-4 ">
              <div class="col-xl-7 col-md-12 col-sm-12 col-12 comp">
                <button type="button " class="btn buttontheme" data-toggle="modal" data-target="#participate" href="" ><a class="text-white" href="<?php echo base_url(); ?>WebsiteController/add_profile">Participate</a> </button>
              </div>
              <div class="col-xl-5 col-md-12 col-sm-12 col-12 pl-xl-0 mt-xl-0 mt-md-3 mt-sm-3 mt-3 text-xl-right text-md-left text-sm-left-text-left">
                <button class="btn buttontheme" type="button" data-toggle="modal" data-target="#instructions_text">Instructions</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  


    


  


</div>
</div>

    </div>
    <div id="class2-class5" class="container tab-pane fade"><br>
   <div class="container">
    <div class="row">

        <div class="col-xl-4 col-md-4 col-sm-12 col-12 mt-4 mobile_area">
      <div class="row">

        <div class="col-xl-12 col-md-12 col-sm-12 col-12 over">
          <img src="<?php echo base_url();?>assets/images/competition/img8.jpg"  style="border-radius: 4px 4px 0 0; vertical-align: middle; border-style: none;" alt="intellithon" class="img-fluid">
           <div class="overlay"> </div>
          <div class="tag_inherit a" >Class 2 - Class 5</div>
        </div>
      </div>
      <div class="row b" >
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12  py-3" style="background-color: #7db3ef;
 ">
            <div class="row rowspace">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4 class="titlee mb-4" style="">Environment</h4>
              </div>
            </div>
            <div class="row rowspace">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-info pr-0 cstm-min-height">
                <span><strong style="font-weight: 500;">Register to see competition topic</strong></span> <br>
              </div>
            </div>
            <div class="row mt-4 ">
              <div class="col-xl-7 col-md-12 col-sm-12 col-12 comp">
                <button type="button " class="btn buttontheme" data-toggle="modal" data-target="#participate" href="" ><a class="text-white" href="<?php echo base_url(); ?>WebsiteController/add_profile">Participate</a> </button>
              </div>
              <div class="col-xl-5 col-md-12 col-sm-12 col-12 pl-xl-0 mt-xl-0 mt-md-3 mt-sm-3 mt-3 text-xl-right text-md-left text-sm-left-text-left">
                <button class="btn buttontheme" type="button" data-toggle="modal" data-target="#instructions_text">Instructions</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ************** -->


 <div class="col-xl-4 col-md-4 col-sm-12 col-12 mt-4 mobile_area">
      <div class="row">
    <div class="col-xl-12 col-md-12 col-sm-12 col-12 over">
          <img src="<?php echo base_url();?>assets/images/competition/img8.jpg"  style="border-radius: 4px 4px 0 0; vertical-align: middle; border-style: none;" alt="intellithon" class="img-fluid">
           <div class="overlay"> </div>
          <div class="tag_inherit a" >Class 2 - Class 5</div>
        </div>
      </div>
      <div class="row b" >
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12  py-3" style="background-color: #7db3ef;
 ">
            <div class="row rowspace">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4 class="titlee mb-4" style="">Environment</h4>
              </div>
            </div>
            <div class="row rowspace">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-info pr-0 cstm-min-height">
                <span><strong style="font-weight: 500;">Register to see competition topic</strong></span> <br>
              </div>
            </div>
            <div class="row mt-4 ">
              <div class="col-xl-7 col-md-12 col-sm-12 col-12 comp">
                <button type="button " class="btn buttontheme" data-toggle="modal" data-target="#participate" href="" ><a class="text-white" href="<?php echo base_url(); ?>WebsiteController/add_profile">Participate</a> </button>
              </div>
              <div class="col-xl-5 col-md-12 col-sm-12 col-12 pl-xl-0 mt-xl-0 mt-md-3 mt-sm-3 mt-3 text-xl-right text-md-left text-sm-left-text-left">
                <button class="btn buttontheme" type="button" data-toggle="modal" data-target="#instructions_text">Instructions</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  <!-- *********** -->

 <div class="col-xl-4 col-md-4 col-sm-12 col-12 mt-4 mobile_area">
      <div class="row">
   <div class="col-xl-12 col-md-12 col-sm-12 col-12 over">
          <img src="<?php echo base_url();?>assets/images/competition/img8.jpg"  style="border-radius: 4px 4px 0 0; vertical-align: middle; border-style: none;" alt="intellithon" class="img-fluid">
           <div class="overlay"> </div>
          <div class="tag_inherit a" >Class 2 - Class 5</div>
        </div>
      </div>
      <div class="row b" >
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12  py-3" style="background-color: #7db3ef;
 ">
            <div class="row rowspace">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4 class="titlee mb-4" style="">Environment</h4>
              </div>
            </div>
            <div class="row rowspace">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-info pr-0 cstm-min-height">
                <span><strong style="font-weight: 500;">Register to see competition topic</strong></span> <br>
              </div>
            </div>
            <div class="row mt-4 ">
              <div class="col-xl-7 col-md-12 col-sm-12 col-12 comp">
                <button type="button " class="btn buttontheme" data-toggle="modal" data-target="#participate" href="" ><a class="text-white" href="<?php echo base_url(); ?>WebsiteController/add_profile">Participate</a> </button>
              </div>
              <div class="col-xl-5 col-md-12 col-sm-12 col-12 pl-xl-0 mt-xl-0 mt-md-3 mt-sm-3 mt-3 text-xl-right text-md-left text-sm-left-text-left">
                <button class="btn buttontheme" type="button" data-toggle="modal" data-target="#instructions_text">Instructions</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<!-- *********************** -->


 <div class="col-xl-4 col-md-4 col-sm-12 col-12 mt-4 mobile_area">
      <div class="row">
   <div class="col-xl-12 col-md-12 col-sm-12 col-12 over">
          <img src="<?php echo base_url();?>assets/images/competition/img8.jpg"  style="border-radius: 4px 4px 0 0; vertical-align: middle; border-style: none;" alt="intellithon" class="img-fluid">
           <div class="overlay"> </div>
          <div class="tag_inherit a" >Class 2 - Class 5</div>
        </div>
      </div>
      <div class="row b" >
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12  py-3" style="background-color: #7db3ef;
 ">
            <div class="row rowspace">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4 class="titlee mb-4" style="">Environment</h4>
              </div>
            </div>
            <div class="row rowspace">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-info pr-0 cstm-min-height">
                <span><strong style="font-weight: 500;">Register to see competition topic</strong></span> <br>
              </div>
            </div>
            <div class="row mt-4 ">
              <div class="col-xl-7 col-md-12 col-sm-12 col-12 comp">
                <button type="button " class="btn buttontheme" data-toggle="modal" data-target="#participate" href="" ><a class="text-white" href="<?php echo base_url(); ?>WebsiteController/add_profile">Participate</a> </button>
              </div>
              <div class="col-xl-5 col-md-12 col-sm-12 col-12 pl-xl-0 mt-xl-0 mt-md-3 mt-sm-3 mt-3 text-xl-right text-md-left text-sm-left-text-left">
                <button class="btn buttontheme" type="button" data-toggle="modal" data-target="#instructions_text">Instructions</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<!-- *********************** -->


 <div class="col-xl-4 col-md-4 col-sm-12 col-12 mt-4 mobile_area">
      <div class="row">
     <div class="col-xl-12 col-md-12 col-sm-12 col-12 over">
          <img src="<?php echo base_url();?>assets/images/competition/img8.jpg"  style="border-radius: 4px 4px 0 0; vertical-align: middle; border-style: none;" alt="intellithon" class="img-fluid">
           <div class="overlay"> </div>
          <div class="tag_inherit a" >Class 2 - Class 5</div>
        </div>
      </div>
      <div class="row b" >
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12  py-3" style="background-color: #7db3ef;
 ">
            <div class="row rowspace">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4 class="titlee mb-4" style="">Environment</h4>
              </div>
            </div>
            <div class="row rowspace">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-info pr-0 cstm-min-height">
                <span><strong style="font-weight: 500;">Register to see competition topic</strong></span> <br>
              </div>
            </div>
            <div class="row mt-4 ">
              <div class="col-xl-7 col-md-12 col-sm-12 col-12 comp">
                <button type="button " class="btn buttontheme" data-toggle="modal" data-target="#participate" href="" ><a class="text-white" href="<?php echo base_url(); ?>WebsiteController/add_profile">Participate</a> </button>
              </div>
              <div class="col-xl-5 col-md-12 col-sm-12 col-12 pl-xl-0 mt-xl-0 mt-md-3 mt-sm-3 mt-3 text-xl-right text-md-left text-sm-left-text-left">
                <button class="btn buttontheme" type="button" data-toggle="modal" data-target="#instructions_text">Instructions</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



 <div class="col-xl-4 col-md-4 col-sm-12 col-12 mt-4 mobile_area">
      <div class="row">
   <div class="col-xl-12 col-md-12 col-sm-12 col-12 over">
          <img src="<?php echo base_url();?>assets/images/competition/img8.jpg"  style="border-radius: 4px 4px 0 0; vertical-align: middle; border-style: none;" alt="intellithon" class="img-fluid">
           <div class="overlay"> </div>
          <div class="tag_inherit a" >Class 2 - Class 5</div>
        </div>
      </div>
      <div class="row b" >
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12  py-3" style="background-color: #7db3ef;">
            <div class="row rowspace">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4 class="titlee mb-4" style="">Environment</h4>
              </div>
            </div>
            <div class="row rowspace">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-info pr-0 cstm-min-height">
                <span><strong style="font-weight: 500;">Register to see competition topic</strong></span> <br>
              </div>
            </div>
            <div class="row mt-4 ">
              <div class="col-xl-7 col-md-12 col-sm-12 col-12 comp">
                <button type="button " class="btn buttontheme" data-toggle="modal" data-target="#participate" href="" ><a class="text-white" href="<?php echo base_url(); ?>WebsiteController/add_profile">Participate</a> </button>
              </div>
              <div class="col-xl-5 col-md-12 col-sm-12 col-12 pl-xl-0 mt-xl-0 mt-md-3 mt-sm-3 mt-3 text-xl-right text-md-left text-sm-left-text-left">
                <button class="btn buttontheme" type="button" data-toggle="modal" data-target="#instructions_text">Instructions</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


</div>
</div>


    </div>
    <div id="class6-class9" class="container tab-pane fade"><br>
      <div class="container">
    <div class="row">


        <div class="col-xl-4 col-md-4 col-sm-12 col-12 mt-4 mobile_area">
      <div class="row">

        <div class="col-xl-12 col-md-12 col-sm-12 col-12 over">
          <img src="<?php echo base_url();?>assets/images/competition/img8.jpg"  style="border-radius: 4px 4px 0 0; vertical-align: middle; border-style: none;" alt="intellithon" class="img-fluid">
           <div class="overlay"> </div>
          <div class="tag_inherit a" >Class 6 - Class 9</div>
        </div>
      </div>
      <div class="row b" >
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12  py-3" style="background-color: #7db3ef;
 ">
            <div class="row rowspace">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4 class="titlee mb-4" style="">Environment</h4>
              </div>
            </div>
            <div class="row rowspace">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-info pr-0 cstm-min-height">
                <span><strong style="font-weight: 500;">Register to see competition topic</strong></span> <br>
              </div>
            </div>
            <div class="row mt-4 ">
              <div class="col-xl-7 col-md-12 col-sm-12 col-12 comp">
                <button type="button " class="btn buttontheme" data-toggle="modal" data-target="#participate" href="" ><a class="text-white" href="<?php echo base_url(); ?>WebsiteController/add_profile">Participate</a> </button>
              </div>
              <div class="col-xl-5 col-md-12 col-sm-12 col-12 pl-xl-0 mt-xl-0 mt-md-3 mt-sm-3 mt-3 text-xl-right text-md-left text-sm-left-text-left">
                <button class="btn buttontheme" type="button" data-toggle="modal" data-target="#instructions_text">Instructions</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ************** -->


 <div class="col-xl-4 col-md-4 col-sm-12 col-12 mt-4 mobile_area">
      <div class="row">
    <div class="col-xl-12 col-md-12 col-sm-12 col-12 over">
          <img src="<?php echo base_url();?>assets/images/competition/img8.jpg"  style="border-radius: 4px 4px 0 0; vertical-align: middle; border-style: none;" alt="intellithon" class="img-fluid">
           <div class="overlay"> </div>
          <div class="tag_inherit a" >Class 6 - Class 9</div>
        </div>
      </div>
      <div class="row b" >
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12  py-3" style="background-color: #7db3ef;
 ">
            <div class="row rowspace">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4 class="titlee mb-4" style="">Environment</h4>
              </div>
            </div>
            <div class="row rowspace">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-info pr-0 cstm-min-height">
                <span><strong style="font-weight: 500;">Register to see competition topic</strong></span> <br>
              </div>
            </div>
            <div class="row mt-4 ">
              <div class="col-xl-7 col-md-12 col-sm-12 col-12 comp">
                <button type="button " class="btn buttontheme" data-toggle="modal" data-target="#participate" href="" ><a class="text-white" href="<?php echo base_url(); ?>WebsiteController/add_profile">Participate</a> </button>
              </div>
              <div class="col-xl-5 col-md-12 col-sm-12 col-12 pl-xl-0 mt-xl-0 mt-md-3 mt-sm-3 mt-3 text-xl-right text-md-left text-sm-left-text-left">
                <button class="btn buttontheme" type="button" data-toggle="modal" data-target="#instructions_text">Instructions</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  <!-- *********** -->

 <div class="col-xl-4 col-md-4 col-sm-12 col-12 mt-4 mobile_area">
      <div class="row">
   <div class="col-xl-12 col-md-12 col-sm-12 col-12 over">
          <img src="<?php echo base_url();?>assets/images/competition/img8.jpg"  style="border-radius: 4px 4px 0 0; vertical-align: middle; border-style: none;" alt="intellithon" class="img-fluid">
           <div class="overlay"> </div>
          <div class="tag_inherit a" >Class 6 - Class 9</div>
        </div>
      </div>
      <div class="row b" >
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12  py-3" style="background-color: #7db3ef;
 ">
            <div class="row rowspace">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4 class="titlee mb-4" style="">Environment</h4>
              </div>
            </div>
            <div class="row rowspace">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-info pr-0 cstm-min-height">
                <span><strong style="font-weight: 500;">Register to see competition topic</strong></span> <br>
              </div>
            </div>
            <div class="row mt-4 ">
              <div class="col-xl-7 col-md-12 col-sm-12 col-12 comp">
                <button type="button " class="btn buttontheme" data-toggle="modal" data-target="#participate" href="" ><a class="text-white" href="<?php echo base_url(); ?>WebsiteController/add_profile">Participate</a> </button>
              </div>
              <div class="col-xl-5 col-md-12 col-sm-12 col-12 pl-xl-0 mt-xl-0 mt-md-3 mt-sm-3 mt-3 text-xl-right text-md-left text-sm-left-text-left">
                <button class="btn buttontheme" type="button" data-toggle="modal" data-target="#instructions_text">Instructions</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<!-- *********************** -->


 <div class="col-xl-4 col-md-4 col-sm-12 col-12 mt-4 mobile_area">
      <div class="row">
   <div class="col-xl-12 col-md-12 col-sm-12 col-12 over">
          <img src="<?php echo base_url();?>assets/images/competition/img8.jpg"  style="border-radius: 4px 4px 0 0; vertical-align: middle; border-style: none;" alt="intellithon" class="img-fluid">
           <div class="overlay"> </div>
          <div class="tag_inherit a" >Class 6 - Class 9</div>
        </div>
      </div>
      <div class="row b" >
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12  py-3" style="background-color: #7db3ef;
 ">
            <div class="row rowspace">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4 class="titlee mb-4" style="">Environment</h4>
              </div>
            </div>
            <div class="row rowspace">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-info pr-0 cstm-min-height">
                <span><strong style="font-weight: 500;">Register to see competition topic</strong></span> <br>
              </div>
            </div>
            <div class="row mt-4 ">
              <div class="col-xl-7 col-md-12 col-sm-12 col-12 comp">
                <button type="button " class="btn buttontheme" data-toggle="modal" data-target="#participate" href="" ><a class="text-white" href="<?php echo base_url(); ?>WebsiteController/add_profile">Participate</a> </button>
              </div>
              <div class="col-xl-5 col-md-12 col-sm-12 col-12 pl-xl-0 mt-xl-0 mt-md-3 mt-sm-3 mt-3 text-xl-right text-md-left text-sm-left-text-left">
                <button class="btn buttontheme" type="button" data-toggle="modal" data-target="#instructions_text">Instructions</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<!-- *********************** -->


 <div class="col-xl-4 col-md-4 col-sm-12 col-12 mt-4 mobile_area">
      <div class="row">
     <div class="col-xl-12 col-md-12 col-sm-12 col-12 over">
          <img src="<?php echo base_url();?>assets/images/competition/img8.jpg"  style="border-radius: 4px 4px 0 0; vertical-align: middle; border-style: none;" alt="intellithon" class="img-fluid">
           <div class="overlay"> </div>
          <div class="tag_inherit a" >Class 6 - Class 9</div>
        </div>
      </div>
      <div class="row b" >
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12  py-3" style="background-color: #7db3ef;
 ">
            <div class="row rowspace">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4 class="titlee mb-4" style="">Environment</h4>
              </div>
            </div>
            <div class="row rowspace">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-info pr-0 cstm-min-height">
                <span><strong style="font-weight: 500;">Register to see competition topic</strong></span> <br>
              </div>
            </div>
            <div class="row mt-4 ">
              <div class="col-xl-7 col-md-12 col-sm-12 col-12 comp">
                <button type="button " class="btn buttontheme" data-toggle="modal" data-target="#participate" href="" ><a class="text-white" href="<?php echo base_url(); ?>WebsiteController/add_profile">Participate</a> </button>
              </div>
              <div class="col-xl-5 col-md-12 col-sm-12 col-12 pl-xl-0 mt-xl-0 mt-md-3 mt-sm-3 mt-3 text-xl-right text-md-left text-sm-left-text-left">
                <button class="btn buttontheme" type="button" data-toggle="modal" data-target="#instructions_text">Instructions</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



 <div class="col-xl-4 col-md-4 col-sm-12 col-12 mt-4 mobile_area">
      <div class="row">
   <div class="col-xl-12 col-md-12 col-sm-12 col-12 over">
          <img src="<?php echo base_url();?>assets/images/competition/img8.jpg"  style="border-radius: 4px 4px 0 0; vertical-align: middle; border-style: none;" alt="intellithon" class="img-fluid">
           <div class="overlay"> </div>
          <div class="tag_inherit a" >Class 6 - Class 9</div>
        </div>
      </div>
      <div class="row b" >
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12  py-3" style="background-color: #7db3ef;">
            <div class="row rowspace">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4 class="titlee mb-4" style="">Environment</h4>
              </div>
            </div>
            <div class="row rowspace">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-info pr-0 cstm-min-height">
                <span><strong style="font-weight: 500;">Register to see competition topic</strong></span> <br>
              </div>
            </div>
            <div class="row mt-4 ">
              <div class="col-xl-7 col-md-12 col-sm-12 col-12 comp">
                <button type="button " class="btn buttontheme" data-toggle="modal" data-target="#participate" href="" ><a class="text-white" href="<?php echo base_url(); ?>WebsiteController/add_profile">Participate</a> </button>
              </div>
              <div class="col-xl-5 col-md-12 col-sm-12 col-12 pl-xl-0 mt-xl-0 mt-md-3 mt-sm-3 mt-3 text-xl-right text-md-left text-sm-left-text-left">
                <button class="btn buttontheme" type="button" data-toggle="modal" data-target="#instructions_text">Instructions</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>





      


</div>
</div>
    </div>

     <div id="males" class="container tab-pane fade"><br>

      <div class="container">
       <div class="row">

          <div class="col-xl-4 col-md-4 col-sm-12 col-12 mt-4 mobile_area">
      <div class="row">

        <div class="col-xl-12 col-md-12 col-sm-12 col-12 over">
          <img src="<?php echo base_url();?>assets/images/competition/img8.jpg"  style="border-radius: 4px 4px 0 0; vertical-align: middle; border-style: none;" alt="intellithon" class="img-fluid">
           <div class="overlay"> </div>
          <div class="tag_inherit a" >Male 18+</div>
        </div>
      </div>
      <div class="row b" >
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12  py-3" style="background-color: #7db3ef;
 ">
            <div class="row rowspace">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4 class="titlee mb-4" style="">Environment</h4>
              </div>
            </div>
            <div class="row rowspace">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-info pr-0 cstm-min-height">
                <span><strong style="font-weight: 500;">Register to see competition topic</strong></span> <br>
              </div>
            </div>
            <div class="row mt-4 ">
              <div class="col-xl-7 col-md-12 col-sm-12 col-12 comp">
                <button type="button " class="btn buttontheme" data-toggle="modal" data-target="#participate" href="" ><a class="text-white" href="<?php echo base_url(); ?>WebsiteController/add_profile">Participate</a> </button>
              </div>
              <div class="col-xl-5 col-md-12 col-sm-12 col-12 pl-xl-0 mt-xl-0 mt-md-3 mt-sm-3 mt-3 text-xl-right text-md-left text-sm-left-text-left">
                <button class="btn buttontheme" type="button" data-toggle="modal" data-target="#instructions_text">Instructions</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ************** -->


 <div class="col-xl-4 col-md-4 col-sm-12 col-12 mt-4 mobile_area">
      <div class="row">
    <div class="col-xl-12 col-md-12 col-sm-12 col-12 over">
          <img src="<?php echo base_url();?>assets/images/competition/img8.jpg"  style="border-radius: 4px 4px 0 0; vertical-align: middle; border-style: none;" alt="intellithon" class="img-fluid">
           <div class="overlay"> </div>
          <div class="tag_inherit a" >Male 18+</div>
        </div>
      </div>
      <div class="row b" >
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12  py-3" style="background-color: #7db3ef;
 ">
            <div class="row rowspace">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4 class="titlee mb-4" style="">Environment</h4>
              </div>
            </div>
            <div class="row rowspace">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-info pr-0 cstm-min-height">
                <span><strong style="font-weight: 500;">Register to see competition topic</strong></span> <br>
              </div>
            </div>
            <div class="row mt-4 ">
              <div class="col-xl-7 col-md-12 col-sm-12 col-12 comp">
                <button type="button " class="btn buttontheme" data-toggle="modal" data-target="#participate" href="" ><a class="text-white" href="<?php echo base_url(); ?>WebsiteController/add_profile">Participate</a> </button>
              </div>
              <div class="col-xl-5 col-md-12 col-sm-12 col-12 pl-xl-0 mt-xl-0 mt-md-3 mt-sm-3 mt-3 text-xl-right text-md-left text-sm-left-text-left">
                <button class="btn buttontheme" type="button" data-toggle="modal" data-target="#instructions_text">Instructions</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  <!-- *********** -->

 <div class="col-xl-4 col-md-4 col-sm-12 col-12 mt-4 mobile_area">
      <div class="row">
   <div class="col-xl-12 col-md-12 col-sm-12 col-12 over">
          <img src="<?php echo base_url();?>assets/images/competition/img8.jpg"  style="border-radius: 4px 4px 0 0; vertical-align: middle; border-style: none;" alt="intellithon" class="img-fluid">
           <div class="overlay"> </div>
          <div class="tag_inherit a" >Male 18+</div>
        </div>
      </div>
      <div class="row b" >
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12  py-3" style="background-color: #7db3ef;
 ">
            <div class="row rowspace">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4 class="titlee mb-4" style="">Environment</h4>
              </div>
            </div>
            <div class="row rowspace">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-info pr-0 cstm-min-height">
                <span><strong style="font-weight: 500;">Register to see competition topic</strong></span> <br>
              </div>
            </div>
            <div class="row mt-4 ">
              <div class="col-xl-7 col-md-12 col-sm-12 col-12 comp">
                <button type="button " class="btn buttontheme" data-toggle="modal" data-target="#participate" href="" ><a class="text-white" href="<?php echo base_url(); ?>WebsiteController/add_profile">Participate</a> </button>
              </div>
              <div class="col-xl-5 col-md-12 col-sm-12 col-12 pl-xl-0 mt-xl-0 mt-md-3 mt-sm-3 mt-3 text-xl-right text-md-left text-sm-left-text-left">
                <button class="btn buttontheme" type="button" data-toggle="modal" data-target="#instructions_text">Instructions</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<!-- *********************** -->


 <div class="col-xl-4 col-md-4 col-sm-12 col-12 mt-4 mobile_area">
      <div class="row">
   <div class="col-xl-12 col-md-12 col-sm-12 col-12 over">
          <img src="<?php echo base_url();?>assets/images/competition/img8.jpg"  style="border-radius: 4px 4px 0 0; vertical-align: middle; border-style: none;" alt="intellithon" class="img-fluid">
           <div class="overlay"> </div>
          <div class="tag_inherit a" >Male 18+</div>
        </div>
      </div>
      <div class="row b" >
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12  py-3" style="background-color: #7db3ef;
 ">
            <div class="row rowspace">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4 class="titlee mb-4" style="">Environment</h4>
              </div>
            </div>
            <div class="row rowspace">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-info pr-0 cstm-min-height">
                <span><strong style="font-weight: 500;">Register to see competition topic</strong></span> <br>
              </div>
            </div>
            <div class="row mt-4 ">
              <div class="col-xl-7 col-md-12 col-sm-12 col-12 comp">
                <button type="button " class="btn buttontheme" data-toggle="modal" data-target="#participate" href="" ><a class="text-white" href="<?php echo base_url(); ?>WebsiteController/add_profile">Participate</a> </button>
              </div>
              <div class="col-xl-5 col-md-12 col-sm-12 col-12 pl-xl-0 mt-xl-0 mt-md-3 mt-sm-3 mt-3 text-xl-right text-md-left text-sm-left-text-left">
                <button class="btn buttontheme" type="button" data-toggle="modal" data-target="#instructions_text">Instructions</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<!-- *********************** -->


 <div class="col-xl-4 col-md-4 col-sm-12 col-12 mt-4 mobile_area">
      <div class="row">
     <div class="col-xl-12 col-md-12 col-sm-12 col-12 over">
          <img src="<?php echo base_url();?>assets/images/competition/img8.jpg"  style="border-radius: 4px 4px 0 0; vertical-align: middle; border-style: none;" alt="intellithon" class="img-fluid">
           <div class="overlay"> </div>
          <div class="tag_inherit a" >Male 18+</div>
        </div>
      </div>
      <div class="row b" >
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12  py-3" style="background-color: #7db3ef;
 ">
            <div class="row rowspace">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4 class="titlee mb-4" style="">Environment</h4>
              </div>
            </div>
            <div class="row rowspace">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-info pr-0 cstm-min-height">
                <span><strong style="font-weight: 500;">Register to see competition topic</strong></span> <br>
              </div>
            </div>
            <div class="row mt-4 ">
              <div class="col-xl-7 col-md-12 col-sm-12 col-12 comp">
                <button type="button " class="btn buttontheme" data-toggle="modal" data-target="#participate" href="" ><a class="text-white" href="<?php echo base_url(); ?>WebsiteController/add_profile">Participate</a> </button>
              </div>
              <div class="col-xl-5 col-md-12 col-sm-12 col-12 pl-xl-0 mt-xl-0 mt-md-3 mt-sm-3 mt-3 text-xl-right text-md-left text-sm-left-text-left">
                <button class="btn buttontheme" type="button" data-toggle="modal" data-target="#instructions_text">Instructions</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



 <div class="col-xl-4 col-md-4 col-sm-12 col-12 mt-4 mobile_area">
      <div class="row">
   <div class="col-xl-12 col-md-12 col-sm-12 col-12 over">
          <img src="<?php echo base_url();?>assets/images/competition/img8.jpg"  style="border-radius: 4px 4px 0 0; vertical-align: middle; border-style: none;" alt="intellithon" class="img-fluid">
           <div class="overlay"> </div>
          <div class="tag_inherit a" >Male 18+</div>
        </div>
      </div>
      <div class="row b" >
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12  py-3" style="background-color: #7db3ef;">
            <div class="row rowspace">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4 class="titlee mb-4" style="">Environment</h4>
              </div>
            </div>
            <div class="row rowspace">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-info pr-0 cstm-min-height">
                <span><strong style="font-weight: 500;">Register to see competition topic</strong></span> <br>
              </div>
            </div>
            <div class="row mt-4 ">
              <div class="col-xl-7 col-md-12 col-sm-12 col-12 comp">
                <button type="button " class="btn buttontheme" data-toggle="modal" data-target="#participate" href="" ><a class="text-white" href="<?php echo base_url(); ?>WebsiteController/add_profile">Participate</a> </button>
              </div>
              <div class="col-xl-5 col-md-12 col-sm-12 col-12 pl-xl-0 mt-xl-0 mt-md-3 mt-sm-3 mt-3 text-xl-right text-md-left text-sm-left-text-left">
                <button class="btn buttontheme" type="button" data-toggle="modal" data-target="#instructions_text">Instructions</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



       
     </div>

    </div>
  </div>

   <!-- ****** -->
 <div id="females" class="container tab-pane fade"><br>
        <div class="container">
          <div class="row">


    <div class="col-xl-4 col-md-4 col-sm-12 col-12 mt-4 mobile_area">
      <div class="row">
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <img src="https://s3.ap-south-1.amazonaws.com/intellithononline.com/files/images/content/Girls_Environment.jpg" alt="intellithon" class="img-fluid">
          <div class="tag_inherit a">Female 18+</div>
        </div>
      </div>
      <div class="row b">
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12 backblue py-3" style="background-color: #68a0c7;">
            <div class="row">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4 class="text-white mb-4">Environment</h4>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-white pr-0 cstm-min-height">
                <span><strong>Register to see competition topic</strong></span> <br>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-xl-7 col-md-12 col-sm-12 col-12">
                <button type="button" class="btn btn-customm bluebtn text-white" data-toggle="modal" data-target="#participate" style="background-color: #00000033;">Participate</button>
              </div>
              <div class="col-xl-5 col-md-12 col-sm-12 col-12 pl-xl-0 mt-xl-0 mt-md-3 mt-sm-3 mt-3 text-xl-right text-md-left text-sm-left-text-left">
                <button class="btn btn-outline-light btn-block" type="button" data-toggle="modal" data-target="#instructions_text">Instructions</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-4 col-md-4 col-sm-12 col-12 mt-4 mobile_area">
      <div class="row">
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <img src="https://s3.ap-south-1.amazonaws.com/intellithononline.com/files/images/content/Girls_GK.jpg" alt="intellithon" class="img-fluid">
          <div class="tag_inherit a">Female 18+</div>
        </div>
      </div>
      <div class="row b">
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12 backorange py-3" style="background-color: #f1ab5c;">
            <div class="row">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4 class="text-white mb-4">GK</h4>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-white pr-0 cstm-min-height">
                <span><strong>Register to see competition topic</strong></span> <br>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-xl-7 col-md-12 col-sm-12 col-12">
                <button type="button" class="btn btn-customm bluebtn text-white" data-toggle="modal" data-target="#participate" style="background-color: #00000033;">Participate</button>
              </div>
              <div class="col-xl-5 col-md-12 col-sm-12 col-12 pl-xl-0 mt-xl-0 mt-md-3 mt-sm-3 mt-3 text-xl-right text-md-left text-sm-left-text-left">
                <button class="btn btn-outline-light btn-block" type="button" data-toggle="modal" data-target="#instructions_text">Instructions</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-4 col-md-4 col-sm-12 col-12 mt-4 mobile_area">
      <div class="row">
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <img src="https://s3.ap-south-1.amazonaws.com/intellithononline.com/files/images/content/Girls_History.jpg" alt="intellithon" class="img-fluid">
          <div class="tag_inherit a">Female 18+</div>
        </div>
      </div>
      <div class="row b">
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12 backgreen py-3" style="background-color: #a0d660;">
            <div class="row">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4 class="text-white mb-4">History</h4>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-white pr-0 cstm-min-height">
                <span><strong>Register to see competition topic</strong></span> <br>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-xl-7 col-md-12 col-sm-12 col-12">
                <button type="button" class="btn btn-customm bluebtn text-white" data-toggle="modal" data-target="#participate" style="background-color: #00000033;">Participate</button>
              </div>
              <div class="col-xl-5 col-md-12 col-sm-12 col-12 pl-xl-0 mt-xl-0 mt-md-3 mt-sm-3 mt-3 text-xl-right text-md-left text-sm-left-text-left">
                <button class="btn btn-outline-light btn-block" type="button" data-toggle="modal" data-target="#instructions_text">Instructions</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-4 col-md-4 col-sm-12 col-12 mt-4 mobile_area">
      <div class="row">
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <img src="https://s3.ap-south-1.amazonaws.com/intellithononline.com/files/images/content/Girls_Ideas.jpg" alt="intellithon" class="img-fluid">
          <div class="tag_inherit a">Female 18+</div>
        </div>
      </div>
      <div class="row b">
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12 backred py-3" style="background-color: #de7376;">
            <div class="row">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4 class="text-white mb-4">Ideas &amp; Innovation</h4>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-white pr-0 cstm-min-height">
                <span><strong>Register to see competition topic</strong></span> <br>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-xl-7 col-md-12 col-sm-12 col-12">
                <button type="button" class="btn btn-customm bluebtn text-white" data-toggle="modal" data-target="#participate" style="background-color: #00000033;">Participate</button>
              </div>
              <div class="col-xl-5 col-md-12 col-sm-12 col-12 pl-xl-0 mt-xl-0 mt-md-3 mt-sm-3 mt-3 text-xl-right text-md-left text-sm-left-text-left">
                <button class="btn btn-outline-light btn-block" type="button" data-toggle="modal" data-target="#instructions_text">Instructions</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-4 col-md-4 col-sm-12 col-12 mt-4 mobile_area">
      <div class="row">
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <img src="https://s3.ap-south-1.amazonaws.com/intellithononline.com/files/images/content/Girls_Comedy.jpg" alt="intellithon" class="img-fluid">
          <div class="tag_inherit a">Female 18+</div>
        </div>
      </div>
      <div class="row b">
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12 backpurple py-3" style="background-color: #b77cd8;">
            <div class="row">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4 class="text-white mb-4">Comedy</h4>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-white pr-0 cstm-min-height">
                <span><strong>Register to see competition topic</strong></span> <br>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-xl-7 col-md-12 col-sm-12 col-12">
                <button type="button" class="btn btn-customm bluebtn text-white" data-toggle="modal" data-target="#participate" style="background-color: #00000033;">Participate</button>
              </div>
              <div class="col-xl-5 col-md-12 col-sm-12 col-12 pl-xl-0 mt-xl-0 mt-md-3 mt-sm-3 mt-3 text-xl-right text-md-left text-sm-left-text-left">
                <button class="btn btn-outline-light btn-block" type="button" data-toggle="modal" data-target="#instructions_text">Instructions</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-4 col-md-4 col-sm-12 col-12 mt-4 mobile_area">
      <div class="row">
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <img src="https://s3.ap-south-1.amazonaws.com/intellithononline.com/files/images/content/Girls_Leadership.jpg" alt="intellithon" class="img-fluid">
          <div class="tag_inherit a">Female 18+</div>
        </div>
      </div>
      <div class="row b">
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12 backlgreen py-3" style="background-color: #73c9cc;">
            <div class="row">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4 class="text-white mb-4">Leadership Skills</h4>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-white pr-0 cstm-min-height">
                <span><strong>Register to see competition topic</strong></span> <br>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-xl-7 col-md-12 col-sm-12 col-12">
                <button type="button" class="btn btn-customm bluebtn text-white" data-toggle="modal" data-target="#participate"  style="background-color: #00000033;">Participate</button>
              </div>
              <div class="col-xl-5 col-md-12 col-sm-12 col-12 pl-xl-0 mt-xl-0 mt-md-3 mt-sm-3 mt-3 text-xl-right text-md-left text-sm-left-text-left">
                <button class="btn btn-outline-light btn-block" type="button" data-toggle="modal" data-target="#instructions_text">Instructions</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-4 col-md-4 col-sm-12 col-12 mt-4 mobile_area">
      <div class="row">
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <img src="https://s3.ap-south-1.amazonaws.com/intellithononline.com/files/images/content/Girls_Health.jpg" alt="intellithon" class="img-fluid">
          <div class="tag_inherit a">Female 18+</div>
        </div>
      </div>
      <div class="row b">
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12 backblue py-3" style="background-color: #75b3dc;">
            <div class="row">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4 class="text-white mb-4">Health &amp; Happiness</h4>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-white pr-0 cstm-min-height">
                <span><strong>Register to see competition topic</strong></span> <br>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-xl-7 col-md-12 col-sm-12 col-12">
                <button type="button" class="btn btn-customm bluebtn text-white" data-toggle="modal" data-target="#participate" style="background-color: #00000033;">Participate</button>
              </div>
              <div class="col-xl-5 col-md-12 col-sm-12 col-12 pl-xl-0 mt-xl-0 mt-md-3 mt-sm-3 mt-3 text-xl-right text-md-left text-sm-left-text-left">
                <button class="btn btn-outline-light btn-block" type="button" data-toggle="modal" data-target="#instructions_text">Instructions</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-4 col-md-4 col-sm-12 col-12 mt-4 mobile_area">
      <div class="row">
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <img src="https://s3.ap-south-1.amazonaws.com/intellithononline.com/files/images/content/Girls_Business.jpg" alt="intellithon" class="img-fluid">
          <div class="tag_inherit a">Female 18+</div>
        </div>
      </div>
      <div class="row b">
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12 backorange py-3" style="background-color:  #efbc5e;">
            <div class="row">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4 class="text-white mb-4">Business Skills</h4>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-white pr-0 cstm-min-height">
                <span><strong>Register to see competition topic</strong></span> <br>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-xl-7 col-md-12 col-sm-12 col-12">
                <button type="button" class="btn btn-customm bluebtn text-white" data-toggle="modal" data-target="#participate" style="background-color: #00000033;">Participate</button>
              </div>
              <div class="col-xl-5 col-md-12 col-sm-12 col-12 pl-xl-0 mt-xl-0 mt-md-3 mt-sm-3 mt-3 text-xl-right text-md-left text-sm-left-text-left">
                <button class="btn btn-outline-light btn-block" type="button" data-toggle="modal" data-target="#instructions_text">Instructions</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-4 col-md-4 col-sm-12 col-12 mt-4 mobile_area">
      <div class="row">
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <img src="https://s3.ap-south-1.amazonaws.com/intellithononline.com/files/images/content/Girls_Masti.jpg" alt="intellithon" class="img-fluid">
          <div class="tag_inherit a">Female 18+</div>
        </div>
      </div>
      <div class="row b">
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12 backgreen py-3" style="background-color: #a3d667;">
            <div class="row">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4 class="text-white mb-4">Masti</h4>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-white pr-0 cstm-min-height">
                <span><strong>Register to see competition topic</strong></span> <br>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-xl-7 col-md-12 col-sm-12 col-12">
                <button type="button" class="btn btn-customm bluebtn text-white" data-toggle="modal" data-target="#participate" style="background-color: #00000033;">Participate</button>
              </div>
              <div class="col-xl-5 col-md-12 col-sm-12 col-12 pl-xl-0 mt-xl-0 mt-md-3 mt-sm-3 mt-3 text-xl-right text-md-left text-sm-left-text-left">
                <button class="btn btn-outline-light btn-block" type="button" data-toggle="modal" data-target="#instructions_text">Instructions</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-4 col-md-4 col-sm-12 col-12 mt-4 mobile_area">
      <div class="row">
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <img src="https://s3.ap-south-1.amazonaws.com/intellithononline.com/files/images/content/Girls_Drawing.jpg" alt="intellithon" class="img-fluid">
          <div class="tag_inherit a">Female 18+</div>
        </div>
      </div>
      <div class="row b">
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12 backred py-3" style="background-color: #e27171;">
            <div class="row">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4 class="text-white mb-4">Drawing</h4>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-white pr-0 cstm-min-height">
                <span><strong>Register to see competition topic</strong></span> <br>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-xl-7 col-md-12 col-sm-12 col-12">
                <button type="button" class="btn btn-customm bluebtn text-white" data-toggle="modal" data-target="#participate" style="background-color: #00000033;">Participate</button>
              </div>
              <div class="col-xl-5 col-md-12 col-sm-12 col-12 pl-xl-0 mt-xl-0 mt-md-3 mt-sm-3 mt-3 text-xl-right text-md-left text-sm-left-text-left">
                <button class="btn btn-outline-light btn-block" type="button" data-toggle="modal" data-target="#instructions_text">Instructions</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-4 col-md-4 col-sm-12 col-12 mt-4 mobile_area">
      <div class="row">
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <img src="https://s3.ap-south-1.amazonaws.com/intellithononline.com/files/images/content/Girls_Communication.jpg" alt="intellithon" class="img-fluid">
          <div class="tag_inherit a">Female 18+</div>
        </div>
      </div>
      <div class="row b">
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12 backpurple py-3" style="background-color: #ae82cc;">
            <div class="row">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4 class="text-white mb-4">Communication Skills</h4>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-white pr-0 cstm-min-height">
                <span><strong>Register to see competition topic</strong></span> <br>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-xl-7 col-md-12 col-sm-12 col-12">
                <button type="button" class="btn btn-customm bluebtn text-white" data-toggle="modal" data-target="#participate" style="background-color: #00000033;">Participate</button>
              </div>
              <div class="col-xl-5 col-md-12 col-sm-12 col-12 pl-xl-0 mt-xl-0 mt-md-3 mt-sm-3 mt-3 text-xl-right text-md-left text-sm-left-text-left">
                <button class="btn btn-outline-light btn-block" type="button" data-toggle="modal" data-target="#instructions_text">Instructions</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-4 col-md-4 col-sm-12 col-12 mt-4 mobile_area">
      <div class="row">
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <img src="https://s3.ap-south-1.amazonaws.com/intellithononline.com/files/images/content/Girls_Cooking.jpg" alt="intellithon" class="img-fluid">
          <div class="tag_inherit a">Female 18+</div>
        </div>
      </div>
      <div class="row b">
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12 backlgreen py-3" style="background-color: #abd66c;">
            <div class="row">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4 class="text-white mb-4">Cooking</h4>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-white pr-0 cstm-min-height">
                <span><strong>Register to see competition topic</strong></span> <br>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-xl-7 col-md-12 col-sm-12 col-12">
                <button type="button" class="btn btn-customm bluebtn text-white" data-toggle="modal" data-target="#participate" style="background-color: #00000033;">Participate</button>
              </div>
              <div class="col-xl-5 col-md-12 col-sm-12 col-12 pl-xl-0 mt-xl-0 mt-md-3 mt-sm-3 mt-3 text-xl-right text-md-left text-sm-left-text-left">
                <button class="btn btn-outline-light btn-block" type="button" data-toggle="modal" data-target="#instructions_text">Instructions</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-4 col-md-4 col-sm-12 col-12 mt-4 mobile_area">
      <div class="row">
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <img src="https://s3.ap-south-1.amazonaws.com/intellithononline.com/files/images/content/Girls_Daydreaming.jpg" alt="intellithon" class="img-fluid">
          <div class="tag_inherit a">Female 18+</div>
        </div>
      </div>
      <div class="row b">
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12 backblue py-3" style="background-color: #88a2e4;">
            <div class="row">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4 class="text-white mb-4">Day Dreaming</h4>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-white pr-0 cstm-min-height">
                <span><strong>Register to see competition topic</strong></span> <br>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-xl-7 col-md-12 col-sm-12 col-12">
                <button type="button" class="btn btn-customm bluebtn text-white" data-toggle="modal" data-target="#participate" style="background-color: #00000033;">Participate</button>
              </div>
              <div class="col-xl-5 col-md-12 col-sm-12 col-12 pl-xl-0 mt-xl-0 mt-md-3 mt-sm-3 mt-3 text-xl-right text-md-left text-sm-left-text-left">
                <button class="btn btn-outline-light btn-block" type="button" data-toggle="modal" data-target="#instructions_text">Instructions</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-4 col-md-4 col-sm-12 col-12 mt-4 mobile_area">
      <div class="row">
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <img src="https://s3.ap-south-1.amazonaws.com/intellithononline.com/files/images/content/Girls_Dialogue.jpg" alt="intellithon" class="img-fluid">
          <div class="tag_inherit a">Female 18+</div>
        </div>
      </div>
      <div class="row b">
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12 backorange py-3" style="background-color: #dea85c;">
            <div class="row">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4 class="text-white mb-4">Dialogue</h4>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-white pr-0 cstm-min-height">
                <span><strong>Register to see competition topic</strong></span> <br>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-xl-7 col-md-12 col-sm-12 col-12">
                <button type="button" class="btn btn-customm bluebtn text-white" data-toggle="modal" data-target="#participate" style="background-color: #00000033;">Participate</button>
              </div>
              <div class="col-xl-5 col-md-12 col-sm-12 col-12 pl-xl-0 mt-xl-0 mt-md-3 mt-sm-3 mt-3 text-xl-right text-md-left text-sm-left-text-left">
                <button class="btn btn-outline-light btn-block" type="button" data-toggle="modal" data-target="#instructions_text">Instructions</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-4 col-md-4 col-sm-12 col-12 mt-4 mobile_area">
      <div class="row">
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <img src="https://s3.ap-south-1.amazonaws.com/intellithononline.com/files/images/content/Girls_Movies.jpg" alt="intellithon" class="img-fluid">
          <div class="tag_inherit a">Female 18+</div>
        </div>
      </div>
      <div class="row b">
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12 backgreen py-3" style="background-color: #5adedb;">
            <div class="row">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4 class="text-white mb-4">Movies</h4>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-white pr-0 cstm-min-height">
                <span><strong>Register to see competition topic</strong></span> <br>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-xl-7 col-md-12 col-sm-12 col-12">
                <button type="button" class="btn btn-customm bluebtn text-white" data-toggle="modal" data-target="#participate" style="background-color: #00000033;">Participate</button>
              </div>
              <div class="col-xl-5 col-md-12 col-sm-12 col-12 pl-xl-0 mt-xl-0 mt-md-3 mt-sm-3 mt-3 text-xl-right text-md-left text-sm-left-text-left">
                <button class="btn btn-outline-light btn-block" type="button" data-toggle="modal" data-target="#instructions_text">Instructions</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-4 col-md-4 col-sm-12 col-12 mt-4 mobile_area">
      <div class="row">
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <img src="https://s3.ap-south-1.amazonaws.com/intellithononline.com/files/images/content/Girls_Acting.jpg" alt="intellithon" class="img-fluid">
          <div class="tag_inherit a">Female 18+</div>
        </div>
      </div>
      <div class="row b">
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12 backred py-3" style="background-color: #ea8787;">
            <div class="row">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4 class="text-white mb-4">Acting</h4>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-white pr-0 cstm-min-height">
                <span><strong>Register to see competition topic</strong></span> <br>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-xl-7 col-md-12 col-sm-12 col-12">
                <button type="button" class="btn btn-customm bluebtn text-white" data-toggle="modal" data-target="#participate" style="background-color: #00000033;">Participate</button>
              </div>
              <div class="col-xl-5 col-md-12 col-sm-12 col-12 pl-xl-0 mt-xl-0 mt-md-3 mt-sm-3 mt-3 text-xl-right text-md-left text-sm-left-text-left">
                <button class="btn btn-outline-light btn-block" type="button" data-toggle="modal" data-target="#instructions_text">Instructions</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-4 col-md-4 col-sm-12 col-12 mt-4 mobile_area">
      <div class="row">
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <img src="https://s3.ap-south-1.amazonaws.com/intellithononline.com/files/images/content/Girls_Photography.jpg" alt="intellithon" class="img-fluid">
          <div class="tag_inherit a">Female 18+</div>
        </div>
      </div>
      <div class="row b">
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12 backpurple py-3" style="background-color: #8b88d4;">
            <div class="row">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4 class="text-white mb-4">Photography</h4>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-white pr-0 cstm-min-height">
                <span><strong>Register to see competition topic</strong></span> <br>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-xl-7 col-md-12 col-sm-12 col-12">
                <button type="button" class="btn btn-customm bluebtn text-white" data-toggle="modal" data-target="#participate" style="background-color: #00000033;">Participate</button>
              </div>
              <div class="col-xl-5 col-md-12 col-sm-12 col-12 pl-xl-0 mt-xl-0 mt-md-3 mt-sm-3 mt-3 text-xl-right text-md-left text-sm-left-text-left">
                <button class="btn btn-outline-light btn-block" type="button" data-toggle="modal" data-target="#instructions_text">Instructions</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-4 col-md-4 col-sm-12 col-12 mt-4 mobile_area">
      <div class="row">
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <img src="https://s3.ap-south-1.amazonaws.com/intellithononline.com/files/images/content/Girls_Life_Skills.jpg" alt="intellithon" class="img-fluid">
          <div class="tag_inherit a">Female 18+</div>
        </div>
      </div>
      <div class="row b">
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12 backlgreen py-3" style="background-color: #68cdd0;">
            <div class="row">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4 class="text-white mb-4">Life Skills</h4>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-white pr-0 cstm-min-height">
                <span><strong>Register to see competition topic</strong></span> <br>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-xl-7 col-md-12 col-sm-12 col-12">
                <button type="button" class="btn btn-customm bluebtn text-white" data-toggle="modal" data-target="#participate" style="background-color: #00000033;">Participate</button>
              </div>
              <div class="col-xl-5 col-md-12 col-sm-12 col-12 pl-xl-0 mt-xl-0 mt-md-3 mt-sm-3 mt-3 text-xl-right text-md-left text-sm-left-text-left">
                <button class="btn btn-outline-light btn-block" type="button" data-toggle="modal" data-target="#instructions_text">Instructions</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-4 col-md-4 col-sm-12 col-12 mt-4 mobile_area">
      <div class="row">
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <img src="https://s3.ap-south-1.amazonaws.com/intellithononline.com/files/images/content/Girls_Thinking.jpg" alt="intellithon" class="img-fluid">
          <div class="tag_inherit a">Female 18+</div>
        </div>
      </div>
      <div class="row b">
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12 backblue py-3" style="background-color: #6eabd6;">
            <div class="row">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4 class="text-white mb-4">Thinking &amp; Observation</h4>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-white pr-0 cstm-min-height">
                <span><strong>Register to see competition topic</strong></span> <br>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-xl-7 col-md-12 col-sm-12 col-12">
                <button type="button" class="btn btn-customm bluebtn text-white" data-toggle="modal" data-target="#participate" style="background-color: #00000033;">Participate</button>
              </div>
              <div class="col-xl-5 col-md-12 col-sm-12 col-12 pl-xl-0 mt-xl-0 mt-md-3 mt-sm-3 mt-3 text-xl-right text-md-left text-sm-left-text-left">
                <button class="btn btn-outline-light btn-block" type="button" data-toggle="modal" data-target="#instructions_text">Instructions</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-4 col-md-4 col-sm-12 col-12 mt-4 mobile_area">
      <div class="row">
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <img src="https://s3.ap-south-1.amazonaws.com/intellithononline.com/files/images/content/Girls_Writimg.jpg" alt="intellithon" class="img-fluid">
          <div class="tag_inherit a">Female 18+</div>
        </div>
      </div>
      <div class="row b">
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12 backorange py-3" style="background-color:  #dea769;">
            <div class="row">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4 class="text-white mb-4">Writing</h4>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-white pr-0 cstm-min-height">
                <span><strong>Register to see competition topic</strong></span> <br>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-xl-7 col-md-12 col-sm-12 col-12">
                <button type="button" class="btn btn-customm bluebtn text-white" data-toggle="modal" data-target="#participate" style="background-color: #00000033;">Participate</button>
              </div>
              <div class="col-xl-5 col-md-12 col-sm-12 col-12 pl-xl-0 mt-xl-0 mt-md-3 mt-sm-3 mt-3 text-xl-right text-md-left text-sm-left-text-left">
                <button class="btn btn-outline-light btn-block" type="button" data-toggle="modal" data-target="#instructions_text">Instructions</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



          </div>
      </div>


    </div>




  </div>



            </div>
        </section><!-- /.course-one__top-title -->
<br>
 <script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
                      <script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script> 

                     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  


                    <script>
                    $(document).ready(function(){
                     $('#countryid').change(function(){
                      var countryid = $('#countryid').val();
                      if(countryid != '')
                      {
                       $.ajax({
                        url:"<?php echo base_url(); ?>WebsiteController/fetch_state",
                        method:"POST",
                        data:{countryid:countryid},
                        success:function(data)
                        {
                          // alert(data);
                          // console.log(data);
                         $('#stateid').html(data);
                         $('#cityid').html('<option value="">Select City</option>');
                        }
                       });
                      }
                      else
                      {
                       $('#stateid').html('<option value="">Select State</option>');
                       $('#cityid').html('<option value="">Select City</option>');
                      }
                     });

                     $('#stateid').change(function(){
                      var stateid = $('#stateid').val();
                      if(stateid != '')
                      {
                       $.ajax({
                        url:"<?php echo base_url(); ?>WebsiteController/fetch_city",
                        method:"POST",
                        data:{stateid:stateid},
                        success:function(data)
                        {
                         $('#cityid').html(data);
                         $('#districtid').html('<option value="">Select District</option>');

                        }
                       });
                      }
                      else
                      {
                       $('#cityid').html('<option value="">Select City</option>');
                         $('#districtid').html('<option value="">Select District</option>');

                      }
                     });

                      $('#cityid').change(function(){
                      var cityid = $('#cityid').val();
                      if(cityid != '')
                      {
                       $.ajax({
                        url:"<?php echo base_url(); ?>WebsiteController/fetch_district",
                        method:"POST",
                        data:{cityid:cityid},
                        success:function(data)
                        {
                         $('#districtid').html(data);
                         
                        }
                       });
                      }
                      else
                      {
                       $('#districtid').html('<option value="">Select District</option>');
                       

                      }
                     });
                     
                    });
                    </script>