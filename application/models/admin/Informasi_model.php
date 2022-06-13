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
		$this->db->insert($this->table, $data);

		$id = $this->db->insert_id();

		$count = 0;
		$name = url_title($this->input->post('judul_informasi'));
		$slug_name = $name;
		
		while(true) {
			$this->db->select('id_informasi');
			$this->db->where('id_informasi !=', $id);
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

		$this->db->where('id_informasi', $id)->update($this->table, $slug);
		$query = $this->db->last_query();

		return $query;
	}

	public function update($id_informasi, $data){
		$count = 0;
		$name = url_title($this->input->post('judul_informasi'));
		$slug_name = $name;
		
		while(true) {
			$this->db->select('id_informasi');
			$this->db->where('id_informasi !=', $this->input->post('id_informasi'));
			$this->db->where('slug', $slug_name);
			$query = $this->db->get($this->table);
			if ($query->num_rows() == 0){
				break;
			} else {
				$slug_name = $name . '-' . (++$count);	
			}
		}

		$this->db->where('id_informasi', $id_informasi)->update($this->table, $data);

		$slug = [
			'slug' => $slug_name 
		];

		$query = $this->db->where('id_informasi', $id_informasi)->update($this->table, $slug);

		return $query;
	}

	public function destroy($id_informasi){
		$query = $this->db->where('id_informasi', $id_informasi)->delete($this->table);
		return $query;
	}
}