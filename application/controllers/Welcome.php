<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

  public function __construct(){
    parent::__construct();

    $this->load->model('welcome_model', 'welcome_user');
  }
  public function index(){

    $this->load->view('shared/header');
    $this->load->view('shared/navbar');
    $this->load->view('pages/home');
    $this->load->view('pages/about');
    $this->load->view('pages/attractions');
    $this->load->view('pages/contact');
    $this->load->view('shared/footer');
  }

  public function inquiry(){
    if($this->input->post()){
      $this->form_validation->set_rules('fullname', 'Fullname', 'trim|required');
      $this->form_validation->set_rules('contact', 'Contact Info', 'trim|required');
      $this->form_validation->set_rules('message', 'Message', 'trim|required');

      if($this->form_validation->run()){
        $data = array(
          'inquirer_name' => $this->input->post('fullname'),
          'inquirer_contact' => $this->input->post('contact'),
          'inquirer_message' => $this->input->post('message'),
        );

        $result = $this->welcome_user->add_message($data);
        
        if($result){
          $this->session->set_userdata('success', "Successfully sent your Inquiry... We'll contact right away!");
          redirect(base_url('home'));
        }else{
          $this->session->set_userdata('error', "Something went wrong while sending your Inquiry... Please try again");
          redirect(base_url('home'));
        }
      }
    }
  }
}
