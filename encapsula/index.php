<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Encapsulamento</title>
    </head>
    <body>
            <h1>Projeto Controle Remoto</h1>
        <pre>
        <?php
            require_once 'controleRemoto.php';
            $c = new ControleRemoto();
            //chamando os metodos
            $c -> ligar();
            $c -> abrirMenu();
            $c -> maisVolume();
        ?>
        </pre>
    </body>
</html>