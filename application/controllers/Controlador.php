<?php

class Controlador extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(['url', 'form']);
		$this->load->library('session');
		$this->load->model('modelo');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function login()
	{
		$user = $this->input->post('usuario');
		$pass = $this->input->post('clave');

		$dbdata = $this->modelo->get_users($user)->result();

		if ($user == $dbdata[0]->usuario && $pass == $dbdata[0]->clave)
		{
			if ($user == 'admin')
			{
				$this->session->set_userdata('admin', $user);		
				redirect('admin');	
			}
			$this->session->set_userdata('usuario', $user);
			redirect('inicio');
		}
		else {
			redirect('');
		}
	}

	public function inicio()
	{
		if ($this->session->has_userdata('usuario')) {
			$this->load->view('inicio');
		}
		else {
			redirect('');
		}
	}

	public function insertar_user()
	{
		$data = [
			'nombre'   => $this->input->post('nombre'),
			'apellido' => $this->input->post('apellido'),
			'cedula'   => $this->input->post('cedula'),
			'telefono' => $this->input->post('telefono'),
			'correo'   => $this->input->post('correo'),
			'usuario'  => $this->input->post('usuario'),
			'clave'    => $this->input->post('clave')
		];
		
		$this->modelo->insert($data);
	}

	public function prueba()
	{
		if ($this->session->has_userdata('usuario'))
		{
			$this->load->view('inc/header');
			$this->load->view('prueba');
		}
	}

	public function logout()
	{
		if ($this->session->has_userdata('usuario'))
		{
			$this->session->unset('usuario');
			redirect('');
		}
		elseif ($this->session->has_userdata('admin')) {
			$this->session->unset('admin');
			redirect('');
		}
	} 
}
