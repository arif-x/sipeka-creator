<?php

class KategoriEvent extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('auth/admin_model', 'auth_model');
		if (!$this->auth_model->current_user()) {
			return redirect(base_url().'admin/login');
		}
		$this->load->model('admin/kategoriEvent_model', 'kategorievent_model');
	}

	public function index(){
		$data['title'] = 'Kategori Event';

		$data['kategori'] = $this->kategorievent_model->index();
		$this->load->view('template/admin/header', $data);
		$this->load->view('admin/kategori/event', $data);
		$this->load->view('template/admin/footer');
	}

	public function show($id_kategori_event){
		$data = $this->kategorievent_model->show($id_kategori_event);
		echo json_encode($data);
	}

	public function store(){
		$data = [
			'kategori_event' => $this->input->post('kategori_event'), 
		];

		$insert = $this->kategorievent_model->store($data);
		return redirect(base_url().'admin/kategori/event');
	}

	public function update(){
		$data = [
			'kategori_event' => $this->input->post('kategori_event'), 
		];

		$update = $this->kategorievent_model->update($this->input->post('id_kategori_event'), $data);
		return redirect(base_url().'admin/kategori/event');
	}

	public function destroy(){
		$data = $this->kategorievent_model->destroy($this->input->post('id_delete'));
		return redirect(base_url().'admin/kategori/event');
	}
}