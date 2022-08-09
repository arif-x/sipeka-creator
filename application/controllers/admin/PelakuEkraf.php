<?php

class PelakuEkraf extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('auth/admin_model', 'auth_model');
		if (!$this->auth_model->current_user()) {
			return redirect(base_url().'admin/login');
		}
		$this->load->model('admin/pelaku_model', 'pelaku_model');
	}

	public function index(){
		$data['title'] = 'Pelaku Ekraf';

		$data['pelaku'] = $this->pelaku_model->index();
		$this->load->view('template/admin/header', $data);
		$this->load->view('admin/pelaku/pelaku', $data);
		$this->load->view('template/admin/footer');
	}

	public function show($id_pelaku){
		$data = $this->pelaku_model->show($id_pelaku);
		echo json_encode($data);
	}

	public function store(){
		$data = [
			'nama_lengkap' => $this->input->post('nama_lengkap'), 
			'email' => $this->input->post('email'), 
			'no_hp' => $this->input->post('no_hp'), 
			'website' => $this->input->post('website'), 
			'alamat' => $this->input->post('alamat'), 
			'kategori' => $this->input->post('kategori'), 
			'deskripsi' => $this->input->post('deskripsi'), 
		];

		$insert = $this->pelaku_model->store($data);
		return redirect(base_url().'admin/pelaku-ekraf');
	}

	public function update(){

		$data = [
			'nama_lengkap' => $this->input->post('nama_lengkap'), 
			'email' => $this->input->post('email'), 
			'no_hp' => $this->input->post('no_hp'), 
			'website' => $this->input->post('website'), 
			'alamat' => $this->input->post('alamat'), 
			'kategori' => $this->input->post('kategori'), 
			'deskripsi' => $this->input->post('deskripsi'), 
		];

		$update = $this->pelaku_model->update($this->input->post('id_pelaku_ekraf'), $data);
		return redirect(base_url().'admin/pelaku-ekraf');
	}

	public function destroy(){
		$data = $this->pelaku_model->destroy($this->input->post('id_delete'));
		return redirect(base_url().'admin/pelaku-ekraf');
	}
}