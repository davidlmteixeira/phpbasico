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
            $p = "Leite";
            $pr = 4.65;
            // "O $p custa R$ " . number_format($pr,2);
            printf("O %s custa R$ %.2f", $p, $pr);
            // %d valor decimal(positivo ou negativo)
            // %u valor decimal sem sinal(apenas positivo)            
            // %f valor real
            // %s string
        ?>
    </div>
</body>
</html>