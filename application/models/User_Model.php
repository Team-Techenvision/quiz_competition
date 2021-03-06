<?php
class User_Model extends CI_Model{

 
    function __construct()
    {
        parent::__construct();
        $this->db1 = $this->load->database('quiz_ecommerce', TRUE);
    }
    public function importData($data) {
  
            $res = $this->db->insert_batch('user',$data);
            if($res){
                return TRUE;
            }else{
                return FALSE;
            }
       
        }
   

//    public function check_compit($competitionid){
// // $this->db->select('*');
//   // print_r($user_mobile); die();
// // $this->db->where('user_id',$quizweb_user_id);
// $this->db->where('competitionid',$competitionid);

// $this->db->from('competition');
// $query = $this->db->get();
// $result = $query->num_rows();
// // print_r($result); die();
// return $result;
// }
 //  function getRecords(){
 
 //   // Load database
 //   // $db1 = $this->load->database('quiz_ecommerce', TRUE);

 //   // Select records from 1st database
 //   $this->db1->select('*');
 //   $q = $this->db1->get('customer_information');
 //   $result1 = $q->result_array();

 //    $response = array("response1"=>$result1);

 //   print_r($response); die();

 //   // // Select records from 2nd database
 //   // $db2->select('*');
 //   // $q = $db2->get('users');
 //   // $result2 = $q->result_array();
 
 //   // $response = array("response1"=>$result1,"response2"=>$result2);
 //   // return $response;
 // }

  function check_login($email, $password){
    $query = $this->db->select('*')
      ->where('user_email', $email)
      ->where('user_password', md5($password))
      ->from('user')
      ->get();
    $result = $query->result_array();
    return $result;
  }
  function check_reg_m($mobile){
    $query = $this->db->select('*')
      ->where('user_mobile', $mobile)
      // ->where('user_email', $email)
     
      ->from('user')
      ->get();
    $result = $query->result_array();
    // print_r($result);
    return $result;
  }
  function check_reg1_e($email){
    $query = $this->db->select('*')
      ->where('user_email', $email)
      // ->where('user_email', $email)
     
      ->from('user')
      ->get();
    $result = $query->result_array();

    // print_r($result);
    return $result;
  }
 
   function check_regdb1_e($email1){
    $query = $this->db1->select('*')
            ->from('customer_information')
            ->where('customer_email',$email1)
            ->get();
    $result = $query->result_array();

    return $result;
  }
  public function save_data($tbl_name, $data){
    $this->db->insert($tbl_name, $data);
    $insert_id = $this->db->insert_id();
    return  $insert_id;
  }
  public function save_data1($tbl_name, $data){
    $this->db1->insert($tbl_name, $data);
    $insert_id = $this->db1->insert_id();
    return  $insert_id;
  }
  //   public function update_info1($id_type, $id, $tbl_name, $data){
  //   $this->db1->where($id_type, $id)
  //   ->update($tbl_name, $data);
  // }  
  //  public function update($competitionid,$data){
  //   $this->db->where($competitionid, $competitionid)
  //   ->update('competitionquizsubject',$data);
  // }

  public function check_participate($user_id,$competition_id){
$this->db->select('*');
$this->db->where('competitionid',$competition_id);
$this->db->where('user_id',$user_id);
$this->db->from('profile');
$query = $this->db->get();
$result = $query->num_rows();

// print_r($result); die();
return $result;
}
//check user entered data of gender, standard and birthdate
public function check_userdata($quizweb_user_id,$birthdate,$standard,$gender){
// $this->db->select('*');
  // print_r($user_mobile); die();
$this->db->where('user_id',$quizweb_user_id);
$this->db->where('birthdate',$birthdate);
$this->db->where('standard',$standard);
$this->db->where('gender',$gender);

$this->db->from('userprofile_master');
$query = $this->db->get();
$result = $query->result_array();
// print_r($result); die();
return $result;
}

// competition check already exists for this standard

public function check_standard_competition($title,$standard){

     $this->db->where('title',$title);
     $this->db->where('standard',$standard);
     // $this->db->group_by('competitionid');
    $this->db->from('competition');
    $query = $this->db->get();
    $result = $query->result_array();
    // print_r($result); die();

     return $result;
  }
  public function banner_list($bannerid){
    $this->db->select('*');
    // $this->db->where('is_admin', 0);
    // if($company_id != ''){
    //   $this->db->where('company_id', $company_id);
    // }
    $this->db->from('banner');
    $query = $this->db->get();
    $result = $query->result();
     return $result;
  }
   public function assign_winner_list($assignwinnerid){
    $this->db->select('assignwinner.*,competition.*,user.*,points_master.*');

    $this->db->join('competition', 'assignwinner.competitionid = competition.competitionid', 'left');

    $this->db->join('user', 'assignwinner.user_id = user.user_id', 'left');

    $this->db->join('points_master', 'assignwinner.pointsid = points_master.pointsid', 'left');

    $this->db->from('assignwinner');
    $query = $this->db->get();
    $result = $query->result();
     return $result;
  }
   public function assign_competition_list($assigncompetitionid){
    $this->db->select('assigncompetition.*,competition.*');

    $this->db->join('competition', 'assigncompetition.competitionid = competition.competitionid', 'left');

    // $this->db->join('user', 'assigncompetition.user_id1 = user.user_id ', 'left');
    // $this->db->join('user', 'assigncompetition.user_id2 = user.user_id', 'left');

    // $this->db->join('points_master', 'assignwinner.pointsid = points_master.pointsid', 'left');

    $this->db->from('assigncompetition');
    $query = $this->db->get();
    $result = $query->result();
     return $result;
  }
  public function get_U_name($u_id){
    $u_name1= "";

    $this->db->where('user_id',$u_id);
    $this->db->from('user');
    $query = $this->db->get();
    $result = $query->result_array();

    foreach ($result as  $value) {
      $u_name1 = $value['user_name'];
    }
    // $num_rows = $query->num_rows();
    // print_r($num_rows['user_name']);
     return $u_name1;
  }
   public function class_list($tabinputtextid){
    $this->db->select('*');
    // $this->db->where('is_admin', 0);
    // if($company_id != ''){
    //   $this->db->where('company_id', $company_id);
    // }
    $this->db->from('tabcompetition');
    $query = $this->db->get();
    $result = $query->result();
     return $result;
  }
    public function competitiontype_list($competitiontypeid){
    $this->db->select('*');
    // $this->db->where('is_admin', 0);
    // if($company_id != ''){
    //   $this->db->where('company_id', $company_id);
    // }
    $this->db->from('competitiontype');
    $query = $this->db->get();
    $result = $query->result();
     return $result;
  }
  public function points_list($pointsid){
    // $this->db->select('*');
    $this->db->select('points_master.*,competition.*');
    $this->db->join('competition', 'points_master.competitionid = competition.competitionid', 'left');
    // $this->db->join('levelmaster', 'prizemaster.levelid = levelmaster.levelid', 'left');
    // $this->db->where('is_admin', 0);
    // if($company_id != ''){
    //   $this->db->where('company_id', $company_id);
    // }
    // $this->db->group_by('points_master.competitionid');
    $this->db->from('points_master');
    $query = $this->db->get();
    $result = $query->result();
     return $result;
  }
  public function checkpoints_competition($competitionid){

     $this->db->where('competitionid',$competitionid);
     $this->db->group_by('competitionid');
    $this->db->from('points_master');
    $query = $this->db->get();
    $result = $query->result_array();
    // print_r($result); die();

     return $result;
  }
   public function check_level($levelname){

     $this->db->where('levelname',$levelname);
     // $this->db->group_by('competitionid');
    $this->db->from('levelmaster');
    $query = $this->db->get();
    $result = $query->num_rows();
    // print_r($result); die();

     return $result;
  }
   public function check_tabcompetition_class($tabinputtext){

     $this->db->where('tabinputtext',$tabinputtext);
     // $this->db->group_by('competitionid');
    $this->db->from('tabcompetition');
    $query = $this->db->get();
    $result = $query->result_array();
    // print_r($result); die();

     return $result;
  }
   public function check_competitiontype($competitiontype){

     $this->db->where('competitiontype',$competitiontype);
     // $this->db->group_by('competitiontype');
    $this->db->from('competitiontype');
    $query = $this->db->get();
    $result = $query->result_array();
    // print_r($result); die();

     return $result;
  }
   public function check_dynamic_question($competitionid,$question){

     $this->db->where('competitionid',$competitionid);
     $this->db->where('question',$question);
     // $this->db->group_by('competitionid');
    $this->db->from('dynamiccompetition');
    $query = $this->db->get();
    $result = $query->result_array();
    // print_r($result); die();

     return $result;
  }
  public function save_points($competition_id,$winner,$points,$conversionpoints)
  {
     // print_r($_POST); die();

      $data = array(
          'competitionid' => $competition_id,
          'winnerposition' => $winner,
          'points' => $points,
          'conversionpoints' => $conversionpoints  
        );
        $this->db->insert('points_master',$data);
  }
  //  public function update_points($competition_id,$winner,$points,$conversionpoints)
  // {
  //    print_r($_POST); die();

