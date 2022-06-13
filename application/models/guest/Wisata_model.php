<?php

class Wisata_model extends CI_Model {

	private $table = 'wisata';

	public function index($limit, $start){
		return $this->db->select('*')->from($this->table)->order_by('id_wisata', 'DESC')->join('kategori_wisata', 'kategori_wisata.id_kategori_wisata = wisata.id_kategori_wisata')->limit($limit, $start)->get()->result_array();
	}

	public function show($slug){
		return $this->db->select('*')->from($this->table)->where('slug', $slug)
		->join('kategori_wisata', 'kategori_wisata.id_kategori_wisata = wisata.id_kategori_wisata')
		->join('reg_provinces', 'reg_provinces.id = wisata.id_provinsi')
		->join('reg_regencies', 'reg_regencies.id = wisata.id_kota_kab')
		->join('reg_districts', 'reg_districts.id = wisata.id_kecamatan')
		->join('reg_villages', 'reg_villages.id = wisata.id_desa_kelurahan')
		->select('wisata.*, kategori_wisata.kategori_wisata, reg_provinces.name as nama_provinsi, reg_regencies.name as nama_kota_kab, reg_districts.name as nama_kecamatan, reg_villages.name as nama_desa_kelurahan')
		->get()->result_array();
	}

	public function latest($limit){
		return $this->db->select('*')->from($this->table)->order_by('id_wisata', 'DESC')->join('kategori_wisata', 'kategori_wisata.id_kategori_wisata = wisata.id_kategori_wisata')->limit($limit)->get()->result_array();
	}

	public function latest_single(){
		return $this->db->select('*')->from($this->table)->order_by('id_wisata', 'DESC')->join('kategori_wisata', 'kategori_wisata.id_kategori_wisata = wisata.id_kategori_wisata')->limit(1)->get()->result_array();
	}
}