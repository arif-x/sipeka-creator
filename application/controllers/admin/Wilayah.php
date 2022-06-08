<?php

class Wilayah extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('auth/admin_model', 'auth_model');
		if (!$this->auth_model->current_user()) {
			return redirect(base_url().'admin/login');
		}
		$this->load->model('admin/wilayah_model', 'wilayah_model');
	}

	public function get_province(){
		echo json_encode($this->wilayah_model->get_province());
	}

	public function get_regency($province_id){
		echo json_encode($this->wilayah_model->get_regency($province_id));
	}

	public function get_district($regency_id){
		echo json_encode($this->wilayah_model->get_district($regency_id));
	}

	public function get_village($district_id){
		echo json_encode($this->wilayah_model->get_village($district_id));
	}
}