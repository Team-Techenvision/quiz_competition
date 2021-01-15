<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WebsiteController extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('Website_Model');
    // $this->load->model('Transaction_Model');
  }

  public function logout(){
    $this->session->sess_destroy();
    header('location:'.base_url().'WebsiteController');
  }

 
/**************************      Login      ********************************/
  public function login(){
    // print_r($_POST);
    $this->form_validation->set_rules('user_mobile', 'user_mobile', 'required|regex_match[/^[0-9]{10}$/]');
    // $this->form_validation->set_rules('user_otp', 'password', 'trim|required');
    if ($this->form_validation->run() == FALSE) {
     //  $this->load->view('Website/Include/head');
     //  $this->load->view('Website/index');
     // $this->load->view('Website/Include/footer');

    } else{
      $user_mobile = $this->input->post('user_mobile');
      // $user_otp = $this->input->post('user_otp');

      $login = $this->Website_Model->check_login($user_mobile);
   
      // print_r($login);
      if($login == null){
        // alert("login_error");
        $this->session->set_flashdata('msg','login_error');
        header('location:'.base_url().'WebsiteController');
      } else{
        echo 'null not';
        $this->session->set_userdata('quizweb_user_id', $login[0]['user_id']);
        // $this->session->set_userdata('quizweb_user_name', $login[0]['user_name']);
        $this->session->set_userdata('quizweb_company_id', $login[0]['company_id']);
        $this->session->set_userdata('quizweb_roll_id', $login[0]['roll_id']);
        header('location:'.base_url().'WebsiteController');
       
      }

     
    }
    
    
  }
   /**************************      Home Page      ********************************/
  public function index(){


    $data['banner_list'] = $this->Website_Model->banner_list('bannerid');
    $data['tab_list'] = $this->Website_Model->tab_list('tabinputtextid');
    $data['competition_list'] = $this->Website_Model->competition_list('competitionid','','','','','','competition');
   
    $data['user_list'] = $this->Website_Model->get_list_by_id('user_id','','','','','','user');

    // print_r($data['user_list']);
    $data['company_list'] = $this->Website_Model->get_list_by_id('company_id','4','','','','','company');
    $data['country'] = $this->Website_Model->fetch_country();
    $data['pincode'] = $this->Website_Model->fetch_pincodelist();
    $data['pin'] = $this->Website_Model->fetch_pincodelist();
    $data['userid'] = $this->Website_Model->fetch_userid();
    

    // $data['state'] = $this->Website_Model->fetch_state($countryid);
    // $data['city'] = $this->Website_Model->fetch_city($stateid);
    // $data['district'] = $this->Website_Model->fetch_district($cityid);


    // $data['company_list'] = $this->Website_Model->get_list('4');


    // print_r($data);

    $this->load->view('Website/Include/head',$data);
    $this->load->view('Website/index',$data);
    $this->load->view('Website/Include/footer',$data);
}
  /**************************      About Us      ********************************/
  public function about(){

    $this->load->view('Website/Include/head');
    $this->load->view('Website/about_us');
    $this->load->view('Website/Include/footer');
}


  

/**************************      Contact Us      ********************************/
  public function contact(){

    $data['company_list'] = $this->Website_Model->get_list_by_id('company_id','4','','','','','company');

    $this->load->view('Website/Include/head');
    $this->load->view('Website/contact_us');
    $this->load->view('Website/Include/footer');
}
  
  /**************************     Privacy Policy      ********************************/
  public function privacypolicy(){

    $this->load->view('Website/Include/head');
    $this->load->view('Website/privacy_policy');
    $this->load->view('Website/Include/footer');
}

/**************************    Terms and Coditions     ********************************/
  public function termsandcondition(){

    $this->load->view('Website/Include/head');
    $this->load->view('Website/termsandcondition');
    $this->load->view('Website/Include/footer');
}     

