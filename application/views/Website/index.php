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
                    <div class="col-xl-12">

                     
                        <div class="about-two__content text-white abt">

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
        <section class="competition">
          <div class="container">
            <div class="row justify-content-center">
              
<div class="category-buttons ">
    <a href="#" class="active all theme-btn" data-group="all">All</a>
    <a href="#" class="theme-btn"  data-group="Nur-1st">Nur-1st</a>
    <a href="#" class="theme-btn"  data-group="2nd-5th">2nd-5th</a>
    <a href="#" class="theme-btn" data-group="6th-9th">6th-9th</a>
    <a href="#" class="theme-btn"  data-group="Male(18+)">Male(18+)</a>
    <a href="#" class="theme-btn"  data-group="Female(18+)">Female(18+)</a>
  </div>
   </div>
   <div class="row">
    <div class="col-xl-3 col-md-3 col-sm-12 col-12 mt-4 mobile_area" data-groups="Nur-1st">
      <div class="row">
    <div class="col-xl-12 col-md-12 col-sm-12 col-12 over">
          <img src="<?php echo base_url();?>assets/images/competition/img8.jpg" style=" height:300px;  border-radius: 4px 4px 4px 4px; vertical-align: middle; border-style: none;" alt="intellithon" class="img-fluid">
           <div class="overlay">
            <div class="text">
              <h5>Environment</h5>
              <h6>Register to see competition topic</h6>
              <p href="" class="">Participate</p>
              <p href="" class="">Instruction</p>

            </div>

            </div>
          <div class="tag_inherit a" >Nursery - Class 1</div>
        </div>
      </div>
      <!-- <div class="row b" >
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
      </div> -->
    </div>
     
   </div>

  

  

              
           
            
          </div>
          
        </section>

        <!-- /.course-one__top-title -->
<br>
<script type="text/javascript">
  $(document).ready(function() {
  var projects = $('.card');
  var filteredProjects = [];
  var selection = "all";
  var running = false;
  window.setTimeout(function() {
    $('.all').trigger('click');
  }, 150);

  $(window).resize(function() {
    buildGrid(filteredProjects);
  });

  $('.category-buttons a').on('click', function(e) {
    e.preventDefault();
    if (!running) {
      running = true;
      selection = $(this).data('group');
      $('.category-buttons a').removeClass('active');
      $(this).addClass('active');
      filteredProjects = [];
      for (i = 0; i < projects.length; i++) {
        var project = projects[i];
        var dataString = $(project).data('groups');
        var dataArray = dataString.split(',');
        dataArray.pop();
        if (selection === 'all') {
          $(project).addClass('setScale').queue(function(next) {
            filteredProjects.push(project);
            next();
          }).queue(function(next) {
            $(this).removeClass('setScale');
            next();
          }).queue(function(next) {
            $(this).addClass('animating show')
            next();
          }).delay(750).queue(function() {
            running = false;
            $(this).removeClass('animating').dequeue();
          });
        } else {
          if ($.inArray(selection, dataArray) > -1) {
            $(project).addClass('setScale').queue(function(next) {
              filteredProjects.push(project);
              next();
            }).queue(function(next) {
              $(this).removeClass('setScale');
              next();
            }).queue(function(next) {
              $(this).addClass('animating show')
              next();
            }).delay(750).queue(function() {
              running = false;
              $(this).removeClass('animating').dequeue();
            });
            /*$(project).css({
              '-webkit-transition': 'all 750ms cubic-bezier(0.175, 0.885, 0.32, 1.1)',
              'transition': 'all 750ms cubic-bezier(0.175, 0.885, 0.32, 1.1);',
              '-webkit-transform': 'scale(' + 1 + ')',
              '-ms-transform': 'scale(' + 1 + ')',
              'transform': 'scale(' + 1 + ')',
              'opacity': 1
            });*/
          } else {
            $(project).queue(function(next) {
              $(this).addClass('animating');
              next();
            }).queue(function(next) {
              $(this).removeClass('show');
              next();
            }).delay(750).queue(function() {
              $(this).removeClass('animating').dequeue();
            });

            /*$(project).css({
              '-webkit-transition': 'all 750ms cubic-bezier(0.175, 0.885, 0.32, 1.1)',
              'transition': 'all 750ms cubic-bezier(0.175, 0.885, 0.32, 1.1);',
              '-webkit-transform': 'scale(' + 0 + ')',
              '-webkit-transform': 'scale(' + 0 + ')',
              '-ms-transform': 'scale(' + 0 + ')',
              'transform': 'scale(' + 0 + ')',
              'opacity': 0
            });*/
          }
        }
      }
      buildGrid(filteredProjects);
    }
  })

  function buildGrid(projects) {
    var left = 0;
    var top = 0;
    var totalHeight = 0;
    var largest = 0;
    var heights = [];
    for (i = 0; i < projects.length; i++) {
      $(projects[i]).css({
        height: 'auto'
      });
      heights.push($(projects[i]).height());
    }
    var maxIndex = 0;
    var maxHeight = 0;

    for (i = 0; i <= heights.length; i++) {
      if (heights[i] > maxHeight) {
        maxHeight = heights[i];
        maxIndex = i;
        $('.guide').height(maxHeight);
      }
      if (i === heights.length) {
        for (i = 0; i < projects.length; i++) {
          $(projects[i]).css({
            position: 'absolute',
            left: left + '%',
            top: top
          });
          left = left + ($('.guide').width() / $('#grid').width() * 100) + 2;

          if (i === maxIndex) {
            $(projects[i]).css({
              height: 'auto'
            });
          } else {
            $(projects[i]).css({
              height: maxHeight
            });
          }
          if ((i + 1) % 3 === 0 && projects.length > 3 && $(window).width() >= 700) {
            top = top + $('.guide').height() + 20;
            left = 0;
            totalHeight = totalHeight + $('.guide').height() + 20;

          } else if ((i + 1) % 2 === 0 && projects.length > 2 && $(window).width() < 700 && $(window).width() >= 480) {
            top = top + $('.guide').height() + 20;
            left = 0;
            totalHeight = totalHeight + $('.guide').height() + 20;

          } else if ((i + 1) % 1 === 0 && projects.length > 1 && $(window).width() < 480) {
            top = top + $('.guide').height() + 20;
            left = 0;
            totalHeight = totalHeight + $('.guide').height() + 20;
          }
          $('#grid').height(totalHeight + $('.guide').height());
        }
      }
    }
  }
})
</script>
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