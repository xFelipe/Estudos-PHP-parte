<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
	<pre>
    <?php
    	$v = array("A","J","M","B","1","b","a","c");
    	print_r($v);

		sort($v); //coloca em ordem
		print_r($v);

		rsort($v); //coloca em ordem reversa
		print_r($v);
		/*
		asort($v); //organiza os valores, mas mantém os indices(espaço no vetor) iguais
		print_r($v);

		asort($v); //organiza os valores reversamente, mas mantém os indices iguais(espaço no vetor)
		print_r($v);

		arsort($v); //organiza os valores reversamente, mas mantém os indices iguais(espaço no vetor)
		print_r($v);

		ksort($v); //organiza os indices(keys) em ordem(a associação dos valores continua associados iguais).
		print_r($v);

		krsort($v); //organiza os indices(keys) em ordem(a associação dos valores continua associados iguais) DECRESCENTE.
		print_r($v);
		*/
		$teste[0]= 0;
		$teste[2]= 2;
		$teste[3]= 3;
		$teste[]= 1;
		print_r($teste);


    ?>
    </pre>
</div>
</body>
</html>
 