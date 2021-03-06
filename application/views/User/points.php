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
            <h1>Points Information</h1>
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
                <h3 class="card-title">Add Points</h3>
                 <div class="card-tools col-md-2 " >
                <a href="<?php echo base_url(); ?>User/points_list" class="btn btn-sm btn-block btn-primary "  >Points List</a>
              </div>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="form_action" name="point_form" role="form" action="" method="post" onsubmit ="return validate()">
                <div class="card-body row">
                  <div class="form-group col-md-6">
                   <label>Competiton Title <span style="color: red;">*</span></label>
                    
                      <?php
                      if(isset($competitionid)){ 

                       ?>

                       <input type="hidden" class="form-control required title-case text" name="competition" id="competition" value="<?php if(isset($competitionid)){ echo $competitionid; } ?>" disabled="">

                       <?php }?>



                      <select name="competitionid" id="competitionid"class="form-control" required="">
                    <option value="">Select Competition</option>

         
                   <?php foreach($competition as $competition)
                    {

                    echo '<option value="'. $competition->competitionid.'" '.$selected.'>'. $competition->title.'</option>';
                                    
                     }
                    ?>  

                     
                  </select>
                  <p class="competval mb-0" id="competval" style="font-size:14px;  color: red;"></p>
                  </div>
                   <div class="form-group col-md-12">
                  <table id="" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th class="wt_50">#</th>
                        <th>Winner Position</th>
                        <th>Points</th>
                        <th>Conversion Points</th>
                       
                       </tr>
                      </thead>
                      <tbody>
                       
                        <tr>
                          <td>1</td>
                          <td><label>1st Winner</label><input type="hidden" name="winnerposition[]" value="1st Winner"></td>
                          
                          <td><input type="number" min="0" step="1" oninput="validity.valid||(value='')" class="form-control required title-case text notext " name="points[]" id="points1st" value="<?php if(isset($points)){ echo $points; } ?>"  pattern="(|-)?[0-9]{0,3}?" placeholder=" Enter Points" required=""></td>

                          <td><input type="number" min="0" step="1" oninput="validity.valid||(value='')" class="form-control required title-case text notext " name="conversionpoints[]" id="conversionpoints1st" value="<?php if(isset($conversionpoints)){ echo $conversionpoints; } ?>"  pattern="(|-)?[0-9]{0,3}?"placeholder=" Enter Conversion Points" required=""></td>
                         </tr>
                         <tr>
                          <td>2</td>
                          <td><label>2nd Winner</label><input type="hidden" name="winnerposition[]" value="2nd Winner"></td>
                          <td><input type="number" min="0" step="1" oninput="validity.valid||(value='')" class="form-control required title-case text notext " name="points[]" id="points2nd" value="<?php if(isset($points)){ echo $points; } ?>" placeholder=" Enter Points" required=""></td>
                          <td><input type="number" min="0" step="1" oninput="validity.valid||(value='')" class="form-control required title-case text notext " name="conversionpoints[]" id="conversionpoints2nd" value="<?php if(isset($conversionpoints)){ echo $conversionpoints; } ?>" placeholder=" Enter Conversion Points" required=""></td>
                         </tr>
                        <tr>
                          <td>3</td>
                           <td><label>3rd Winner</label><input type="hidden" name="winnerposition[]" value="3rd Winner"></td>
                          <td><input type="number" min="0" step="1" oninput="validity.valid||(value='')" class="form-control required title-case text notext " name="points[]" id="points3rd" value="<?php if(isset($points)){ echo $points; } ?>" placeholder=" Enter Points" required=""></td>
                          <td><input type="number" min="0" step="1" oninput="validity.valid||(value='')" class="form-control required title-case text notext " name="conversionpoints[]" id="conversionpoints3rd" value="<?php if(isset($conversionpoints)){ echo $conversionpoints; } ?>" placeholder=" Enter Conversion Points" required=""></td>
                         </tr>
                        <tr>
                          <td>4</td>
                           <td><label>1st Runner Up</label><input type="hidden" name="winnerposition[]" value="1st Runner Up"></td>
                          <td><input type="number" min="0" step="1" oninput="validity.valid||(value='')" class="form-control required title-case text notext " name="points[]" id="points1stR" value="<?php if(isset($points)){ echo $points; } ?>" placeholder=" Enter Points" required=""></td>
                          <td><input type="number" min="0" step="1" oninput="validity.valid||(value='')" class="form-control required title-case text notext " name="conversionpoints[]" id="conversionpoints1stR" value="<?php if(isset($conversionpoints)){ echo $conversionpoints; } ?>" placeholder=" Enter Conversion Points" required=""></td>
                         </tr>
                         <tr>
                          <td>5</td>
                         <td><label>2nd Runner Up</label><input type="hidden" name="winnerposition[]" value="2nd Runner Up"></td>
                          <td><input type="number" min="0" step="1" oninput="validity.valid||(value='')" class="form-control required title-case text notext " name="points[]" id="points2ndR" value="<?php if(isset($points)){ echo $points; } ?>" placeholder=" Enter Points" required=""></td>
                          <td><input type="number" min="0" step="1" oninput="validity.valid||(value='')" class="form-control required title-case text notext " name="conversionpoints[]" id="conversionpoints2ndR" value="<?php if(isset($conversionpoints)){ echo $conversionpoints; } ?>" placeholder=" Enter Conversion Points" required=""></td>
                         </tr>

                      </tbody>
                    </table>
                  </div>
                  
                
                 </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <?php if(isset($update)){ ?>
                    <button id="btn_update" onclick="return checkPrice()" type="submit" class="btn btn-primary">Update </button>
                  <?php } else{ ?>
                    <button id="btn_save" type="submit"  class="btn btn-success px-4">  Add</button>
                    <!-- <div id=log><div> -->
                  <?php } ?>
                  <a href="<?php echo base_url(); ?>User/points_list" onclick="this.form.reset();" class="btn btn-default ml-4">Cancel</a>
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
  <script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>
  <script>
