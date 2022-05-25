<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $a = 3;
        $b = "3";
        $r = ($a == $b) ?"SIM":"NAO";
        $p = ($a === $b) ?"SIM":"NAO";
        echo "As variaveis $a e $b";
        echo "<br/>As variaveis A e B são iguais? $r";
        echo "<br/>As variaveis A e B são identicas? $p"
    ?>
</div>
</body>
</html>
 