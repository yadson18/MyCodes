<?php 	
	include_once("./config.php");

	function abrirDB(){
		mysql_connect(DB_SERVIDOR, DB_USUARIO, DB_SENHA);
		mysql_select_db(DB_BANCO);
	}

	function fecharDB(){
		mysql_close();
	}

	function insertImagem($imagem){
		abrirDB();
		$sql = "insert into imagem(img) values('" . $imagem . "')";
		$retorno = mysql_query($sql);
		fecharDB();

		if($retorno ==! FALSE){
			return TRUE;
		}

		return FALSE;
	}
?>