$(document).ready(function(){

 var competition = $('#competition').val();
 $("#competitionid option[value='"+competition+"']").attr("selected","selected");

});
</script>
<script type="text/javascript">
  <?php if($this->session->flashdata('competition_exists_error')){ ?>
    $(document).ready(function(){
      toastr.error('Competition Points Already Exists');
    });
  <?php } ?>
</script>
<script>
   

  $('#competitionid').on('change',function(){
    // alert("hii");

     var comp = $('#competitionid').val();
     // alert(comp);
    
   
      $.ajax({
           url:"<?php echo base_url(); ?>User/checkpoints_competition1",
           method:"POST",
           data:{competitionid:comp},

           success:function(data)
            {   

               // alert(data);
               // console.log(data);
                 if(data != "true"){

                   // $('.competval').hide();

                 $('.competval').html("Competition Points Already Exists.");
                 $('.competval').show().delay(2000).fadeOut();
                 $('#competitionid').val('');

                 }
                //  else{
                // // alert(data);
                //  $('.competval').html(data);
                //  $('#competitionid').val('');
                // }               
           }
         });
       // e.preventdefault();
  });

</script>
<script type="text/javascript">
 
  function validate(){
     var max = parseInt(document.getElementById('points1st').value);
     var min = parseInt(document.getElementById('conversionpoints1st').value);
     if(min > max){
         alert('Points should be greater than conversion points for 1st winner.');
          return false;
         $("#points1st").focus();
     }else{
      return validate1()
     }
}


</script>
<script type="text/javascript">
  function validate1(){
     var max = parseInt(document.getElementById('points2nd').value);
     var min = parseInt(document.getElementById('conversionpoints2nd').value);
     if(min > max){
         alert('Points should be greater than conversion points for 2nd winner');
        
          return false;
     }else{
      return validate2()
     }
         // $("#points2nd").focus();


}

</script>
<script type="text/javascript">
  function validate2(){
     var max = parseInt(document.getElementById('points3rd').value);
     var min = parseInt(document.getElementById('conversionpoints3rd').value);
     if(min > max){
         alert('Points should be greater than conversion points for 3rd winner');
        
          return false;
     }else{
      return validate3()
     }
}

</script>
<script type="text/javascript">
  function validate3(){
     var max = parseInt(document.getElementById('points1stR').value);
     var min = parseInt(document.getElementById('conversionpoints1stR').value);
     if(min > max){
         alert('Points should be greater than conversion points for 1st runner up winner');
        
          return false;
     }
     else{
      return validate4()
     }
}

</script>
<script type="text/javascript">
  function validate4(){
     var max = parseInt(document.getElementById('points2ndR').value);
     var min = parseInt(document.getElementById('conversionpoints2ndR').value);
     if(min > max){
         alert('Points should be greater than conversion points for 2nd runner up winner');
        
          return false;
     } 
}

</script>
<!-- <script type="text/javascript">
  $.validator.addMethod('le', function(value, element, param) {
      return this.optional(element) || value <= $(param).val();
}, 'Invalid value');
$.validator.addMethod('ge', function(value, element, param) {
      return this.optional(element) || value >= $(param).val();
}, 'Invalid value');

$('point_form').validate({rules: {
            conversionpoints: {le: '#points1st'},
            points: {ge: '#conversionpoints1st'},
          
      },
      messages: {
            conversionpoints: {le: 'Must be less than or equal to field 2'},
            points: {ge: 'Must be greater than or equal to field 1'},
            
      }
});
</script> -->
<script type="text/javascript">
   function validateForm() {
 var x = $('#points').val();
 var y = $('#conversionpoints').val();
 
 // alert(x);
 // alert(y);
 
    if (x < y) {
        alert("Please enter conversion points which should be less than points.");
        return false;
    }
}
</script>
 
</body>
</html>
