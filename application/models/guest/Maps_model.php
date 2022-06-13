<?php 

class Maps_model extends CI_Model {

	public function index(){
		return $this->db->select('*')->from('wisata')->get()->result_array();
	}
}