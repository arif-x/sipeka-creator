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
		$this->db->insert($this->table, $data);
		$id = $this->db->insert_id();

		$count = 0;
		$name = url_title($this->input->post('nama_wisata'));
		$slug_name = $name;
		
		while(true) {
			$this->db->select('id_wisata');
			$this->db->where('id_wisata !=', $id);
			$this->db->where('slug', $slug_name);
			$query = $this->db->get($this->table);
			if ($query->num_rows() == 0){
				break;
			} else {
				$slug_name = $name . '-' . (++$count);	
			}
		}

		$slug = [
			'slug' => $slug_name 
		];

		$this->db->where('id_wisata', $id)->update($this->table, $slug);
		$query = $this->db->last_query();

		return $query;
	}

	public function update($id_wisata, $data){
		$count = 0;
		$name = url_title($this->input->post('nama_wisata'));
		$slug_name = $name;
		
		while(true) {
			$this->db->select('id_wisata');
			$this->db->where('id_wisata !=', $this->input->post('id_wisata'));
			$this->db->where('slug', $slug_name);
			$query = $this->db->get($this->table);
			if ($query->num_rows() == 0){
				break;
			} else {
				$slug_name = $name . '-' . (++$count);	
			}
		}
		
		$this->db->where('id_wisata', $id_wisata)->update($this->table, $data);

		$slug = [
			'slug' => $slug_name 
		];

		$query = $this->db->where('id_wisata', $id_wisata)->update($this->table, $slug);

		return $query;
	}

	public function destroy($id_wisata){
		return $this->db->where('id_wisata', $id_wisata)->delete($this->table);
	}
}