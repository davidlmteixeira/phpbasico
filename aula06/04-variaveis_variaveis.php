<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Variaveis de variaveis</title>
</head>
<body>
    <div>
        <?php
            $x = "abc";
            $$x = "def";
            echo "O conteudo da variavel X e $x";
            echo "<br/>A variavel ABC criada recebeu o valor $abc";
        ?>
    </div>
</body>
</html>