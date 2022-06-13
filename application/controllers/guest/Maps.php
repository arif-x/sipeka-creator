<?php

class Maps extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('guest/Maps_model', 'maps_model');
	}

	public function index(){
		$data['title'] = 'Maps';
		$data['maps'] = $this->maps_model->index();
		$this->load->view('template/guest/header', $data);
		$this->load->view('guest/maps', $data);
		$this->load->view('template/guest/footer');
	}
}