<?php
Class Home_model extends CI_Model
{

 function artist(){
   $this -> db -> select('*');
   $this -> db -> from('artist');
   $query = $this -> db -> get();
   $result=$query->result_array();
   return $result;
 }

function getartistdetails($id){
   $this -> db -> select('*');
   $this -> db -> from('artist');
   $this->db->where('id',$id);
   $query = $this -> db -> get();
   $result=$query->result_array();
   return $result;
 }

 function discodetail($id){
   $this -> db -> select('*');
   $this -> db -> from('discography');
   $this->db->where('id',$id);
   $query = $this -> db -> get();
   $result=$query->result_array();
   return $result[0];
 }

 function getstudiodetail($id){
   $this -> db -> select('*');
   $this -> db -> from('tb_studio');
   $this->db->where('id',$id);
   $query = $this -> db -> get();
   $result=$query->result_array();
   return $result[0];
 }
  function discographylist($id){
   $this -> db -> select('*');
   $this -> db -> from('discography');
   $this->db->where('artist',$id);
   $this->db->limit('6');
   $query = $this -> db -> get();
   $result=$query->result_array();
   return $result;
 }
 function discographydata(){
   $this -> db -> select('*');
   $this -> db -> from('discography');
   $this->db->limit(18);
   $query = $this -> db -> get();
   $result=$query->result_array();
   return $result;
}

function discography_ajax($offset){
   $this -> db -> select('*');
   $this -> db -> from('discography');
   $this->db->limit(12,$offset);
   $query = $this -> db -> get();
   $result=$query->result_array();
   return $result;
}
function discography_count(){
   $this -> db -> select('count(*) as count');
   $this -> db -> from('discography');
   $query = $this -> db -> get();
   $result=$query->result_array();
   return $result;
}

function book($data){
   $result = $this->db->insert('bookings', $data);
   return $result;
}
 
}
?>
