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


/**************************      Dynamic Competition      ********************************/
  public function dynamiccompetition(){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == ''&& $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $que_id="";

    $this->form_validation->set_rules('question', 'First Name', 'trim|required');

    if ($this->form_validation->run() != FALSE) {

       // $array = $this->input->post('answertype');
       // $data['ans']= implode(',',$array);

      // $data['json'] = json_encode($this->input->post('text'));

      $save_data = array(
        'competitionid' => $this->input->post('competitionid'),
        'question' => $this->input->post('question'),
        'answertype' => $this->input->post('answertype'),
        'created_date' => date('Y-m-d H:i:s'),
        
      );
      $this->User_Model->save_data('dynamiccompetition', $save_data);
      $this->session->set_flashdata('save_success','success');
     

      $que_id = $this->db->insert_id();
       // print_r($lastid); die();
       // $this->session->set_flashdata('q_id',$que_id);
      $answertype = $save_data['answertype'];
      // print_r($answertype); die();
      if($answertype=="3"){

         header('location:'.base_url().'User/dynamiccompetition');
      }
      elseif($answertype=="4"){

         header('location:'.base_url().'User/dynamiccompetition');
      }
      else{

         header('location:'.base_url().'User/quizanswer/'.$que_id);
      }

      // $this->quizanswer($lastid);
    }
     // print_r($data['lastid']); die();

    $data['competition'] = $this->User_Model->fetch_competition();
    
    $data['data'] = $que_id;
    // print_r($data['competition']);  

    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/dynamic_competition',$data);
    $this->load->view('Include/footer',$data);
  }

  /************************ quiz display **************************/

  //quiz_display
 // function fetch_user()
 // {
 //  if($this->input->post('competitionid'))
 //  {
 //   echo $this->User_Model->fetch_user($this->input->post('competitionid'));
 //  }
 // }  
  public function quiz_user_list(){

    // print_r($_POST); die();
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }      
          // print_r($_POST);
    $competitionid =$this->input->post('competitionid');
    // $pincode = $this->input->post('pincode');
    // $user_id = $this->input->post('user_id');
     
     // print_r($user_id);   
    $data['competition'] = $this->User_Model->fetch_competition();
    // $data['competitiontype'] = $this->User_Model->competition_list($competitionid);
     
    $data['user_list'] = $this->User_Model->fetch_userlist($competitionid);

    // print_r($data['user_list']);

    $data['competitionid'] =  $competitionid;
    // $data['pincodeid'] =  $pincode;
    // $data['user_id'] =  $user_id;

      $this->load->view('Include/head',$data);
      $this->load->view('Include/navbar', $data);
      $this->load->view('User/quiz_user_list',$data);
      $this->load->view('Include/footer',$data);
    }

   public function quiz_display(){

     $competitionid = $this->uri->segment(3);
  
     $user_id = $this->uri->segment(4);

   // print_r($user_id); die();

    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == ''&& $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    // $this->form_validation->set_rules('countryid', 'First Name', 'trim|required');
    // if ($this->form_validation->run() != FALSE) {
    //   $save_data = array(
    //     // 'company_id' => $quizweb_company_id,
    //     'countryid' => $this->input->post('countryid'),
    //     'stateid' => $this->input->post('stateid'),
    //     'district' => $this->input->post('district'),
    //     'city' => $this->input->post('city'),
    //     'pincode' => $this->input->post('pincode'),
        
    //   );
    //   $this->User_Model->save_data('pincodemaster', $save_data);
    //   $this->session->set_flashdata('save_success','success');
    //   header('location:'.base_url().'User/pincode_list');
    // }

    $data['competition'] = $this->User_Model->fetch_competition();
    $data['result'] = $this->User_Model->quize_get($competitionid);

      foreach ($data['result'] as  $value) {
       $correctans = $value['correctans'];
       $selectanswertext = $value['selectanswertext'];

       if($correctans==$selectanswertext)
       {

        $data['checkgreen'] = $selectanswertext;

        print_r($data['checkgreen']);

        // echo "hii";

       }else{
        $data['checkred'] = $selectanswertext;
        print_r($data['checkred']);

        // echo "hello";
       }



       // print_r($correctans); 
       // print_r($selectanswertext); 

      }
      // if($correctans == $selectanswertext){

      //  echo correct;

      // }else{
      //   echo false;
      // }


    $data['users'] = $this->User_Model->fetch_user_name($user_id);
    // $data['quiz'] = $this->User_Model->check_userquiz_answer($user_id);


   // print_r($data['result']); die();
   
    $this->load->view('Include/head',$data);
    // $this->load->view('Include/navbar',$data);
    $this->load->view('User/quiz_display',$data);
    $this->load->view('Include/footer',$data);
  }

  /**************************      Quiz answer      ********************************/


    public function quizanswer()
    {

      $que_id = $this->uri->segment(3);

    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == ''&& $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    // $this->form_validation->set_rules('question', 'First Name', 'trim|required');
    // if ($this->form_validation->run() == FALSE) {

        $admore  = $this->input->post('addmore');
        $queNo = $this->input->post('queNo');
        $correct = $this->input->post('correctans');
      // echo count($correct); die();
     
      
        if(!empty($admore)){
        
        $all_tags = implode( ',' , $admore );
        $check = implode( ',' , $correct );

        // print_r($all_tags);
          
        $update_data = array(
                'optionvalues' => $all_tags,
                'correctans' =>  $check,
             // 'created_date' => date('Y-m-d H:i:s'),
                
              );
          
            
           $this->User_Model->update_info('dynamiccompetitionid',$queNo,'dynamiccompetition', $update_data);
           $this->session->set_flashdata('save_success','success');
           header('location:'.base_url().'User/dynamiccompetition');

        }
    $data['quizquestion'] = $this->User_Model->fetch_quizquestion($que_id);

    // print_r($data['competition']);


    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/quiz_answer',$data);
    $this->load->view('Include/footer',$data);
       

    }

     // QuizCompetition List....
  public function quizcompetition_list(){

      $competitionid = $this->uri->segment(3);

    // print_r($_POST); die();
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    // $data['quizcompetition_list'] = $this->User_Model->get_list_by_id('dynamiccompetitionid','','','','','','dynamiccompetition');

    $data['quizcompetition_list'] = $this->User_Model->quizcompetition_list($competitionid);

// print_r($data); die();
    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/quizcompetition_list',$data);
    $this->load->view('Include/footer',$data);
  }

   // Edit QuizCompetition....
  public function edit_quizcompetition($dynamiccompetitionid){
  // print_r($_POST); die();
    $compid = $this->uri->segment(3);
    $dynamiccompetitionid = $this->uri->segment(4);

    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('question', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {

        $admore  = $this->input->post('addmore');
        $correct = $this->input->post('correctans');
     // print_r($this->input->post('correctans')); die();
     
      
        if(!empty($admore)){

        $all_tags = implode( ',' , $admore );
        $check = implode( ',' , $correct );

        // print_r($all_tags); die();
        // echo $admore; die();

          $update_data = array(
             'question' => $this->input->post('question'),
             'optionvalues' => $all_tags,
             'correctans' =>  $check,
             'created_date' => date('Y-m-d H:i:s'),
              // 'user_addedby' => $quizweb_user_id,
            );

          $this->User_Model->update_info('dynamiccompetitionid', $dynamiccompetitionid, 'dynamiccompetition', $update_data);
          $this->session->set_flashdata('update_success','success');
          header('location:'.base_url().'User/quizcompetition_list/'.$compid);

    }
    }
    $data['compid'] = $compid;
    // print_r($data['compid']); die();

    $quiz_info = $this->User_Model->get_info('dynamiccompetitionid', $dynamiccompetitionid, 'dynamiccompetition');

    // print_r($quiz_info); die();
    if($quiz_info == ''){ header('location:'.base_url().'User/quizcompetition_list'); }
    foreach($quiz_info as $info){
      $data['update'] = 'update';
      $data['question'] = $info->question;
      $data['optionvalues'] = $info->optionvalues;
      $data['correctans'] = $info->correctans;
      // $data['grade'] = $info->grade;
      // $data['schoolcollegename'] = $info->schoolcollegename;
      // $data['address'] = $info->address;
      // $data['pincode'] = $info->pincode;
      // $data['competitionid'] = $info->competitionid;
    }

    
    $data['fetch_dynamicquizlist'] = $this->User_Model->fetch_dynamicquizlist($dynamiccompetitionid);

    // print_r($data); die();
  
    
    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/QuizCompetition',$data);
    $this->load->view('Include/footer',$data);
  }

  // Delete QuizCompetition....
  public function delete_quizcompetition(){
 
    $compid = $this->uri->segment(3);
    $competitionid = $this->uri->segment(4);


    // echo $competitionid; die();

    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('dynamiccompetitionid', $competitionid, 'dynamiccompetition');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'User/quizcompetition_list/'.$compid);
  }

