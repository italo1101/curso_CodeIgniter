<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Geral extends CI_Controller {

	public function index(){		
		$this->load->view('layout/cabecalho');
		$this->load->view('layout/rodape');
	}

	public function pag02($nome, $idade){
		echo $nome . '-' . $idade;

		$this->load->view('layout/cabecalho');
		$this->load->view('layout/rodape');
	}

	public function pag03($nome){
		echo $nome;

		$this->load->view('layout/cabecalho');
		$this->load->view('layout/rodape');
	} 
}
