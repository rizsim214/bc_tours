<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_model extends CI_Model {

  public function add_message($data){
    return $this->db->insert('inquiry', $data);
  }

}
