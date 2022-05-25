<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title>Incremento</title>
</head>
<body>
    <div>
        <?php
            $atual = $_GET["aa"];// essa linha pega o ano na URL
            echo "O ano atual e $atual e o ano anterior e " . --$atual;
            echo "</br>O ano atual e $atual e o ano e " . ++$atual;
        ?>
    </div>
</body>
</html>