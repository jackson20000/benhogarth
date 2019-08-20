<?php
Class Dashboard_model extends CI_Model
{

 function login($username, $password)
 {
   $this -> db -> select('password');
   $this -> db -> from('dashboard_login');
   $this -> db -> where('username', $username);
   $this -> db -> limit(1);
   $query = $this -> db -> get();
   $result=$query->result_array();
   //echo $query -> num_rows();
   if ($query -> num_rows()>0 && password_verify($password, $result[0]['password']))
   {
     return true;
   }
   else
   {
     return false;
   }
 }
 function chgpwd($username, $oldpassword, $newpassword){
   $this -> db -> select('password');
   $this -> db -> from('dashboard_login');
   $this -> db -> where('username', $username);
   $this -> db -> limit(1);
   $query = $this -> db -> get();
   $result=$query->result_array();
   //echo $query -> num_rows();
   if (password_verify($oldpassword, $result[0]['password']))
   {
     $pwd = password_hash($newpassword, PASSWORD_DEFAULT);
     $data=array('password'=>$pwd);
     $this->db->where('username', $username);
     $result = $this->db->update('dashboard_login', $data);
     return true;
   }
   else
   {
     return false;
   }
 }

 function artist_save($data){
   $result = $this->db->insert('artist', $data);
  	return $result;
 }

 function discography_save($data){
   $result = $this->db->insert('discography', $data);
  	return $result;
 }

function artistdata(){
   $this -> db -> select('*');
   $this -> db -> from('artist');
   $query = $this -> db -> get();
   $result=$query->result_array();
   return $result;
 }

function homedata(){
  $query = $this->db->query('SELECT * FROM bookings');
  $data['bookings']=$query->num_rows();
  $query = $this->db->query('SELECT * FROM artist');
  $data['artist']=$query->num_rows();
  $query1 = $this->db->query('SELECT * FROM discography');
  $data['discography']=$query1->num_rows();
  $query2 = $this->db->query('SELECT * FROM tb_studio');
  $data['studio']=$query2->num_rows();
  return $data;
}

function discographydata(){
   $this -> db -> select('*');
   $this -> db -> from('discography');
   $query = $this -> db -> get();
   $result=$query->result_array();
   return $result;
}

 function artistOne($id){
   $this -> db -> select('*');
   $this -> db -> from('artist');
   $this->db->where('id', $id);
   $query = $this -> db -> get();
   $result=$query->result_array();
   return $result;
 }

  function discographyOne($id){
   $this -> db -> select('*');
   $this -> db -> from('discography');
   $this->db->where('id', $id);
   $query = $this -> db -> get();
   $result=$query->result_array();
   return $result;
 }

 function edit_artist($id,$data){
   $this->db->where('id', $id);
   $result = $this->db->update('artist', $data);
   return $result;
 }

function edit_discography($id,$data){
   $this->db->where('id', $id);
   $result = $this->db->update('discography', $data);
   return $result;
 }

 function deleteartist($id){
 	 $this->db->where('id', $id);
   $result = $this->db->delete('artist');
   return $result;
 }
 function deletedisco($id){
 	 $this->db->where('id', $id);
   $result = $this->db->delete('discography');
   return $result;
 }
 function save_studio($data){
    $result = $this->db->insert('tb_studio', $data);
  return $result;
 }
 function studio_list(){
   $this -> db -> select('*');
   $this -> db -> from('tb_studio');
   $query = $this -> db -> get();
   $result['list']=$query->result_array();
   return $result;
}
function view_studio($id){
   $this -> db -> select('*');
   $this -> db -> from('tb_studio');
   $this->db->where('id', $id);
   $query = $this -> db -> get();
   $result['show']=$query->result_array();
   return $result;
}
 function update_studio($data,$id){
  $this->db->where('id', $id);
  $result = $this->db->update('tb_studio', $data);
  return $result;
 }
  function studio_delete($id){
   $this->db->where('id',$id);
   $result = $this->db->delete('tb_studio');
   return $result;
 }
 function get_mapdata(){
   $this -> db -> select('*');
   $this -> db -> from('tb_studio');
   $query = $this -> db -> get();
   $result=$query->result_array();
   $i=0;
   foreach ($result as $value) {
    $data[$i]['id'] = $i;
    $data[$i]['lat']=(float)$value['lat'];
    $data[$i]['lng']=(float)$value['lng'];
    $data[$i]['marker']='<div class="map_style"><a href="'.base_url().'homeweb/request_book?sid='.$value["id"].'"><img src="'.base_url().$value["img_bk"].'" width="100%"><div class="flex"><div class="half_first"><p class="p_margin"><b>'.$value["name"].'</b></p></div><div class="half_second"><h4>$'.$value["rate"].'</h4></div></div></a></div>';
    $i++;
   }
   return $data;
 }
 function getartistname(){
   $this -> db -> select('name,id');
   $this -> db -> from('artist');
   $query = $this -> db -> get();
   $result=$query->result_array();
   return $result;
 }
 function bookingsdata(){
   $this -> db -> select('*');
   $this -> db -> from('bookings');
   $query = $this -> db -> get();
   $result=$query->result_array();
   return $result;
 }

}
?>
