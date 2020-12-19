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
    
    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('User/dashboard');
    $this->load->view('Include/footer');
  }

/**************************      Company Information      ********************************/

  // Company List...
  public function company_information_list(){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == ''){ header('location:'.base_url().'User'); }

    $data['company_list'] = $this->User_Model->get_list($quizweb_company_id,'1','ASC','company');
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
    if($quizweb_user_id == '' && $quizweb_company_id == ''){ header('location:'.base_url().'User'); }

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
    if($quizweb_user_id == '' && $quizweb_company_id == ''){ header('location:'.base_url().'User'); }
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
    if($quizweb_user_id == '' && $quizweb_company_id == ''){ header('location:'.base_url().'User'); }
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
    if($quizweb_user_id == '' && $quizweb_company_id == ''){ header('location:'.base_url().'User'); }
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
    if($quizweb_user_id == '' && $quizweb_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('user_id', $user_id, 'user');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'User/user_list');
  }



/**************************************************************************************/
/*******                           Manage Forms                               *********/
/**************************************************************************************/

 /**************  Banner Information ************************/

// add Banner

  public function add_banner() {

         $this->form_validation->set_rules('title', 'subtitle', 'trim|required');
            if ($this->form_validation->run() != FALSE) {
              $save_data = array(
                // 'unit_id' =>  $this->input->post('unit_id'),
                'title' => $this->input->post('title'),
                'subtitle' => $this->input->post('subtitle'),
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
         $data['banner_list'] = $this->User_Model->banner_list('bannerid');
      
            $this->load->view('Include/head',$data);
            $this->load->view('Include/navbar',$data);
            $this->load->view('User/banner/banner_list',$data);
            $this->load->view('Include/footer',$data);
    }


    // Edit Banner....
    public function edit_banner($bannerid){
    // $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    // $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    // $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    // if($quizweb_user_id == '' && $quizweb_company_id == ''){ header('location:'.base_url().'User'); }
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
    // $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    // $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    // $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    // if($quizweb_user_id == '' && $quizweb_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('bannerid', $bannerid, 'banner');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'User/banner_list');
  }



/*******************************  Add competition  ****************************/



 // Add Competition....
  public function add_competition(){
    // $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    // if($quizweb_user_id == '' ){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('title', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $save_data = array(
       
        'title' => $this->input->post('title'),
        'subtitle' => $this->input->post('subtitle'),
        'class' => $this->input->post('class'),
        'tabinputtextid' => $this->input->post('tabinputtextid'),
        'termsandconditions' => $this->input->post('termsandconditions'),
        'instruction' => $this->input->post('instruction'),
        'created_date' => date('Y-m-d H:i:s'),
        // 'user_addedby' => $quizweb_user_id,
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


    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/competition/competition',$data);
    $this->load->view('Include/footer',$data);
  }

  // Competition List....
  public function competition_list(){
    // $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    // $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    // $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    // if($quizweb_user_id == '' && $quizweb_company_id == ''){ header('location:'.base_url().'User'); }
    $data['competition_list'] = $this->User_Model->competition_list('competitionid');

    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/competition/competition_list',$data);
    $this->load->view('Include/footer',$data);
  }

  // Edit Competition....
  public function edit_competition($competitionid){
    // $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    // $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    // $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    // if($quizweb_user_id == '' && $quizweb_company_id == ''){ header('location:'.base_url().'User'); }
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
    }

    $data['tabinputtext'] = $this->User_Model->fetch_tabinputtext();

    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/competition/competition',$data);
    $this->load->view('Include/footer',$data);
  }

  // Delete Competition....
  public function delete_competition($competitionid){
    // $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    // $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    // $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    // if($quizweb_user_id == '' && $quizweb_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('competitionid', $competitionid, 'competition');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'User/competition_list');
  }
/*******************************    Participate Information     **************************/

function fetch_state1()
 {
  if($this->input->post('countryid'))
  {
   echo $this->User_Model->fetch_state1($this->input->post('countryid'));
  }
 }

 function fetch_city1()
 {
  if($this->input->post('stateid'))
  {
   echo $this->User_Model->fetch_city1($this->input->post('stateid'));
  }
 }
 function fetch_district1()
 {
  if($this->input->post('cityid'))
  {
   echo $this->User_Model->fetch_district1($this->input->post('cityid'));
  }
 }


 // Add New Profile....
  public function add_participate(){


    // $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    // if($quizweb_user_id == '' ){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('parentname', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $save_data = array(
       
        'parentname' => $this->input->post('parentname'),
        'age' => $this->input->post('age'),
        'emailid' => $this->input->post('emailid'),
        'grade' => $this->input->post('grade'),
        'schoolcollegename' => $this->input->post('schoolcollegename'),
        'countryid' => $this->input->post('countryid'),
        'stateid' => $this->input->post('stateid'),
        'districtid' => $this->input->post('districtid'),
        'cityid' => $this->input->post('cityid'),
        'address' => $this->input->post('address'),
        'pincode' => $this->input->post('pincode'),
        'user_id' => 17,
        // 'user_addedby' => $quizweb_user_id,
      );
      // print_r($save_data);
      $this->User_Model->save_data('profile',$save_data);
      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'User/participate_list');
    }

  $data['country1'] = $this->User_Model->fetch_country1();
  // $data['fetch_state1'] = $this->User_Model->fetch_state1();
  

    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/participate',$data);
    $this->load->view('Include/footer',$data);
  }

   // Profile List....
  public function participate_list(){
    // $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    // $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    // $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    // if($quizweb_user_id == '' && $quizweb_company_id == ''){ header('location:'.base_url().'User'); }
    $data['participate_list'] = $this->User_Model->participate_list('profileid');


     $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/participate_list',$data);
    $this->load->view('Include/footer',$data);
  }

  // Edit Profile....
  public function edit_participate($profileid){
    // $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    // $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    // $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    // if($quizweb_user_id == '' && $quizweb_company_id == ''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('parentname', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $update_data = array(
        'parentname' => $this->input->post('parentname'),
        'age' => $this->input->post('age'),
        'emailid' => $this->input->post('emailid'),
        'grade' => $this->input->post('grade'),
        'schoolcollegename' => $this->input->post('schoolcollegename'),
        'countryid' => $this->input->post('countryid'),
        'stateid' => $this->input->post('stateid'),
        'districtid' => $this->input->post('districtid'),
        'cityid' => $this->input->post('cityid'),
        'address' => $this->input->post('address'),
        'pincode' => $this->input->post('pincode'),
        'user_addedby' => $quizweb_user_id,
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
      $data['countryid'] = $info->countryid;
      $data['stateid'] = $info->stateid;
      $data['districtid'] = $info->districtid;
      $data['cityid'] = $info->cityid;
      $data['address'] = $info->address;
      $data['pincode'] = $info->pincode;
    }

     $data['country1'] = $this->User_Model->fetch_country1();
  
    
    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/participate',$data);
    $this->load->view('Include/footer',$data);
  }

  // Delete Profile....
  public function delete_participate($profileid){
    // $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    // $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    // $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    // if($quizweb_user_id == '' && $quizweb_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('profileid', $profileid, 'profile');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'User/participate_list');
  }

