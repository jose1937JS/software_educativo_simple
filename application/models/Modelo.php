<?php

class Modelo extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_users($user, $campo = 'usuario')
	{
		return $this->db->get_where('estudiantes', [$campo => $user]);
	}

	public function insert($info)
	{
		$this->db->insert('estudiantes', $info);
	}

	public function insertarprueba($test)
	{
		$this->db->insert('pruebas', $test);
	}

	public function get_pruebas()
	{
		return $this->db->select('*')
					->from('pruebas')
					->join('estudiantes', 'id_estudiante = estudiantes.id')
					->where('revisada', 0)
					->get();
	}

	public function nota($id, $calificacion)
	{
		$this->db->where('id_estudiante', $id);
		$this->db->update('pruebas', ['calificacion' => $calificacion, 'revisada' => 1]);
	}

	public function asd($user)
	{
		$id = $this->db->select('id')
				->from('estudiantes')
				->where('usuario', $user)
				->get();

		return $this->db->select('*')
					->from('pruebas')
					->where('id_estudiante', $id->result()[0]->id)
					->get();

	}
}