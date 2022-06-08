<?php

class Wisata_model extends CI_Model {

	private $table = 'wisata';

	public function index(){
		return $this->db->select('wisata.*, kategori_wisata.kategori_wisata, reg_provinces.name as nama_provinsi, reg_regencies.name as nama_kota_kab, reg_districts.name as nama_kecamatan, reg_villages.name as nama_desa_kelurahan')->from($this->table)->join('kategori_wisata', 'kategori_wisata.id_kategori_wisata = wisata.id_kategori_wisata')->join('reg_provinces', 'reg_provinces.id = wisata.id_provinsi')->join('reg_regencies', 'reg_regencies.id = wisata.id_kota_kab')->join('reg_districts', 'reg_districts.id = wisata.id_kecamatan')->join('reg_villages', 'reg_villages.id = wisata.id_desa_kelurahan')->get()->result_array();
	}

	public function show($id_wisata){
		return $this->db->select('wisata.*, kategori_wisata.kategori_wisata, reg_provinces.name as nama_provinsi, reg_regencies.name as nama_kota_kab, reg_districts.name as nama_kecamatan, reg_villages.name as nama_desa_kelurahan')->from($this->table)->join('kategori_wisata', 'kategori_wisata.id_kategori_wisata = wisata.id_kategori_wisata')->join('reg_provinces', 'reg_provinces.id = wisata.id_provinsi')->join('reg_regencies', 'reg_regencies.id = wisata.id_kota_kab')->join('reg_districts', 'reg_districts.id = wisata.id_kecamatan')->join('reg_villages', 'reg_villages.id = wisata.id_desa_kelurahan')->where('id_wisata', $id_wisata)->get()->row();
	}

	public function store($data){
		return $this->db->insert($this->table, $data);
	}

	public function update($id_wisata, $data){
		return $this->db->where('id_wisata', $id_wisata)->update($this->table, $data);
	}

	public function destroy($id_wisata){
		return $this->db->where('id_wisata', $id_wisata)->delete($this->table);
	}
}