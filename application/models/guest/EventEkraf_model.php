<?php

class EventEkraf_model extends CI_Model {

	private $table = 'event_ekraf';

	public function index($limit, $start){
		return $this->db->select('*')->from($this->table)->order_by('id_event_ekraf', 'DESC')->join('kategori_event', 'kategori_event.id_kategori_event = event_ekraf.id_kategori_event')->limit($limit, $start)->get()->result_array();
	}

	public function show($slug){
		return $this->db->select('*')->from($this->table)->where('slug', $slug)->join('kategori_event', 'kategori_event.id_kategori_event = event_ekraf.id_kategori_event')->get()->result_array();
	}

	public function latest($limit){
		return $this->db->select('*')->from($this->table)->order_by('id_event_ekraf', 'DESC')->join('kategori_event', 'kategori_event.id_kategori_event = event_ekraf.id_kategori_event')->limit($limit)->get()->result_array();
	}

	public function latest_single(){
		return $this->db->select('*')->from($this->table)->order_by('id_event_ekraf', 'DESC')->join('kategori_event', 'kategori_event.id_kategori_event = event_ekraf.id_kategori_event')->limit(1)->get()->result_array();
	}
}