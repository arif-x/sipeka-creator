<?php

class Informasi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('auth/admin_model', 'auth_model');
		if (!$this->auth_model->current_user()) {
			return redirect(base_url().'admin/login');
		}
		$this->load->model('admin/informasi_model', 'informasi_model');
		$this->load->model('admin/kategoriinformasi_model', 'kategoriinformasi_model');
	}

	public function index(){
		$data['title'] = 'Informasi';

		$data['kategori'] = $this->kategoriinformasi_model->index();
		$data['informasi'] = $this->informasi_model->index();
		$this->load->view('template/admin/header', $data);
		$this->load->view('admin/informasi/informasi', $data);
		$this->load->view('template/admin/footer');
	}

	public function show($id_informasi){
		$data = $this->informasi_model->show($id_informasi);
		echo json_encode($data);
	}

	public function store(){
		$files = $_FILES['img_informasi']['tmp_name'];
		$files_data = explode('.', $_FILES['img_informasi']['name']);
		$extension = end($files_data);
		$originalImgName = date("Y-m-d-H:i:s") .'.'. $extension;
		$new_name = str_replace(':', '-', $originalImgName);

		$config['upload_path'] = FCPATH.'/upload/informasi/';
		$config['allowed_types'] = 'jpeg|gif|png|jpg';
		$config['file_name'] = $new_name;
		$config['overwrite'] = true;

		$urlfix = base_url() . "upload/informasi/" . $new_name;

		$this->load->library('upload', $config);
		if($this->upload->do_upload('img_informasi')){
			$data = [
				'id_kategori_informasi' => $this->input->post('id_kategori_informasi'), 
				'judul_informasi' => $this->input->post('judul_informasi'), 
				'img_informasi' => $urlfix,
				'konten' => $this->input->post('konten'), 
				'tanggal' => $this->input->post('tanggal'), 
			];

			$insert = $this->informasi_model->store($data);
			return redirect(base_url().'admin/informasi');
		} else {
			$data['error'] = $this->upload->display_errors();
		}
		
	}

	public function update(){
		$files = $_FILES['img_informasi']['tmp_name'];
		$files_data = explode('.', $_FILES['img_informasi']['name']);
		$extension = end($files_data);
		$originalImgName = date("Y-m-d-H:i:s") .'.'. $extension;
		$new_name = str_replace(':', '-', $originalImgName);

		$config['upload_path'] = FCPATH.'/upload/informasi/';
		$config['allowed_types'] = 'jpeg|gif|png|jpg';
		$config['file_name'] = $new_name;
		$config['overwrite'] = true;

		$urlfix = base_url() . "upload/informasi/" . $new_name;

		$this->load->library('upload', $config);
		if($this->upload->do_upload('img_informasi')){
			$data = [
				'id_kategori_informasi' => $this->input->post('id_kategori_informasi'), 
				'judul_informasi' => $this->input->post('judul_informasi'), 
				'img_informasi' => $urlfix,
				'konten' => $this->input->post('konten'), 
				'tanggal' => $this->input->post('tanggal'), 
			];

			$update = $this->informasi_model->update($this->input->post('id_informasi'), $data);
			return redirect(base_url().'admin/informasi');
		} else {
			$data = [
				'id_kategori_informasi' => $this->input->post('id_kategori_informasi'), 
				'judul_informasi' => $this->input->post('judul_informasi'), 
				'konten' => $this->input->post('konten'), 
				'tanggal' => $this->input->post('tanggal'), 
			];

			$update = $this->informasi_model->update($this->input->post('id_informasi'), $data);
			return redirect(base_url().'admin/informasi');
		}
	}

	public function destroy(){
		$data = $this->informasi_model->destroy($this->input->post('id_delete'));
		return redirect(base_url().'admin/informasi');
	}
}