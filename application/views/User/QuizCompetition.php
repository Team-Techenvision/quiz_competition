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
            <h2>Dynamic Competition</h2>
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
                <h4 class="card-title">Add Quiz</h4>
              </div> 
              <!-- /.card-header -->
              <!-- form start -->
              <form id="form_action" role="form" action="" method="post">
                <div class="card-body">
                <div class="row">
                  <?php $i=1;

                        foreach ($fetch_dynamicquizlist as $list){
                        $anstype = $list['answertype']; 

                        $myString = $list['optionvalues'];
                        $myArray = explode(',', $myString); 

                        $selectans = $list['correctans']; 
                        $corAns = explode(',', $selectans); 


                        // print_r($corAns); die();

                         ?>


                    <div class="form-group col-md-12">
                      <label>Question</label>
                   <input type="text" class="form-control required title-case text" name="question" id="question"  value="<?php  echo $list['question'];  ?>" placeholder="Enter Question">
                       
                      </div>
                     <?php if($anstype=="1" ){

                      ?>
                       <div class="form-group col-md-12">
                           <?php   foreach($myArray as $my_Array)
                      { ?>                             
                       
                      <div class="row pl-4">
                    
                         <?php if($selectans==$i){?>

                           <input class="form-check-input "  type="radio" name="correctans[]" value="<?php echo $i; ?>"  id="flexRadioDefault1" checked="checked"><?php  }else{ ?><input class="form-check-input "  type="radio" name="correctans[]" value="<?php echo $i; ?>"  id="flexRadioDefault1">
                         <?php } $i++;?>
              
                      
                           <input type="text" name="optionvalues[]"  class="form-control col-md-10" value="<?php echo $my_Array;?>" >
                         </div>

                        

                          <?php } } ?>

                        

                        

                        <!-- < ?php }elseif($anstype=="2") {?>
                           < !-- checkbox -->
                       <!--  <div class="row pl-4">
                         <input type="checkbox"  name="correctans[]" value="<?php   ?>" < ?php if(in_array("1",$corAns)) { echo "checked";} ?> ><br/> -->
                         <!-- <input type="checkbox"  name="correctans[]" value="<?php   ?>" < ?php if(in_array("2",$corAns)) { echo "checked";} ?> ><br/> -->
                        <!--  <input type="checkbox"  name="correctans[]" value="<?php   ?>" < ?php if(in_array("3",$corAns)) { echo "checked";} ?> ><br/> -->
                         <!-- <input type="checkbox"  name="correctans[]" value="<?php   ?>" < ?php if(in_array("4",$corAns)) { echo "checked";} ?> ><br/>
 --><!-- 
                           <input type="text" name="optionvalues[]"  class="form-control col-md-10" value="<?php ?>" >
                         </div>    -->
                      <!--  < ?php }else{

                       } ?>  -->






                       </div>
                     <?php } ?>

                    
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
                  <a href="<?php echo base_url() ?>User/dashboard" class="btn btn-default ml-4">Cancel</a>
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
<!-- <script src="<?php echo base_url(); ?>assets/dist/js/form-builder.min.js"></script> -->
<!-- <script src="<?php echo base_url(); ?>assets/dist/js/form-render.min.js"></script> -->
<!-- <script>
jQuery($ => {
  const fbTemplate = document.getElementById('build-wrap');
  $(fbTemplate).formBuilder();
});
</script>
 -->
 <!-- <script type="text/javascript">
    $(document).ready(function(){      
      var i=1; 
      var j=1; 


      $('#add_textarea').click(function(){  
           i++; 
 
         
            $('#dynamic_textarea').append('<tr id="row'+i+'" class="dynamic-added "><td  class="dynamic-added w-100"><textarea type="text" class="form-control" class="form-control name_list"  id="exampleFormControlTextarea1" name="addmore[]" placeholder="Enter Description" required="" ></textarea></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });

      $('#add_textbox').click(function(){  
           i++;  
          
         
            $('#dynamic_textbox').append('<tr id="row'+i+'" class="dynamic-added "><td  class="dynamic-added w-100"><input type="text" class="form-control "  id="exampleFormControlTextbox1"  name="addmore[]" placeholder="Enter Text Field" required="" ></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });

       $('#add_dropdown').click(function(){  
           i++; 
           j++; 
         
            $('#dynamic_dropdown').append('<tr id="row'+i+'" class="dynamic-added "><td  class="dynamic-added w-100"><div class="form-check"><input class="form-check-input" type="radio" name="correctans[]" value="'+j+'" id="flexRadioDefault1"><label class="form-check-label" style="margin-left: 4px;" for="flexRadioDefault1"><input type="text" name="addmore[]" placeholder="Enter Option" class="form-control " required="" /></label></div></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });

      $('#add_radiobtn').click(function(){  
           i++; 
           j++; 
         
            $('#dynamic_radiobtn').append('<tr id="row'+i+'" class="dynamic-added"><td class="dynamic-added w-100"> <div class="form-check"><input class="form-check-input" type="radio" name="correctans[]" value="'+j+'" id="flexRadioDefault1"><label class="form-check-label" style="margin-left: 4px;" for="flexRadioDefault1"><input type="text" name="addmore[]" placeholder="Enter field name" class="form-control " required="" /></label></div></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  

      });

      $('#add_checkbox').click(function(){  
           i++; 
           j++; 
         
            $('#dynamic_checkbox').append('<tr id="row'+i+'" class="dynamic-added"><td class="dynamic-added w-100"> <div class="form-check"><input class="form-check-input" type="checkbox"name="correctans[]" value="'+j+'"  id="flexCheckDefault"><label class="form-check-label" style="margin-left: 4px;" for="flexCheckDefault"><input type="text" name="addmore[]" placeholder="Enter field name" class="form-control " required="" /></label></div></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
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
