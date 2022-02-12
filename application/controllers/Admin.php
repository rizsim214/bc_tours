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
          $this->session->set_userdata('error', 'Invalid Username or Password');
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
      redirect('admin');
     }else{
       $session['data'] = $this->session->userdata();

        $this->load->view('admin/header');
        $this->load->view('admin/sidenav',$session);
        $this->load->view('admin/pages/dashboard');
        $this->load->view('shared/footer');

     }
   }
   public function categories($offset = 0){
    if(!$this->session->userdata()){
      redirect('admin');
    }else{
      $config = array(
        'base_url' => base_url('admin/categories') ,
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
      $session['data'] = $this->session->userdata();
      $data['categories'] = $this->admin_user->get_categories($config['per_page'], $offset);

      $this->load->view('admin/header');
      $this->load->view('admin/sidenav',$session);
      $this->load->view('admin/pages/categories', $data);
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
    $session['data'] = $this->session->userdata();
    
    $result['categories'] = $this->admin_user->fetch_filter($data, $config['per_page'], $offset);
    
    if($result){
      $this->load->view('admin/header');
      $this->load->view('admin/sidenav',$session);
      $this->load->view('admin/pages/categories', $result);
      $this->load->view('shared/footer');
    }
  }
  public function br_filter($offset = 0){
    $data = "Beaches & Resorts";
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
    $session['data'] = $this->session->userdata();
    
    $result['categories'] = $this->admin_user->fetch_filter($data, $config['per_page'], $offset);
    
    if($result){
      $this->load->view('admin/header');
      $this->load->view('admin/sidenav',$session);
      $this->load->view('admin/pages/categories', $result);
      $this->load->view('shared/footer');
    }
  }
  public function mc_filter($offset = 0){
    $data = "Mountains & Caves";
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
    $session['data'] = $this->session->userdata();
    
    $result['categories'] = $this->admin_user->fetch_filter($data, $config['per_page'], $offset);
    
    if($result){
      $this->load->view('admin/header');
      $this->load->view('admin/sidenav',$session);
      $this->load->view('admin/pages/categories', $result);
      $this->load->view('shared/footer');
    }
  }
  public function one_category($id){
    if(!$this->session->userdata()){
     redirect('admin');
    }else{
     
      $session['data'] = $this->session->userdata();
      $data['category'] = $this->admin_user->get_category($id);

       $this->load->view('admin/header');
       $this->load->view('admin/sidenav', $session);
       $this->load->view('admin/pages/one_category', $data);
       $this->load->view('shared/footer');

    }
  }

  public function attractions(){
    if(!$this->session->userdata()){
      redirect('admin');
    }else{
      $session['data'] = $this->session->userdata();
      
       $this->load->view('admin/header');
       $this->load->view('admin/sidenav',$session);
       $this->load->view('admin/pages/attractions');
       $this->load->view('shared/footer');

    }
  }
  public function messages(){
    if(!$this->session->userdata()){
      redirect('admin');
    }else{
      $session['data'] = $this->session->userdata();
      $data['messages'] = $this->admin_user->get_messages();
     
      $this->load->view('admin/header');
      $this->load->view('admin/sidenav',$session);
      $this->load->view('admin/pages/messages', $data);
      $this->load->view('shared/footer');

    }
  }
  public function view_message($id){
    $data['message'] = $this->admin_user->find_message($id);
    $session['data'] = $this->session->userdata();
    if($data){
      $this->load->view('admin/header');
      $this->load->view('admin/sidenav',$session);
      $this->load->view('admin/pages/message', $data);
      $this->load->view('shared/footer');
    }else{
      $this->session->set_userdata('error', "Unable to delete message... please try again");
      redirect('messages');
    }
  }

  public function delete_message($id){
    $result = $this->admin_user->delete_one_message($id);

    if($result){
      $this->session->set_userdata('warning', "Successfully deleted the message");
      redirect('messages');
    }else{
      $this->session->set_userdata('error', "Unable to delete message... please try again");
      redirect('messages');
    }
  }

  public function validate_category(){
    $this->form_validation->set_rules('category' , 'Category', 'trim|required');
    $this->form_validation->set_rules('subcat_name' , 'Sub-Category', 'trim|required');
    $this->form_validation->set_rules('location' , 'Location', 'trim|required');
    $this->form_validation->set_rules('direction' , 'Direction', 'trim|required');
    $this->form_validation->set_rules('description' , 'Category', 'trim|required');
  }

  public function add_category(){
    if(!$this->input->post()){
        $this->session->set_flashdata('error', "Failed to create sub-category! Please try again");
        redirect('categories');
    }else{
      $config = array(
        'upload_path' => './assets/images/uploads',
        'allowed_types' => 'jpg|png|jpeg'
      );
      $this->load->library('upload', $config);
      
       $this->validate_category();
        if($this->form_validation->run()){
           $this->upload->do_upload('image');
            $img_data = $this->upload->data('file_name');
            $format = "%Y-%M-%d %H:%i";
            $data = array(
              'category_name' => $this->input->post('category'),
              'sub_category_name' => $this->input->post('subcat_name'),
              'sub_cat_description' => $this->input->post('description'),
              'sub_cat_location' => $this->input->post('location'),
              'sub_cat_directions' => $this->input->post('direction'),
              'image' => $img_data,
              'sub_cat_package_deals' => $this->input->post('package_deals'),
              'date_created' => @mdate($format)
            );
            $result = $this->admin_user->post_category($data);
            if(!$result){
              $this->session->set_flashdata('error', "Unsuccessful creation of sub-category! Please try again");
              redirect('categories', 'refresh');
            }else{
              $this->session->set_flashdata('success', "Successfully created sub-category!!");
              redirect('categories', 'refresh');
            } 
         }
      } 
  }

  public function update_one_category($id){
    $config = array(
      'upload_path' => './assets/images/uploads',
      'allowed_types' => 'jpg|png|jpeg'
    );
    $this->load->library('upload', $config);
    if($this->upload->do_upload('image')){
      $img_data = $this->upload->data('file_name');
      $format = "%Y-%M-%d %H:%i";
      $data = array(
        'category_name' => $this->input->post('category'),
        'sub_category_name' => $this->input->post('subcat_name'),
        'sub_cat_description' => $this->input->post('description'),
        'sub_cat_location' => $this->input->post('location'),
        'sub_cat_directions' => $this->input->post('direction'),
        'image' => $img_data,
        'sub_cat_package_deals' => $this->input->post('package_deals'),
        'date_updated' => @mdate($format)
      );
  }else{

    $format = "%Y-%M-%d %H:%i";
    $data = array(
      'category_name' => $this->input->post('category'),
      'sub_category_name' => $this->input->post('subcat_name'),
      'sub_cat_description' => $this->input->post('description'),
      'sub_cat_location' => $this->input->post('location'),
      'sub_cat_directions' => $this->input->post('direction'),
      'sub_cat_package_deals' => $this->input->post('package_deals'),
      'date_updated' => @mdate($format)
    );
  }
    $result = $this->admin_user->update_one($id , $data);
   
    if(!$result){
      $this->session->set_userdata('error', "Unable to update sub-category! Please try again");
      redirect(base_url('one_category/') . $id);
    }else{
      $this->session->set_userdata('success', "Successfully updated sub-category!");
      redirect(base_url('one_category/') . $id);
    }
  }

  public function delete_one_category($id){
    $result = $this->admin_user->delete_one($id);

    if(!$result){
      $this->session->set_userdata('error', "Unable to delete sub-category! Please try again");
      redirect('categories');
    }else{
      $this->session->set_userdata('success', "Successfully deleted sub-category");
      redirect('categories');
    }
  }

   public function logout(){
     if($this->session->userdata()){

       $this->session->unset_userdata($this->session->userdata());
       redirect('home');
     }
   }
}