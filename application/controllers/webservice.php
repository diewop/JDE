<?php
	if(! defined('BASEPATH') exit("No"));

class Codigo extends CI_Controller{
	function __construct(){
		parent::__construct();

	}

	//Obtener un usuario
	function user_get(){

	}

	//Obtener listado de usuarios
	function users_get(){


	}

	//Obtener Catalogo de servicios
	function services_get(){
		$services = $this->db->query('SELECT * FROM SERVICIOS;');
		

	}



	function index(){
		this->load->view('welcome');

	}


}