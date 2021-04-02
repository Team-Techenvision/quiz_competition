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
            <h1>Assign Competition Information</h1>
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
                <h3 class="card-title">Add Assign Competition</h3>
                  <div class="card-tools col-md-3 " >
                <a href="<?php echo base_url(); ?>User/assign_competition_list" class="btn btn-sm btn-block btn-primary">Competitor List</a>
              </div>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
                <div class="card-body row">
                     <form id="form_action" role="form" action="<?php echo base_url(); ?>User/assigncompetition_list" method="post" > <div class="row" >          
                     <div class="form-group col-md-6">

                     <label>Competition Title <span style="color: red;">*</span></label>  
                      <?php
                      if(isset($competitionid)){?>

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
                  </div>
                  <div class="form-group col-md-4">
                    <label>Pincode <span style="color: red;">*</span></label>
                    <?php if(empty($pincodeid)){ $pincodeid="";} ?>
                      <input type="text"  min="0" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" class="form-control required title-case text " name="pincode" id="pincode" minlength="6" maxlength="6" value="<?php  echo $pincodeid;  ?>" placeholder="Enter Pincode" required>


                    <!--   <select name="pincode" id="pincode"class="form-control">
                    <option value="">Select Pincode</option>
         
                     <?php foreach($pincode as $pincode)
                     {
                          echo '<option value="'. $pincode->pincodeid.'" '.$selected.'>'. $pincode->pincode.'</option>';

                               
                      }
                     ?>  

                     
                  </select>  -->
                  </div>
                  
                   <div class="form-group col-md-2">
                   <button id="btn_search" type="search" style="margin-top: 32px;" class="btn btn-primary">Search </button>
                 </div>

               </div>
                  </form>
                  <!-- table fetch Participant name -->

                    
                 
                      <!-- <form id="form_action" role="form" action="" method="post" > -->
                         <?php
                    if(isset($assigncompetition_list)){
                    
                      ?> 

                     
                  <div class="form-group col-12">
                     <input type="hidden" class="form-control required title-case text" name="competition" id="competition" value="<?php echo $competitionid ?>" >

                     <input type="hidden" class="form-control required title-case text" name="pin" id="pin" value="<?php echo $pincodeid ?>" >

            

                 <table id="dataTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th class="wt_50">Sr No.</th>
                  <th>User Id</th>
                  <th>User Name</th>
                  <th class="wt_50">Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php $i = 0;
                  foreach ($assigncompetition_list as $list) {
                    $i++; ?>
                  <tr>
                    <td><?php echo $i; ?></td> 
                    <td><?php echo $list->user_id ?></td> 
                    <td><?php echo $list->user_name ?></td>
                   
                    <td><div class="form-group col-md-12">
                     <?php 
                         $data['assigncomp'] = $this->User_Model->fetch_assigncompetition($list->user_id,$competitionid);
                        // print_r($data['assigncomp']);
                         if(!$data['assigncomp']){ ?>
                             <button class="btn btn-primary btnadd" name="user_id1" id="btnAddCompetitor <?php echo $list->user_id ?>" value="<?php echo $list->user_id ?>" >Add Competitor</button>
                        <?php }

                      ?>
                       <!-- <button class="btn btn-primary btnadd" name="user_id1" id="btnAddCompetitor < ?php echo $list->user_id ?>" value="< ?php echo $list->user_id ?>" >Add Competitor</button> -->
                     

                        </div>
                     </td>


                 
                  </tr>
                   <?php } ?>

                </tbody>
              </table> 
                  
                <!-- Modal -->

                       <div class="modal fade" id="addcompetitionmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Add Competitor</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                              
                                 <div class="card-body row">
                                
                                     <div class="form-group col-md-6">
                                      <label>Competition Title</label>
                                        <input type="text" class="form-control required title-case text" name="comp" id="comp" value="<?php  echo $list->title;  ?>" >
                                     </div>
                                 
                                     <div class="form-group col-md-6">
                                      <label>Pincode</label>
                                       <input type="text" class="form-control required title-case text" name="pincode1" id="pincode1" value="<?php if(isset($pincodeid)){ echo $pincodeid; } ?>" >
                                     </div>
                                  </div>
                                  <!-- <div id="customers-list"></div> -->
                                  <!-- <div id="compitiorlist"></div> -->
                                  <!-- <form action="< ?php echo base_url(); ?>User/add_assigncompetition"> -->
                                         
                                     <table id="compitiorlist" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                          <th class="wt_50">Sr No.</th>
                                          <th>User Name</th>
                                          <th class="wt_50">Action</th>
                                        </tr>
                                        </thead>

                        
                                        <tbody class="comp" id="competitor">
                                         
                                          
                                        </tbody>
                                      
                                      </table>  
                                          <!-- </form> -->
                                                        
                               
                              </div>
                          <!--  <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              
                              </div> -->
                            </div>
                          </div>
                        </div>
                 </div>
  
                    <?php } ?> 
                  <!-- </form> -->
            
               


                

                </div>
                <!-- /.card-body -->
               <!--  <div class="card-footer">
                  <?php if(isset($update)){ ?>
                    <button id="btn_update" type="submit" class="btn btn-primary">Update </button>
                  <?php } else{ ?>
                    <button id="btn_save" type="submit" class="btn btn-success px-4">Add</button>
                  <?php } ?>
                  <a href="" class="btn btn-default ml-4">Cancel</a>
                </div> -->
             
              <div class="form-group col-md-2">
                 <a href="<?php echo base_url(); ?>User/assign_competition_list" onclick="this.form.reset();" class="btn btn-default ml-4">Cancel</a>
               </div>
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
<script type="text/javascript">
   <?php if($this->session->flashdata('save_success')){ ?>
    $(document).ready(function(){
      toastr.success('Record Saved successfully');
    });
  <?php } ?>
</script>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> -->
    
<script type="text/javascript">

// function dosomething(val){
//   console.log(val);
// }

$(document).ready(function(){

   var competition = $('#competition').val();
 $("#competitionid option[value='"+competition+"']").attr("selected","selected");

   $('#dataTable').DataTable();

  $('.btnadd').click(function(){
    // alert('hii'); 
    
    var competition=$('#competition').val();
    var pincodeid=$('#pin').val();
    var user_id=$(this).val();

    // alert(competition);
    // alert(pincodeid); 
    // alert(user_id);
    $.post('<?php echo base_url(); ?>User/addassigncompetition_list_test',
      {user:user_id,comp_id:competition},
      // {user:user_id},

      function(data,status){

      // alert(data);
      // console.log(data);
      $('#competitor').html(data);


    });
    $('#addcompetitionmodel').modal('show');

   
  });


});

 

</script>
<script>
function myFunction(userid1,compid,userid2) {

  // alert("I am an alert box!");
    var userid1= userid1;
    var compid=compid;
    var userid2=userid2;

 $.ajax({
    url:"<?php echo base_url(); ?>User/save_assigncompetition",
    method:"POST",
    data:{u_id1:userid1,c_id:compid,u_id2:userid2},
    success:function(data)
    {
      // alert(data);
      // console.log(data);
     window.location = "<?php echo base_url(); ?>User/add_assigncompetition";

    }
   });

}
</script>


</body>
</html>
