<html>
	<head>
		<title>Sistema</title>
		<meta charset="UTF-8">
		<style>
			h1{
				text-align: center;
			}
		</style>
	</head>
	<body>
		<?php include_once 'menu.php';?>
		<!-- Início do bloco de conteúdo -->
		<?php 
			if (isset($_GET['pagina']) && file_exists("{$_GET['pagina']}.php")){
				include_once "{$_GET['pagina']}.php";
			}else{
				echo '<p>Página não encontrada</p>';
			}
		?>
		<!-- Fim do bloco de conteúdo -->
	</body>
</html>