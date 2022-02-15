<?php
$parteCorpo = $_GET['parteCorpo'];
$pacote = $_GET['pacote'];
$clube = $_GET['clube'];
$tipoEstampa = $_GET['tipoEstampa'];
$tipoEstampaRequest = json_decode($tipoEstampa);
$clubeRequest = json_decode($clube);
$output = '';
$valorEstampa = "";
$valorClube = "";
$count = 0;
include('conexao.php');
$db = conectar();
$outputArray = [];


if ($tipoEstampa != "ALL" && $clube != "ALL") {
	for ($i=0; $i < count($clubeRequest); $i++) {
			for ($j=0; $j < count($tipoEstampaRequest); $j++) { 
			$valorClube = "%".$clubeRequest[$i]."%";
			$valorEstampa =  "%".$tipoEstampaRequest[$j]."%";
		 	$query = "SELECT * FROM modelos_linha WHERE pacote = '$pacote' AND tipodeestampa like '$valorEstampa'  AND clube like '$valorClube'order by nomeproduto";
		 	$statement = $db->prepare($query);
		 	$statement->execute();
		 	$result = $statement->fetchAll();
		 	$total_row =  $statement->rowCount();
		 	
		 		for ($y=0; $y < sizeof($result); $y++) { 
 					array_push($outputArray,'<div onclick="requestSVGNovoCamisa('.$result[$y]['id'].')" class="modelo-camisa">
									<div class="imagem-modelo">
										<img src="'.$result[$y]['thumbnailcamisa'].'">
									</div>
									<p>'.$result[$y]['nomeproduto'].'</p>
								</div>');			
			 				}	 		
					 	 
				}

		
		 	}
		 	
				
		 	
			addElementsArray($output, $outputArray);
	
	
}else{
	if ($tipoEstampa != "ALL" && $clube == "ALL") {
		for ($i=0; $i <count($tipoEstampaRequest); $i++) { 
			$valorEstampa = "%".$tipoEstampaRequest[$i]."%";
			$query = "SELECT * FROM modelos_linha WHERE pacote = '$pacote' AND tipodeestampa like '$valorEstampa'order by nomeproduto";
			$statement = $db->prepare($query);
		 	$statement->execute();
		 	$result = $statement->fetchAll();
		 	$total_row =  $statement->rowCount();
		 	$count++;
		 	
		 		for ($j=0; $j < sizeof($result); $j++) { 
 					array_push($outputArray,'<div onclick="requestSVGNovoCamisa('.$result[$j]['id'].')" class="modelo-camisa">
									<div class="imagem-modelo">
										<img src="'.$result[$j]['thumbnailcamisa'].'">
									</div>
									<p>'.$result[$j]['nomeproduto'].'</p>
								</div>');

			 				}		 	
					 
					 	
		}
		
		addElementsArray($output, $outputArray);
	}else{
		if ($tipoEstampa == "ALL" && $clube != "ALL") {
			for ($i=0; $i < count($clubeRequest); $i++) { 
			$valorClube = "%".$clubeRequest[$i]."%";
			$query = "SELECT * FROM modelos_linha WHERE pacote = '$pacote' AND clube like '$valorClube'order by nomeproduto";
			$statement = $db->prepare($query);
		 	$statement->execute();
		 	$result = $statement->fetchAll();
		 	$total_row =  $statement->rowCount();
		 	
		 		for ($j=0; $j < sizeof($result); $j++) { 
 					array_push($outputArray,'<div onclick="requestSVGNovoCamisa('.$result[$j]['id'].')" class="modelo-camisa">
									<div class="imagem-modelo">
										<img src="'.$result[$j]['thumbnailcamisa'].'">
									</div>
									<p>'.$result[$j]['nomeproduto'].'</p>
								</div>');			
			 				}		 	
										 
				}
				
			addElementsArray($output, $outputArray);
		}else{
			$query = "SELECT * FROM modelos_linha WHERE pacote = '$pacote'order by nomeproduto";
			$statement = $db->prepare($query);
		 	$statement->execute();
		 	$result = $statement->fetchAll();
		 	$total_row =  $statement->rowCount();
		 	for ($j=0; $j < sizeof($result); $j++) { 
 					array_push($outputArray,'<div onclick="requestSVGNovoCamisa('.$result[$j]['id'].')" class="modelo-camisa">
									<div class="imagem-modelo">
										<img src="'.$result[$j]['thumbnailcamisa'].'">
									</div>
									<p>'.$result[$j]['nomeproduto'].'</p>
								</div>');			
			 				}
			 				addElementsArray($output, $outputArray);

		}

	}
	
}


/*

 	$statement = $db->prepare($query);
 	$statement->execute();
 	$result = $statement->fetchAll();
 	$total_row =  $statement->rowCount();
 	$output = '';
 	
 	if($total_row > 0){
 			
 			if ($parteCorpo == 'camisa') {
 				for ($i=0; $i < sizeof($result); $i++) { 
 					$output .= '<div onclick="requestSVGNovoCamisa('.$result[$i]['id'].')" class="">
									<div class="imagem-modelo">
										<img src="'.$result[$i]['thumbnailcamisa'].'">
									</div>
									<p>'.$result[$i]['nomeproduto'].'</p>
								</div>';

				
 				}
 				
			 		

	 			
 			}else{
 				foreach ($result as $pos) {
 				
			 		$output .= '<div onclick="requestSVGNovoCalcao('.$pos['id'].')" class="">
									<div class="imagem-modelo">
										<img src="'.$pos['thumbnailcalcao'].'">
									</div>
									<p>'.$pos['nomeproduto'].'</p>
								</div>';
	 			}
 			}

 				
 	}else{
 		$output = '<h3 style="text-align: center; padding: 50px 50px 50px 50px;"> Sem Dados...</h3>';
       
 	}
 	*/
 
 	
function addElementsArray($output, $outputArray){
	for ($a=0; $a < count($outputArray); $a++) { 
		for ($b=$a; $b < count($outputArray); $b++) { 
			if ($outputArray[$a] == $outputArray[$b] && $a != $b) {
				$outputArray[$b] = "";
			}
		}
	}
	for ($c=0; $c <count($outputArray); $c++) { 
		$output .= $outputArray[$c];
	}
	 if ($output == "") {
		$output = '<h3 style="text-align: center; padding: 50px 50px 50px 50px;"> Sem Dados...</h3>';
	}
	echo $output;
}
 	


?>