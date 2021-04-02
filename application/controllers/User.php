<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
  
  public function __construct(){
    parent::__construct();
    $this->load->model('User_Model');
    $this->load->helper('download');
    // $this->load->model('Transaction_Model');
  }

  public function logout(){
    $this->session->sess_destroy();
    header('location:'.base_url().'User');
  }
  
  // public function a(){
  //    $data['response'] = $this->User_Model->getRecords();
  // }
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
    $data['total_competitioncompleted'] =$this->User_Model->get_countcompleted_competition('competitionid','','','','','','competition');
    $data['total_competitionongoing'] =$this->User_Model->get_countongoing_competition('competitionid','','','','','','competition');
    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('User/dashboard', $data);
    $this->load->view('Include/footer', $data);
  }


/*******************   Dynamic Competition   ***********************/

 public function check_dynamic_question(){
    // echo "string";
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url()); }

    $competitionid = $this->input->post('competitionid');
    $question = $this->input->post('question');

    $check_dynamic_question = $this->User_Model->check_dynamic_question($competitionid,$question); 
// print_r($checkpoints_competition); die();
        if($check_dynamic_question > 0){

         echo "Question Already Exists." ; 
         // return false;


        }else{

          echo "true";

        }
}




  public function dynamiccompetition(){
              
     // print_r($_POST); die();

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
       $competitionid = $this->input->post('competitionid');
       $question = $this->input->post('question');
       $file_type = $this->input->post('file_type');

    $check_dynamic_question = $this->User_Model->check_dynamic_question($competitionid,$question); 
// print_r($checkpoints_competition); die();
        if(empty($check_dynamic_question) ){

      $save_data = array(
        'competitionid' => $this->input->post('competitionid'),
        'question' => $this->input->post('question'),
        'answertype' => $this->input->post('answertype'),
        'file_type' => $this->input->post('file_type'),
        // 'upload_file' => $this->input->post('upload_file'),
        'created_date' => date('Y-m-d H:i:s'),
        
      );
      $this->User_Model->save_data('dynamiccompetition', $save_data);

      $que_id = $this->db->insert_id();
       // print_r($que_id); die();
       // $this->session->set_flashdata('q_id',$que_id);


     // Upload image for quiz
        if($file_type==1){

               if($_FILES['upload_image']['name']){
              $time = time();
              // $image_name = 'profile_image_'.$time;
              $image_name = 'upload_image_'.$que_id.'_'.$time;


              $config['upload_path'] = 'assets/images/quizimage_files/';

              $config['allowed_types'] = 'jpg|jpeg|png';
              $config['file_name'] = $image_name;

              $filename = $_FILES['upload_image']['name'];
              $ext = pathinfo($filename, PATHINFO_EXTENSION);
              $this->upload->initialize($config); // if upload library autoloaded
             


                     

              if ($this->upload->do_upload('upload_image') && $que_id && $image_name && $ext && $filename) {

                    // print_r($image_name); 


                   // print_r($insert_id);

                  $image['upload_image'] = $image_name.'.'.$ext;
                  // print_r($image['upload_file']); die();
                  $this->User_Model->update_info('dynamiccompetitionid', $que_id, 'dynamiccompetition', $image);
                   // if($_POST['old_profile_image']){ unlink("assets/images/".$_POST['old_profile_image']); }
                  $this->session->set_flashdata('upload_success','File Uploaded Successfully');
       
        } 
        else 
        {
                    // print_r($image_name); 

           $error = $this->upload->display_errors();
            $this->session->set_flashdata('upload_error',$error);
        }
      }

        }

     // Upload video for quiz

        if($file_type==2){
                 if($_FILES['upload_file']['name']){
                    $time = time();
                    // $image_name = 'profile_image_'.$time;
                    $image_name = 'upload_file_'.$que_id.'_'.$time;


                    $config['upload_path'] = 'assets/images/quizvideo_files/';

                    $config['allowed_types'] = 'mp4|3pg|mkv|wmv';
                    $config['file_name'] = $image_name;

                    $filename = $_FILES['upload_file']['name'];
                    $ext = pathinfo($filename, PATHINFO_EXTENSION);
                    $this->upload->initialize($config); // if upload library autoloaded
                   


                           

                    if ($this->upload->do_upload('upload_file') && $que_id && $image_name && $ext && $filename) {

                          // print_r($image_name); 


                         // print_r($insert_id);

                        $image['upload_file'] = $image_name.'.'.$ext;
                        // print_r($image['upload_file']); die();
                        $this->User_Model->update_info('dynamiccompetitionid', $que_id, 'dynamiccompetition', $image);
                         // if($_POST['old_profile_image']){ unlink("assets/images/".$_POST['old_profile_image']); }
                        $this->session->set_flashdata('upload_success','File Uploaded Successfully');
             
              } 
              else 
              {
                          // print_r($image_name); 

                 $error = $this->upload->display_errors();
                  $this->session->set_flashdata('upload_error',$error);
              }
            }
        }

      $this->session->set_flashdata('save_success','success');

   

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
     
    }else{

          $this->session->set_flashdata('question_exists_error','error');
          header('location:'.base_url().'User/dynamiccompetition');
    }

      

      // $this->quizanswer($lastid);
    }
     // print_r($data['lastid']); die();

    $data['competition'] = $this->User_Model->fetch_competition_for_quiz();
    
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


    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }      
          // print_r($_POST);
    $competitionid =$this->input->post('competitionid');
    $user_id = $this->input->post('user_id');
    // $user_id = $this->input->post('user_id');
     
     // print_r($user_id);   die();
    $data['competition'] = $this->User_Model->fetch_competition();
    // $data['competitiontype'] = $this->User_Model->competition_list($competitionid);
     
    $data['user_list'] = $this->User_Model->fetch_userlist($competitionid);

    foreach ($data['user_list'] as $value) {
      $data['competitiontypeid'] = $value->competitiontypeid;

      // print_r($competitiontypeid); 
    }
    $data['fetch_userlist_quiz'] = $this->User_Model->fetch_userlist_quiz($competitionid);
    
    $data['fetch_userlist_othercompetition'] = $this->User_Model->fetch_userlist_othercompetition($competitionid);

    $data['userscore'] = $this->User_Model->check_userscore($competitionid);

    foreach ($data['userscore'] as $value) {
      $data['userid'] = $value->user_id;
      $data['competitionid'] =$value->competitionid;
      $data['total_question'] = $value->total_question;
      $data['correct_answer'] = $value->correct_answer;
      $data['score_percentage'] = $value->score_percentage;
    }
    // print_r($data['fetch_userlist_quiz']); die();

    $data['competitionid'] =  $competitionid;
    // $data['pincodeid'] =  $pincode;
    // $data['user_id'] =  $user_id;

      $this->load->view('Include/head',$data);
      $this->load->view('Include/navbar', $data);
      $this->load->view('User/quiz_user_list',$data);
      $this->load->view('Include/footer',$data);
    }


      public function admincheck_quiz()
    { 

      // print_r($_POST); die();
      // echo $this->session->userdata('quizweb_user_id');
      // echo "<br>";
      // echo $this->session->userdata('quiz_id'); 
      // echo "<br>";

      $user_id = $this->session->userdata('user_id');  
      $competition_id = $this->session->userdata('competitionid');
      $score_admincheck_que = $this->session->userdata('question');

      // echo $competition_id; die();
       $totalquest  = $this->input->post('totalquest');
       $this->session->set_userdata('totalquest',$totalquest);

      // print_r($totalquest); die();
      // echo $this->session->set_userdata('totalquest',$totalquest); die();
     $check =1;
 

      foreach($_POST as $key => $value)
      {  
          $question_id =  $key;
          $checkanswer =  $value;
      // echo $key; //   echo "<br>"; //   echo $value; //   echo "<br>";
         $this->User_Model->admincheck_quiz($user_id,$competition_id,$question_id,$checkanswer);

      }
      $data['result'] = $this->User_Model->quize_get($competition_id,$user_id);
    foreach ($data['result'] as $value) {
      $question = $value['question_id']; 
      // print_r($question);

     // count($question);
     $score_admincheck_que = $this->User_Model->score_admincheck_question($user_id,$competition_id,$question);


 // score_admincheck_question

    }
    // print_r($score_admincheck_que); 

    // echo $this->session->set_userdata('question',$score_admincheck_que);

       $score_admincheck_answer = $this->User_Model->score_admincheck_answer($user_id,$competition_id,$check);

      $score_percentage = ($score_admincheck_answer/$score_admincheck_que) * 100 ;

       // print_r($score_percentage); die();

       $save_data = array(
        'user_id' => $user_id,
        'competitionid' => $competition_id,
        'total_question' => $score_admincheck_que,
        'correct_answer' => $score_admincheck_answer,
        'score_percentage' => $score_percentage,
       
      );
       // print_r($save_data); die();
     $this->User_Model->save_data('userscore_master', $save_data);




          
      $this->session->set_flashdata('admincheck_success','success');
      $this->session->unset_userdata('quiz_id');

      header('location:'.base_url().'User/quiz_user_list/'.$score_admincheck_que);
// score_quiz_display



    }

   public function quiz_display(){
    // print_r($_POST); die();

  // echo "string";
     $competitionid = $this->uri->segment(3);
    $this->session->set_userdata('competitionid',$competitionid);

    // print_r($this->session->set_userdata('competitionid',  $competitionid)); 
  
     $user_id = $this->uri->segment(4);
    $this->session->set_userdata('user_id',$user_id);

    // $checkanswer = 1;
   // print_r($user_id); die();

    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == ''&& $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
   
    $data['competition'] = $this->User_Model->fetch_competition();
    $data['users'] = $this->User_Model->fetch_user_name($user_id);
    $data['result'] = $this->User_Model->quize_get($competitionid,$user_id);
  
 
    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/quiz_display',$data);
    $this->load->view('Include/footer',$data);
  }

  /************************************ score list display***********************/
     public function score_quiz_display()
    { 

      // print_r($_POST); die();
      // echo $this->session->userdata('quizweb_user_id');
      // echo "<br>";
      // echo $this->session->userdata('quiz_id'); 
      // echo "<br>";

      $user_id = $this->session->userdata('user_id');  
      $competition_id = $this->session->userdata('competitionid');

      $totalquest = $this->session->userdata('totalquest');  
    

    // print_r($totalquest); die();

      $data['result'] = $this->User_Model->quize_get($competitionid,$user_id);
      foreach ($data['result'] as $value) {
             $question = $value['question_id']; 

       }

     //answer count by user_id
      $score_admincheck_answer = $this->User_Model->score_admincheck_answer($user_id,$competitionid,$checkanswer);
          
      // $this->session->set_flashdata('admincheck_success','success');
      $this->session->unset_userdata('quiz_id');

      header('location:'.base_url().'User/quiz_user_list');
     
    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/score_quiz_display',$data);
    $this->load->view('Include/footer',$data);

    }


  /**************************** download uploaded file **************************/

    public function download_user_uploadfiles(){

  // echo "string";
     $competitionid = $this->uri->segment(3);
    // $this->session->set_userdata('competitionid',$competitionid);

  
     $user_id = $this->uri->segment(4);
    // $this->session->set_userdata('competitionid',$user_id);


   // print_r($user_id); die();

    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == ''&& $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }

    $data['users'] = $this->User_Model->fetch_user_name($user_id);
    $data['result'] = $this->User_Model->uploadfile_download($competitionid);
    $data['competitionName'] = $this->User_Model->competitionName($competitionid);

   foreach ($data['competitionName'] as $value) {
       $data['title'] = $value['title'];
    
   }
  // print_r($data['competitionName']); die();

      foreach ($data['result'] as  $value) {

       $data['uploadaudio'] = $value['upload_audio'];
       $data['uploadfile'] = $value['uploadfile'];
       $data['uploadvedio'] = $value['upload_vedio'];
       $data['uploadimage'] = $value['upload_image'];
       $data['competitionid'] = $value['competitionid'];
       $data['file_format'] = $value['file_format'];
    
       
      
       // print_r($data['uploadimage']);

      }
    
    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/download_user_uploadfiles',$data);
    $this->load->view('Include/footer',$data);
  }
  public function download($quiz_id){
        $quiz_id = $this->uri->segment(3);

        $fileinfo = $this->User_Model->download($quiz_id);
        foreach ($fileinfo as $value) {
          $filename = $value['upload_image'];
        }
        $name = $filename;
        $data = file_get_contents(base_url().'assets/images/competition_images/'.$filename); 
        force_download($name, $data); 
    
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

     $data['fetch_dynamicquizlist'] = $this->User_Model->fetch_dynamicquizlist($dynamiccompetitionid);

       foreach ($data['fetch_dynamicquizlist'] as $value) {
           $file_type = $value['file_type'];
       }
      // print_r($file_type); die();

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
          // Upload image for quiz
        if($file_type==1){

               if($_FILES['upload_image']['name']){
              $time = time();
              // $image_name = 'profile_image_'.$time;
              $image_name = 'upload_image_'.$dynamiccompetitionid.'_'.$time;


              $config['upload_path'] = 'assets/images/quizimage_files/';

              $config['allowed_types'] = 'jpg|jpeg|png';
              $config['file_name'] = $image_name;

              $filename = $_FILES['upload_image']['name'];
              $ext = pathinfo($filename, PATHINFO_EXTENSION);
              $this->upload->initialize($config); // if upload library autoloaded
             


                     

              if ($this->upload->do_upload('upload_image') && $dynamiccompetitionid && $image_name && $ext && $filename) {

                    // print_r($image_name); 


                   // print_r($insert_id);

                  $image['upload_image'] = $image_name.'.'.$ext;
                  // print_r($image['upload_file']); die();
                  $this->User_Model->update_info('dynamiccompetitionid', $dynamiccompetitionid, 'dynamiccompetition', $image);
                   // if($_POST['old_profile_image']){ unlink("assets/images/".$_POST['old_profile_image']); }
                  $this->session->set_flashdata('upload_success','File Uploaded Successfully');
       
        } 
        else 
        {
                    // print_r($image_name); 

           $error = $this->upload->display_errors();
            $this->session->set_flashdata('upload_error',$error);
        }
      }

        }

     // Upload video for quiz

        if($file_type==2){

          // print_r($file_type); die();
                 if($_FILES['upload_file']['name']){
                    $time = time();
                    // $image_name = 'profile_image_'.$time;
                    $image_name = 'upload_file_'.$dynamiccompetitionid.'_'.$time;


                    $config['upload_path'] = 'assets/images/quizvideo_files/';

                    $config['allowed_types'] = 'mp4|3pg|mkv|wmv';
                    $config['file_name'] = $image_name;

                    $filename = $_FILES['upload_file']['name'];
                    $ext = pathinfo($filename, PATHINFO_EXTENSION);
                    $this->upload->initialize($config); // if upload library autoloaded
                   


                           

                    if ($this->upload->do_upload('upload_file') && $dynamiccompetitionid && $image_name && $ext && $filename) {

                          // print_r($image_name); 


                         // print_r($insert_id);

                        $image['upload_file'] = $image_name.'.'.$ext;
                        // print_r($image['upload_file']); die();
                        $this->User_Model->update_info('dynamiccompetitionid', $dynamiccompetitionid, 'dynamiccompetition', $image);
                         // if($_POST['old_profile_image']){ unlink("assets/images/".$_POST['old_profile_image']); }
                        $this->session->set_flashdata('upload_success','File Uploaded Successfully');
             
              } 
              else 
              {
                          // print_r($image_name); 

                 $error = $this->upload->display_errors();
                  $this->session->set_flashdata('upload_error',$error);
              }
            }
        }

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
      $data['file_type'] = $info->file_type;
      $data['upload_file'] = $info->upload_file;
      $data['upload_image'] = $info->upload_image;
      // $data['pincode'] = $info->pincode;
      // $data['competitionid'] = $info->competitionid;
    }

    

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

