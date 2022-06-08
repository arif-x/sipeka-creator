<?php

class Config extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('auth/admin_model', 'auth_model');
		if (!$this->auth_model->current_user()) {
			return redirect(base_url().'admin/login');
		}
		$this->load->model('admin/wilayah_model', 'wilayah_model');
		$this->load->model('admin/config_model', 'config_model');
	}

	public function index(){
		$data['title'] = 'Config Provinsi';
		$data['provinsi'] = $this->wilayah_model->get_province();
		$data['config'] = $this->config_model->index_provinsi();
		$this->load->view('template/admin/header', $data);
		$this->load->view('admin/config/config', $data);
		$this->load->view('template/admin/footer');
	}

	public function show_provinsi(){
		$data = $this->config_model->show_provinsi();
		echo json_encode($data);
	}

	public function update(){
		$data = [
			'value' => $this->input->post('value')
		];
		$this->config_model->update_provinsi($data);
		return redirect(base_url().'admin/config');
	}
}