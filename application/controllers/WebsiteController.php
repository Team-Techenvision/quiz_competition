<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WebsiteController extends CI_Controller{
  public function __construct(){
    parent::__construct();

    $this->load->model('Website_Model');
    $this->load->helper('download');

    // $this->load->model('Transaction_Model');
  }

  public function logout(){
    $this->session->sess_destroy();
    header('location:'.base_url().'WebsiteController');
  }

 
/**************************      Login      ********************************/
  // public function login(){
  //   // print_r($_POST);
  //   $this->form_validation->set_rules('mobile', 'mobile', 'trim|required');
  //   $this->form_validation->set_rules('password', 'password', 'trim|required');
  //   if ($this->form_validation->run() == FALSE) {
  //    //  $this->load->view('Website/Include/head');
  //    //  $this->load->view('Website/index');
  //    // $this->load->view('Website/Include/footer');

  //   } else{
  //     $mobile = $this->input->post('mobile');
  //     $password = $this->input->post('password');

  //     $login = $this->Website_Model->check_login($mobile,$password);
   
  //     // print_r($login);die();
  //     if($login == null){
  //       // alert("login_error");
  //       $this->session->set_flashdata('msg','login_error');
  //        $this->session->set_flashdata('login_ermsg','error');
  //       header('location:'.base_url().'WebsiteController');

  //     } else{
  //      // print_r($login); die();
  //       echo 'null not';
  //       $this->session->set_userdata('quizweb_user_id', $login[0]['user_id']);
  //       // $this->session->set_userdata('quizweb_user_name', $login[0]['user_name']);
  //       $this->session->set_userdata('quizweb_company_id', $login[0]['company_id']);
  //       $this->session->set_userdata('quizweb_roll_id', $login[0]['roll_id']);

  //       $this->session->set_flashdata('login_success','success');
  //       header('location:'.base_url().'WebsiteController');
       
  //     }

     
  //   }
    
    
  // }

  
  public function login1()
  {
   
    $this->form_validation->set_rules('mobile', 'mobile', 'trim|required');
    // $this->form_validation->set_message('mobile', 'required','Enter Mobile Number');
    $this->form_validation->set_rules('password', 'password', 'trim|required');
    if ($this->form_validation->run() == FALSE) {

    } else{

      $mobile = $this->input->post('mobile');
      $password = $this->input->post('password');

      $login = $this->Website_Model->check_login($mobile,$password);
   
     if($login == null ){

      // $a=0;
      // echo $a;
     
         echo "Invalid Credentials";


      }else{
      
      
        $this->session->set_userdata('quizweb_user_id', $login[0]['user_id'] );
        $this->session->set_userdata('quizweb_company_id', $login[0]['company_id']);
        $this->session->set_userdata('quizweb_roll_id', $login[0]['roll_id']);
        // $a = 1;
      // echo $a;


        echo 'Sign In Successful';
      
      }
    }

  }



   /********************  Competition Participate check     *************************/

  //  public function check_competition()
  //  {
  //   // echo "string";

  //   // print_r($_POST);
    
  //     $mobile = $this->input->post('mobile');
  //     // $password = $this->input->post('password');

  //     $login = $this->Website_Model->check_competition($mobile,$password);

  //     // print_r($login);

  //    if($login == null){
  //       // alert("login_error");
  //      echo "Invalid Mobile Number and Password";

  //     } else{
  //      // print_r($login); die();
      
  //       $this->session->set_userdata('quizweb_user_id', $login[0]['user_id']);
  //       $this->session->set_userdata('quizweb_company_id', $login[0]['company_id']);
  //       $this->session->set_userdata('quizweb_roll_id', $login[0]['roll_id']);
  //       echo 'Successful';
  //       // $this->session->set_flashdata('login_success','success');
  //       // header('location:'.base_url().'WebsiteController');
       
  //     }

  
   

  // }


   /**************************      Home Page      ********************************/

  public function index(){


    $data['banner_list'] = $this->Website_Model->banner_list('bannerid');
    $data['tab_list'] = $this->Website_Model->tab_list('tabinputtextid');
    $data['competition_list'] = $this->Website_Model->competition_list('competitionid','','','','','','competition');
   
    $data['user_list'] = $this->Website_Model->get_list_by_id('user_id','','','','','','user');

    // print_r($data['user_list']);
    $data['company_list'] = $this->Website_Model->get_list_by_id('company_id','4','','','','','company');
    // $data['country'] = $this->Website_Model->fetch_country();
    // $data['pincode'] = $this->Website_Model->fetch_pincodelist();
    // $data['pin'] = $this->Website_Model->fetch_pincodelist();
    // $data['userid'] = $this->Website_Model->fetch_userid();
    

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

/*********************     Terms and Coditions     ****************************/
  public function termsandcondition(){

    $this->load->view('Website/Include/head');
    $this->load->view('Website/termsandcondition');
    $this->load->view('Website/Include/footer');
} 

/*********************     faq     ****************************/
  public function FAQ(){

    $this->load->view('Website/Include/head');
    $this->load->view('Website/faq');
    $this->load->view('Website/Include/footer');
} 

/*********************     Login/Register     ****************************/
  public function login_register(){

    $this->load->view('Website/Include/head');
    $this->load->view('Website/login_register');
    $this->load->view('Website/Include/footer');
}  

/*********************     Forgot Password     ****************************/
  public function forgotpassword(){

    $this->load->view('Website/Include/head');
    $this->load->view('Website/forgotpassword_view');
    $this->load->view('Website/Include/footer');
}  

public function forgotpasswordsubmit(){
     

     $email_Add = $this->input->post('email_id');

      $check_email = $this->Website_Model->check_reg1($email_Add);

   

    //   print_r($check_email); die();

       if($check_email == null ){
           
        //   echo "Enter Valid Email Address";

        $this->session->set_flashdata('email_error','error');
        header('location:'.base_url().'WebsiteController/forgotpassword');

       }else{
           
    $userName = $check_email[0]['user_name'];
 
    $this->form_validation->set_rules('email_id', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {

       $randcode = rand(10000,100000);
       // print_r($randcode); die();
      $save_data = array(
       
       
        'email_id' => $this->input->post('email_id'),
        'rand_code' => $randcode,
       
      
      );
      // print_r($save_data);
      $this->Website_Model->save_data('forgotpassword',$save_data);
      
       $this->session->set_flashdata('emaillink_success','success');
       header('location:'.base_url().'WebsiteController/forgotpassword');

        require("phpmailer/sendemail.php");
        require("phpmailer/mail-reset-pass.php");
        
        // $name = 'Vinayak';
        $rcpt= $email_Add;
        $sub= 'Forgot Password';
        $msg= $msg_reset_pass;
        $msg = str_replace('[[UserName]]', $userName, $msg);
        $msg = str_replace('[[code]]', $randcode, $msg);
        
        
        sendemail($rcpt, $sub, $msg);
     
    }

  
   } 
    $this->load->view('Website/Include/head');
    $this->load->view('Website/forgotpassword_view');
    $this->load->view('Website/Include/footer');
   
}

public function resetpassword(){

    $code = $this->uri->segment(3);

    $check_code = $this->Website_Model->check_resetpass($code);
    $status = $check_code[0]['status'];

     if(!empty($status)){

        // echo "You have already reset password.";

        $this->session->set_flashdata('alreadyreset_error','error');
        // header('location:'.base_url().'WebsiteController/resetpassword');

          $this->load->view('Website/Include/head');
          $this->load->view('Website/singalpage_resetpassword');
          $this->load->view('Website/Include/footer');
      
      } 
      else
      {
    
    // print_r($check_code); die();
        if($check_code == null)
        {
           $this->session->set_flashdata('email_error','error');
           header('location:'.base_url().'WebsiteController/forgotpassword');
           
        }else{
            
          $this->session->set_userdata('randcode',  $code);

          $this->load->view('Website/Include/head');
          $this->load->view('Website/resetpassword');
          $this->load->view('Website/Include/footer');

        }
  }


}

public function reset(){

      $code = $this->session->userdata('randcode');

      $check_code = $this->Website_Model->check_code($code);

      $userName = $check_code[0]['user_name'];
      $userEmail = $check_code[0]['user_email'];
      $user_id = $check_code[0]['user_id'];
      $status = $check_code[0]['status'];
      $user_password = $check_code[0]['user_password'];
      
      $newpass = md5($this->input->post('newpassword'));
      $Re_enter_newpass = md5($this->input->post('retypepassword'));

      // print_r($user_password); die();

     

    if($newpass == $Re_enter_newpass ){

      if($user_password == $newpass){

        $this->session->set_flashdata('passwordcheck_error','error');
        header('location:'.base_url().'WebsiteController/resetpassword/'.$code);
      
      }
      else
      {

         $this->form_validation->set_rules('newpassword', 'First Name', 'trim|required');
        if ($this->form_validation->run() != FALSE) {

                 // print_r($randcode); die();

          $data = array(

             'status' =>1,
          );
          $this->Website_Model->update_info('rand_code', $code, 'forgotpassword', $data);
          
          // $this->Website_Model->save_data('forgotpassword',$data);

          $update_data = array(

           'user_password' => $newpass,  
          
          ); 
          // print_r($save_data);
           $this->Website_Model->update_info('user_id', $user_id, 'user', $update_data);
          
            $update_data1 = array(

           'password' => $newpass,  
          
          ); 
          // print_r($save_data);
           $this->Website_Model->update_info1('user_id', $user_id, 'customer_information', $update_data1);

        require("phpmailer/sendemail.php");
        require("phpmailer/new-reset-password.php");
        
        // $name = 'Vinayak';
        $rcpt= $userEmail;
        $sub= 'Forgot Password';
        $msg= $new_msg_reset_pass;
        $msg = str_replace('[[UserName]]', $userName, $msg);
        
        
      sendemail($rcpt, $sub, $msg);

      $this->session->set_flashdata('resetpassword_success','success');
      header('location:'.base_url().'WebsiteController');
    }

    }   

      }else{
 
    
        $this->session->set_flashdata('emailcheck_error','error');
        header('location:'.base_url().'WebsiteController/resetpassword/'.$code);
  
      }


      $this->load->view('Website/Include/head');
      $this->load->view('Website/resetpassword');
      $this->load->view('Website/Include/footer');
   
}



/***************** Competition Single Page View    *********************/
  public function competition_singlepage(){

    // $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $competitionid = $this->uri->segment(3);

    // print_r($competitionid);

    // $data['competition_list'] = $this->Website_Model->get_list_by_id('competitionid',$competitionid,'','','','','competition');

     $data['competition_list'] = $this->Website_Model->get_competitionlist_by_id($competitionid);
    
   
    // print_r($data);

    $this->load->view('Website/Include/head',$data);
    $this->load->view('Website/competition_singlepage',$data);
    $this->load->view('Website/Include/footer',$data);
}     


/**************************    Competition Single Page View    *****************************/
  public function competition_usersave(){

    $competitionid = $this->uri->segment(3);

    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url()); }
      // print_r($competitionid);

    // $data['competition_list'] = $this->Website_Model->get_list_by_id('competitionid',$competitionid,'','','','','competition');

     $data['competition_list'] = $this->Website_Model->get_competitionlist_by_id($competitionid);
     $data['check_quiz_submit'] = $this->Website_Model->check_quiz_submit($quizweb_user_id,$competitionid);

    $data['uploadfile_list'] = $this->Website_Model->get_list_by_id('user_id', $quizweb_user_id,'','','','','competition_uploadfile_submit');

     $data['check_userscore_exists'] = $this->Website_Model->check_userscore_exists($quizweb_user_id,$competitionid);

     // print_r($data['check_userscore_exists']); 


    foreach ($data['uploadfile_list'] as $value) { 

      $upload_audio1 = $value->upload_audio;
      $upload_vedio1 = $value->upload_vedio;
      $upload_image1 = $value->upload_image;
      $uploadfile1 = $value->uploadfile;

      $data['uploadaudio'] = $upload_audio1; 
      $data['uploadvedio'] = $upload_vedio1; 
      $data['uploadimage'] = $upload_image1; 
      $data['uploadfile']  = $uploadfile1; 

                                       
     }

        // print_r($data['uploadvedio']);

    // print_r($data['uploadaudio']); die();

    $this->load->view('Website/Include/head',$data);
    $this->load->view('Website/competition_usersave',$data);
    $this->load->view('Website/Include/footer',$data);
} 
public function download($quiz_id){

        $quiz_id = $this->uri->segment(3);
  // print_r($quiz_id); die();


        $fileinfo = $this->Website_Model->download($quiz_id);
        foreach ($fileinfo as $value) {
          $filename = $value['upload_image'];
        }
        $name = $filename;
        $data = file_get_contents(base_url().'assets/images/competition_images/'.$filename); 
        force_download($name, $data); 
    
  }

public function competition_uploadfile(){

  // print_r($_POST); die();

  // $uploadfile = $this->input->post('upload_audio');

    // $competitionid = $this->uri->segment(3);

      // print_r($uploadfile); die();


    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'WebsiteController'); }

    $this->form_validation->set_rules('competitionid', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
    
  
   

    // foreach ($data['competition'] as  $value) {
    //   $fileformat = $value->file_format;

    //   // print_r($fileformat); 
    // }
  // die();
   // print_r($data['competition']); die();

        $fileformat = $this->input->post('file_format');
        $competitionid = $this->input->post('competitionid');
        $filesize = $this->input->post('file_size');

         $check_already_uploadfile = $this->Website_Model->check_user_uploadfiles($quizweb_user_id,$competitionid);
         $fetch_user_uploadfiles = $this->Website_Model->fetch_user_uploadfiles($quizweb_user_id,$competitionid);

         foreach ($fetch_user_uploadfiles as $value) {
           $uploadfileid = $value['uploadfileid'];
         }


        // print_r($filesize); die();
   // if($quizweb_user_id== "" && $quizweb_user_id != "" ){


    if($check_already_uploadfile > 0){

      // echo "hii";
      // print_r($check_already_uploadfile);

      // update code
       $update_data = array(
        // 'competitionid' => $this->input->post('competitionid'),
        // 'file_format' => $fileformat,
        // 'user_id' => $quizweb_user_id,
        'uploadfile' => $this->input->post('uploadfile'),
        'upload_image' => $this->input->post('upload_image'),
        'upload_vedio' => $this->input->post('upload_vedio'),
        'upload_audio' => $this->input->post('upload_audio'),
        // 'competitionid' => $this->input->post('competition_id'),
        // 'profile_image' => $this->input->post('profile_image'),
        // 'user_addedby' => $quizweb_user_id,
      );
      // print_r($update_data); die();

     $update_id = $this->Website_Model->update_info('uploadfileid', $uploadfileid, 'competition_uploadfile_submit', $update_data);
      
    // print_r($update_id); die();  
       //file upload

      if($fileformat=='1'){
        // print_r($fileformat); 
        if($_FILES['uploadfile']['name']){
              $time = time();
              // $image_name = 'profile_image_'.$time;
              $image_name = 'uploadfile_'.$quizweb_user_id.'_'.$time;


              $config['upload_path'] = 'assets/images/competition_files/';

              $config['allowed_types'] = 'doc|docx|pdf';
              $config['file_name'] = $image_name;

              $filename = $_FILES['uploadfile']['name'];
              $size=$_FILES['uploadfile']['size'];
              $ext = pathinfo($filename, PATHINFO_EXTENSION);
              $this->upload->initialize($config); // if upload library autoloaded
             
              $file_value = 1000000 * $filesize;

                    // print_r($file_value); die();
             if($size < $file_value){

                     

              if ($this->upload->do_upload('uploadfile') && $uploadfileid && $image_name && $ext && $filename) {

                    // print_r($image_name); 


                   // print_r($insert_id);

                  $image['uploadfile'] = $image_name.'.'.$ext;
                  // print_r($image['upload_audio']); die();
                  $this->Website_Model->update_info('uploadfileid', $uploadfileid, 'competition_uploadfile_submit', $image);
                   // if($_POST['old_profile_image']){ unlink("assets/images/".$_POST['old_profile_image']); }
                  $this->session->set_flashdata('upload_success','File Uploaded Successfully');
       
        } 
        else 
        {
                    // print_r($image_name); 

           $error = $this->upload->display_errors();
            $this->session->set_flashdata('upload_error',$error);
        }

        }else{

              $this->session->set_flashdata('filesize_error','File must be between the size of 1-'.$filesize.' MB'); 
              header('location:'.base_url().'WebsiteController/competition_usersave/'.$competitionid);       
         }
      }
      }

      //audio upload

      if($fileformat=='2'){
        // print_r(sizeof($upload_audio));  die();
        if($_FILES['upload_audio']['name']){

//           $configVideo['upload_path'] = 'assets/gallery/images'; # check path is correct
// $configVideo['max_size'] = '102400';
// $configVideo['allowed_types'] = 'mp4'; # add video extenstion on here
// $configVideo['overwrite'] = FALSE;
// $configVideo['remove_spaces'] = TRUE;
// $video_name = random_string('numeric', 5);
// $configVideo['file_name'] = $video_name;

// $this->load->library('upload', $configVideo);
// $this->upload->initialize($configVideo);
              $time = time();
              // $image_name = 'profile_image_'.$time;
              $image_name = 'upload_audio_'.$quizweb_user_id.'_'.$time;


              $config['upload_path'] = 'assets/images/competition_audio/';
              $config['max_size'] = '104857600000';
              $config['allowed_types'] = 'mp3|webm|ogg';
              $config['overwrite'] = FALSE;
              $config['remove_spaces'] = TRUE;
              $config['file_name'] = $image_name;

              $filename = $_FILES['upload_audio']['name'];
              $size=$_FILES['upload_audio']['size'];

              $ext = pathinfo($filename, PATHINFO_EXTENSION);
              $this->upload->initialize($config); // if upload library autoloaded
              
              $file_value = 1000000 * $filesize;

                    // print_r($file_value); die();
             if($size < $file_value){
           

              if ($this->upload->do_upload('upload_audio') && $uploadfileid && $image_name && $ext && $filename) {



                   // print_r($insert_id);

                  $image['upload_audio'] = $image_name.'.'.$ext;
                  // print_r($image['upload_audio']); die();
                  $this->Website_Model->update_info('uploadfileid', $uploadfileid, 'competition_uploadfile_submit', $image);
                   // if($_POST['old_profile_image']){ unlink("assets/images/".$_POST['old_profile_image']); }
                  $this->session->set_flashdata('upload_success','File Uploaded Successfully');
       
        } 
        else 
        {
                    // print_r($image_name); 

           $error = $this->upload->display_errors();
            $this->session->set_flashdata('upload_error',$error);
        }

          }else{
  
              $this->session->set_flashdata('filesize_error','File must be between the size of 1-'.$filesize.' MB'); 
              header('location:'.base_url().'WebsiteController/competition_usersave/'.$competitionid);       
         }
      }
      }

      //video upload

      if($fileformat=='3'){

         if($_FILES['upload_vedio']['name']){
              $time = time();
              // $image_name = 'profile_image_'.$time;
              $image_name = 'upload_vedio_'.$quizweb_user_id.'_'.$time;


              $config['upload_path'] = 'assets/images/competition_video/';
              $config['max_size'] = '104857600000';
              $config['allowed_types'] = 'mp4|3pg|mkv|wmv';
              $config['overwrite'] = FALSE;
              $config['remove_spaces'] = TRUE;
              $config['file_name'] = $image_name;

              $filename = $_FILES['upload_vedio']['name'];
              $size=$_FILES['upload_vedio']['size'];
              $ext = pathinfo($filename, PATHINFO_EXTENSION);
              $this->upload->initialize($config); // if upload library autoloaded
             
              $file_value = 1000000 * $filesize;

                    // print_r($filesize); die();
             if($size < $file_value){

                     

              if ($this->upload->do_upload('upload_vedio') && $uploadfileid && $image_name && $ext && $filename) {

                    // print_r($image_name); 


                   // print_r($insert_id);

                  $image['upload_vedio'] = $image_name.'.'.$ext;
                  // print_r($image['upload_audio']); die();
                  $this->Website_Model->update_info('uploadfileid', $uploadfileid, 'competition_uploadfile_submit', $image);
                   // if($_POST['old_profile_image']){ unlink("assets/images/".$_POST['old_profile_image']); }
                  $this->session->set_flashdata('upload_success','File Uploaded Successfully');
       
        } 
        else 
        {
                    // print_r($image_name); 

           $error = $this->upload->display_errors();
            $this->session->set_flashdata('upload_error',$error);
        }

         }else{
  
              $this->session->set_flashdata('filesize_error','File must be between the size of 1-'.$filesize.' MB'); 
              header('location:'.base_url().'WebsiteController/competition_usersave/'.$competitionid);       
         }
      }
    }
      //image upload

      if($fileformat=='4'){

         if($_FILES['upload_image']['name']){
              $time = time();
              // $image_name = 'profile_image_'.$time;
              $image_name = 'upload_image_'.$quizweb_user_id.'_'.$time;


              $config['upload_path'] = 'assets/images/competition_images/';

              $config['allowed_types'] = 'jpg|jpeg|png';
              $config['file_name'] = $image_name;

              $filename = $_FILES['upload_image']['name'];
              $size=$_FILES['upload_image']['size'];

              $ext = pathinfo($filename, PATHINFO_EXTENSION);
              $this->upload->initialize($config); // if upload library autoloaded
             
              $file_value = 1000000 * $filesize;

                    // print_r($file_value); die();
              if($size < $file_value){


                     

              if ($this->upload->do_upload('upload_image') && $uploadfileid && $image_name && $ext && $filename) {

                    // print_r($image_name); 


                   // print_r($insert_id);

                  $image['upload_image'] = $image_name.'.'.$ext;
                  // print_r($image['upload_audio']); die();
                  $this->Website_Model->update_info('uploadfileid', $uploadfileid, 'competition_uploadfile_submit', $image);
                   // if($_POST['old_profile_image']){ unlink("assets/images/".$_POST['old_profile_image']); }
                  $this->session->set_flashdata('upload_success','File Uploaded Successfully');
       
        } 
        else 
        {
                    // print_r($image_name); 

           $error = $this->upload->display_errors();
            $this->session->set_flashdata('upload_error',$error);
        }

         }else{
  
              $this->session->set_flashdata('filesize_error','File must be between the size of 1-'.$filesize.' MB'); 
              header('location:'.base_url().'WebsiteController/competition_usersave/'.$competitionid);       
         }
      }
      
      }
      
      // $this->session->set_flashdata('save_success','success');
      // $this->session->set_flashdata('upload_success','success'); 

      header('location:'.base_url().'WebsiteController/competition_usersave/'.$competitionid);

    }else{
      // echo "hello";
      // print_r($check_already_uploadfile);
      $save_data = array(
        'competitionid' => $competitionid,
        'file_format' => $fileformat,
        'user_id' => $quizweb_user_id,
      
      );
           
      $id = $this->Website_Model->save_data('competition_uploadfile_submit',$save_data);
      // print_r($id); die();

   
       //file upload

      if($fileformat=='1'){
        // print_r($fileformat); 
        if($_FILES['uploadfile']['name']){
              $time = time();
              // $image_name = 'profile_image_'.$time;
              $image_name = 'uploadfile_'.$quizweb_user_id.'_'.$time;


              $config['upload_path'] = 'assets/images/competition_files/';

              $config['allowed_types'] = 'doc|docx|pdf';
              $config['file_name'] = $image_name;

              $filename = $_FILES['uploadfile']['name'];
              $size=$_FILES['uploadfile']['size'];

              $ext = pathinfo($filename, PATHINFO_EXTENSION);
              $this->upload->initialize($config); // if upload library autoloaded
             

              $file_value = 1000000 * $filesize;

                    // print_r($file_value); die();
              if($size < $file_value){

                     

              if ($this->upload->do_upload('uploadfile') && $id && $image_name && $ext && $filename) {

                    // print_r($image_name); 


                   // print_r($insert_id);

                  $image['uploadfile'] = $image_name.'.'.$ext;
                  // print_r($image['upload_audio']); die();
                  $this->Website_Model->update_info('uploadfileid', $id, 'competition_uploadfile_submit', $image);
                   // if($_POST['old_profile_image']){ unlink("assets/images/".$_POST['old_profile_image']); }
                  $this->session->set_flashdata('upload_success','File Uploaded Successfully');
       
        } 
        else 
        {
                    // print_r($image_name); 

           $error = $this->upload->display_errors();
            $this->session->set_flashdata('upload_error',$error);
        }

        }else{
  
              $this->session->set_flashdata('filesize_error','File must be between the size of 1-'.$filesize.' MB'); 
              header('location:'.base_url().'WebsiteController/competition_usersave/'.$competitionid);       
         }
      }
      }

      //audio upload

      if($fileformat=='2'){
        // print_r($fileformat); 
        if($_FILES['upload_audio']['name']){

//           $configVideo['upload_path'] = 'assets/gallery/images'; # check path is correct
// $configVideo['max_size'] = '102400';
// $configVideo['allowed_types'] = 'mp4'; # add video extenstion on here
// $configVideo['overwrite'] = FALSE;
// $configVideo['remove_spaces'] = TRUE;
// $video_name = random_string('numeric', 5);
// $configVideo['file_name'] = $video_name;

// $this->load->library('upload', $configVideo);
// $this->upload->initialize($configVideo);
              $time = time();
              // $image_name = 'profile_image_'.$time;
              $image_name = 'upload_audio_'.$quizweb_user_id.'_'.$time;


              $config['upload_path'] = 'assets/images/competition_audio/';
              $config['max_size'] = '104857600000';
              $config['allowed_types'] = 'mp3|webm|ogg';
              $config['overwrite'] = FALSE;
              $config['remove_spaces'] = TRUE;
              $config['file_name'] = $image_name;

              $filename = $_FILES['upload_audio']['name'];
              $size=$_FILES['upload_audio']['size'];

              $ext = pathinfo($filename, PATHINFO_EXTENSION);
              $this->upload->initialize($config); // if upload library autoloaded
             
              $file_value = 1000000 * $filesize;

                    // print_r($file_value); die();
              if($size < $file_value){

                     

              if ($this->upload->do_upload('upload_audio') && $id && $image_name && $ext && $filename) {

                    // print_r($image_name); 


                   // print_r($insert_id);

                  $image['upload_audio'] = $image_name.'.'.$ext;
                  // print_r($image['upload_audio']); die();
                  $this->Website_Model->update_info('uploadfileid', $id, 'competition_uploadfile_submit', $image);
                   // if($_POST['old_profile_image']){ unlink("assets/images/".$_POST['old_profile_image']); }
                  $this->session->set_flashdata('upload_success','File Uploaded Successfully');
       
        } 
        else 
        {
                    // print_r($image_name); 

           $error = $this->upload->display_errors();
            $this->session->set_flashdata('upload_error',$error);
        }

        }else{
  
              $this->session->set_flashdata('filesize_error','File must be between the size of 1-'.$filesize.' MB'); 
              header('location:'.base_url().'WebsiteController/competition_usersave/'.$competitionid);       
         }
      }
      }

      //video upload

      if($fileformat=='3'){

         if($_FILES['upload_vedio']['name']){
              $time = time();
              // $image_name = 'profile_image_'.$time;
              $image_name = 'upload_vedio_'.$quizweb_user_id.'_'.$time;


              $config['upload_path'] = 'assets/images/competition_video/';
              $config['max_size'] = '104857600000';
              $config['allowed_types'] = 'mp4|3pg|mkv|wmv';
              $config['overwrite'] = FALSE;
              $config['remove_spaces'] = TRUE;
              $config['file_name'] = $image_name;

              $filename = $_FILES['upload_vedio']['name'];
              $size=$_FILES['upload_vedio']['size'];

              $ext = pathinfo($filename, PATHINFO_EXTENSION);
              $this->upload->initialize($config); // if upload library autoloaded
             
               $file_value = 1000000 * $filesize;

                    // print_r($file_value); die();
              if($size < $file_value){


                     

              if ($this->upload->do_upload('upload_vedio') && $id && $image_name && $ext && $filename) {

                    // print_r($image_name); 


                   // print_r($insert_id);

                  $image['upload_vedio'] = $image_name.'.'.$ext;
                  // print_r($image['upload_audio']); die();
                  $this->Website_Model->update_info('uploadfileid', $id, 'competition_uploadfile_submit', $image);
                   // if($_POST['old_profile_image']){ unlink("assets/images/".$_POST['old_profile_image']); }
                  $this->session->set_flashdata('upload_success','File Uploaded Successfully');
       
        } 
        else 
        {
                    // print_r($image_name); 

           $error = $this->upload->display_errors();
            $this->session->set_flashdata('upload_error',$error);
        }

          }else{
  
              $this->session->set_flashdata('filesize_error','File must be between the size of 1-'.$filesize.' MB'); 
              header('location:'.base_url().'WebsiteController/competition_usersave/'.$competitionid);       
         }
      }
    }
      //image upload

      if($fileformat=='4'){

         if($_FILES['upload_image']['name']){
              $time = time();
              // $image_name = 'profile_image_'.$time;
              $image_name = 'upload_image_'.$quizweb_user_id.'_'.$time;


              $config['upload_path'] = 'assets/images/competition_images/';

              $config['allowed_types'] = 'jpg|jpeg|png';
              $config['file_name'] = $image_name;

              $filename = $_FILES['upload_image']['name'];
              $size=$_FILES['upload_vedio']['size'];

              $ext = pathinfo($filename, PATHINFO_EXTENSION);
              $this->upload->initialize($config); // if upload library autoloaded
             
              $file_value = 1000000 * $filesize;

                    // print_r($file_value); die();
              if($size < $file_value){


                     

              if ($this->upload->do_upload('upload_image') && $id && $image_name && $ext && $filename) {

                    // print_r($image_name); 


                   // print_r($insert_id);

                  $image['upload_image'] = $image_name.'.'.$ext;
                  // print_r($image['upload_audio']); die();
                  $this->Website_Model->update_info('uploadfileid', $id, 'competition_uploadfile_submit', $image);
                   // if($_POST['old_profile_image']){ unlink("assets/images/".$_POST['old_profile_image']); }
                  $this->session->set_flashdata('upload_success','File Uploaded Successfully');
       
        } 
        else 
        {
                    // print_r($image_name); 

           $error = $this->upload->display_errors();
            $this->session->set_flashdata('upload_error',$error);
        }

        }else{
  
              $this->session->set_flashdata('filesize_error','File must be between the size of 1-'.$filesize.' MB'); 
              header('location:'.base_url().'WebsiteController/competition_usersave/'.$competitionid);       
         }

      }
      
      }
      
      // $this->session->set_flashdata('save_success','success');
      // $this->session->set_flashdata('uploadfile_success','success');

      header('location:'.base_url().'WebsiteController/competition_usersave/'.$competitionid);

    }  
    }

 
   
}
  
