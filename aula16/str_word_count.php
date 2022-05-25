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
            $frase = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus voluptates consequuntur commodi earum dicta odit praesentium quo non reprehenderit! Iste mollitia sint ab voluptatum doloribus commodi ducimus expedita accusamus provident!";
            $cont = str_word_count($frase, 0);// 0 - para contar
            print($cont);
            $cont2 = str_word_count($frase,1);// 1 - para criar vetor
            print_r($cont2);
            $cont3 = str_word_count($frase,2);// 2 - para criar vetor matendo posicionamento de cada palavra dentro da string
            print_r($cont3);
        ?>
    </div>
</body>
</html>