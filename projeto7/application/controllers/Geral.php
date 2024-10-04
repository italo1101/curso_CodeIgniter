<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Geral extends CI_Controller {

	public function index(){
		
		$destinos = [
			'miami.jpg',
			'orlando.jpg',
			'rio.jpg',
			'turquia.jpg'
		];

		$dados['destinos'] = $destinos;
		
		$this->load->view('layout/cabecalho');
		$this->load->view('pagina_inicial', $dados);
		$this->load->view('layout/rodape');
	}

	public function pag_destinos($id){
		$destinos = [
			[
				'nome_destino' => 'Miami',
				'descricao' => 'Viagem ida e volta, hotel 4 estrelas e transfer',
				'imagem' => 'miami.jpg',
				'preco' => '5.435,00'
			],

			[
				'nome_destino' => 'Orlando',
				'descricao' => 'Viagem ida e volta, hotel 4 estrelas e transfer',
				'imagem' => 'orlando.jpg',
				'preco' => '7.596,00'
			],

			[
				'nome_destino' => 'rio',
				'descricao' => 'Viagem ida e volta, hotel 4 estrelas e transfer',
				'imagem' => 'rio.jpg',
				'preco' => '1.632,00'
			],

			[
				'nome_destino' => 'turquia',
				'descricao' => 'Viagem ida e volta, hotel 4 estrelas e transfer',
				'imagem' => 'turquia.jpg',
				'preco' => '11.000,47'
			]
		];

		$dados['destinos'] = $destinos[$id];

		$this->load->view('layout/cabecalho');
		$this->load->view('pagina_viagem', $dados);
		$this->load->view('layout/rodape');
	}
}
