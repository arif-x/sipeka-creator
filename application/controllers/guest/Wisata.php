<?php

class Wisata extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('guest/Wisata_model', 'wisata_model');
		$this->load->library('pagination');
	}

	public function index(){
		$data['title'] = 'Wisata';

		$config['base_url'] = base_url('daftar-wisata');
		$config['total_rows'] = $this->db->count_all('wisata');
		$config['per_page'] = 6; 
		$config["uri_segment"] = 2;
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = floor($choice);
		$config['use_page_numbers'] = TRUE;
		$config['reuse_query_string'] = TRUE;

		$config['full_tag_open'] = '<div class="pagination">';
		$config['full_tag_close'] = '</div>';

		$this->pagination->initialize($config);
		$data['page'] = ($this->uri->segment(2)) ? $this->uri->segment(2) - 1 : 0;

		$data['wisata'] = $this->wisata_model->index($config["per_page"], $data['page']);
		$data['latest_single'] = $this->wisata_model->latest_single();
		$data['pagination'] = $this->pagination->create_links();

		$this->load->view('template/guest/header', $data);
		$this->load->view('guest/wisata', $data);
		$this->load->view('template/guest/footer');
	}

	public function show($slug){
		$data['title'] = 'wisata';
		$data['wisata'] = $this->wisata_model->show($slug);
		$data['latest'] = $this->wisata_model->latest(3);
		if(empty($data['wisata'])){
			echo "string";
		} else {
			$this->load->view('template/guest/header', $data);
			$this->load->view('guest/wisata-single', $data);
			$this->load->view('template/guest/footer');
		}
	}
}