  //     $data = array(
  //         'competitionid' => $competition_id,
  //         'winnerposition' => $winner,
  //         'points' => $points,
  //         'conversionpoints' => $conversionpoints  
  //       );
  //       $this->db->update('points_master', $data);
  //       // $this->User_Model->update_info('pointsid', $pointsid, 'points_master', $update_data);
  // }
    public function admincheck_quizList(){
    $this->db->select('*');
    // $this->db->where('is_admin', 0);
    // if($company_id != ''){
    //   $this->db->where('company_id', $company_id);
    // }
    $this->db->from('admincheck_answer');
    // $this->db->group_by('user_id');

    $query = $this->db->get();
    $result = $query->result();
     return $result;
  }
  //  function check_userscore($competitionid)
  // {
  //   $this->db->select('userscore_master.*,user.*,competition.*');
  //   $this->db->join('user', 'userscore_master.user_id = user.user_id', 'left');
  //   $this->db->join('competition', 'userscore_master.competitionid = competition.competitionid', 'left');
  
  
  // // $this->db->group_by("userscore_master.user_id");
  // $this->db->where('userscore_master.competitionid', $competitionid);
  // $query = $this->db->get("userscore_master");
  // return $query->result();
  // // print_r($query);
  // }
// public function check_userscore($competition_id){
// $this->db->select('userscore_master.*,profile.*');
//  $this->db->join('profile', 'userscore_master.user_id = profile.user_id', 'left');

// $this->db->where('userscore_master.competitionid',$competition_id);
// // $this->db->where('user_id',$quizweb_user_id);
// $this->db->from('userscore_master');
// $query = $this->db->get();
// $result = $query->result();
// return $result;
// }
 public function check_userscore($competition){
    // $this->db->select('*');
    $this->db->select('*');
 // $this->db->join('profile', 'userscore_master.user_id = profile.user_id', 'left');

$this->db->where('competitionid',$competition);
// $this->db->where('user_id',$quizweb_user_id);
$this->db->from('userscore_master');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }
 // public function addassigncompetition_list($user_id){
 //      $pincode="";
 //      $competition="";
 //      $user="";
 //      // echo $user_id;die();

 //      $this->db->where('user_id',$user_id);
 //      $query = $this->db->get('profile');
 //      $result = $query->result_array();
      
 //      foreach ($result as $value) {
 //        # code...
 //      $pincode = $value['pincode'];
 //      $competition = $value['competitionid'];
 //      $user = $value['user_id'];

 //      }
 //       $this->db->select('profile.*,user.*');
 //       $this->db->join('user', 'profile.user_id = user.user_id', 'inner');
 //       $this->db->where('profile.user_id !=', $user);
 //       $this->db->where('profile.competitionid', $competition);
 //       $this->db->where('profile.pincode', $pincode);
 //       $query = $this->db->get('profile');
 //       $result = $query->result_array();

