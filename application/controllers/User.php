<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('User_Model');
    // $this->load->model('Transaction_Model');
  }

  public function logout(){
    $this->session->sess_destroy();
    header('location:'.base_url().'User');
  }

/**************************      Login      ********************************/
  public function index(){
    // print_r($_POST);
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');
    if ($this->form_validation->run() == FALSE) {
    	$this->load->view('User/login');
    } else{
      $email = $this->input->post('email');
      $password = $this->input->post('password');

      $login = $this->User_Model->check_login($email, $password);
      // print_r($login);
      if($login == null){
        $this->session->set_flashdata('msg','login_error');
        header('location:'.base_url().'User');
      } else{
        // echo 'null not';
        $this->session->set_userdata('quizweb_user_id', $login[0]['user_id']);
        $this->session->set_userdata('quizweb_company_id', $login[0]['company_id']);
        $this->session->set_userdata('quizweb_roll_id', $login[0]['roll_id']);
        header('location:'.base_url().'User/dashboard');
      }
    }
  }



/**************************      Dashboard      ********************************/
  public function dashboard(){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $data['total_user'] =$this->User_Model->get_count('user_id','','','','','','user');
    $data['total_banner'] =$this->User_Model->get_count('bannerid','','','','','','banner');
    $data['total_competition'] =$this->User_Model->get_count('competitionid','','','','','','competition');
    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('User/dashboard', $data);
    $this->load->view('Include/footer', $data);
  }

/**************************      Company Information      ********************************/

  // Company List...
  public function company_information_list(){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == ''&& $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }

    // $data['company_list'] = $this->User_Model->get_list($quizweb_company_id,'1','ASC','company');
     $data['company_list'] = $this->User_Model->company_list($quizweb_company_id,'company_id','ASC','company');
    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('User/company_information_list', $data);
    $this->load->view('Include/footer', $data);
  }

  // Edit Company...
  public function edit_company($company_id){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == ''&& $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('company_name', 'company_name', 'trim|required');
    $this->form_validation->set_rules('company_address', 'company_address', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $up_data=$_POST;

      $up_data = array(
        'company_name' => $this->input->post('company_name'),
        'company_address' => $this->input->post('company_address'),
        'company_pincode' => $this->input->post('company_pincode'),
        'company_mob1' => $this->input->post('company_mob1'),
        'company_email' => $this->input->post('company_email'),
        'company_logo' => $this->input->post('company_logo'),
        
      );
      $this->User_Model->update_info('company_id', $company_id, 'company', $up_data);

      if($_FILES['company_logo']['name']){
              $time = time();
              // $image_name = 'profile_image_'.$time;
              $image_name = 'company_logo_'.$company_id.'_'.$time;

              $config['upload_path'] = 'assets/images/companylogo/';
              $config['allowed_types'] = 'jpg|jpeg|png|gif';
              $config['file_name'] = $image_name;
              $filename = $_FILES['company_logo']['name'];
              $ext = pathinfo($filename, PATHINFO_EXTENSION);
              $this->upload->initialize($config); // if upload library autoloaded


                    // print_r($_POST);
                     

              if ($this->upload->do_upload('company_logo') && $company_id && $image_name && $ext && $filename) {

                   // print_r($insert_id);

                  $image['company_logo'] = $image_name.'.'.$ext;
                  // print_r($profile_image);
                  $this->User_Model->update_info('company_id', $company_id, 'company', $image);
                   // if($_POST['old_profile_image']){ unlink("assets/images/".$_POST['old_profile_image']); }
                  $this->session->set_flashdata('upload_success','File Uploaded Successfully');
       
        } 
        else 
        {
           $error = $this->upload->display_errors();
            $this->session->set_flashdata('upload_error',$error);
        }
     }
      $this->session->set_flashdata('update_success','success');
      header('location:'.base_url().'User/company_information_list');
    }
    $company_info = $this->User_Model->get_info('company_id', $company_id, 'company');
    if($company_info){
      foreach($company_info as $info){
        $data['update'] = 'update';
        $data['company_id'] = $info->company_id;
        $data['company_name'] = $info->company_name;
        $data['company_address'] = $info->company_address;
        $data['company_pincode'] = $info->company_pincode;
        $data['company_mob1'] = $info->company_mob1;
        $data['company_email'] = $info->company_email;
        $data['company_logo'] = $info->company_logo;
        
      }
      $this->load->view('Include/head', $data);
      $this->load->view('Include/navbar', $data);
      $this->load->view('User/company_information', $data);
      $this->load->view('Include/footer', $data);
    }
  }

