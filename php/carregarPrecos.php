<?php

include('conexao.php');
$db = conectar();
$query = "SELECT * FROM precos_pacotes";
$statement = $db->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$total_row =  $statement->rowCount();

if ($total_row > 0) {
	for ($i=0; $i < sizeof($result); $i++) { 
		echo '<tr><td>'.$result[$i]['pacote'].'</td><td><input type="text" id="camisa-'.$result[$i]['pacote'].'" value="'.$result[$i]['preco_camisa'].'"></td><td><input type="text" id="calcao-'.$result[$i]['pacote'].'" value="'.$result[$i]['preco_calcao'].'"></td><td><input type="text" id="meiao-'.$result[$i]['pacote'].'" value="'.$result[$i]['preco_meiao'].'"></td></tr>';
	}
	
}else{
	echo "Nenhum resultado para a pesquisa";
}
?>