 //       return $result;
 //    }
//add_assign winner 
   function fetch_userscore($competitionid)
  {

     // $points="";
      // $competition="";
      // $user="";

     $this->db->select('userscore_master.*,user.*,competition.*,points_master.*');
     $this->db->join('user', 'userscore_master.user_id = user.user_id', 'left');
     $this->db->join('competition', 'userscore_master.competitionid = competition.competitionid', 'left');
     $this->db->join('points_master', 'userscore_master.competitionid = points_master.competitionid', 'left');
  
      $this->db->group_by("userscore_master.user_id");
      $this->db->order_by("userscore_master.score_percentage","DESC");
      $this->db->where('userscore_master.competitionid', $competitionid);
      $query = $this->db->get("userscore_master");
      $result = $query->result_array();
      return $query->result();
      
  }
   public function fetch_points($competition){
    // $this->db->select('*');
    $this->db->select('*');
 // $this->db->join('profile', 'userscore_master.user_id = profile.user_id', 'left');
    $this->db->order_by('points_master.competitionid');

    $this->db->where('competitionid',$competition);
    $this->db->from('points_master');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }
   public function fetch_assigncompetition($userid1,$competitionid){
    // $this->db->select('*');
    $this->db->select('*');
 // $this->db->join('profile', 'userscore_master.user_id = profile.user_id', 'left');
    $this->db->order_by('assigncompetition.competitionid');

    // $this->db->where('user_id1',$userid1);
    $this->db->where('user_id1',$userid1);
    $this->db->or_where('user_id2',$userid1);
    $this->db->where('competitionid',$competitionid);
    $this->db->from('assigncompetition');
    $query = $this->db->get();
    $result = $query->result();
    // print_r($result); die();
    return $result;
  }
  public function admincheck_quiz($user_id,$competition_id,$question_id,$answer_text)
  {
     // print_r($_POST); die();

      $data = array(
          'user_id' => $user_id,
          'competitionid' => $competition_id,
          'question_id' => $question_id,
          'checkanswer' => $answer_text  
            );
           $this->db->insert('admincheck_answer',$data);
  }
  public function score_admincheck_answer($user_id,$competition_id,$checkanswer){
  $this->db->select('*');
  $this->db->where('competitionid',$competition_id);
  $this->db->where('checkanswer',$checkanswer);
  $this->db->where('user_id',$user_id);
  $this->db->from('admincheck_answer');
  $query = $this->db->get();
  $result = $query->num_rows();
  // print_r($result);die();
  return $result;
  }
   public function score_admincheck_question($user_id,$competition_id,$question_id){
  $this->db->select('*');
  $this->db->where('competitionid',$competition_id);
  $this->db->group_by('question_id');
  $this->db->group_by('question_id',$question_id);
  $this->db->where('user_id',$user_id);
  $this->db->from('admincheck_answer');
  $query = $this->db->get();
  $result = $query->num_rows();
  // print_r($query->num_rows());die();
  return $result;
  }
// public function check_quiz_submit($quizweb_user_id,$competition_id){
// $this->db->select('*');
// $this->db->where('dynamiccompetitionid',$competition_id);
// $this->db->where('user_id',$quizweb_user_id);
// $this->db->from('userquizsubmit');
// $query = $this->db->get();
// $result = $query->result();
// return $result;
// }
  // public function prizelisteditbyid($prizeid){
  //   // $this->db->select('*');
  //   $this->db->select('prizemaster.*,competition.*,levelmaster.*');
  //   $this->db->join('competition', 'prizemaster.competitionid = competition.competitionid', 'left');
  //   $this->db->join('levelmaster', 'prizemaster.levelid = levelmaster.levelid', 'left');

  //   // $this->db->where('prizemaster.competitionid', $competitionid);
  //   // $this->db->where('prizemaster.levelid', $levelid);
  //   $this->db->from('prizemaster');
  //   $query = $this->db->get();
  //   $result = $query->result();
  //   return $result;
  // }

  
  public function level_list($levelid){
    $this->db->select('*');
    // $this->db->where('is_admin', 0);
    // if($company_id != ''){
    //   $this->db->where('company_id', $company_id);
    // }
    $this->db->from('levelmaster');
    $query = $this->db->get();
    $result = $query->result();
     return $result;
  }
  // function getcompetitionlist()
  // {
  
  // $this->db->order_by("competitionid", "");
  // // $this->db->where('is_admin', 1);
  // $query = $this->db->get("competition");
  // return $query->result();
  // // print_r($query);
  // }
  public function userlist_by_competitionid($competitionid){
  
      $this->db->select('profile.*,competition.title,user.user_name');
      $this->db->join('user', 'profile.user_id = user.user_id', 'inner');
      $this->db->join('competition', 'profile.competitionid = competition.competitionid', 'inner');
    
    
      $this->db->where('profile.competitionid',$competitionid);
      $query = $this->db->get('profile');
      $result = $query->result_array();
      return $result;

  }
  public function competitionName_list($competitionid){
    // print_r($competitionid);
   //   // $today = date('Y-m-d');
   //   // $this->db->select('*');
   //  $this->db->select('competition.*');
   //  // $this->db->join('tabcompetition', 'competition.tabinputtextid = tabcompetition.tabinputtextid', 'inner');
   // // $this->db->order_by('enddate ', 'DESC');
   //  $this->db->from('competition');
   //  $this->db->where('competitionid',$competitionid);
   //  $query = $this->db->get();
   //  $result = $query->result_array();
      $this->db->select('competition.*,competitiontype.*,tabcompetition.*');
      $this->db->join('competitiontype', 'competition.competitiontypeid = competitiontype.competitiontypeid', 'inner');
      $this->db->join('tabcompetition', 'competition.standard = tabcompetition.tabinputtextid', 'inner');
    
      $this->db->where('competitionid',$competitionid);
      $query = $this->db->get('competition');
      $result = $query->result_array();
      // print_r($result); die();
      return $result;

  }
  function fetch_level()
  {
  
  $this->db->order_by("levelid", "");
  // $this->db->where('is_admin', 1);
  $query = $this->db->get("levelmaster");
  return $query->result();
  // print_r($query);
  }
  function fetch_competitiontype()
  {
  
  $this->db->order_by("competitiontypeid", "");
  // $this->db->where('is_admin', 1);
  $query = $this->db->get("competitiontype");
  return $query->result();
  // print_r($query);
 }

  public function quizcompetition_list($competitionid){
    $this->db->select('*');
    // $this->db->where('is_admin', 0);
    // if($company_id != ''){
    //   $this->db->where('company_id', $company_id);
    // }
     $this->db->select('dynamiccompetition.*,competition.*');
    $this->db->join('competition', 'dynamiccompetition.competitionid = competition.competitionid', 'left');
    $this->db->where('dynamiccompetition.competitionid', $competitionid);
    $this->db->from('dynamiccompetition');
    $query = $this->db->get();
    $result = $query->result();
     return $result;

  }
  function fetch_dynamicquizlist($dynamiccompetitionid){
    
    $this->db->order_by("dynamiccompetitionid", "");
    $this->db->where('dynamiccompetitionid', $dynamiccompetitionid);
    $query = $this->db->get("dynamiccompetition");
    // print_r($query->result_array()); die();
    return $query->result_array();
  }