/******************************  Registration Information      ****************************/

  // Add add_registration....
  public function add_registration(){

    // print_r($_POST);

    //  $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    // $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    // $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    // if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url()); }
  
    $this->form_validation->set_rules('user_name', 'First user_name', 'trim|required');

    if ($this->form_validation->run() != FALSE) {

      $password = $this->input->post('user_password');
      $emailAddress = $this->input->post('user_email');
      $name = $this->input->post('user_name');
      
      $save_data = array(
       
        'user_pincode' => $this->input->post('user_pincode'),
        'user_mobile' => $this->input->post('user_mobile'),
        'user_email' => $this->input->post('user_email'),
        'user_name' => $this->input->post('user_name'),
        'user_password' => md5($password),
        // 'user_addedby' => $quizweb_user_id,
        'is_admin' => 3,
        'roll_id' => 3,
      );

      // print_r($save_data); 

      $mobile = $this->input->post('user_mobile');
      $email = $this->input->post('user_email');
   
      $mob = $this->Website_Model->check_reg($mobile);
      $email1 = $this->Website_Model->check_reg1($email);

      $email2 = $this->Website_Model->check_regdb1($email);

      // $customer = 

            // print_r($email2); die();

     

      if(empty($email1) || $email1==""){

      if(empty($email2) || $email2==""){  
   
      if(empty($mob) || $mob==""){
      // print_r($email); die();

     $id = $this->Website_Model->save_data('user',$save_data);

      $data_view = array(
            'user_id' => $id,
            'user_name' => $this->input->post('user_name'),
            'user_email' => $this->input->post('user_email'),
            'user_mobile' => $this->input->post('user_mobile'),
            // 'user_password' => md5($password),
            'user_pincode' => $this->input->post('user_pincode'), 
            'profile_submitted' =>0, 
            'check_one' =>0,

        );

      $this->Website_Model->save_data('userprofile_master',$data_view);
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
      $this->Website_Model->save_data1('customer_information',$data_viewdb1);
       // $this->session->set_flashdata('register_success','success');
       // header('location:'.base_url().'WebsiteController');
      $mobile = $this->input->post('user_mobile');
      $password = $this->input->post('user_password');

      $login = $this->Website_Model->check_login($mobile,$password);

      // print_r($login);die();
      if($login == null){
        // alert("login_error");
        // $this->session->set_flashdata('msg','login_error');
        // $this->session->set_flashdata('login_ermsg','error');
        // header('location:'.base_url().'WebsiteController');

      } else{
       // print_r($login); die();
        // echo 'null not';
        $this->session->set_userdata('quizweb_user_id', $login[0]['user_id']);
        // $this->session->set_userdata('quizweb_user_name', $login[0]['user_name']);
        $this->session->set_userdata('quizweb_company_id', $login[0]['company_id']);
        $this->session->set_userdata('quizweb_roll_id', $login[0]['roll_id']);
        // $mob = $this->Website_Model->check_reg($mobile);
      // print_r($mobile); 

        require("phpmailer/sendemail.php");
        require("phpmailer/mail-instruction.php");
        
        // $name = 'Vinayak';
        $rcpt= $emailAddress;
        $sub= 'Thank you for registration';
        $msg= $msg_instregistered;
        $msg = str_replace('[[UserName]]', $name, $msg);
        
        
        sendemail($rcpt, $sub, $msg);

        // $this->session->set_flashdata('login_success','success');
        echo "Sign Up Successfully";
        // header('location:'.base_url().'WebsiteController');
        // redirect('WebsiteController');

      

         } 

        }else{
          // print_r($mob);
          echo "Mobile Number is Already Exists";
        }
      }else{
        // email2 already exists then userid can update in database 2
         // echo "Email Address is Already Exists";
         if(empty($mob) || $mob==""){
        $id1 = $this->Website_Model->save_data('user',$save_data);

         $data_view = array(
            'user_id' => $id1,
            'user_name' => $this->input->post('user_name'),
            'user_email' => $this->input->post('user_email'),
            'user_mobile' => $this->input->post('user_mobile'),
            'user_password' => md5($password),
            'user_pincode' => $this->input->post('user_pincode'), 
            'profile_submitted' =>0, 
            'check_one' =>0, 

        );

      $this->Website_Model->save_data('userprofile_master',$data_view);

          $update_datadb1 = array(
         'user_id' => $id1,
         // 'conversionpoints' => $cp2,
         );
          // print_r($update_datadb1); die();

      $this->Website_Model->update_info1('customer_email', $emailAddress, 'customer_information', $update_datadb1);

      $mobile = $this->input->post('user_mobile');
      $password = $this->input->post('user_password');

      $login = $this->Website_Model->check_login($mobile,$password);

      // print_r($login);die();
      if($login == null){
        // alert("login_error");
        // $this->session->set_flashdata('msg','login_error');
        // $this->session->set_flashdata('login_ermsg','error');
        // header('location:'.base_url().'WebsiteController');

      } else{
       // print_r($login); die();
        // echo 'null not';
        $this->session->set_userdata('quizweb_user_id', $login[0]['user_id']);
        // $this->session->set_userdata('quizweb_user_name', $login[0]['user_name']);
        $this->session->set_userdata('quizweb_company_id', $login[0]['company_id']);
        $this->session->set_userdata('quizweb_roll_id', $login[0]['roll_id']);
        // $mob = $this->Website_Model->check_reg($mobile);
      // print_r($mobile); 
        require("phpmailer/sendemail.php");
        require("phpmailer/mail-instruction.php");
        
        // $name = 'Vinayak';
        $rcpt= $emailAddress;
        $sub= 'Thank you for registration';
        $msg= $msg_instregistered;
        $msg = str_replace('[[UserName]]', $name, $msg);
        
        
        sendemail($rcpt, $sub, $msg);

        // $this->session->set_flashdata('login_success','success');
        echo "Sign Up Successfully";
        // header('location:'.base_url().'WebsiteController');
        // redirect('WebsiteController');

      

         } 

       }else{

        echo "Mobile Number is Already Exists";
       }

      }

    }
    else{
       echo "Email Address is Already Exists";
  }
      // $this->Website_Model->save_data('user',$save_data);

      //*********************   remove this code after demo   *********************
  

   }
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
public function insert_profiledata1(){


    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    
    if(empty($quizweb_user_id) && $quizweb_company_id == '' && $quizweb_roll_id ==''){ 
      $this->session->set_flashdata('Login_error','error');
      header('location:'.base_url().'WebsiteController/login_register'); }else{

     $competitionid = $this->input->post('competition_id');

   // print_r($quizweb_user_id);die();

     $profile_info = $this->Website_Model->get_info('user_id', $quizweb_user_id, 'userprofile_master');

     $competition_info = $this->Website_Model->getcompetition_info($competitionid);
     // $competitionClass_info = $this->Website_Model->tab_list('tabinputtextid');
     // print_r($competition_info); die();
     $check_allready_participate = $this->Website_Model->check_participate($quizweb_user_id,$competitionid);

     $userparticipatetype="";
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
       
       $standard = $value->standard;
       $parentname = $value->parentname;
       $fullname = $value->fullname;
       $birthdate = $value->birthdate;
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

     
        $sql="SELECT DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),birthdate)), '%Y')+0 AS Age FROM userprofile_master where (user_id = $quizweb_user_id && gender = $userparticipatetype)";    
        $query = $this->db->query($sql);
        $result = $query->result_array();
        
        $age = 0;
        foreach ($result as $value) {
         $age = $value['Age'];
        }

        $y = "18";
            
     }

    if($profile_submitted == 1){
     // print_r($profile_info); die();   
    if($standard >= $fromstand && $standard <= $tostand || $userparticipatetype == $gender && $age >= $y){
     // print_r($age); die();
      // $this->session->set_flashdata('class_error','error');
      header('location:'.base_url().'WebsiteController/competition_singlepage/'.$competitionid);
   
    }else{

     // echo "msg standard Participate";
      $this->session->set_flashdata('class_error','error');
      header('location:'.base_url().'WebsiteController');

    }

  }else{
    // echo "Profile is not submitted";
      $this->session->set_flashdata('profile_error','error');
      header('location:'.base_url().'WebsiteController');
  }

  
}
   // print_r($data);


   // $this->load->view('Website/index',$data);

}


