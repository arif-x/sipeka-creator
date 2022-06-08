<?php

class KategoriInformasi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('auth/admin_model', 'auth_model');
		if (!$this->auth_model->current_user()) {
			return redirect(base_url().'admin/login');
		}
		$this->load->model('admin/kategoriInformasi_model', 'kategoriinformasi_model');
	}

	public function index(){
		$data['title'] = 'Kategori Informasi';

		$data['kategori'] = $this->kategoriinformasi_model->index();
		$this->load->view('template/admin/header', $data);
		$this->load->view('admin/kategori/informasi', $data);
		$this->load->view('template/admin/footer');
	}

	public function show($id_kategori_informasi){
		$data = $this->kategoriinformasi_model->show($id_kategori_informasi);
		echo json_encode($data);
	}

	public function store(){
		$data = [
			'kategori_informasi' => $this->input->post('kategori_informasi'), 
		];

		$insert = $this->kategoriinformasi_model->store($data);
		return redirect(base_url().'admin/kategori/informasi');
	}

	public function update(){
		$data = [
			'kategori_informasi' => $this->input->post('kategori_informasi'), 
		];

		$update = $this->kategoriinformasi_model->update($this->input->post('id_kategori_informasi'), $data);
		return redirect(base_url().'admin/kategori/informasi');
	}

	public function destroy(){
		$data = $this->kategoriinformasi_model->destroy($this->input->post('id_delete'));
		return redirect(base_url().'admin/kategori/informasi');
	}
}