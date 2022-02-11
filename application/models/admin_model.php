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
}