public function insert_profiledata(){


    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    
    if(empty($quizweb_user_id) && $quizweb_company_id == '' && $quizweb_roll_id ==''){ 
      $this->session->set_flashdata('Login_error','error');
      header('location:'.base_url().'WebsiteController/login_register'); }else{

     $competitionid = $this->input->post('competition_id');

   // print_r($quizweb_user_id);die();

     $profile_info = $this->Website_Model->get_info('user_id', $quizweb_user_id, 'userprofile_master');

     $competition_info = $this->Website_Model->getcompetition_info($competitionid);
     // $competitionClass_info = $this->Website_Model->tab_list('tabinputtextid');
     // print_r($competition_info); die();
     $check_allready_participate = $this->Website_Model->check_participate($quizweb_user_id,$competitionid);

     $userparticipatetype="";
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
       
       $standard = $value->standard;
       $parentname = $value->parentname;
       $fullname = $value->fullname;
       $birthdate = $value->birthdate;
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

     
        $sql="SELECT DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),birthdate)), '%Y')+0 AS Age FROM userprofile_master where (user_id = $quizweb_user_id && gender = $userparticipatetype)";    
        $query = $this->db->query($sql);
        $result = $query->result_array();
        
        $age = 0;
        foreach ($result as $value) {
         $age = $value['Age'];
        }

        $y = "18";
            
     }

    if($profile_submitted == 1){
     // print_r($profile_info); die();   
    if($standard >= $fromstand && $standard <= $tostand || $userparticipatetype == $gender && $age >= $y){
     // print_r($age); die();
    if(empty($check_allready_participate)){
      

    $this->form_validation->set_rules('competition_id', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      // print_r($standard); die();
      $save_data = array(

        'competitionid' => $competitionid,
       
        'parentname' => $parentname,
        'fullname' => $fullname,
        'birthdate' => $birthdate,
        'emailid' => $emailid,
        'standard' => $standard,
        'schoolcollegename' => $schoolcollegename,
        'address' => $address,
        'pincode' => $pincode,
        'profile_image' => $profile_image,
        'alternatemobno' => $alternatemobno,
        'gender' => $gender,
        'cityid' => $cityid,
        'districtid' => $districtid,
        'stateid' => $stateid,
        'userprofileid' => $userprofileid,
        'user_id' => $quizweb_user_id,
        'created_date' => date('Y-m-d H:i:s'),
      );
      // print_r($save_data);
      $this->Website_Model->save_data('profile',$save_data);
      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'WebsiteController');
    }

    }else{
      // echo "Allready Participate";
      $this->session->set_flashdata('profileAlready_error','error');
      header('location:'.base_url().'WebsiteController');
      }
    }else{

     // echo "msg standard Participate";
      $this->session->set_flashdata('class_error','error');
      header('location:'.base_url().'WebsiteController');

    }

  }else{
    // echo "Profile is not submitted";
      $this->session->set_flashdata('profile_error','error');
      header('location:'.base_url().'WebsiteController');
  }

  
}
   // print_r($data);


   // $this->load->view('Website/index',$data);

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

   
// function fetch_city()
//  {
//   if($this->input->post('stateid'))
//   {
//    echo $this->Website_Model->fetch_city($this->input->post('stateid'));
//   }
//  }   
//  function fetch_district()
//  {
//   if($this->input->post('cityid'))
//   {
//    echo $this->Website_Model->fetch_district($this->input->post('cityid'));
//   }
//  }

  public function check_user_mobile(){
    // echo "string";
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url()); }

    $alternatemobno = $this->input->post('alternatemobno');

    $checkusermobile = $this->Website_Model->check_usermobile($quizweb_user_id,$alternatemobno); 

    // echo $check_user_mobile;
        if($checkusermobile > 0){

         echo "This mobile number is already registered." ; 
         // return false;


        }else{

          echo "true";

        }
}
//check standard and gender and birthdate
public function check_userdata_profile(){
    // echo "string";
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url()); }

    $birthdate = $this->input->post('birthdate');
    $standard = $this->input->post('standard');
    $gender = $this->input->post('gender');
    $current_date = date("Y-m-d");



    //difference between bithdate and current date in year

    $date1 = date("d-m-y",strtotime($current_date));
    $date2 = date("d-m-y",strtotime($birthdate));

    // print_r($date1);


    $diff = abs(strtotime($date2) - strtotime($date1));

    $years = floor($diff / (365*60*60*24));

    // print_r($years);

    // $check_userdata = $this->Website_Model->check_userdata($quizweb_user_id,$birthdate,$standard,$gender); 
    // foreach ($check_userdata as $value) {
    //   $birth = $value['birthdate'];
    //   $standard = $value['standard'];
    //   $gender = $value['gender'];
    // }

    if($years >= 18 && $gender==1 && $standard==14 ||$years >= 18 && $gender==2 && $standard==15 || $years < 18 && $gender==1 && $standard < 14 ||$years < 18 && $gender==2 && $standard < 15  )
    {
       if($years >= 18 && $gender==1 && $standard==14 ||$years >= 18 && $gender==2 && $standard==15 ){

               echo "true";
       }

    if($years >= 3 && $years <= 6 )
    {
      if($standard >= 1 && $standard <= 5 )
      {
         echo "true";
         $this->session->set_flashdata('updateProfile_success','success');
      }
      else
      {

        echo "Please enter correct birthdate for age group (3-6) and standard (Nursary-1st).";
      }
      // $a= 1; echo $a; echo "true"; this->session->set_flashdata('updateProfile_success','success');
      // header('location:'.base_url().'WebsiteController');

    }
    elseif($years >= 7 && $years <= 10 )
    {
       if($standard >= 6 && $standard <= 9 )
      {
         echo "true";
         $this->session->set_flashdata('updateProfile_success','success');
      }
      else
      {
          echo "Please enter correct birthdate for age group (7-10) and standard (2nd-5th).";
      }
    }
     elseif($years >=11  && $years <= 14 )
      {
          if($standard >= 10 && $standard <= 13 )
          {
             echo "true";
             $this->session->set_flashdata('updateProfile_success','success');
          }
          else
          {
             echo "Please enter correct birthdate for age group (11-14) and standard (6th-9th).";
          }
         
       }
       else
        {
   
            if($years >=15 && $years <=17 )
            {
                 echo "Competitions are not available for 15-17 age group.";
            }
            else{

              // echo "true";
            }
         
       }

       $this->session->set_flashdata('updateProfile_success','success');
      // header('location:'.base_url().'WebsiteController');


    }else{

      echo "Please enter correct birthdate for age 18+, gender (Male, Female) correspondingly select standard (Male 18+ and Female 18+).";
      // header('location:'.base_url().'WebsiteController/edit_profile');

     // $this->session->set_flashdata('message','Please Enter Correct Birthdate, Gender and Standard');


    }

   // print_r($standard); die();
 
   }
   //check standard and birthdate
