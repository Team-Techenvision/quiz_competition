<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{

public function edit_company($company_id){
$smm_user_id = $this->session->userdata('smm_user_id');
$smm_company_id = $this->session->userdata('smm_company_id');
$smm_role_id = $this->session->userdata('smm_role_id');

if($smm_user_id == '' && $smm_company_id == ''){ header('location:'.base_url().'User'); }
$this->form_validation->set_rules('company_name', 'company_name', 'trim|required');
$this->form_validation->set_rules('company_address', 'company_address', 'trim|required');

if ($this->form_validation->run() != FALSE) {
$up_data = $_POST;

unset($up_data['old_company_logo']);
unset($up_data['old_company_fevicon']);

$this->Master_Model->update_info('company_id', $company_id, 'company', $up_data);

if($_FILES['company_logo']['name']){
$time = time();
$image_name = 'company_logo_'.$company_id.'_'.$time;
$config['upload_path'] = 'assets/images/master/';
$config['allowed_types'] = 'jpg|jpeg|png|gif';
$config['file_name'] = $image_name;
$filename = $_FILES['company_logo']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

$this->upload->initialize($config); // if upload library autoloaded

if ($this->upload->do_upload('company_logo') && $company_id && $image_name && $ext && $filename)

{

$company_logo_up['company_logo'] = $image_name.'.'.$ext;
$this->Master_Model->update_info('company_id', $company_id, 'company', $company_logo_up);
if($_POST['old_company_logo']){ unlink("assets/images/master/".$_POST['old_company_logo']); }
$this->session->set_flashdata('upload_success','File Uploaded Successfully');
}
else{
$error = $this->upload->display_errors();
$this->session->set_flashdata('upload_error',$error);
}
}


if($_FILES['company_fevicon']['name']){
$time = time();
$image_name = 'company_fevicon_'.$company_id.'_'.$time;
$config['upload_path'] = 'assets/images/master/';
$config['allowed_types'] = 'jpg|jpeg|png|gif';
$config['file_name'] = $image_name;
$filename = $_FILES['company_fevicon']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
$this->upload->initialize($config); 




dhananjay
(12:31:03 PM) // Edit Company...
  public function edit_company($company_id){
    $smm_user_id = $this->session->userdata('smm_user_id');
    $smm_company_id = $this->session->userdata('smm_company_id');
    $smm_role_id = $this->session->userdata('smm_role_id');
    if($smm_user_id == '' && $smm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('company_name', 'company_name', 'trim|required');
    $this->form_validation->set_rules('company_address', 'company_address', 'trim|required');

    if ($this->form_validation->run() != FALSE) {
      $up_data = $_POST;
      unset($up_data['old_company_logo']);
      unset($up_data['old_company_fevicon']);
      $this->Master_Model->update_info('company_id', $company_id, 'company', $up_data);

      if($_FILES['company_logo']['name']){
        $time = time();
        $image_name = 'company_logo_'.$company_id.'_'.$time;
        $config['upload_path'] = 'assets/images/master/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = $image_name;
        $filename = $_FILES['company_logo']['name'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $this->upload->initialize($config); // if upload library autoloaded

        if ($this->upload->do_upload('company_logo') && $company_id && $image_name && $ext && $filename){
        	
          $company_logo_up['company_logo'] =  $image_name.'.'.$ext;
          $this->Master_Model->update_info('company_id', $company_id, 'company', $company_logo_up);
          if($_POST['old_company_logo']){ unlink("assets/images/master/".$_POST['old_company_logo']); }
          $this->session->set_flashdata('upload_success','File Uploaded Successfully');
        }
        else{
          $error = $this->upload->display_errors();
          $this->session->set_flashdata('upload_error',$error);
        }
      }

      if($_FILES['company_fevicon']['name']){
        $time = time();
        $image_name = 'company_fevicon_'.$company_id.'_'.$time;
        $config['upload_path'] = 'assets/images/master/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = $image_name;
        $filename = $_FILES['company_fevicon']['name'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $this->upload->initialize($config); // if upload library autoloaded
        if ($this->upload->do_upload('company_fevicon') && $company_id && $image_name && $ext && $filename){
          $company_fevicon_up['company_fevicon'] =  $image_name.'.'.$ext;
          $this->Master_Model->update_info('company_id', $company_id, 'company', $company_fevicon_up);
          if($_POST['old_company_fevicon']){ unlink("assets/images/master/".$_POST['old_company_fevicon']); }
          $this->session->set_flashdata('upload_success','File Uploaded Successfully');
        }
        else{
          $error = $this->upload->display_errors();
          $this->session->set_flashdata('upload_error',$error);
        }
      }

      $this->session->set_flashdata('update_success','success');
      header('location:'.base_url().'Company/company_list');
    }
    $company_info = $this->Master_Model->get_info_arr('company_id',$company_id,'company');
    if(!$company_info){ header('location:'.base_url().'Company/company_list'); }
    $data['update'] = 'update';
    $data['update_company'] = 'update';
    $data['company_info'] = $company_info[0];
    $data['act_link'] = base_url().'Company/edit_company/'.$company_id;

    $data['country_list'] = $this->Master_Model->get_list('','country_name','ASC','country');
    $data['state_list'] = $this->Master_Model->get_list('','state_name','ASC','state');
    $data['district_list'] = $this->Master_Model->get_list('','district_name','ASC','district');
    $data['city_list'] = $this->Master_Model->get_list('','city_name','ASC','city');
    $data['currency_list'] = $this->Master_Model->get_list_by_id3($smm_company_id,'','','','','','','currency_name','ASC','smm_currency');
    $data['company_entity_list'] = $this->Master_Model->get_list_by_id3($smm_company_id,'','','','','','','company_entity_name','ASC','smm_company_entity');

    $data['page'] = 'Update Company';
    $this->load->view('Admin/Include/head', $data);
    $this->load->view('Admin/Include/navbar', $data);
    $this->load->view('Admin/Company/company_information', $data);
    $this->load->view('Admin/Include/footer', $data);
  }
