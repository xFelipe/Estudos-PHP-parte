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
    	$v = array("A", "J", "M", "X", "K");
		$v[] = "O";
		print_r($v);

		array_push($v,9);//coloca elemento no final
		print_r($v);

		array_pop($v);//remove elemento do final
		print_r($v);

		array_unshift($v, "novo1");//coloca elemento no início
		print_r($v);

		array_shift($v);//remove elemento no início
		print_r($v);
    ?>
    </pre>
</div>
</body>
</html>
 