<?php

class KategoriWisata extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('auth/admin_model', 'auth_model');
		if (!$this->auth_model->current_user()) {
			return redirect(base_url().'admin/login');
		}
		$this->load->model('admin/kategoriWisata_model', 'kategoriwisata_model');
	}

	public function index(){
		$data['title'] = 'Kategori Wisata';

		$data['kategori'] = $this->kategoriwisata_model->index();
		$this->load->view('template/admin/header', $data);
		$this->load->view('admin/kategori/wisata', $data);
		$this->load->view('template/admin/footer');
	}

	public function show($id_kategori_wisata){
		$data = $this->kategoriwisata_model->show($id_kategori_wisata);
		echo json_encode($data);
	}

	public function store(){
		$data = [
			'kategori_wisata' => $this->input->post('kategori_wisata'), 
		];

		$insert = $this->kategoriwisata_model->store($data);
		return redirect(base_url().'admin/kategori/wisata');
	}

	public function update(){
		$data = [
			'kategori_wisata' => $this->input->post('kategori_wisata'), 
		];

		$update = $this->kategoriwisata_model->update($this->input->post('id_kategori_wisata'), $data);
		return redirect(base_url().'admin/kategori/wisata');
	}

	public function destroy(){
		$data = $this->kategoriwisata_model->destroy($this->input->post('id_delete'));
		return redirect(base_url().'admin/kategori/wisata');
	}
}