 function fetch_quizquestion($que_id)
 {
  
  $this->db->order_by("dynamiccompetitionid", "");
  $this->db->where('dynamiccompetitionid', $que_id);
  $query = $this->db->get("dynamiccompetition");  
  
// $result=$query->result_array();  die();
  return $query->result_array();
  // print_r($query);
 }
    public function company_list(){
     $this->db->select('*');
    // $this->db->where('is_admin', 0);
    // if($company_id != ''){
    //   $this->db->where('company_id', $company_id);
    // }
    $this->db->from('company');
    $query = $this->db->get();
    $result = $query->result();
     return $result;
  }
   public function pincode_list($pincodeid){
    // $this->db->select('*');
     $this->db->select('pincodemaster.*,country.*,state.*');
    $this->db->join('country', 'pincodemaster.countryid = country.countryid', 'left');
    $this->db->join('state', 'pincodemaster.stateid = state.stateid', 'left');
    // $this->db->where('is_admin', 0);
    // if($company_id != ''){
    //   $this->db->where('company_id', $company_id);
    // }
    $this->db->from('pincodemaster');
    $query = $this->db->get();
    $result = $query->result();
     return $result;
  }
  //  public function getassigncompetition_list($user_id){
  //   $this->db->select('*');
  //   $this->db->where('is_admin', 1);
  //   // if($company_id != ''){
  //   //   $this->db->where('company_id', $company_id);
  //   // }
  //   $this->db->from('user');
  //   $query = $this->db->get();
  //   $result = $query->result();
  //    return $result;
  // }
  // public function getaddcompetition_list($user_id){
  //   $this->db->select('*');
  //   $this->db->where('is_admin', 1);
  //   // if($company_id != ''){
  //   //   $this->db->where('company_id', $company_id);
  //   // }
  //   $this->db->from('user');
  //   $query = $this->db->get();
  //   $result = $query->result();
  //    return $result;
  // }
  function fetch_userprofile()
 {
  
  $this->db->order_by("user_mobile", "");
  // $this->db->where('user_mobile', $user_mobile);
  $query = $this->db->get("userprofile_master");
  return $query->result();
  // print_r($query);
 }
 //  function fetch_user()
 // {
  
 //  $this->db->order_by("user_id", "");
 //  // $this->db->where('user_id', $user_id);
 //  $query = $this->db->get("user");
 //  return $query->result();
 //  // print_r($query);
 // }
 public function search_participateinfo($user_mobile){
     $this->db->select('*');
    // $this->db->select('userprofile_master.*,user.*');
//     $this->db->join('pincodemaster', 'profile.pincode = pincodemaster.pincodeid', 'left');
//     $this->db->join('competition', 'profile.competitionid = competition.competitionid', 'left');
    $this->db->join('user', 'userprofile_master.user_mobile = user.user_mobile', 'inner');
    // $this->db->where('competitionid', $competitionid);
    $this->db->where('userprofile_master.user_mobile', $user_mobile);

    $this->db->from('userprofile_master');
 
    $query = $this->db->get();
    $result = $query->result();
    // print_r($result);die();
    return $result;
   }
    function fetch_competition()
 {
  $this->db->order_by("competitionid", "ASC");
  $c_date = date('Y-m-d');   
  $this->db->where('enddate >=', $c_date);
  // $this->db->where('competitiontypeid',1);
  $query = $this->db->get("competition");
  return $query->result();
  // print_r($query);
 }
 //for assignwinner

   function fetch_competition_forwinner()
 {
  $this->db->order_by("competitionid", "ASC");
  $c_date = date('Y-m-d');   
  $this->db->where('enddate <=', $c_date);
  $this->db->where('status',1);
  $query = $this->db->get("competition");
  return $query->result();
  // print_r($query);
 }
   function fetch_competition_usertype()
   {
    $this->db->order_by("competitionid", "ASC");
    $c_date = date('Y-m-d');   
    $this->db->where('enddate >=', $c_date);
    $this->db->where('competitionusertype',2);
    $query = $this->db->get("competition");
    return $query->result();
    // print_r($query);
    }
   function fetch_competition_for_quiz()
 {
  $this->db->order_by("competitionid", "ASC");
  $c_date = date('Y-m-d');   
  $this->db->where('enddate >=', $c_date);
  $this->db->where('competitiontypeid',1);
  $query = $this->db->get("competition");
  return $query->result();
  // print_r($query);
 }
 function fetch_pincode()
 {
  
  $this->db->order_by("pincode", "");
  // $this->db->where('is_admin', 1);
  $query = $this->db->get("pincodemaster");
  return $query->result();
  // print_r($query);
 }
 //quiz_display userlist fetch


 // public function fetch_US($competitionid){

 //    $sql="SELECT userquizsubmit.user_id,userquizsubmit.dynamiccompetitionid,userscore_master.score_percentage FROM userquizsubmit LEFT JOIN userscore_master ON(userscore_master.competitionid=userquizsubmit.dynamiccompetitionid AND userscore_master.user_id=userquizsubmit.user_id) WHERE (userquizsubmit.dynamiccompetitionid=$competitionid) GROUP BY(userquizsubmit.user_id)";    
 //        $query = $this->db->query($sql);
 //        $result = $query->result_array();

 //        return $result;
 //        print_r($result); die();
 // }


 public function fetch_userlist_quiz($competitionid){
    // $this->db->select('userquizsubmit.*,user.*,userscore_master.user_id As score_user_id,userscore_master.score_percentage,userscore_master.competitionid,competition.*');
    $this->db->select('userquizsubmit.*,user.*,userscore_master.user_id As score_user_id,userscore_master.score_percentage,userscore_master.competitionid,competition.*,userquizsubmit.user_id,userquizsubmit.dynamiccompetitionid,userscore_master.score_percentage');
    
    $this->db->join('competition', 'userquizsubmit.dynamiccompetitionid = competition.competitionid', 'left');

    $this->db->join('user', 'user.user_id = userquizsubmit.user_id', 'left');
  
    $this->db->join('userscore_master', 'userscore_master.competitionid = userquizsubmit.dynamiccompetitionid AND userscore_master.user_id = userquizsubmit.user_id ' , 'left' );

    $this->db->where('userquizsubmit.dynamiccompetitionid', $competitionid);
    
    $this->db->group_by('userquizsubmit.user_id');
   
    $this->db->from('userquizsubmit');


    $query = $this->db->get();
    $result = $query->result();
    // print_r($result);die();
    return $result;
 }
  public function fetch_userlist_othercompetition($competitionid){
    $this->db->select('competition_uploadfile_submit.*,user.*,competition.*');
//     $this->db->join('pincodemaster', 'profile.pincode = pincodemaster.pincodeid', 'left');
    $this->db->join('competition', 'competition_uploadfile_submit.competitionid = competition.competitionid ', 'left');

    $this->db->join('user', 'competition_uploadfile_submit.user_id = user.user_id', 'left');

    // $this->db->join('userscore_master', 'userquizsubmit.user_id = userscore_master.user_id', 'inner');

    // $this->db->group_by('competition_uploadfile_submit.competitionid');

    $this->db->where('competition_uploadfile_submit.competitionid', $competitionid);

    $this->db->from('competition_uploadfile_submit');
 
    $query = $this->db->get();
    $result = $query->result();
    // print_r($result);die();
    return $result;
 }
function fetch_user_uploadfile($competitionid)
 {
  $this->db->select('competition_uploadfile_submit.*,user.*');
//     $this->db->join('pincodemaster', 'profile.pincode = pincodemaster.pincodeid', 'left');
    $this->db->join('user', 'competition_uploadfile_submit.user_id = user.user_id', 'inner');

  
  // $this->db->order_by("pincode", "");
  $this->db->where('competitionid', $competitionid);
  $query = $this->db->get("competition_uploadfile_submit");
  return $query->result();
  // print_r($query);
 }

