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
            $x[0] = 4; //[] - indice
            $x[1] = 3;
            $x[2] = 8; 
            print_r($x);
            $x2 = array (3,7,6);
            print_r($x2);
            $x3 = array (5.6,6);
            var_dump($x3);
            $x4 = array (9,6,5);
            var_export($x4);
        ?>
    </div>
</body>
</html>