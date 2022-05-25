<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            $nome = "david luis";
            $nome2 = ucfirst($nome);
            // $nome2 = ucfirst(strtolower($nome)); para manter a primeiro caracter maiusculo e o restante minusculo
            echo "Seu nome é $nome2"
        ?>
    </div>
</body>
</html>