/**************************************************************************************/
/*******                                Master Forms                          *********/
/**************************************************************************************/


/*******************************    User Information      ****************************/

  // Add New User....
  public function add_user(){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == ''&& $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('user_name', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $save_data = array(
        'company_id' => $quizweb_company_id,
        'user_name' => $this->input->post('user_name'),
        'user_address' => $this->input->post('user_address'),
        'user_mobile' => $this->input->post('user_mobile'),
        'user_city' => $this->input->post('user_city'),
        'user_email' => $this->input->post('user_email'),
        'user_password' => $this->input->post('user_password'),
        'user_addedby' => $quizweb_user_id,
        'is_admin' => 1,
        'roll_id' => 2,
      );
      $this->User_Model->save_data('user', $save_data);
      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'User/user_list');
    }
    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('User/user');
    $this->load->view('Include/footer');
  }

  // User List....
  public function user_list(){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $data['user_list'] = $this->User_Model->user_list($quizweb_company_id);
    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/user_list',$data);
    $this->load->view('Include/footer',$data);
  }

  // Edit User....
  public function edit_user($user_id){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('user_name', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $update_data = array(
        'user_name' => $this->input->post('user_name'),
        'user_address' => $this->input->post('user_address'),
        'user_mobile' => $this->input->post('user_mobile'),
        'user_email' => $this->input->post('user_email'),
        'user_city' => $this->input->post('user_city'),
        'user_password' => $this->input->post('user_password'),
        'user_addedby' => $quizweb_user_id,
      );
      $this->User_Model->update_info('user_id', $user_id, 'user', $update_data);
      $this->session->set_flashdata('update_success','success');
      header('location:'.base_url().'User/user_list');
    }

    $user_info = $this->User_Model->get_info('user_id', $user_id, 'user');
    if($user_info == ''){ header('location:'.base_url().'User/user_list'); }
    foreach($user_info as $info){
      $data['update'] = 'update';
      $data['user_name'] = $info->user_name;
      $data['user_address'] = $info->user_address;
      $data['user_mobile'] = $info->user_mobile;
      $data['user_email'] = $info->user_email;
      $data['user_city'] = $info->user_city;
      $data['user_password'] = $info->user_password;
    }
    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/user',$data);
    $this->load->view('Include/footer',$data);
  }

  // Delete User....
  public function delete_user($user_id){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('user_id', $user_id, 'user');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'User/user_list');
  }

/******************************* Pincode Information ****************************/
 // Add New Pincode info....
  public function add_pincode(){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == ''&& $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('countryid', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $save_data = array(
        // 'company_id' => $quizweb_company_id,
        'countryid' => $this->input->post('countryid'),
        'stateid' => $this->input->post('stateid'),
        'district' => $this->input->post('district'),
        'city' => $this->input->post('city'),
        'pincode' => $this->input->post('pincode'),
        
      );
      $this->User_Model->save_data('pincodemaster', $save_data);
      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'User/pincode_list');
    }
    $data['country1'] = $this->User_Model->fetch_country1();
    $data['state'] = $this->User_Model->fetch_state();

    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/pincode',$data);
    $this->load->view('Include/footer',$data);
  }

  // User List....
  public function pincode_list(){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $data['pincode_list'] = $this->User_Model->pincode_list('pincodeid');
    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/pincode_list',$data);
    $this->load->view('Include/footer',$data);
  }

  // Edit User....
  public function edit_pincode($pincodeid){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('countryid', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $update_data = array(
        'countryid' => $this->input->post('countryid'),
        'stateid' => $this->input->post('stateid'),
        'district' => $this->input->post('district'),
        'city' => $this->input->post('city'),
        'pincode' => $this->input->post('pincode'),
      );
      $this->User_Model->update_info('pincodeid', $pincodeid, 'pincodemaster', $update_data);
      $this->session->set_flashdata('update_success','success');
      header('location:'.base_url().'User/pincode_list');
    }

    $user_info = $this->User_Model->get_info('pincodeid', $pincodeid, 'pincodemaster');
    if($user_info == ''){ header('location:'.base_url().'User/pincode_list'); }
    foreach($user_info as $info){
      $data['update'] = 'update';
      $data['countryid'] = $info->countryid;
      $data['stateid'] = $info->stateid;
      $data['district'] = $info->district;
      $data['city'] = $info->city;
      $data['pincode'] = $info->pincode;
      
    }
    $data['country1'] = $this->User_Model->fetch_country1();
    $data['state'] = $this->User_Model->fetch_state();

    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/pincode',$data);
    $this->load->view('Include/footer',$data);
  }

  // Delete User....
  public function delete_pincode($pincodeid){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('pincodeid', $pincodeid, 'pincodemaster');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'User/pincode_list');
  }

