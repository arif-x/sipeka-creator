<?php

class Event extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('guest/Event_model', 'event_model');
		$this->load->library('pagination');
	}

	public function index(){
		$data['title'] = 'Event';

		$config['base_url'] = base_url('event-wisata');
		$config['total_rows'] = $this->db->count_all('event');
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

		$data['event'] = $this->event_model->index($config["per_page"], $data['page']);
		$data['latest_single'] = $this->event_model->latest_single();
		$data['pagination'] = $this->pagination->create_links();

		$this->load->view('template/guest/header', $data);
		$this->load->view('guest/event', $data);
		$this->load->view('template/guest/footer');
	}

	public function show($slug){
		$data['title'] = 'Event';
		$data['event'] = $this->event_model->show($slug);
		$data['latest'] = $this->event_model->latest(3);
		if(empty($data['event'])){
			echo "string";
		} else {
			$this->load->view('template/guest/header', $data);
			$this->load->view('guest/event-single', $data);
			$this->load->view('template/guest/footer');
		}
	}
}