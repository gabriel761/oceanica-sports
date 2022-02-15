<?php
include("conexao.php");
$db = conectar();

$linhaReserva = $_POST["linhareserva"];
$pacote = $_POST["pacote"];
$nomeproduto = $_POST["nomeproduto"];
$nomepasta = $_POST["nomepasta"];
$svgfrentecamisa = $_POST["svgfrentecamisa"];
$svgfrentecalcao = $_POST["svgfrentecalcao"];
$svgcostascamisa = $_POST["svgcostascamisa"];
$svgcostascalcao = $_POST["svgcostascalcao"];
$coresdefaultcamisa = $_POST["corescamisa"];
$coresdefaultcalcao = $_POST["corescalcao"];
$clube = $_POST["clube"];
$tipodeestampa = $_POST["tipodeestampa"];
$thumbnailcamisa = $_POST["thumbnailcamisa"];
$thumbnailcalcao = $_POST["thumbnailcalcao"];

$thumbnailcamisa = explode(";", $thumbnailcamisa)[1];
$thumbnailcamisa = explode(",", $thumbnailcamisa)[1];
$thumbnailcamisa = str_replace(" ", "+", $thumbnailcamisa);
$thumbnailcamisa = base64_decode($thumbnailcamisa);

$thumbnailcalcao = explode(";", $thumbnailcalcao)[1];
$thumbnailcalcao = explode(",", $thumbnailcalcao)[1];
$thumbnailcalcao = str_replace(" ", "+", $thumbnailcalcao);
$thumbnailcalcao = base64_decode($thumbnailcalcao);


if (!file_exists("../produtos/".$linhaReserva."/".$pacote."/".$nomepasta)) {
	mkdir("../produtos/".$linhaReserva."/".$pacote."/".$nomepasta);

file_put_contents("../produtos/".$linhaReserva."/".$pacote."/".$nomepasta."/camisa-frente.svg", $svgfrentecamisa);
file_put_contents("../produtos/".$linhaReserva."/".$pacote."/".$nomepasta."/calcao-frente.svg", $svgfrentecalcao);
file_put_contents("../produtos/".$linhaReserva."/".$pacote."/".$nomepasta."/camisa-costas.svg", $svgcostascamisa);
file_put_contents("../produtos/".$linhaReserva."/".$pacote."/".$nomepasta."/calcao-costas.svg", $svgcostascalcao);

$endsvgfrentecamisa = "produtos/".$linhaReserva."/".$pacote."/".$nomepasta."/camisa-frente.svg";
$endsvgfrentecalcao = "produtos/".$linhaReserva."/".$pacote."/".$nomepasta."/calcao-frente.svg";
$endsvgcostascamisa = "produtos/".$linhaReserva."/".$pacote."/".$nomepasta."/camisa-costas.svg";
$endsvgcostascalcao = "produtos/".$linhaReserva."/".$pacote."/".$nomepasta."/calcao-costas.svg";

file_put_contents("../produtos/".$linhaReserva."/".$pacote."/".$nomepasta."/thumbnail-camisa.png", $thumbnailcamisa);
file_put_contents("../produtos/".$linhaReserva."/".$pacote."/".$nomepasta."/thumbnail-calcao.png", $thumbnailcalcao);

$endthumbnailcamisa = "produtos/".$linhaReserva."/".$pacote."/".$nomepasta."/thumbnail-camisa.png";
$endthumbnailcalcao = "produtos/".$linhaReserva."/".$pacote."/".$nomepasta."/thumbnail-calcao.png";

if ($linhaReserva == "linha") {

		$db->query("INSERT INTO modelos_linha
	(id,pacote,nomeproduto,svgfrentecamisa,svgfrentecalcao,svgcostascamisa,svgcostascalcao,coresdefaultcamisa,coresdefaultcalcao,clube,tipodeestampa,thumbnailcamisa,thumbnailcalcao)
	VALUES
	(default,'$pacote','$nomeproduto','$endsvgfrentecamisa','$endsvgfrentecalcao','$endsvgcostascamisa','$endsvgcostascalcao','$coresdefaultcamisa','$coresdefaultcalcao','$clube','$tipodeestampa','$endthumbnailcamisa','$endthumbnailcalcao');");

}else{

		$db->query("INSERT INTO modelos_reserva
	(id,pacote,nomeproduto,svgfrentecamisa,svgfrentecalcao,svgcostascamisa,svgcostascalcao,coresdefaultcamisa,coresdefaultcalcao,clube,tipodeestampa,thumbnailcamisa,thumbnailcalcao)
	VALUES
	(default,'$pacote','$nomeproduto','vazio','$svgfrentecalcao','$svgcostascamisa','$svgcostascalcao','$coresdefaultcamisa','$coresdefaultcalcao','$clube','$tipodeestampa','$thumbnailcamisa','$thumbnailcalcao');");

}

 
echo "arquivo adicionado em: ";
echo "produtos/linha/".$pacote."/".$nomepasta;
}else{
	echo "o arquivo já existe e não pode ser adicionado novamente";
}


?>