
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Tabuadinha</h1>
	</header>
	<div class="container">
    <div class="box resposta">
			<h2>Resultado</h2>
            <?php
            $numero = $_GET['numero'];
            $i = 1;
            while ($i <= 10) {
                $multiplicacao = $numero * $i;
                echo $numero." x ". $i ." = ". $multiplicacao."<br>";
            $i++;
            }

            ?>
			
			<a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>