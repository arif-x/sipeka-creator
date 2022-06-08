<?php

class User_model extends CI_Model
{
	private $_table = "user";
	const SESSION_KEY = 'id_user';

	public function rules()
	{
		return [
			[
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'required'
			],
			[
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required|max_length[255]'
			]
		];
	}

	public function login($email, $password)
	{
		$this->db->where('email', $email)->where('password', $password);
		$query = $this->db->get($this->_table);
		$user = $query->row();

		if (!$user) {
			return FALSE;
		}

		$this->session->set_userdata([self::SESSION_KEY => $user->id_user]);

		return $this->session->has_userdata(self::SESSION_KEY);
	}

	public function current_user()
	{
		if (!$this->session->has_userdata(self::SESSION_KEY)) {
			return null;
		}

		$id_user = $this->session->userdata(self::SESSION_KEY);
		$query = $this->db->get_where($this->_table, ['id_user' => $id_user]);
		return $query->row();
	}

	public function id_user(){
		if (!$this->session->has_userdata(self::SESSION_KEY)) {
			return null;
		}

		$id_user = $this->session->userdata(self::SESSION_KEY);
		return $id_user;
	}

	public function logout()
	{
		$this->session->unset_userdata(self::SESSION_KEY);
		return !$this->session->has_userdata(self::SESSION_KEY);
	}

	public function has_user($email){
		$check = $this->db->select('*')->from($this->_table)->where('email', $email)->get()->result();
		return $check;
	}

	public function register($data){
		$query = $this->db->insert($this->_table, $data);
		// $wisata = [
		// 	'id_user' => $this->db->insert_id()
		// ];
		// $query = $this->db->insert('wisata', $wisata);
		return $query;
	}
}
