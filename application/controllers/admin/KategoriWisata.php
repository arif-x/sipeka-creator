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
		$files = $_FILES['img_kategori_wisata']['tmp_name'];
		$files_data = explode('.', $_FILES['img_kategori_wisata']['name']);
		$extension = end($files_data);
		$originalImgName = date("Y-m-d-H:i:s") .'.'. $extension;
		$new_name = str_replace(':', '-', $originalImgName);

		$config['upload_path'] = FCPATH.'/upload/wisata/';
		$config['allowed_types'] = 'jpeg|gif|png|jpg';
		$config['file_name'] = $new_name;
		$config['overwrite'] = true;

		$urlfix = base_url() . "upload/wisata/" . $new_name;

		$this->load->library('upload', $config);

		if($this->upload->do_upload('img_kategori_wisata')){
			$data = [
				'kategori_wisata' => $this->input->post('kategori_wisata'), 
				'img_kategori_wisata' => $urlfix,
			];

			$insert = $this->kategoriwisata_model->store($data);
			return redirect(base_url().'admin/kategori/wisata');
		} else {
			echo "Gagal upload file";
		}
	}

	public function update(){
		$files = $_FILES['img_kategori_wisata']['tmp_name'];
		$files_data = explode('.', $_FILES['img_kategori_wisata']['name']);
		$extension = end($files_data);
		$originalImgName = date("Y-m-d-H:i:s") .'.'. $extension;
		$new_name = str_replace(':', '-', $originalImgName);

		$config['upload_path'] = FCPATH.'/upload/wisata/';
		$config['allowed_types'] = 'jpeg|gif|png|jpg';
		$config['file_name'] = $new_name;
		$config['overwrite'] = true;

		$urlfix = base_url() . "upload/wisata/" . $new_name;

		$this->load->library('upload', $config);

		if($this->upload->do_upload('img_kategori_wisata')){
			$data = [
				'kategori_wisata' => $this->input->post('kategori_wisata'), 
				'img_kategori_wisata' => $urlfix
			];

			$update = $this->kategoriwisata_model->update($this->input->post('id_kategori_wisata'), $data);
			return redirect(base_url().'admin/kategori/wisata');
		} else {
			$data = [
				'kategori_wisata' => $this->input->post('kategori_wisata'), 
			];

			$update = $this->kategoriwisata_model->update($this->input->post('id_kategori_wisata'), $data);
			return redirect(base_url().'admin/kategori/wisata');
		}
	}

	public function destroy(){
		$data = $this->kategoriwisata_model->destroy($this->input->post('id_delete'));
		return redirect(base_url().'admin/kategori/wisata');
	}
}