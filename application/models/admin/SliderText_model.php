<?php

class SliderText_model extends CI_Model {

	private $table = 'slider_text';

	public function index(){
		$query = $this->db->select('*')->from($this->table)->get()->result_array();
		return $query;
	}

	public function show($id_slider_text){
		$query = $this->db->select('*')->from($this->table)->where('id_slider_text', $id_slider_text)->get()->row();
		return $query;
	}

	public function store($data){
		$this->db->insert($this->table, $data);
	}

	public function update($id_slider_text, $data){
		$this->db->where('id_slider_text', $id_slider_text)->update($this->table, $data);
	}

	public function destroy($id_slider_text){
		$query = $this->db->where('id_slider_text', $id_slider_text)->delete($this->table);
		return $query;
	}
}