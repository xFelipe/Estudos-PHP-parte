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
       $v = $_GET["valor"];
       $cont = 0;
       if ($v>= 1 && $v <=10) {
           for ($cont=0; $cont<=10; $cont++) { 
             echo "$v * $cont = ".($v*$cont)."<br>";
           }
           
       }
       else
        echo "Valor inválido";
    ?>
    <br><br><a href="tabuada.html" class="botao">Voltar</a>
</div>
</body>
</html>
 