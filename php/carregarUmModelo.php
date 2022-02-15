<?php
$idModelo = $_GET['id'];
$parteCorpo = $_GET['parteModelo'];
include('conexao.php');
$db = conectar();
$dados_produtos = $db->prepare("SELECT * FROM modelos_linha WHERE id = ".$idModelo);
$dados_produtos->execute();
$total_row =  $dados_produtos->rowCount();
$produto = $dados_produtos->fetch(PDO::FETCH_ASSOC);
$output;
	if ($total_row > 0) {

 			if ($parteCorpo == 'camisa') {
 				
 				
			 		$output[0] =  $produto['svgfrentecamisa'];
			 		$output[1] =  $produto['svgcostascamisa'];
			 		$output[2] =  $produto['coresdefaultcamisa'];
			 		$output[3] =  $produto['nomeproduto'];
			 		$output = json_encode($output);
	 			
 			}else{
 				
 				
			 		$output[0] =  $produto['svgfrentecalcao'];
			 		$output[1] =  $produto['svgcostascalcao'];
			 		$output[2] =  $produto['coresdefaultcalcao'];
			 		$output[3] =  $produto['nomeproduto'];
			 		$output = json_encode($output);
	 			
 			}

 				
 	}else{
 		$output = '<h3 style="text-align: center; padding: 150px 50px 50px 50px;"> Sem Dados...</h3>';
       
 	}
 	echo $output;

?>