<?php

class Event_model extends CI_Model {

	private $table = 'event';

	public function index(){
		$query = $this->db->select('*')->from($this->table)->join('kategori_event', 'kategori_event.id_kategori_event = event.id_kategori_event')->get()->result_array();
		return $query;
	}

	public function show($id_event){
		$query = $this->db->select('*')->from($this->table)->where('id_event', $id_event)->get()->row();
		return $query;
	}

	public function store($data){
		$query = $this->db->insert($this->table, $data);
		return $query;
	}

	public function update($id_event, $data){
		$query = $this->db->where('id_event', $id_event)->update($this->table, $data);
		return $query;
	}

	public function destroy($id_event){
		$query = $this->db->where('id_event', $id_event)->delete($this->table);
		return $query;
	}
}