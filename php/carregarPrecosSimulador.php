<?php
include('conexao.php');
$db = conectar();
$query = "SELECT * FROM precos_pacotes";
$statement = $db->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$total_row =  $statement->rowCount();
$output;

if ($total_row > 0) {
	
	$output = json_encode($result);
	echo $output;
	
}else{
	echo "Nenhum resultado para a pesquisa";
}
?>