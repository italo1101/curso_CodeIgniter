<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container text-center p-4">
    <a href="<?php echo site_url('geral') ?>" class="btn btn-primary">Voltar</a> 


    <div class="p-3 h1"><?php echo $destinos['nome_destino'] ?></div>

    <p><?php echo $destinos['descricao']?></p>

    <img class="w-75" src="<?php echo base_url('assets/images/') . $destinos['imagem']?>" alt="imagens_destino">

    <p class= "p-3 fw-bold" ><?php echo $destinos['preco'] ?></p>
</div>
