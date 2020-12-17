<?php
class User_Model extends CI_Model{

  function check_login($email, $password){
    $query = $this->db->select('*')
      ->where('user_email', $email)
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

  public function banner_list($unit_id){
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
    function fetch_competition()
 {
  $this->db->order_by("competitionid", "ASC");
  $query = $this->db->get("competition");
  return $query->result();
  // print_r($query);
 }
 function fetch_pincode()
 {
  $this->db->order_by("pincode", "");
  $query = $this->db->get("profile");
  return $query->result();
  // print_r($query);
 }
 //  function fetch_profile()
 // {
 //  $this->db->order_by("parentname", "ASC");
 //  $query = $this->db->get("profile");
 //  return $query->result();
 //  // print_r($query);
 // }
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

 
 function fetch_city()
 {
  $this->db->order_by("cityname", "ASC");
  $query = $this->db->get("city");
  return $query->result();
  // print_r($query);
 }
   public function participate_list($profileid){
    $this->db->select('*');
    // $this->db->where('is_admin', 0);
    // if($company_id != ''){
    //   $this->db->where('company_id', $company_id);
    // }
    $this->db->from('profile');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }
   function fetch_country1()
 {
  $this->db->order_by("countryname", "ASC");
  $query = $this->db->get("country");
  return $query->result();
  // print_r($query);
 }

  
 function fetch_state1($countryid)
 {
  $this->db->where('countryid', $countryid);
  $this->db->order_by('statename', 'ASC');
  $query = $this->db->get('state');
  $output = '<option value="">Select State</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->stateid.'">'.$row->statename.'</option>';
  }
  return $output;
 }

 function fetch_city1($stateid)
 {
  $this->db->where('stateid', $stateid);
  $this->db->order_by('cityname', 'ASC');
  $query = $this->db->get('city');
  $output = '<option value="">Select City</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->cityid.'">'.$row->cityname.'</option>';
  }
  return $output;
 }
 function fetch_district1($cityid)
 {
  $this->db->where('cityid', $cityid);
  $this->db->order_by('districtname ', 'ASC');
  $query = $this->db->get('district');
  $output = '<option value="">Select District</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->districtid.'">'.$row->districtname  .'</option>';
  }
  return $output;
 }

  public function competition_list($competitionid){
     $this->db->select('*');
    $this->db->select('competition.*,tabcompetition.*,tabcompetition.tabinputtext');
    $this->db->join('tabcompetition', 'competition.tabinputtextid = tabcompetition.tabinputtextid', 'inner');
    // $this->db->join('city', 'competition.cityid = city.cityid', 'inner');

    // $this->db->where('slider_possition', 1);
    // if($slider_possition != ''){
    //   $this->db->where('slider_possition', $slider_possition);
    // }
    $this->db->from('competition');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }
   function fetch_tabinputtext()
 {
  $this->db->order_by("tabinputtextid", "ASC");
  $query = $this->db->get("tabcompetition");
  return $query->result();
  // print_r($query);
 }


   // function fetch_state()
   // {
   //    $this->db->order_by("statename", "ASC");
   //    $query = $this->db->get("state");
   //    return $query->result();
   //    // print_r($query);
   //  }

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

  public function user_list($company_id){
    $this->db->select('*');
    $this->db->where('is_admin', 0);
    if($company_id != ''){
      $this->db->where('company_id', $company_id);
    }
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


}
?>
