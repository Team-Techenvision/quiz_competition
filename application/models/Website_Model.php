<?php
class Website_Model extends CI_Model{

  function check_login($mobile,$password){
    $query = $this->db->select('*')
      ->where('user_mobile', $mobile)
      ->where('user_password', $password)
      ->from('user')
      ->get();
    $result = $query->result_array();
    return $result;
  }

  public function save_data($tbl_name, $data){
    $this->db->insert($tbl_name, $data);
    $insert_id = $this->db->insert_id();
    return  $insert_id;
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
   public function tab_list($tabinputtextid){
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

  public function resultwinner_list($user_id){
     // $this->db->select('*');
    $this->db->select('assignwinner.*,user.*,competition.*');
    $this->db->join('user', 'assignwinner.user_id = user.user_id', 'left');
    $this->db->join('competition', 'assignwinner.competitionid = competition.competitionid', 'left');
       $this->db->where('assignwinner.user_id', $user_id);
    // $this->db->where('assignwinner.user_id', $quizweb_user_id);

    $this->db->from('assignwinner');
 
    $query = $this->db->get();
    $result = $query->result();
    return $result;
   }
    public function mycompetition_list($user_id){
    // $this->db->select('*');
    $this->db->select('profile.*,competition.*,user.*');
    $this->db->join('competition', 'profile.competitionid = competition.competitionid', 'left');
    $this->db->join('user', 'profile.user_id = user.user_id', 'left');
    // $this->db->where('is_admin', 0);
    // if($company_id != ''){
    //   $this->db->where('company_id', $company_id);
    // }
    $this->db->where('profile.user_id', $user_id);
    // $this->db->where('profile.user_id', $quizweb_user_id);
    $this->db->from('profile');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }
  public function competition_list($competitionid){
     $this->db->select('*');
    $this->db->select('competition.*,tabcompetition.*,tabcompetition.tabid');
    $this->db->join('tabcompetition', 'competition.tabinputtextid = tabcompetition.tabinputtextid', 'inner');
    // $this->db->join('city', 'competition.cityid = city.cityid', 'inner');
    // $this->db->where('is_admin', 0);
    // if($company_id != ''){
    //   $this->db->where('company_id', $company_id);
    // }
    $c_date = date('Y-m-d');   

    $this->db->where('enddate >=', $c_date);

    $this->db->from('competition');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }
  public function get_list($company_id){
    $this->db->select('*');
    // $this->db->where('is_admin', 0);
    // if($company_id != ''){
    //   $this->db->where('4', $company_id);
    // }
    $this->db->from('company');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }

  public function user_list($user_id){
    $this->db->select('*');
    // $this->db->where('is_admin', 0);
    // if($company_id != ''){
    //   $this->db->where('company_id', $company_id);
    // }
    $this->db->from('user');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }
 

  public function profile_list($profileid){
    $this->db->select('*');
    $this->db->select('profile.*,pincodemaster.*,pincodemaster.pincode');
    $this->db->join('pincodemaster', 'profile.pincode = pincodemaster.pincodeid', 'inner');
    // $this->db->where('is_admin', 0);
    // if($company_id != ''){
    //   $this->db->where('company_id', $company_id);
    // }

    $this->db->from('profile');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }
function fetch_userid()
 {
  
  $this->db->order_by("user_id", "");
  // $this->db->where('is_admin', 1);
  $query = $this->db->get("user");
  return $query->result();
  // print_r($query);
 }
  

   function fetch_pincodelist()
 {
  
  $this->db->order_by("pincodeid", "");
  // $this->db->where('is_admin', 1);
  $query = $this->db->get("pincodemaster");
  return $query->result();
  // print_r($query);
 }
   function fetch_country()
 {
  $this->db->order_by("countryname", "ASC");
  $query = $this->db->get("country");
  return $query->result();
  // print_r($query);
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

  // public function user_list($user_id){
  //   $this->db->select('*');
  //   $this->db->where('is_admin', 0);
  //   // if($company_id != ''){
  //   //   $this->db->where('company_id', $company_id);
  //   // }
  //   $this->db->from('user');
  //   $query = $this->db->get();
  //   $result = $query->result();
  //   return $result;
  // }

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
      $this->db->where('company_id', $company_id);
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


  public function quize_get($quiz_id)
  {
    /*$cmd = "SELECT * FROM dynamiccompetition INNER JOIN competition ON dynamiccompetition.competitionid = competition.competitionid INNER JOIN profile ON dynamiccompetition.competitionid = profile.competitionid WHERE competition.enddate >= now() && profile.competitionid = $quiz_id";*/
    $this->db->where('competitionid',$quiz_id);
    $result = $this->db->get('dynamiccompetition');
    //$result = $this->db->query($cmd);
    //print_r($result->result_array());die();
   
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

}
?><!-- 
select * from dynamiccompetition where competitionid=1




SELECT * FROM dynamiccompetition INNER JOIN competition ON dynamiccompetition.competitionid = competition.competitionid INNER JOIN profile ON dynamiccompetition.competitionid = profile.competitionid;



SELECT * FROM dynamiccompetition INNER JOIN competition ON dynamiccompetition.competitionid = competition.competitionid INNER JOIN profile ON dynamiccompetition.competitionid = profile.competitionid WHERE competition.enddate >= now();

SELECT * FROM dynamiccompetition INNER JOIN competition ON dynamiccompetition.competitionid = competition.competitionid INNER JOIN profile ON dynamiccompetition.competitionid = profile.competitionid WHERE competition.enddate >= now() && profile.competitionid = 2;



$this->db->select('*');
    $this->db->from('users');
    $this->db->join('show_guides', 'show_guides.user_id = users.user_id');
    $this->db->where('users.user_id', $user_id['user_id'], 'left outer');

    $query = $this->db->get();
    foreach ($query->result_array() as $row) {
        $results = $row;
 -->