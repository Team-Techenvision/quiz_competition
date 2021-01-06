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
            <h2>Quiz Answer</h2>
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
                <h4 class="card-title">Add Quiz Answer</h4>
              </div> 
              <!-- /.card-header -->
              <!-- form start -->
              <form id="form_action" role="form" action="" method="post">
                <div class="card-body">
                      <div class="row">
      	                  <!-- text area -->


                  <?php $i = 0;
                  foreach ($quizquestion as $list) {
                    $i++; 
                      // print_r($list);

                    
                      $b = explode(",", $list->answertype);
                       foreach ($b as $value) {
                         # code...
                       // print_r($value); 
                       // echo "<br>";
                    
                       if($value=="btn_txta" ){

                    ?> 
                    <!-- <input type="text" name="q_id" value="
                      < ?php echo $list->q_id; ?>"> -->


                 <table class="table table-bordered text-center" id="dynamic_textarea">  
                    <tr>  
                        <td><textarea type="text" class="form-control" class="form-control name_list" id="exampleFormControlTextarea1" name="addmore[][textareaans]" placeholder="Enter Description" required="" ></textarea></td>  
                        <td><button type="button" name="add" id="add_textarea" class="btn btn-success">Add More</button></td>  
                    </tr>  
                </table> 
             <?php }elseif($value=="btn_rb"){?>
                 <!-- radio button --> 
                 <table class="table table-bordered text-center" id="dynamic_radiobtn">  
                    <tr>  
                        <td> <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                              <input type="text"  placeholder="Enter feild name"  name="addmore[][radiobuttonans]" class="form-control " required="" />
                            </label>
                          </div>
                         </td>  
                        <td><button type="button" name="add" id="add_radiobtn" class="btn btn-success">Add More</button></td>  
                    </tr>  
                </table> 
              <?php }else{?>
                <!-- check box --> 
                 <table class="table table-bordered text-center" id="dynamic_checkbox">  
                    <tr>  
                        <td> <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                              <input type="text"  placeholder="Enter feild name"  name="addmore[][checkboxans]" class="form-control " required="" />
                            </label>
                          </div>
                         </td>  
                        <td><button type="button" name="add" id="add_checkbox" class="btn btn-success">Add More</button></td>  
                    </tr>  
                </table> 
                <?php }  

                       }
                     }  ?>
                      </div>
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
<script type="text/javascript">
    $(document).ready(function(){      
      var i=1;  


      $('#add_textarea').click(function(){  
           i++;  
         
            $('#dynamic_textarea').append('<tr id="row'+i+'" class="dynamic-added"><td><textarea type="text" class="form-control" class="form-control name_list" id="exampleFormControlTextarea1" name="addmore[][textareaans]" placeholder="Enter Description" required="" ></textarea></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });

      $('#add_radiobtn').click(function(){  
           i++;  
         
            $('#dynamic_radiobtn').append('<tr id="row'+i+'" class="dynamic-added"><td> <div class="form-check"><input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"><label class="form-check-label" style="margin-left: 4px;" for="flexRadioDefault1"><input type="text" name="addmore[][radiobuttonans]" placeholder="Enter feild name" class="form-control " required="" /></label></div></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });

      $('#add_checkbox').click(function(){  
           i++;  
         
            $('#dynamic_checkbox').append('<tr id="row'+i+'" class="dynamic-added"><td> <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><label class="form-check-label" style="margin-left: 4px;" for="flexCheckDefault"><input type="text" name="addmore[][checkboxans]" placeholder="Enter feild name" class="form-control " required="" /></label></div></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });


      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  


    });  
</script>

</body>
</html>