// public function check_profile_standard(){
//     // echo "string";
//     $quizweb_user_id = $this->session->userdata('quizweb_user_id');
//     $quizweb_company_id = $this->session->userdata('quizweb_company_id');
//     $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
//     if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url()); }

//     $birthdate = $this->input->post('birthdate');
//     $standard = $this->input->post('standard');
//     // $gender = $this->input->post('gender');
//     $current_date = date("Y-m-d");

//     //difference between bithdate and current date in year

//     $date1 = date("Y-m-d",strtotime($current_date));
//     $date2 = date("Y-m-d",strtotime($birthdate));

//     $diff = abs(strtotime($date2) - strtotime($date1));

//     $years = floor($diff / (365*60*60*24));

//     // print_r($years); 

    

//     // $check_userdata = $this->Website_Model->check_userdata($quizweb_user_id,$birthdate,$standard,$gender); 
//     // foreach ($check_userdata as $value) {
//     //   $birth = $value['birthdate'];
//     //   $standard = $value['standard'];
//     //   $gender = $value['gender'];
//     // }


  

//     if($years >= 3 && $years <= 6 )
//     {
//       if($standard >= 1 && $standard <= 5 )
//       {
//          echo "true";
//          $this->session->set_flashdata('updateProfile_success','success');
//       }
//       else
//       {

