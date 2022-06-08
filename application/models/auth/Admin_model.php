<?php

class Admin_model extends CI_Model
{
	private $_table = "admin";
	const SESSION_KEY = 'id_admin';

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
		$admin = $query->row();

		if (!$admin) {
			return FALSE;
		}

		$this->session->set_userdata([self::SESSION_KEY => $admin->id_admin]);

		return $this->session->has_userdata(self::SESSION_KEY);
	}

	public function current_user()
	{
		if (!$this->session->has_userdata(self::SESSION_KEY)) {
			return null;
		}

		$id_admin = $this->session->userdata(self::SESSION_KEY);
		$query = $this->db->get_where($this->_table, ['id_admin' => $id_admin]);
		return $query->row();
	}

	public function id_admin(){
		if (!$this->session->has_userdata(self::SESSION_KEY)) {
			return null;
		}

		$id_admin = $this->session->userdata(self::SESSION_KEY);
		return $id_admin;
	}

	public function logout()
	{
		$this->session->unset_userdata(self::SESSION_KEY);
		return !$this->session->has_userdata(self::SESSION_KEY);
	}
}
