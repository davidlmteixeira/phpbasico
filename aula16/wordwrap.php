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
            $t = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit maxime odio velit voluptatibus, accusamus eveniet quos enim ut tempora nulla maiores veniam dolorem minima dolores saepe voluptates atque dolor pariatur.";
            $r = wordwrap($t,5, "<br>\n", false);
            echo $r;
        ?>
    </div>
</body>
</html>