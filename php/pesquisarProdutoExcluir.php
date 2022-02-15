<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
<?php
$nomeproduto = '%'.$_GET['nome'].'%';
$pacote = '%'.$_GET['pacote'].'%';


include('conexao.php');
$db = conectar();
$query = "SELECT * FROM modelos_linha WHERE pacote like '$pacote' AND nomeproduto like '$nomeproduto' order by nomeproduto";
$statement = $db->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$total_row =  $statement->rowCount();

if ($total_row > 0) {
	for ($i=0; $i < sizeof($result); $i++) { 
		echo '<tr><td>'.$result[$i]['nomeproduto'].'</td><td>'.$result[$i]['pacote'].'</td><td><button onclick="confirmarExcluirProduto(this,'.$result[$i]['id'].')">excluir</button></td></tr>';
	}
	
}else{
	echo "Nenhum resultado para a pesquisa";
}
?>
</body>
</html>
