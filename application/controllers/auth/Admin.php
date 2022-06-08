<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('auth/admin_model', 'admin_model');
		$this->load->library('form_validation');
	}

	public function index(){

		show_404();
	}
	
	public function login()
	{
		
		$rules = $this->admin_model->rules();
		$this->form_validation->set_rules($rules);

		if($this->form_validation->run() == FALSE){
			return $this->load->view('auth/admin/login');
		}

		$email = $this->input->post('email');
		$password = $this->input->post('password');

		if($this->admin_model->login($email, $password)){
			$this->session->set_flashdata('flash', 'BerhasilLogin');
			redirect('skala/');
			// echo "COK";
		} else {
			$this->session->set_flashdata('flash', 'GagalLogin');
		}

		$this->load->view('auth/admin/login');
	}

	public function logout()
	{
		$this->admin_model->logout();
		redirect(site_url());
	}
}	
