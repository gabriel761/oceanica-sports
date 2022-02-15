<?php
$id = $_GET['id'];
$nomeProduto = "";
include('conexao.php');
$db = conectar();
$dados_produtos = $db->prepare("SELECT * FROM modelos_linha WHERE id = ".$id);
$dados_produtos->execute();
$total_row =  $dados_produtos->rowCount();
$produto = $dados_produtos->fetch(PDO::FETCH_ASSOC);

if ($total_row > 0) {
	$endereco =  $produto['svgfrentecamisa'];
	$nomeProduto = $produto['nomeproduto'];
	$endereco = "../".str_replace("/camisa-frente.svg", "", $endereco);
	$conteudoPasta = scandir($endereco);
	unset($conteudoPasta[0],$conteudoPasta[1]);

	foreach ($conteudoPasta as $posArquivo => $nomeArquivo) {
		unlink($endereco."/".$nomeArquivo); 
	}
	rmdir($endereco);
	$dados_produtos = $db->prepare("DELETE FROM modelos_linha WHERE id = ".$id);
	$dados_produtos->execute();

	echo $nomeProduto;
}else{
	echo "erro ao tentar buscar o arquivo no banco de dados";
}
?>