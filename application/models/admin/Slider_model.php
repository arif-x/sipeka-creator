<?php

class Slider_model extends CI_Model {

	private $table = 'slider';

	public function index(){
		$query = $this->db->select('*')->from($this->table)->get()->result_array();
		return $query;
	}

	public function show($id_slider){
		$query = $this->db->select('*')->from($this->table)->where('id_slider', $id_slider)->get()->row();
		return $query;
	}

	public function update($id_slider, $data){
		$this->db->where('id_slider', $id_slider)->update($this->table, $data);
	}
}