<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{	
		$this->load->view('shared/header');
    	$this->load->view('shared/navbar');
		$this->load->view('pages/home');
		$this->load->view('pages/about');
		$this->load->view('pages/gallery');
		$this->load->view('pages/contact');
		$this->load->view('shared/footer');
	}
}
