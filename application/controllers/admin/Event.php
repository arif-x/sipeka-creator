<?php

class Event extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('auth/admin_model', 'auth_model');
		if (!$this->auth_model->current_user()) {
			return redirect(base_url().'admin/login');
		}
		$this->load->model('admin/Event_model', 'event_model');
		$this->load->model('admin/kategoriEvent_model', 'kategorievent_model');
	}

	public function index(){
		$data['title'] = 'Event';

		$data['event'] = $this->event_model->index();
		$data['kategori'] = $this->kategorievent_model->index();
		$this->load->view('template/admin/header', $data);
		$this->load->view('admin/event/event', $data);
		$this->load->view('template/admin/footer');
	}

	public function show($id_event){
		$data = $this->event_model->show($id_event);
		echo json_encode($data);
	}

	public function store_index(){

	}

	public function store(){
		$files = $_FILES['thumbnail']['tmp_name'];
		$files_data = explode('.', $_FILES['thumbnail']['name']);
		$extension = end($files_data);
		$originalImgName = date("Y-m-d-H:i:s") .'.'. $extension;
		$new_name = str_replace(':', '-', $originalImgName);

		$config['upload_path'] = FCPATH.'/upload/event/';
		$config['allowed_types'] = 'jpeg|gif|png|jpg';
		$config['file_name'] = $new_name;
		$config['overwrite'] = true;

		$urlfix = base_url() . "upload/event/" . $new_name;

		$this->load->library('upload', $config);
		if($this->upload->do_upload('thumbnail')){
			$data = [
				'id_kategori_event' => $this->input->post('id_kategori_event'), 
				'nama_event' => $this->input->post('nama_event'), 
				'thumbnail' => $urlfix,
				'lokasi' => $this->input->post('lokasi'), 
				'datetime_mulai_registrasi' => $this->input->post('datetime_mulai_registrasi'), 
				'datetime_akhir_registrasi' => $this->input->post('datetime_akhir_registrasi'), 
				'datetime_mulai_event' => $this->input->post('datetime_mulai_event'), 
				'datetime_akhir_event' => $this->input->post('datetime_akhir_event')
			];

			$insert = $this->event_model->store($data);
			return redirect(base_url().'admin/event');
		} else {
			$data['error'] = $this->upload->display_errors();
		}
	}

	public function update_index($id_event){
		$data['title'] = 'Edit Event';
		$data = $this->event_model->show($id_event);

	}

	public function update(){
		$files = $_FILES['thumbnail']['tmp_name'];
		$files_data = explode('.', $_FILES['thumbnail']['name']);
		$extension = end($files_data);
		$originalImgName = date("Y-m-d-H:i:s") .'.'. $extension;
		$new_name = str_replace(':', '-', $originalImgName);

		$config['upload_path'] = FCPATH.'/upload/event/';
		$config['allowed_types'] = 'jpeg|gif|png|jpg';
		$config['file_name'] = $new_name;
		$config['overwrite'] = true;

		$urlfix = base_url() . "upload/event/" . $new_name;

		$this->load->library('upload', $config);
		if($this->upload->do_upload('thumbnail')){
			$data = [
				'id_kategori_event' => $this->input->post('id_kategori_event'), 
				'nama_event' => $this->input->post('nama_event'), 
				'thumbnail' => $url_fix,
				'lokasi' => $this->input->post('lokasi'), 
				'datetime_mulai_registrasi' => $this->input->post('datetime_mulai_registrasi'), 
				'datetime_akhir_registrasi' => $this->input->post('datetime_akhir_registrasi'), 
				'datetime_mulai_event' => $this->input->post('datetime_mulai_event'), 
				'datetime_akhir_event' => $this->input->post('datetime_akhir_event')
			];

			$update = $this->event_model->update($this->input->post('id_event'), $data);
			return redirect(base_url().'admin/event');
		} else {
			$data = [
				'id_kategori_event' => $this->input->post('id_kategori_event'), 
				'nama_event' => $this->input->post('nama_event'), 
				'lokasi' => $this->input->post('lokasi'), 
				'datetime_mulai_registrasi' => $this->input->post('datetime_mulai_registrasi'), 
				'datetime_akhir_registrasi' => $this->input->post('datetime_akhir_registrasi'), 
				'datetime_mulai_event' => $this->input->post('datetime_mulai_event'), 
				'datetime_akhir_event' => $this->input->post('datetime_akhir_event')
			];

			$update = $this->event_model->update($this->input->post('id_event'), $data);
			return redirect(base_url().'admin/event');
		}
	}

	public function destroy(){
		$data = $this->event_model->destroy($this->input->post('id_delete'));
		return redirect(base_url().'admin/event');
	}
}