/**************************************************************************************/
/*******                           Manage Forms                               *********/
/**************************************************************************************/

 /**************  Banner Information ************************/

// add Banner

  public function add_banner() {
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
         $this->form_validation->set_rules('title', 'subtitle', 'trim|required');
            if ($this->form_validation->run() != FALSE) {
              $save_data = array(
                // 'unit_id' =>  $this->input->post('unit_id'),
                'title' => $this->input->post('title'),
                'subtitle' => $this->input->post('subtitle'),
                'slider_possition' =>1,
                'created_date' => date('Y-m-d H:i:s'),

              
                // 'user_addedby' => $quizweb_user_id,
              );
              // print_r($save_data);
              $this->User_Model->save_data('banner', $save_data);

              $this->session->set_flashdata('save_success','success');
              header('location:'.base_url().'User/banner_list');
              $lastid = $this->db->insert_id();

              // $lastId = $this->db->insert_id();
              // print_r($lastId);


              if($_FILES['profile_image']['name']){
              $time = time();
              $image_name = 'profile_image_'.$time;

              $config['upload_path'] = 'assets/images/banner/';
              $config['allowed_types'] = 'jpg|jpeg|png|gif';
              $config['file_name'] = $image_name;
              $filename = $_FILES['profile_image']['name'];
              $ext = pathinfo($filename, PATHINFO_EXTENSION);
              $this->upload->initialize($config); // if upload library autoloaded


                    // print_r($_POST);
                     

              if ($this->upload->do_upload('profile_image') && $lastid && $image_name && $ext && $filename) {

                   // print_r($insert_id);

                  $image['profile_image'] = $image_name.'.'.$ext;
                  // print_r($profile_image);
                  $this->User_Model->update_info('bannerid', $lastid, 'banner', $image);
                  $this->session->set_flashdata('upload_success','File Uploaded Successfully');

                     // $error = array('error' => $this->upload->display_errors());

                    // $this->load->view('Admin/banner/banner', $error);
        } 
        else 
        {
           $error = $this->upload->display_errors();
            $this->session->set_flashdata('upload_error',$error);
        }
     }

    }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('User/banner/banner');
    $this->load->view('Include/footer');  
    }
   
    public function banner_list() {
      $quizweb_user_id = $this->session->userdata('quizweb_user_id');
      $quizweb_company_id = $this->session->userdata('quizweb_company_id');
      $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
      if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
      $data['banner_list'] = $this->User_Model->banner_list('bannerid');
      
            $this->load->view('Include/head',$data);
            $this->load->view('Include/navbar',$data);
            $this->load->view('User/banner/banner_list',$data);
            $this->load->view('Include/footer',$data);
    }


    // Edit Banner....
    public function edit_banner($bannerid){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('title', 'name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {

      $update_data = $_POST;
      // unset($update_data['old_profile_image']);

     // $lastid = $this->db->insert_id();


// print_r($update_data);
      $update_data = array(
        'title' => $this->input->post('title'),
        'subtitle' => $this->input->post('subtitle'),
        'profile_image' => $this->input->post('profile_image'),
        'slider_possition' =>1,
       
      );

      $this->User_Model->update_info('bannerid', $bannerid, 'banner', $update_data);

       if($_FILES['profile_image']['name']){
              $time = time();
              // $image_name = 'profile_image_'.$time;
              $image_name = 'profile_image_'.$bannerid.'_'.$time;

              $config['upload_path'] = 'assets/images/banner/';
              $config['allowed_types'] = 'jpg|jpeg|png|gif';
              $config['file_name'] = $image_name;
              $filename = $_FILES['profile_image']['name'];
              $ext = pathinfo($filename, PATHINFO_EXTENSION);
              $this->upload->initialize($config); // if upload library autoloaded


                    // print_r($_POST);
                     

              if ($this->upload->do_upload('profile_image') && $bannerid && $image_name && $ext && $filename) {

                   // print_r($insert_id);

                  $image['profile_image'] = $image_name.'.'.$ext;
                  // print_r($profile_image);
                  $this->User_Model->update_info('bannerid', $bannerid, 'banner', $image);
                   // if($_POST['old_profile_image']){ unlink("assets/images/".$_POST['old_profile_image']); }
                  $this->session->set_flashdata('upload_success','File Uploaded Successfully');
       
        } 
        else 
        {
           $error = $this->upload->display_errors();
            $this->session->set_flashdata('upload_error',$error);
        }
     }
      $this->session->set_flashdata('update_success','success');
      
      header('location:'.base_url().'User/banner_list');
    }

    $banner_info = $this->User_Model->get_info('bannerid', $bannerid, 'banner');
    if($banner_info == ''){ header('location:'.base_url().'User/banner_list'); }
    foreach($banner_info as $info){
      $data['update'] = 'update';
      $data['title'] = $info->title;
      $data['subtitle'] = $info->subtitle;
      $data['profile_image'] = $info->profile_image;
    
    }
    
    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/banner/banner',$data);
    $this->load->view('Include/footer',$data);
  }

  // Delete Banner....
  public function delete_banner($bannerid){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('bannerid', $bannerid, 'banner');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'User/banner_list');
  }



