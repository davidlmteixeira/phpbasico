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
            $c = 10; //começa a contagem
            while ($c >=0) { //ate aonde termina a contagem
                echo $c . "<br>"; // passa na tela
                $c -= 2; //e a formula da contagem
            }
        ?>
    </div>
</body>
</html>