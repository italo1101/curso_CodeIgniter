<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <form action="<?php echo site_url('geral/tratarformulario') ?>" method="POST">
        <span>Nome: </span>

        <input 
            type="text" 
            name="text_nome"
        >

        <span>Senha: </span>

        <input 
            type="password" 
            name="password"
        >

            <input 
                type="submit"
                value="Enviar"
            >
    </form>
</body>
</html>