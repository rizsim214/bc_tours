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
        
        if(!$result){
          $this->session->set_flashdata('error', 'Invalid Username or Password');
          redirect(base_url() . "admin", 'refresh');
        }else{
          $data_array = $result;
          $this->session->set_userdata($data);
          redirect('dashboard');
          }
        }
      }else{
        redirect('admin');
      }
   }

   public function dashboard(){
     if(!$this->session->userdata()){
       echo "error";
       die();
     }else{
       $session['data'] = $this->session->userdata();

        $this->load->view('admin/header');
        $this->load->view('admin/sidenav',$session);
        $this->load->view('admin/pages/dashboard');
        $this->load->view('shared/footer');

     }
   }
   public function categories(){
    if(!$this->session->userdata()){
      echo "error";
      die();
    }else{
      $session['data'] = $this->session->userdata();
      
       $this->load->view('admin/header');
       $this->load->view('admin/sidenav',$session);
       $this->load->view('admin/pages/categories');
       $this->load->view('shared/footer');

    }
  }
  public function gallery(){
    if(!$this->session->userdata()){
      echo "error";
      die();
    }else{
      $session['data'] = $this->session->userdata();
      
       $this->load->view('admin/header');
       $this->load->view('admin/sidenav',$session);
       $this->load->view('admin/pages/gallery');
       $this->load->view('shared/footer');

    }
  }
  public function messages(){
    if(!$this->session->userdata()){
      echo "error";
      die();
    }else{
      $session['data'] = $this->session->userdata();
      
       $this->load->view('admin/header');
       $this->load->view('admin/sidenav',$session);
       $this->load->view('admin/pages/messages');
       $this->load->view('shared/footer');

    }
  }

   public function logout(){
     if($this->session->userdata()){

       $this->session->unset_userdata($this->session->userdata());
       redirect('home');
     }
   }
}