/*******************************  Add competition  ****************************/



 // Add Competition....
  public function add_competition(){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('title', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $save_data = array(
       
        'title' => $this->input->post('title'),
        'subtitle' => $this->input->post('subtitle'),
        'class' => $this->input->post('class'),
        'tabinputtextid' => $this->input->post('tabinputtextid'),
        'termsandconditions' => $this->input->post('termsandconditions'),
        'instruction' => $this->input->post('instruction'),
        'competitiontypeid' => $this->input->post('competitiontypeid'),
        'levelid' => $this->input->post('levelid'),
        'fromage' => $this->input->post('fromage'),
        'toage' => $this->input->post('toage'),
        'enddate' => $this->input->post('enddate'),
        'subjectstextarea' => $this->input->post('subjectstextarea'),
        'created_date' => date('Y-m-d H:i:s'),
        
      );
      // print_r($save_data);
      $this->User_Model->save_data('competition',$save_data);
      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'User/competition_list');

      $lastid = $this->db->insert_id();

              // $lastId = $this->db->insert_id();
              // print_r($lastId);

       if($_FILES['photo']['name']){

              $time = time();
              $image_name = 'photo_'.$time;

              $config['upload_path'] = 'assets/images/competition/';
              $config['allowed_types'] = 'jpg|jpeg|png|gif';
              $config['file_name'] = $image_name;
              $filename = $_FILES['photo']['name'];
              $ext = pathinfo($filename, PATHINFO_EXTENSION);
              $this->upload->initialize($config); // if upload library autoloaded


                    // print_r($_POST);
                     

              if ($this->upload->do_upload('photo') && $lastid && $image_name && $ext && $filename) {

                   // print_r($insert_id);

                  $image['photo'] = $image_name.'.'.$ext;
                  // print_r($photo);
                  $this->User_Model->update_info('competitionid', $lastid, 'competition', $image);
                  $this->session->set_flashdata('upload_success','File Uploaded Successfully');

                     // $error = array('error' => $this->upload->display_errors());

                    // $this->load->view('Admin/banner/banner', $error);
        } 
        else 
        {
           $error = $this->upload->display_errors();
            $this->session->set_flashdata('upload_error',$error);
        }
     }


            
    }
      $data['tabinputtext'] = $this->User_Model->fetch_tabinputtext();
      $data['level'] = $this->User_Model->fetch_level();


    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/competition/competition',$data);
    $this->load->view('Include/footer',$data);
  }

  // Competition List....
  public function competition_list(){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $data['competition_list'] = $this->User_Model->competition_list('competitionid','enddate');

    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/competition/competition_list',$data);
    $this->load->view('Include/footer',$data);
  }

  // Edit Competition....
  public function edit_competition($competitionid){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == ''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('title', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {

      $update_data = $_POST;

      // print_r($update_data);

      $update_data = array(
        'title' => $this->input->post('title'),
        'subtitle' => $this->input->post('subtitle'),
        'class' => $this->input->post('class'),
        'photo' => $this->input->post('photo'),
        'termsandconditions' => $this->input->post('termsandconditions'),
        'instruction' => $this->input->post('instruction'),
        'tabinputtextid' => $this->input->post('tabinputtextid'),
        'competitiontypeid' => $this->input->post('competitiontypeid'),
        'levelid' => $this->input->post('levelid'),
        'fromage' => $this->input->post('fromage'),
        'toage' => $this->input->post('toage'),
        'enddate' => $this->input->post('enddate'),
        'subjectstextarea' => $this->input->post('subjectstextarea'),
        'created_date' => date('Y-m-d H:i:s'),
       


        // 'user_addedby' => $quizweb_user_id,
      );
      // print_r($update_data);

      $this->User_Model->update_info('competitionid', $competitionid, 'competition', $update_data);

      if($_FILES['photo']['name']){
              $time = time();
              // $image_name = 'profile_image_'.$time;
              $image_name = 'photo_'.$competitionid.'_'.$time;

              $config['upload_path'] = 'assets/images/competition/';
              $config['allowed_types'] = 'jpg|jpeg|png|gif';
              $config['file_name'] = $image_name;
              $filename = $_FILES['photo']['name'];
              $ext = pathinfo($filename, PATHINFO_EXTENSION);
              $this->upload->initialize($config); // if upload library autoloaded


                    // print_r($_POST);
                     

              if ($this->upload->do_upload('photo') && $competitionid && $image_name && $ext && $filename) {

                   // print_r($insert_id);

                  $image['photo'] = $image_name.'.'.$ext;
                  // print_r($profile_image);
                  $this->User_Model->update_info('competitionid', $competitionid, 'competition', $image);
                   // if($_POST['old_profile_image']){ unlink("assets/images/".$_POST['old_profile_image']); }
                  $this->session->set_flashdata('upload_success','File Uploaded Successfully');
       
        } 
        else 
        {
           $error = $this->upload->display_errors();
            $this->session->set_flashdata('upload_error',$error);
        }
     }
      $this->session->set_flashdata('update_success','success');
      header('location:'.base_url().'User/competition_list');
    }

    $competition_info = $this->User_Model->get_info('competitionid', $competitionid, 'competition');

    if($competition_info == ''){ header('location:'.base_url().'User/competition_list'); }
    foreach($competition_info as $info){
      $data['update'] = 'update';
      $data['title'] = $info->title;
      $data['subtitle'] = $info->subtitle;
      $data['class'] = $info->class;
      $data['photo'] = $info->photo;
      $data['termsandconditions'] = $info->termsandconditions;
      $data['instruction'] = $info->instruction;
      $data['tabinputtextid'] = $info->tabinputtextid;
      $data['competitiontypeid'] = $info->competitiontypeid;
      $data['levelid'] = $info->levelid;
      $data['fromage'] = $info->fromage;
      $data['toage'] = $info->toage;
      $data['enddate'] = $info->enddate;
      $data['subjectstextarea'] = $info->subjectstextarea;
    }

    $data['tabinputtext'] = $this->User_Model->fetch_tabinputtext();
    $data['level'] = $this->User_Model->fetch_level();


    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/competition/competition',$data);
    $this->load->view('Include/footer',$data);
  }

  // Delete Competition....
  public function delete_competition($competitionid){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('competitionid', $competitionid, 'competition');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'User/competition_list');
  }
