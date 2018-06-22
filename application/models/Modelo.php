<?php

class Modelo extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_users($user)
	{
		return $this->db->get_where('estudiantes', ['usuario' => $user]);
	}

	public function insert($info)
	{
		$this->db->insert('estudiantes', $info);
	}
}