//         echo "Please enter correct birthdate from age(3-6) and standard(Nursary-1st).";
//       }
//       // $a= 1; echo $a; echo "true"; this->session->set_flashdata('updateProfile_success','success');
//       // header('location:'.base_url().'WebsiteController');

//     }
//     elseif($years >= 7 && $years <= 10 )
//     {
//        if($standard >= 6 && $standard <= 9 )
//       {
//          echo "true";
//          $this->session->set_flashdata('updateProfile_success','success');
//       }
//       else
//       {
//           echo "Please enter correct birthdate from age(7-10) and standard(2nd-5th).";
//       }
//     }
//     elseif($years >=11  && $years <= 14 )
//       {
//           if($standard >= 10 && $standard <= 13 )
//           {
//              echo "true";
//              $this->session->set_flashdata('updateProfile_success','success');
//           }
//           else
//           {
//              echo "Please enter correct birthdate from age(11-14) and standard(6th-9th).";
//           }
         
//        }
//     {
//     //   // $a= 0; echo $a;
//       // echo "Please enter correct birthdate and standard.";
//       if($years >=11  && $years <= 14 )
//       {
//           if($standard >= 10 && $standard <= 13 )
//           {
//              echo "true";
//              $this->session->set_flashdata('updateProfile_success','success');
//           }
//           else
//           {
//              echo "Please enter correct birthdate from age(11-14) and standard(6th-9th).";
//           }
         
