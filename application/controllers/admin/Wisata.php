<?php

class Wisata extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('auth/admin_model', 'auth_model');
		if (!$this->auth_model->current_user()) {
			return redirect(base_url().'admin/login');
		}
		$this->load->model('admin/Wisata_model', 'wisata_model');
		$this->load->model('admin/kategoriWisata_model', 'kategoriwisata_model');
		$this->load->model('admin/config_model', 'config_model');
	}

	public function index(){
		$data['title'] = 'Wisata';
		$data['kategori'] = $this->kategoriwisata_model->index();
		$data['wisata'] = $this->wisata_model->index();
		$data['provinsi'] = $this->config_model->index_provinsi();
		$this->load->view('template/admin/header', $data);
		$this->load->view('admin/wisata/wisata', $data);
		$this->load->view('template/admin/footer');
	}

	public function store(){
		$files = $_FILES['img']['tmp_name'];
		$files_data = explode('.', $_FILES['img']['name']);
		$extension = end($files_data);
		$originalImgName = date("Y-m-d-H:i:s") .'.'. $extension;
		$new_name = str_replace(':', '-', $originalImgName);

		$config['upload_path'] = FCPATH.'/upload/wisata/';
		$config['allowed_types'] = 'jpeg|gif|png|jpg';
		$config['file_name'] = $new_name;
		$config['overwrite'] = true;

		$urlfix = base_url() . "upload/wisata/" . $new_name;

		$this->load->library('upload', $config);
		if($this->upload->do_upload('img')){
			$data = [
				'nama_wisata' => $this->input->post('nama_wisata'), 
				'email_wisata' => $this->input->post('email_wisata'), 
				'no_hp_wisata' => $this->input->post('no_hp_wisata'), 
				'website_wisata' => $this->input->post('website_wisata'), 
				'alamat_wisata' => $this->input->post('alamat_wisata'), 
				'latitude' => $this->input->post('latitude'), 
				'longitude' => $this->input->post('longitude'), 
				'id_kategori_wisata' => $this->input->post('id_kategori_wisata'), 
				'deskripsi_wisata' => $this->input->post('deskripsi_wisata'), 
				'img' => $urlfix,
				'id_provinsi' => $this->input->post('id_provinsi'), 
				'id_kota_kab' => $this->input->post('id_kota_kab'), 
				'id_kecamatan' => $this->input->post('id_kecamatan'), 
				'id_desa_kelurahan' => $this->input->post('id_desa_kelurahan'), 
			];

			$insert = $this->wisata_model->store($data);
			return redirect(base_url().'admin/wisata');
		} else {
			$data['error'] = $this->upload->display_errors();
			echo "string";
		}
		
	}

	public function show($id_wisata){
		$data = $this->wisata_model->show($id_wisata);
		echo json_encode($data);
	}

	public function update(){
		$files = $_FILES['img']['tmp_name'];
		$files_data = explode('.', $_FILES['img']['name']);
		$extension = end($files_data);
		$originalImgName = date("Y-m-d-H:i:s") .'.'. $extension;
		$new_name = str_replace(':', '-', $originalImgName);

		$config['upload_path'] = FCPATH.'/upload/wisata/';
		$config['allowed_types'] = 'jpeg|gif|png|jpg';
		$config['file_name'] = $new_name;
		$config['overwrite'] = true;

		$urlfix = base_url() . "upload/wisata/" . $new_name;

		$this->load->library('upload', $config);
		if($this->upload->do_upload('img')){
			$data = [
				'nama_wisata' => $this->input->post('nama_wisata'), 
				'email_wisata' => $this->input->post('email_wisata'), 
				'no_hp_wisata' => $this->input->post('no_hp_wisata'), 
				'website_wisata' => $this->input->post('website_wisata'), 
				'alamat_wisata' => $this->input->post('alamat_wisata'), 
				'latitude' => $this->input->post('latitude'), 
				'longitude' => $this->input->post('longitude'), 
				'id_kategori_wisata' => $this->input->post('id_kategori_wisata'), 
				'deskripsi_wisata' => $this->input->post('deskripsi_wisata'), 
				'img' => $urlfix,
				'id_provinsi' => $this->input->post('id_provinsi'), 
				'id_kota_kab' => $this->input->post('id_kota_kab'), 
				'id_kecamatan' => $this->input->post('id_kecamatan'), 
				'id_desa_kelurahan' => $this->input->post('id_desa_kelurahan'), 
			];

			$udpate = $this->wisata_model->update($this->input->post('id_wisata'), $data);
			return redirect(base_url().'admin/wisata');
		} else {
			$data = [
				'nama_wisata' => $this->input->post('nama_wisata'), 
				'email_wisata' => $this->input->post('email_wisata'), 
				'no_hp_wisata' => $this->input->post('no_hp_wisata'), 
				'website_wisata' => $this->input->post('website_wisata'), 
				'alamat_wisata' => $this->input->post('alamat_wisata'), 
				'latitude' => $this->input->post('latitude'), 
				'longitude' => $this->input->post('longitude'), 
				'id_kategori_wisata' => $this->input->post('id_kategori_wisata'), 
				'deskripsi_wisata' => $this->input->post('deskripsi_wisata'), 
				'id_provinsi' => $this->input->post('id_provinsi'), 
				'id_kota_kab' => $this->input->post('id_kota_kab'), 
				'id_kecamatan' => $this->input->post('id_kecamatan'), 
				'id_desa_kelurahan' => $this->input->post('id_desa_kelurahan'), 
			];

			$udpate = $this->wisata_model->update($this->input->post('id_wisata'), $data);
			return redirect(base_url().'admin/wisata');
		}
	}

	public function destroy(){
		$data = $this->wisata_model->destroy($this->input->post('id_delete'));
		return redirect(base_url().'admin/wisata');
	}
}