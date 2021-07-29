<DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset=""UTF-8"/>
        <title>BANCO LUZ</title>
        <link href="banco.css" rel="stylesheet">

    </head>
    <body>
        <h1>BANCO LUZ</h1>
        <h2>O SEU BANCO</h2>
            <pre>
            <?php
                require_once 'contabanco.php';

                $c1 = new contabanco(); //Joao
                $c2 = new contabanco(); //Maria
                $c1-> abrirConta("cc"); //abrindo a primeira conta corrente do cliente.
                $c1-> setDono("Joao"); // nome do dono da primeira conta.
                $c1-> setNunConta(1111); //numero da conta.
                $c2-> abrirConta("cp"); //abrindo a segunda conta, conta poupança.
                $c2-> setDono("Maria"); //nome do dono da segunda conta.
                $c2-> setNunConta(2222);

                $c1-> depositar(500);  //chamando os metodos.
                $c2-> depositar(400);
                $c2-> sacar(480);
                $c1-> sacar(338);
                $c2-> pagarMensal();
                $c1-> pagarMensal();
                $c1-> fecharConta();
                $c2-> fecharConta();

                print_r($c1);
                print_r($c2);

            ?>
            </pre>



    </body>

</html>