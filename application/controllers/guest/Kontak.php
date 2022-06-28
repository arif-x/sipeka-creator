<?php

class Kontak extends CI_Controller {

	public function index(){
		$data['title'] = 'About';
		$this->load->view('template/guest/header', $data);
		$this->load->view('guest/kontak');
		$this->load->view('template/guest/footer');
	}

}