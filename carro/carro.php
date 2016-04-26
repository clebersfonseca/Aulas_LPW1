<html>
<head>
<title>Partes do carro</title>
</head>
<body>
	<nav>
		<ul>
			<li>
				<a href="carro.php?Name=inicio">Início</a>
			</li>
			<li>
				<a href="carro.php?Name=motor">Motor</a>
			</li>
			<li>
				<a href="carro.php?Name=freios">Freios</a>
			</li>
			<li>
				<a href="carro.php?Name=transmissao">Transmissão</a>
			</li>
		</ul>
	</nav>
	<div>
		<?php 
			isset($_GET['Name']) ? include($_GET['Name'].".inc") : include("inicio.inc");
		?>
	</div>
</body>
</html>