//        }
//     //   // die(); header('location:'.base_url().'WebsiteController/edit_profile'); $this->session->set_flashdata('message','Please Enter Correct Birthdate, Gender and Standard');
//     }

//    // print_r($standard); die();
 
//    }
 
 
  public function edit_profile(){

    // echo "string";


    // $data['stateid'] = "";
    // $data['districtid'] = "";

    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    // // print_r($quizweb_user_id); die();
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
     if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url()); }

    $this->form_validation->set_rules('fullname', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
    $update_data = $_POST;

    // print_r($_POST); die();


        $alternatemobno = $this->input->post('alternatemobno');

       $checkusermobile = $this->Website_Model->check_usermobile($quizweb_user_id,$alternatemobno); 
    if($checkusermobile > 0){

         // echo "This mobile number is already registered." ;
         $this->session->set_flashdata('mobile_error','error'); 
         // return false;


        }else{

          echo "true";

            if($old_image=$this->input->post('old_image')){
      $update_data = array(
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
        'alternatemobno' => $alternatemobno,
        'gender' => $this->input->post('gender'),
        'cityid' => $this->input->post('cityid'),
        'districtid' => $this->input->post('districtid'),
        'stateid' => $this->input->post('stateid'),
        'user_id' => $quizweb_user_id,
        'profile_submitted' =>1,
        'check_one' =>1, 

      );
    }else{
       $update_data = array(
        'parentname' => $this->input->post('parentname'),
        'fullname' => $this->input->post('fullname'),
        'birthdate' => $this->input->post('birthdate'),
        'emailid' => $this->input->post('emailid'),
        'standard' => $this->input->post('standard'),
        'schoolcollegename' => $this->input->post('schoolcollegename'),
        'address' => $this->input->post('address'),
        'pincode' => $this->input->post('pincode'),
        // 'competitionid' => $this->input->post('competition_id'),
        'profile_image' => $this->input->post('profile_image'),
        'alternatemobno' => $alternatemobno,
        'gender' => $this->input->post('gender'),
        'cityid' => $this->input->post('cityid'),
        'districtid' => $this->input->post('districtid'),
        'stateid' => $this->input->post('stateid'),
        'user_id' => $quizweb_user_id,
        'profile_submitted' =>1,
        'check_one' =>1,

      );
    }
   // print_r($update_data); die();
    $this->Website_Model->update_info('user_id', $quizweb_user_id, 'userprofile_master', $update_data);




     
      $update_username = array(

        'user_name' => $this->input->post('fullname'),

       );

    $this->Website_Model->update_info('user_id', $quizweb_user_id, 'user', $update_username);

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
                  $this->Website_Model->update_info('user_id', $quizweb_user_id, 'userprofile_master', $image);
                   // if($_POST['old_profile_image']){ unlink("assets/images/".$_POST['old_profile_image']); }
                  $this->session->set_flashdata('upload_success','File Uploaded Successfully');
       
        } 
        else 
        {
           $error = $this->upload->display_errors();
            $this->session->set_flashdata('upload_error',$error);
        }
      }
       
       // echo "true";
       $this->session->set_flashdata('updateProfile_success','success');
    
      header('location:'.base_url().'WebsiteController');

        }
     

    // }else{

    //    $this->session->set_flashdata('mobile_error','error');
      
    // }
       
}
    $profile_info = $this->Website_Model->get_info('user_id', $quizweb_user_id, 'userprofile_master');
    $data['profile_info'] =$profile_info;

    // print_r($data['profile_info']); 
    // if($profile_info == ''){ header('location:'.base_url().'WebsiteController/edit_profile'); }
    foreach($profile_info as $info){
      $data['update'] = 'update';
      $data['parentname'] = $info->parentname;
      $data['birthdate'] = $info->birthdate;
      $data['emailid'] = $info->emailid;
      $data['standard'] = $info->standard;
      $data['schoolcollegename'] = $info->schoolcollegename;
      $data['address'] = $info->address;
      $data['pincode'] = $info->pincode;
      $data['fullname'] = $info->fullname;
      $data['alternatemobno'] = $info->alternatemobno;
      $data['gender'] = $info->gender;
      $data['cityid'] = $info->cityid;
      $data['districtid'] = $info->districtid;
      $data['stateid'] = $info->stateid;
      $data['check_one'] = $info->check_one;
      $data['profile_image'] = $info->profile_image;
    }
    // $data ['state']=$data['stateid'];
    // $district=$data['districtid'];
    // print_r($state); 
  $data['state'] = $this->Website_Model->fetch_state();
  // $data['city'] = $this->Website_Model->fetch_city1($data['stateid']);
  // $data['district'] = $this->Website_Model->fetch_district1($data['districtid']);
  $data['user_list'] = $this->Website_Model->get_list_by_id('user_id', $quizweb_user_id,'','','','','user'); 

  

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
    // print_r($_POST); die();
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

      public function submit_quizs()
    { 

      // print_r($_POST); die();
      // echo $this->session->userdata('quizweb_user_id');
      // echo "<br>";
      // echo $this->session->userdata('quiz_id'); 
      // echo "<br>";

      $user_id = $this->session->userdata('quizweb_user_id');  
      $competition_id = $this->session->userdata('competitionid');

      // echo $competition_id; die();

      // print_r($competition_id); die();
 

      foreach($_POST as $key => $value)
      {  
          $question_id =  $key;
        
      // echo $question;
        //echo "<br>";

          foreach ($value as $answer) 
             {      
              // echo $question_id; // echo "<br>";
              //  echo $answer;    // echo "<br>";

              $this->Website_Model->submit_quize_answer($user_id,$competition_id,$question_id,$answer);     

           } 
      }
          
      $this->session->set_flashdata('quizsubmit_success','success');
      $this->session->unset_userdata('quiz_id');

      header('location:'.base_url().'WebsiteController/competition_list');


    }
      

  public function star_competion()
  { 
   
    $competition_id = $this->uri->segment(3);
    $this->session->set_userdata('competitionid',  $competition_id);
    // echo $competition_id;   die();
    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url().'WebsiteController'); }
    $this->form_validation->set_rules('question', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {


      $save_data = array(
       
        'dynamiccompetitionid' => $dynamiccompetitionid,
        'question_id' => $this->input->post('question'),
        'selectanswertext' => $this->input->post('selectanswertext'),
        'user_id' => $quizweb_user_id,
      
      );
      // print_r($save_data);
      $this->Website_Model->save_data('userquizsubmit',$save_data);
      // $this->session->set_flashdata('save_success','success');
      // header('location:'.base_url().'WebsiteController/profile_list');
    }

    $data['result'] = $this->Website_Model->quize_get($competition_id);
    
    // print_r($data['result']); die();
    $this->load->view('Website/Include/head',$data);
    $this->load->view('Website/star_quizs',$data);
    $this->load->view('Website/Include/footer',$data);
  }
  /***    user submitted quiz after display quiz correct and incorrect ans of user  ******/


  public function after_user_submitted_quiz_display(){
    $competition_id = $this->uri->segment(3);
    // $user_id = $this->uri->segment(4);

    // print_r($competition_id);
    // print_r($user_id);

    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    if($quizweb_user_id == '' && $quizweb_company_id == ''&& $quizweb_roll_id ==''){ header('location:'.base_url().'User'); }
   
    $data['competition'] = $this->Website_Model->fetch_competition();
    $data['users'] = $this->Website_Model->fetch_user_name($quizweb_user_id);
    $data['result'] = $this->Website_Model->quize_get_front($competition_id,$quizweb_user_id);
    $data['score_display'] = $this->Website_Model->score_display_front($competition_id,$quizweb_user_id);
    $data['quiz_display'] = $this->Website_Model->quiz_display_front($competition_id,$quizweb_user_id,$quizweb_user_id);
    
    
    // print_r($data['result']);

    $this->load->view('Website/Include/head',$data);
    $this->load->view('Website/quiz_display_front',$data);
    $this->load->view('Website/Include/footer',$data);
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



