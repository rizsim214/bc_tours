<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

  public function __construct(){
    parent::__construct();

    $this->load->model('welcome_model', 'welcome_user');
    $this->load->model('admin_model', 'admin_user');
  }
  public function index($offset = 0){

    $config = array(
      'base_url' => base_url('welcome/index') ,
      'total_rows' => $this->admin_user->count_categories(),
      'per_page' => 4,
      'full_tag_open' => '<ul class="pagination">',
      'full_tag_close' => '</ul>',
      'first_link' => 'First',
      'last_link' => 'Last',
      'first_tag_open' => '<li class="page-item"><span class="page-link">',
      'first_tag_close' => '</span></li>',
      'prev_link' => '&laquo',
      'prev_tag_open' => '<li class="page-item"><span class="page-link">' ,
      'prev_tag_close' => '</span></li>',
      'next_link' => '&raquo',
      'next_tag_open' => '<li class="page-item"><span class="page-link">',
      'next_tag_close' => '</span></li>',
      'last_tag_open' => '<li class="page-item"><span class="page-link">',
      'last_tag_close' => '</span></li>',
      'cur_tag_open' => '<li class="page-item active"><a class="page-link" href="#">',
      'cur_tag_close' => '</a></li>',
      'num_tag_open' => '<li class="page-item"><span class="page-link">',
      'num_tag_close' => '</span></li>'
    );
    $this->pagination->initialize($config);
    $result['categories'] = $this->admin_user->get_categories($config['per_page'], $offset);
    
    if(!$result){
      $this->load->view('shared/header');
      $this->load->view('shared/navbar');
      $this->load->view('pages/home');
      $this->load->view('pages/about');
      $this->load->view('pages/attractions');
      $this->load->view('pages/contact');
      $this->load->view('shared/footer');
    }else{
      $this->load->view('shared/header');
      $this->load->view('shared/navbar');
      $this->load->view('pages/home');
      $this->load->view('pages/about');
      $this->load->view('pages/attractions', $result);
      $this->load->view('pages/contact');
      $this->load->view('shared/footer');
    }
  }

  public function br_filter($offset = 0){
    $data = "Beaches & Resorts";
    $config = array(
      'base_url' => base_url('welcome/hr_filter') ,
      'total_rows' => $this->admin_user->count_categories_where($data),
      'per_page' => 4,
      'full_tag_open' => '<ul class="pagination">',
      'full_tag_close' => '</ul>',
      'first_link' => 'First',
      'last_link' => 'Last',
      'first_tag_open' => '<li class="page-item"><span class="page-link">',
      'first_tag_close' => '</span></li>',
      'prev_link' => '&laquo',
      'prev_tag_open' => '<li class="page-item"><span class="page-link">' ,
      'prev_tag_close' => '</span></li>',
      'next_link' => '&raquo',
      'next_tag_open' => '<li class="page-item"><span class="page-link">',
      'next_tag_close' => '</span></li>',
      'last_tag_open' => '<li class="page-item"><span class="page-link">',
      'last_tag_close' => '</span></li>',
      'cur_tag_open' => '<li class="page-item active"><a class="page-link" href="#">',
      'cur_tag_close' => '</a></li>',
      'num_tag_open' => '<li class="page-item"><span class="page-link">',
      'num_tag_close' => '</span></li>'
    );

    $this->pagination->initialize($config);
    $result['categories'] = $this->admin_user->fetch_filter($data, $config['per_page'], $offset);
    
    if($result){
      $this->load->view('shared/header');
      $this->load->view('shared/navbar');
      $this->load->view('pages/home');
      $this->load->view('pages/about');
      $this->load->view('pages/attractions', $result);
      $this->load->view('pages/contact');
      $this->load->view('shared/footer');
    }
  }

  public function hr_filter($offset = 0){
    $data = "Hotel & Restaurants";
    $config = array(
      'base_url' => base_url('admin/hr_filter') ,
      'total_rows' => $this->admin_user->count_categories_where($data),
      'per_page' => 4,
      'full_tag_open' => '<ul class="pagination">',
      'full_tag_close' => '</ul>',
      'first_link' => 'First',
      'last_link' => 'Last',
      'first_tag_open' => '<li class="page-item"><span class="page-link">',
      'first_tag_close' => '</span></li>',
      'prev_link' => '&laquo',
      'prev_tag_open' => '<li class="page-item"><span class="page-link">' ,
      'prev_tag_close' => '</span></li>',
      'next_link' => '&raquo',
      'next_tag_open' => '<li class="page-item"><span class="page-link">',
      'next_tag_close' => '</span></li>',
      'last_tag_open' => '<li class="page-item"><span class="page-link">',
      'last_tag_close' => '</span></li>',
      'cur_tag_open' => '<li class="page-item active"><a class="page-link" href="#">',
      'cur_tag_close' => '</a></li>',
      'num_tag_open' => '<li class="page-item"><span class="page-link">',
      'num_tag_close' => '</span></li>'
    );

    $this->pagination->initialize($config);
    
    
    $result['categories'] = $this->admin_user->fetch_filter($data, $config['per_page'], $offset);
    
    if($result){
      $this->load->view('shared/header');
      $this->load->view('shared/navbar');
      $this->load->view('pages/home');
      $this->load->view('pages/about');
      $this->load->view('pages/attractions', $result);
      $this->load->view('pages/contact');
      $this->load->view('shared/footer');
    }
  }

  public function mc_filter($offset = 0){
    $data = "Mountains & Caves";
    $config = array(
      'base_url' => base_url('welcome/hr_filter') ,
      'total_rows' => $this->admin_user->count_categories_where($data),
      'per_page' => 4,
      'full_tag_open' => '<ul class="pagination">',
      'full_tag_close' => '</ul>',
      'first_link' => 'First',
      'last_link' => 'Last',
      'first_tag_open' => '<li class="page-item"><span class="page-link">',
      'first_tag_close' => '</span></li>',
      'prev_link' => '&laquo',
      'prev_tag_open' => '<li class="page-item"><span class="page-link">' ,
      'prev_tag_close' => '</span></li>',
      'next_link' => '&raquo',
      'next_tag_open' => '<li class="page-item"><span class="page-link">',
      'next_tag_close' => '</span></li>',
      'last_tag_open' => '<li class="page-item"><span class="page-link">',
      'last_tag_close' => '</span></li>',
      'cur_tag_open' => '<li class="page-item active"><a class="page-link" href="#">',
      'cur_tag_close' => '</a></li>',
      'num_tag_open' => '<li class="page-item"><span class="page-link">',
      'num_tag_close' => '</span></li>'
    );

    $this->pagination->initialize($config);
    $result['categories'] = $this->admin_user->fetch_filter($data, $config['per_page'], $offset);
    
    if($result){
      $this->load->view('shared/header');
      $this->load->view('shared/navbar');
      $this->load->view('pages/home');
      $this->load->view('pages/about');
      $this->load->view('pages/attractions', $result);
      $this->load->view('pages/contact');
      $this->load->view('shared/footer');
    }
  }
  public function one_category_home($id){
   
      $result['category'] = $this->admin_user->get_category($id);

       $this->load->view('shared/header');
       $this->load->view('shared/navbar');
       $this->load->view('pages/one_category_home', $result);
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