/******************  Competition Type Information      **********************/

public function check_competitiontype(){
    // echo "string";
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url()); }

    $competitiontype = $this->input->post('competitiontype');

    $check_competitiontype = $this->User_Model->check_competitiontype($competitiontype); 
// print_r($checkpoints_competition); die();
        if($check_competitiontype > 0){

         echo "Competition Type Already Exists." ; 
         // return false;


        }else{

          echo "true";

        }
}


  // Add New Competition Type....
  public function add_competitiontype(){
    
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == ''&& $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('competitiontype', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
       $competitiontype = $this->input->post('competitiontype');

    $check_competitiontype = $this->User_Model->check_competitiontype($competitiontype); 
// print_r($checkpoints_competition); die();
        if(empty($check_competitiontype)){

      $save_data = array(
   
        'competitiontype' => $this->input->post('competitiontype'),
        'created_date' => date('Y-m-d H:i:s'),
        
      );
      $this->User_Model->save_data('competitiontype', $save_data);
      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'User/competitiontype_list');

    }else{
       $this->session->set_flashdata('competitiontype_exists_error','error');
      header('location:'.base_url().'User/add_competitiontype');
    }
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
  public function add_bulk(){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == ''&& $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    
    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('User/add_bulk');
    $this->load->view('Include/footer');
  }

  public function importFile(){

    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == ''&& $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
  
      if ($this->input->post('submit')) {
                 
                $path = 'assets/uploads/';
                require_once APPPATH . "/third_party/PHPExcel.php";
                $config['upload_path'] = $path;
                $config['allowed_types'] = 'xlsx|xls|csv';
                $config['remove_spaces'] = TRUE;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);            
                if (!$this->upload->do_upload('uploadFile')) {
                    $error = array('error' => $this->upload->display_errors());
                } else {
                    $data = array('upload_data' => $this->upload->data());
                }
                if(empty($error)){
                  if (!empty($data['upload_data']['file_name'])) {
                    $import_xls_file = $data['upload_data']['file_name'];
                } else {
                    $import_xls_file = 0;
                }
                $inputFileName = $path . $import_xls_file;
                 
                try {
                    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
                    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
                    $objPHPExcel = $objReader->load($inputFileName);
                    $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
                    $flag = true;
                    // $i=0;

                    // $inserdata="";
                    foreach ($allDataInSheet as $value){
                      //validation for excel sheet wrong
                      // $this->form_validation->set_rules('user_email', $value['C'], 'trim|required');
                      //  if ($this->form_validation->run() != FALSE) { 

                      
                      // if($flag){
                      //   $flag =false;
                      //   continue;
                      // } 
        // 'company_id' => $quizweb_company_id,

                      $companyid = $quizweb_company_id;
                      $username = $value['A'];
                      $usermobile = $value['B'];
                      $useremail = $value['C'];
                      $userpassword = md5($value['D']);
                      $userpincode = $value['E'];
                      // $indata[$i]['user_addedby'] = $i;
                      $isadmin = 1;
                      $rollid = 2;

                     $userm = $this->User_Model->check_reg_m($usermobile);
                     $usere1 = $this->User_Model->check_reg1_e($useremail);
                     $usere2 = $this->User_Model->check_regdb1_e($useremail);

                     // print_r($usere2); die();

                     if(empty($userm) || $userm==""){ 

                       if(empty($usere1) || $usere1==""){ 

                        if(empty($usere2) || $usere2==""){ 
                     // print_r($usere2); die();


                      $sql1 = "INSERT INTO user (`company_id`, `user_name`, `user_mobile`, `user_email`, `user_password`, `user_pincode`,`is_admin`,`roll_id`)
                        VALUES ('$companyid', '$username',  '$usermobile', '$useremail', '$userpassword', '$userpincode','$isadmin', '$rollid');";
                      $query1 = $this->db->query($sql1); 
                      // print_r($query1); die();

                    // $result = $this->User_Model->save_data("user",$indata); 
                    // $result = $this->User_Model->importData($sql1); 

                    // print_r($result); die();
                   
                      $sql = "SELECT * FROM user ORDER BY `user_id` DESC LIMIT 1";
                      $query = $this->db->query($sql); 
                      $result = $query->result_array();
                      $us_id = $result[0]['user_id']; 
                      $us_name = $result[0]['user_name']; 
                      $us_mobile = $result[0]['user_mobile']; 
                      $us_email = $result[0]['user_email']; 
                      $us_pincode = $result[0]['user_pincode']; 
                      $us_password = $result[0]['user_password']; 

                      $data_view = array(
                          'user_id' => $us_id,
                          'user_name' => $us_name,
                          'user_mobile' => $us_mobile,
                          'user_email' => $us_email,

                          // 'user_password' => md5($password),
                          'user_pincode' => $us_pincode, 
                          'profile_submitted' =>0, 
                          'check_one' =>0,          
                      );

                    $this->User_Model->save_data('userprofile_master',$data_view);

                     $data_viewdb1 = array(
                          'user_id' => $us_id,
                          'customer_id'   => $this->generator(15),
                          'customer_name' => $us_name,
                          'first_name' => $us_name,
                          'customer_mobile' => $us_mobile,
                          'customer_email' => $us_email,
                          'password' =>  $us_password,
                          // 'user_pincode' => $this->input->post('user_pincode'), 
                          // 'profile_submitted' =>0,          
                      );
                      // print_r($data_viewdb1); die();
                    $this->User_Model->save_data1('customer_information',$data_viewdb1);

                    $this->session->set_flashdata('import_success','success');
                      header('location:'.base_url().'User/user_list');

                  }else{

                      $sql1 = "INSERT INTO user (`company_id`, `user_name`, `user_mobile`, `user_email`, `user_password`, `user_pincode`,`is_admin`,`roll_id`)
                        VALUES ('$companyid', '$username',  '$usermobile', '$useremail', '$userpassword', '$userpincode','$isadmin', '$rollid');";
                      $query1 = $this->db->query($sql1); 
                                      
                      $sql = "SELECT * FROM user ORDER BY `user_id` DESC LIMIT 1";
                      $query = $this->db->query($sql); 
                      $result1 = $query->result_array();
                      $us_id = $result1[0]['user_id']; 
                      $us_name = $result1[0]['user_name']; 
                      $us_mobile = $result1[0]['user_mobile']; 
                      $us_email = $result1[0]['user_email']; 
                      $us_pincode = $result1[0]['user_pincode']; 
                      $us_password = $result1[0]['user_password']; 

                      $data_view = array(
                          'user_id' => $us_id,
                          'user_name' => $us_name,
                          'user_mobile' => $us_mobile,
                          'user_email' => $us_email,

                          // 'user_password' => md5($password),
                          'user_pincode' => $us_pincode, 
                          'profile_submitted' =>0, 
                          'check_one' =>0,          
                      );

                    $this->User_Model->save_data('userprofile_master',$data_view);

                    $update_datadb1 = array(
                     'user_id' => $us_id,
                  
                     );
                      // print_r($update_datadb1); die();

                    $this->User_Model->update_info1('customer_email', $us_email, 'customer_information', $update_datadb1);

                      $this->session->set_flashdata('import_success','success');
                      header('location:'.base_url().'User/user_list');
                      // echo $result; die();
                      // echo "ERROR !";
                      // $this->session->set_flashdata('import_error','error');
                      // header('location:'.base_url().'User/add_bulk');
                    } 

                        }
                    // else{
                        //       // echo $result; die();
                        //       // echo "ERROR !";
                        //       $this->session->set_flashdata('import_error','error');
                        //       header('location:'.base_url().'User/add_bulk');
                        //     } 
                      }
                        // else{
                  //             // echo $result; die();
                  //             // echo "ERROR !";
                  //             $this->session->set_flashdata('import_error','error');
                  //             header('location:'.base_url().'User/add_bulk');
                  // } 
                   //complete    // print_r($us_id); die();

                      // $i++;

                    // }else{
                    //   echo "your excel sheet format is wrong";
                    // }
                    }   
                if($result){
                      // echo "Imported successfully";
                      $this->session->set_flashdata('import_success','success');
                      header('location:'.base_url().'User/user_list');
                      
                    }elseif($result1){
                      // echo "Imported successfully";
                      $this->session->set_flashdata('import_success','success');
                      header('location:'.base_url().'User/user_list');
                    }else{
                      // echo $result; die();
                      // echo "ERROR !";
                      $this->session->set_flashdata('import_error','error');
                      header('location:'.base_url().'User/add_bulk');
                    }  
                               
      
              } catch (Exception $e) {
                   die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
                            . '": ' .$e->getMessage());
                }
              }else{
                  echo $error['error'];
                }
                 
                 
        }
         $this->load->view('Include/head');
         $this->load->view('Include/navbar');
         $this->load->view('User/add_bulk');
         $this->load->view('Include/footer');
    }

  // Add New User....
  public function add_user(){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == ''&& $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('user_name', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {

      $password = $this->input->post('user_password');
      $emailAddress = $this->input->post('user_email');

      $email = $this->input->post('user_email');


      $email2 = $this->User_Model->check_regdb1_e($email);
      
      // print_r($email2); die();
  if(empty($email2) || $email2==""){  

      $save_data = array(
        'company_id' => $quizweb_company_id,
        'user_name' => $this->input->post('user_name'),
        'user_address' => $this->input->post('user_address'),
        'user_mobile' => $this->input->post('user_mobile'),
        'user_city' => $this->input->post('user_city'),
        'user_email' => $this->input->post('user_email'),
        'user_password' => md5($password),
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
            'user_email' => $this->input->post('user_email'),

            // 'user_password' => md5($password),
            'user_pincode' => $this->input->post('user_pincode'), 
            'profile_submitted' =>0, 
            'check_one' =>0,          
        );

      $this->User_Model->save_data('userprofile_master',$data_view);

       $data_viewdb1 = array(
            'user_id' => $id,
            'customer_id'   => $this->generator(15),
            'customer_name' => $this->input->post('user_name'),
            'first_name' => $this->input->post('user_name'),
            'customer_mobile' => $this->input->post('user_mobile'),
            'customer_email' => $this->input->post('user_email'),
            'password' =>  md5("gef".$password),
            // 'user_pincode' => $this->input->post('user_pincode'), 
            // 'profile_submitted' =>0,          
        );
        // print_r($data_viewdb1); die();
      $this->User_Model->save_data1('customer_information',$data_viewdb1);


    }else{
       $save_data = array(
        'company_id' => $quizweb_company_id,
        'user_name' => $this->input->post('user_name'),
        'user_address' => $this->input->post('user_address'),
        'user_mobile' => $this->input->post('user_mobile'),
        'user_city' => $this->input->post('user_city'),
        'user_email' => $this->input->post('user_email'),
        'user_password' => md5($password),
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
            'user_email' => $this->input->post('user_email'),

            // 'user_password' => md5($password),
            'user_pincode' => $this->input->post('user_pincode'), 
            'profile_submitted' =>0,  
            'check_one' =>0,         
        );

      $this->User_Model->save_data('userprofile_master',$data_view);

       $update_datadb1 = array(
         'user_id' => $id,
      
         );
          // print_r($update_datadb1); die();

        $this->User_Model->update_info1('customer_email', $emailAddress, 'customer_information', $update_datadb1);

    }
      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'User/user_list');
    }
    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('User/user');
    $this->load->view('Include/footer');
  }
    public function competitionlist_by_userid(){
    // echo $_POST['userid']; die();
   $user_id=$this->input->post('user_id');
   $data=$this->User_Model->participate_list($user_id);
   // echo (json_encode($data));
  foreach ($data as  $val) {
    $name = $val['user_name'];
  }
    // print_r($name); die();
  if(!empty($name)){ 
 ?><div class="">
          <label for="recipient-name"  class="col-form-label"><b>Name : </b></label>
        <label for="recipient-name" id="titlell" type="text" class="col-form-label"><?php echo $name; ?></label>
          </div>
            <div class="">
          
             <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th class="wt_50">Sr No.</th>
                   <th>Competition Title</th>
                         
                 </tr>
                </thead>
                <tbody>
                  <?php $i = 0;
                  foreach ($data as $list) {
                  // print_r($list->competitiontypeid); 

                    $i++; ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                
                    <td><?php echo $list['title'] ?></td>
                  <?php } ?>
                  </tr>

                </tbody>
              </table>
         </div>
          <?php 
}else{
  echo "This user does not participate yet in any competitions.";
}
  
    
  }
  // User List....
  public function user_list(){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $data['user_list'] = $this->User_Model->user_list($quizweb_user_id);
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
        'file_size' => $this->input->post('file_size'),
        'uploadfile'=>   $data['uploadfile'],
        'upload_audio'=>   $data['upload_audio'],
        'upload_image'=>   $data['upload_image'],
        'upload_vedio'=>   $data['upload_vedio'],
        'email'=>  $data['email'],
        'emailaddress'=>  $this->input->post('emailaddress'),
        'whatsapp'=>  $data['whatsapp'],
        'whatsappnumber'=>  $this->input->post('whatsappnumber'),
        // 'points'=>  $this->input->post('points'),
        'competitiontypeid'=>  $this->input->post('competitiontypeid'),
        // 'conversionpoints'=>  $this->input->post('conversionpoints'),
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
              $config['maintain_ratio'] = TRUE;
              $config['width']    = 509;
              $config['height']   = 339;
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
            header('location:'.base_url().'User/add_competition');
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
   public function fetch_class_age(){
    // echo $_POST['competitionid']; die();
   $tabinputtextid=$this->input->post('tabinputtextid');
   $data=$this->User_Model->fetch_class_age($tabinputtextid);
   echo (json_encode($data));
   foreach ($data as  $value) {
     $from = $value['fromage'];
     $to = $value['toage'];
   }


   // echo json_encode(array("a" => $value['fromage'], "b" => $value['toage'])); 
  
 }
 
   public function competitionName_list(){
    // echo $_POST['competitionid']; 
   $competitionid=$this->input->post('competitionid');
   $data=$this->User_Model->competitionName_list($competitionid);
   // print_r($data);

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
          <label for="recipient-name"  class="col-form-label">Age :</label>
          <label>From</label>
          <label for="recipient-name" id="titlell" type="text" class="col-form-label"><?php echo $value['fromage']; ?></label>
          <label>To</label>
          <label for="recipient-name" id="titlell" type="text" class="col-form-label"><?php echo $value['toage']; ?></label>
          </div>
            <div class="">
          <label for="recipient-name"  class="col-form-label">Competition End Date :</label>
          <label for="recipient-name" id="titlell" type="text" class="col-form-label"><?php $newDate = date("d-m-Y", strtotime($value['enddate'])); ?><?php echo $newDate ?></label>
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

  public function userlist_by_competitionid(){
    // echo $_POST['userid']; die();
   $competitionid=$this->input->post('competitionid');
   $data=$this->User_Model->userlist_by_competitionid($competitionid);
   // echo (json_encode($data));
    foreach ($data as  $val) {
      $name = $val['title'];
    }
      // print_r($name); die();
    if(!empty($name)){ 
    ?>               
             <div class="">
                <label for="recipient-name"  class="col-form-label"><b> Competition Title : </b></label>
                 <label for="recipient-name" id="titlell" type="text" class="col-form-label"><?php echo $name; ?></label>
             </div>
             <div class="">
             <table id="example3" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th class="wt_50">Sr No.</th>
                   <th>Participant Name</th>
                   <th>Email Address</th>
                   <th>City</th>
                         
                 </tr>
                </thead>
                <tbody>
                  <?php $i = 0;
                  foreach ($data as $list) {
                  // print_r($list->competitiontypeid); 

                    $i++; ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                
                    <td><?php echo $list['user_name'] ?></td>
                    <td><?php echo $list['emailid'] ?></td>
                    <td><?php echo $list['cityid'] ?></td>
                  <?php } ?>
                  </tr>

                </tbody>
              </table>
             </div>

  <?php 
  }else{
    echo "No one has participated in this competition yet.";
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

   public function competition_list_complete(){

    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $data['competition_list_complete'] = $this->User_Model->competition_list_complete('competitionid');
    
    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/competition/competition_list_complete',$data);
    $this->load->view('Include/footer',$data);
  }

   public function competition_list_ongoing(){

    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $data['competition_list_ongoing'] = $this->User_Model->competition_list_ongoing('competitionid');
    
    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/competition/competition_list_ongoing',$data);
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
        'file_size' => $this->input->post('file_size'),
        'uploadfile'=>   $data['uploadfile'],
        'upload_audio'=>   $data['upload_audio'],
        'upload_image'=>   $data['upload_image'],
        'upload_vedio'=>   $data['upload_vedio'],
        'email'=>  $data['email'],
        'emailaddress'=>  $this->input->post('emailaddress'),
        'whatsapp'=>  $data['whatsapp'],
        'whatsappnumber'=>  $this->input->post('whatsappnumber'),
        'competitiontypeid'=>  $this->input->post('competitiontypeid'),
        // 'points'=>  $this->input->post('points'),
        // 'conversionpoints'=>  $this->input->post('conversionpoints'),
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
        'file_size' => $this->input->post('file_size'),
        'uploadfile'=>   $data['uploadfile'],
        'upload_audio'=>   $data['upload_audio'],
        'upload_image'=>   $data['upload_image'],
        'upload_vedio'=>   $data['upload_vedio'],
        'email'=>  $data['email'],
        'emailaddress'=>  $this->input->post('emailaddress'),
        'whatsapp'=>  $data['whatsapp'],
        'whatsappnumber'=>  $this->input->post('whatsappnumber'),
        'competitiontypeid'=>  $this->input->post('competitiontypeid'),
        // 'points'=>  $this->input->post('points'),
        // 'conversionpoints'=>  $this->input->post('conversionpoints'),
        'gender'=>  $this->input->post('gender'),

        'created_date' => date('Y-m-d H:i:s'),
       


        // 'user_addedby' => $quizweb_user_id,
      );
    }
      // print_r($update_data); die();

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
              $config['image_library'] = 'gd2';

              $config['upload_path'] = 'assets/images/competition/';
              $config['allowed_types'] = 'jpg|jpeg|png|gif';
              $config['file_name'] = $image_name;
              $config['maintain_ratio'] = TRUE;
              $config['width']         = 509;
              $config['height']       = 399;

                     
              $filename = $_FILES['photo']['name'];

              $ext = pathinfo($filename, PATHINFO_EXTENSION);

              $this->load->library('image_lib', $config);

              $this->image_lib->resize(); 

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
      $data['file_size'] = $info->file_size;
      // $data['conversionpoints'] = $info->conversionpoints;
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
function competition_active(){
    $competitionid = $this->input->get("competitionid");
    $status = $this->input->get("active");

    if($status==1){
      $s = 0;
    }else
    {
      $s=1;
    }

    $update_data = array(
      
        'status' => $s,
      );

      // print_r($update_data); die();

     $this->User_Model->update_info('competitionid', $competitionid, 'competition', $update_data);

     header('location:'.base_url().'User/competition_list');

   
 
}

  // Delete Competition....
  // public function delete_competition($competitionid){
  //   $quizweb_user_id = $this->session->userdata('quizweb_user_id');
  //   $quizweb_company_id = $this->session->userdata('quizweb_company_id');
  //   $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
  //   if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
  //   $this->User_Model->delete_info('competitionid', $competitionid, 'competition');
  //   $this->session->set_flashdata('delete_success','success');
  //   header('location:'.base_url().'User/competition_list');
  // }

/***********************    Participate Information     **************************/

public function check_competition_validation(){

    $userparticipatetype="";

    $user_id = $this->session->userdata('user_id');
    // $competitionid = $this->session->userdata('competitionid');

    $competitionid = $this->input->post('competitionid');
    $standard = $this->input->post('standard');
    $gender = $this->input->post('gender');
    $birthdate = $this->input->post('birthdate');

    // print_r($competitionid);
     // $competition_info = $this->User_Model->get_list_by_id('competitionid', $competitionid,'','','','','','','competition'); 

    $competition_info = $this->User_Model->getcompetition_info($competitionid);

    $check_allready_participate = $this->User_Model->check_participate($user_id,$competitionid);

   $profile_info = $this->User_Model->get_info('user_id', $user_id, 'userprofile_master');


       // print_r($competition_info);die();

      foreach ($competition_info as $value) {

       $fromstand = $value->fromstand;
       $tostand = $value->tostand;
       $alluser = $value->alluser;

       $userparticipatetype = $value->gender; //all[3],male[1],female[2]
       $fromage = $value->fromage;
       $toage = $value->toage;
       // print_r($userparticipatetype);die();

     }

     foreach ($profile_info as  $value) {
       
       // $standard = $value->standard;
       $parentname = $value->parentname;
       $fullname = $value->fullname;
       // $birthdate = $value->birthdate;
       $schoolcollegename = $value->schoolcollegename;
       $emailid = $value->emailid;
       $address = $value->address;
       $pincode = $value->pincode;
       $profile_image = $value->profile_image;
       $alternatemobno = $value->alternatemobno;
       $gender = $value->gender; // male[1],female[2]
       $cityid = $value->cityid;
       $districtid = $value->districtid;
       $stateid = $value->stateid;
       $profile_submitted = $value->profile_submitted;
       $userprofileid = $value->userprofileid;

       // print_r($gender); die();

        $sql="SELECT DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),birthdate)), '%Y')+0 AS Age FROM userprofile_master where (user_id = $user_id && gender = $userparticipatetype)";    
        $query = $this->db->query($sql);
        $result = $query->result_array();
       // print_r($result); die();

        
        $age = 0;
        foreach ($result as $value) {
         $age = $value['Age'];
        }

        $y = "18";
    
      
     }

      // if($profile_submitted == 1){
     // print_r($profile_info); die(); 
       // echo "true";  || $userparticipatetype == $gender && $age >= $y
     if($standard >= $fromstand && $standard <= $tostand || $userparticipatetype == $gender && $age >= $y){
     // print_r($tostand); die();
          echo "true";

      }
      else{

        echo "User Can not Participate in this Competition";
       
     }


    // }else{
  //       echo "Please complete your profile before participating in the competition";
  // }
         // if(empty($check_allready_participate)){
            
         //    echo "true";

         //    }
         //    else{

         //    echo "User is Already Participated in this Competition";
       
         //    }

} 
//check standard and gender and birthdate
public function check_userdata_profile(){
    // echo "string";
    $user_id = $this->session->userdata('user_id');
    

    $birthdate = $this->input->post('birthdate');
    $standard = $this->input->post('standard');
    $gender = $this->input->post('gender');
    $current_date = date("Y-m-d");



    //difference between bithdate and current date in year

    $date1 = date("Y-m-d",strtotime($current_date));
    $date2 = date("Y-m-d",strtotime($birthdate));

    $diff = abs(strtotime($date2) - strtotime($date1));

    $years = floor($diff / (365*60*60*24));

    $check_userdata = $this->User_Model->check_userdata($user_id,$birthdate,$standard,$gender); 
    foreach ($check_userdata as $value) {
      $birth = $value['birthdate'];
      $standard = $value['standard'];
      $gender = $value['gender'];
    }

   // print_r($check_userdata); die();
    

    if($years >= 18 && $gender==1 && $standard==14 ||$years >= 18 && $gender==2 && $standard==15 || $years < 18 && $gender==1 && $standard < 14 ||$years < 18 && $gender==2 && $standard < 14){

      echo "correct";
       $this->session->set_flashdata('updateProfile_success','success');
      // header('location:'.base_url().'WebsiteController');


    }else{
      echo "Please enter correct birthdate,gender and standard.";
      // header('location:'.base_url().'WebsiteController/edit_profile');

     // $this->session->set_flashdata('message','Please Enter Correct Birthdate, Gender and Standard');


    }

   // print_r($standard); die();
 
   }
 // Add New Profile....
  public function add_participate(){

    // $user_id = $this->uri->segment(3);
    // print_r($user_id);die();
    // $userparticipatetype="";


    $user_id = $this->session->userdata('user_id');
    // $competitionid = $this->session->userdata('competitionid');


   // echo $user_id; die();

    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }

        $competitionid = $this->input->post('competitionid');
        $standard = $this->input->post('standard');
        $gender = $this->input->post('gender');
        $birthdate = $this->input->post('birthdate');

        // print_r($gender); die();

       $profile_info = $this->User_Model->get_info('user_id', $user_id, 'userprofile_master');

        $competition_info = $this->User_Model->getcompetition_info($competitionid);

        $check_allready_participate = $this->User_Model->check_participate($user_id,$competitionid);

        // print_r($check_allready_participate); die();

        // $userparticipatetype="";
        foreach ($competition_info as $value) {

       $fromstand = $value->fromstand;
       $tostand = $value->tostand;
       $alluser = $value->alluser;

       $userparticipatetype = $value->gender; //all[3],male[1],female[2]
       $fromage = $value->fromage;
       $toage = $value->toage;
       // print_r($userparticipatetype);die();

     }

     foreach ($profile_info as  $value) {
       
       // $standard = $value->standard;
       $parentname = $value->parentname;
       $fullname = $value->fullname;
       // $birthdate = $value->birthdate;
       $schoolcollegename = $value->schoolcollegename;
       $emailid = $value->emailid;
       $address = $value->address;
       $pincode = $value->pincode;
       $profile_image = $value->profile_image;
       $alternatemobno = $value->alternatemobno;
       // $gender = $value->gender; // male[1],female[2]
       $cityid = $value->cityid;
       $districtid = $value->districtid;
       $stateid = $value->stateid;
       $profile_submitted = $value->profile_submitted;
       $userprofileid = $value->userprofileid;

       // print_r($gender); die();
      
        // $sql="SELECT DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),birthdate)), '%Y')+0 AS Age FROM userprofile_master where (user_id = $user_id && gender = $gender)";    
        // $query = $this->db->query($sql);
        // $result = $query->result_array();
        
        // $age = 0;
        // foreach ($result as $value) {
        //  $age = $value['Age'];
        // }

        // $y = "18";
    
      
     }


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

     // if($standard >= $fromstand && $standard <= $tostand || $userparticipatetype == $gender && $age >= $y ){


      if(empty($check_allready_participate)){

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
   }else{

      $this->session->set_flashdata('profileAlready_error','error');
      header('location:'.base_url().'User/add_participate');
    
    }
  // }else{
  //       // print_r($standard); die();

  //     $this->session->set_flashdata('class_error','error');
  //     header('location:'.base_url().'User/add_participate');
  // }

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
    $fetch_profile_list = $this->User_Model->fetch_profile_list($user_id);

    foreach ($fetch_profile_list as $value) {
      $competitionid = $value->competitionid;
      $this->session->set_userdata('competitionid',  $competitionid);

        // print_r($competitionid); 

    }
    // die();

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

    $user_id = $this->uri->segment(3);


    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }

    $data['participate_list'] = $this->User_Model->participate_list($user_id);
    
    // print_r($data['participate_list']); die();

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
     // $data['user_list'] = $this->User_Model->get_list_by_id('user_id', $user_id,'','','','','user'); 
    
  
    
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

public function save_assigncompetition(){
   $userId1 = $_POST['u_id1'];
   $compId = $_POST['c_id'];
   $userId2 = $_POST['u_id2'];
 
      // echo $userId2;
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    // $this->form_validation->set_rules('user_id2', 'First Name', 'trim|required');
    // if ($this->form_validation->run() != FALSE) {
      $save_data = array(
       
        'competitionid' => $compId,
        // 'pincode' => $this->input->post('pincode'),
        'user_id1' => $userId1,
        'user_id2' => $userId2,
        'created_date' => date('Y-m-d H:i:s'),
      );
      // print_r($save_data); die();
      $this->User_Model->save_data('assigncompetition',$save_data);
   
      $this->session->set_flashdata('save_success','success');
      // header('location:'.base_url().'User/add_assigncompetition');
    // }
}
 public function add_assigncompetition(){
  

  $data['competition'] = $this->User_Model->fetch_competition_usertype();
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
    $data['competition'] = $this->User_Model->fetch_competition_usertype();
    // $data['assigncomp'] = $this->User_Model->fetch_assigncompetition($competitionid);


    // print_r($data['assigncomp']);

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
      $compid = $_POST['comp_id'];
      // print_r($userId); die();
     
      $data = $this->User_Model->addassigncompetition_list($userId,$compid);

      // echo (json_encode($data));
 
      foreach ($data as $value) {
        # code...
               // echo form_open('books/input');
        $data['assigncomp'] = $this->User_Model->fetch_assigncompetition($value['user_id'],$compid);
        
        ?> 
            <tr>
        <!-- <form action="< ?php echo base_url(); ?>User/add_assigncompetition"> -->

              <td style="display:none;"><?php  echo $userId; ?></td>
              <td><?php  echo $value['user_id']; ?></td>
              <td><?php  echo $value['user_name']; ?></td>
              <td>
                <?php if(!$data['assigncomp']){ ?>
                <button class="btn btn-primary btnaddcomp" onclick="myFunction(<?php  echo $userId; ?>,<?php  echo $compid; ?>,<?php echo $value['user_id']; ?>)" name="user_id2" id="comp1" value="<?php echo $value['user_id']; ?>" >Add </button>
                <?php }else{
                  echo "Competitor Already Choosed";
                } ?>
              </td>
         <!-- </form>     -->

            </tr>  


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


      public function assign_competition_list(){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $data['assign_competition_list'] = $this->User_Model->assign_competition_list('assigncompetitionid');
    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/assigncompetitor_list',$data);
    $this->load->view('Include/footer',$data);
  }
/************************ Assign Winner Information ****************************/
 public function add_assignwinner(){


    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }      
      
    $competitionid =$this->input->post('competitionid');
   
    $data['competition'] = $this->User_Model->fetch_competition_forwinner();
       
    $data['user_list'] = $this->User_Model->fetch_userlist($competitionid);
    foreach ($data['user_list'] as $value) {
      $data['competitiontypeid'] = $value->competitiontypeid;

      // print_r($competitiontypeid); 
    } 
     $data['fetch_user_uploadfile'] = $this->User_Model->fetch_user_uploadfile($competitionid);
     $data['fetch_userlist_othercompetition'] = $this->User_Model->fetch_userlist_othercompetition($competitionid);

    $data['userscore'] = $this->User_Model->fetch_userscore($competitionid);
    $data['points'] = $this->User_Model->fetch_points($competitionid);

    // print_r($data['points']); die();


    $data['competitionid'] =  $competitionid;
   
      $this->load->view('Include/head',$data);
      $this->load->view('Include/navbar', $data);
      $this->load->view('User/assignwinner',$data);
      $this->load->view('Include/footer',$data);
    }

 public function save_winner(){

    // print_r($_POST); die();

    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('competitionid', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
  // print_r($_POST); 
  $user_id = $this->input->post('user_id');
  $competitionid = $this->input->post('competitionid');
  $check_winnerexists = $this->User_Model->check_winnerexists($user_id,$competitionid);
  
  if(empty($check_winnerexists)){

      $pointsid = $this->input->post('pointsid');

     $points_m = $this->User_Model->get_list_by_id('pointsid', $pointsid,'','','','','points_master');
     foreach ($points_m as $value) {
      $points =$value->points;
      $conversionpoints =$value->conversionpoints;

     }


     $points_user = $this->User_Model->get_list_by_id('user_id', $user_id,'','','','','user'); 
     $competition_user = $this->User_Model->get_list_by_id('competitionid', $competitionid,'','','','','competition'); 
     foreach ($competition_user as $value) {
       $title = $value->title;
      } 
     // print_r($title); die();
     foreach ($points_user as $value) {
      $points1 =$value->points;
      $conversionpoints1 =$value->conversionpoints;
      $username =$value->user_name;
      $useremail =$value->user_email;

     }

     // print_r($useremail); die();


     $points_userdb1 = $this->User_Model->get_list_by_id1('user_id', $user_id,'','','','','customer_information'); 
     foreach ($points_user as $value) {
      $points2 =$value->points;
      $conversionpoints2 =$value->conversionpoints;

     }

     if(empty($points_user) && empty($points_userdb1) )
     {
 
          $save_data = array(

        'competitionid' => $this->input->post('competitionid'),
        'pointsid' => $pointsid,
        'points' => $points,
        'conversionpoints' => $conversionpoints,
        'user_id' => $this->input->post('user_id'),

      );
      $this->User_Model->save_data('assignwinner',$save_data);

        require("phpmailer/sendemail.php");
        require("phpmailer/assignwinner_mail.php");
      
        $rcpt= $useremail;
        $sub= 'Congratulations';
        $msg= $msg_instwinner;
        $msg = str_replace('[[UserName]]', $username, $msg);
        $msg = str_replace('[[CompetitionName]]', $title, $msg);
        
        
        sendemail($rcpt, $sub, $msg); 
      
      $update_data = array(
         'points' => $points,
         'conversionpoints' => $conversionpoints,
      );

      $this->User_Model->update_info('user_id', $user_id, 'user', $update_data);

        $update_datadb1 = array(
         'points' => $points,
         'conversionpoints' => $conversionpoints,
      );

      $this->User_Model->update_info1('user_id', $user_id, 'customer_information', $update_datadb1);

     }else{
        

     $p1 = $points + $points1;
     $p2 = $points + $points2;

     $cp1 = $conversionpoints + $conversionpoints1;
     $cp2 = $conversionpoints + $conversionpoints2;

     // print_r($cp2); die();

       $save_data = array(

        'competitionid' => $this->input->post('competitionid'),
        'pointsid' => $pointsid,
        'points' => $points,
        'conversionpoints' => $conversionpoints,
        'user_id' => $this->input->post('user_id'),

      );
      $this->User_Model->save_data('assignwinner',$save_data);
        require("phpmailer/sendemail.php");
        require("phpmailer/assignwinner_mail.php");
      
        $rcpt= $useremail;
        $sub= 'Congratulations';
        $msg= $msg_instwinner;
        $msg = str_replace('[[UserName]]', $username, $msg);
        $msg = str_replace('[[CompetitionName]]', $title, $msg);
        
        
        sendemail($rcpt, $sub, $msg); 
      
      $update_data = array(
         'points' => $p1,
         'conversionpoints' => $cp1,
      );

      $this->User_Model->update_info('user_id', $user_id, 'user', $update_data);

        $update_datadb1 = array(
         'points' => $p2,
         'conversionpoints' => $cp2,
      );

      $this->User_Model->update_info1('user_id', $user_id, 'customer_information', $update_datadb1);

     }
     
    // print_r($conversionpoints); die();

      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'User/add_assignwinner');
    }else{
      $this->session->set_flashdata('record_error','error');
      header('location:'.base_url().'User/add_assignwinner');

      // echo 'record exists';
    }
}
}

 // winner List....
  public function assign_winner_list(){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $data['assign_winner_list'] = $this->User_Model->assign_winner_list('assignwinnerid');
    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/assign_winner_list',$data);
    $this->load->view('Include/footer',$data);
  }
 //   public function assignwinner_list(){
 //    $quizweb_user_id = $thisquizweb_user_id');
 //    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
 //    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
 //    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }     
 //          // print_r($_POST);
 //    $competitionid =$this->input->post('competitionid');
 //    $pincode = $this->input->post('pincode');
 //    // $user_id = $this->input->post('user_id');
     
 //     // print_r($user_id);   
     
 //    $data['assignwinner_list'] = $this->User_Model->assignwinner_list($competitionid,$pincode);

 //    // print_r($data['assignwinner_list']);

 //    $data['competitionid'] =  $competitionid;
 //    $data['pincodeid'] =  $pincode;
 //    // $data['user_id'] =  $user_id;

 //      $this->load->view('Include/head',$data);
 //      $this->load->view('Include/navbar', $data);
 //      $this->load->view('User/assignwinner',$data);
 //      $this->load->view('Include/footer',$data);
 //    }
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

  /********************   Level Information      **************************/


   public function check_level(){
    // echo "string";
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url()); }

     $levelname = $this->input->post('levelname');

    $check_level = $this->User_Model->check_level($levelname); 
// print_r($checkpoints_competition); die();
        if($check_level > 0){

         echo "Competition Level Already Exists." ; 
         // return false;


        }else{

          echo "true";

        }
}
  // Add New Level....
  public function add_level(){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == ''&& $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('levelname', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
        $levelname = $this->input->post('levelname');

    $check_level = $this->User_Model->check_level($levelname); 
// print_r($checkpoints_competition); die();
        if(empty($check_level)){

      $save_data = array(
       
        'levelname' => $this->input->post('levelname'),
        'created_date' => date('Y-m-d H:i:s'),
              
      );
      $this->User_Model->save_data('levelmaster', $save_data);
      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'User/level_list');
    }else{
       $this->session->set_flashdata('level_exists_error','error');
      header('location:'.base_url().'User/add_level');
    }
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

/**********************  Prizes Information      ***********************/



public function checkpoints_competition1(){
    // echo "string";
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url()); }

    $competitionid = $this->input->post('competitionid');

    $checkpoints_competition = $this->User_Model->checkpoints_competition($competitionid); 