/**************************    FAQ     ********************************/
  public function faq(){

    $this->load->view('Website/Include/head');
    $this->load->view('Website/faq');
    $this->load->view('Website/Include/footer');
}     

  
/******************************  Registration Information      ****************************/

  // Add add_registration....
  public function add_registration(){

    //  $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    // $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    // $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    // if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url()); }
    $this->form_validation->set_rules('user_name', 'First user_name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $save_data = array(
       
        'user_pincode' => $this->input->post('user_pincode'),
        'user_mobile' => $this->input->post('user_mobile'),
        'user_name' => $this->input->post('user_name'),
        // 'user_addedby' => $quizweb_user_id,
        'is_admin' => 3,
        'roll_id' => 3,
      );
      // print_r($save_data);
      $this->Website_Model->save_data('user',$save_data);
      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'WebsiteController');
    }
    $data['pincode'] = $this->Website_Model->fetch_pincodelist();

    // print_r($data);

    $this->load->view('Website/Include/head',$data);
    $this->load->view('Website/index',$data);
    $this->load->view('Website/Include/footer',$data);
  }

  // User List....
  public function user_list(){
    $data['user_list'] = $this->Website_Model->user_list('user_id');

    $this->load->view('Website/Include/head',$data);
    $this->load->view('Website/registration_list',$data);
    $this->load->view('Website/Include/footer',$data);
  }

  // Edit registration....
  public function edit_registration($user_id){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
     if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url()); }
    $this->form_validation->set_rules('user_name', 'name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $update_data = array(
        'user_pincode' => $this->input->post('user_pincode'),
        'user_mobile' => $this->input->post('user_mobile'),
         'user_name' => $this->input->post('user_name'),
       
        'user_addedby' => $quizweb_user_id,
      );
      $this->Website_Model->update_info('user_id', $user_id, 'user', $update_data);
      $this->session->set_flashdata('update_success','success');
      header('location:'.base_url().'WebsiteController/user_list');
    }

    $user_info = $this->Website_Model->get_info('user_id', $user_id, 'user');
    if($user_info == ''){ header('location:'.base_url().'WebsiteController/user_list'); }
    foreach($user_info as $info){
      $data['update'] = 'update';
      $data['user_pincode'] = $info->user_pincode;
      $data['user_mobile'] = $info->user_mobile;
      $data['user_name'] = $info->user_name; 
            
    }
    $this->load->view('Website/Include/head',$data);
    $this->load->view('Website/registration_list',$data);
    $this->load->view('Website/Include/footer',$data);
  }

  // Delete registration....
  public function delete_registration($user_id){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
     if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url()); }
    $this->Website_Model->delete_info('user_id', $user_id, 'user');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'WebsiteController/user_list');
  }

/*******************************    Profile Information     **************************/



public function insert_profiledata(){

   $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url()); }

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
        'competitionid' => $this->input->post('competition_id'),
        'user_id' => $quizweb_user_id,
        'created_date' => date('Y-m-d H:i:s'),
      );
      // print_r($save_data);
      $this->Website_Model->save_data('profile',$save_data);
      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'WebsiteController');
    }



}
 // Add New Profile....
  public function add_profile(){

    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
     if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url()); }
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
        'competition_id' => $this->input->post('competitionid'),
        'user_id' => $quizweb_user_id,
        'created_date' => date('Y-m-d H:i:s'),
      );
      // print_r($save_data);
      $this->Website_Model->save_data('profile',$save_data);
      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'WebsiteController/profile_list');
    }


  $data['pin'] = $this->Website_Model->fetch_pincodelist();
  $data['userid'] = $this->Website_Model->fetch_userid();
 