/*******************************    Competition Type Information      ****************************/

  // Add New Competition Type....
  public function add_competitiontype(){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == ''&& $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('competitiontype', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $save_data = array(
   
        'competitiontype' => $this->input->post('competitiontype'),
        'created_date' => date('Y-m-d H:i:s'),
        
      );
      $this->User_Model->save_data('competitiontype', $save_data);
      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'User/competitiontype_list');
    }
    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('User/competitiontype');
    $this->load->view('Include/footer');
  }

  // User List....
  public function competitiontype_list(){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $data['competitiontype_list'] = $this->User_Model->competitiontype_list($quizweb_company_id);
    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/competitiontype_list',$data);
    $this->load->view('Include/footer',$data);
  }

  // Edit User....
  public function edit_competitiontype($competitiontypeid){


    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('competitiontype', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $update_data = array(
         'competitiontype' => $this->input->post('competitiontype'),
         'created_date' => date('Y-m-d H:i:s'),
      );
      $this->User_Model->update_info('competitiontypeid', $competitiontypeid, 'competitiontype', $update_data);
      $this->session->set_flashdata('update_success','success');
      header('location:'.base_url().'User/competitiontype_list');
    }

    $user_info = $this->User_Model->get_info('competitiontypeid', $competitiontypeid, 'competitiontype');
    if($user_info == ''){ header('location:'.base_url().'User/competitiontype_list'); }
    foreach($user_info as $info){
      $data['update'] = 'update';
      $data['competitiontype'] = $info->competitiontype;
     
    }
    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/competitiontype',$data);
    $this->load->view('Include/footer',$data);
  }

  // Delete User....
  public function delete_competitiontype($competitiontypeid){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('competitiontypeid', $competitiontypeid, 'competitiontype');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'User/competitiontype_list');
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
        'user_pincode' => $this->input->post('user_pincode'),
        'user_addedby' => $quizweb_user_id,
        'is_admin' => 1,
        'roll_id' => 2,
      );
      $id = $this->User_Model->save_data('user', $save_data);
      // $this->session->set_flashdata('save_success','success');

      $data_view = array(
            'user_id' => $id,
            'user_name' => $this->input->post('user_name'),
            'user_mobile' => $this->input->post('user_mobile'),
            'user_password' => $this->input->post('user_password'),
            'user_pincode' => $this->input->post('user_pincode'), 
            'profile_submitted' =>0,          
        );

      $this->User_Model->save_data('userprofile_master',$data_view);
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
     $userId = $this->uri->segment(3);
     // print_r($user_id); die();

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

      // $updateid=$user_id;

       $update_view = array(
            'user_id' => $userId,
            'user_name' => $this->input->post('user_name'),
            'user_mobile' => $this->input->post('user_mobile'),
            'user_password' => $this->input->post('user_password'),
            'user_pincode' => $this->input->post('user_pincode'), 
         
        );

      $this->User_Model->update_info('user_id', $user_id, 'userprofile_master', $update_view);


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
      $data['user_pincode'] = $info->user_pincode;
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
    $this->User_Model->delete_info('user_id', $user_id, 'userprofile_master');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'User/user_list');
  }