// print_r($checkpoints_competition); die();
        if($checkpoints_competition > 0){

         echo "Competition Points Already Exists." ; 
         // return false;


        }else{

          echo "true";

        }
}

  // Add New Prizes....
  public function add_points(){
  
    // print_r($_POST['competitionid']);
    // print_r($_POST['winnerposition']); 
    // echo $_POST['winnerposition'][0];
     // print_r($_POST['points']); 
    // echo $_POST['points'][0]; 

     // print_r($_POST['conversionpoints']); 

    // echo $_POST['conversionpoints'][0];
    $competitionid="";

    // $points="";
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == ''&& $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('competitionid', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
    $competitionid = $this->input->post('competitionid');

    // print_r($competitionid); die();
     $data['competition_check'] = $this->User_Model->checkpoints_competition($competitionid);

      // print_r($data['competition_check']); die();

    // $i=0;

      if(empty($data['competition_check'])){


     for( $i=0 ,  $count = count($_POST); $i <= $count; $i++) {
   
     
         $winner = $_POST['winnerposition'][$i];
         $points = $_POST['points'][$i];
         $conversionpoints = $_POST['conversionpoints'][$i];

         $this->User_Model->save_points($competitionid,$winner,$points,$conversionpoints);
          
 
      }
     // die();

      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'User/points_list');

    }else{
      // echo "already exists";
      $this->session->set_flashdata('competition_exists_error','error');
      header('location:'.base_url().'User/add_points');
    }
    }

    $data['competition'] = $this->User_Model->fetch_competition();
   
    // $data['level'] = $this->User_Model->fetch_level();


    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('User/points', $data);
    $this->load->view('Include/footer', $data);
  }

  // User List....
  public function points_list(){

    

    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $data['points_list'] = $this->User_Model->points_list('pointsid');
    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/points_list',$data);
    $this->load->view('Include/footer',$data);
  }
  // public function update_point(){
  //   // print_r($_POST); die();
  //   $competition_id = $this->session->userdata('competitionid');
  //   // print_r($competition_id); die();

  //   $quizweb_user_id = $this->session->userdata('quizweb_user_id');
  //   $quizweb_company_id = $this->session->userdata('quizweb_company_id');
  //   $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
  //   if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
  //   // $this->form_validation->set_rules('competitionid', 'First Name', 'trim|required');
  //   // if ($this->form_validation->run() != FALSE) {
  //       // $competitionid = $this->input->post('competitionid');

  //   // $i=0;
  //    // for( $i=0 ,  $count = count($_POST); $i <= $count; $i++) {
  //    foreach ($_POST as  $value) {
  //      print_r($_POST);
    
  //     // print_r($_POST); die();
   
  //        $winner = $_POST['winnerposition'][$i];
  //        // $pointsid = $_POST['pointsid'][$i];
  //        $points = $_POST['points'][$i];
  //        $conversionpoints = $_POST['conversionpoints'][$i];

  //        $this->User_Model->update_points($competition_id,$winner,$points,$conversionpoints);
          
  // }die();
  //     // }
  //     // $update_data = array(
               
  //     //   'competitionid' => $this->input->post('competitionid'),
  
  //     //   'created_date' => date('Y-m-d H:i:s'),
  //     // );
  //     // $this->User_Model->update_info('pointsid', $pointsid, 'points_master', $update_data);
  //     $this->session->set_flashdata('update_success','success');
  //     header('location:'.base_url().'User/points_list');
  //   // }

  // }

  // Edit User....
  public function edit_points($pointsid){

    // $competitionid = $this->uri->segment(3);
    // $this->session->set_userdata('competitionid',$competitionid);


      // echo $user_id; die();
      
    // print_r($competitionid); die();

    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $this->form_validation->set_rules('competitionid', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
        

    
      $update_data = array(
               
        'competitionid' => $this->input->post('competitionid'),
        'winnerposition' => $this->input->post('winnerposition'),
        'points' => $this->input->post('points'),
        'conversionpoints' => $this->input->post('conversionpoints'),
  
        'created_date' => date('Y-m-d H:i:s'),
      );
      $this->User_Model->update_info('pointsid', $pointsid, 'points_master', $update_data);
      $this->session->set_flashdata('update_success','success');
      header('location:'.base_url().'User/points_list');
    }

    $level_info = $this->User_Model->get_info('pointsid', $pointsid, 'points_master');
    // $data['points_list'] =$level_info;

    // foreach ($data['points_list'] as $value) {
    //   // print_r($value['pointsid']) ; die();
    // }
    if($level_info == ''){ header('location:'.base_url().'User/points_list'); }
    foreach($level_info as $info){
      $data['update'] = 'update';
      $data['competitionid'] = $info->competitionid;
      $data['winnerposition'] = $info->winnerposition;
      $data['points'] = $info->points;
      $data['conversionpoints'] = $info->conversionpoints;
    
     
    }
    $data['competition'] = $this->User_Model->fetch_competition();
    // $data['level'] = $this->User_Model->fetch_level();
    // $data['prizelisteditbyid'] = $this->User_Model->prizelisteditbyid('prizeid');
  
    // print_r($data['prizelisteditbyid']);

    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('User/points_edit',$data);
    $this->load->view('Include/footer',$data);
  }

  // Delete User....
  public function delete_points($pointsid){
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('pointsid', $pointsid, 'points_master');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'User/points_list');
  }

