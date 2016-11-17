<?php  
	include_once("./config.php");
	include_once("./funcoes.php");

	$imagem = $_FILES["imagem"]["name"];
	$temp = $_FILES["imagem"]["tmp_name"];

	insertImagem($imagem);
	move_uploaded_file($temp, PASTA_IMAGEM.$imagem);

	header("Location: index.php");
?>