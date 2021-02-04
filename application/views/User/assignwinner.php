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
            <h1>Assign Winner Information</h1>
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
                <h3 class="card-title">Add Assign Winner</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
                <div class="card-body row">
                     <form id="form_action" role="form" action="assignwinner_list" method="post" > 
                      <div class="row" >          
                     <div class="form-group col-md-6">
                   
                     <label>Competiton Title <span style="color: red;">*</span></label>

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
                   
                    <label>Pincode</label>

                      <select name="pincode" id="pincode"class="form-control" required="">
                    <option value="">Select Pincode</option>
         
                     <?php foreach($pincode as $pincode)
                     {
                          echo '<option value="'. $pincode->pincodeid.'" '.$selected.'>'. $pincode->pincode.'</option>';

                               
                      }
                     ?>  

                     
                  </select>
                  </div>
                  
                   <div class="form-group col-md-2">
                   <button id="btn_search" type="search" style="margin-top: 32px;" class="btn btn-primary">Search </button>
                 </div>
               </div>
                  </form>
                  <!-- table fetch Participant name -->

                               <?php
                               if(isset($assignwinner_list)){?>

                <form id="form_action" role="form" action="<?php echo base_url(); ?>User/add_assignwinner" method="post" >  
                 
                  <div class="form-group col-12">
                     <input type="hidden" class="form-control required title-case text" name="competition" id="competition" value="<?php echo $competitionid ?>" >

                     <input type="hidden" class="form-control required title-case text" name="pin" id="pin" value="<?php echo $pincodeid ?>" >
                   <?php $i = 0;
                  foreach ($assignwinner_list as $list) {
                    $i++; 
                  if($list->competitiontypeid==2){
                    ?>
                    
                     <table id="type2" class="table table-bordered table-striped">
                <thead>
                
                </thead>
                <tbody>
                  
                  <tr>
                   
                    <td>   <div class="form-check-inline">
                        <label class="form-check-label" for="radio1">
                          <input type="radio" class="form-check-input" id="radio1" name="user_id" value="<?php echo $list->user_id1 ?>" checked><?php echo $list->user_name1; ?>
                        </label>
                      </div></td> 
                    <td> <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                          <input type="radio" class="form-check-input" id="radio2" name="user_id" value="<?php echo $list->user_id2 ?>"><?php echo $list->user_name2; ?>
                        </label>
                      </div></td>
                   
                    <td><div class="form-group col-md-12">
                      
                       <button id="btn_save" type="submit" onclick="return confirm('Are you sure want to add winner ');" class="btn btn-primary px-4">Add</button>
                    
                       </div>
                     </td>
                 
                  </tr>
                   

                </tbody>
              </table> 
             <?php }else{?>

                 <table id="type1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th class="wt_50">#</th>
                  <th>User Id</th>
                  <th>User Name</th>
                  <th class="wt_50">Action</th>
                </tr>
                </thead>
                <tbody>
                
                  <tr>
                    <td style="padding-left: 30px;"><input class="form-check-input" type="checkbox" value="<?php echo $list->user_id1 ?>" id="flexCheckDefault" name="user_id"><?php echo $i; ?></td> 
                    <td> <?php echo $list->user_id1 ?></td> 
                    <td><?php echo $list->user_name1 ?></td>
                   
                    <td><div class="form-group col-md-12">
                       <button class="btn btn-primary btnadd" onclick="return confirm('Are you sure want to add winner');" type="submit" >Add</button>
                     <!-- <input type="button" value="<?php echo $list->user_id ?>" id="btnadd"> -->
                      <!--  data-toggle="modal" data-target="#addcompetitionmodel" -->
                       </div>
                     </td>
                 
                  </tr>
                 

                </tbody>
              </table> 
                <?php } }?>
                 </div>
                 

                   </div>
                  
               </form> 
               <?php } ?>  
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  


</body>
</html>
