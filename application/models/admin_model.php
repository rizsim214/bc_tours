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

  public function get_messages(){
    return $this->db->order_by('id','DESC')->get('inquiry')->result();
  }
  public function find_message($id){
    return $this->db->where('id', $id)->get('inquiry')->row();
  }
  public function delete_one_message($id){
    return $this->db->where('id', $id)->delete('inquiry');
  }

  public function post_category($data){
    $query = $this->db->insert('sub_categories', $data);
    if(!$query){
      return FALSE;
    }else{
      return TRUE;
    }
  }
 
  public function count_categories(){
    return $this->db->count_all('sub_categories');
  }

  public function count_categories_where($data){
    $query = $this->db->where('category_name', $data)->get('sub_categories');
    return $query->num_rows();
  }
  
  public function fetch_filter($data, $limit, $offset){

    $query = $this->db->limit($limit, $offset)->where('category_name', $data)->get('sub_categories');
    return $query->result();
  }
  public function get_categories($limit, $offset){
    $query = $this->db->limit($limit,$offset)->get('sub_categories');
    
    if(!$query){
      return FALSE;
    }else{
      return $query->result();
    }
  }
  public function update_one($id, $data){
    $query = $this->db->where('id', $id)->update('sub_categories', $data);
    if(!$query){
      return FALSE;
    }else{
      return TRUE;
    }
  }
  public function delete_one($id){
    $query = $this->db->where('id', $id)->delete('sub_categories');
    if(!$query){
      return FALSE;
      }else{
        return TRUE;
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
