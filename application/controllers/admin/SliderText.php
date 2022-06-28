<?php

class SliderText extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('auth/admin_model', 'auth_model');
		if (!$this->auth_model->current_user()) {
			return redirect(base_url().'admin/login');
		}
		$this->load->model('admin/sliderText_model', 'slidertext_model');
	}

	public function index(){
		$data['title'] = 'Slider Text';

		$data['slider'] = $this->slidertext_model->index();
		$this->load->view('template/admin/header', $data);
		$this->load->view('admin/slider/slider-text', $data);
		$this->load->view('template/admin/footer');
	}

	public function show($id_slider_text){
		$data = $this->slidertext_model->show($id_slider_text);
		echo json_encode($data);
	}

	public function store(){
		$data = [
			'slider_text' => $this->input->post('slider_text'), 
		];

		$insert = $this->slidertext_model->store($data);
		return redirect(base_url().'admin/slider-text');
	}

	public function update(){
		$data = [
			'slider_text' => $this->input->post('slider_text'), 
		];

		$update = $this->slidertext_model->update($this->input->post('id_slider_text'), $data);
		return redirect(base_url().'admin/slider-text');
	}

	public function destroy(){
		$data = $this->slidertext_model->destroy($this->input->post('id_delete'));
		return redirect(base_url().'admin/slider-text');
	}
}