/*******************************    Participate Information     **************************/


 // Add New Profile....
  public function add_participate(){

    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'WebsiteController'); }
    $this->form_validation->set_rules('parentname', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $save_data = array(
       
        'parentname' => $this->input->post('parentname'),
        'age' => $this->input->post('age'),
        'emailid' => $this->input->post('emailid'),
        'grade' => $this->input->post('grade'),
        'schoolcollegename' => $this->input->post('schoolcollegename'),
        'address' => $this->input->post('address'),
        'pincode' => $this->input->post('pincode'),
         'competitionid' => $this->input->post('competitionid'),
        'user_id' => $quizweb_user_id,
        'created_date' => date('Y-m-d H:i:s'),
        // 'user_addedby' => $quizweb_user_id,
      );
      // print_r($save_data);
      $this->User_Model->save_data('profile',$save_data);
      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'User/participate_list');
    }

 
    $data['pin'] = $this->User_Model->fetch_pincode();
    $data['competition'] = $this->User_Model->fetch_competition();
     

    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/participate',$data);
    $this->load->view('Include/footer',$data);
  }

   // Profile List....
  public function participate_list(){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $data['participate_list'] = $this->User_Model->participate_list('profileid');


     $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/participate_list',$data);
    $this->load->view('Include/footer',$data);
  }

  // Edit Profile....
  public function edit_participate($profileid){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('parentname', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
    $update_data = array(
        'parentname' => $this->input->post('parentname'),
        'age' => $this->input->post('age'),
        'emailid' => $this->input->post('emailid'),
        'grade' => $this->input->post('grade'),
        'schoolcollegename' => $this->input->post('schoolcollegename'),
        'address' => $this->input->post('address'),
        'pincode' => $this->input->post('pincode'),
         'competitionid' => $this->input->post('competitionid'),
        'user_id' => $quizweb_user_id,
        'created_date' => date('Y-m-d H:i:s'),
        // 'user_addedby' => $quizweb_user_id,
      );
      $this->User_Model->update_info('profileid', $profileid, 'profile', $update_data);
      $this->session->set_flashdata('update_success','success');
      header('location:'.base_url().'User/participate_list');
    }

    $profile_info = $this->User_Model->get_info('profileid', $profileid, 'profile');
    if($profile_info == ''){ header('location:'.base_url().'User/participate_list'); }
    foreach($profile_info as $info){
      $data['update'] = 'update';
      $data['parentname'] = $info->parentname;
      $data['age'] = $info->age;
      $data['emailid'] = $info->emailid;
      $data['grade'] = $info->grade;
      $data['schoolcollegename'] = $info->schoolcollegename;
      $data['address'] = $info->address;
      $data['pincode'] = $info->pincode;
      $data['competitionid'] = $info->competitionid;
    }

     $data['pin'] = $this->User_Model->fetch_pincode();
     $data['competition'] = $this->User_Model->fetch_competition();
     $data['participate_list'] = $this->User_Model->participate_list('profileid');

    
  
    
    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/participate',$data);
    $this->load->view('Include/footer',$data);
  }

  // Delete Profile....
  public function delete_participate($profileid){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('profileid', $profileid, 'profile');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'User/participate_list');
  }

