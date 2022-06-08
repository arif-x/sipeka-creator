<?php

class Informasi_model extends CI_Model {

	private $table = 'informasi';

	public function index(){
		$query = $this->db->select('*')->from($this->table)->join('kategori_informasi', 'kategori_informasi.id_kategori_informasi = informasi.id_kategori_informasi')->get()->result_array();
		return $query;
	}

	public function show($id_informasi){
		$query = $this->db->select('*')->from($this->table)->where('id_informasi', $id_informasi)->get()->row();
		return $query;
	}

	public function store($data){
		$query = $this->db->insert($this->table, $data);
		return $query;
	}

	public function update($id_informasi, $data){
		$query = $this->db->where('id_informasi', $id_informasi)->update($this->table, $data);
		return $query;
	}

	public function destroy($id_informasi){
		$query = $this->db->where('id_informasi', $id_informasi)->delete($this->table);
		return $query;
	}
}