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
		if ($this->session->has_userdata('usuario'))
		{
			$not['notify'] = $this->modelo->asd($this->session->userdata('usuario'));

			// if ( empty($not['notify']) )
			// {
			// 	$not['notify'] = false;
			// }

			$this->load->view('inicio', $not);
		}
		else {
			redirect('');
		}
	}

	public function admin()
	{
		if ($this->session->has_userdata('admin'))
		{
			$data['pruebas'] = $this->modelo->get_pruebas();

			$this->load->view('inc/header');
			$this->load->view('admin', $data);
			$this->load->view('inc/footer');
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
		
		$dbdata['user'] = $this->modelo->get_users($data['usuario'], 'usuario')->result();
		$dbdata['ced']  = $this->modelo->get_users($data['cedula'], 'cedula')->result();

		if ( !empty($dbdata) ) // el usuairo existe. esta lleno el array de la bd
		{

			if ( !empty($dbdata['ced']) ) {
				$this->output
						->set_content_type('application/json')
						->set_output(json_encode(['ced' => $dbdata['ced'][0]->cedula]));
			}

			elseif ( !empty($dbdata['user']) ) {
				$this->output
						->set_content_type('application/json')
						->set_output(json_encode(['usu' => $dbdata['user'][0]->usuario]));
			}
			else {
				$this->modelo->insert($data);
				redirect('');
			}
		}
		else {
			$this->modelo->insert($data);
			redirect('');
		}
	}

	public function prueba()
	{
		if ($this->session->has_userdata('usuario'))
		{
			$id['id_estudiante'] = $this->modelo->get_users($this->session->userdata()['usuario'])->result();

			$this->load->view('inc/header');
			$this->load->view('prueba', $id);
			$this->load->view('inc/footer');
		}
		else {
			redirect('');
		}
	}

	public function enviar_test()
	{
		$r5 = implode(', ', $this->input->post('respuesta'));

		$test = [
			'r1' 		 	=> $this->input->post('oseocompacto'),
			'r2'	   		=> $this->input->post('luxacion'),
			'r3'	   		=> $this->input->post('cartilago'),
			'r4' 		    => $this->input->post('sistemaesqueletico'),
			'r5'	 		=> $r5,
			'calificacion'  => '00',
			'revisada' 		=> 0,
			'id_estudiante'	=> $this->input->post('id_estudiante')
		];

		$this->modelo->insertarprueba($test);

		echo "Prueba enviada satisfactoriamente";
	}

	public function calificar()
	{
		$calificacion  = $this->input->post('calificacion');
		$id_estudiante = $this->input->post('idestudiante');

		$this->modelo->nota($id_estudiante, $calificacion);
	}

	public function logout()
	{
		if ($this->session->has_userdata('usuario'))
		{
			$this->session->unset_userdata('usuario');
			redirect('');
		}
		elseif ($this->session->has_userdata('admin')) {
			$this->session->unset_userdata('admin');
			redirect('');
		}
	} 
}