/******************************* Assign Competition Information ****************************/
 public function add_assigncompetition(){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('competitionid', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $save_data = array(
       
        'competitionid' => $this->input->post('competitionid'),
        'pincode' => $this->input->post('pincode'),
        'user_id1' => $this->input->post('user_id1'),
        'user_id2' => $this->input->post('user_id2'),
        'created_date' => date('Y-m-d H:i:s'),
      );
      // print_r($save_data);
      $this->User_Model->save_data('assigncompetition',$save_data);
      $this->session->set_flashdata('save_success','success');
      // header('location:'.base_url().'User/profile_list');
    }

  $data['competition'] = $this->User_Model->fetch_competition();
  $data['pincode'] = $this->User_Model->fetch_pincode();
  // $data['getassigncompetition_list'] = $this->User_Model->get_list2('','','user');
 // $data['user_list'] = $this->User_Model->get_list_by_id('user_id','','','','user');


  // $data['profile'] = $this->User_Model->fetch_profile();
  // $data['city'] = $this->User_Model->fetch_city();

   $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/assigncompetition',$data);
    $this->load->view('Include/footer',$data);
  }
   public function assigncompetition_list(){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }      
          // print_r($_POST);
    $competitionid =$this->input->post('competitionid');
    $pincode = $this->input->post('pincode');
    // $user_id = $this->input->post('user_id');
     
     // print_r($user_id);   
     
    $data['assigncompetition_list'] = $this->User_Model->assigncompetition_list($competitionid,$pincode);

    // print_r($data['assigncompetition_list']);

    $data['competitionid'] =  $competitionid;
    $data['pincodeid'] =  $pincode;
    // $data['user_id'] =  $user_id;

      $this->load->view('Include/head',$data);
      $this->load->view('Include/navbar', $data);
      $this->load->view('User/assigncompetition',$data);
      $this->load->view('Include/footer',$data);
    }
    
   public function addassigncompetition_list(){
    // print_r($_POST);
     $data = $this->User_Model->addassigncompetition_list();
     echo (json_encode($data));

    }


