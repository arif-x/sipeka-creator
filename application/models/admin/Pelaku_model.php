<?php

class Pelaku_model extends CI_Model {

	private $table = 'pelaku_ekraf';

	public function index(){
		$query = $this->db->select('*')->from($this->table)->get()->result_array();
		return $query;
	}

	public function show($id_pelaku_ekraf){
		$query = $this->db->select('*')->from($this->table)->where('id_pelaku_ekraf', $id_pelaku_ekraf)->get()->row();
		return $query;
	}

	public function store($data){
		$this->db->insert($this->table, $data);
	}

	public function update($id_pelaku_ekraf, $data){
		$this->db->where('id_pelaku_ekraf', $id_pelaku_ekraf)->update($this->table, $data);
	}

	public function destroy($id_pelaku_ekraf){
		$query = $this->db->where('id_pelaku_ekraf', $id_pelaku_ekraf)->delete($this->table);
		return $query;
	}
}