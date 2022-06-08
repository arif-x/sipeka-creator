<?php

class KategoriEvent_model extends CI_Model {

	private $table = 'kategori_event';

	public function index(){
		$query = $this->db->select('*')->from($this->table)->get()->result_array();
		return $query;
	}

	public function show($id_kategori_event){
		$query = $this->db->select('*')->from($this->table)->where('id_kategori_event', $id_kategori_event)->get()->row();
		return $query;
	}

	public function store($data){
		$query = $this->db->insert($this->table, $data);
		return $query;
	}

	public function update($id_kategori_event, $data){
		$query = $this->db->where('id_kategori_event', $id_kategori_event)->update($this->table, $data);
		return $query;
	}

	public function destroy($id_kategori_event){
		$query = $this->db->where('id_kategori_event', $id_kategori_event)->delete($this->table);
		return $query;
	}
}