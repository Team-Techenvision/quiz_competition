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
            <h2>Dynamic Quiz Competition</h2>
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
                <h4 class="card-title">Edit Quiz</h4>
                <div class="card-tools col-md-2 " > 
                <a href="<?php echo base_url(); ?>User/quizcompetition_list/<?php echo $compid; ?>" class="btn btn-sm btn-block btn-primary">Quiz List</a>
              </div> 
                
              </div> 
              <!-- /.card-header -->
              <!-- form start -->
              <form id="form_action" role="form" action="" enctype="multipart/form-data" method="post">
                <div class="card-body">
                <div class="row">
                      <?php $i=1;

                        foreach ($fetch_dynamicquizlist as $list){
                        $anstype = $list['answertype']; 
                        $file_type = $list['file_type']; 
                        $upload_image = $list['upload_image']; 
                        $upload_file = $list['upload_file']; 

                        $myString = $list['optionvalues'];
                        $myArray = explode(',', $myString); 

                        $selectans = $list['correctans']; 
                        $corAns = explode(',', $selectans); 

                        // print_r($fetch_dynamicquizlist); die();

                         ?>


                    <div class="form-group col-md-12">
                      <label>Question </label>
                   <input type="text" class="form-control required title-case text" name="question" id="question"  value="<?php  echo $list['question'];  ?>" placeholder="Enter Question" required>
                       
                      </div>
                        <div class="form-group col-md-12">
                     <?php if($anstype=="2"){ ?>
                     <!-- checkbox -->
                       <?php foreach($myArray as $my_Array){ ?>
                       <div class="row ">
                        <?php if($selectans==$i){?>

                         <input style="margin-right: 15px;" type="checkbox"  name="correctans[]" value="<?php echo $i; ?>" <?php if(in_array($i,$corAns)) { echo "checked";} ?> > <?php  }else{ ?><input type="checkbox" style="margin-right: 15px;" name="correctans[]" value="<?php echo $i; ?>" <?php if(in_array($i,$corAns)) { echo "checked";} ?> >
                         <?php } $i++;?>
                          <input type="text" name="addmore[]"  class="form-control col-md-10 mb-2" value="<?php echo $my_Array; ?>" required>

                        </div>   
                  
                     <?php } }elseif($anstype=="1"){?>
                         
                       <!-- radio btn -->
                         <?php foreach($myArray as $my_Array){  ?> 
                      <div class="row pl-4" id="dynamic_radiobtn">
                    
                         <?php if($selectans==$i){?>

                           <input class="form-check-input"  type="radio" name="correctans[]" value="<?php echo $i; ?>"  id="flexRadioDefault1" checked="checked" required><?php  }else{ ?><input class="form-check-input"  type="radio" name="correctans[]" value="<?php echo $i; ?>"  id="flexRadioDefault1" required="">
                         <?php } $i++;?>
              
                        
                           <input type="text" name="addmore[]"  class="form-control col-md-10 mb-2" value="<?php echo $my_Array;?>" required="">
                          <!--  <button type="button" name="remove" id="'+k+'" class="btn btn-danger btn_remove">X</button> -->


                      </div>
                      <?php }?>

                      <!-- <button type="button" name="add" id="add_radiobtn" class="btn btn-sm btn-success">Add More</button> -->

                     <!-- for image edit -->
                       <?php if($file_type==1){ ?>
                          <div class="form-group col-md-6" >
                            <label>Upload Image</label>
                            <input class="form-control" type="file" id="upload_image" name="upload_image" onchange="ValidateSingleInput(this); readURL(this);" accept="image/*"  /> 
                            <p  style="color: blue;" class="ml-2 mt-3 pl-1 border border-dark">Note:Only .jpg, .jpeg, .png Image Files are allowed.</p>

                            <?php if(isset($upload_image)){?>
                          <img id="blah" src="<?php if(isset($upload_image)){ echo base_url();?>assets/images/quizimage_files/<?php echo $upload_image; } ?>" alt="" height="150px" width="200px" />
                          <!--  -->

                           <input type="hidden" name="old_photo" value="<?php if(isset($upload_image)){ echo $upload_image; } ?>"> 

                          <?php }?>

                          </div>
                          <?php } ?>

                          <!-- for video edit -->
                           
                          <?php if($file_type==2){ ?> 
                             <div class="form-group col-md-6" id="u_video">
                            <label>Upload Video</label>

                           <input class="form-control" type="file" id="upload_video" name="upload_file" accept="video/*"  /> 
                           <p  style="color: blue;" class="ml-2 mt-3 pl-1 border border-dark">Note:Only .mp4, .3pg, .mkv, .wmv Video Files are allowed.</p>

                           <video width="320" height="240" controls>
                             <source src="<?php echo base_url(); ?>/assets/images/quizvideo_files/<?php echo $upload_file; ?>" > 
                           </video>

                        </div>



                          <?php } ?>


                    <?php }elseif ($anstype=="5") { ?>
                       <?php foreach($myArray as $my_Array){  ?> 
                      <div class="row pl-4" id="dynamic_radiobtn">
                    
                         <?php if($selectans==$i){?>

                           <input class="form-check-input"  type="radio" name="correctans[]" value="<?php echo $i; ?>"  id="flexRadioDefault1" checked="checked" required><?php  }else{ ?><input class="form-check-input"  type="radio" name="correctans[]" value="<?php echo $i; ?>"  id="flexRadioDefault1" required="">
                         <?php } $i++;?>
              
                        
                           <input type="text" name="addmore[]"  class="form-control col-md-10 mb-2" value="<?php echo $my_Array;?>" required="">
                       </div>

                   <?php } ?>

                     
                  <?php }else{ ?>

                     <?php foreach($myArray as $my_Array){  ?> 
                      <div class="row pl-4" id="dynamic_radiobtn">
                           <input type="hidden" name="addmore[]"  class="form-control col-md-10 mb-2" value="<?php echo $my_Array;?>" >
                      </div>
                    <?php } ?> 

                      

                  <?php } } ?>
                    
                     <!--   <table class="table table-bordered text-center" >
                       
                  

                    < ?php  if($list['answertype']=="2"){  // print_r( $list); die();

                               
                    // $AnsT = $list['answertype'];
                    // $queNo = $list['dynamiccompetitionid'];

                   // print_r($list); die();

                    ?> 
                    < !--
                     <input type="hidden" name="queNo" value="<?php echo $queNo; ?>"> - - >
                        < !-- checkbox - ->

                           <tr >  
                            <td id="dynamic_checkbox" class="p-0"> <div class="form-check mb-2 mt-2">

                            <input class="form-check-input" type="checkbox" name="correctans[]" value="1" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                                    <input type="text"  placeholder="Enter field name"  name="addmore[]" class="form-control " required="" />
                                  </label>
                                </div>
                               </td>  
                              <td><button type="button" name="add" id="add_checkbox" class="btn btn-success">Add More</button></td>  
                          </tr> 
                        < ?php }elseif ($list['answertype']=="3"){ ?>
                       < !-- <input type="hidden" name="queNo" value="<?php echo $queNo; ?>"> - ->
                          < !-- textbox - ->
                          <tr >  
                              <td id="dynamic_textbox" class=""><input type="text" class="form-control mb-2 "  id="exampleFormControlTextbox1" name="addmore[]" placeholder="Enter Text Field" required="" ></td>  
                              <td><button type="button" name="add" id="add_textbox" class="btn btn-success">Add More</button></td>  
                          </tr>  
                           < ?php }elseif ($list['answertype']=="4"){ ?>
                        < !-- <input type="hidden" name="queNo" value="<?php echo $queNo; ?>"> - - >
                       < !-- textarea - ->
                          <tr>  
                              <td id="dynamic_textarea"><textarea type="text" class="form-control mb-2"  id="exampleFormControlTextarea1" name="addmore[]" placeholder="Enter Text" required="" ></textarea></td>  
                              <td><button type="button" name="add" id="add_textarea" class="btn btn-success">Add More</button></td>  
                          </tr> 
                            < ?php }elseif ($list['answertype']=="5"){ ?>
                              < !-- <input type="hidden" name="queNo" value="<?php echo $queNo; ?>"> - ->
                           < !-- dropdown - ->
                          <tr >  
                              <td id="dynamic_dropdown" class="p-0">  <div class="form-check mb-2 mt-2" >
                                  <input class="form-check-input" type="radio" name="correctans[]" value="1"  id="flexRadioDefault1">
                                  <label class="form-check-label" for="flexRadioDefault1">
                                    <input type="text"  placeholder="Enter Option"  name="addmore[]" class="form-control " required="" />
                                  </label>
                                </div>  
                              <td><button type="button" name="add" id="add_dropdown" class="btn btn-success">Add More</button></td>  
                          </tr>
                             < ?php }else{  ?>
                                 
                      < !-- <input type="hidden" name="queNo" value="<?php echo $queNo; ?>"> - ->
                            < !-- Radio button - ->
                       <tr >  
                              <td id="dynamic_radiobtn" class="p-0"> <div class="form-check mb-2 mt-2" >
                                  <input class="form-check-input" type="radio" name="correctans[]" value="1" id="flexRadioDefault1">
                                  <label class="form-check-label" for="flexRadioDefault1">
                                    <input type="text"  placeholder="Enter field name"  name="addmore[]" class="form-control " required="" />
                                  </label>
                                </div>
                               </td>  
                              <td><button type="button" name="add" id="add_radiobtn" class="btn btn-success">Add More</button></td>  
                          </tr>  -->


                <!--    < ?php }  ?> -->
                      <!-- </table>   -->
                       
                  </div>
             
                   <!--  <div id="build-wrap" name="text">

                    </div> -->
       
                </div>                           
                <!-- /.card-body -->
               <div class="card-footer">
                  <?php if(isset($update)){ ?>
                    <button id="btn_update" type="submit" class="btn btn-primary">Update </button>
                  <?php } else{ ?>
                    <button id="btn_save" type="submit" class="btn btn-success px-4">Add</button>
                  <?php } ?>
                   <a href="<?php echo base_url(); ?>User/quizcompetition_list/<?php echo $compid; ?>" onclick="this.form.reset();" class="btn btn-default ml-4">Cancel</a>
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
  <br>
 
