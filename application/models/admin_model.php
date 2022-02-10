<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Model extends CI_Model {

    public function find_user($data){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('username', $data['username']);
        $this->db->where('userpass', $data['userpassword']);
        $query = $this->db->get();
        
        if(!$query){
            return NULL;
        }else{
            return $query->result();
        }
    }
}