/******************************* Assign Winner Information ****************************/


 public function add_assignwinner(){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('competition', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
  // print_r($_POST);

      $save_data = array(
       
        'competitionid' => $this->input->post('competition'),
        'pincodeid' => $this->input->post('pin'),
        'user_id' => $this->input->post('user_id'),
        // 'pincode' => $this->input->post('pincode'),
        
        
        // 'user_addedby' => $quizweb_user_id,
      );
      // print_r($save_data);
      $this->User_Model->save_data('assignwinner',$save_data);
      $this->session->set_flashdata('save_success','success');
      // header('location:'.base_url().'User/profile_list');
    }

  $data['competition'] = $this->User_Model->fetch_competition();
  $data['pincode'] = $this->User_Model->fetch_pincode();

  // print_r($data['competition']);
  // $data['getassigncompetition_list'] = $this->User_Model->get_list2('','','user');
 // $data['user_list'] = $this->User_Model->get_list_by_id('user_id','','','','user');


  // $data['profile'] = $this->User_Model->fetch_profile();
  // $data['city'] = $this->User_Model->fetch_city();

    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/assignwinner',$data);
    $this->load->view('Include/footer',$data);
  }
   public function assignwinner_list(){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }     
          // print_r($_POST);
    $competitionid =$this->input->post('competitionid');
    $pincode = $this->input->post('pincode');
    // $user_id = $this->input->post('user_id');
     
     // print_r($user_id);   
     
    $data['assignwinner_list'] = $this->User_Model->assignwinner_list($competitionid,$pincode);

    // print_r($data['assignwinner_list']);

    $data['competitionid'] =  $competitionid;
    $data['pincodeid'] =  $pincode;
    // $data['user_id'] =  $user_id;

      $this->load->view('Include/head',$data);
      $this->load->view('Include/navbar', $data);
      $this->load->view('User/assignwinner',$data);
      $this->load->view('Include/footer',$data);
    }
/******************************* Winner Information ****************************/


function fetch_profile()
 {
  if($this->input->post('competitionid'))
  {
   echo $this->User_Model->fetch_profile($this->input->post('competitionid'));
  }
 }
