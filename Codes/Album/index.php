<!DOCTYPE html>
<?php 
	include_once("./config.php");
	include_once("./funcoes.php");
?>
<html>
<head>
	<title>Imagens</title>
</head>
<body>
	<form action="enviar.php" method="POST" enctype="multipart/form-data" name="formEnviar">
		<input type="file" name="imagem" value="Imagem"><br><br>
		
		<input type="submit" name="send" value="Send">
	</form>
</body>
</html>