 public function fetch_userlist($competitionid){
     // $this->db->select('*');
    $this->db->select('profile.*,user.*,competition.*');
//     $this->db->join('pincodemaster', 'profile.pincode = pincodemaster.pincodeid', 'left');
    $this->db->join('competition', 'profile.competitionid = competition.competitionid', 'left');

    $this->db->join('user', 'profile.user_id = user.user_id', 'inner');
    $this->db->where('profile.competitionid', $competitionid);
    // $this->db->where('userquizsubmit.user_id', $user_id);

    $this->db->from('profile');
 
    $query = $this->db->get();
    $result = $query->result();
    // print_r($result);die();
    return $result;
   }
   public function fetch_user_name($user_id){
     // $this->db->select('*');
    // $this->db->select('user.*,competition.*');
//     $this->db->join('pincodemaster', 'profile.pincode = pincodemaster.pincodeid', 'left');
    // $this->db->join('competition', 'profile.competitionid = competition.competitionid', 'left');
    // $this->db->join('user', 'userquizsubmit.user_id = user.user_id', 'inner');
    // $this->db->where('profile.competitionid', $competitionid);
    $this->db->where('user.user_id', $user_id);

    $this->db->from('user');
 
    $query = $this->db->get();
    $result = $query->result();
    // print_r($result);die();
    return $result;
   }
//    public function check_userquiz_answer($user_id){
//      // $this->db->select('*');
//     // $this->db->select('user.*,competition.*');
// //     $this->db->join('pincodemaster', 'profile.pincode = pincodemaster.pincodeid', 'left');
//     // $this->db->join('competition', 'profile.competitionid = competition.competitionid', 'left');
//     // $this->db->join('user', 'userquizsubmit.user_id = user.user_id', 'inner');
//     // $this->db->where('profile.competitionid', $competitionid);
//     $this->db->where('userquizsubmit.user_id', $user_id);

//     $this->db->from('userquizsubmit');
 
//     $query = $this->db->get();
//     $result = $query->result();
//     // print_r($result);die();
//     return $result;
//    }
    public function quize_get($quiz_id,$user_id)
  {
    $this->db->select('userquizsubmit.*,dynamiccompetition.*');   
     $this->db->join('dynamiccompetition', 'userquizsubmit.question_id = dynamiccompetition.dynamiccompetitionid', 'inner');
    // $this->db->group_by('question_id');

    $this->db->where('userquizsubmit.dynamiccompetitionid',$quiz_id);
    $this->db->where('userquizsubmit.user_id',$user_id);
    $result = $this->db->get('userquizsubmit');
    //$result = $this->db->query($cmd);
    // print_r($result->result_array());die();
   
    return $result->result_array();

  }
  public function competitionName($competitionid){
    
    $this->db->select('*');
    $this->db->where('competitionid',$competitionid);
    $result = $this->db->get('competition');
   
    return $result->result_array();


   }
    public function uploadfile_download($quiz_id)
   {
    $this->db->select('competition_uploadfile_submit.*');
    // $this->db->join('competition', 'competition_uploadfile_submit.competitionid = competition.competitionid', 'inner');

    $this->db->where('competition_uploadfile_submit.competitionid',$quiz_id);
    $result = $this->db->get('competition_uploadfile_submit');
    //$result = $this->db->query($cmd);
    //print_r($result->result_array());die();
   
    return $result->result_array();
  }
    public function download($quiz_id)
  {
    $this->db->select('*');
    $this->db->where('competitionid',$quiz_id);
    $result = $this->db->get('competition_uploadfile_submit');
   
    return $result->result_array();

  
  }

  public function view_ques($q_id)
  {
    $this->db->select('title');
    $this->db->where('competitionid',$q_id);
    $result = $this->db->get('competition');
    //print_r($result->result_array());die();
    return $result->result_array();
  }
// //for dependancy fetch user by competition
//     function fetch_user($competitionid)
//  {
//  // $this->db->join('user', 'userquizsubmit.user_id = user.user_id', 'inner');

//   $this->db->where('dynamiccompetitionid', $competitionid);
//   $this->db->group_by('user_id');
//   $this->db->order_by('user_id', 'ASC');
//   $query = $this->db->get('userquizsubmit');
//   // print_r($query); die();
//   $output = '<option value="">Select User</option>';
//   foreach($query->result() as $row)
//   {
//    // $output .= '<option value="'.$row->user_id.'">'.$row->user_name.'</option>';
//    $output .= '<option value="'.$row->user_id.'">'.$row->user_id.'</option>';
//   }
//   return $output;
//  }
 // function fetch_pincode()
 // {
  
 //  $this->db->order_by("user_id", "");
 //  $this->db->where('is_admin', 1);
 //  $query = $this->db->get("userquizsubmit");
 //  return $query->result();
 //  // print_r($query);
 // }