// print_r($data);

    $this->load->view('Website/Include/head',$data);
    $this->load->view('Website/profile',$data);
    $this->load->view('Website/Include/footer',$data);
  }

   // Profile List....
  public function profile_list(){
     $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
     if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url()); }
    $data['profile_list'] = $this->Website_Model->profile_list('profileid');


    $this->load->view('Website/Include/head',$data);
    $this->load->view('Website/profile_list',$data);
    $this->load->view('Website/Include/footer',$data);
  }

  // Edit Profile....

   
     
  public function edit_profile(){
    // print_r($_POST);
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
     if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url()); }
    $this->form_validation->set_rules('parentname', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {

        $update_data = $_POST; 

      $update_data = array(
        'parentname' => $this->input->post('parentname'),
        'age' => $this->input->post('age'),
        'emailid' => $this->input->post('emailid'),
        'grade' => $this->input->post('grade'),
        'schoolcollegename' => $this->input->post('schoolcollegename'),
        'address' => $this->input->post('address'),
        'pincode' => $this->input->post('pincode'),
        'competitionid' => $this->input->post('competition_id'),
        'profile_image' => $this->input->post('profile_image'),
        // 'user_addedby' => $quizweb_user_id,
      );
      $this->Website_Model->update_info('user_id', $quizweb_user_id, 'profile', $update_data);

   

      if($_FILES['profile_image']['name']){
              $time = time();
              // $image_name = 'profile_image_'.$time;
              $image_name = 'profile_image_'.$quizweb_user_id.'_'.$time;

              $config['upload_path'] = 'assets/images/profile/';
              $config['allowed_types'] = 'jpg|jpeg|png|gif';
              $config['file_name'] = $image_name;
              $filename = $_FILES['profile_image']['name'];
              $ext = pathinfo($filename, PATHINFO_EXTENSION);
              $this->upload->initialize($config); // if upload library autoloaded
             


                    // print_r($_POST);
                     

              if ($this->upload->do_upload('profile_image') && $quizweb_user_id && $image_name && $ext && $filename) {

                   // print_r($insert_id);

                  $image['profile_image'] = $image_name.'.'.$ext;
                  // print_r($profile_image);
                  $this->Website_Model->update_info('user_id', $quizweb_user_id, 'profile', $image);
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
      // header('location:'.base_url().'WebsiteController/edit_profile');
    }

    $profile_info = $this->Website_Model->get_info('user_id', $quizweb_user_id, 'profile');
    // if($profile_info == ''){ header('location:'.base_url().'WebsiteController/edit_profile'); }
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
      $data['profile_image'] = $info->profile_image;
    }
  $data['pin'] = $this->Website_Model->fetch_pincodelist();
  $profile_list = $this->Website_Model->get_list_by_id('user_id', $quizweb_user_id,'','','','','profile'); 

  

    $this->load->view('Website/Include/head',$data);
    $this->load->view('Website/editprofile',$data);
    $this->load->view('Website/Include/footer',$data);
  }

  // Delete Profile....
  public function delete_profile($profileid){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
     if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url()); }
    $this->Website_Model->delete_info('profileid', $profileid, 'profile');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'WebsiteController/profile_list');
  }


/*******************************  Competition list  ****************************/

   // Competition List....
  public function competition_list(){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'WebsiteController'); }
    // $data['mycompetition_list'] = $this->Website_Model->mycompetition_list('profileid');
     $data['mycompetition_list'] = $this->Website_Model->mycompetition_list($quizweb_user_id);

    // print_r($data['mycompetition_list']);

    
  
    $this->load->view('Website/Include/head',$data);
    // $this->load->view('Include/navbar',$data);
    $this->load->view('Website/competition_list',$data);
    $this->load->view('Website/Include/footer',$data);
  }

/*******************************  Winner list  ****************************/

   // Winner List....
  public function winner_list(){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'WebsiteController'); }
    // $data['winner_list'] = $this->Website_Model->winner_list('user_id');
    $data['winner_list']  = $this->Website_Model->resultwinner_list($quizweb_user_id); 
   // print_r($data['winner_list']);

    $this->load->view('Website/Include/head',$data);
    // $this->load->view('Include/navbar',$data);
    $this->load->view('Website/winner_list',$data);
    $this->load->view('Website/Include/footer',$data);
  }

