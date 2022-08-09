<?php

class Slider extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth/admin_model', 'auth_model');
		if (!$this->auth_model->current_user()) {
			return redirect(base_url() . 'admin/login');
		}
		$this->load->model('admin/slider_model', 'slider_model');
	}

	public function index()
	{
		$data['title'] = 'slider';
		$data['slider'] = $this->slider_model->index();
		$this->load->view('template/admin/header', $data);
		$this->load->view('admin/slider/slider', $data);
		$this->load->view('template/admin/footer');
	}

	public function show($id_slider)
	{
		$data = $this->slider_model->show($id_slider);
		echo json_encode($data);
	}

	public function update()
	{
		$files = $_FILES['slider']['tmp_name'];
		$files_data = explode('.', $_FILES['slider']['name']);
		$extension = end($files_data);
		$originalImgName = date("Y-m-d-H:i:s") .'.'. $extension;
		$new_name = str_replace(':', '-', $originalImgName);

		$config['upload_path'] = FCPATH . '/upload/slider/';
		$config['file_name'] = $new_name;
		$config['allowed_types'] = 'mp4';
		$config['overwrite'] = true;

		$urlfix = base_url() . "upload/slider/" . $config['file_name'];

		echo $new_name;

		$this->load->library('upload', $config);
		if ($this->upload->do_upload('slider')) {
			$data = [
				'slider' => $urlfix,
			];

			$update = $this->slider_model->update($this->input->post('id_slider'), $data);


			return redirect(base_url() . 'admin/slider');
			// echo "string";
			return redirect(base_url() . 'admin/slider');
		} else {
			return redirect(base_url() . 'admin/slider');
		}
	}
}
