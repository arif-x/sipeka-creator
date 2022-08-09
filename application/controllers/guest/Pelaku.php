<?php

class Pelaku extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('guest/Pelaku_model', 'pelaku_model');
		$this->load->library('pagination');
	}

	public function index(){
		$data['title'] = 'Pelaku Ekraf';

		$config['base_url'] = base_url('daftar-pelaku-ekraf');
		$config['total_rows'] = $this->db->count_all('pelaku_ekraf');
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

		$data['pelaku_ekraf'] = $this->pelaku_model->index($config["per_page"], $data['page']);
		$data['latest_single'] = $this->pelaku_model->latest_single();
		$data['pagination'] = $this->pagination->create_links();

		$this->load->view('template/guest/header', $data);
		$this->load->view('guest/pelaku-ekraf', $data);
		$this->load->view('template/guest/footer');
	}

	public function show($id_pelaku_ekraf){
		$data['title'] = 'Pelaku Ekraf';
		$data['pelaku'] = $this->pelaku_model->show($id_pelaku_ekraf);
		$data['latest'] = $this->pelaku_model->latest(3);
		if(empty($data['pelaku'])){
			echo "string";
		} else {
			$this->load->view('template/guest/header', $data);
			$this->load->view('guest/pelaku-single', $data);
			$this->load->view('template/guest/footer');
		}
	}
}