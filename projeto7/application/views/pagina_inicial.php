<?php
    defined('BASEPATH') OR exit ('No direct script access allowed');
?>

    <div class="hero-section">
        <h3 class="text-center">Escolha seu destino</h3>

        <div class="row">

            <div class="col-sm-6 col-12 text-center p-2">
                <a href="<?php echo site_url('geral/pag_destinos/0') ?>">
                    <img class="w-75" src="<?php echo base_url('assets/images/') . $destinos[0] ?>" alt="">
                </a>
            </div>

            <div class="col-sm-6 col-12 text-center p-2">
                <a href="<?php echo site_url('geral/pag_destinos/1') ?>">
                    <img class="w-75" src="<?php echo base_url('assets/images/') . $destinos[1] ?>" alt="">
                </a>
            </div>

            <div class="col-sm-6 col-12 text-center p-2">
                <a href="<?php echo site_url('geral/pag_destinos/2') ?>">
                    <img class="w-75" src="<?php echo base_url('assets/images/') . $destinos[2] ?>" alt="">
                </a>
            </div>

            <div class="col-sm-6 col-12 text-center p-2">
                <a href="<?php echo site_url('geral/pag_destinos/3') ?>">
                    <img class="w-75" src="<?php echo base_url('assets/images/') . $destinos[3] ?>" alt="">
                </a>
            </div>
        </div>
    </div>