/******************************* Pincode Information ****************************/
 // Add New Pincode info....
  public function add_pincode(){

   // print_r($_POST); die();

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
      
    // print_r($_POST);  
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('title', 'name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {

      $update_data = $_POST;
      // unset($update_data['old_profile_image']);
       // print_r($update_data);
      
      if($old_image=$this->input->post('old_image')){
      $update_data = array(
        // print_r($old_image);
        'title' => $this->input->post('title'),
        'subtitle' => $this->input->post('subtitle'),
        // 'profile_image' => $this->input->post('old_image'),
        'slider_possition' =>1,
       
      );
    }else{
      $update_data = array(
        'title' => $this->input->post('title'),
        'subtitle' => $this->input->post('subtitle'),
        'profile_image' => $this->input->post('profile_image'),
        'slider_possition' =>1,
       
      );
    }

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
      // $data['profile_image'] = $info->profile_image;
    
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

    // print_r($_POST); die();

    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('title', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {

       // $array = $this->input->post('choosefiletransfer');
       // $data['subject']= implode(',',$array);

      $data['uploadfile'] = $this->input->post('uploadfile');
      if (isset($data['uploadfile'])) {
        echo $data['uploadfile'] = 1; 
      }
      else {
       echo $data['uploadfile'] = 0;

      }

         $data['upload_audio'] = $this->input->post('upload_audio');
      if (isset($data['upload_audio'])) {
        echo $data['upload_audio'] = 1; 
      }
      else {
       echo $data['upload_audio'] = 0;

      }


         $data['upload_vedio'] = $this->input->post('upload_vedio');
      if (isset($data['upload_vedio'])) {
        echo $data['upload_vedio'] = 1; 
      }
      else {
       echo $data['upload_vedio'] = 0;

      }


         $data['upload_image'] = $this->input->post('upload_image');
      if (isset($data['upload_image'])) {
        echo $data['upload_image'] = 1; 
      }
      else {
       echo $data['upload_image'] = 0;

      }

      $data['email'] = $this->input->post('email');
      if(isset($data['email'])){
         echo $data['email'] = 1;
      }
      else{
         echo $data['email'] = 0;
      }

      $data['whatsapp'] = $this->input->post('whatsapp');
      if( isset($data['whatsapp']))
      {
         echo $data['whatsapp'] = 1;
      }
      else{

        echo $data['whatsapp'] = 0;
      }
      $save_data = array(
       
        'title' => $this->input->post('title'),
        'subtitle' => $this->input->post('subtitle'),
        'standard' => $this->input->post('standard'),
        'tabinputtextid' => $this->input->post('tabinputtextid'),
        'termsandconditions' => $this->input->post('termsandconditions'),
        'instruction' => $this->input->post('instruction'),
        'competitionusertype' => $this->input->post('competitionusertype'),
        'levelid' => $this->input->post('levelid'),
        'fromage' => $this->input->post('fromage'),
        'toage' => $this->input->post('toage'),
        'enddate' => $this->input->post('enddate'),
        'subjectstextarea' => $this->input->post('subjectstextarea'),
        'file_format' => $this->input->post('file_format'),
        'uploadfile'=>   $data['uploadfile'],
        'upload_audio'=>   $data['upload_audio'],
        'upload_image'=>   $data['upload_image'],
        'upload_vedio'=>   $data['upload_vedio'],
        'email'=>  $data['email'],
        'emailaddress'=>  $this->input->post('emailaddress'),
        'whatsapp'=>  $data['whatsapp'],
        'whatsappnumber'=>  $this->input->post('whatsappnumber'),
        'points'=>  $this->input->post('points'),
        'competitiontypeid'=>  $this->input->post('competitiontypeid'),
        'conversionpoints'=>  $this->input->post('conversionpoints'),
        'gender'=>  $this->input->post('gender'),
        'created_date' => date('Y-m-d H:i:s'),
 
      );

      // echo "hii"; die();
      // print_r($array);

      $this->User_Model->save_data('competition',$save_data);
      
      // $id = $this->User_Model->save_data('competition',$save_data);
     // print_r($save_data); die();
      $this->session->set_flashdata('save_success','success');
       $comptype = $save_data['competitiontypeid'];
      
        // $data_view = array(
        //     'competitionid' => $id,
        //     'quizsubject' => $this->input->post('quizsubject'),
        // );

        // $this->User_Model->save_data('competitionquizsubject',$data_view);
        // $this->session->set_flashdata('save_success','success');

        if($comptype=="1"){
          header('location:'.base_url().'User/dynamiccompetition');
        }else{
          header('location:'.base_url().'User/competition_list');
        }

     
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
              // $allowed = array('gif', 'png', 'jpg');

              // print_r($allowed);  echo $ext; die();
              // if (!in_array($ext, $allowed)) {
              //     echo 'error';
              //     die();
              // }
              // else{
 
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
      // }
     }


            
    }
      $data['tabinputtext'] = $this->User_Model->fetch_tabinputtext();
      $data['class'] = $this->User_Model->fetch_class();
      $data['level'] = $this->User_Model->fetch_level();
      $data['competitiontype'] = $this->User_Model->fetch_competitiontype();


    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/competition/competition',$data);
    $this->load->view('Include/footer',$data);
  }
 
   public function competitionName_list(){
    // echo $_POST['competitionid']; die();
   $competitionid=$this->input->post('competitionid');
   $data=$this->User_Model->competitionName_list($competitionid);
   // echo (json_encode($data));
  foreach ($data as $value) {
    ?>
          <div class="">
          <label for="recipient-name"  class="col-form-label">Competition Type :</label>
          <label for="recipient-name" id="titlell" type="text" class="col-form-label"><?php echo $value['competitiontype']; ?></label>
          </div>
           <div class="">
          <label for="recipient-name"  class="col-form-label">Competition Title :</label>
          <label for="recipient-name" id="titlell" type="text" class="col-form-label"><?php echo $value['title']; ?></label>
          </div>
           <div class="">
          <label for="recipient-name"  class="col-form-label">Competition Sub Title :</label>
          <label for="recipient-name" id="titlell" type="text" class="col-form-label"><?php echo $value['subtitle']; ?></label>
          </div>
           <div class="">
          <label for="recipient-name"  class="col-form-label">Competition Level :</label>
          <label for="recipient-name" id="titlell" type="text" class="col-form-label"><?php echo $value['levelname']; ?></label>
          </div>
           <div class="">
          <label for="recipient-name"  class="col-form-label">Age :</label>
          <label>From</label>
          <label for="recipient-name" id="titlell" type="text" class="col-form-label"><?php echo $value['fromage']; ?></label>
          <label>To</label>
          <label for="recipient-name" id="titlell" type="text" class="col-form-label"><?php echo $value['toage']; ?></label>
          </div>
            <div class="">
          <label for="recipient-name"  class="col-form-label">Competition End Date :</label>
          <label for="recipient-name" id="titlell" type="text" class="col-form-label"><?php echo $value['enddate']; ?></label>
          </div>
            <div class="">
          <label for="recipient-name"  class="col-form-label">Competition Class :</label>
          <label for="recipient-name" id="titlell" type="text" class="col-form-label"><?php echo $value['standard']; ?></label>
          </div>
           <div class="">
          <label for="recipient-name"  class="col-form-label">Terms and Conditions :</label>
          <label for="recipient-name" id="titlell" type="text" class="col-form-label"><?php echo $value['termsandconditions']; ?></label>
          </div>
           <div class="">
          <label for="recipient-name"  class="col-form-label">Instructions :</label>
          <label for="recipient-name" id="titlell" type="text" class="col-form-label"><?php echo $value['instruction']; ?></label>
          </div>
          <div class="">
          <label for="recipient-name"  class="col-form-label">Competition Image :</label><br/>
          <img src="<?php echo base_url(); ?>assets/images/competition/<?php echo $value['photo']; ?>" height="150" width="150">
          </div>
    <?php
  }
    
  }

  
  // Competition List....
  public function competition_list(){

    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $data['competition_list'] = $this->User_Model->competition_list('competitionid');
    
    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/competition/competition_list',$data);
    $this->load->view('Include/footer',$data);
  }

  // Edit Competition....
  public function edit_competition($competitionid){

     $competitionid = $this->uri->segment(3);
    // print_r($competitionid); die();
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == ''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('title', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {

       // $array = $this->input->post('choosefiletransfer');
       // $data['subject']= implode(',',$array);
      $update_data = $_POST;

      $data['uploadfile'] = $this->input->post('uploadfile');
      if (isset($data['uploadfile'])) {
        echo $data['uploadfile'] = 1; 
      }
      else {
       echo $data['uploadfile'] = 0;

      }

         $data['upload_audio'] = $this->input->post('upload_audio');
      if (isset($data['upload_audio'])) {
        echo $data['upload_audio'] = 1; 
      }
      else {
       echo $data['upload_audio'] = 0;

      }


         $data['upload_vedio'] = $this->input->post('upload_vedio');
      if (isset($data['upload_vedio'])) {
        echo $data['upload_vedio'] = 1; 
      }
      else {
       echo $data['upload_vedio'] = 0;

      }

      
         $data['upload_image'] = $this->input->post('upload_image');
      if (isset($data['upload_image'])) {
        echo $data['upload_image'] = 1; 
      }
      else {
       echo $data['upload_image'] = 0;

      }


      $data['email'] = $this->input->post('email');
      if(isset($data['email'])){
         echo $data['email'] = 1;
      }
      else{
         echo $data['email'] = 0;
      }

      $data['whatsapp'] = $this->input->post('whatsapp');
      if( isset($data['whatsapp']))
      {
         echo $data['whatsapp'] = 1;
      }
      else{

        echo $data['whatsapp'] = 0;
      }
      // print_r($update_data);
       if($old_photo=$this->input->post('old_photo')){
      $update_data = array(
        'title' => $this->input->post('title'),
        'subtitle' => $this->input->post('subtitle'),
        'standard' => $this->input->post('standard'),
        // 'photo' => $this->input->post('photo'),
        'termsandconditions' => $this->input->post('termsandconditions'),
        'instruction' => $this->input->post('instruction'),
        'tabinputtextid' => $this->input->post('tabinputtextid'),
        'competitionusertype' => $this->input->post('competitionusertype'),
        'levelid' => $this->input->post('levelid'),
        'fromage' => $this->input->post('fromage'),
        'toage' => $this->input->post('toage'),
        'enddate' => $this->input->post('enddate'),
        'subjectstextarea' => $this->input->post('subjectstextarea'),
        'file_format' => $this->input->post('file_format'),
        'uploadfile'=>   $data['uploadfile'],
        'upload_audio'=>   $data['upload_audio'],
        'upload_image'=>   $data['upload_image'],
        'upload_vedio'=>   $data['upload_vedio'],
        'email'=>  $data['email'],
        'emailaddress'=>  $this->input->post('emailaddress'),
        'whatsapp'=>  $data['whatsapp'],
        'whatsappnumber'=>  $this->input->post('whatsappnumber'),
        'competitiontypeid'=>  $this->input->post('competitiontypeid'),
        'points'=>  $this->input->post('points'),
        'conversionpoints'=>  $this->input->post('conversionpoints'),
        'gender'=>  $this->input->post('gender'),

        'created_date' => date('Y-m-d H:i:s'),
       


        // 'user_addedby' => $quizweb_user_id,
      );
    }
    else{
      $update_data = array(
        'title' => $this->input->post('title'),
        'subtitle' => $this->input->post('subtitle'),
        'standard' => $this->input->post('standard'),
        'photo' => $this->input->post('photo'),
        'termsandconditions' => $this->input->post('termsandconditions'),
        'instruction' => $this->input->post('instruction'),
        'tabinputtextid' => $this->input->post('tabinputtextid'),
        'competitionusertype' => $this->input->post('competitionusertype'),
        'levelid' => $this->input->post('levelid'),
        'fromage' => $this->input->post('fromage'),
        'toage' => $this->input->post('toage'),
        'enddate' => $this->input->post('enddate'),
        'subjectstextarea' => $this->input->post('subjectstextarea'),
        'file_format' => $this->input->post('file_format'),
        'uploadfile'=>   $data['uploadfile'],
        'upload_audio'=>   $data['upload_audio'],
        'upload_image'=>   $data['upload_image'],
        'upload_vedio'=>   $data['upload_vedio'],
        'email'=>  $data['email'],
        'emailaddress'=>  $this->input->post('emailaddress'),
        'whatsapp'=>  $data['whatsapp'],
        'whatsappnumber'=>  $this->input->post('whatsappnumber'),
        'competitiontypeid'=>  $this->input->post('competitiontypeid'),
        'points'=>  $this->input->post('points'),
        'conversionpoints'=>  $this->input->post('conversionpoints'),
        'gender'=>  $this->input->post('gender'),

        'created_date' => date('Y-m-d H:i:s'),
       


        // 'user_addedby' => $quizweb_user_id,
      );
    }
      // print_r($update_data);

     $this->User_Model->update_info('competitionid', $competitionid, 'competition', $update_data);
  

      // $updateid = $competitionid;
  // print_r($updateid); die();
      // $competitionid = $this->input->post('competitionid');
      
        // $update_view = array(
        //     'competitionid' => $updateid,
        //     'quizsubject' => $this->input->post('quizsubject'),
        // );

        // print_r($update_view); die();

       // $this->User_Model->update_info('competitionid', $updateid, 'competitionquizsubject', $update_view);


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




    $competition_info= $this->User_Model->get_info('competitionid', $competitionid, 'competition');
    // $compquizsubject_info= $this->User_Model->get_info('competitionid', $competitionid, 'competitionquizsubject');
    
    // print_r($compquizsubject_info); die();

    if($competition_info == '' ){ header('location:'.base_url().'User/competition_list'); }
    foreach($competition_info as $info){
      $data['update'] = 'update';
      $data['title'] = $info->title;
      $data['subtitle'] = $info->subtitle;
      $data['standard'] = $info->standard;
      $data['photo'] = $info->photo;
      $data['termsandconditions'] = $info->termsandconditions;
      $data['instruction'] = $info->instruction;
      $data['tabinputtextid'] = $info->tabinputtextid;
      $data['competitionusertype'] = $info->competitionusertype;
      $data['levelid'] = $info->levelid;
      $data['fromage'] = $info->fromage;
      $data['toage'] = $info->toage;
      $data['enddate'] = $info->enddate;
      $data['subjectstextarea'] = $info->subjectstextarea;
      $data['file_format'] = $info->file_format;
      $data['uploadfile'] = $info->uploadfile;
      $data['upload_audio'] = $info->upload_audio;
      $data['upload_image'] = $info->upload_image;
      $data['upload_vedio'] = $info->upload_vedio;
      $data['email'] = $info->email;
      $data['emailaddress'] = $info->emailaddress;
      $data['whatsapp'] = $info->whatsapp;
      $data['whatsappnumber'] = $info->whatsappnumber;
      $data['competitiontypeid'] = $info->competitiontypeid;
      $data['points'] = $info->points;
      $data['conversionpoints'] = $info->conversionpoints;
      $data['gender'] = $info->gender;

    }
    //  foreach($compquizsubject_info as $info){
    //   $data['update'] = 'update';
    //   $data['competitionid'] = $info->competitionid;
    //   $data['quizsubject'] = $info->quizsubject;
     
    // }
    // print_r($data); die();
      $data['tabinputtext'] = $this->User_Model->fetch_tabinputtext();
      $data['class'] = $this->User_Model->fetch_class();
      $data['level'] = $this->User_Model->fetch_level();
      $data['competitiontype'] = $this->User_Model->fetch_competitiontype();
      $data['competition_list'] = $this->User_Model->competition_list('competitionid');
  
// print_r($data['class']); die();
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

// function fetch_city()
//  {
//   if($this->input->post('stateid'))
//   {
//    echo $this->User_Model->fetch_city($this->input->post('stateid'));
//   }
//  }   
//  function fetch_district()
//  {
//   if($this->input->post('cityid'))
//   {
//    echo $this->User_Model->fetch_district($this->input->post('cityid'));
//   }
//  }  
 // Add New Profile....
  public function add_participate(){

    // $user_id = $this->uri->segment(3);
    // print_r($user_id);die();

    $user_id = $this->session->userdata('user_id');


   // echo $user_id; die();

    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'WebsiteController'); }


    $this->form_validation->set_rules('parentname', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {


    
      $updateuser_data = array(
        'parentname' => $this->input->post('parentname'),
        'fullname' => $this->input->post('fullname'),
        'birthdate' => $this->input->post('birthdate'),
        'emailid' => $this->input->post('emailid'),
        'standard' => $this->input->post('standard'),
        'schoolcollegename' => $this->input->post('schoolcollegename'),
        'address' => $this->input->post('address'),
        'pincode' => $this->input->post('pincode'),
        // 'competitionid' => $this->input->post('competition_id'),
        // 'profile_image' => $this->input->post('profile_image'),
        'alternatemobno' => $this->input->post('alternatemobno'),
        'gender' => $this->input->post('gender'),
        'cityid' => $this->input->post('cityid'),
        'districtid' => $this->input->post('districtid'),
        'stateid' => $this->input->post('stateid'),
        'user_id' => $user_id,
        'created_date' => date('Y-m-d H:i:s'),
        'profile_submitted' => 1,
      ); 
      // $this->User_Model->save_data('userprofile_master',$save_data);
        $this->User_Model->update_info('user_id', $user_id, 'userprofile_master', $updateuser_data);
        $last_updated_id = $this->User_Model->fetch_userid($user_id);

        // $lastid = $this->db->insert_id();
      // echo $last_updated_id; die();

      $save_data = array(
        'parentname' => $this->input->post('parentname'),
        'fullname' => $this->input->post('fullname'),
        'birthdate' => $this->input->post('birthdate'),
        'emailid' => $this->input->post('emailid'),
        'standard' => $this->input->post('standard'),
        'schoolcollegename' => $this->input->post('schoolcollegename'),
        'address' => $this->input->post('address'),
        'pincode' => $this->input->post('pincode'),
        'competitionid' => $this->input->post('competitionid'),
        // 'profile_image' => $this->input->post('profile_image'),
        'alternatemobno' => $this->input->post('alternatemobno'),
        'gender' => $this->input->post('gender'),
        'cityid' => $this->input->post('cityid'),
        'districtid' => $this->input->post('districtid'),
        'stateid' => $this->input->post('stateid'),
        'user_id' => $user_id,
        'userprofileid' => $last_updated_id,
        'created_date' => date('Y-m-d H:i:s'),
        // 'user_addedby' => $quizweb_user_id,
      );
      // print_r($save_data);
      $this->User_Model->save_data('profile',$save_data);
      $this->session->set_flashdata('save_success','success');
      $this->session->unset_userdata('user_id');
      header('location:'.base_url().'User/participate_list');
    }

 
    $data['pin'] = $this->User_Model->fetch_pincode();
    $data['competition'] = $this->User_Model->fetch_competition();
    $data['userprofile'] = $this->User_Model->fetch_userprofile();
    $data['state'] = $this->User_Model->fetch_state();
    // $data['city'] = $this->User_Model->fetch_city1($data['stateid']);
    // $data['district'] = $this->User_Model->fetch_district1($data['districtid']);
    // $data['user_list'] = $this->User_Model->fetch_user();
    // $data['user_list'] = $this->User_Model->get_list_by_id('user_id',$user_id,'','','','','user');

    // print_r($data['user_list']);die();

    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/participate',$data);
    $this->load->view('Include/footer',$data);
  }
   public function search_participateinfo(){

    $user_mobile = $this->input->post('user_mobile');
    // $stateid = $this->input->post('stateid');
    // $districtid = $this->input->post('districtid');
    // $this->session->set_userdata('user_mobile',  $user_mobile);


    $data['search_participateinfo'] = $this->User_Model->search_participateinfo($user_mobile);

    foreach ($data['search_participateinfo'] as $value) {
      $user_id = $value->user_id;
      $this->session->set_userdata('user_id',  $user_id);

      // echo  $this->session->userdata('user_id'); die();   
    }
    $data['user_mobile'] = $user_mobile;

    // print_r($data['user_mobile']); die();
   // $userprofile_info = $this->User_Model->get_info('user_id', $user_id, 'userprofile_master');
   // foreach ($userprofile_info as $value) {
   //    // $user_mobile = $value->user_mobile;
   //    $stateid = $value->stateid;
   //    $districtid = $value->districtid;
   //  }
      // print_r($userprofile_info); die();
    $data['competition'] = $this->User_Model->fetch_competition();
    $data['state'] = $this->User_Model->fetch_state();
    // $data['city'] = $this->User_Model->fetch_city1($stateid);
    // $data['district'] = $this->User_Model->fetch_district1($districtid);


    // print_r($data['search_participateinfo']);die();

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
    
    // $user_id = $this->input->post('user_id');

   // echo $user_id; die();
    // $data['stateid'] = "";
    // $data['districtid'] = "";

    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'WebsiteController'); }


    $this->form_validation->set_rules('parentname', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      
     $user_id = $this->input->post('user_id');

     // print_r($user_id); die();

      $updateuser_data = array(
        'parentname' => $this->input->post('parentname'),
        'fullname' => $this->input->post('fullname'),
        'birthdate' => $this->input->post('birthdate'),
        'emailid' => $this->input->post('emailid'),
        'standard' => $this->input->post('standard'),
        'schoolcollegename' => $this->input->post('schoolcollegename'),
        'address' => $this->input->post('address'),
        'pincode' => $this->input->post('pincode'),
        // 'competitionid' => $this->input->post('competition_id'),
        // 'profile_image' => $this->input->post('profile_image'),
        'alternatemobno' => $this->input->post('alternatemobno'),
        'gender' => $this->input->post('gender'),
        'cityid' => $this->input->post('cityid'),
        'districtid' => $this->input->post('districtid'),
        'stateid' => $this->input->post('stateid'),
        // 'user_id' => $user_id,
        'created_date' => date('Y-m-d H:i:s'),
        'profile_submitted' => 1,
      ); 
      $this->User_Model->update_info('user_id', $user_id, 'userprofile_master', $updateuser_data);
       

      $update_data = array(
        'parentname' => $this->input->post('parentname'),
        'fullname' => $this->input->post('fullname'),
        'birthdate' => $this->input->post('birthdate'),
        'emailid' => $this->input->post('emailid'),
        'standard' => $this->input->post('standard'),
        'schoolcollegename' => $this->input->post('schoolcollegename'),
        'address' => $this->input->post('address'),
        'pincode' => $this->input->post('pincode'),
        'competitionid' => $this->input->post('competitionid'),
        // 'profile_image' => $this->input->post('profile_image'),
        'alternatemobno' => $this->input->post('alternatemobno'),
        'gender' => $this->input->post('gender'),
        'cityid' => $this->input->post('cityid'),
        'districtid' => $this->input->post('districtid'),
        'stateid' => $this->input->post('stateid'),
        'user_id' => $user_id,
        'userprofileid' => $this->input->post('userprofileid'),
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
      $data['birthdate'] = $info->birthdate;
      $data['emailid'] = $info->emailid;
      $data['standard'] = $info->standard;
      $data['schoolcollegename'] = $info->schoolcollegename;
      $data['address'] = $info->address;
      $data['pincode'] = $info->pincode;
      $data['competitionid'] = $info->competitionid;
      $data['fullname'] = $info->fullname;
      $data['alternatemobno'] = $info->alternatemobno;
      $data['gender'] = $info->gender;
      $data['cityid'] = $info->cityid;
      $data['cityid'] = $info->cityid;
      $data['stateid'] = $info->stateid;
      $data['districtid'] = $info->districtid;
      $data['user_id'] = $info->user_id;
      $data['userprofileid'] = $info->userprofileid;
      
    }

    
     $data['participate_list'] = $this->User_Model->participate_list('profileid');
     $data['pin'] = $this->User_Model->fetch_pincode();
     $data['competition'] = $this->User_Model->fetch_competition();
     $data['userprofile'] = $this->User_Model->fetch_userprofile();
     $data['state'] = $this->User_Model->fetch_state();
     // $data['city'] = $this->User_Model->fetch_city1($data['stateid']);
     // $data['district'] = $this->User_Model->fetch_district1($data['districtid']);
     $data['user_list'] = $this->User_Model->get_list_by_id('user_id', $quizweb_user_id,'','','','','user'); 
    
  
    
    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/participate_edit',$data);
    $this->load->view('Include/footer',$data);
  }

  // Delete Profile....
  public function delete_participate($profileid){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('profileid', $profileid, 'profile');
    // $this->User_Model->delete_info('user_id', $user_id, 'userprofile_master');
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
  // $data['pincode'] = $this->User_Model->fetch_pincode();
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
    
    
   // public function addassigncompetition_list(){

   // // $a = $_POST['user_id'];die();
  
   //   // $data = $this->User_Model->addassigncompetition_list('user_id');
   //   // echo (json_encode($data));

   //   // print_r($data);
   //  }

    public function addassigncompetition_list_test()
    {
      $userId = $_POST['user'];
     
      $data = $this->User_Model->addassigncompetition_list($userId);
      // echo (json_encode($data));

      foreach ($data as $value) {
        # code...
        ?> 
                <tr><td><?php  echo $value['user_id']; ?></td>
                <td><?php  echo $value['user_name']; ?></td>
              <td><button class="btn btn-primary btnaddcomp" name="user_id2" id="" value="<?php echo $value['user_id']; ?>" >Add </button></td></tr>  

             

        <?php

      }

     
    }


      //         <script type="text/javascript">
      //         $(document).ready(function(){
      //         $('.btnaddcomp').click(function(){
      //           var user_id=$(this).val();

      //           alert(user_id);
      //           });
      //          });
      //         </script>
      //  <?php
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
  // $data['pincode'] = $this->User_Model->fetch_pincode();

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

/*******************************    Class Information      ****************************/

  // Add New Class....
  public function add_class(){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == ''&& $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('tabinputtext', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      
      if($this->input->post('alluser')==1){
         
               $fromstand =0;
               $tostand =100;

      }else{
               $fromstand = $this->input->post('fromstand');
               $tostand = $this->input->post('tostand');
      }

      $save_data = array(
       
                'tabinputtext' => $this->input->post('tabinputtext'),
                'tabid' => $this->input->post('tabid'),
                'fromstand' => $fromstand,
                'tostand' => $tostand,
                'alluser' => $this->input->post('alluser'),
             
      );
      $this->User_Model->save_data('tabcompetition', $save_data);
      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'User/class_list');
    }

    // $data['competition'] = $this->User_Model->fetch_competition();
    // $data['level'] = $this->User_Model->fetch_level();


    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('User/class');
    $this->load->view('Include/footer');
  }

  // User List....
  public function class_list(){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $data['class_list'] = $this->User_Model->class_list('tabinputtextid');
    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/class_list',$data);
    $this->load->view('Include/footer',$data);
  }

  // Edit User....
  public function edit_class($tabinputtextid){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('tabinputtext', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $update_data = array(
               
                'tabinputtext' => $this->input->post('tabinputtext'),
                'tabid' => $this->input->post('tabid'),
                'fromstand' => $this->input->post('fromstand'),
                'tostand' => $this->input->post('tostand'),
                'alluser' => $this->input->post('alluser'),
               
               
      );
      $this->User_Model->update_info('tabinputtextid', $tabinputtextid, 'tabcompetition', $update_data);
      $this->session->set_flashdata('update_success','success');
      header('location:'.base_url().'User/class_list');
    }

    $level_info = $this->User_Model->get_info('tabinputtextid', $tabinputtextid, 'tabcompetition');
    if($level_info == ''){ header('location:'.base_url().'User/class_list'); }
    foreach($level_info as $info){
      $data['update'] = 'update';
      $data['tabinputtext'] = $info->tabinputtext;
      $data['tabid'] = $info->tabid;
      $data['fromstand'] = $info->fromstand;
      $data['alluser'] = $info->alluser;
      $data['tostand'] = $info->tostand;
     
    }
    
    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/class',$data);
    $this->load->view('Include/footer',$data);
  }

  // Delete User....
  public function delete_class($tabinputtextid){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('tabinputtextid', $tabinputtextid, 'tabcompetition');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'User/class_list');
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

/*************** view_question ******************************/
  public function view_question()
  {
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == ''&& $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
   /* $this->form_validation->set_rules('question', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {

       $array = $this->input->post('answertype');
       $data['ans']= implode(',',$array);

      // $data['json'] = json_encode($this->input->post('text'));

      $save_data = array(
        'question' => $this->input->post('question'),
        'answertype' => $data['ans'],
        'created_date' => date('Y-m-d H:i:s'),
        
      );
      $this->User_Model->save_data('dynamiccompetition', $save_data);

      $lastid = $this->db->insert_id();
       // print_r($lastid); die();

      $this->session->set_flashdata('save_success','success');
      // header('location:'.base_url().'User/quizanswer');
      $this->quizanswer($lastid);
    }*/
     // print_r($lastid); die();
    // $data['anslastid'] = $lastid 

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('User/viewque');
    $this->load->view('Include/footer');

  }
 
}
?>
