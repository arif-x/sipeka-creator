<?php

class Config_model extends CI_Model {

	private $table = 'config';

	public function index_provinsi(){
		return $this->db->select('config.*, reg_provinces.name as nama_provinsi')->from($this->table)->join('reg_provinces', 'reg_provinces.id = config.value')->get()->result_array();
	}

	public function update_provinsi($data){
		return $this->db->where('id_config', 1)->update($this->table, $data);
	}

	public function show_provinsi(){
		return $this->db->select('config.*, reg_provinces.name as nama_provinsi')->from($this->table)->join('reg_provinces', 'reg_provinces.id = config.value')->where('id_config', 1)->get()->row();
	}
}