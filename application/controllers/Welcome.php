<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['informasi'] = $this->db->select('*')->from('informasi')->order_by('id_informasi', 'DESC')->join('kategori_informasi', 'kategori_informasi.id_kategori_informasi = informasi.id_kategori_informasi')->limit(6)->get()->result_array();
		$data['event'] = $this->db->select('*')->from('event')->order_by('id_event', 'DESC')->join('kategori_event', 'kategori_event.id_kategori_event = event.id_kategori_event')->limit(6)->get()->result_array();
		$this->load->view('welcome', $data);
	}
}
