<?php

class Kategoriwisata_model extends CI_Model {

	private $table = 'kategori_wisata';

	public function index(){
		$query = $this->db->select('*')->from($this->table)->get()->result_array();
		return $query;
	}

	public function show($id_kategori_wisata){
		$query = $this->db->select('*')->from($this->table)->where('id_kategori_wisata', $id_kategori_wisata)->get()->row();
		return $query;
	}

	public function store($data){
		$query = $this->db->insert($this->table, $data);
		return $query;
	}

	public function update($id_kategori_wisata, $data){
		$query = $this->db->where('id_kategori_wisata', $id_kategori_wisata)->update($this->table, $data);
		return $query;
	}

	public function destroy($id_kategori_wisata){
		$query = $this->db->where('id_kategori_wisata', $id_kategori_wisata)->delete($this->table);
		return $query;
	}
}