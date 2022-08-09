<?php

class EventEkraf_model extends CI_Model {

	private $table = 'event_ekraf';

	public function index(){
		$query = $this->db->select('*')->from($this->table)->join('kategori_event', 'kategori_event.id_kategori_event = event_ekraf.id_kategori_event')->get()->result_array();
		return $query;
	}

	public function show($id_event_ekraf){
		$query = $this->db->select('*')->from($this->table)->where('id_event_ekraf', $id_event_ekraf)->get()->row();
		return $query;
	}

	public function store($data){
		$this->db->insert($this->table, $data);
		$id = $this->db->insert_id();

		$count = 0;
		$name = url_title($this->input->post('nama_event'));
		$slug_name = $name;
		
		while(true) {
			$this->db->select('id_event_ekraf');
			$this->db->where('id_event_ekraf !=', $id);
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

		$this->db->where('id_event_ekraf', $id)->update($this->table, $slug);
		$query = $this->db->last_query();

		return $query;
	}

	public function update($id_event_ekraf, $data){
		$count = 0;
		$name = url_title($this->input->post('nama_event'));
		$slug_name = $name;
		
		while(true) {
			$this->db->select('id_event_ekraf');
			$this->db->where('id_event_ekraf !=', $this->input->post('id_event_ekraf'));
			$this->db->where('slug', $slug_name);
			$query = $this->db->get($this->table);
			if ($query->num_rows() == 0){
				break;
			} else {
				$slug_name = $name . '-' . (++$count);	
			}
		}

		$this->db->where('id_event_ekraf', $id_event_ekraf)->update($this->table, $data);

		$slug = [
			'slug' => $slug_name 
		];

		$query = $this->db->where('id_event_ekraf', $id_event_ekraf)->update($this->table, $slug);

		return $query;
	}

	public function destroy($id_event_ekraf){
		$query = $this->db->where('id_event_ekraf', $id_event_ekraf)->delete($this->table);
		return $query;
	}
}