 public function assigncompetition_list($competitionid,$pincode){
     // $this->db->select('*');
    $this->db->select('profile.*,user.*,competition.*');
//     $this->db->join('pincodemaster', 'profile.pincode = pincodemaster.pincodeid', 'left');
    $this->db->join('competition', 'profile.competitionid = competition.competitionid', 'left');
    $this->db->join('user', 'profile.user_id = user.user_id', 'left');
    $this->db->where('profile.competitionid', $competitionid);
       // $this->db->order_by('profile.user_id');
    $this->db->where('pincode', $pincode);

    $this->db->from('profile');

    
    $query = $this->db->get();
    $result = $query->result();
    return $result;
   }
//    public function addassigncompetition_list($user_id){
    
//    /* echo $user_id;die();*/
//      // $this->db->select('*');
//     $this->db->select('profile.*,user.*');
//     // $this->db->select
// //     $this->db->join('pincodemaster', 'profile.pincode = pincodemaster.pincodeid', 'left');
// //     $this->db->join('competition', 'profile.competitionid = competition.competitionid', 'left');
//     $this->db->join('user', 'profile.user_id = user.user_id', 'inner');
  
//     $this->db->where('profile.user_id !=', $user_id);
//     // $this->db->where('profile.competitionid', $competitionid);
//     // $this->db->where('profile.pincode', $pincode);
//     $this->db->from('profile');

    
//     $query = $this->db->get();
//     $result = $query->result_array();
//     // print_r($result);die();
//     return $result;
//    }
    public function addassigncompetition_list($user_id,$compid){
      $pincode="";
      $competition="";
      $user="";

      // $comp =53;
      // echo $user_id;die();

       // $this->db->order_by('user_id');
      $this->db->where('user_id',$user_id);
      $this->db->where('competitionid',$compid);
      $query = $this->db->get('profile');
      $result = $query->result_array();
      // print_r($result); die();
      foreach ($result as $value) {
        # code...
      $pincode = $value['pincode'];
      $competition = $value['competitionid'];
      $user = $value['user_id'];

       

     }
     // print_r($user);
     // print_r($competition);
     // print_r($pincode);
       $this->db->select('profile.*,user.*');
       $this->db->join('user', 'profile.user_id = user.user_id', 'inner');
       $this->db->where('profile.user_id !=', $user);
       $this->db->where('profile.competitionid', $competition);
       $this->db->where('profile.pincode', $pincode);
       $query = $this->db->get('profile');
       $result = $query->result_array();
       return $result;
       
       // return $result;
       
    }
 
    public function assignwinner_list($competitionid,$pincode){
     // $this->db->select('*');
    $this->db->select('assigncompetition.*,user.*,competition.*');
//     $this->db->join('pincodemaster', 'profile.pincode = pincodemaster.pincodeid', 'left');
    $this->db->join('competition', 'assigncompetition.competitionid = competition.competitionid', 'left');
    $this->db->join('user', 'assigncompetition.user_id1 = user.user_id', 'left');
    // $this->db->join('user', 'assigncompetition.user_id2 = user.user_id', 'left');
    $this->db->where('assigncompetition.competitionid', $competitionid);
    $this->db->where('assigncompetition.pincode', $pincode);

    $this->db->from('assigncompetition');

    
    $query = $this->db->get();
    $result = $query->result();
    return $result;
   }

//    public function addassigncompetition_list($competitionid,$pincode){
//     $this->db->select('profile.*,user.*');
// //     $this->db->join('pincodemaster', 'profile.pincode = pincodemaster.pincodeid', 'left');
// //     $this->db->join('competition', 'profile.competitionid = competition.competitionid', 'left');
//     $this->db->join('user', 'profile.user_id = user.user_id', 'left');
//     $this->db->where('competitionid', $competitionid);
//     $this->db->where('pincode', $pincode);

//     $this->db->from('profile');

    
//     $query = $this->db->get();
//     $result = $query->result();
//     return $result;
//    }
  function fetch_profile_list($user_id)
 {
  $this->db->where("user_id",$user_id);
  $query = $this->db->get("profile");
  return $query->result();
  // print_r($query);
 }
 public function getcompetition_info($competitionid){
    $this->db->select('competition.*,tabcompetition.*');

    $this->db->join('tabcompetition', 'competition.tabinputtextid = tabcompetition.tabinputtextid', 'left');

    $this->db->where('competitionid', $competitionid);
    $this->db->from('competition');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }
   function fetch_userid($userprofileid)
   {  
     $userpro="";

      $this->db->select('userprofileid');
      $this->db->where('user_id', $userprofileid);
      $this->db->from('userprofile_master');
      $query = $this->db->get();
      $result = $query->result_array();
   
     foreach ($result as  $value) {
       $userpro = $value['userprofileid'];

     }
     // echo $userpro; die();
     return $userpro;

   }
  function fetch_profile($competitionid)
 {
  $this->db->where('competitionid', $competitionid);
  $this->db->order_by('parentname', 'ASC');
  $query = $this->db->get('profile');
  // echo $query;
  $output = '<option value="">Select profile</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->profileid.'">'.$row->parentname.'</option>';
  }
  return $output;
  // echo $output;
 }

 //for winner fetch city
 // function fetch_city()
 // {
 //  $this->db->order_by("cityname", "ASC");
 //  $query = $this->db->get("city");
 //  return $query->result();
 //  // print_r($query);
 // }
   public function participate_list($user_id){
    // echo $user_id;
    // print_r($user_id); die();
    // $this->db->select('*');
     $this->db->select('profile.user_id,profile.competitionid,competition.title,user.user_name');
    $this->db->join('competition', 'profile.competitionid = competition.competitionid', 'left');
    $this->db->join('user', 'profile.user_id = user.user_id', 'left');
    // $this->db->order_by('profileid', "DESC");
    // if($company_id != ''){
      $this->db->where('profile.user_id', $user_id);
    // }
    $this->db->from('profile');
    $query = $this->db->get();
    $result = $query->result_array();
    // print_r($result); die();
    return $result;
  }
//for Participate form 

    function fetch_state()
 {
  $this->db->order_by("statename", "ASC");
  $query = $this->db->get("state");
  return $query->result();
  // print_r($query);
 }
 //   function fetch_city1($stateid)
 // {
 //  $this->db->select('*');
 //  $this->db->order_by("cityname", "ASC");
 //  $this->db->where('city.stateid', $stateid);
 //  $query = $this->db->get("city");
 //  return $query->result();
 //  // print_r($query);
 // }
 //   function fetch_district1($cityid)
 // {
 //  $this->db->select('*');
 //  $this->db->order_by("districtname", "ASC");
 //  $this->db->where('district.cityid', $cityid);
 //  $query = $this->db->get("district");
 //  return $query->result();
 //  // print_r($query);
 // }
 //  function fetch_city($stateid)
 // {
 //  $this->db->where('stateid', $stateid);
 //  $this->db->order_by('cityname', 'ASC');
 //  $query = $this->db->get('city');
 //  $output = '<option value="">Select City</option>';
 //  foreach($query->result() as $row)
 //  {
 //   $output .= '<option value="'.$row->cityid.'">'.$row->cityname.'</option>';
 //  }
 //  return $output;
 // }
 //  function fetch_district($cityid)
 //   {
 //    $this->db->where('cityid', $cityid);
 //    $this->db->order_by('districtname ', 'ASC');
 //    $query = $this->db->get('district');
 //    $output = '<option value="">Select District</option>';
 //    foreach($query->result() as $row)
 //    {
 //     $output .= '<option value="'.$row->districtid.'">'.$row->districtname  .'</option>';
 //    }
 //    return $output;
 //   }

  //for pincode form fetch state
