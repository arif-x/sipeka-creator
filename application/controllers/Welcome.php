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
		$data['wisata_populer'] = $this->db->select('*')->from('wisata')->order_by('id_wisata', 'DESC')->limit(4)->get()->result_array();
		$data['persebaran_wisata'] = $this->db->select('*')->from('wisata')->order_by('id_wisata', 'DESC')->limit(6)->get()->result_array();
		$data['kategori_populer'] = $this->db->select('*')->from('kategori_wisata')->order_by('id_kategori_wisata', 'DESC')->limit(4)->get()->result_array();
		$data['maps'] = $this->db->select('*')->from('wisata')->get()->result_array();

		$data['count'] = $this->db->select('kategori_wisata, count(*) as jumlah')->from('wisata')->join('kategori_wisata', 'kategori_wisata.id_kategori_wisata = wisata.id_kategori_wisata')->group_by('wisata.id_kategori_wisata')->limit(4)->get()->result_array();
		
		$data['informasi'] = $this->db->select('*')->from('informasi')->order_by('id_informasi', 'DESC')->join('kategori_informasi', 'kategori_informasi.id_kategori_informasi = informasi.id_kategori_informasi')->limit(6)->get()->result_array();
		$data['event'] = $this->db->select('*')->from('event')->order_by('id_event', 'DESC')->join('kategori_event', 'kategori_event.id_kategori_event = event.id_kategori_event')->limit(6)->get()->result_array();

		$data['slider'] = $this->db->select('*')->from('slider')->limit(1)->get()->result_array();

		$data['slider_text'] = $this->db->select('*')->from('slider_text')->get()->result_array();

		$this->load->view('welcome', $data);
	}
}
