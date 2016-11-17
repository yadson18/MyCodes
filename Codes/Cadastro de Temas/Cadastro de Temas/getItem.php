<?php 
	require_once 'conexao.php'; 
	$conexao = new Conexao(DB_SERVER, DB_NAME, DB_USERNAME, DB_PASSWORD); 
	$id = $_POST['acc'];
	$select = $conexao->executar("SELECT * FROM tw_item WHERE it_tm_codigo= $id"); 
		if($select){ 
			foreach ($select as $pessoa){	
				echo "<td>".$pessoa['it_nome']."</td>";
				echo "<td>".$pessoa['it_id']."</td>";
				echo "<td>".$pessoa['it_audio']."</td>";
				echo "<td>".$pessoa['it_imagem']."</td>";
				echo "<td>".$pessoa['it_tm_codigo']."</td></tr>";
			} 
		} 
?>