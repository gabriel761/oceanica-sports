<?php
$pacote = $_GET['pacote'];

include('conexao.php');
$db = conectar();
$dados_produtos = $db->prepare("SELECT * FROM precos_pacotes WHERE pacote = '$pacote'");
$dados_produtos->execute();
$total_row =  $dados_produtos->rowCount();
$produto = $dados_produtos->fetch(PDO::FETCH_ASSOC);
$output;
	if ($total_row > 0) {

 			
	 			
 			$output = json_encode($produto);

 				
 	}else{
 		$output = '<h3 style="text-align: center; padding: 150px 50px 50px 50px;"> Sem Dados...</h3>';
       
 	}
 	echo $output;

?>