// Add New Profile....
  public function add_Winner(){

    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('competitionid', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $save_data = array(
       
        'competitionid' => $this->input->post('competitionid'),
        'profileid' => $this->input->post('profileid'),
        'cityid' => $this->input->post('cityid'),
        'winnerno' => $this->input->post('winnerno'),
        
        // 'user_addedby' => $quizweb_user_id,
      );
      // print_r($save_data);
      $this->User_Model->save_data('winner',$save_data);
      $this->session->set_flashdata('save_success','success');
      // header('location:'.base_url().'User/profile_list');
    }

  $data['competition'] = $this->User_Model->fetch_competition();
  // $data['profile'] = $this->User_Model->fetch_profile();
  $data['city'] = $this->User_Model->fetch_city();

      $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/winner',$data);
    $this->load->view('Include/footer',$data);
  }

  /*******************************    Level Information      ****************************/

  // Add New Level....
  public function add_level(){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == ''&& $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('levelname', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $save_data = array(
       
        'levelname' => $this->input->post('levelname'),
        'created_date' => date('Y-m-d H:i:s'),
              
      );
      $this->User_Model->save_data('levelmaster', $save_data);
      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'User/level_list');
    }
    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('User/level');
    $this->load->view('Include/footer');
  }

  // User List....
  public function level_list(){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $data['level_list'] = $this->User_Model->level_list('levelid');
    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/level_list',$data);
    $this->load->view('Include/footer',$data);
  }

  // Edit User....
  public function edit_level($levelid){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('levelname', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $update_data = array(
               'levelname' => $this->input->post('levelname'),
               'created_date' => date('Y-m-d H:i:s'),
      );
      $this->User_Model->update_info('levelid', $levelid, 'levelmaster', $update_data);
      $this->session->set_flashdata('update_success','success');
      header('location:'.base_url().'User/level_list');
    }

    $level_info = $this->User_Model->get_info('levelid', $levelid, 'levelmaster');
    if($level_info == ''){ header('location:'.base_url().'User/level_list'); }
    foreach($level_info as $info){
      $data['update'] = 'update';
      $data['levelname'] = $info->levelname;
     
    }
    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/level',$data);
    $this->load->view('Include/footer',$data);
  }

  // Delete User....
  public function delete_level($levelid){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('levelid', $levelid, 'levelmaster');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'User/level_list');
  }

/*******************************    Prizes Information      ****************************/

  // Add New Prizes....
  public function add_prize(){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == ''&& $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('competitionid', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $save_data = array(
       
        'competitionid' => $this->input->post('competitionid'),
        'levelid' => $this->input->post('levelid'),
        'winnerposition' => $this->input->post('winnerposition'),
        'prize' => $this->input->post('prize'),
        'created_date' => date('Y-m-d H:i:s'),
              
      );
      $this->User_Model->save_data('prizemaster', $save_data);
      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'User/prize_list');
    }

    $data['competition'] = $this->User_Model->fetch_competition();
    $data['level'] = $this->User_Model->fetch_level();


    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('User/prize', $data);
    $this->load->view('Include/footer', $data);
  }

  // User List....
  public function prize_list(){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $data['prize_list'] = $this->User_Model->prize_list('prizeid');
    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/prize_list',$data);
    $this->load->view('Include/footer',$data);
  }

  // Edit User....
  public function edit_prize($prizeid){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('competitionid', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $update_data = array(
               
                'competitionid' => $this->input->post('competitionid'),
                'levelid' => $this->input->post('levelid'),
                'winnerposition' => $this->input->post('winnerposition'),
                'prize' => $this->input->post('prize'),
                'created_date' => date('Y-m-d H:i:s'),
      );
      $this->User_Model->update_info('prizeid', $prizeid, 'prizemaster', $update_data);
      $this->session->set_flashdata('update_success','success');
      header('location:'.base_url().'User/prize_list');
    }

    $level_info = $this->User_Model->get_info('prizeid', $prizeid, 'prizemaster');
    if($level_info == ''){ header('location:'.base_url().'User/prize_list'); }
    foreach($level_info as $info){
      $data['update'] = 'update';
      $data['competitionid'] = $info->competitionid;
      $data['levelid'] = $info->levelid;
      $data['winnerposition'] = $info->winnerposition;
      $data['prize'] = $info->prize;
     
    }
    $data['competition'] = $this->User_Model->fetch_competition();
    $data['level'] = $this->User_Model->fetch_level();
    // $data['prizelisteditbyid'] = $this->User_Model->prizelisteditbyid('prizeid');
  
    // print_r($data['prizelisteditbyid']);

    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/prize',$data);
    $this->load->view('Include/footer',$data);
  }

  // Delete User....
  public function delete_prize($prizeid){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('prizeid', $prizeid, 'prizemaster');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'User/prize_list');
  }


/*******************************  Check Duplication  ****************************/
  public function check_duplication(){
    $column_name = $this->input->post('column_name');
    $column_val = $this->input->post('column_val');
    $table_name = $this->input->post('table_name');
    $company_id = '';
    $cnt = $this->User_Model->check_dupli_num($company_id,$column_val,$column_name,$table_name);
    echo $cnt;
  }



 
}
?>