<script type="text/javascript">
  var _validFileExtensions = [".jpg", ".jpeg", ".png"];    
function ValidateSingleInput(oInput) {
    if (oInput.type == "file") {
        var sFileName = oInput.value;
         if (sFileName.length > 0) {
            var blnValid = false;
            for (var j = 0; j < _validFileExtensions.length; j++) {
                var sCurExtension = _validFileExtensions[j];
                if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                    blnValid = true;
                    break;
                }
            }
             
            if (!blnValid) {
                alert("File is invalid, allowed extensions are: " + _validFileExtensions.join(", "));
                oInput.value = "";
                return false;
            }
        }
    }
    return true;
}
</script>
<script type="text/javascript">
document.getElementById("upload_video")
.onchange = function(event) {
  let file = event.target.files[0];
  let blobURL = URL.createObjectURL(file);
  document.querySelector("video").src = blobURL;
}
</script>

 <script>
   
   $('.pis').bind("click" , function () {
          $('#upload_image').click();
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
<!-- <script src="<?php echo base_url(); ?>assets/dist/js/form-builder.min.js"></script> -->
<!-- <script src="<?php echo base_url(); ?>assets/dist/js/form-render.min.js"></script> -->
<!-- <script>
jQuery($ => {
  const fbTemplate = document.getElementById('build-wrap');
  $(fbTemplate).formBuilder();
});
</script>
 -->
<!--  <script type="text/javascript">
    $(document).ready(function(){      
      var k=1; 
      var j=1; 


      $('#add_textarea').click(function(){  
           k++; 
 
         
            $('#dynamic_textarea').append('<tr id="row'+k+'" class="dynamic-added "><td  class="dynamic-added w-100"><textarea type="text" class="form-control" class="form-control name_list"  id="exampleFormControlTextarea1" name="addmore[]" placeholder="Enter Description" required="" ></textarea></td><td><button type="button" name="remove" id="'+k+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });

      $('#add_textbox').click(function(){  
           k++;  
          
         
            $('#dynamic_textbox').append('<tr id="row'+k+'" class="dynamic-added "><td  class="dynamic-added w-100"><input type="text" class="form-control "  id="exampleFormControlTextbox1"  name="addmore[]" placeholder="Enter Text Field" required="" ></td><td><button type="button" name="remove" id="'+k+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });

       $('#add_dropdown').click(function(){  
           k++; 
           j++; 
         
            $('#dynamic_dropdown').append('<tr id="row'+k+'" class="dynamic-added "><td  class="dynamic-added w-100"><div class="form-check"><input class="form-check-input" type="radio" name="correctans[]" value="'+j+'" id="flexRadioDefault1"><label class="form-check-label" style="margin-left: 4px;" for="flexRadioDefault1"><input type="text" name="addmore[]" placeholder="Enter Option" class="form-control " required="" /></label></div></td><td><button type="button" name="remove" id="'+k+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });

      $('#add_radiobtn').click(function(){  
           k++; 
           j++; 
         
            $('#dynamic_radiobtn').append('<div class="form-check" id="row'+k+'"><input class="form-check-input" type="radio" name="correctans[]" value="'+j+'" id="flexRadioDefault1"><label class="form-check-label" style="margin-left: 4px;" for="flexRadioDefault1"><input type="text" name="addmore[]" placeholder="Enter field name" class="form-control " required="" /></label></div><button type="button" name="remove" id="'+k+'" class="btn btn-danger btn_remove">X</button>');  

      });

      $('#add_checkbox').click(function(){  
           k++; 
           j++; 
         
            $('#dynamic_checkbox').append('<tr id="row'+k+'" class="dynamic-added"><td class="dynamic-added w-100"> <div class="form-check"><input class="form-check-input" type="checkbox"name="correctans[]" value="'+j+'"  id="flexCheckDefault"><label class="form-check-label" style="margin-left: 4px;" for="flexCheckDefault"><input type="text" name="addmore[]" placeholder="Enter field name" class="form-control " required="" /></label></div></td><td><button type="button" name="remove" id="'+k+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });


      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  


    });  
</script>
 -->
</body>
</html>
