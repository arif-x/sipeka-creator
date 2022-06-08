<?php

class KategoriInformasi_model extends CI_Model {

	private $table = 'kategori_informasi';

	public function index(){
		$query = $this->db->select('*')->from($this->table)->get()->result_array();
		return $query;
	}

	public function show($id_kategori_informasi){
		$query = $this->db->select('*')->from($this->table)->where('id_kategori_informasi', $id_kategori_informasi)->get()->row();
		return $query;
	}

	public function store($data){
		$query = $this->db->insert($this->table, $data);
		return $query;
	}

	public function update($id_kategori_informasi, $data){
		$query = $this->db->where('id_kategori_informasi', $id_kategori_informasi)->update($this->table, $data);
		return $query;
	}

	public function destroy($id_kategori_informasi){
		$query = $this->db->where('id_kategori_informasi', $id_kategori_informasi)->delete($this->table);
		return $query;
	}
}