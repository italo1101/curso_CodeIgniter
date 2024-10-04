<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Geral extends CI_Controller {

	public function index(){
		$this->load->model('destinos');
		$dados['destinos'] = $this->destinos->destinosImagens();
		
		$this->load->view('layout/cabecalho');
		$this->load->view('pagina_inicial', $dados);
		$this->load->view('layout/rodape');
	}

	public function pag_destinos($id){

		$this->load->model('destinos');

		$dados['destinos'] = $this->destinos->destinos($id);

		$this->load->view('layout/cabecalho');
		$this->load->view('pagina_viagem', $dados);
		$this->load->view('layout/rodape');
	}
}
