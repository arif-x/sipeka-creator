<?php

class Pelaku_model extends CI_Model {

	private $table = 'pelaku_ekraf';

	public function index($limit, $start){
		return $this->db->select('*')->from($this->table)->order_by('id_pelaku_ekraf', 'DESC')->limit($limit, $start)->get()->result_array();
	}

	public function show($id_pelaku_ekraf){
		return $this->db->select('*')->from($this->table)->where('id_pelaku_ekraf', $id_pelaku_ekraf)->get()->result_array();
	}

	public function latest($limit){
		return $this->db->select('*')->from($this->table)->order_by('id_pelaku_ekraf', 'DESC')->limit($limit)->get()->result_array();
	}

	public function latest_single(){
		return $this->db->select('*')->from($this->table)->order_by('id_pelaku_ekraf', 'DESC')->limit(1)->get()->result_array();
	}
}