//   function fetch_state()
//    {
//       $this->db->order_by("statename", "ASC");
//       $query = $this->db->get("state");
//       return $query->result();
//       // print_r($query);
//     }

// function fetch_country1()
//  {
//   $this->db->order_by("countryname", "ASC");
//   $query = $this->db->get("country");
//   return $query->result();
//   // print_r($query);
//  }

  
//  function fetch_state1($countryid)
//  {
//   $this->db->where('countryid', $countryid);
//   $this->db->order_by('statename', 'ASC');
//   $query = $this->db->get('state');
//   $output = '<option value="">Select State</option>';
//   foreach($query->result() as $row)
//   {
//    $output .= '<option value="'.$row->stateid.'">'.$row->statename.'</option>';
//   }
//   return $output;
//  }

//  function fetch_city1($stateid)
//  {
//   $this->db->where('stateid', $stateid);
//   $this->db->order_by('cityname', 'ASC');
//   $query = $this->db->get('city');
//   $output = '<option value="">Select City</option>';
//   foreach($query->result() as $row)
//   {
//    $output .= '<option value="'.$row->cityid.'">'.$row->cityname.'</option>';
//   }
//   return $output;
//  }
//  function fetch_district1($cityid)
//  {
//   $this->db->where('cityid', $cityid);
//   $this->db->order_by('districtname ', 'ASC');
//   $query = $this->db->get('district');
//   $output = '<option value="">Select District</option>';
//   foreach($query->result() as $row)
//   {
//    $output .= '<option value="'.$row->districtid.'">'.$row->districtname  .'</option>';
//   }
//   return $output;
//  }

  public function competition_list($competitionid){
     // $today = date('Y-m-d');
     $this->db->select('*');
    $this->db->select('competition.*,tabcompetition.*,competitiontype.*,competitiontype.competitiontype,tabcompetition.tabid');
    $this->db->join('tabcompetition', 'competition.tabinputtextid = tabcompetition.tabinputtextid', 'inner');
    $this->db->join('competitiontype', 'competition.competitiontypeid = competitiontype.competitiontypeid', 'inner');
   $this->db->order_by('enddate ', 'DESC');
   // $this->db->where('status ',1);
    $this->db->from('competition');
    $query = $this->db->get();
    $result = $query->result();
    // print_r($result); 
    return $result;

  }
   public function competition_list_complete($competitionid){
     // $today = date('Y-m-d');
    $this->db->select('*');
    $this->db->select('competition.*,tabcompetition.*,competitiontype.*,competitiontype.competitiontype,tabcompetition.tabid');
    $this->db->join('tabcompetition', 'competition.tabinputtextid = tabcompetition.tabinputtextid', 'inner');
    $this->db->join('competitiontype', 'competition.competitiontypeid = competitiontype.competitiontypeid', 'inner');
    $c_date = date('Y-m-d');   
    $this->db->where('enddate <=', $c_date);
   $this->db->order_by('enddate ', 'DESC');
   // $this->db->where('status ',1);
    $this->db->from('competition');
    $query = $this->db->get();
    $result = $query->result();
    // print_r($result); 
    return $result;

  }
  public function competition_list_ongoing($competitionid){
     // $today = date('Y-m-d');
     $this->db->select('*');
    $this->db->select('competition.*,tabcompetition.*,competitiontype.*,competitiontype.competitiontype,tabcompetition.tabid');
    $this->db->join('tabcompetition', 'competition.tabinputtextid = tabcompetition.tabinputtextid', 'inner');
    $this->db->join('competitiontype', 'competition.competitiontypeid = competitiontype.competitiontypeid', 'inner');
  $c_date = date('Y-m-d');   
  $this->db->where('enddate >=', $c_date);
   $this->db->order_by('enddate ', 'DESC');
   // $this->db->where('status ',1);
    $this->db->from('competition');
    $query = $this->db->get();
    $result = $query->result();
    // print_r($result); 
    return $result;

  }
   function fetch_tabinputtext()
 {
  $this->db->order_by("tabinputtextid", "ASC");
  $query = $this->db->get("tabcompetition");
  return $query->result();
  // print_r($query);
 }
   function fetch_class()
 {
  $this->db->order_by("tabinputtextid", "ASC");
  $query = $this->db->get("tabcompetition");
  // print_r($query->result()); die();

  return $query->result();

 }
 public function fetch_class_age($tabinputtextid){
     // $today = date('Y-m-d');
     $this->db->select('*');

    $this->db->where("tabinputtextid", $tabinputtextid);
   
    $this->db->from('tabcompetition');
    $query = $this->db->get();
    $result = $query->result_array();
    // print_r($result); 
    return $result;

  }


   

   //  function fetch_city($stateid)
   //  {
   //    $this->db->where('stateid', $stateid);
   //    $this->db->order_by('cityname', 'ASC');
   //    $query = $this->db->get('city');
   //    $output = '<option value="">Select City</option>';
   //    foreach($query->result() as $row)
   //    {
   //     $output .= '<option value="'.$row->cityid.'">'.$row->cityname.'</option>';
   //    }
   //    return $output;
   //   }


  public function get_list($company_id,$id,$order,$tbl_name){
    $this->db->select('*');
    if($company_id != ''){
      $this->db->where('company_id', $company_id);
    }
    $this->db->order_by($id, $order);
    $this->db->from($tbl_name);
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }

  public function get_list2($id,$order,$tbl_name){
    $this->db->select('*');
    $this->db->order_by($id, $order);
    $this->db->from($tbl_name);
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }

  public function get_list_by_id($col_name1,$col_val1,$col_name2,$col_val2,$order_col,$order,$tbl_name){
    $this->db->select('*');
    if($col_name1 != ''){
      $this->db->where($col_name1,$col_val1);
    }
    if($col_name2 != ''){
      $this->db->where($col_name2,$col_val2);
    }
    if($order_col != ''){
      $this->db->order_by($order_col, $order);
    }
    $this->db->from($tbl_name);
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }

