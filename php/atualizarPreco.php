<?php
$camisaSupreme = $_GET['camisa-supreme'];
$camisaPrata = $_GET['camisa-prata'];
$camisaOuro = $_GET['camisa-ouro'];
$camisaProfissa20 = $_GET['camisa-profissa20'];
$camisaLibertadores = $_GET['camisa-libertadores'];
$camisaAfrican = $_GET['camisa-african'];
$calcaoSupreme  = $_GET['calcao-supreme'];
$calcaoPrata = $_GET['calcao-prata'];
$calcaoOuro = $_GET['calcao-ouro'];
$calcaoProfissa20 = $_GET['calcao-profissa20'];
$calcaoLibertadores = $_GET['calcao-libertadores'];
$calcaoAfrican = $_GET['calcao-african'];
$meiaoSupreme = $_GET['meiao-supreme'];
$meiaoPrata = $_GET['meiao-prata'];
$meiaoOuro = $_GET['meiao-ouro'];
$meiaoProfissa20 = $_GET['meiao-profissa20'];
$meiaoLibertadores = $_GET['meiao-libertadores'];
$meiaoAfrican = $_GET['meiao-african'];
include("conexao.php");
$db = conectar();






$cmd = $db->prepare("UPDATE precos_pacotes SET preco_camisa = :camisa, preco_calcao = :calcao, preco_meiao = :meiao WHERE pacote = :pacote");
$cmd->bindValue(":camisa",$camisaSupreme);
$cmd->bindValue(":calcao",$calcaoSupreme);
$cmd->bindValue(":meiao",$meiaoSupreme);
$cmd->bindValue(":pacote","supreme");
$cmd->execute();

$cmd = $db->prepare("UPDATE precos_pacotes SET preco_camisa = :camisa, preco_calcao = :calcao, preco_meiao = :meiao WHERE pacote = :pacote");
$cmd->bindValue(":camisa",$camisaPrata);
$cmd->bindValue(":calcao",$calcaoPrata);
$cmd->bindValue(":meiao",$meiaoPrata);
$cmd->bindValue(":pacote","prata");
$cmd->execute();

$cmd = $db->prepare("UPDATE precos_pacotes SET preco_camisa = :camisa, preco_calcao = :calcao, preco_meiao = :meiao WHERE pacote = :pacote");
$cmd->bindValue(":camisa",$camisaOuro);
$cmd->bindValue(":calcao",$calcaoOuro);
$cmd->bindValue(":meiao",$meiaoOuro);
$cmd->bindValue(":pacote","ouro");
$cmd->execute();

$cmd = $db->prepare("UPDATE precos_pacotes SET preco_camisa = :camisa, preco_calcao = :calcao, preco_meiao = :meiao WHERE pacote = :pacote");
$cmd->bindValue(":camisa",$camisaProfissa20);
$cmd->bindValue(":calcao",$calcaoProfissa20);
$cmd->bindValue(":meiao",$meiaoProfissa20);
$cmd->bindValue(":pacote","profissa20");
$cmd->execute();

$cmd = $db->prepare("UPDATE precos_pacotes SET preco_camisa = :camisa, preco_calcao = :calcao, preco_meiao = :meiao WHERE pacote = :pacote");
$cmd->bindValue(":camisa",$camisaLibertadores);
$cmd->bindValue(":calcao",$calcaoLibertadores);
$cmd->bindValue(":meiao",$meiaoLibertadores);
$cmd->bindValue(":pacote","libertadores");
$cmd->execute();

$cmd = $db->prepare("UPDATE precos_pacotes SET preco_camisa = :camisa, preco_calcao = :calcao, preco_meiao = :meiao WHERE pacote = :pacote");
$cmd->bindValue(":camisa",$camisaAfrican);
$cmd->bindValue(":calcao",$calcaoAfrican);
$cmd->bindValue(":meiao",$meiaoAfrican);
$cmd->bindValue(":pacote","african");
$cmd->execute();

echo "preços alterados com sucesso!";

/*
try{
$db->query("UPDATE precos_pacotes
	SET preco_camisa = $camisaPrata, preco_calcao = $calcaoPrata, preco_meiao = $meiaoPrata
	WHERE pacote = prata;");
echo"preços atualizados com suceso!";
}catch(Exception $e){
echo $e->getMessage();
}



try{
	$db->query("UPDATE precos_pacotes
	SET preco_camisa = $camisaOuro, preco_calcao = $calcaoOuro, preco_meiao = $meiaoOuro
	WHERE pacote = ouro;");
echo"preços atualizados com suceso!";
}catch(Exception $e){
	echo $e->getMessage();
}


try{
	$db->query("UPDATE precos_pacotes
	SET preco_camisa = $camisaProfissa, preco_calcao = $calcaoProfissa, preco_meiao = $meiaoProfissa
	WHERE pacote = profissa20;");
echo"preços atualizados com suceso!";
}catch(Exception $e){
	echo $e->getMessage();
}



try{
	$db->query("UPDATE precos_pacotes
	SET preco_camisa = $camisaLibertadores, preco_calcao = $calcaoLibertadores, preco_meiao = $meiaoLibertadores
	WHERE pacote = libertadores;");
echo"preços atualizados com suceso!";
}catch(Exception $e){
	echo $e->getMessage();
}


try{
	$db->query("UPDATE precos_pacotes
	SET preco_camisa = $camisaAfrican, preco_calcao = $calcaoAfrican, preco_meiao = $meiaoAfrican
	WHERE pacote = african;");
	echo"preços atualizados com suceso!";
}catch(Exception $e){
	echo $e->getMessage();
}
?>
*/