/******************************* Assign Competition Information ****************************/
 public function add_assigncompetition(){


    // $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    // if($quizweb_user_id == '' ){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('competitionid', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $save_data = array(
       
        'competitionid' => $this->input->post('competitionid'),
        'pincode' => $this->input->post('pincode'),
        
        
        // 'user_addedby' => $quizweb_user_id,
      );
      // print_r($save_data);
      $this->User_Model->save_data('assigncompetition',$save_data);
      $this->session->set_flashdata('save_success','success');
      // header('location:'.base_url().'User/profile_list');
    }

  $data['competition'] = $this->User_Model->fetch_competition();
  $data['pincode'] = $this->User_Model->fetch_pincode();
  $data['getassigncompetition_list'] = $this->User_Model->get_list2('','','user');
 // $data['user_list'] = $this->User_Model->get_list_by_id('user_pincode','','','','user');


  // $data['profile'] = $this->User_Model->fetch_profile();
  // $data['city'] = $this->User_Model->fetch_city();

   $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/assigncompetition',$data);
    $this->load->view('Include/footer',$data);
  }
   public function assigncompetition_list(){
          
          // print_r($_POST);
          $competitionid =$this->input->post('competitionid');
          $pincode = $this->input->post('pincode');
        
     
         $data['assigncompetition_list'] = $this->User_Model->assigncompetition_list($competitionid, $pincode);
    
       $this->load->view('Include/head',$data);
      $this->load->view('Include/navbar', $data);
      $this->load->view('User/assigncompetition',$data);
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


    // $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    // if($quizweb_user_id == '' ){ header('location:'.base_url().'User'); }
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
