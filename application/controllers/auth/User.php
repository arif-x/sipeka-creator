<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('auth/user_model', 'user_model');
		$this->load->library('form_validation');
	}

	public function index(){

		show_404();
	}

	public function daftar(){
		$data['title'] = 'Register';
		$this->load->view('auth/user/register');
	}

	public function register(){
		$rules = $this->user_model->rules();
		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('auth/user/register');
		}

		$data = [
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password')
		];

		$email = $this->input->post('email');

		$check = $this->user_model->has_user($email);
		if (count($check) >= 1) {
			redirect('/register');
		} elseif ($this->user_model->register($data)) {
			redirect('/login');
		} else {

		}

		$data['title'] = 'Register';
		$this->load->view('auth/user/register');
	}
	
	public function login()
	{
		
		$rules = $this->user_model->rules();
		$this->form_validation->set_rules($rules);

		if($this->form_validation->run() == FALSE){
			return $this->load->view('auth/user/login');
		}

		$email = $this->input->post('email');
		$password = $this->input->post('password');

		if($this->user_model->login($email, $password)){
			$this->session->set_flashdata('flash', 'BerhasilLogin');
			redirect('skala/');
		} else {
			$this->session->set_flashdata('flash', 'GagalLogin');
		}

		$this->load->view('auth/user/login');
	}

	public function logout()
	{
		$this->user_model->logout();
		redirect(site_url());
	}
}	
