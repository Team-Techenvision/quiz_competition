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
     
         echo "Invalid Credentials";


      }else{
      
      
        $this->session->set_userdata('quizweb_user_id', $login[0]['user_id'] );
        $this->session->set_userdata('quizweb_company_id', $login[0]['company_id']);
        $this->session->set_userdata('quizweb_roll_id', $login[0]['roll_id']);
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

/**************************    Terms and Coditions     ********************************/
  public function termsandcondition(){

    $this->load->view('Website/Include/head');
    $this->load->view('Website/termsandcondition');
    $this->load->view('Website/Include/footer');
}     

/**************************    Competition Single Page View    *****************************/
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

         $check_already_uploadfile = $this->Website_Model->check_user_uploadfiles($quizweb_user_id,$competitionid);


        // print_r($check_already_uploadfile); die();
   // if($quizweb_user_id== "" && $quizweb_user_id != "" ){


    if($check_already_uploadfile > 0){

      // echo "hii";
      // print_r($check_already_uploadfile);

      // update code
       $update_data = array(
        'competitionid' => $this->input->post('competitionid'),
        'file_format' => $fileformat,
        'user_id' => $quizweb_user_id,
        'uploadfile' => $this->input->post('uploadfile'),
        'upload_image' => $this->input->post('upload_image'),
        'upload_vedio' => $this->input->post('upload_vedio'),
        'upload_audio' => $this->input->post('upload_audio'),
        // 'competitionid' => $this->input->post('competition_id'),
        // 'profile_image' => $this->input->post('profile_image'),
        // 'user_addedby' => $quizweb_user_id,
      );
      // print_r($update_data); die();

      $this->Website_Model->update_info('user_id', $quizweb_user_id, 'competition_uploadfile_submit', $update_data);
      
       //file upload

      if($fileformat=='1'){
        // print_r($fileformat); 
        if($_FILES['uploadfile']['name']){
              $time = time();
              // $image_name = 'profile_image_'.$time;
              $image_name = 'uploadfile_'.$quizweb_user_id.'_'.$time;


              $config['upload_path'] = 'assets/images/competition_files/';

              $config['allowed_types'] = 'doc|docx|pdf|ppt|pptx|pptm|txt';
              $config['file_name'] = $image_name;

              $filename = $_FILES['uploadfile']['name'];
              $ext = pathinfo($filename, PATHINFO_EXTENSION);
              $this->upload->initialize($config); // if upload library autoloaded
             


                     

              if ($this->upload->do_upload('uploadfile') && $quizweb_user_id && $image_name && $ext && $filename) {

                    // print_r($image_name); 


                   // print_r($insert_id);

                  $image['uploadfile'] = $image_name.'.'.$ext;
                  // print_r($image['upload_audio']); die();
                  $this->Website_Model->update_info('user_id', $quizweb_user_id, 'competition_uploadfile_submit', $image);
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
              $ext = pathinfo($filename, PATHINFO_EXTENSION);
              $this->upload->initialize($config); // if upload library autoloaded
             


                     

              if ($this->upload->do_upload('upload_audio') && $quizweb_user_id && $image_name && $ext && $filename) {

                    // print_r($image_name); 


                   // print_r($insert_id);

                  $image['upload_audio'] = $image_name.'.'.$ext;
                  // print_r($image['upload_audio']); die();
                  $this->Website_Model->update_info('user_id', $quizweb_user_id, 'competition_uploadfile_submit', $image);
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
              $ext = pathinfo($filename, PATHINFO_EXTENSION);
              $this->upload->initialize($config); // if upload library autoloaded
             


                     

              if ($this->upload->do_upload('upload_vedio') && $quizweb_user_id && $image_name && $ext && $filename) {

                    // print_r($image_name); 


                   // print_r($insert_id);

                  $image['upload_vedio'] = $image_name.'.'.$ext;
                  // print_r($image['upload_audio']); die();
                  $this->Website_Model->update_info('user_id', $quizweb_user_id, 'competition_uploadfile_submit', $image);
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
      //image upload

      if($fileformat=='4'){

         if($_FILES['upload_image']['name']){
              $time = time();
              // $image_name = 'profile_image_'.$time;
              $image_name = 'upload_image_'.$quizweb_user_id.'_'.$time;


              $config['upload_path'] = 'assets/images/competition_images/';

              $config['allowed_types'] = 'jpg|jpeg|png|gif|mp3';
              $config['file_name'] = $image_name;

              $filename = $_FILES['upload_image']['name'];
              $ext = pathinfo($filename, PATHINFO_EXTENSION);
              $this->upload->initialize($config); // if upload library autoloaded
             


                     

              if ($this->upload->do_upload('upload_image') && $quizweb_user_id && $image_name && $ext && $filename) {

                    // print_r($image_name); 


                   // print_r($insert_id);

                  $image['upload_image'] = $image_name.'.'.$ext;
                  // print_r($image['upload_audio']); die();
                  $this->Website_Model->update_info('user_id', $quizweb_user_id, 'competition_uploadfile_submit', $image);
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
           
      $this->Website_Model->save_data('competition_uploadfile_submit',$save_data);

   
       //file upload

      if($fileformat=='1'){
        // print_r($fileformat); 
        if($_FILES['uploadfile']['name']){
              $time = time();
              // $image_name = 'profile_image_'.$time;
              $image_name = 'uploadfile_'.$quizweb_user_id.'_'.$time;


              $config['upload_path'] = 'assets/images/competition_files/';

              $config['allowed_types'] = 'doc|docx|pdf|ppt|pptx|pptm|txt';
              $config['file_name'] = $image_name;

              $filename = $_FILES['uploadfile']['name'];
              $ext = pathinfo($filename, PATHINFO_EXTENSION);
              $this->upload->initialize($config); // if upload library autoloaded
             


                     

              if ($this->upload->do_upload('uploadfile') && $quizweb_user_id && $image_name && $ext && $filename) {

                    // print_r($image_name); 


                   // print_r($insert_id);

                  $image['uploadfile'] = $image_name.'.'.$ext;
                  // print_r($image['upload_audio']); die();
                  $this->Website_Model->update_info('user_id', $quizweb_user_id, 'competition_uploadfile_submit', $image);
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
              $ext = pathinfo($filename, PATHINFO_EXTENSION);
              $this->upload->initialize($config); // if upload library autoloaded
             


                     

              if ($this->upload->do_upload('upload_audio') && $quizweb_user_id && $image_name && $ext && $filename) {

                    // print_r($image_name); 


                   // print_r($insert_id);

                  $image['upload_audio'] = $image_name.'.'.$ext;
                  // print_r($image['upload_audio']); die();
                  $this->Website_Model->update_info('user_id', $quizweb_user_id, 'competition_uploadfile_submit', $image);
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
              $ext = pathinfo($filename, PATHINFO_EXTENSION);
              $this->upload->initialize($config); // if upload library autoloaded
             


                     

              if ($this->upload->do_upload('upload_vedio') && $quizweb_user_id && $image_name && $ext && $filename) {

                    // print_r($image_name); 


                   // print_r($insert_id);

                  $image['upload_vedio'] = $image_name.'.'.$ext;
                  // print_r($image['upload_audio']); die();
                  $this->Website_Model->update_info('user_id', $quizweb_user_id, 'competition_uploadfile_submit', $image);
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
      //image upload

      if($fileformat=='4'){

         if($_FILES['upload_image']['name']){
              $time = time();
              // $image_name = 'profile_image_'.$time;
              $image_name = 'upload_image_'.$quizweb_user_id.'_'.$time;


              $config['upload_path'] = 'assets/images/competition_images/';

              $config['allowed_types'] = 'jpg|jpeg|png|gif|mp3';
              $config['file_name'] = $image_name;

              $filename = $_FILES['upload_image']['name'];
              $ext = pathinfo($filename, PATHINFO_EXTENSION);
              $this->upload->initialize($config); // if upload library autoloaded
             


                     

              if ($this->upload->do_upload('upload_image') && $quizweb_user_id && $image_name && $ext && $filename) {

                    // print_r($image_name); 


                   // print_r($insert_id);

                  $image['upload_image'] = $image_name.'.'.$ext;
                  // print_r($image['upload_audio']); die();
                  $this->Website_Model->update_info('user_id', $quizweb_user_id, 'competition_uploadfile_submit', $image);
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
      $save_data = array(
       
        'user_pincode' => $this->input->post('user_pincode'),
        'user_mobile' => $this->input->post('user_mobile'),
        'user_name' => $this->input->post('user_name'),
        'user_password' => $this->input->post('user_password'),
        // 'user_addedby' => $quizweb_user_id,
        'is_admin' => 3,
        'roll_id' => 3,
      );

      $mobile = $this->input->post('user_mobile');
   
      $mob = $this->Website_Model->check_reg($mobile);
   
      if(empty($mob) || $mob==""){
    
     $id = $this->Website_Model->save_data('user',$save_data);

      $data_view = array(
            'user_id' => $id,
            'user_name' => $this->input->post('user_name'),
            'user_mobile' => $this->input->post('user_mobile'),
            'user_password' => $this->input->post('user_password'),
            'user_pincode' => $this->input->post('user_pincode'), 
            'profile_submitted' =>0,          
        );

      $this->Website_Model->save_data('userprofile_master',$data_view);
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

        // $this->session->set_flashdata('login_success','success');
        echo "Sign Up Successfully";
        // header('location:'.base_url().'WebsiteController');
        // redirect('WebsiteController');

      

    } 

    }else{
      // print_r($mob);
      echo "Mobile Number is Already Exists";
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



public function insert_profiledata(){


    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
    
    if(empty($quizweb_user_id) && $quizweb_company_id == '' && $quizweb_roll_id ==''){ 
      $this->session->set_flashdata('Login_error','error');
      header('location:'.base_url()); }else{

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
 
  public function edit_profile(){

    // echo "string";
    // print_r($_POST); die();


    // $data['stateid'] = "";
    // $data['districtid'] = "";

    $quizweb_user_id = $this->session->userdata('quizweb_user_id');
    // // print_r($quizweb_user_id); die();
    $quizweb_company_id = $this->session->userdata('quizweb_company_id');
    $quizweb_roll_id = $this->session->userdata('quizweb_roll_id');
     if($quizweb_user_id == '' && $quizweb_company_id == '' && $quizweb_roll_id ==''){ header('location:'.base_url()); }
    $this->form_validation->set_rules('parentname', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
    $update_data = $_POST; 

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

      );
    }

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
      // $data['competitionid'] = $info->competitionid;
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


}
