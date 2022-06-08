<?php

class Wilayah_model extends CI_Model {

	public function get_province(){
		return $this->db->select('*')->from('reg_provinces')->get()->result_array();
	}

	public function get_regency($province_id){
		return $this->db->select('*')->from('reg_regencies')->where('province_id', $province_id)->get()->result_array();
	}

	public function get_district($regency_id){
		return $this->db->select('*')->from('reg_districts')->where('regency_id', $regency_id)->get()->result_array();
	}

	public function get_village($district_id){
		return $this->db->select('*')->from('reg_villages')->where('district_id', $district_id)->get()->result_array();
	}
}