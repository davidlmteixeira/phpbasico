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
            $nome = "Guanabara";
            $novo = str_pad($nome,30,"#",STR_PAD_RIGHT);
            print("Meu professor $novo é bom");
            
        ?>
    </div>
</body>
</html>