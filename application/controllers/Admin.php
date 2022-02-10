<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('admin_model', 'admin_user');
  }

  public function index(){	

    $this->load->view('shared/header');
    $this->load->view('shared/navbar');
    $this->load->view('admin/index');
    $this->load->view('shared/footer');
  }

  public function login(){

   if($this->input->post()){
      $this->form_validation->set_rules('username', 'Username', 'required');
      $this->form_validation->set_rules('userpassword', 'Password', 'required');

      if(!$this->form_validation->run()){
        redirect('admin');
      }else{
        $data = array(
          'username' => $this->input->post('username'),
          'userpassword' => md5($this->input->post('userpassword'))
        );
        $result = $this->admin_user->find_user($data);
        
        if($result == NULL){
          echo "Error";
          die();
        }else{
          echo "Success";
          die();
        }
      }
    }else{
      redirect('admin');
    }
   }

}