public function get_list_by_id1($col_name1,$col_val1,$col_name2,$col_val2,$order_col,$order,$tbl_name){
    $this->db1->select('*');
    if($col_name1 != ''){
      $this->db1->where($col_name1,$col_val1);
    }
    if($col_name2 != ''){
      $this->db1->where($col_name2,$col_val2);
    }
    if($order_col != ''){
      $this->db1->order_by($order_col, $order);
    }
    $this->db1->from($tbl_name);
    $query = $this->db1->get();
    $result = $query->result();
    return $result;
  }

  public function get_info($id_type, $id, $tbl_name){
    $this->db->select('*');

    $this->db->where($id_type, $id);
    $this->db->from($tbl_name);
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }

  public function get_info_arr($id_type, $id, $tbl_name){
    $this->db->select('*');
    $this->db->where($id_type, $id);
    $this->db->from($tbl_name);
    $query = $this->db->get();
    $result = $query->result_array();
    return $result;
  }

  public function get_info_arr_fields($fields,$id_type, $id, $tbl_name){
    $this->db->select($fields);
    $this->db->where($id_type, $id);
    $this->db->from($tbl_name);
    $query = $this->db->get();
    $result = $query->result_array();
    return $result;
  }

  public function update_info($id_type, $id, $tbl_name, $data){
    $this->db->where($id_type, $id)
    ->update($tbl_name, $data);
  }
  public function update_info1($id_type, $id, $tbl_name, $data){
    $this->db1->where($id_type, $id)
    ->update($tbl_name, $data);
  }

  public function delete_info($id_type, $id, $tbl_name){
    $this->db->where($id_type, $id)
    ->delete($tbl_name);
  }

  public function check_duplication($company_id,$value,$field_name,$table_name){
    $this->db->select($field_name);
    if($company_id != ''){
      $this->db->where('company_id', $company_id);
    }
    $this->db->where($field_name,$value);
    $this->db->from($table_name);
    $query = $this->db->get();
    $result = $query->num_rows();
    return $result;
  }

  public function user_list($user_id){
    $this->db->select('*');
    // $this->db->where('is_admin', 1);
    $this->db->order_by('user_id',"DESC");
    // if($company_id != ''){
    //   $this->db->where('company_id', $company_id);
    // }
    $this->db->from('user');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }

  public function check_dupli_num($company_id,$value,$field_name,$table_name){
    $this->db->select($field_name);
    if($company_id != ''){
      $this->db->where('company_id', $company_id);
    }
    $this->db->where($field_name,$value);
    $this->db->from($table_name);
    $query = $this->db->get();
    $num = $query->num_rows();
    return $num;
  }

  // Get Count...
  public function get_count($id_type,$company_id,$added_by,$mat_user_id,$status_col,$status_key,$tbl_name){
    $this->db->select($id_type);
    if($company_id != ''){
      $this->db->where('4', $company_id);
    }
    if($added_by != ''){
      $this->db->where($added_by, $mat_user_id);
    }
    if($status_col != ''){
      $this->db->where($status_col, $status_key);
    }

    $this->db->from($tbl_name);
      $query =  $this->db->get();
    $result = $query->num_rows();
    return $result;
  }

  public function get_countcompleted_competition($id_type,$company_id,$added_by,$mat_user_id,$status_col,$status_key,$tbl_name){
     $this->db->select($id_type);
    if($company_id != ''){
      $this->db->where('4', $company_id);
    }
    if($added_by != ''){
      $this->db->where($added_by, $mat_user_id);
    }
    if($status_col != ''){
      $this->db->where($status_col, $status_key);
    }

    $c_date = date('Y-m-d');   
    $this->db->where('enddate <=', $c_date);

    $this->db->from($tbl_name);
      $query =  $this->db->get();
    $result = $query->num_rows();
    return $result;
    // $this->db->order_by("competitionid", "ASC");
  // $c_date = date('Y-m-d');   
  // $this->db->where('enddate >=', $c_date);
  // $this->db->where('competitionid',$competitionid);
  // $query = $this->db->get("competition");
  // return $query->result();
      // $query =  $this->db->get();
    // $result = $query->num_rows();
    // return $result;
  }
  public function get_countongoing_competition($id_type,$company_id,$added_by,$mat_user_id,$status_col,$status_key,$tbl_name){
     $this->db->select($id_type);
    if($company_id != ''){
      $this->db->where('4', $company_id);
    }
    if($added_by != ''){
      $this->db->where($added_by, $mat_user_id);
    }
    if($status_col != ''){
      $this->db->where($status_col, $status_key);
    }
    
    $c_date = date('Y-m-d');   
    $this->db->where('enddate >=', $c_date);

    $this->db->from($tbl_name);
      $query =  $this->db->get();
    $result = $query->num_rows();
    return $result;
  
  }
  // function check_otp($otp, $user_id){
  //   $query = $this->db->select('*')
  //       ->where('user_otp', $otp)
  //       ->where('user_id', $user_id)
  //       ->from('law_user')
  //       ->get();
  //   $result = $query->result_array();
  //   return $result;
  // }
  //
  // function check_pwd($user_id,$old_password){
  //   $query = $this->db->select('user_id')
  //       ->where('user_password', $old_password)
  //       ->where('user_id', $user_id)
  //       ->from('law_user')
  //       ->get();
  //   $result = $query->result_array();
  //   return $result;
  // }

  // public function get_count($id_type,$company_id,$key,$tbl_name){
  //   $this->db->select($id_type);
  //   if($key != ''){
  //     $this->db->where('application_status', $key);
  //   }
  //   $this->db->where('company_id', $company_id);
  //   $this->db->from($tbl_name);
  //     $query =  $this->db->get();
  //   $result = $query->num_rows();
  //   return $result;
  // }
  // public function get_count2($id_type,$key,$tbl_name){
  //   $this->db->select($id_type);
  //   if($key != ''){
  //     $this->db->where('application_status', $key);
  //   }
  //   $this->db->from($tbl_name);
  //     $query =  $this->db->get();
  //   $result = $query->num_rows();
  //   return $result;
  // }

public function check_winnerexists($user_id,$competition_id){
  $this->db->select('*');
  $this->db->where('competitionid',$competition_id);
  $this->db->where('user_id',$user_id);
  $this->db->from('assignwinner');
  $query = $this->db->get();
  $result = $query->num_rows();
  return $result;
  }
}
?>
