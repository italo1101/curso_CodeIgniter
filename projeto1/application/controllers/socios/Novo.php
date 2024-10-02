<?php
    Defined('BASEPATH') OR exit('No direct script access allowed');

    class Novo extends CI_Controller{

        public function index(){
            $this->load->view('template/cabecalho');
            $this->load->view('template/rodape');
        }

        public function outraFuncao(){
            $this->load->view('pagina2');
        }
    }
?>