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
        $rep = $_GET["v1"];
        $cont = 1;
        echo '<form method="get" action="aula2resultado.php">';
        while($rep>=$cont)
        {
            echo "
                  <br>
                  
                    Valor $cont: <input type='number' name='v$cont'  max='100' min='0' value='0'/><br/>
                  
                 ";
            $cont++;
        }
            echo '<input type="submit" value="Enviar" class="botao"/>';
            echo '</form>';
            
    ?>
    <br><br><a href="aula2.html" class="botao">Voltar</a>
</div>
</body>
</html>
 