/*******************************  Check Duplication  ****************************/
  public function check_duplication(){
    $column_name = $this->input->post('column_name');
    $column_val = $this->input->post('column_val');
    $table_name = $this->input->post('table_name');
    $company_id = '0';
    $cnt = $this->Website_Model->check_dupli_num($company_id,$column_val,$column_name,$table_name);
    echo $cnt;
  }






  //---------------------------------------------/
  public function question_view(){
    // print_r($_POST);
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
     if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url()); }
    $this->form_validation->set_rules('parentname', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {

        $update_data = $_POST; 

      $update_data = array(
        'parentname' => $this->input->post('parentname'),
        'age' => $this->input->post('age'),
        'emailid' => $this->input->post('emailid'),
        'grade' => $this->input->post('grade'),
        'schoolcollegename' => $this->input->post('schoolcollegename'),
        'address' => $this->input->post('address'),
        'pincode' => $this->input->post('pincode'),
        'competitionid' => $this->input->post('competition_id'),
        'profile_image' => $this->input->post('profile_image'),
        // 'user_addedby' => $quizweb_user_id,
      );
      $this->Website_Model->update_info('user_id', $quizweb_user_id, 'profile', $update_data);

   

      if($_FILES['profile_image']['name']){
              $time = time();
              // $image_name = 'profile_image_'.$time;
              $image_name = 'profile_image_'.$quizweb_user_id.'_'.$time;

              $config['upload_path'] = 'assets/images/profile/';
              $config['allowed_types'] = 'jpg|jpeg|png|gif';
              $config['file_name'] = $image_name;
              $filename = $_FILES['profile_image']['name'];
              $ext = pathinfo($filename, PATHINFO_EXTENSION);
              $this->upload->initialize($config); // if upload library autoloaded
             


                    // print_r($_POST);
                     

              if ($this->upload->do_upload('profile_image') && $quizweb_user_id && $image_name && $ext && $filename) {

                   // print_r($insert_id);

                  $image['profile_image'] = $image_name.'.'.$ext;
                  // print_r($profile_image);
                  $this->Website_Model->update_info('user_id', $quizweb_user_id, 'profile', $image);
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
      // header('location:'.base_url().'WebsiteController/edit_profile');
    }

    $profile_info = $this->Website_Model->get_info('user_id', $quizweb_user_id, 'profile');
    // if($profile_info == ''){ header('location:'.base_url().'WebsiteController/edit_profile'); }
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
      $data['profile_image'] = $info->profile_image;
    }
  $data['pin'] = $this->Website_Model->fetch_pincodelist();
  $profile_list = $this->Website_Model->get_list_by_id('user_id', $quizweb_user_id,'','','','','profile'); 

    $this->load->view('Website/Include/head',$data);
    $this->load->view('Website/star_quizs',$data);
    $this->load->view('Website/Include/footer',$data);
  }

     //------------------------  start quiz competition ------------------------------------/        

  public function star_competion()
  { 
    // print_r($_POST);
    // $result = [];
   //    $arr = $_POST['quiz_id1'];
   // $chk_value = implode(",",$arr);
   // print_r($chk_value); die();
   foreach ($_POST as $row)
    {
      
        print_r($row);

     }
    // echo '<pre>';
// print_r($result);
// echo '</pre>';
    // die();

    $quiz_id = $this->uri->segment(3);
    // echo $quiz_id;   die();
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'WebsiteController'); }
    $this->form_validation->set_rules('question', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {

      // $a[0] = array('dynamicco mpetitionid'=>$dynamiccompetitionid, 'ansoption'=>$ansoption);

      // print_r($a[0]); die();

      // foreach ($quizsubmit as $value) {

      //     foreach($$val['name'] as $value){     

      //     }
      // }

 //       $res= $data = [];
 // $a = array(array('dynamiccompetitionid'=>$dynamiccompetitionid, 'ansoption'=>$ansoption),array('dynamiccompetitionid'=> $dynamiccompetitionid, 'rodio'=>$rodio));

 // print_r($a); die();
 // foreach($a as $val){
 //     $res[$val['name']] = $this->home_model->get_product($val['category_id']);
 // }
 // $data['category'] = $res;
 // $this->load->view('main',$data);

      $save_data = array(
       
        'dynamiccompetitionid' => $this->input->post('dynamiccompetitionid'),
        'question' => $this->input->post('question'),
        'selectanswertext' => $this->input->post('selectanswertext'),
        'user_id' => $quizweb_user_id,
      
      );
      // print_r($save_data);
      $this->Website_Model->save_data('userquizsubmit',$save_data);
      $this->session->set_flashdata('save_success','success');
      // header('location:'.base_url().'WebsiteController/profile_list');
    }

    $data['result'] = $this->Website_Model->quize_get($quiz_id);
    // print_r($data['result']);
    $this->load->view('Website/Include/head',$data);
    $this->load->view('Website/star_quizs',$data);
    $this->load->view('Website/Include/footer',$data);
  }
// public function quiz_Start()
// {  
//  //echo "String";die();
//  $arr = $_POST;
//  print_r($arr);
//  // echo count($arr);
//  // echo "<pre>";
//  $data="";
//  //print_r($arr);die();
// foreach ($arr as $rows)
// {
//  if($_POST['ddlquiz']=="ddlquiz")
//  {
//    $arr = $_POST['ddlquiz'];
//    $chk_value = implode(",",$arr);
//    $data['ans']  = $chk_value;
//    //print_r ($data);
//    //echo $data['ans'];
//  }


// }
 
 
// }

}
