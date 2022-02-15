<?php
$pacote = $_GET['pacote'];
$nomeProduto = $_GET['nomeProduto'];
$parteCorpo = $_GET['parteCorpo'];

$nomeProduto = str_replace("_"," ",$nomeProduto); 
include('conexao.php');
$db = conectar();
$query = "SELECT * FROM modelos_linha WHERE nomeproduto = '$nomeProduto' AND pacote = '$pacote'";
	$statement = $db->prepare($query);
 	$statement->execute();
 	$produto = $statement->fetchAll();
 	$total_row =  $statement->rowCount();
 	$produto = $produto[0];
 	$output = [];
	if ($total_row > 0) {
		if ($parteCorpo == 'camisa') {
			$output[0] =  $produto['svgfrentecamisa'];
			$output[1] =  $produto['svgcostascamisa'];
			$output[2] =  json_decode($produto['coresdefaultcamisa']);
		}else{
			$output[0] =  $produto['svgfrentecalcao'];
			$output[1] =  $produto['svgcostascalcao'];
			$output[2] =  json_decode($produto['coresdefaultcalcao']);
		}
 				
			 		
			 		
			 		//$output[6] =  $produto['nomeproduto'];
			 		$output = json_encode($output);
 				
 	}else{
 		//$output = '<h3 style="text-align: center; padding: 150px 50px 50px 50px;"> Sem Dados...</h3>';
 		$output = $pacote;
       
 	}
 	echo $output;

?>