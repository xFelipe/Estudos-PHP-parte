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
        $cont = 1;
        while(isset($_GET["v$cont"]))
        {
            echo $_GET["v$cont"]."<br>";
            $cont++;
        }
    ?>
    <br><br><a href="aula2.html" class="botao">Voltar</a>
</div>
</body>
</html>
 