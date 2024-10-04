<?php 

  class Geral extends CI_Controller{
    public function index(){
        $this->load->view('formulario');
    }

    public function tratarFormulario(){
        $dados['dados_usuario'] = $this->input->POST();   
        $this->load->view('apresentar_dados', $dados);
        
    }
  }
?>