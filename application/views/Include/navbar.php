<!-- < ?php
  $out_user_id = $this->session->userdata('out_user_id');
  $out_company_id = $this->session->userdata('out_company_id');
  $out_roll_id = $this->session->userdata('out_roll_id');
  $company_info = $this->User_Model->get_info_arr_fields('company_name','company_id', $out_company_id, 'company');
  $user_info = $this->User_Model->get_info_arr_fields('user_name','user_id', $out_user_id, 'user');
?> -->


<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
    </li>
  </ul>
  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url(); ?>User/logout">
        <i class="fas fa-sign-out-alt"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
        <i class="fas fa-th-large"></i>
      </a>
    </li>
  </ul>
</nav>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="" alt="" class="brand-image img-circle elevation-3"
         style="opacity: .8"><!-- < ?php echo base_url();?>assets/dist/img/AdminLTELogo.png -->
    <span class="brand-text font-weight-light"></span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
      </div>
      <div class="info">
        <a href="#" class="d-block"></a>
      </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="<?php echo base_url(); ?>User/dashboard" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
         <li class="nav-item has-treeview">
          <a href="<?php echo base_url(); ?>User/banner_list" class="nav-link head">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Banner
              <!-- <i class="right fas fa-angle-left"></i> -->
            </p>
          </a>
        </li>
         <li class="nav-item has-treeview">
           
           <a href="#" class="nav-link head">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
            Competition Info
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
             <li class="nav-item">
           <!--    < ?php $page = 'competitiontype'; ?>< ?php if($page == 'competitiontype'){echo 'active'; } ?> -->
              <a href="<?php echo base_url(); ?>User/competitiontype_list" class="nav-link">
               <!--  <i class="far fa-circle nav-icon"></i> -->
       <i class="mdi mdi-credit-card-plus" nav-icon></i>
                <p>Competition Type</p>
              </a>
            </li> 
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/class_list" class="nav-link">
                <!-- <i class="far fa-circle nav-icon"></i> -->
        <i class="mdi mdi-credit-card-plus" nav-icon></i>
                <p>Class Group</p>
              </a>
            </li>
             <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/competition_list" class="nav-link">
                <!-- <i class="far fa-circle nav-icon"></i> -->
        <i class="mdi mdi-credit-card-plus" nav-icon></i>
                <p>Competition</p>
              </a>
            </li>
           </ul>  
        </li>
         <li class="nav-item has-treeview">
          <a href="<?php echo base_url(); ?>User/dynamiccompetition" class="nav-link head">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
            Dynamic Quiz
            <!--   <i class="right fas fa-angle-left"></i> -->
            </p>
          </a>
         </li>
          <li class="nav-item has-treeview">
          <a href="<?php echo base_url(); ?>User/user_list" class="nav-link head">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              User
             <!--  <i class="right fas fa-angle-left"></i> -->
            </p>
          </a>
        </li>
          <li class="nav-item has-treeview">
          <a href="<?php echo base_url(); ?>User/assign_competition_list" class="nav-link head">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
             Assign Competition
            <!--   <i class="right fas fa-angle-left"></i> -->
            </p>
          </a>
        </li>
          <li class="nav-item has-treeview">
          <a href="<?php echo base_url(); ?>User/quiz_user_list" class="nav-link head">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
             Check Quiz and Files
            <!--   <i class="right fas fa-angle-left"></i> -->
            </p>
          </a>
        </li>
         <li class="nav-item has-treeview">
          <a href="#" class="nav-link head">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
            Winner Info
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
             <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/points_list" class="nav-link">
               <!--  <i class="far fa-circle nav-icon"></i> -->
       <i class="mdi mdi-credit-card-plus" nav-icon></i>
                <p>Point</p>
              </a>
            </li> 
             <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/assign_winner_list" class="nav-link">
             <!--    <i class="far fa-circle nav-icon"></i> -->
     <i class="mdi mdi-credit-card-plus" nav-icon></i>
                <p> Assign Winner</p>
              </a>
            </li> 
         </ul>
        </li>
        
      </nav>
    <!-- /.sidebar-menu -->
    </div>
  <!-- /.sidebar -->
  </aside>
