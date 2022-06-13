<?php

class Informasi_model extends CI_Model {

	private $table = 'informasi';

	public function index($limit, $start){
		return $this->db->select('*')->from($this->table)->order_by('id_informasi', 'DESC')->join('kategori_informasi', 'kategori_informasi.id_kategori_informasi = informasi.id_kategori_informasi')->limit($limit, $start)->get()->result_array();
	}

	public function show($slug){
		return $this->db->select('*')->from($this->table)->where('slug', $slug)->join('kategori_informasi', 'kategori_informasi.id_kategori_informasi = informasi.id_kategori_informasi')->get()->result_array();
	}

	public function latest($limit){
		return $this->db->select('*')->from($this->table)->order_by('id_informasi', 'DESC')->join('kategori_informasi', 'kategori_informasi.id_kategori_informasi = informasi.id_kategori_informasi')->limit($limit)->get()->result_array();
	}

	public function latest_single(){
		return $this->db->select('*')->from($this->table)->order_by('id_informasi', 'DESC')->join('kategori_informasi', 'kategori_informasi.id_kategori_informasi = informasi.id_kategori_informasi')->limit(1)->get()->result_array();
	}
}