/*************  Class Information      ****************************/


  public function check_tabcompetition_class(){
    // echo "string";
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url()); }

     $tabinputtext = $this->input->post('tabinputtext');

    $check_tabcompetition_class = $this->User_Model->check_tabcompetition_class($tabinputtext); 
// print_r($checkpoints_competition); die();
        if($check_tabcompetition_class > 0){

         echo "Class Group Already Exists." ; 
         // return false;


        }else{

          echo "true";

        }
}

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

       $$data['check_tabcompetition_class'] = $this->User_Model->check_tabcompetition_class($tabinputtext); 

       if(empty($data['check_tabcompetition_class'])){

      $save_data = array(
       
                'tabinputtext' => $this->input->post('tabinputtext'),
                'tabid' => $this->input->post('tabid'),
                'toage' => $this->input->post('toage'),
                'fromage' => $this->input->post('fromage'),
                'fromstand' => $fromstand,
                'tostand' => $tostand,
              
                'alluser' => $this->input->post('alluser'),
             
      );
      $this->User_Model->save_data('tabcompetition', $save_data);
      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'User/class_list');

      }else{
      // echo "already exists";
      $this->session->set_flashdata('class_exists_error','error');
      header('location:'.base_url().'User/add_class');
      }

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
                'toage' => $this->input->post('toage'),
                'fromage' => $this->input->post('fromage'),
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
      $data['fromage'] = $info->fromage;
      $data['toage'] = $info->toage;
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
 

 //This function is used to Generate Key
  public function generator($lenth)
  {
    $number=array("A","B","C","D","E","F","G","H","I","J","K","L","N","M","O","P","Q","R","S","U","V","T","W","X","Y","Z","1","2","3","4","5","6","7","8","9","0");
  
    for($i=0; $i<$lenth; $i++)
    {
      $rand_value=rand(0,34);
      $rand_number=$number["$rand_value"];
    
      if(empty($con)){ 
        $con = $rand_number;
      }else{
        $con = "$con"."$rand_number";
      }
    }
    return $con;
  }

}
?>
