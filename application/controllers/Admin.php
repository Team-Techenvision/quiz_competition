<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('Admin_Model');
  }

  public function logout(){
    $this->session->sess_destroy();
    header('location:'.base_url().'Admin');
  }

  public function index(){
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');
    if ($this->form_validation->run() == FALSE) {
    	$this->load->view('Admin/login');
    }
    else{
      $email = $this->input->post('email');
      $password = $this->input->post('password');

      $login = $this->Admin_Model->check_login($email, $password);
      
      if($login == null){
        $this->session->set_flashdata('msg','login_error');
        header('location:'.base_url().'Admin');
      }
      else{
        foreach ($login as $login){
          $this->session->set_userdata('out_admin_id', $login['admin_id']);
        }
        header('location:'.base_url().'Admin/dashboard');
      }
    }
  }

  public function dashboard(){
     $quizweb_admin_id = $this->session->userdata('quizweb_admin_id');
   
    if($quizweb_admin_id == '' ){ header('location:'.base_url().'Admin'); }
   
    $this->load->view('Admin/dashboard');
  }

  // public function company_information(){
  //   $out_admin_id = $this->session->userdata('out_admin_id');
  //   if($out_admin_id == ''){ header('location:'.base_url().'Admin'); }
  //   $this->load->view('Admin/company_information');
  // }

  // public function company_information_list(){
  //   $out_admin_id = $this->session->userdata('out_admin_id');
  //   if($out_admin_id == ''){ header('location:'.base_url().'Admin'); }
  //   $data['company_list'] = $this->Admin_Model->company_list();
  //   $this->load->view('Admin/company_information_list',$data);
  // }
  public function company_information_list(){
    $quizweb_admin_id = $this->session->userdata('quizweb_admin_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_admin_id == '' && $quizweb_company_id == ''&& $quizweb_roll_id ==''){ header('location:'.base_url().'Admin'); }

    $data['company_list'] = $this->Admin_Model->company_list($out_company_id,'company_id','ASC','company');
    // $this->load->view('Admin/head', $data);
    // $this->load->view('Admin/navbar', $data);
    $this->load->view('Admin/company_information_list', $data);
    // $this->load->view('Admin/footer', $data);
  }

 public function company_information() {

     $quizweb_admin_id = $this->session->userdata('quizweb_admin_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_admin_id == '' && $quizweb_company_id == ''&& $quizweb_roll_id ==''){ header('location:'.base_url().'Admin'); }

         $this->form_validation->set_rules('company_name', 'name', 'trim|required');
            if ($this->form_validation->run() != FALSE) {

              print_r($_POST);
              $save_data = array(
                'company_name' => $this->input->post('company_name'),
                'company_address' => $this->input->post('company_address'),
                'company_pincode' => $this->input->post('company_pincode'),
                'company_mob1' => $this->input->post('company_mob1'),
                'company_email' => $this->input->post('company_email'),
                // 'company_website' => $this->input->post('company_website'),

              
                // 'user_addedby' => $out_user_id,
              );
              // print_r($save_data);
              $this->Admin_Model->save_data('company', $save_data);
              $this->session->set_flashdata('save_success','success');
              header('location:'.base_url().'Admin/company_information_list');

              $lastid = $this->db->insert_id();

              // $lastId = $this->db->insert_id();
              // print_r($lastId);


              if($_FILES['company_logo']['name']){

              $time = time();
              $image_name = 'company_logo_'.$time;

              $config['upload_path'] = 'assets/images/companylogo/';
              $config['allowed_types'] = 'jpg|jpeg|png|gif';
              $config['file_name'] = $image_name;
              $filename = $_FILES['company_logo']['name'];
              $ext = pathinfo($filename, PATHINFO_EXTENSION);
              $this->upload->initialize($config); // if upload library autoloaded


                    // print_r($_POST);
                     

              if ($this->upload->do_upload('company_logo') && $lastid && $image_name && $ext && $filename) {

                   // print_r($insert_id);

                  $image['company_logo'] = $image_name.'.'.$ext;
                  // print_r($photo);
                  $this->Admin_Model->update_info('company_id', $lastid, 'company', $image);
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

    // $this->load->view('Admin/head');
    // $this->load->view('Admin/navbar');
    $this->load->view('Admin/company_information');
    // $this->load->view('Admin/footer'); 
    }

  
  // Edit Company...
  public function edit_company($company_id){
     $quizweb_admin_id = $this->session->userdata('quizweb_admin_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_admin_id == '' && $quizweb_company_id == ''&& $quizweb_roll_id ==''){ header('location:'.base_url().'Admin'); }

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
      $this->Admin_Model->update_info('company_id', $company_id, 'company', $up_data);

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
                  $this->Admin_Model->update_info('company_id', $company_id, 'company', $image);
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
      header('location:'.base_url().'Admin/company_information_list');
    }
    $company_info = $this->Admin_Model->get_info('company_id', $company_id, 'company');
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
      // $this->load->view('Admin/head', $data);
      // $this->load->view('Admin/navbar', $data);
      $this->load->view('Admin/company_information', $data);
      // $this->load->view('Admin/footer', $data);
    }
  }


  public function delete_company(){
    $out_admin_id = $this->session->userdata('out_admin_id');
    if($out_admin_id == ''){ header('location:'.base_url().'Admin'); }
    // $company_id = $this->input->post('company_id');
    $this->Admin_Model->delete_info('company_id', $company_id, 'law_company');
    header('location:'.base_url().'Admin/company_information_list');
  }

}
?>
