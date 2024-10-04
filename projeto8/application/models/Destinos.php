<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Destinos extends CI_Model{
        private $dados_destinos;

        // Construtor
        function __construct(){
            parent:: __construct();

            $this->dados_destinos = [
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
        }

        public function imagesHoteis(){
            $images = [];
                foreach($this -> dados_destinos as $destino){
                    array_push($imagens, $destino['imagem']);
                }

                return $imagens;
        }

        public function destinos($id){
            return $this->dados_destinos[$id];
        }
    }
?>