<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Model extends CI_Model {

  public function find_user($data){
    $query = $this->db->select('*')->from('users')->where('username', $data['username'])->where('userpass', $data['userpassword'])->get();
    if(!$query){
      return NULL;
    }else{
      return $query->row();
    }
  }

  public function post_category($data){
    $query = $this->db->insert('sub_categories', $data);
    if(!$query){
      return FALSE;
    }else{
      return TRUE;
    }
  }
 

  public function get_categories(){
    
    $query = $this->db->get('sub_categories');
    
    if(!$query){
      return FALSE;
    }else{
      return $query->result();
    }
  }

  public function get_category($id){
    $query = $this->db->select('*')->from('sub_categories')->where('id', $id)->get();

    if(!$query){
      return FALSE;
    }else{
      return $query->row();
    }
  }
 
}
