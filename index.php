<?php
include("php/conexao.php");
$db = conectar();

$dados_produtos = $db->prepare("SELECT * FROM modelos_linha WHERE id = 9");
$dados_produtos->execute();
$produto = $dados_produtos->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Simulador</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">


	<link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/simulador.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/2f5619bee5.js" crossorigin="anonymous" SameSite=None secure></script>
</head>
<body>
	<canvas style="visibility:hidden;position:absolute;" id="canvas" width="494" height="729"></canvas>

	<header>
		<nav></nav>
	</header>
	<div id="image-upload">

	</div>

			<section id="areaSimulador" class="area-simulador">
			<div style="display: none;color: #ffffff;">
				<ul>
					<?php
						foreach ($produto as $key => $value) {
						 	echo '<li id="'.$key.'">'.$value.'</li>';
						 }
					 ?>
				</ul>
			</div>
			<div class="container-simulador">

						<div id="botoes-simulador" class="botoes-simulador">

								<div class="botao-simulador" onclick="abrirMenu(this)">
									<div id="menu-geral-pacotes" class="menu-geral menu-geral-pacotes">
										<h2 class="titulos-menu">Pacotes Disponíves</h2>
										<div class="imagem-seta-pacote" id="imagem-seta-pacote">
											<img src="images\simulador\pacotes\seta-pacote.png" alt="">
										</div>
										<div class="lista-pacotes" id="lista-pacotes">

											<div class="box-pacote" onclick="escolherPacote('prata')">
												<h2 class="nome-pacote"><i>Pacote Prata</i></h2>
												<div class="image-box">
													<img src="images/simulador/pacotes/prata.png" alt="">
												</div>
												<div class="retangulo-fundo">
													<img src="images/simulador/pacotes/retangulo-fundo.png" alt="">
												</div>
												<div class="caixa-preco-total">
													<p><b>valor do conjunto</b></p>
													<p>(camisa e calção)</p>
													<h2 id="preco-conjunto-prata"></h2>
													<div class="imagem-lado-preco">
														<img src="images/simulador/pacotes/imagem-lado-preco.png" alt="">
													</div>
												</div>
												<div class="text-box">
													<div class="titulo-especificacoes">
														<div class="imagem-especificacoes">
															<img src="images/simulador/pacotes/imagem-lado-especificacoes.png" alt="">
														</div>
														<h3>Especificacoes:</h3>
													</div>
													<div class="parte-modelo-pacote">
														<h4>Camisa</h4>
														<div class="pontilhado">

														</div>
														<h4 id="preco-camisa-prata"></h4>
													</div>
													<ul class="caracteristica-pacotes">
														<li>Tecido Dry Fresh</li>
														<li>Gola Lyon</li>
														<li><b>Punho Anatômico</b></li>
														<li>Modelagem Modern Concept</li>
														<li>Selo de Produto Oficial Oceânica</li>
														<li>Design em Sublimação Digital</li>
														<li>Escudo Sublimado</li>
														<li>Número e Nome do Jogador</li>
														<li>Patrocínios Sublimados Ilimitados (logos vetorizadas)</li>
														<li>Cores Tecnologia Colorfull Power</li>
													</ul>
													<div class="parte-modelo-pacote">
														<h4>Calção</h4>
														<div class="pontilhado">

														</div>
														<h4 id="preco-calcao-prata"></h4>
													</div>
													<ul  class="caracteristica-pacotes">
														<li>Tecido Dry Strong</li>
														<li>Cadarço Colorido</li>
														<li>Modelagem Modern Concept</li>
														<li>Design em Sublimação Digital</li>
														<li>Escudo Sublimado</li>
														<li>Número do Jogador</li>
														<li>Patrocínios Sublimados Ilimitados (logos vetorizadas)</li>
														<li>Cores Tecnologia Colorfull Power</li>
													</ul>
													<div class="texto-meiao-pacote">
														<p>Sugestão:</p>
														<div class="parte-modelo-pacote margin-top-zero">
															<h4>Meião Treino</h4>
															<div class="pontilhado pontilhado-meiao">

															</div>
															<h4 id="preco-meiao-prata"></h4>
														</div>
													</div>
												</div>
											</div>
											<div class="box-pacote" onclick="escolherPacote('ouro')">
												<h2 class="nome-pacote"><i>Pacote Ouro</i></h2>
												<div class="image-box">
													<img src="images/simulador/pacotes/ouro.png" alt="">
												</div>
												<div class="retangulo-fundo">
													<img src="images/simulador/pacotes/retangulo-fundo.png" alt="">
												</div>
												<div class="caixa-preco-total">
													<p><b>valor do conjunto</b></p>
													<p>(camisa e calção)</p>
													<h2 id="preco-conjunto-ouro"></h2>
													<div class="imagem-lado-preco">
														<img src="images/simulador/pacotes/imagem-lado-preco.png" alt="">
													</div>
												</div>
												<div class="text-box">
													<div class="titulo-especificacoes">
														<div class="imagem-especificacoes">
															<img src="images/simulador/pacotes/imagem-lado-especificacoes.png" alt="">
														</div>
														<h3>Especificacoes:</h3>
													</div>
													<div class="parte-modelo-pacote">
														<h4>Camisa</h4>
														<div class="pontilhado">

														</div>
														<h4 id="preco-camisa-ouro"></h4>
													</div>
													<ul class="caracteristica-pacotes">
														<li>Tecido Dry Fresh</li>
														<li><b>Lateral Dry Cooler</b></li>
														<li>Gola Olympic Prime</li>
														<li><b>Punho Anatômico</b></li>
														<li>Modelagem Modern Concept</li>
														<li>Selo de Produto Oficial Oceânica</li>
														<li>Design em Sublimação Digital</li>
														<li><b>Escudo Bordado Digital</b></li>
														<li>Número e Nome do Jogador</li>
														<li>Patrocínios Sublimados Ilimitados (logos vetorizadas)</li>
														<li>Cores Tecnologia Colorfull Power</li>
													</ul>
													<div class="parte-modelo-pacote">
														<h4>Calção</h4>
														<div class="pontilhado">

														</div>
														<h4 id="preco-calcao-ouro"></h4>
													</div>
													<ul  class="caracteristica-pacotes">
														<li>Tecido Dry Strong</li>
														<li><b>Lateral Dry Cooler</b></li>
														<li>Cadarço Colorido</li>
														<li>Modelagem Modern Concept</li>
														<li>Design em Sublimação Digital</li>
														<li><b>Escudo Bordado Digital</b></li>
														<li>Número do Jogador</li>
														<li>Patrocínios Sublimados Ilimitados (logos vetorizadas)</li>
														<li>Cores Tecnologia Colorfull Power</li>
													</ul>
													<div class="texto-meiao-pacote">
														<p>Sugestão:</p>
														<div class="parte-modelo-pacote margin-top-zero">
															<h4>Meião Jogo</h4>
															<div class="pontilhado pontilhado-meiao">

															</div>
															<h4 id="preco-meiao-ouro"></h4>
														</div>
													</div>
												</div>
											</div>
										<div class="box-pacote" onclick="escolherPacote('profissa20')">
											<h2 class="nome-pacote"><i>Pacote Profissa</i></h2>
											<div class="image-box">
												<img src="images/simulador/pacotes/profissa20.png" alt="">
											</div>
											<div class="retangulo-fundo">
												<img src="images/simulador/pacotes/retangulo-fundo.png" alt="">
											</div>
											<div class="caixa-preco-total">
												<p><b>valor do conjunto</b></p>
												<p>(camisa e calção)</p>
												<h2 id="preco-conjunto-profissa20"></h2>
												<div class="imagem-lado-preco">
													<img src="images/simulador/pacotes/imagem-lado-preco.png" alt="">
												</div>
											</div>
											<div class="text-box">
												<div class="titulo-especificacoes">
													<div class="imagem-especificacoes">
														<img src="images/simulador/pacotes/imagem-lado-especificacoes.png" alt="">
													</div>
													<h3>Especificacoes:</h3>
												</div>
												<div class="parte-modelo-pacote">
													<h4>Camisa</h4>
													<div class="pontilhado">

													</div>
													<h4 id="preco-camisa-profissa20"></h4>
												</div>
												<ul class="caracteristica-pacotes">
													<li>Tecido Dry Fresh</li>
													<li><b>Lateral Dry Cooler Ventilada</b></li>
													<li>Gola Olympic Prime</li>
													<li><b>Punho Anatômico</b></li>
													<li>Modelagem Modern Concept</li>
													<li>Selo de Produto Oficial Oceânica</li>
													<li>Design em Sublimação Digital</li>
													<li><b>Escudo Bordado Digital</b></li>
													<li>Número e Nome do Jogador</li>
													<li>Patrocínios Sublimados Ilimitados (logos vetorizadas)</li>
													<li>Cores Tecnologia Colorfull Power</li>
												</ul>
												<div class="parte-modelo-pacote">
													<h4>Calção</h4>
													<div class="pontilhado">

													</div>
													<h4 id="preco-calcao-profissa20"></h4>
												</div>
												<ul  class="caracteristica-pacotes">
													<li>Tecido Dry Strong</li>
													<li><b>Lateral Dry Cooler</b></li>
													<li>Cadarço Colorido</li>
													<li>Modelagem Modern Concept</li>
													<li>Design em Sublimação Digital</li>
													<li><b>Escudo Bordado Digital</b></li>
													<li>Número do Jogador</li>
													<li>Patrocínios Sublimados Ilimitados (logos vetorizadas)</li>
													<li>Cores Tecnologia Colorfull Power</li>
												</ul>
												<div class="texto-meiao-pacote">
													<p>Sugestão:</p>
													<div class="parte-modelo-pacote margin-top-zero">
														<h4>Meião Jogo</h4>
														<div class="pontilhado pontilhado-meiao">

														</div>
														<h4 id="preco-meiao-profissa20"></h4>
													</div>
												</div>
											</div>
										</div>
										<div class="box-pacote" onclick="escolherPacote('libertadores')">
											<h2 class="nome-pacote"><i>Pacote Libertadores</i></h2>
											<div class="image-box">
												<img src="images/simulador/pacotes/libertadores.png" alt="">
											</div>

											<div class="retangulo-fundo">
												<img src="images/simulador/pacotes/retangulo-fundo.png" alt="">
											</div>
											<div class="caixa-preco-total">
												<p><b>valor do conjunto</b></p>
												<p>(camisa e calção)</p>
												<h2 id="preco-conjunto-libertadores"></h2>
												<div class="imagem-lado-preco">
													<img src="images/simulador/pacotes/imagem-lado-preco.png" alt="">
												</div>
											</div>
											<div class="text-box">
												<div class="titulo-especificacoes">
													<div class="imagem-especificacoes">
														<img src="images/simulador/pacotes/imagem-lado-especificacoes.png" alt="">
													</div>
													<h3>Especificacoes:</h3>
												</div>
												<div class="parte-modelo-pacote">
													<h4>Camisa</h4>
													<div class="pontilhado">

													</div>
													<h4 id="preco-camisa-libertadores"></h4>
												</div>
												<ul class="caracteristica-pacotes">
													<li><b>Tecido Dry Strong</b></li>
													<li><b>Lateral Dry Cooler Ventilada</b></li>
													<li>Gola Hooligans</li>
													<li><b>Punho Anatômico</b></li>
													<li>Modelagem Modern Concept</li>
													<li>Selo de Produto Oficial Oceânica</li>
													<li>Design em Sublimação Digital</li>
													<li>Escudo Bordado Digital</li>
													<li>Número e Nome do Jogador</li>
													<li>Patrocínios Sublimados Ilimitados (logos vetorizadas)</li>
													<li>Cores Tecnologia Colorfull Power</li>
												</ul>
												<div class="parte-modelo-pacote">
													<h4>Calção</h4>
													<div class="pontilhado">

													</div>
													<h4 id="preco-calcao-libertadores"></h4>
												</div>
												<ul  class="caracteristica-pacotes">
													<li>Tecido Dry Strong</li>
													<li><b>Lateral Dry Cooler</b></li>
													<li>Cadarço Colorido</li>
													<li>Modelagem Modern Concept</li>
													<li>Design em Sublimação Digital</li>
													<li><b>Escudo Bordado Digital</b></li>
													<li>Número do Jogador</li>
													<li>Patrocínios Sublimados Ilimitados (logos vetorizadas)</li>
													<li>Cores Tecnologia Colorfull Power</li>
												</ul>
												<div class="texto-meiao-pacote">
													<p>Sugestão:</p>
													<div class="parte-modelo-pacote margin-top-zero">
														<h4>Meião Jogo</h4>
														<div class="pontilhado pontilhado-meiao">

														</div>
														<h4 id="preco-meiao-libertadores"></h4>
													</div>
												</div>
											</div>
										</div>
										<div class="box-pacote" onclick="escolherPacote('african')">
											<h2 class="nome-pacote"><i>Pacote African</i></h2>
											<div class="image-box">
												<img src="images/simulador/pacotes/african.png" alt="">
											</div>
											<div class="retangulo-fundo">
												<img src="images/simulador/pacotes/retangulo-fundo.png" alt="">
											</div>
											<div class="caixa-preco-total">
												<p><b>valor do conjunto</b></p>
												<p>(camisa e calção)</p>
												<h2 id="preco-conjunto-african"></h2>
												<div class="imagem-lado-preco">
													<img src="images/simulador/pacotes/imagem-lado-preco.png" alt="">
												</div>
											</div>
											<div class="text-box">
												<div class="titulo-especificacoes">
													<div class="imagem-especificacoes">
															<img src="images/simulador/pacotes/imagem-lado-especificacoes.png" alt="">
													</div>
													<h3>Especificacoes:</h3>
												</div>
												<div class="parte-modelo-pacote">
													<h4>Camisa</h4>
													<div class="pontilhado">

													</div>
													<h4 id="preco-camisa-african"></h4>
												</div>
												<ul class="caracteristica-pacotes">
													<li>- <b>Tecido Dry Cool</b></li>
													<li>- <b>Costas Dry Cooler Ventilada</b></li>
													<li>- Gola TPC</li>
													<li>- <b>Punho Anatômico</b></li>
													<li>- Modelagem Modern Concept</li>
													<li>- Selo de Produto Oficial Oceânica</li>
													<li>- Design em Sublimação Digital</li>
													<li>- <b>Escudo Bordado Digital</b></li>
													<li>- Número e Nome do Jogador</li>
													<li>- Patrocínios Sublimados Ilimitados (logos vetorizadas)</li>
													<li>- Cores Tecnologia Colorfull Power</li>
												</ul>
												<div class="parte-modelo-pacote">
													<h4>Calção</h4>
													<div class="pontilhado">

													</div>
													<h4 id="preco-calcao-african"></h4>
												</div>
												<ul  class="caracteristica-pacotes">
													<li>- Tecido Dry Strong</li>
													<li>- <b>Lateral Dry Cooler</b></li>
													<li>- Cadarço Colorido</li>
													<li>- Modelagem Modern Concept</li>
													<li>- Design em Sublimação Digital</li>
													<li>- <b>Escudo Bordado Digital</b></li>
													<li>- Número do Jogador</li>
													<li>- Patrocínios Sublimados Ilimitados (logos vetorizadas)</li>
													<li>- Cores Tecnologia Colorfull Power</li>
												</ul>
												<div class="texto-meiao-pacote">
													<p>Sugestão:</p>
													<div class="parte-modelo-pacote margin-top-zero">
														<h4>Meião Jogo</h4>
														<div class="pontilhado pontilhado-meiao">

														</div>
														<h4 id="preco-meiao-african"></h4>
													</div>
												</div>
											</div>
										</div>
										<div class="box-pacote" onclick="escolherPacote('supreme')">
											<h2 class="nome-pacote"><i>Pacote Supreme</i></h2>
											<div class="image-box">
												<img src="images/simulador/pacotes/supreme.png" alt="">
											</div>
											<div class="retangulo-fundo">
												<img src="images/simulador/pacotes/retangulo-fundo.png" alt="">
											</div>
											<div class="caixa-preco-total">
												<p><b>valor do conjunto</b></p>
												<p>(camisa e calção)</p>
												<h2 id="preco-conjunto-supreme"></h2>
												<div class="imagem-lado-preco">
													<img src="images/simulador/pacotes/imagem-lado-preco.png" alt="">
												</div>
												<div class="imagem-lado-preco">
													<img src="images/simulador/pacotes/imagem-lado-preco.png" alt="">
												</div>
											</div>
											<div class="text-box">
												<div class="titulo-especificacoes">
													<div class="imagem-especificacoes">
														<img src="images/simulador/pacotes/imagem-lado-especificacoes.png" alt="">
													</div>
													<h3>Especificacoes:</h3>
												</div>
												<div class="parte-modelo-pacote">
													<h4>Camisa</h4>
													<div class="pontilhado">

													</div>
													<h4 id="preco-camisa-supreme"></h4>
												</div>
												<ul class="caracteristica-pacotes">
													<li>Frente em Tecido Jacquard</li>
													<li>Costas e Manga em Tecido Fresh</li>
													<li>Lateral em Dry Cooler Ventilada</li>
													<li>Gola Supreme</li>
													<li>Punho Supreme</li>
													<li>Modelagem Modern Concept</li>
													<li>Selo de Produto Oficial Oceânica</li>
													<li>Design em Sublimação Digital</li>
													<li>Escudo Bordado Digital</li>
													<li>Número e Nome do Jogador</li>
													<li>Patrocínios Sublimados Ilimitados (logos vetorizadas)</li>
													<li>Cores Tecnologia Colorfull Power</li>
												</ul>
												<div class="parte-modelo-pacote">
													<h4>Calção</h4>
													<div class="pontilhado">

													</div>
													<h4 id="preco-calcao-supreme"></h4>
												</div>
												<ul  class="caracteristica-pacotes">
													<li>Tecido Dry Strong</li>
													<li>Lateral Dry Cooler Ventilada</li>
													<li>Cadarço Colorido</li>
													<li>Modelagem Modern Concept</li>
													<li>Design em Sublimação Digital</li>
													<li>Escudo Bordado Digital</li>
													<li>Número do Jogador</li>
													<li>Patrocínios Sublimados Ilimitados (logos vetorizadas)</li>
													<li>Cores Tecnologia Colorfull Power</li>
												</ul>
												<div class="texto-meiao-pacote">
													<p>Sugestão:</p>
													<div class="parte-modelo-pacote margin-top-zero">
														<h4>Meião Treino</h4>
														<div class="pontilhado pontilhado-meiao">

														</div>
														<h4 id="preco-meiao-supreme"></h4>
													</div>
												</div>
											</div>
										</div>
									</div>
									</div>
									<p class="texto-btn-simulador">Pacotes</p>
									<div class="image-box-btn-simulador icone-maior">
										<img src="images/simulador/interface-nova/pacote-icon.png">
									</div>
								</div>
								<div class="botao-simulador" onclick="abrirMenu(this)">
									<div id="menu-geral-modelos" class="menu-geral menu-geral-modelos">
										<h2 class="titulos-menu">Modelos disponíveis</h2>
										<button class="btn-filtros" id="btn-filtros" onclick="mostrarOcultarFiltros()">
											filtros
										</button>
										<!-- <div class="filtros">
											<div class="camisa-rad">
												<input onclick="mudarMenuModelos('camisa')" id="opCamisa"   type="radio" name="peca" value="">
												<label onclick="mudarMenuModelos('camisa')" for="opCamisa">Camisa</label>
											</div>
											<div class="calcao-rad">
												<input onclick="mudarMenuModelos('calcao')" id="opCalcao" type="radio" name="peca" value="">
												<label onclick="mudarMenuModelos('calcao')" for="opCalcao">Calção</label>
											</div>
										</div> -->
										<div class="filtros">
											<div class="clubes">
												<div class="coluna-filtros">
													<div class="checkbox-and-text">
														<input class="clube-menu checkbox" type="checkbox" onclick="carregarModelosMenu()" name="checkbox" value="brasileirao" >
														<label for="">Brasileirão</label>
													</div>
													<div class="checkbox-and-text">
														<input class="clube-menu checkbox" type="checkbox" onclick="carregarModelosMenu()" name="checkbox" value="champions">
														<label for="">Champions</label>
													</div>
													<div class="checkbox-and-text">
														<input class="clube-menu checkbox" type="checkbox" onclick="carregarModelosMenu()" name="checkbox" value="sulamericanos">
														<label for="">Sulamericanos</label>
													</div>
													<div class="checkbox-and-text">
														<input class="clube-menu checkbox" type="checkbox" onclick="carregarModelosMenu()" name="checkbox" value="selecoes">
														<label for="">Seleções</label>
													</div>
												</div>
												<div class="coluna-filtros">
													<div class="checkbox-and-text">
														<input class="clube-menu checkbox" type="checkbox" onclick="carregarModelosMenu()" name="checkbox" value="uefa">
														<label for="">Uefa</label>
													</div>
													<div class="checkbox-and-text">
														<input class="clube-menu checkbox" type="checkbox" onclick="carregarModelosMenu()" name="checkbox" value="asicaticos">
														<label for="">Asiáticos</label>
													</div>
													<div class="checkbox-and-text">
														<input class="clube-menu checkbox" type="checkbox" onclick="carregarModelosMenu()" name="checkbox" value="varzea">
														<label for="">Várzea</label>
													</div>
													<!-- <div class="checkbox-and-text">
														<input class="clube-menu checkbox" type="checkbox" onclick="carregarModelosMenu()" name="checkbox" value="ALL">
														<label for="">Todas</label>
													</div> -->
												</div>
											</div>
											<div class="design">
												<div class="coluna-filtros coluna-menor">
													<div class="checkbox-and-text">
														<input type="checkbox" class="tipo-de-estampa checkbox checked" onclick="carregarModelosMenu()" name="checkbox" value="bicolor">
														<label for="">Bicolor</label>
													</div>
													<div class="checkbox-and-text">
														<input type="checkbox" class="tipo-de-estampa checkbox" onclick="carregarModelosMenu()" name="checkbox" value="tricolor">
														<label for="">Tricolor</label>
													</div>
													<div class="checkbox-and-text">
														<input type="checkbox" class="tipo-de-estampa checkbox" onclick="carregarModelosMenu()" name="checkbox" value="degrade">
														<label for="">Degradê</label>
													</div>
													<div class="checkbox-and-text">
														<input type="checkbox" class="tipo-de-estampa checkbox" onclick="carregarModelosMenu()" name="checkbox" value="imagens">
														<label for="">Imagens</label>
													</div>
												</div>
												<div class="coluna-filtros">
													<div class="checkbox-and-text">
														<input type="checkbox" class="tipo-de-estampa checkbox" onclick="carregarModelosMenu()" name="checkbox" value="camuflado">
														<label for="">Camuflado</label>
													</div>
													<div class="checkbox-and-text">
														<input type="checkbox" class="tipo-de-estampa checkbox" onclick="carregarModelosMenu()" name="checkbox" value="marca-da-agua">
														<label for="">Marca d'água</label>
													</div>
													<div class="checkbox-and-text">
														<input type="checkbox" class="tipo-de-estampa checkbox" onclick="carregarModelosMenu()" name="checkbox" value="quadriculado">
														<label for="">Quadriculado</label>
													</div>
													<!-- <div class="checkbox-and-text">
														<input type="checkbox" class="tipo-de-estampa checkbox" onclick="carregarModelosMenu()" name="checkbox" value="ALL">
														<label for="">Todas</label>
													</div> -->
												</div>
												<div class="coluna-filtros">
													<div class="checkbox-and-text">
														<input type="checkbox" class="tipo-de-estampa checkbox" onclick="carregarModelosMenu()" name="checkbox" value="listrado-diagonal">
														<label for="">Listrado Diagonal</label>
													</div>
													<div class="checkbox-and-text">
														<input type="checkbox" class="tipo-de-estampa checkbox" onclick="carregarModelosMenu()" name="checkbox" value="listrado-horizontal">
														<label for="">Listrado Horizontal</label>
													</div>
													<div class="checkbox-and-text">
														<input type="checkbox" class="tipo-de-estampa checkbox" onclick="carregarModelosMenu()" name="checkbox" value="listrado-vertical">
														<label for="">Listrado Vertical</label>
													</div>

												</div>
											</div>
										</div>
										<div id="camisetas" class=" modelos-disponiveis camisetas">


										</div>

									</div>
									<p class="texto-btn-simulador">Modelos</p>
									<div class="image-box-btn-simulador icone-maior">
										<img src="images/simulador/interface-nova/modelo-icon.png">
									</div>


								</div>


								<div id="botao-menu-geral-cores" onclick="abrirMenu(this)" class="botao-simulador botao-simulador-cor">
									<div id="menu-geral-cores" class="menu-geral menu-geral-cores ">
										<div class="fundo-cores-mobile fundo-cores-mobile-direita">
											<p>.</p>
										</div>
										<div class="fundo-cores-mobile fundo-cores-mobile-esquerda">
											<p>.</p>
										</div>
										<div class="image-text-wrap-menu-cores">
											<div class="image-menu-cores">
												<img src="images/simulador/modelo-frente.png" alt="">
											</div>
											<div class="lista-partes-wrap">
												<div class="lista-partes-cores">
													<h4 class="subtitulo-menu subtitulo-estampa-camisa">Estampa</h4>
													<h4 class="subtitulo-menu subtitulo-gola-camisa">Gola</h4>
													<h4 class="subtitulo-menu subtitulo-detalhe-camisa">Detalhe</h4>
													<h4 class="subtitulo-menu subtitulo-impressoes-camisa">Impressões</h4>
												</div>
												<div class="lista-partes-cores">
													<h4 class="subtitulo-menu subtitulo-estampa-calcao">Estampa</h4>
													<h4 class="subtitulo-menu subtitulo-detalhe-calcao">Detalhe</h4>
													<h4 class="subtitulo-menu subtitulo-impressoes-calcao">Impressões</h4>
												</div>
												<div class="lista-partes-cores">
													<h4 class="subtitulo-menu subtitulo-cor">cor</h4>
												</div>
											</div>

											<div class="lista-cores">
												<div class=" lista-cores-corpo">
													<h2 class="titulos-menu cores-camisa-titulo">Cores da Camisa</h2>
													<div class="lista-cores-row row-estampa">
														<div class="name-cor name-cor-estampa-camisa">
															<p class="cardeais">1ª</p>
															<div onclick="abrirMenu(this)" class="caixa-cor-escolhida">
																		<div id="cores-estampa-primaria" class="menu-cores">
																			<div class="menu-cores-row">
																				<div onclick="mudaCor('#ffffff', this)" id="branco" class="caixa-cores"></div>
																				<div onclick="mudaCor('#ededed', this)" id="prata" class="caixa-cores"></div>
																				<div onclick="mudaCor('#9e9e9e', this)" id="cinza" class="caixa-cores"></div>
																				<div onclick="mudaCor('#343434', this)" id="cinza-chumbo" class="caixa-cores"></div>
																				<div onclick="mudaCor('#000000', this)" id="preto" class="caixa-cores"></div>
																			</div>
																			<div class="menu-cores-row">
																				<div onclick="mudaCor('#a2cff0', this)" id="celeste-claro" class="caixa-cores"></div>
																				<div onclick="mudaCor('#71aad4', this)" id="celeste-escuro" class="caixa-cores"></div>
																				<div onclick="mudaCor('#082890', this)" id="royal" class="caixa-cores"></div>
																				<div onclick="mudaCor('#021c3b', this)" id="marinho" class="caixa-cores"></div>
																				<div onclick="mudaCor('#011023', this)" id="marinho-noite" class="caixa-cores"></div>
																			</div>
																				<div class="menu-cores-row">
																					<div onclick="mudaCor('#a3bd31', this)" id="verde-maca" class="caixa-cores"></div>
																					<div onclick="mudaCor('#70a83b', this)" id="verde" class="caixa-cores"></div>
																					<div onclick="mudaCor('#009045', this)" id="verde-bandeira" class="caixa-cores"></div>
																					<div onclick="mudaCor('#005425', this)" id="verde-musgo" class="caixa-cores"></div>
																					<div onclick="mudaCor('#586a1c', this)" id="verde-militar" class="caixa-cores"></div>
																				</div>
																				<div class="menu-cores-row">
																					<div onclick="mudaCor('#cfee4a', this)" id="verde-siciliano" class="caixa-cores"></div>
																					<div onclick="mudaCor('#a2cbbe', this)" id="verde-bebe" class="caixa-cores"></div>
																					<div onclick="mudaCor('#80b3a3', this)" id="verde-agua" class="caixa-cores"></div>
																					<div onclick="mudaCor('#30a683', this)" id="tyffany" class="caixa-cores"></div>
																					<div onclick="mudaCor('#104969', this)" id="petroleo" class="caixa-cores"></div>
																				</div>
																				<div class="menu-cores-row">
																					<div onclick="mudaCor('#edcc90', this)" id="pessego" class="caixa-cores"></div>
																					<div onclick="mudaCor('#877844', this)" id="dourado-claro" class="caixa-cores"></div>
																					<div onclick="mudaCor('#806c28', this)" id="dourado-escuro" class="caixa-cores"></div>
																					<div onclick="mudaCor('#594f42', this)" id="marrom-claro" class="caixa-cores"></div>
																					<div onclick="mudaCor('#382f2b', this)" id="marrom-escuro" class="caixa-cores"></div>
																				</div>
																				<div class="menu-cores-row">
																					<div onclick="mudaCor('#fef271', this)" id="amarelo-bebe" class="caixa-cores"></div>
																					<div onclick="mudaCor('#ffff00', this)" id="amarelo-canario" class="caixa-cores"></div>
																					<div onclick="mudaCor('#f6d101', this)" id="amarelo-branco-do-brasil" class="caixa-cores"></div>
																					<div onclick="mudaCor('#db9600', this)" id="laranja-claro" class="caixa-cores"></div>
																					<div onclick="mudaCor('#ce6b03', this)" id="laranja-abobora" class="caixa-cores"></div>
																				</div>
																				<div class="menu-cores-row">
																					<div onclick="mudaCor('#dca3c6', this)" id="rosa-bebe" class="caixa-cores"></div>
																					<div onclick="mudaCor('#c45293', this)" id="rosa-escuro" class="caixa-cores"></div>
																					<div onclick="mudaCor('#c40f77', this)" id="pink" class="caixa-cores"></div>
																					<div onclick="mudaCor('#8165a2', this)" id="lilas" class="caixa-cores"></div>
																					<div onclick="mudaCor('#2f004a', this)" id="roxo" class="caixa-cores"></div>
																				</div>
																				<div class="menu-cores-row">
																					<div onclick="mudaCor('#bf083c', this)" id="vermelho-melancia" class="caixa-cores"></div>
																					<div onclick="mudaCor('#bf0811', this)" id="vermelho" class="caixa-cores"></div>
																					<div onclick="mudaCor('#801815', this)" id="vermelho-carmim" class="caixa-cores"></div>
																					<div onclick="mudaCor('#65092d', this)" id="bordo" class="caixa-cores"></div>
																					<div onclick="mudaCor('#45061f', this)" id="bordo-puc" class="caixa-cores"></div>
																				</div>
																			</div>
															</div>

														</div>
														<div class="name-cor name-cor-estampa-camisa">
															<p class="cardeais">2ª</p>
															<div onclick="abrirMenu(this)" class="caixa-cor-escolhida cor-gola2">
																<div id="cores-estampa-secundaria"  class="menu-cores">
																	<div class="menu-cores-row">
																		<div onclick="mudaCor('#ffffff', this)" id="branco" class="caixa-cores"></div>
																		<div onclick="mudaCor('#ededed', this)" id="prata" class="caixa-cores"></div>
																		<div onclick="mudaCor('#9e9e9e', this)" id="cinza" class="caixa-cores"></div>
																		<div onclick="mudaCor('#343434', this)" id="cinza-chumbo" class="caixa-cores"></div>
																		<div onclick="mudaCor('#000000', this)" id="preto" class="caixa-cores"></div>
																	</div>
																	<div class="menu-cores-row">
																		<div onclick="mudaCor('#a2cff0', this)" id="celeste-claro" class="caixa-cores"></div>
																		<div onclick="mudaCor('#71aad4', this)" id="celeste-escuro" class="caixa-cores"></div>
																		<div onclick="mudaCor('#082890', this)" id="royal" class="caixa-cores"></div>
																		<div onclick="mudaCor('#021c3b', this)" id="marinho" class="caixa-cores"></div>
																		<div onclick="mudaCor('#011023', this)" id="marinho-noite" class="caixa-cores"></div>
																	</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#a3bd31', this)" id="verde-maca" class="caixa-cores"></div>
																			<div onclick="mudaCor('#70a83b', this)" id="verde" class="caixa-cores"></div>
																			<div onclick="mudaCor('#009045', this)" id="verde-bandeira" class="caixa-cores"></div>
																			<div onclick="mudaCor('#005425', this)" id="verde-musgo" class="caixa-cores"></div>
																			<div onclick="mudaCor('#586a1c', this)" id="verde-militar" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#cfee4a', this)" id="verde-siciliano" class="caixa-cores"></div>
																			<div onclick="mudaCor('#a2cbbe', this)" id="verde-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCor('#80b3a3', this)" id="verde-agua" class="caixa-cores"></div>
																			<div onclick="mudaCor('#30a683', this)" id="tyffany" class="caixa-cores"></div>
																			<div onclick="mudaCor('#104969', this)" id="petroleo" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#edcc90', this)" id="pessego" class="caixa-cores"></div>
																			<div onclick="mudaCor('#877844', this)" id="dourado-claro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#806c28', this)" id="dourado-escuro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#594f42', this)" id="marrom-claro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#382f2b', this)" id="marrom-escuro" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#fef271', this)" id="amarelo-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCor('#ffff00', this)" id="amarelo-canario" class="caixa-cores"></div>
																			<div onclick="mudaCor('#f6d101', this)" id="amarelo-branco-do-brasil" class="caixa-cores"></div>
																			<div onclick="mudaCor('#db9600', this)" id="laranja-claro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#ce6b03', this)" id="laranja-abobora" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#dca3c6', this)" id="rosa-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCor('#c45293', this)" id="rosa-escuro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#c40f77', this)" id="pink" class="caixa-cores"></div>
																			<div onclick="mudaCor('#8165a2', this)" id="lilas" class="caixa-cores"></div>
																			<div onclick="mudaCor('#2f004a', this)" id="roxo" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#bf083c', this)" id="vermelho-melancia" class="caixa-cores"></div>
																			<div onclick="mudaCor('#bf0811', this)" id="vermelho" class="caixa-cores"></div>
																			<div onclick="mudaCor('#801815', this)" id="vermelho-carmim" class="caixa-cores"></div>
																			<div onclick="mudaCor('#65092d', this)" id="bordo" class="caixa-cores"></div>
																			<div onclick="mudaCor('#45061f', this)" id="bordo-puc" class="caixa-cores"></div>
																		</div>
																	</div>
															</div>

														</div>
														<div class="name-cor name-cor-estampa-camisa " >
															<p class="cardeais">3ª</p>
															<div onclick="abrirMenu(this)" class="caixa-cor-escolhida cor-torso">
																<div id="cores-estampa-terciaria" class="menu-cores">
																	<div class="menu-cores-row">
																		<div onclick="mudaCor('#ffffff', this)" id="branco" class="caixa-cores"></div>
																		<div onclick="mudaCor('#ededed', this)" id="prata" class="caixa-cores"></div>
																		<div onclick="mudaCor('#9e9e9e', this)" id="cinza" class="caixa-cores"></div>
																		<div onclick="mudaCor('#343434', this)" id="cinza-chumbo" class="caixa-cores"></div>
																		<div onclick="mudaCor('#000000', this)" id="preto" class="caixa-cores"></div>
																	</div>
																	<div class="menu-cores-row">
																		<div onclick="mudaCor('#a2cff0', this)" id="celeste-claro" class="caixa-cores"></div>
																		<div onclick="mudaCor('#71aad4', this)" id="celeste-escuro" class="caixa-cores"></div>
																		<div onclick="mudaCor('#082890', this)" id="royal" class="caixa-cores"></div>
																		<div onclick="mudaCor('#021c3b', this)" id="marinho" class="caixa-cores"></div>
																		<div onclick="mudaCor('#011023', this)" id="marinho-noite" class="caixa-cores"></div>
																	</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#a3bd31', this)" id="verde-maca" class="caixa-cores"></div>
																			<div onclick="mudaCor('#70a83b', this)" id="verde" class="caixa-cores"></div>
																			<div onclick="mudaCor('#009045', this)" id="verde-bandeira" class="caixa-cores"></div>
																			<div onclick="mudaCor('#005425', this)" id="verde-musgo" class="caixa-cores"></div>
																			<div onclick="mudaCor('#586a1c', this)" id="verde-militar" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#cfee4a', this)" id="verde-siciliano" class="caixa-cores"></div>
																			<div onclick="mudaCor('#a2cbbe', this)" id="verde-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCor('#80b3a3', this)" id="verde-agua" class="caixa-cores"></div>
																			<div onclick="mudaCor('#30a683', this)" id="tyffany" class="caixa-cores"></div>
																			<div onclick="mudaCor('#104969', this)" id="petroleo" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#edcc90', this)" id="pessego" class="caixa-cores"></div>
																			<div onclick="mudaCor('#877844', this)" id="dourado-claro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#806c28', this)" id="dourado-escuro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#594f42', this)" id="marrom-claro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#382f2b', this)" id="marrom-escuro" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#fef271', this)" id="amarelo-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCor('#ffff00', this)" id="amarelo-canario" class="caixa-cores"></div>
																			<div onclick="mudaCor('#f6d101', this)" id="amarelo-branco-do-brasil" class="caixa-cores"></div>
																			<div onclick="mudaCor('#db9600', this)" id="laranja-claro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#ce6b03', this)" id="laranja-abobora" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#dca3c6', this)" id="rosa-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCor('#c45293', this)" id="rosa-escuro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#c40f77', this)" id="pink" class="caixa-cores"></div>
																			<div onclick="mudaCor('#8165a2', this)" id="lilas" class="caixa-cores"></div>
																			<div onclick="mudaCor('#2f004a', this)" id="roxo" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#bf083c', this)" id="vermelho-melancia" class="caixa-cores"></div>
																			<div onclick="mudaCor('#bf0811', this)" id="vermelho" class="caixa-cores"></div>
																			<div onclick="mudaCor('#801815', this)" id="vermelho-carmim" class="caixa-cores"></div>
																			<div onclick="mudaCor('#65092d', this)" id="bordo" class="caixa-cores"></div>
																			<div onclick="mudaCor('#45061f', this)" id="bordo-puc" class="caixa-cores"></div>
																		</div>
																	</div>
															</div>
														</div>
														<div class="name-cor name-cor-estampa-camisa ">
															<p class="cardeais">4ª</p>
															<div onclick="abrirMenu(this)" class="caixa-cor-escolhida cor-gola-da-manga">
																<div id="cores-estampa-quaternaria" class="menu-cores">
																	<div class="menu-cores-row">
																		<div onclick="mudaCor('#ffffff', this)" id="branco" class="caixa-cores"></div>
																		<div onclick="mudaCor('#ededed', this)" id="prata" class="caixa-cores"></div>
																		<div onclick="mudaCor('#9e9e9e', this)" id="cinza" class="caixa-cores"></div>
																		<div onclick="mudaCor('#343434', this)" id="cinza-chumbo" class="caixa-cores"></div>
																		<div onclick="mudaCor('#000000', this)" id="preto" class="caixa-cores"></div>
																	</div>
																	<div class="menu-cores-row">
																		<div onclick="mudaCor('#a2cff0', this)" id="celeste-claro" class="caixa-cores"></div>
																		<div onclick="mudaCor('#71aad4', this)" id="celeste-escuro" class="caixa-cores"></div>
																		<div onclick="mudaCor('#082890', this)" id="royal" class="caixa-cores"></div>
																		<div onclick="mudaCor('#021c3b', this)" id="marinho" class="caixa-cores"></div>
																		<div onclick="mudaCor('#011023', this)" id="marinho-noite" class="caixa-cores"></div>
																	</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#a3bd31', this)" id="verde-maca" class="caixa-cores"></div>
																			<div onclick="mudaCor('#70a83b', this)" id="verde" class="caixa-cores"></div>
																			<div onclick="mudaCor('#009045', this)" id="verde-bandeira" class="caixa-cores"></div>
																			<div onclick="mudaCor('#005425', this)" id="verde-musgo" class="caixa-cores"></div>
																			<div onclick="mudaCor('#586a1c', this)" id="verde-militar" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#cfee4a', this)" id="verde-siciliano" class="caixa-cores"></div>
																			<div onclick="mudaCor('#a2cbbe', this)" id="verde-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCor('#80b3a3', this)" id="verde-agua" class="caixa-cores"></div>
																			<div onclick="mudaCor('#30a683', this)" id="tyffany" class="caixa-cores"></div>
																			<div onclick="mudaCor('#104969', this)" id="petroleo" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#edcc90', this)" id="pessego" class="caixa-cores"></div>
																			<div onclick="mudaCor('#877844', this)" id="dourado-claro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#806c28', this)" id="dourado-escuro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#594f42', this)" id="marrom-claro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#382f2b', this)" id="marrom-escuro" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#fef271', this)" id="amarelo-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCor('#ffff00', this)" id="amarelo-canario" class="caixa-cores"></div>
																			<div onclick="mudaCor('#f6d101', this)" id="amarelo-branco-do-brasil" class="caixa-cores"></div>
																			<div onclick="mudaCor('#db9600', this)" id="laranja-claro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#ce6b03', this)" id="laranja-abobora" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#dca3c6', this)" id="rosa-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCor('#c45293', this)" id="rosa-escuro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#c40f77', this)" id="pink" class="caixa-cores"></div>
																			<div onclick="mudaCor('#8165a2', this)" id="lilas" class="caixa-cores"></div>
																			<div onclick="mudaCor('#2f004a', this)" id="roxo" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#bf083c', this)" id="vermelho-melancia" class="caixa-cores"></div>
																			<div onclick="mudaCor('#bf0811', this)" id="vermelho" class="caixa-cores"></div>
																			<div onclick="mudaCor('#801815', this)" id="vermelho-carmim" class="caixa-cores"></div>
																			<div onclick="mudaCor('#65092d', this)" id="bordo" class="caixa-cores"></div>
																			<div onclick="mudaCor('#45061f', this)" id="bordo-puc" class="caixa-cores"></div>
																		</div>
																	</div>
															</div>
														</div>
														<div class="name-cor name-cor-estampa-camisa ">
															<p class="cardeais">5ª</p>
															<div onclick="abrirMenu(this)" class="caixa-cor-escolhida cor-gola-da-manga">
																<div id="cores-estampa-quinaria" class="menu-cores">
																	<div class="menu-cores-row">
																		<div onclick="mudaCor('#ffffff', this)" id="branco" class="caixa-cores"></div>
																		<div onclick="mudaCor('#ededed', this)" id="prata" class="caixa-cores"></div>
																		<div onclick="mudaCor('#9e9e9e', this)" id="cinza" class="caixa-cores"></div>
																		<div onclick="mudaCor('#343434', this)" id="cinza-chumbo" class="caixa-cores"></div>
																		<div onclick="mudaCor('#000000', this)" id="preto" class="caixa-cores"></div>
																	</div>
																	<div class="menu-cores-row">
																		<div onclick="mudaCor('#a2cff0', this)" id="celeste-claro" class="caixa-cores"></div>
																		<div onclick="mudaCor('#71aad4', this)" id="celeste-escuro" class="caixa-cores"></div>
																		<div onclick="mudaCor('#082890', this)" id="royal" class="caixa-cores"></div>
																		<div onclick="mudaCor('#021c3b', this)" id="marinho" class="caixa-cores"></div>
																		<div onclick="mudaCor('#011023', this)" id="marinho-noite" class="caixa-cores"></div>
																	</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#a3bd31', this)" id="verde-maca" class="caixa-cores"></div>
																			<div onclick="mudaCor('#70a83b', this)" id="verde" class="caixa-cores"></div>
																			<div onclick="mudaCor('#009045', this)" id="verde-bandeira" class="caixa-cores"></div>
																			<div onclick="mudaCor('#005425', this)" id="verde-musgo" class="caixa-cores"></div>
																			<div onclick="mudaCor('#586a1c', this)" id="verde-militar" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#cfee4a', this)" id="verde-siciliano" class="caixa-cores"></div>
																			<div onclick="mudaCor('#a2cbbe', this)" id="verde-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCor('#80b3a3', this)" id="verde-agua" class="caixa-cores"></div>
																			<div onclick="mudaCor('#30a683', this)" id="tyffany" class="caixa-cores"></div>
																			<div onclick="mudaCor('#104969', this)" id="petroleo" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#edcc90', this)" id="pessego" class="caixa-cores"></div>
																			<div onclick="mudaCor('#877844', this)" id="dourado-claro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#806c28', this)" id="dourado-escuro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#594f42', this)" id="marrom-claro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#382f2b', this)" id="marrom-escuro" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#fef271', this)" id="amarelo-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCor('#ffff00', this)" id="amarelo-canario" class="caixa-cores"></div>
																			<div onclick="mudaCor('#f6d101', this)" id="amarelo-branco-do-brasil" class="caixa-cores"></div>
																			<div onclick="mudaCor('#db9600', this)" id="laranja-claro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#ce6b03', this)" id="laranja-abobora" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#dca3c6', this)" id="rosa-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCor('#c45293', this)" id="rosa-escuro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#c40f77', this)" id="pink" class="caixa-cores"></div>
																			<div onclick="mudaCor('#8165a2', this)" id="lilas" class="caixa-cores"></div>
																			<div onclick="mudaCor('#2f004a', this)" id="roxo" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#bf083c', this)" id="vermelho-melancia" class="caixa-cores"></div>
																			<div onclick="mudaCor('#bf0811', this)" id="vermelho" class="caixa-cores"></div>
																			<div onclick="mudaCor('#801815', this)" id="vermelho-carmim" class="caixa-cores"></div>
																			<div onclick="mudaCor('#65092d', this)" id="bordo" class="caixa-cores"></div>
																			<div onclick="mudaCor('#45061f', this)" id="bordo-puc" class="caixa-cores"></div>
																		</div>
																	</div>
															</div>
														</div>
													</div>
													<div class="lista-cores-row row-gola">

														<div class="name-cor name-cor-gola">
															<p class="cardeais">1ª</p>
															<div onclick="abrirMenu(this)" class="caixa-cor-escolhida cor-bermuda">
																<div id="cores-gola-primaria" class="menu-cores">
																	<div class="menu-cores-row">
																		<div onclick="mudaCor('#ffffff', this)" id="branco" class="caixa-cores"></div>
																		<div onclick="mudaCor('#ededed', this)" id="prata" class="caixa-cores"></div>
																		<div onclick="mudaCor('#9e9e9e', this)" id="cinza" class="caixa-cores"></div>
																		<div onclick="mudaCor('#343434', this)" id="cinza-chumbo" class="caixa-cores"></div>
																		<div onclick="mudaCor('#000000', this)" id="preto" class="caixa-cores"></div>
																	</div>
																	<div class="menu-cores-row">
																		<div onclick="mudaCor('#a2cff0', this)" id="celeste-claro" class="caixa-cores"></div>
																		<div onclick="mudaCor('#71aad4', this)" id="celeste-escuro" class="caixa-cores"></div>
																		<div onclick="mudaCor('#082890', this)" id="royal" class="caixa-cores"></div>
																		<div onclick="mudaCor('#021c3b', this)" id="marinho" class="caixa-cores"></div>
																		<div onclick="mudaCor('#011023', this)" id="marinho-noite" class="caixa-cores"></div>
																	</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#a3bd31', this)" id="verde-maca" class="caixa-cores"></div>
																			<div onclick="mudaCor('#70a83b', this)" id="verde" class="caixa-cores"></div>
																			<div onclick="mudaCor('#009045', this)" id="verde-bandeira" class="caixa-cores"></div>
																			<div onclick="mudaCor('#005425', this)" id="verde-musgo" class="caixa-cores"></div>
																			<div onclick="mudaCor('#586a1c', this)" id="verde-militar" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#cfee4a', this)" id="verde-siciliano" class="caixa-cores"></div>
																			<div onclick="mudaCor('#a2cbbe', this)" id="verde-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCor('#80b3a3', this)" id="verde-agua" class="caixa-cores"></div>
																			<div onclick="mudaCor('#30a683', this)" id="tyffany" class="caixa-cores"></div>
																			<div onclick="mudaCor('#104969', this)" id="petroleo" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#edcc90', this)" id="pessego" class="caixa-cores"></div>
																			<div onclick="mudaCor('#877844', this)" id="dourado-claro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#806c28', this)" id="dourado-escuro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#594f42', this)" id="marrom-claro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#382f2b', this)" id="marrom-escuro" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#fef271', this)" id="amarelo-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCor('#ffff00', this)" id="amarelo-canario" class="caixa-cores"></div>
																			<div onclick="mudaCor('#f6d101', this)" id="amarelo-branco-do-brasil" class="caixa-cores"></div>
																			<div onclick="mudaCor('#db9600', this)" id="laranja-claro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#ce6b03', this)" id="laranja-abobora" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#dca3c6', this)" id="rosa-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCor('#c45293', this)" id="rosa-escuro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#c40f77', this)" id="pink" class="caixa-cores"></div>
																			<div onclick="mudaCor('#8165a2', this)" id="lilas" class="caixa-cores"></div>
																			<div onclick="mudaCor('#2f004a', this)" id="roxo" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#bf083c', this)" id="vermelho-melancia" class="caixa-cores"></div>
																			<div onclick="mudaCor('#bf0811', this)" id="vermelho" class="caixa-cores"></div>
																			<div onclick="mudaCor('#801815', this)" id="vermelho-carmim" class="caixa-cores"></div>
																			<div onclick="mudaCor('#65092d', this)" id="bordo" class="caixa-cores"></div>
																			<div onclick="mudaCor('#45061f', this)" id="bordo-puc" class="caixa-cores"></div>
																		</div>
																	</div>
															</div>

														</div>
														<div class="name-cor name-cor-gola">
															<p  class="cardeais texto-margem-dif">2ª</p>
															<div onclick="abrirMenu(this)" class="caixa-cor-escolhida cor-laterais">
																<div id="cores-gola-secundaria" class="menu-cores menu-cores-ultimo">
																	<div class="menu-cores-row">
																		<div onclick="mudaCor('#ffffff', this)" id="branco" class="caixa-cores"></div>
																		<div onclick="mudaCor('#ededed', this)" id="prata" class="caixa-cores"></div>
																		<div onclick="mudaCor('#9e9e9e', this)" id="cinza" class="caixa-cores"></div>
																		<div onclick="mudaCor('#343434', this)" id="cinza-chumbo" class="caixa-cores"></div>
																		<div onclick="mudaCor('#000000', this)" id="preto" class="caixa-cores"></div>
																	</div>
																	<div class="menu-cores-row">
																		<div onclick="mudaCor('#a2cff0', this)" id="celeste-claro" class="caixa-cores"></div>
																		<div onclick="mudaCor('#71aad4', this)" id="celeste-escuro" class="caixa-cores"></div>
																		<div onclick="mudaCor('#082890', this)" id="royal" class="caixa-cores"></div>
																		<div onclick="mudaCor('#021c3b', this)" id="marinho" class="caixa-cores"></div>
																		<div onclick="mudaCor('#011023', this)" id="marinho-noite" class="caixa-cores"></div>
																	</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#a3bd31', this)" id="verde-maca" class="caixa-cores"></div>
																			<div onclick="mudaCor('#70a83b', this)" id="verde" class="caixa-cores"></div>
																			<div onclick="mudaCor('#009045', this)" id="verde-bandeira" class="caixa-cores"></div>
																			<div onclick="mudaCor('#005425', this)" id="verde-musgo" class="caixa-cores"></div>
																			<div onclick="mudaCor('#586a1c', this)" id="verde-militar" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#cfee4a', this)" id="verde-siciliano" class="caixa-cores"></div>
																			<div onclick="mudaCor('#a2cbbe', this)" id="verde-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCor('#80b3a3', this)" id="verde-agua" class="caixa-cores"></div>
																			<div onclick="mudaCor('#30a683', this)" id="tyffany" class="caixa-cores"></div>
																			<div onclick="mudaCor('#104969', this)" id="petroleo" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#edcc90', this)" id="pessego" class="caixa-cores"></div>
																			<div onclick="mudaCor('#877844', this)" id="dourado-claro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#806c28', this)" id="dourado-escuro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#594f42', this)" id="marrom-claro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#382f2b', this)" id="marrom-escuro" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#fef271', this)" id="amarelo-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCor('#ffff00', this)" id="amarelo-canario" class="caixa-cores"></div>
																			<div onclick="mudaCor('#f6d101', this)" id="amarelo-branco-do-brasil" class="caixa-cores"></div>
																			<div onclick="mudaCor('#db9600', this)" id="laranja-claro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#ce6b03', this)" id="laranja-abobora" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#dca3c6', this)" id="rosa-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCor('#c45293', this)" id="rosa-escuro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#c40f77', this)" id="pink" class="caixa-cores"></div>
																			<div onclick="mudaCor('#8165a2', this)" id="lilas" class="caixa-cores"></div>
																			<div onclick="mudaCor('#2f004a', this)" id="roxo" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#bf083c', this)" id="vermelho-melancia" class="caixa-cores"></div>
																			<div onclick="mudaCor('#bf0811', this)" id="vermelho" class="caixa-cores"></div>
																			<div onclick="mudaCor('#801815', this)" id="vermelho-carmim" class="caixa-cores"></div>
																			<div onclick="mudaCor('#65092d', this)" id="bordo" class="caixa-cores"></div>
																			<div onclick="mudaCor('#45061f', this)" id="bordo-puc" class="caixa-cores"></div>
																		</div>
																	</div>
															</div>
														</div>
														<div class="name-cor name-cor-gola ">
															<p class="cardeais texto-margem-dif">3ª</p>
															<div onclick="abrirMenu(this)" class="caixa-cor-escolhida cor-laterais">
																<div id="cores-gola-terciaria" class="menu-cores menu-cores-ultimo">
																	<div class="menu-cores-row">
																		<div onclick="mudaCor('#ffffff', this)" id="branco" class="caixa-cores"></div>
																		<div onclick="mudaCor('#ededed', this)" id="prata" class="caixa-cores"></div>
																		<div onclick="mudaCor('#9e9e9e', this)" id="cinza" class="caixa-cores"></div>
																		<div onclick="mudaCor('#343434', this)" id="cinza-chumbo" class="caixa-cores"></div>
																		<div onclick="mudaCor('#000000', this)" id="preto" class="caixa-cores"></div>
																	</div>
																	<div class="menu-cores-row">
																		<div onclick="mudaCor('#a2cff0', this)" id="celeste-claro" class="caixa-cores"></div>
																		<div onclick="mudaCor('#71aad4', this)" id="celeste-escuro" class="caixa-cores"></div>
																		<div onclick="mudaCor('#082890', this)" id="royal" class="caixa-cores"></div>
																		<div onclick="mudaCor('#021c3b', this)" id="marinho" class="caixa-cores"></div>
																		<div onclick="mudaCor('#011023', this)" id="marinho-noite" class="caixa-cores"></div>
																	</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#a3bd31', this)" id="verde-maca" class="caixa-cores"></div>
																			<div onclick="mudaCor('#70a83b', this)" id="verde" class="caixa-cores"></div>
																			<div onclick="mudaCor('#009045', this)" id="verde-bandeira" class="caixa-cores"></div>
																			<div onclick="mudaCor('#005425', this)" id="verde-musgo" class="caixa-cores"></div>
																			<div onclick="mudaCor('#586a1c', this)" id="verde-militar" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#cfee4a', this)" id="verde-siciliano" class="caixa-cores"></div>
																			<div onclick="mudaCor('#a2cbbe', this)" id="verde-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCor('#80b3a3', this)" id="verde-agua" class="caixa-cores"></div>
																			<div onclick="mudaCor('#30a683', this)" id="tyffany" class="caixa-cores"></div>
																			<div onclick="mudaCor('#104969', this)" id="petroleo" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#edcc90', this)" id="pessego" class="caixa-cores"></div>
																			<div onclick="mudaCor('#877844', this)" id="dourado-claro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#806c28', this)" id="dourado-escuro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#594f42', this)" id="marrom-claro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#382f2b', this)" id="marrom-escuro" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#fef271', this)" id="amarelo-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCor('#ffff00', this)" id="amarelo-canario" class="caixa-cores"></div>
																			<div onclick="mudaCor('#f6d101', this)" id="amarelo-branco-do-brasil" class="caixa-cores"></div>
																			<div onclick="mudaCor('#db9600', this)" id="laranja-claro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#ce6b03', this)" id="laranja-abobora" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#dca3c6', this)" id="rosa-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCor('#c45293', this)" id="rosa-escuro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#c40f77', this)" id="pink" class="caixa-cores"></div>
																			<div onclick="mudaCor('#8165a2', this)" id="lilas" class="caixa-cores"></div>
																			<div onclick="mudaCor('#2f004a', this)" id="roxo" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#bf083c', this)" id="vermelho-melancia" class="caixa-cores"></div>
																			<div onclick="mudaCor('#bf0811', this)" id="vermelho" class="caixa-cores"></div>
																			<div onclick="mudaCor('#801815', this)" id="vermelho-carmim" class="caixa-cores"></div>
																			<div onclick="mudaCor('#65092d', this)" id="bordo" class="caixa-cores"></div>
																			<div onclick="mudaCor('#45061f', this)" id="bordo-puc" class="caixa-cores"></div>
																		</div>
																	</div>
															</div>
														</div>
													</div>
													<div class="lista-cores-row row-detalhes">

														<div id="menu-punho" class="name-cor name-cor-detalhe-camisa">
															<p>Punho</p>
															<div onclick="abrirMenu(this)" class="caixa-cor-escolhida cor-bermuda">
																<div id="cores-detalhe-punho" class="menu-cores">
																	<div class="menu-cores-row">
																		<div onclick="mudaCor('#ffffff', this)" id="branco" class="caixa-cores"></div>
																		<div onclick="mudaCor('#ededed', this)" id="prata" class="caixa-cores"></div>
																		<div onclick="mudaCor('#9e9e9e', this)" id="cinza" class="caixa-cores"></div>
																		<div onclick="mudaCor('#343434', this)" id="cinza-chumbo" class="caixa-cores"></div>
																		<div onclick="mudaCor('#000000', this)" id="preto" class="caixa-cores"></div>
																	</div>
																	<div class="menu-cores-row">
																		<div onclick="mudaCor('#a2cff0', this)" id="celeste-claro" class="caixa-cores"></div>
																		<div onclick="mudaCor('#71aad4', this)" id="celeste-escuro" class="caixa-cores"></div>
																		<div onclick="mudaCor('#082890', this)" id="royal" class="caixa-cores"></div>
																		<div onclick="mudaCor('#021c3b', this)" id="marinho" class="caixa-cores"></div>
																		<div onclick="mudaCor('#011023', this)" id="marinho-noite" class="caixa-cores"></div>
																	</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#a3bd31', this)" id="verde-maca" class="caixa-cores"></div>
																			<div onclick="mudaCor('#70a83b', this)" id="verde" class="caixa-cores"></div>
																			<div onclick="mudaCor('#009045', this)" id="verde-bandeira" class="caixa-cores"></div>
																			<div onclick="mudaCor('#005425', this)" id="verde-musgo" class="caixa-cores"></div>
																			<div onclick="mudaCor('#586a1c', this)" id="verde-militar" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#cfee4a', this)" id="verde-siciliano" class="caixa-cores"></div>
																			<div onclick="mudaCor('#a2cbbe', this)" id="verde-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCor('#80b3a3', this)" id="verde-agua" class="caixa-cores"></div>
																			<div onclick="mudaCor('#30a683', this)" id="tyffany" class="caixa-cores"></div>
																			<div onclick="mudaCor('#104969', this)" id="petroleo" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#edcc90', this)" id="pessego" class="caixa-cores"></div>
																			<div onclick="mudaCor('#877844', this)" id="dourado-claro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#806c28', this)" id="dourado-escuro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#594f42', this)" id="marrom-claro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#382f2b', this)" id="marrom-escuro" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#fef271', this)" id="amarelo-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCor('#ffff00', this)" id="amarelo-canario" class="caixa-cores"></div>
																			<div onclick="mudaCor('#f6d101', this)" id="amarelo-branco-do-brasil" class="caixa-cores"></div>
																			<div onclick="mudaCor('#db9600', this)" id="laranja-claro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#ce6b03', this)" id="laranja-abobora" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#dca3c6', this)" id="rosa-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCor('#c45293', this)" id="rosa-escuro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#c40f77', this)" id="pink" class="caixa-cores"></div>
																			<div onclick="mudaCor('#8165a2', this)" id="lilas" class="caixa-cores"></div>
																			<div onclick="mudaCor('#2f004a', this)" id="roxo" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#bf083c', this)" id="vermelho-melancia" class="caixa-cores"></div>
																			<div onclick="mudaCor('#bf0811', this)" id="vermelho" class="caixa-cores"></div>
																			<div onclick="mudaCor('#801815', this)" id="vermelho-carmim" class="caixa-cores"></div>
																			<div onclick="mudaCor('#65092d', this)" id="bordo" class="caixa-cores"></div>
																			<div onclick="mudaCor('#45061f', this)" id="bordo-puc" class="caixa-cores"></div>
																		</div>
																	</div>
															</div>

														</div>
														<div id="menu-lateral" class="name-cor name-cor-detalhe-camisa">
															<p class="texto-margem-dif">Lateral</p>
															<div onclick="abrirMenu(this)" class="caixa-cor-escolhida cor-laterais">
																<div id="cores-detalhe-lateral" class="menu-cores menu-cores-ultimo">
																	<div class="menu-cores-row">
																		<div onclick="mudaCor('#ffffff', this)" id="branco" class="caixa-cores"></div>
																		<div onclick="mudaCor('#ededed', this)" id="prata" class="caixa-cores"></div>
																		<div onclick="mudaCor('#9e9e9e', this)" id="cinza" class="caixa-cores"></div>
																		<div onclick="mudaCor('#343434', this)" id="cinza-chumbo" class="caixa-cores"></div>
																		<div onclick="mudaCor('#000000', this)" id="preto" class="caixa-cores"></div>
																	</div>
																	<div class="menu-cores-row">
																		<div onclick="mudaCor('#a2cff0', this)" id="celeste-claro" class="caixa-cores"></div>
																		<div onclick="mudaCor('#71aad4', this)" id="celeste-escuro" class="caixa-cores"></div>
																		<div onclick="mudaCor('#082890', this)" id="royal" class="caixa-cores"></div>
																		<div onclick="mudaCor('#021c3b', this)" id="marinho" class="caixa-cores"></div>
																		<div onclick="mudaCor('#011023', this)" id="marinho-noite" class="caixa-cores"></div>
																	</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#a3bd31', this)" id="verde-maca" class="caixa-cores"></div>
																			<div onclick="mudaCor('#70a83b', this)" id="verde" class="caixa-cores"></div>
																			<div onclick="mudaCor('#009045', this)" id="verde-bandeira" class="caixa-cores"></div>
																			<div onclick="mudaCor('#005425', this)" id="verde-musgo" class="caixa-cores"></div>
																			<div onclick="mudaCor('#586a1c', this)" id="verde-militar" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#cfee4a', this)" id="verde-siciliano" class="caixa-cores"></div>
																			<div onclick="mudaCor('#a2cbbe', this)" id="verde-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCor('#80b3a3', this)" id="verde-agua" class="caixa-cores"></div>
																			<div onclick="mudaCor('#30a683', this)" id="tyffany" class="caixa-cores"></div>
																			<div onclick="mudaCor('#104969', this)" id="petroleo" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#edcc90', this)" id="pessego" class="caixa-cores"></div>
																			<div onclick="mudaCor('#877844', this)" id="dourado-claro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#806c28', this)" id="dourado-escuro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#594f42', this)" id="marrom-claro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#382f2b', this)" id="marrom-escuro" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#fef271', this)" id="amarelo-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCor('#ffff00', this)" id="amarelo-canario" class="caixa-cores"></div>
																			<div onclick="mudaCor('#f6d101', this)" id="amarelo-branco-do-brasil" class="caixa-cores"></div>
																			<div onclick="mudaCor('#db9600', this)" id="laranja-claro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#ce6b03', this)" id="laranja-abobora" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#dca3c6', this)" id="rosa-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCor('#c45293', this)" id="rosa-escuro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#c40f77', this)" id="pink" class="caixa-cores"></div>
																			<div onclick="mudaCor('#8165a2', this)" id="lilas" class="caixa-cores"></div>
																			<div onclick="mudaCor('#2f004a', this)" id="roxo" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#bf083c', this)" id="vermelho-melancia" class="caixa-cores"></div>
																			<div onclick="mudaCor('#bf0811', this)" id="vermelho" class="caixa-cores"></div>
																			<div onclick="mudaCor('#801815', this)" id="vermelho-carmim" class="caixa-cores"></div>
																			<div onclick="mudaCor('#65092d', this)" id="bordo" class="caixa-cores"></div>
																			<div onclick="mudaCor('#45061f', this)" id="bordo-puc" class="caixa-cores"></div>
																		</div>
																	</div>
															</div>
														</div>

													</div>
													<div class="lista-cores-row row-impressos-camisa">

														<div class="name-cor name-cor-bermuda">
															<p>Oceânica</p>
															<div onclick="abrirMenu(this)" class="caixa-cor-escolhida caixa-cor-oceanica-camisa">
																<div id="cores-impressao-oceanica" class="menu-cores">
																	<div class="menu-cores-row">
																		<div onclick="mudaCorTexto('#ffffff', this)" id="branco" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#ededed', this)" id="prata" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#9e9e9e', this)" id="cinza" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#343434', this)" id="cinza-chumbo" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#000000', this)" id="preto" class="caixa-cores"></div>
																	</div>
																	<div class="menu-cores-row">
																		<div onclick="mudaCorTexto('#a2cff0', this)" id="celeste-claro" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#71aad4', this)" id="celeste-escuro" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#082890', this)" id="royal" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#021c3b', this)" id="marinho" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#011023', this)" id="marinho-noite" class="caixa-cores"></div>
																	</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCorTexto('#a3bd31', this)" id="verde-maca" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#70a83b', this)" id="verde" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#009045', this)" id="verde-bandeira" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#005425', this)" id="verde-musgo" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#586a1c', this)" id="verde-militar" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCorTexto('#cfee4a', this)" id="verde-siciliano" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#a2cbbe', this)" id="verde-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#80b3a3', this)" id="verde-agua" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#30a683', this)" id="tyffany" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#104969', this)" id="petroleo" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCorTexto('#edcc90', this)" id="pessego" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#877844', this)" id="dourado-claro" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#806c28', this)" id="dourado-escuro" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#594f42', this)" id="marrom-claro" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#382f2b', this)" id="marrom-escuro" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCorTexto('#fef271', this)" id="amarelo-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#ffff00', this)" id="amarelo-canario" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#f6d101', this)" id="amarelo-branco-do-brasil" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#db9600', this)" id="laranja-claro" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#ce6b03', this)" id="laranja-abobora" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCorTexto('#dca3c6', this)" id="rosa-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#c45293', this)" id="rosa-escuro" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#c40f77', this)" id="pink" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#8165a2', this)" id="lilas" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#2f004a', this)" id="roxo" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCorTexto('#bf083c', this)" id="vermelho-melancia" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#bf0811', this)" id="vermelho" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#801815', this)" id="vermelho-carmim" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#65092d', this)" id="bordo" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#45061f', this)" id="bordo-puc" class="caixa-cores"></div>
																		</div>
																	</div>
															</div>

														</div>
														<div class="name-cor name-cor-laterais">
															<p class="texto-margem-dif">Numero</p>
															<div onclick="abrirMenu(this)" class="caixa-cor-escolhida cor-laterais caixa-cor-numero">
																<div id="cores-impressao-numero" class="menu-cores menu-cores-numero menu-cores-ultimo ">
																	<div class="menu-cores-row">
																		<div onclick="mudaCorTexto('#ffffff', this)" id="branco" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#ededed', this)" id="prata" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#9e9e9e', this)" id="cinza" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#343434', this)" id="cinza-chumbo" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#000000', this)" id="preto" class="caixa-cores"></div>
																	</div>
																	<div class="menu-cores-row">
																		<div onclick="mudaCorTexto('#a2cff0', this)" id="celeste-claro" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#71aad4', this)" id="celeste-escuro" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#082890', this)" id="royal" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#021c3b', this)" id="marinho" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#011023', this)" id="marinho-noite" class="caixa-cores"></div>
																	</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCorTexto('#a3bd31', this)" id="verde-maca" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#70a83b', this)" id="verde" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#009045', this)" id="verde-bandeira" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#005425', this)" id="verde-musgo" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#586a1c', this)" id="verde-militar" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCorTexto('#cfee4a', this)" id="verde-siciliano" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#a2cbbe', this)" id="verde-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#80b3a3', this)" id="verde-agua" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#30a683', this)" id="tyffany" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#104969', this)" id="petroleo" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCorTexto('#edcc90', this)" id="pessego" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#877844', this)" id="dourado-claro" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#806c28', this)" id="dourado-escuro" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#594f42', this)" id="marrom-claro" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#382f2b', this)" id="marrom-escuro" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCorTexto('#fef271', this)" id="amarelo-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#ffff00', this)" id="amarelo-canario" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#f6d101', this)" id="amarelo-branco-do-brasil" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#db9600', this)" id="laranja-claro" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#ce6b03', this)" id="laranja-abobora" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCorTexto('#dca3c6', this)" id="rosa-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#c45293', this)" id="rosa-escuro" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#c40f77', this)" id="pink" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#8165a2', this)" id="lilas" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#2f004a', this)" id="roxo" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCorTexto('#bf083c', this)" id="vermelho-melancia" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#bf0811', this)" id="vermelho" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#801815', this)" id="vermelho-carmim" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#65092d', this)" id="bordo" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#45061f', this)" id="bordo-puc" class="caixa-cores"></div>
																		</div>
																	</div>
															</div>
														</div>
														<div class="name-cor name-cor-laterais">
															<p class="texto-margem-dif">Nome</p>
															<div onclick="abrirMenu(this)" class="caixa-cor-escolhida caixa-cor-nome">
																<div id="cores-impressao-nome" class="menu-cores menu-cores-nome menu-cores-ultimo">
																	<div class="menu-cores-row">
																		<div onclick="mudaCorTexto('#ffffff', this)" id="branco" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#ededed', this)" id="prata" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#9e9e9e', this)" id="cinza" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#343434', this)" id="cinza-chumbo" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#000000', this)" id="preto" class="caixa-cores"></div>
																	</div>
																	<div class="menu-cores-row">
																		<div onclick="mudaCorTexto('#a2cff0', this)" id="celeste-claro" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#71aad4', this)" id="celeste-escuro" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#082890', this)" id="royal" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#021c3b', this)" id="marinho" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#011023', this)" id="marinho-noite" class="caixa-cores"></div>
																	</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCorTexto('#a3bd31', this)" id="verde-maca" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#70a83b', this)" id="verde" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#009045', this)" id="verde-bandeira" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#005425', this)" id="verde-musgo" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#586a1c', this)" id="verde-militar" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCorTexto('#cfee4a', this)" id="verde-siciliano" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#a2cbbe', this)" id="verde-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#80b3a3', this)" id="verde-agua" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#30a683', this)" id="tyffany" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#104969', this)" id="petroleo" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCorTexto('#edcc90', this)" id="pessego" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#877844', this)" id="dourado-claro" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#806c28', this)" id="dourado-escuro" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#594f42', this)" id="marrom-claro" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#382f2b', this)" id="marrom-escuro" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCorTexto('#fef271', this)" id="amarelo-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#ffff00', this)" id="amarelo-canario" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#f6d101', this)" id="amarelo-branco-do-brasil" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#db9600', this)" id="laranja-claro" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#ce6b03', this)" id="laranja-abobora" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCorTexto('#dca3c6', this)" id="rosa-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#c45293', this)" id="rosa-escuro" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#c40f77', this)" id="pink" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#8165a2', this)" id="lilas" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#2f004a', this)" id="roxo" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCorTexto('#bf083c', this)" id="vermelho-melancia" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#bf0811', this)" id="vermelho" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#801815', this)" id="vermelho-carmim" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#65092d', this)" id="bordo" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#45061f', this)" id="bordo-puc" class="caixa-cores"></div>
																		</div>
																	</div>
															</div>
														</div>
														<div class="name-cor name-cor-laterais">
															<p class="texto-margem-dif">Escudo</p>
															<div onclick="abrirMenu(this)" class="caixa-cor-escolhida caixa-cor-escudo">
																<div id="cores-impressao-escudo" class="menu-cores menu-cores-ultimo">
																	<div class="menu-cores-row">
																		<div onclick="mudaCorTexto('#ffffff', this)" id="branco" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#ededed', this)" id="prata" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#9e9e9e', this)" id="cinza" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#343434', this)" id="cinza-chumbo" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#000000', this)" id="preto" class="caixa-cores"></div>
																	</div>
																	<div class="menu-cores-row">
																		<div onclick="mudaCorTexto('#a2cff0', this)" id="celeste-claro" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#71aad4', this)" id="celeste-escuro" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#082890', this)" id="royal" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#021c3b', this)" id="marinho" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#011023', this)" id="marinho-noite" class="caixa-cores"></div>
																	</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCorTexto('#a3bd31', this)" id="verde-maca" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#70a83b', this)" id="verde" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#009045', this)" id="verde-bandeira" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#005425', this)" id="verde-musgo" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#586a1c', this)" id="verde-militar" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCorTexto('#cfee4a', this)" id="verde-siciliano" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#a2cbbe', this)" id="verde-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#80b3a3', this)" id="verde-agua" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#30a683', this)" id="tyffany" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#104969', this)" id="petroleo" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCorTexto('#edcc90', this)" id="pessego" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#877844', this)" id="dourado-claro" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#806c28', this)" id="dourado-escuro" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#594f42', this)" id="marrom-claro" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#382f2b', this)" id="marrom-escuro" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCorTexto('#fef271', this)" id="amarelo-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#ffff00', this)" id="amarelo-canario" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#f6d101', this)" id="amarelo-branco-do-brasil" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#db9600', this)" id="laranja-claro" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#ce6b03', this)" id="laranja-abobora" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCorTexto('#dca3c6', this)" id="rosa-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#c45293', this)" id="rosa-escuro" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#c40f77', this)" id="pink" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#8165a2', this)" id="lilas" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#2f004a', this)" id="roxo" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCorTexto('#bf083c', this)" id="vermelho-melancia" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#bf0811', this)" id="vermelho" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#801815', this)" id="vermelho-carmim" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#65092d', this)" id="bordo" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#45061f', this)" id="bordo-puc" class="caixa-cores"></div>
																		</div>
																	</div>
															</div>
														</div>
													</div>
												</div>
												<div class="lista-cores-extra">
													<h2 class="titulos-menu cores-calcao-titulo">Cores do Calção</h2>
													<div class="lista-cores-row row-estampa-calcao">
														<div class="name-cor name-cor-estampa-calcao">
															<p class="cardeais">1ª</p>
															<div onclick="abrirMenu(this)" class="caixa-cor-escolhida cor-estampa">
																<div id="cores-calcao-primaria" class="menu-cores menu-cores-direita">
																	<div class="menu-cores-row">
																		<div onclick="mudaCor('#ffffff', this)" id="branco" class="caixa-cores"></div>
																		<div onclick="mudaCor('#ededed', this)" id="prata" class="caixa-cores"></div>
																		<div onclick="mudaCor('#9e9e9e', this)" id="cinza" class="caixa-cores"></div>
																		<div onclick="mudaCor('#343434', this)" id="cinza-chumbo" class="caixa-cores"></div>
																		<div onclick="mudaCor('#000000', this)" id="preto" class="caixa-cores"></div>
																	</div>
																	<div class="menu-cores-row">
																		<div onclick="mudaCor('#a2cff0', this)" id="celeste-claro" class="caixa-cores"></div>
																		<div onclick="mudaCor('#71aad4', this)" id="celeste-escuro" class="caixa-cores"></div>
																		<div onclick="mudaCor('#082890', this)" id="royal" class="caixa-cores"></div>
																		<div onclick="mudaCor('#021c3b', this)" id="marinho" class="caixa-cores"></div>
																		<div onclick="mudaCor('#011023', this)" id="marinho-noite" class="caixa-cores"></div>
																	</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#a3bd31', this)" id="verde-maca" class="caixa-cores"></div>
																			<div onclick="mudaCor('#70a83b', this)" id="verde" class="caixa-cores"></div>
																			<div onclick="mudaCor('#009045', this)" id="verde-bandeira" class="caixa-cores"></div>
																			<div onclick="mudaCor('#005425', this)" id="verde-musgo" class="caixa-cores"></div>
																			<div onclick="mudaCor('#586a1c', this)" id="verde-militar" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#cfee4a', this)" id="verde-siciliano" class="caixa-cores"></div>
																			<div onclick="mudaCor('#a2cbbe', this)" id="verde-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCor('#80b3a3', this)" id="verde-agua" class="caixa-cores"></div>
																			<div onclick="mudaCor('#30a683', this)" id="tyffany" class="caixa-cores"></div>
																			<div onclick="mudaCor('#104969', this)" id="petroleo" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#edcc90', this)" id="pessego" class="caixa-cores"></div>
																			<div onclick="mudaCor('#877844', this)" id="dourado-claro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#806c28', this)" id="dourado-escuro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#594f42', this)" id="marrom-claro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#382f2b', this)" id="marrom-escuro" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#fef271', this)" id="amarelo-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCor('#ffff00', this)" id="amarelo-canario" class="caixa-cores"></div>
																			<div onclick="mudaCor('#f6d101', this)" id="amarelo-branco-do-brasil" class="caixa-cores"></div>
																			<div onclick="mudaCor('#db9600', this)" id="laranja-claro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#ce6b03', this)" id="laranja-abobora" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#dca3c6', this)" id="rosa-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCor('#c45293', this)" id="rosa-escuro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#c40f77', this)" id="pink" class="caixa-cores"></div>
																			<div onclick="mudaCor('#8165a2', this)" id="lilas" class="caixa-cores"></div>
																			<div onclick="mudaCor('#2f004a', this)" id="roxo" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#bf083c', this)" id="vermelho-melancia" class="caixa-cores"></div>
																			<div onclick="mudaCor('#bf0811', this)" id="vermelho" class="caixa-cores"></div>
																			<div onclick="mudaCor('#801815', this)" id="vermelho-carmim" class="caixa-cores"></div>
																			<div onclick="mudaCor('#65092d', this)" id="bordo" class="caixa-cores"></div>
																			<div onclick="mudaCor('#45061f', this)" id="bordo-puc" class="caixa-cores"></div>
																		</div>
																	</div>
															</div>

														</div>
														<div class="name-cor name-cor-estampa-calcao">
															<p class="cardeais">2ª</p>
															<div onclick="abrirMenu(this)" class="caixa-cor-escolhida cor-secundaria">
																<div id="cores-calcao-secundaria" class="menu-cores menu-cores-direita-ultimo">
																	<div class="menu-cores-row">
																		<div onclick="mudaCor('#ffffff', this)" id="branco" class="caixa-cores"></div>
																		<div onclick="mudaCor('#ededed', this)" id="prata" class="caixa-cores"></div>
																		<div onclick="mudaCor('#9e9e9e', this)" id="cinza" class="caixa-cores"></div>
																		<div onclick="mudaCor('#343434', this)" id="cinza-chumbo" class="caixa-cores"></div>
																		<div onclick="mudaCor('#000000', this)" id="preto" class="caixa-cores"></div>
																	</div>
																	<div class="menu-cores-row">
																		<div onclick="mudaCor('#a2cff0', this)" id="celeste-claro" class="caixa-cores"></div>
																		<div onclick="mudaCor('#71aad4', this)" id="celeste-escuro" class="caixa-cores"></div>
																		<div onclick="mudaCor('#082890', this)" id="royal" class="caixa-cores"></div>
																		<div onclick="mudaCor('#021c3b', this)" id="marinho" class="caixa-cores"></div>
																		<div onclick="mudaCor('#011023', this)" id="marinho-noite" class="caixa-cores"></div>
																	</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#a3bd31', this)" id="verde-maca" class="caixa-cores"></div>
																			<div onclick="mudaCor('#70a83b', this)" id="verde" class="caixa-cores"></div>
																			<div onclick="mudaCor('#009045', this)" id="verde-bandeira" class="caixa-cores"></div>
																			<div onclick="mudaCor('#005425', this)" id="verde-musgo" class="caixa-cores"></div>
																			<div onclick="mudaCor('#586a1c', this)" id="verde-militar" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#cfee4a', this)" id="verde-siciliano" class="caixa-cores"></div>
																			<div onclick="mudaCor('#a2cbbe', this)" id="verde-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCor('#80b3a3', this)" id="verde-agua" class="caixa-cores"></div>
																			<div onclick="mudaCor('#30a683', this)" id="tyffany" class="caixa-cores"></div>
																			<div onclick="mudaCor('#104969', this)" id="petroleo" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#edcc90', this)" id="pessego" class="caixa-cores"></div>
																			<div onclick="mudaCor('#877844', this)" id="dourado-claro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#806c28', this)" id="dourado-escuro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#594f42', this)" id="marrom-claro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#382f2b', this)" id="marrom-escuro" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#fef271', this)" id="amarelo-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCor('#ffff00', this)" id="amarelo-canario" class="caixa-cores"></div>
																			<div onclick="mudaCor('#f6d101', this)" id="amarelo-branco-do-brasil" class="caixa-cores"></div>
																			<div onclick="mudaCor('#db9600', this)" id="laranja-claro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#ce6b03', this)" id="laranja-abobora" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#dca3c6', this)" id="rosa-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCor('#c45293', this)" id="rosa-escuro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#c40f77', this)" id="pink" class="caixa-cores"></div>
																			<div onclick="mudaCor('#8165a2', this)" id="lilas" class="caixa-cores"></div>
																			<div onclick="mudaCor('#2f004a', this)" id="roxo" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#bf083c', this)" id="vermelho-melancia" class="caixa-cores"></div>
																			<div onclick="mudaCor('#bf0811', this)" id="vermelho" class="caixa-cores"></div>
																			<div onclick="mudaCor('#801815', this)" id="vermelho-carmim" class="caixa-cores"></div>
																			<div onclick="mudaCor('#65092d', this)" id="bordo" class="caixa-cores"></div>
																			<div onclick="mudaCor('#45061f', this)" id="bordo-puc" class="caixa-cores"></div>
																		</div>
																	</div>
															</div>
														</div>
														<div class="name-cor name-cor-estampa-calcao">
															<p class="cardeais">3ª</p>
															<div onclick="abrirMenu(this)" class="caixa-cor-escolhida cor-secundaria">
																<div id="cores-calcao-terciaria" class="menu-cores menu-cores-direita-ultimo">
																	<div class="menu-cores-row">
																		<div onclick="mudaCor('#ffffff', this)" id="branco" class="caixa-cores"></div>
																		<div onclick="mudaCor('#ededed', this)" id="prata" class="caixa-cores"></div>
																		<div onclick="mudaCor('#9e9e9e', this)" id="cinza" class="caixa-cores"></div>
																		<div onclick="mudaCor('#343434', this)" id="cinza-chumbo" class="caixa-cores"></div>
																		<div onclick="mudaCor('#000000', this)" id="preto" class="caixa-cores"></div>
																	</div>
																	<div class="menu-cores-row">
																		<div onclick="mudaCor('#a2cff0', this)" id="celeste-claro" class="caixa-cores"></div>
																		<div onclick="mudaCor('#71aad4', this)" id="celeste-escuro" class="caixa-cores"></div>
																		<div onclick="mudaCor('#082890', this)" id="royal" class="caixa-cores"></div>
																		<div onclick="mudaCor('#021c3b', this)" id="marinho" class="caixa-cores"></div>
																		<div onclick="mudaCor('#011023', this)" id="marinho-noite" class="caixa-cores"></div>
																	</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#a3bd31', this)" id="verde-maca" class="caixa-cores"></div>
																			<div onclick="mudaCor('#70a83b', this)" id="verde" class="caixa-cores"></div>
																			<div onclick="mudaCor('#009045', this)" id="verde-bandeira" class="caixa-cores"></div>
																			<div onclick="mudaCor('#005425', this)" id="verde-musgo" class="caixa-cores"></div>
																			<div onclick="mudaCor('#586a1c', this)" id="verde-militar" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#cfee4a', this)" id="verde-siciliano" class="caixa-cores"></div>
																			<div onclick="mudaCor('#a2cbbe', this)" id="verde-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCor('#80b3a3', this)" id="verde-agua" class="caixa-cores"></div>
																			<div onclick="mudaCor('#30a683', this)" id="tyffany" class="caixa-cores"></div>
																			<div onclick="mudaCor('#104969', this)" id="petroleo" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#edcc90', this)" id="pessego" class="caixa-cores"></div>
																			<div onclick="mudaCor('#877844', this)" id="dourado-claro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#806c28', this)" id="dourado-escuro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#594f42', this)" id="marrom-claro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#382f2b', this)" id="marrom-escuro" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#fef271', this)" id="amarelo-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCor('#ffff00', this)" id="amarelo-canario" class="caixa-cores"></div>
																			<div onclick="mudaCor('#f6d101', this)" id="amarelo-branco-do-brasil" class="caixa-cores"></div>
																			<div onclick="mudaCor('#db9600', this)" id="laranja-claro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#ce6b03', this)" id="laranja-abobora" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#dca3c6', this)" id="rosa-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCor('#c45293', this)" id="rosa-escuro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#c40f77', this)" id="pink" class="caixa-cores"></div>
																			<div onclick="mudaCor('#8165a2', this)" id="lilas" class="caixa-cores"></div>
																			<div onclick="mudaCor('#2f004a', this)" id="roxo" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#bf083c', this)" id="vermelho-melancia" class="caixa-cores"></div>
																			<div onclick="mudaCor('#bf0811', this)" id="vermelho" class="caixa-cores"></div>
																			<div onclick="mudaCor('#801815', this)" id="vermelho-carmim" class="caixa-cores"></div>
																			<div onclick="mudaCor('#65092d', this)" id="bordo" class="caixa-cores"></div>
																			<div onclick="mudaCor('#45061f', this)" id="bordo-puc" class="caixa-cores"></div>
																		</div>
																	</div>
															</div>
														</div>
														<div class="name-cor name-cor-estampa-calcao">
															<p class="cardeais">4ª</p>
															<div onclick="abrirMenu(this)" class="caixa-cor-escolhida cor-secundaria">
																<div id="cores-calcao-quaternaria" class="menu-cores menu-cores-direita-ultimo">
																	<div class="menu-cores-row">
																		<div onclick="mudaCor('#ffffff', this)" id="branco" class="caixa-cores"></div>
																		<div onclick="mudaCor('#ededed', this)" id="prata" class="caixa-cores"></div>
																		<div onclick="mudaCor('#9e9e9e', this)" id="cinza" class="caixa-cores"></div>
																		<div onclick="mudaCor('#343434', this)" id="cinza-chumbo" class="caixa-cores"></div>
																		<div onclick="mudaCor('#000000', this)" id="preto" class="caixa-cores"></div>
																	</div>
																	<div class="menu-cores-row">
																		<div onclick="mudaCor('#a2cff0', this)" id="celeste-claro" class="caixa-cores"></div>
																		<div onclick="mudaCor('#71aad4', this)" id="celeste-escuro" class="caixa-cores"></div>
																		<div onclick="mudaCor('#082890', this)" id="royal" class="caixa-cores"></div>
																		<div onclick="mudaCor('#021c3b', this)" id="marinho" class="caixa-cores"></div>
																		<div onclick="mudaCor('#011023', this)" id="marinho-noite" class="caixa-cores"></div>
																	</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#a3bd31', this)" id="verde-maca" class="caixa-cores"></div>
																			<div onclick="mudaCor('#70a83b', this)" id="verde" class="caixa-cores"></div>
																			<div onclick="mudaCor('#009045', this)" id="verde-bandeira" class="caixa-cores"></div>
																			<div onclick="mudaCor('#005425', this)" id="verde-musgo" class="caixa-cores"></div>
																			<div onclick="mudaCor('#586a1c', this)" id="verde-militar" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#cfee4a', this)" id="verde-siciliano" class="caixa-cores"></div>
																			<div onclick="mudaCor('#a2cbbe', this)" id="verde-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCor('#80b3a3', this)" id="verde-agua" class="caixa-cores"></div>
																			<div onclick="mudaCor('#30a683', this)" id="tyffany" class="caixa-cores"></div>
																			<div onclick="mudaCor('#104969', this)" id="petroleo" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#edcc90', this)" id="pessego" class="caixa-cores"></div>
																			<div onclick="mudaCor('#877844', this)" id="dourado-claro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#806c28', this)" id="dourado-escuro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#594f42', this)" id="marrom-claro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#382f2b', this)" id="marrom-escuro" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#fef271', this)" id="amarelo-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCor('#ffff00', this)" id="amarelo-canario" class="caixa-cores"></div>
																			<div onclick="mudaCor('#f6d101', this)" id="amarelo-branco-do-brasil" class="caixa-cores"></div>
																			<div onclick="mudaCor('#db9600', this)" id="laranja-claro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#ce6b03', this)" id="laranja-abobora" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#dca3c6', this)" id="rosa-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCor('#c45293', this)" id="rosa-escuro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#c40f77', this)" id="pink" class="caixa-cores"></div>
																			<div onclick="mudaCor('#8165a2', this)" id="lilas" class="caixa-cores"></div>
																			<div onclick="mudaCor('#2f004a', this)" id="roxo" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#bf083c', this)" id="vermelho-melancia" class="caixa-cores"></div>
																			<div onclick="mudaCor('#bf0811', this)" id="vermelho" class="caixa-cores"></div>
																			<div onclick="mudaCor('#801815', this)" id="vermelho-carmim" class="caixa-cores"></div>
																			<div onclick="mudaCor('#65092d', this)" id="bordo" class="caixa-cores"></div>
																			<div onclick="mudaCor('#45061f', this)" id="bordo-puc" class="caixa-cores"></div>
																		</div>
																	</div>
															</div>
														</div>
													</div>
													<div class="lista-cores-row row-detalhe-calcao">
														<div class="name-cor name-cor-detalhe-calcao">
															<p>Lateral</p>
															<div onclick="abrirMenu(this)" class="caixa-cor-escolhida cor-estampa">
																<div id="cores-calcao-detalhe-lateral" class="menu-cores menu-cores-direita">
																	<div class="menu-cores-row">
																		<div onclick="mudaCor('#ffffff', this)" id="branco" class="caixa-cores"></div>
																		<div onclick="mudaCor('#ededed', this)" id="prata" class="caixa-cores"></div>
																		<div onclick="mudaCor('#9e9e9e', this)" id="cinza" class="caixa-cores"></div>
																		<div onclick="mudaCor('#343434', this)" id="cinza-chumbo" class="caixa-cores"></div>
																		<div onclick="mudaCor('#000000', this)" id="preto" class="caixa-cores"></div>
																	</div>
																	<div class="menu-cores-row">
																		<div onclick="mudaCor('#a2cff0', this)" id="celeste-claro" class="caixa-cores"></div>
																		<div onclick="mudaCor('#71aad4', this)" id="celeste-escuro" class="caixa-cores"></div>
																		<div onclick="mudaCor('#082890', this)" id="royal" class="caixa-cores"></div>
																		<div onclick="mudaCor('#021c3b', this)" id="marinho" class="caixa-cores"></div>
																		<div onclick="mudaCor('#011023', this)" id="marinho-noite" class="caixa-cores"></div>
																	</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#a3bd31', this)" id="verde-maca" class="caixa-cores"></div>
																			<div onclick="mudaCor('#70a83b', this)" id="verde" class="caixa-cores"></div>
																			<div onclick="mudaCor('#009045', this)" id="verde-bandeira" class="caixa-cores"></div>
																			<div onclick="mudaCor('#005425', this)" id="verde-musgo" class="caixa-cores"></div>
																			<div onclick="mudaCor('#586a1c', this)" id="verde-militar" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#cfee4a', this)" id="verde-siciliano" class="caixa-cores"></div>
																			<div onclick="mudaCor('#a2cbbe', this)" id="verde-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCor('#80b3a3', this)" id="verde-agua" class="caixa-cores"></div>
																			<div onclick="mudaCor('#30a683', this)" id="tyffany" class="caixa-cores"></div>
																			<div onclick="mudaCor('#104969', this)" id="petroleo" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#edcc90', this)" id="pessego" class="caixa-cores"></div>
																			<div onclick="mudaCor('#877844', this)" id="dourado-claro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#806c28', this)" id="dourado-escuro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#594f42', this)" id="marrom-claro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#382f2b', this)" id="marrom-escuro" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#fef271', this)" id="amarelo-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCor('#ffff00', this)" id="amarelo-canario" class="caixa-cores"></div>
																			<div onclick="mudaCor('#f6d101', this)" id="amarelo-branco-do-brasil" class="caixa-cores"></div>
																			<div onclick="mudaCor('#db9600', this)" id="laranja-claro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#ce6b03', this)" id="laranja-abobora" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#dca3c6', this)" id="rosa-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCor('#c45293', this)" id="rosa-escuro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#c40f77', this)" id="pink" class="caixa-cores"></div>
																			<div onclick="mudaCor('#8165a2', this)" id="lilas" class="caixa-cores"></div>
																			<div onclick="mudaCor('#2f004a', this)" id="roxo" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#bf083c', this)" id="vermelho-melancia" class="caixa-cores"></div>
																			<div onclick="mudaCor('#bf0811', this)" id="vermelho" class="caixa-cores"></div>
																			<div onclick="mudaCor('#801815', this)" id="vermelho-carmim" class="caixa-cores"></div>
																			<div onclick="mudaCor('#65092d', this)" id="bordo" class="caixa-cores"></div>
																			<div onclick="mudaCor('#45061f', this)" id="bordo-puc" class="caixa-cores"></div>
																		</div>
																	</div>
															</div>

														</div>

													</div>
													<div class="lista-cores-row row-impressos-calcao">
														<div class="name-cor name-cor-estampa">
															<p>Oceânica</p>
															<div onclick="abrirMenu(this)" class="caixa-cor-escolhida cor-estampa caixa-cor-oceanica-calcao">
																<div id="cores-calcao-impressao-oceanica" class="menu-cores menu-cores-direita">
																	<div class="menu-cores-row">
																		<div onclick="mudaCorTexto('#ffffff', this)" id="branco" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#ededed', this)" id="prata" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#9e9e9e', this)" id="cinza" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#343434', this)" id="cinza-chumbo" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#000000', this)" id="preto" class="caixa-cores"></div>
																	</div>
																	<div class="menu-cores-row">
																		<div onclick="mudaCorTexto('#a2cff0', this)" id="celeste-claro" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#71aad4', this)" id="celeste-escuro" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#082890', this)" id="royal" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#021c3b', this)" id="marinho" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#011023', this)" id="marinho-noite" class="caixa-cores"></div>
																	</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCorTexto('#a3bd31', this)" id="verde-maca" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#70a83b', this)" id="verde" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#009045', this)" id="verde-bandeira" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#005425', this)" id="verde-musgo" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#586a1c', this)" id="verde-militar" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCorTexto('#cfee4a', this)" id="verde-siciliano" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#a2cbbe', this)" id="verde-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#80b3a3', this)" id="verde-agua" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#30a683', this)" id="tyffany" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#104969', this)" id="petroleo" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCorTexto('#edcc90', this)" id="pessego" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#877844', this)" id="dourado-claro" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#806c28', this)" id="dourado-escuro" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#594f42', this)" id="marrom-claro" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#382f2b', this)" id="marrom-escuro" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCorTexto('#fef271', this)" id="amarelo-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#ffff00', this)" id="amarelo-canario" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#f6d101', this)" id="amarelo-branco-do-brasil" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#db9600', this)" id="laranja-claro" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#ce6b03', this)" id="laranja-abobora" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCorTexto('#dca3c6', this)" id="rosa-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#c45293', this)" id="rosa-escuro" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#c40f77', this)" id="pink" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#8165a2', this)" id="lilas" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#2f004a', this)" id="roxo" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCorTexto('#bf083c', this)" id="vermelho-melancia" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#bf0811', this)" id="vermelho" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#801815', this)" id="vermelho-carmim" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#65092d', this)" id="bordo" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#45061f', this)" id="bordo-puc" class="caixa-cores"></div>
																		</div>
																	</div>
															</div>

														</div>
														<div class="name-cor name-cor-secundaria">
															<p>Número</p>
															<div onclick="abrirMenu(this)" class="caixa-cor-escolhida cor-secundaria caixa-cor-numero-calcao">
																<div id="cores-calcao-impressao-numero" class="menu-cores menu-cores-direita-ultimo">
																	<div class="menu-cores-row">
																		<div onclick="mudaCorTexto('#ffffff', this)" id="branco" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#ededed', this)" id="prata" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#9e9e9e', this)" id="cinza" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#343434', this)" id="cinza-chumbo" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#000000', this)" id="preto" class="caixa-cores"></div>
																	</div>
																	<div class="menu-cores-row">
																		<div onclick="mudaCorTexto('#a2cff0', this)" id="celeste-claro" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#71aad4', this)" id="celeste-escuro" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#082890', this)" id="royal" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#021c3b', this)" id="marinho" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#011023', this)" id="marinho-noite" class="caixa-cores"></div>
																	</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCorTexto('#a3bd31', this)" id="verde-maca" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#70a83b', this)" id="verde" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#009045', this)" id="verde-bandeira" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#005425', this)" id="verde-musgo" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#586a1c', this)" id="verde-militar" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCorTexto('#cfee4a', this)" id="verde-siciliano" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#a2cbbe', this)" id="verde-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#80b3a3', this)" id="verde-agua" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#30a683', this)" id="tyffany" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#104969', this)" id="petroleo" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCorTexto('#edcc90', this)" id="pessego" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#877844', this)" id="dourado-claro" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#806c28', this)" id="dourado-escuro" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#594f42', this)" id="marrom-claro" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#382f2b', this)" id="marrom-escuro" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCorTexto('#fef271', this)" id="amarelo-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#ffff00', this)" id="amarelo-canario" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#f6d101', this)" id="amarelo-branco-do-brasil" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#db9600', this)" id="laranja-claro" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#ce6b03', this)" id="laranja-abobora" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCorTexto('#dca3c6', this)" id="rosa-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#c45293', this)" id="rosa-escuro" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#c40f77', this)" id="pink" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#8165a2', this)" id="lilas" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#2f004a', this)" id="roxo" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCorTexto('#bf083c', this)" id="vermelho-melancia" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#bf0811', this)" id="vermelho" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#801815', this)" id="vermelho-carmim" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#65092d', this)" id="bordo" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#45061f', this)" id="bordo-puc" class="caixa-cores"></div>
																		</div>
																	</div>
															</div>
														</div>

													</div>
												</div>
												<div class="lista-cores-extra">
													<h2 class="titulos-menu cores-meiao-titulo">Cor meião</h2>
													<div class="lista-cores-row row-meia">
														<div class="name-cor name-cor-estampa">
															<p class="texto-meia">1ª</p>
															<div onclick="abrirMenu(this)" class="caixa-cor-escolhida cor-estampa">
																<div id="cores-meiao" class="menu-cores menu-cores-direita">
																	<div class="menu-cores-row">
																		<div onclick="mudaCor('#ffffff', this)" id="branco" class="caixa-cores"></div>
																		<div onclick="mudaCor('#ededed', this)" id="prata" class="caixa-cores"></div>
																		<div onclick="mudaCor('#9e9e9e', this)" id="cinza" class="caixa-cores"></div>
																		<div onclick="mudaCor('#343434', this)" id="cinza-chumbo" class="caixa-cores"></div>
																		<div onclick="mudaCor('#000000', this)" id="preto" class="caixa-cores"></div>
																	</div>
																	<div class="menu-cores-row">
																		<div onclick="mudaCor('#a2cff0', this)" id="celeste-claro" class="caixa-cores"></div>
																		<div onclick="mudaCor('#71aad4', this)" id="celeste-escuro" class="caixa-cores"></div>
																		<div onclick="mudaCor('#082890', this)" id="royal" class="caixa-cores"></div>
																		<div onclick="mudaCor('#021c3b', this)" id="marinho" class="caixa-cores"></div>
																		<div onclick="mudaCor('#011023', this)" id="marinho-noite" class="caixa-cores"></div>
																	</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#a3bd31', this)" id="verde-maca" class="caixa-cores"></div>
																			<div onclick="mudaCor('#70a83b', this)" id="verde" class="caixa-cores"></div>
																			<div onclick="mudaCor('#009045', this)" id="verde-bandeira" class="caixa-cores"></div>
																			<div onclick="mudaCor('#005425', this)" id="verde-musgo" class="caixa-cores"></div>
																			<div onclick="mudaCor('#586a1c', this)" id="verde-militar" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#cfee4a', this)" id="verde-siciliano" class="caixa-cores"></div>
																			<div onclick="mudaCor('#a2cbbe', this)" id="verde-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCor('#80b3a3', this)" id="verde-agua" class="caixa-cores"></div>
																			<div onclick="mudaCor('#30a683', this)" id="tyffany" class="caixa-cores"></div>
																			<div onclick="mudaCor('#104969', this)" id="petroleo" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#edcc90', this)" id="pessego" class="caixa-cores"></div>
																			<div onclick="mudaCor('#877844', this)" id="dourado-claro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#806c28', this)" id="dourado-escuro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#594f42', this)" id="marrom-claro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#382f2b', this)" id="marrom-escuro" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#fef271', this)" id="amarelo-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCor('#ffff00', this)" id="amarelo-canario" class="caixa-cores"></div>
																			<div onclick="mudaCor('#f6d101', this)" id="amarelo-branco-do-brasil" class="caixa-cores"></div>
																			<div onclick="mudaCor('#db9600', this)" id="laranja-claro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#ce6b03', this)" id="laranja-abobora" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#dca3c6', this)" id="rosa-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCor('#c45293', this)" id="rosa-escuro" class="caixa-cores"></div>
																			<div onclick="mudaCor('#c40f77', this)" id="pink" class="caixa-cores"></div>
																			<div onclick="mudaCor('#8165a2', this)" id="lilas" class="caixa-cores"></div>
																			<div onclick="mudaCor('#2f004a', this)" id="roxo" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCor('#bf083c', this)" id="vermelho-melancia" class="caixa-cores"></div>
																			<div onclick="mudaCor('#bf0811', this)" id="vermelho" class="caixa-cores"></div>
																			<div onclick="mudaCor('#801815', this)" id="vermelho-carmim" class="caixa-cores"></div>
																			<div onclick="mudaCor('#65092d', this)" id="bordo" class="caixa-cores"></div>
																			<div onclick="mudaCor('#45061f', this)" id="bordo-puc" class="caixa-cores"></div>
																		</div>
																	</div>
															</div>
														</div>
														<div class="name-cor name-cor-oceanica-meia">
															<p class="texto-meia">oceânica</p>
															<div onclick="abrirMenu(this)" class="caixa-cor-escolhida cor-estampa caixa-cor-oceanica-meia">
																<div id="cores-meiao-oceanica" class="menu-cores menu-cores-direita">
																	<div class="menu-cores-row">
																		<div onclick="mudaCorTexto('#ffffff', this)" id="branco" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#ededed', this)" id="prata" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#9e9e9e', this)" id="cinza" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#343434', this)" id="cinza-chumbo" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#000000', this)" id="preto" class="caixa-cores"></div>
																	</div>
																	<div class="menu-cores-row">
																		<div onclick="mudaCorTexto('#a2cff0', this)" id="celeste-claro" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#71aad4', this)" id="celeste-escuro" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#082890', this)" id="royal" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#021c3b', this)" id="marinho" class="caixa-cores"></div>
																		<div onclick="mudaCorTexto('#011023', this)" id="marinho-noite" class="caixa-cores"></div>
																	</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCorTexto('#a3bd31', this)" id="verde-maca" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#70a83b', this)" id="verde" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#009045', this)" id="verde-bandeira" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#005425', this)" id="verde-musgo" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#586a1c', this)" id="verde-militar" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCorTexto('#cfee4a', this)" id="verde-siciliano" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#a2cbbe', this)" id="verde-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#80b3a3', this)" id="verde-agua" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#30a683', this)" id="tyffany" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#104969', this)" id="petroleo" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCorTexto('#edcc90', this)" id="pessego" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#877844', this)" id="dourado-claro" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#806c28', this)" id="dourado-escuro" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#594f42', this)" id="marrom-claro" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#382f2b', this)" id="marrom-escuro" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCorTexto('#fef271', this)" id="amarelo-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#ffff00', this)" id="amarelo-canario" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#f6d101', this)" id="amarelo-branco-do-brasil" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#db9600', this)" id="laranja-claro" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#ce6b03', this)" id="laranja-abobora" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCorTexto('#dca3c6', this)" id="rosa-bebe" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#c45293', this)" id="rosa-escuro" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#c40f77', this)" id="pink" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#8165a2', this)" id="lilas" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#2f004a', this)" id="roxo" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCorTexto('#bf083c', this)" id="vermelho-melancia" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#bf0811', this)" id="vermelho" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#801815', this)" id="vermelho-carmim" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#65092d', this)" id="bordo" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#45061f', this)" id="bordo-puc" class="caixa-cores"></div>
																		</div>
																	</div>
															</div>
														</div>
													</div>

												</div>

											</div>
										</div>



									</div>
									<p class="texto-btn-simulador">cores</p>
									<div class="image-box-btn-simulador">
										<img src="images/simulador/interface-nova/color-icon.png">
									</div>

								</div>


								<div  onclick="abrirMenu(this)" class="botao-simulador botao-simulador-nome">
									<div id="menu-geral-nome" class="menu-geral menu-geral-nome">
											<div class="inputs-caixa-cores-wrap">
												<h2 class="titulos-menu">Escreva seu nome</h2>
												<div class=" cores-input-wrap">
													<input id="input-nome" class="input-nome" type="text" name="nome" placeholder="seu nome" maxlength="12">
													<div class="name-cor name-cor-nome-menu">
														<p>cor do<br>nome</p>
														<div onclick="abrirMenu(this)" class="caixa-cor-escolhida caixa-cor-nome">
																	<div id="cores-nome" class="menu-cores">
																			<div class="menu-cores-row">
																				<div onclick="mudaCorTexto('#ffffff', this)" id="branco" class="caixa-cores"></div>
																				<div onclick="mudaCorTexto('#ededed', this)" id="prata" class="caixa-cores"></div>
																				<div onclick="mudaCorTexto('#9e9e9e', this)" id="cinza" class="caixa-cores"></div>
																				<div onclick="mudaCorTexto('#343434', this)" id="cinza-chumbo" class="caixa-cores"></div>
																				<div onclick="mudaCorTexto('#000000', this)" id="preto" class="caixa-cores"></div>
																			</div>
																			<div class="menu-cores-row">
																				<div onclick="mudaCorTexto('#a2cff0', this)" id="celeste-claro" class="caixa-cores"></div>
																				<div onclick="mudaCorTexto('#71aad4', this)" id="celeste-escuro" class="caixa-cores"></div>
																				<div onclick="mudaCorTexto('#082890', this)" id="royal" class="caixa-cores"></div>
																				<div onclick="mudaCorTexto('#021c3b', this)" id="marinho" class="caixa-cores"></div>
																				<div onclick="mudaCorTexto('#011023', this)" id="marinho-noite" class="caixa-cores"></div>
																			</div>
																				<div class="menu-cores-row">
																					<div onclick="mudaCorTexto('#a3bd31', this)" id="verde-maca" class="caixa-cores"></div>
																					<div onclick="mudaCorTexto('#70a83b', this)" id="verde" class="caixa-cores"></div>
																					<div onclick="mudaCorTexto('#009045', this)" id="verde-bandeira" class="caixa-cores"></div>
																					<div onclick="mudaCorTexto('#005425', this)" id="verde-musgo" class="caixa-cores"></div>
																					<div onclick="mudaCorTexto('#586a1c', this)" id="verde-militar" class="caixa-cores"></div>
																				</div>
																				<div class="menu-cores-row">
																					<div onclick="mudaCorTexto('#cfee4a', this)" id="verde-siciliano" class="caixa-cores"></div>
																					<div onclick="mudaCorTexto('#a2cbbe', this)" id="verde-bebe" class="caixa-cores"></div>
																					<div onclick="mudaCorTexto('#80b3a3', this)" id="verde-agua" class="caixa-cores"></div>
																					<div onclick="mudaCorTexto('#30a683', this)" id="tyffany" class="caixa-cores"></div>
																					<div onclick="mudaCorTexto('#104969', this)" id="petroleo" class="caixa-cores"></div>
																				</div>
																				<div class="menu-cores-row">
																					<div onclick="mudaCorTexto('#edcc90', this)" id="pessego" class="caixa-cores"></div>
																					<div onclick="mudaCorTexto('#877844', this)" id="dourado-claro" class="caixa-cores"></div>
																					<div onclick="mudaCorTexto('#806c28', this)" id="dourado-escuro" class="caixa-cores"></div>
																					<div onclick="mudaCorTexto('#594f42', this)" id="marrom-claro" class="caixa-cores"></div>
																					<div onclick="mudaCorTexto('#382f2b', this)" id="marrom-escuro" class="caixa-cores"></div>
																				</div>
																				<div class="menu-cores-row">
																					<div onclick="mudaCorTexto('#fef271', this)" id="amarelo-bebe" class="caixa-cores"></div>
																					<div onclick="mudaCorTexto('#ffff00', this)" id="amarelo-canario" class="caixa-cores"></div>
																					<div onclick="mudaCorTexto('#f6d101', this)" id="amarelo-branco-do-brasil" class="caixa-cores"></div>
																					<div onclick="mudaCorTexto('#db9600', this)" id="laranja-claro" class="caixa-cores"></div>
																					<div onclick="mudaCorTexto('#ce6b03', this)" id="laranja-abobora" class="caixa-cores"></div>
																				</div>
																				<div class="menu-cores-row">
																					<div onclick="mudaCorTexto('#dca3c6', this)" id="rosa-bebe" class="caixa-cores"></div>
																					<div onclick="mudaCorTexto('#c45293', this)" id="rosa-escuro" class="caixa-cores"></div>
																					<div onclick="mudaCorTexto('#c40f77', this)" id="pink" class="caixa-cores"></div>
																					<div onclick="mudaCorTexto('#8165a2', this)" id="lilas" class="caixa-cores"></div>
																					<div onclick="mudaCorTexto('#2f004a', this)" id="roxo" class="caixa-cores"></div>
																				</div>
																				<div class="menu-cores-row">
																					<div onclick="mudaCorTexto('#bf083c', this)" id="vermelho-melancia" class="caixa-cores"></div>
																					<div onclick="mudaCorTexto('#bf0811', this)" id="vermelho" class="caixa-cores"></div>
																					<div onclick="mudaCorTexto('#801815', this)" id="vermelho-carmim" class="caixa-cores"></div>
																					<div onclick="mudaCorTexto('#65092d', this)" id="bordo" class="caixa-cores"></div>
																					<div onclick="mudaCorTexto('#45061f', this)" id="bordo-puc" class="caixa-cores"></div>
																				</div>
																		</div>
														</div>
													</div>
												</div>
												<div class=" cores-input-wrap">
													<input id="input-numero" class="input-nome" type="text" name="nome" placeholder="numero" maxlength="2">
													<div class="name-cor name-cor-nome-menu">
														<p>cor do<br>número</p>
														<div onclick="abrirMenu(this)" class="caixa-cor-escolhida caixa-cor-numero">
																	<div id="cores-numero" class="menu-cores">
																		<div class="menu-cores-row">
																			<div onclick="mudaCorTexto('#ffffff', this)" id="branco" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#ededed', this)" id="prata" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#9e9e9e', this)" id="cinza" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#343434', this)" id="cinza-chumbo" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#000000', this)" id="preto" class="caixa-cores"></div>
																		</div>
																		<div class="menu-cores-row">
																			<div onclick="mudaCorTexto('#a2cff0', this)" id="celeste-claro" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#71aad4', this)" id="celeste-escuro" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#082890', this)" id="royal" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#021c3b', this)" id="marinho" class="caixa-cores"></div>
																			<div onclick="mudaCorTexto('#011023', this)" id="marinho-noite" class="caixa-cores"></div>
																		</div>
																			<div class="menu-cores-row">
																				<div onclick="mudaCorTexto('#a3bd31', this)" id="verde-maca" class="caixa-cores"></div>
																				<div onclick="mudaCorTexto('#70a83b', this)" id="verde" class="caixa-cores"></div>
																				<div onclick="mudaCorTexto('#009045', this)" id="verde-bandeira" class="caixa-cores"></div>
																				<div onclick="mudaCorTexto('#005425', this)" id="verde-musgo" class="caixa-cores"></div>
																				<div onclick="mudaCorTexto('#586a1c', this)" id="verde-militar" class="caixa-cores"></div>
																			</div>
																			<div class="menu-cores-row">
																				<div onclick="mudaCorTexto('#cfee4a', this)" id="verde-siciliano" class="caixa-cores"></div>
																				<div onclick="mudaCorTexto('#a2cbbe', this)" id="verde-bebe" class="caixa-cores"></div>
																				<div onclick="mudaCorTexto('#80b3a3', this)" id="verde-agua" class="caixa-cores"></div>
																				<div onclick="mudaCorTexto('#30a683', this)" id="tyffany" class="caixa-cores"></div>
																				<div onclick="mudaCorTexto('#104969', this)" id="petroleo" class="caixa-cores"></div>
																			</div>
																			<div class="menu-cores-row">
																				<div onclick="mudaCorTexto('#edcc90', this)" id="pessego" class="caixa-cores"></div>
																				<div onclick="mudaCorTexto('#877844', this)" id="dourado-claro" class="caixa-cores"></div>
																				<div onclick="mudaCorTexto('#806c28', this)" id="dourado-escuro" class="caixa-cores"></div>
																				<div onclick="mudaCorTexto('#594f42', this)" id="marrom-claro" class="caixa-cores"></div>
																				<div onclick="mudaCorTexto('#382f2b', this)" id="marrom-escuro" class="caixa-cores"></div>
																			</div>
																			<div class="menu-cores-row">
																				<div onclick="mudaCorTexto('#fef271', this)" id="amarelo-bebe" class="caixa-cores"></div>
																				<div onclick="mudaCorTexto('#ffff00', this)" id="amarelo-canario" class="caixa-cores"></div>
																				<div onclick="mudaCorTexto('#f6d101', this)" id="amarelo-branco-do-brasil" class="caixa-cores"></div>
																				<div onclick="mudaCorTexto('#db9600', this)" id="laranja-claro" class="caixa-cores"></div>
																				<div onclick="mudaCorTexto('#ce6b03', this)" id="laranja-abobora" class="caixa-cores"></div>
																			</div>
																			<div class="menu-cores-row">
																				<div onclick="mudaCorTexto('#dca3c6', this)" id="rosa-bebe" class="caixa-cores"></div>
																				<div onclick="mudaCorTexto('#c45293', this)" id="rosa-escuro" class="caixa-cores"></div>
																				<div onclick="mudaCorTexto('#c40f77', this)" id="pink" class="caixa-cores"></div>
																				<div onclick="mudaCorTexto('#8165a2', this)" id="lilas" class="caixa-cores"></div>
																				<div onclick="mudaCorTexto('#2f004a', this)" id="roxo" class="caixa-cores"></div>
																			</div>
																			<div class="menu-cores-row">
																				<div onclick="mudaCor('#bf083c', this)" id="vermelho-melancia" class="caixa-cores"></div>
																				<div onclick="mudaCor('#bf0811', this)" id="vermelho" class="caixa-cores"></div>
																				<div onclick="mudaCor('#801815', this)" id="vermelho-carmim" class="caixa-cores"></div>
																				<div onclick="mudaCor('#65092d', this)" id="bordo" class="caixa-cores"></div>
																				<div onclick="mudaCor('#45061f', this)" id="bordo-puc" class="caixa-cores"></div>
																			</div>
																		</div>
														</div>
													</div>
												</div>
											</div>

											<h2 style="margin-top:30px;" class="titulos-menu">Fonte</h2>
											<div class="fonte-container">
												<div class="slide-arrow arrow-left" onclick="passarSlide('left')">
													<img style="width:100%" src="images/simulador/pngwave.png" alt="">
												</div>
												<div class="fonte-display">
														<div id="slide-1" class="fonte-op active-font">
															<h2 style="font-family: 'oceanica-simulador', cursive;">ABC</h2>
														</div>
														<div id="slide-2" class="fonte-op">
															<h2 style="font-family: 'oceanica-simulador-2', cursive;">ABC</h2>
														</div>
														<div id="slide-3" class="fonte-op">
															<h2 style="font-family: 'oceanica-simulador-3', cursive;">ABC</h2>
														</div>
														<div id="slide-4" class="fonte-op">
															<h2 style="font-family: 'oceanica-simulador-4', cursive;">ABC</h2>
														</div>
														<div id="slide-5" class="fonte-op">
															<h2 style="font-family: 'oceanica-simulador-5', cursive;">ABC</h2>
														</div>
														<div id="slide-6" class="fonte-op">
															<h2 style="font-family: 'oceanica-simulador-6', cursive;">ABC</h2>
														</div>
														<div id="slide-7" class="fonte-op">
															<h2 style="font-family: 'oceanica-simulador-7', cursive;">ABC</h2>
														</div>
														<div id="slide-8" class="fonte-op">
															<h2 style="font-family: 'oceanica-simulador-8', cursive;">ABC</h2>
														</div>
												</div>
												<div class="slide-arrow arrow-right" onclick="passarSlide('right')">
													<img style="width:100%" src="images/simulador/pngwave-right.png" alt="">
												</div>
											</div>

									</div>
									<p  class="texto-btn-simulador texto-btn-simulador-dif">nome e <br> numero</p>
									<div class="image-box-btn-simulador">
										<img src="images/simulador/interface-nova/Aa.png">
									</div>

								</div>
								<div onclick="abrirMenu(this)" class="botao-simulador">
									<div id="menu-geral-escudo" class="menu-geral menu-geral-escudo">
										<h2 class="titulos-menu">Posição do escudo no peito</h2>
										<div class="wrap-escudos-peito">
											<div class="img-escudo-row">
												<div onclick="posicionarEscudo('peito-direito', 'peito')" class="img-escudo">
													<img src="images/simulador/posicao-escudos/Posicoes-de-escudos.jpg" alt="">
												</div>
												<div onclick="posicionarEscudo('peito-direito', 'ombro')" class="img-escudo">
													<img src="images/simulador/posicao-escudos/Posicoes-de-escudos2.jpg" alt="">
												</div>
											</div>
											<div class="img-escudo-row">
												<div onclick="posicionarEscudo('peito-meio', 'ombro')" class="img-escudo">
													<img src="images/simulador/posicao-escudos/Posicoes-de-escudos3.jpg" alt="">
												</div>
												<div onclick="posicionarEscudo('peito-meio-abdomen', 'ombro')" class="img-escudo">
													<img src="images/simulador/posicao-escudos/Posicoes-de-escudos4.jpg" alt="">
												</div>
											</div>
										</div>

										<h2 class="titulos-menu">Posicão do escudo na perna</h2>
										<div class="img-escudo-row">
											<div onclick="posicionarEscudo('perna-direita', 'perna-esquerda')" class="img-escudo">
												<img src="images/simulador/posicao-escudos/Posicoes-de-escudos5.jpg" alt="">
											</div>
											<div onclick="posicionarEscudo('perna-esquerda', 'perna-direita')" class="img-escudo">
												<img src="images/simulador/posicao-escudos/Posicoes-de-escudos6.jpg" alt="">
											</div>
										</div>
									</div>
									<p class="texto-btn-simulador">escudo</p>
									<div class="image-box-btn-simulador">
										<img src="images/simulador/interface-nova/icoEscudo.png">
									</div>

								</div>
								<div class="botao-simulador" onclick="abrirMenu(this)">
									<div id="menu-geral-emblema" class="menu-geral menu-geral-emblema">
										<h2 class="titulos-menu">Adicionar imagens e texturas</h2>
										<p style="font-size:10pt;margin-bottom:30px;">Dica: Para logos, de preferência a imagens com extensão .png com fundo transparente. Exetensões .jpg ou .jpeg também funcionam.</p>
										<input type="file" name="inpFile" id="inpFile">
									</div>
									<p class="texto-btn-simulador">logo</p>
									<div class="image-box-btn-simulador">
										<img src="images/simulador/interface-nova/logoIco.png">
									</div>

								</div>


						</div>


						<div class="selo-pacote">
							<img id="imagem-selo" src="images/simulador/Selo-Base.png" alt="">
						</div>
						<div class="textos-nomes-modelos">
							<div class="seta-texto-modelos seta-celular">
								<p class="seta-disclaimer ">layout similar ao:</p>
								<h2 id="texto-modelo-camisa" class="textos-modelos" >nome camisa</h2>
							</div>
							<div class="seta-texto-modelos">
								<p class="seta-disclaimer texto-branco">layout similar ao:</p>
								<h2 id="texto-modelo-calcao" class="textos-modelos" >nome calcao</h2>
							</div>
							<div class="seta-texto-modelos margin-zero">
								<p class="seta-disclaimer texto-branco">layout similar ao:</p>
								<h2 id="texto-modelo-meiao" class="textos-modelos" >Treino</h2>
							</div>
						</div>
						<div id="manequimCompleto" class="manequim-completo">
							<div id="manequim" class="manequim">
								<div id="adicionarCarrinhoBtn" onclick="prepararMenuCompra(this)" class="adicionar-carrinho" >
									<div id="menu-geral-finalizar-compra" class="menu-geral menu-geral-finalizar-compra">
										<h2 class="titulos-menu">Quantas unidades você deseja?</h2>
										<div class="compra-wrap">
											<form id="formFinCompra" target="_top" class="finalizar-compra" action="http://malhariaoceanica.com.br/produto/pacote-simulador/" method="post">
												<div class="row-compra row-compra-camisa">
													<p>Camisa</p>
													<input id="quantidade-camisa" onclick="prepararMenuFalse()" class="quantidade" type="number" name="qtd_camisa" value="1">
												</div>
												<div class="row-compra row-compra-calcao">
													<p>Calção</p>
													<input id="quantidade-calcao" onclick="prepararMenuFalse()" class="quantidade" type="number" name="qtd_calcao" value="1">
												</div>
												<div class="row-compra row-compra-meiao">
													<p>Meião</p>
													<input id="quantidade-meiao" onclick="prepararMenuFalse()" class="quantidade" type="number" name="qtd_meia" value="1">
												</div>
												<input id="inp-pacote" type="hidden" name="pacote">
												<input id="inp-identificador" type="hidden" name="identificador">
												<input id="inp-valor" type="hidden" name="valor">
												<input id="inp-modelo" type="hidden" name="modelo">
												<button id="submit-btn" class="btn-finalizar" type="submit">
													<p>Adicionar ao Carrinho</p>
												</button>
											</form>

										</div>

									</div>
									<h3>Adicionar<br>ao carrinho</h3>
									<div class="btn-carrinho">
										<img src="images/simulador/carrinho-icone.png" alt="">
									</div>
								</div>
								<div class="nova-simulacao-download ">
									<div class="nova-simulacao btns-header">
										<div class="header-image-box">
											<img src="images/simulador/interface-nova/nova-simulacao.png" alt="">
										</div>
										<h2 class="texto-btns-header">Nova<br>simulação</h2>
									</div>
									<a id="download-simulacao" onclick="tirarPrint()" class="download-simulacao btns-header">
										<div class="header-image-box">
											<img src="images/simulador/interface-nova/download.png" alt="">
										</div>
										<h2 class="texto-btns-header">Compartilhar<br>resultado</h2>
									</a>
								</div>
								<div class="ocultar-calcao-camiseta-wrap">
									<div class="botoes-ocultar">
										<div  onclick="ocultarCamisa()" class="ocultar-calcao-camiseta ocultar-camiseta">
											<img id="olhoCamisa" src="images/simulador/interface-nova/eye-closed.png" alt="">
										</div>
										<div onclick="iconeGirar()" id="ico-girar" class="ico-girar">
										 <img src="images/simulador/icoGirar.png" alt="">
									 </div>
										<div  onclick="ocultarCalcao()" class="ocultar-calcao-camiseta ocultar-calcao">
											<img id="olhoCalcao" src="images/simulador/interface-nova/eye-closed.png" alt="">
										</div>
										<div  onclick="ocultarMeia()" class="ocultar-calcao-camiseta ocultar-meia">
											<img id="olhoMeia" src="images/simulador/interface-nova/eye-closed.png" alt="">
										</div>
									</div>

								</div>
								<div id="manequim-svg" class="">
									<div id="camisa-svg" class="parte-manequim camisa active">

									</div>
									<div id="calcao-svg" class="parte-manequim calcao active">

									</div>
								</div>

								<div id="camisa-frente-png" class="parte-manequim camisa active">
									<img src="images/simulador/camisa2.png">
									<div id="oceanica-peito"  class="parte-impressa oceanica-manequim oceanica-peito active">
										<svg fill="#4e4e4e" class="oceanica-camisa" version="1.1" id="oceanica-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											 viewBox="0 0 212.67 107.95" enable-background="new 0 0 212.67 107.95" xml:space="preserve">
										<g>
											<path d="M0.12,66.04c0.16-0.96,0.29-1.92,0.47-2.88c0.65-3.44,2.11-6.4,4.99-8.54c1.81-1.34,3.86-2.03,6.07-2.29
												c2.37-0.28,4.72-0.19,7.02,0.48c3.97,1.16,6.5,3.87,7.97,7.64c1.16,2.97,1.44,6.07,1.22,9.23c-0.14,2.05-0.53,4.02-1.3,5.93
												c-1.74,4.34-4.9,6.89-9.49,7.73c-2.71,0.5-5.35,0.33-7.97-0.49C4.75,81.49,2,78.59,0.95,74.14c-0.33-1.41-0.49-2.87-0.73-4.31
												c-0.02-0.15-0.07-0.3-0.11-0.44C0.12,68.27,0.12,67.16,0.12,66.04z M7.84,67.68c0.08,1.94,0.27,4.16,1.1,6.3
												c1.05,2.67,4.43,3.68,6.46,3.08c2.06-0.62,3.26-2.09,3.99-4c0.65-1.71,0.79-3.52,0.8-5.33c0.01-1.77-0.15-3.53-0.9-5.18
												c-1.11-2.47-3.07-3.87-5.54-3.63c-2.91,0.27-4.29,1.45-5.24,4.05C7.99,64.38,7.84,65.87,7.84,67.68z"/>
											<path d="M169.33,20.05c-2.95-1.41-6.02-2.5-9.22-3.17c-4.24-0.89-8.53-1.33-12.87-1.23c-3.72,0.08-7.4,0.49-10.97,1.56
												c-1.87,0.56-3.65,1.29-5.25,2.44c-3.31,2.4-3.28,5.64-1.03,8.44c1.59,1.97,3.75,3.15,6.03,4.12c3.18,1.35,6.53,2.08,9.92,2.67
												c5.39,0.94,10.8,0.78,16.22,0.48c3.23-0.18,6.45-0.35,9.67-0.62c3.23-0.27,6.46-0.64,9.69-0.99c1.6-0.17,3.2-0.39,4.8-0.59
												c0.09-0.01,0.18,0,0.3,0.11c-0.82,0.34-1.64,0.7-2.47,1.02c-4.21,1.59-8.57,2.66-12.99,3.45c-3.5,0.62-7.01,1.16-10.53,1.59
												c-3.14,0.39-6.31,0.69-9.47,0.85c-5.09,0.26-10.19,0.5-15.28,0.5c-4.57,0-9.16-0.21-13.72-0.53c-6.9-0.49-13.75-1.42-20.4-3.44
												c-3.17-0.96-6.24-2.16-8.94-4.15c-2.14-1.58-3.59-3.61-3.96-6.31c-0.24-1.73,0.16-3.36,0.94-4.9c1.23-2.44,3.1-4.33,5.25-5.97
												c0.21-0.16,0.43-0.32,0.64-0.61c-0.21,0-0.42,0-0.63,0c-5.04,0.04-10,0.71-14.9,1.8c-10.09,2.23-19.57,6.1-28.82,10.62
												c-8.17,4-16.05,8.51-23.87,13.14c-0.2,0.12-0.4,0.23-0.69,0.27c0.09-0.14,0.18-0.29,0.29-0.42c2.39-2.98,5.13-5.64,8.04-8.1
												C49.36,20.06,65.37,11.12,83.07,5.25c5.52-1.83,11.18-3.18,16.93-4.05c5.7-0.86,11.43-1.14,17.2-0.88
												c3.98,0.18,7.94,0.54,11.86,1.21c13.44,2.28,25.85,7.03,36.75,15.38c1.25,0.96,2.41,2.02,3.62,3.03
												C169.4,19.97,169.36,20.01,169.33,20.05z M148.94,35.41c0,0.03,0,0.05,0,0.08c-0.55-0.05-1.09-0.11-1.64-0.16
												c-3.72-0.31-7.4-0.85-11.02-1.76c-3.29-0.82-6.48-1.9-9.36-3.76c-1.43-0.93-2.72-2.03-3.58-3.53c-1.49-2.62-1.23-5.4,1.49-7.37
												c1.71-1.24,3.64-1.96,5.65-2.51c3.28-0.9,6.63-1.27,10.01-1.43c4.53-0.21,9.03,0.05,13.51,0.69c0.88,0.13,1.75,0.27,2.63,0.4
												c0.01-0.06,0.02-0.11,0.03-0.17c-2.29-0.37-4.56-0.84-6.86-1.1c-3.09-0.34-6.2-0.62-9.3-0.76c-4.91-0.22-9.8,0.06-14.6,1.2
												c-2.37,0.56-4.65,1.35-6.61,2.85c-1.09,0.83-1.97,1.85-2.35,3.2c-0.6,2.14-0.13,4.11,1.14,5.9c1.31,1.84,3.14,3.03,5.14,3.98
												c4.45,2.1,9.21,3,14.04,3.59c2.46,0.3,4.93,0.49,7.41,0.65C146.1,35.49,147.53,35.41,148.94,35.41z"/>
											<path d="M67.65,70.07c0.14,1.91,0.41,3.67,1.66,5.13c0.9,1.06,2.03,1.64,3.37,1.79c1.53,0.17,3.05,0.1,4.4-0.76
												c0.46-0.29,0.9-0.67,1.24-1.09c0.61-0.76,1.36-1.31,2.32-1.33c2.07-0.05,4.15-0.02,6.28-0.02c-0.7,2.71-1.98,5.01-4.14,6.79
												c-3.05,2.51-6.63,3.25-10.47,3.06c-2.6-0.13-5.04-0.8-7.16-2.39c-2.76-2.06-4.35-4.88-5.03-8.21c-0.83-4.06-0.83-8.1,0.46-12.07
												c1.71-5.22,5.69-8.27,11.17-8.69c2.59-0.2,5.11,0.04,7.53,0.98c4.06,1.58,6.32,4.71,7.41,8.81c0.65,2.44,0.74,4.93,0.7,7.43
												c-0.01,0.52-0.28,0.56-0.7,0.56c-6.1-0.01-12.2-0.01-18.29-0.01C68.17,70.07,67.95,70.07,67.65,70.07z M79.17,64.87
												c-0.22-3.87-2.09-6.24-6.24-6.02c-2.88,0.15-5.25,2.39-5.21,6.02C71.53,64.87,75.35,64.87,79.17,64.87z"/>
											<path d="M187.97,60.55c0.25-0.82,0.43-1.67,0.77-2.44c1.26-2.83,3.52-4.55,6.45-5.29c4.12-1.04,8.24-0.86,12.26,0.54
												c2.68,0.94,4.55,2.75,5.15,5.64c0.11,0.5,0.16,1.03,0.17,1.54c0.01,3.69,0.04,7.39,0,11.08c-0.02,2.25-0.38,4.44-1.57,6.41
												c-1.83,3.03-4.63,4.59-8.01,5.17c-2.39,0.41-4.81,0.62-7.24,0.37c-2.35-0.24-4.48-1.07-6.26-2.65c-1.29-1.14-1.95-2.65-2.22-4.32
												c-0.35-2.13-0.35-4.25,0.38-6.31c0.46-1.31,1.26-2.36,2.41-3.15c2.22-1.52,4.71-2.25,7.36-2.62c1.82-0.25,3.62-0.64,5.41-1.04
												c0.52-0.12,1.04-0.43,1.46-0.77c1.25-1.01,1.03-2.89-0.45-3.49c-2.18-0.88-4.45-1.07-6.69-0.2c-0.58,0.23-1.01,0.84-1.51,1.26
												c-0.16,0.13-0.34,0.33-0.52,0.33c-2.35,0.02-4.69,0.01-7.04,0.01C188.22,60.63,188.17,60.6,187.97,60.55z M205.51,67.91
												c-0.3,0.11-0.42,0.15-0.54,0.19c-1.52,0.46-3.03,0.94-4.55,1.39c-1.23,0.36-2.48,0.66-3.69,1.06c-1.01,0.34-1.6,1.12-1.91,2.14
												c-0.7,2.32,0.43,4.34,2.72,4.73c0.64,0.11,1.3,0.07,1.95,0.04c2.75-0.12,5.1-1.94,5.62-4.61
												C205.42,71.28,205.38,69.63,205.51,67.91z"/>
											<path d="M90.07,60.57c0.28-2.1,1.17-3.87,2.7-5.32c1.68-1.59,3.72-2.45,5.96-2.77c3.52-0.51,7.03-0.37,10.42,0.77
												c2.55,0.85,4.5,2.42,5.29,5.11c0.21,0.73,0.31,1.51,0.31,2.27c0.02,3.93,0.06,7.85-0.02,11.78c-0.08,3.71-1.49,6.81-4.65,8.94
												c-1.95,1.31-4.17,1.96-6.5,2.11c-1.86,0.12-3.73,0.21-5.58,0.12c-2.26-0.11-4.29-0.98-6.06-2.41c-1.1-0.88-1.81-2.04-2.19-3.38
												c-0.67-2.34-0.71-4.7-0.04-7.05c0.43-1.51,1.3-2.73,2.61-3.61c2.22-1.48,4.69-2.21,7.32-2.57c1.8-0.25,3.58-0.63,5.36-1.03
												c0.54-0.12,1.07-0.44,1.51-0.8c1.2-0.96,1.02-2.85-0.39-3.44c-2.23-0.93-4.56-1.11-6.85-0.21c-0.56,0.22-0.96,0.83-1.45,1.26
												c-0.14,0.13-0.32,0.31-0.48,0.31c-2.37,0.02-4.73,0.01-7.1,0.01C90.21,60.63,90.16,60.6,90.07,60.57z M107.49,68.05
												c-1.68,0.49-3.2,0.94-4.73,1.37c-1.21,0.34-2.45,0.62-3.66,0.98c-1.51,0.46-2.23,1.57-2.45,3.09c-0.27,1.89,0.8,3.52,2.67,3.88
												c0.71,0.13,1.45,0.13,2.18,0.1c2.79-0.11,5.09-1.94,5.62-4.66C107.43,71.25,107.38,69.64,107.49,68.05z"/>
											<path d="M144.12,83.1c-1.48,0-2.89,0.07-4.28-0.02c-2.23-0.14-3.56-1.68-3.56-4.02c-0.01-4.96,0-9.93-0.01-14.89
												c0-0.52,0-1.04-0.07-1.55c-0.23-1.62-1.14-2.73-2.6-3.42c-1.48-0.7-3-0.79-4.54-0.28c-2.26,0.74-3.28,2.3-3.3,4.97
												c-0.02,2.62,0,5.23,0,7.85c0,3.54,0,7.08,0,10.62c0,0.23,0,0.45,0,0.72c-2.66,0-5.27,0-7.94,0c-0.01-0.21-0.03-0.42-0.03-0.62
												c0-5.66-0.01-11.31,0.01-16.97c0.01-2.31,0.22-4.6,1.12-6.77c0.7-1.69,1.81-3.01,3.39-3.95c2.59-1.54,5.39-2.46,8.4-2.52
												c3.51-0.08,6.77,0.89,9.66,2.91c2.01,1.4,2.94,3.52,3.35,5.85c0.26,1.47,0.41,2.97,0.42,4.46c0.05,5.67,0.02,11.35,0.02,17.02
												C144.15,82.66,144.14,82.85,144.12,83.1z"/>
											<path d="M57.44,62.11c-2.55,0-5.08,0.01-7.62-0.02c-0.17,0-0.39-0.21-0.48-0.38c-1.67-2.89-5.55-3.82-8.35-1.99
												c-1.12,0.73-1.79,1.81-2.15,3.04c-0.99,3.36-1.05,6.76-0.01,10.11c0.67,2.17,2.09,3.72,4.47,4.08c1.69,0.25,3.35,0.1,4.83-0.84
												c0.4-0.25,0.74-0.62,1.04-0.99c0.8-0.95,1.77-1.4,3.03-1.37c1.82,0.05,3.65,0.01,5.53,0.01c-0.76,2.92-2.18,5.35-4.59,7.15
												c-2.98,2.23-6.39,2.88-10.02,2.71c-2.42-0.12-4.71-0.71-6.74-2.09c-2.86-1.94-4.57-4.68-5.34-8c-1.02-4.39-1.05-8.79,0.52-13.06
												c1.86-5.04,5.58-7.75,10.93-8.2c3.14-0.26,6.16,0.14,9,1.61C54.71,55.59,56.7,58.96,57.44,62.11z"/>
											<path d="M185.15,62.11c-2.62,0-5.14,0.01-7.66-0.02c-0.18,0-0.42-0.23-0.51-0.41c-1.76-3.59-6.88-3.46-8.92-1.51
												c-1,0.95-1.53,2.15-1.82,3.46c-0.67,3.01-0.72,6.03,0.15,9.01c0.67,2.26,2.05,3.92,4.53,4.31c1.69,0.26,3.35,0.11,4.84-0.82
												c0.41-0.26,0.77-0.64,1.09-1.02c0.79-0.93,1.75-1.37,2.98-1.34c1.82,0.05,3.65,0.01,5.55,0.01c-0.13,0.43-0.22,0.82-0.35,1.19
												c-1.79,4.99-5.42,7.71-10.58,8.51c-2.41,0.37-4.8,0.29-7.14-0.41c-3.83-1.14-6.51-3.65-7.89-7.34c-1.93-5.14-2.01-10.41-0.06-15.56
												c1.85-4.89,5.6-7.44,10.8-7.88c2.88-0.24,5.68,0.08,8.33,1.29C182.14,55.25,184.03,58.32,185.15,62.11z"/>
											<path d="M147.38,52.99c1.67,0,3.27-0.12,4.85,0.03c1.64,0.16,2.94,1.71,3.07,3.35c0.02,0.25,0.03,0.5,0.03,0.75
												c0,8.42,0,16.85,0,25.27c0,0.21,0,0.42,0,0.67c-2.67,0-5.29,0-7.94,0C147.38,73.02,147.38,62.99,147.38,52.99z"/>
											<path d="M167.89,93.1c2.65,0.06,5.27,0.01,7.87,0.21c1.95,0.15,3.28,1.53,3.53,3.26c0.32,2.18-0.42,3.7-2.27,4.65
												c-0.08,0.04-0.16,0.09-0.29,0.15c0.84,2.13,1.68,4.25,2.55,6.45c-0.93,0-1.79,0.02-2.64-0.02c-0.12,0-0.27-0.23-0.33-0.39
												c-0.66-1.7-1.31-3.4-1.93-5.11c-0.13-0.35-0.28-0.51-0.68-0.5c-1.03,0.04-2.07,0.01-3.18,0.01c0,2.01,0,3.98,0,5.98
												c-0.91,0-1.75,0-2.63,0C167.89,102.95,167.89,98.09,167.89,93.1z M170.54,99.62c1.37,0,2.71,0.08,4.04-0.02
												c1.21-0.1,1.9-0.86,1.97-1.89c0.08-1.18-0.4-2.08-1.5-2.24c-1.48-0.21-3-0.19-4.51-0.27C170.54,96.77,170.54,98.18,170.54,99.62z"
												/>
											<path d="M154.24,108.06c-2.16,0-3.8-0.91-4.93-2.76c-1.83-3-1.61-7.41,0.4-10.13c2.24-3.02,7.4-3.08,9.51,0.35
												c1.07,1.74,1.43,3.62,1.32,5.62c-0.07,1.34-0.36,2.62-1.02,3.81C158.39,106.98,156.56,108.06,154.24,108.06z M157.79,100.45
												c-0.21-1.05-0.33-2.23-0.68-3.33c-0.44-1.41-1.42-2.03-2.8-2.03c-1.38,0.01-2.36,0.64-2.83,2.02c-0.75,2.21-0.76,4.45-0.03,6.67
												c0.49,1.48,1.49,2.14,2.93,2.12c1.31-0.02,2.47-0.87,2.85-2.27C157.51,102.63,157.59,101.59,157.79,100.45z"/>
											<path d="M200.94,104.28c0.73-0.16,1.42-0.32,2.12-0.47c0.13-0.03,0.26-0.02,0.39-0.04c0.96,1.97,3.45,2.77,5.42,1.76
												c0.68-0.35,1.11-0.87,1.06-1.7c-0.05-0.8-0.45-1.35-1.21-1.57c-1.25-0.37-2.51-0.68-3.77-1.04c-2.25-0.63-3.25-1.91-3.24-4.08
												c0.01-1.77,1.05-3.23,2.86-3.84c1.98-0.68,3.94-0.54,5.79,0.48c0.91,0.5,1.55,1.23,1.81,2.31c-0.84,0.21-1.65,0.41-2.45,0.61
												c-0.99-1.52-2.24-2-3.89-1.5c-0.83,0.25-1.33,0.8-1.37,1.52c-0.04,0.77,0.3,1.31,1.21,1.61c1.13,0.37,2.29,0.62,3.43,0.94
												c1.3,0.36,2.53,0.82,3.2,2.13c1.04,2.02,0.39,4.43-1.54,5.65c-2.18,1.38-5.95,1.29-8.06-0.19
												C201.81,106.28,201.21,105.4,200.94,104.28z"/>
											<path d="M123.08,96.13c-0.83,0.21-1.63,0.41-2.41,0.6c-0.96-1.52-2.28-2.02-3.95-1.49c-0.78,0.25-1.26,0.8-1.31,1.51
												c-0.05,0.71,0.27,1.29,1.1,1.57c1.16,0.39,2.36,0.65,3.54,0.99c1.18,0.33,2.32,0.72,3.02,1.83c1.26,2,0.7,4.58-1.27,5.89
												c-2.22,1.47-6.09,1.38-8.25-0.2c-0.86-0.63-1.38-1.47-1.69-2.54c0.86-0.18,1.69-0.36,2.51-0.54c0.99,1.98,3.39,2.78,5.38,1.83
												c0.71-0.34,1.17-0.86,1.12-1.71c-0.05-0.83-0.48-1.37-1.26-1.6c-1.25-0.36-2.52-0.67-3.77-1.03c-2-0.57-3.06-1.75-3.18-3.48
												c-0.15-2.22,0.87-3.8,2.99-4.48c1.93-0.62,3.83-0.46,5.63,0.52C122.3,94.33,122.93,95.17,123.08,96.13z"/>
											<path d="M111.96,49.76c-1.79,0.06-3.44,0.08-5.08,0.18c-1.16,0.07-1.94-0.41-2.59-1.34c-0.55-0.78-1.22-1.47-1.88-2.24
												c-0.84,1.05-1.64,2.05-2.46,3.04c-0.15,0.18-0.42,0.36-0.65,0.37c-1.53,0.04-3.07,0.05-4.61,0.04c-0.53,0-1.06-0.07-1.7-0.12
												c0.31-0.54,0.54-1.02,0.85-1.44c0.78-1.04,1.54-2.12,2.42-3.07c1.21-1.3,2.7-2.17,4.55-2.17c1.52,0,3.04-0.04,4.55,0.11
												c1.58,0.15,2.78,1.09,3.69,2.35C110.02,46.8,110.91,48.19,111.96,49.76z"/>
											<path d="M130.86,93.1c2.51,0.06,5-0.01,7.46,0.22c2.26,0.21,3.61,2.08,3.57,4.43c-0.04,2.11-1.64,3.91-3.74,4.18
												c-0.66,0.09-1.34,0.09-2.01,0.1c-0.86,0.02-1.73,0-2.65,0c0,1.94,0,3.83,0,5.76c-0.9,0-1.74,0-2.62,0
												C130.86,102.95,130.86,98.1,130.86,93.1z M133.49,99.64c1.36,0,2.67,0.08,3.96-0.03c0.97-0.08,1.58-0.9,1.66-1.93
												c0.07-0.92-0.45-1.84-1.29-2.1c-1.42-0.44-2.88-0.14-4.32-0.24C133.49,96.86,133.49,98.26,133.49,99.64z"/>
											<path d="M191.98,107.81c-1.01,0-1.9,0-2.87,0c0-4.11,0-8.19,0-12.34c-1.32,0-2.58,0-3.88,0c0-0.78,0-1.5,0-2.26
												c3.5,0,7.01,0,10.56,0c0,0.72,0,1.45,0,2.25c-1.27,0-2.51,0-3.82,0C191.98,99.59,191.98,103.68,191.98,107.81z"/>
										</g>
										</svg>
									</div>
									<div id="oceanica-ombro"   class="parte-impressa oceanica-manequim oceanica-ombro">
																			<svg fill="#5e5e5e" class="oceanica-camisa" version="1.1" id="oceanica-2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											 viewBox="0 0 212.67 107.95" enable-background="new 0 0 212.67 107.95" xml:space="preserve">
										<g>
											<path d="M0.12,66.04c0.16-0.96,0.29-1.92,0.47-2.88c0.65-3.44,2.11-6.4,4.99-8.54c1.81-1.34,3.86-2.03,6.07-2.29
												c2.37-0.28,4.72-0.19,7.02,0.48c3.97,1.16,6.5,3.87,7.97,7.64c1.16,2.97,1.44,6.07,1.22,9.23c-0.14,2.05-0.53,4.02-1.3,5.93
												c-1.74,4.34-4.9,6.89-9.49,7.73c-2.71,0.5-5.35,0.33-7.97-0.49C4.75,81.49,2,78.59,0.95,74.14c-0.33-1.41-0.49-2.87-0.73-4.31
												c-0.02-0.15-0.07-0.3-0.11-0.44C0.12,68.27,0.12,67.16,0.12,66.04z M7.84,67.68c0.08,1.94,0.27,4.16,1.1,6.3
												c1.05,2.67,4.43,3.68,6.46,3.08c2.06-0.62,3.26-2.09,3.99-4c0.65-1.71,0.79-3.52,0.8-5.33c0.01-1.77-0.15-3.53-0.9-5.18
												c-1.11-2.47-3.07-3.87-5.54-3.63c-2.91,0.27-4.29,1.45-5.24,4.05C7.99,64.38,7.84,65.87,7.84,67.68z"/>
											<path d="M169.33,20.05c-2.95-1.41-6.02-2.5-9.22-3.17c-4.24-0.89-8.53-1.33-12.87-1.23c-3.72,0.08-7.4,0.49-10.97,1.56
												c-1.87,0.56-3.65,1.29-5.25,2.44c-3.31,2.4-3.28,5.64-1.03,8.44c1.59,1.97,3.75,3.15,6.03,4.12c3.18,1.35,6.53,2.08,9.92,2.67
												c5.39,0.94,10.8,0.78,16.22,0.48c3.23-0.18,6.45-0.35,9.67-0.62c3.23-0.27,6.46-0.64,9.69-0.99c1.6-0.17,3.2-0.39,4.8-0.59
												c0.09-0.01,0.18,0,0.3,0.11c-0.82,0.34-1.64,0.7-2.47,1.02c-4.21,1.59-8.57,2.66-12.99,3.45c-3.5,0.62-7.01,1.16-10.53,1.59
												c-3.14,0.39-6.31,0.69-9.47,0.85c-5.09,0.26-10.19,0.5-15.28,0.5c-4.57,0-9.16-0.21-13.72-0.53c-6.9-0.49-13.75-1.42-20.4-3.44
												c-3.17-0.96-6.24-2.16-8.94-4.15c-2.14-1.58-3.59-3.61-3.96-6.31c-0.24-1.73,0.16-3.36,0.94-4.9c1.23-2.44,3.1-4.33,5.25-5.97
												c0.21-0.16,0.43-0.32,0.64-0.61c-0.21,0-0.42,0-0.63,0c-5.04,0.04-10,0.71-14.9,1.8c-10.09,2.23-19.57,6.1-28.82,10.62
												c-8.17,4-16.05,8.51-23.87,13.14c-0.2,0.12-0.4,0.23-0.69,0.27c0.09-0.14,0.18-0.29,0.29-0.42c2.39-2.98,5.13-5.64,8.04-8.1
												C49.36,20.06,65.37,11.12,83.07,5.25c5.52-1.83,11.18-3.18,16.93-4.05c5.7-0.86,11.43-1.14,17.2-0.88
												c3.98,0.18,7.94,0.54,11.86,1.21c13.44,2.28,25.85,7.03,36.75,15.38c1.25,0.96,2.41,2.02,3.62,3.03
												C169.4,19.97,169.36,20.01,169.33,20.05z M148.94,35.41c0,0.03,0,0.05,0,0.08c-0.55-0.05-1.09-0.11-1.64-0.16
												c-3.72-0.31-7.4-0.85-11.02-1.76c-3.29-0.82-6.48-1.9-9.36-3.76c-1.43-0.93-2.72-2.03-3.58-3.53c-1.49-2.62-1.23-5.4,1.49-7.37
												c1.71-1.24,3.64-1.96,5.65-2.51c3.28-0.9,6.63-1.27,10.01-1.43c4.53-0.21,9.03,0.05,13.51,0.69c0.88,0.13,1.75,0.27,2.63,0.4
												c0.01-0.06,0.02-0.11,0.03-0.17c-2.29-0.37-4.56-0.84-6.86-1.1c-3.09-0.34-6.2-0.62-9.3-0.76c-4.91-0.22-9.8,0.06-14.6,1.2
												c-2.37,0.56-4.65,1.35-6.61,2.85c-1.09,0.83-1.97,1.85-2.35,3.2c-0.6,2.14-0.13,4.11,1.14,5.9c1.31,1.84,3.14,3.03,5.14,3.98
												c4.45,2.1,9.21,3,14.04,3.59c2.46,0.3,4.93,0.49,7.41,0.65C146.1,35.49,147.53,35.41,148.94,35.41z"/>
											<path d="M67.65,70.07c0.14,1.91,0.41,3.67,1.66,5.13c0.9,1.06,2.03,1.64,3.37,1.79c1.53,0.17,3.05,0.1,4.4-0.76
												c0.46-0.29,0.9-0.67,1.24-1.09c0.61-0.76,1.36-1.31,2.32-1.33c2.07-0.05,4.15-0.02,6.28-0.02c-0.7,2.71-1.98,5.01-4.14,6.79
												c-3.05,2.51-6.63,3.25-10.47,3.06c-2.6-0.13-5.04-0.8-7.16-2.39c-2.76-2.06-4.35-4.88-5.03-8.21c-0.83-4.06-0.83-8.1,0.46-12.07
												c1.71-5.22,5.69-8.27,11.17-8.69c2.59-0.2,5.11,0.04,7.53,0.98c4.06,1.58,6.32,4.71,7.41,8.81c0.65,2.44,0.74,4.93,0.7,7.43
												c-0.01,0.52-0.28,0.56-0.7,0.56c-6.1-0.01-12.2-0.01-18.29-0.01C68.17,70.07,67.95,70.07,67.65,70.07z M79.17,64.87
												c-0.22-3.87-2.09-6.24-6.24-6.02c-2.88,0.15-5.25,2.39-5.21,6.02C71.53,64.87,75.35,64.87,79.17,64.87z"/>
											<path d="M187.97,60.55c0.25-0.82,0.43-1.67,0.77-2.44c1.26-2.83,3.52-4.55,6.45-5.29c4.12-1.04,8.24-0.86,12.26,0.54
												c2.68,0.94,4.55,2.75,5.15,5.64c0.11,0.5,0.16,1.03,0.17,1.54c0.01,3.69,0.04,7.39,0,11.08c-0.02,2.25-0.38,4.44-1.57,6.41
												c-1.83,3.03-4.63,4.59-8.01,5.17c-2.39,0.41-4.81,0.62-7.24,0.37c-2.35-0.24-4.48-1.07-6.26-2.65c-1.29-1.14-1.95-2.65-2.22-4.32
												c-0.35-2.13-0.35-4.25,0.38-6.31c0.46-1.31,1.26-2.36,2.41-3.15c2.22-1.52,4.71-2.25,7.36-2.62c1.82-0.25,3.62-0.64,5.41-1.04
												c0.52-0.12,1.04-0.43,1.46-0.77c1.25-1.01,1.03-2.89-0.45-3.49c-2.18-0.88-4.45-1.07-6.69-0.2c-0.58,0.23-1.01,0.84-1.51,1.26
												c-0.16,0.13-0.34,0.33-0.52,0.33c-2.35,0.02-4.69,0.01-7.04,0.01C188.22,60.63,188.17,60.6,187.97,60.55z M205.51,67.91
												c-0.3,0.11-0.42,0.15-0.54,0.19c-1.52,0.46-3.03,0.94-4.55,1.39c-1.23,0.36-2.48,0.66-3.69,1.06c-1.01,0.34-1.6,1.12-1.91,2.14
												c-0.7,2.32,0.43,4.34,2.72,4.73c0.64,0.11,1.3,0.07,1.95,0.04c2.75-0.12,5.1-1.94,5.62-4.61
												C205.42,71.28,205.38,69.63,205.51,67.91z"/>
											<path d="M90.07,60.57c0.28-2.1,1.17-3.87,2.7-5.32c1.68-1.59,3.72-2.45,5.96-2.77c3.52-0.51,7.03-0.37,10.42,0.77
												c2.55,0.85,4.5,2.42,5.29,5.11c0.21,0.73,0.31,1.51,0.31,2.27c0.02,3.93,0.06,7.85-0.02,11.78c-0.08,3.71-1.49,6.81-4.65,8.94
												c-1.95,1.31-4.17,1.96-6.5,2.11c-1.86,0.12-3.73,0.21-5.58,0.12c-2.26-0.11-4.29-0.98-6.06-2.41c-1.1-0.88-1.81-2.04-2.19-3.38
												c-0.67-2.34-0.71-4.7-0.04-7.05c0.43-1.51,1.3-2.73,2.61-3.61c2.22-1.48,4.69-2.21,7.32-2.57c1.8-0.25,3.58-0.63,5.36-1.03
												c0.54-0.12,1.07-0.44,1.51-0.8c1.2-0.96,1.02-2.85-0.39-3.44c-2.23-0.93-4.56-1.11-6.85-0.21c-0.56,0.22-0.96,0.83-1.45,1.26
												c-0.14,0.13-0.32,0.31-0.48,0.31c-2.37,0.02-4.73,0.01-7.1,0.01C90.21,60.63,90.16,60.6,90.07,60.57z M107.49,68.05
												c-1.68,0.49-3.2,0.94-4.73,1.37c-1.21,0.34-2.45,0.62-3.66,0.98c-1.51,0.46-2.23,1.57-2.45,3.09c-0.27,1.89,0.8,3.52,2.67,3.88
												c0.71,0.13,1.45,0.13,2.18,0.1c2.79-0.11,5.09-1.94,5.62-4.66C107.43,71.25,107.38,69.64,107.49,68.05z"/>
											<path d="M144.12,83.1c-1.48,0-2.89,0.07-4.28-0.02c-2.23-0.14-3.56-1.68-3.56-4.02c-0.01-4.96,0-9.93-0.01-14.89
												c0-0.52,0-1.04-0.07-1.55c-0.23-1.62-1.14-2.73-2.6-3.42c-1.48-0.7-3-0.79-4.54-0.28c-2.26,0.74-3.28,2.3-3.3,4.97
												c-0.02,2.62,0,5.23,0,7.85c0,3.54,0,7.08,0,10.62c0,0.23,0,0.45,0,0.72c-2.66,0-5.27,0-7.94,0c-0.01-0.21-0.03-0.42-0.03-0.62
												c0-5.66-0.01-11.31,0.01-16.97c0.01-2.31,0.22-4.6,1.12-6.77c0.7-1.69,1.81-3.01,3.39-3.95c2.59-1.54,5.39-2.46,8.4-2.52
												c3.51-0.08,6.77,0.89,9.66,2.91c2.01,1.4,2.94,3.52,3.35,5.85c0.26,1.47,0.41,2.97,0.42,4.46c0.05,5.67,0.02,11.35,0.02,17.02
												C144.15,82.66,144.14,82.85,144.12,83.1z"/>
											<path d="M57.44,62.11c-2.55,0-5.08,0.01-7.62-0.02c-0.17,0-0.39-0.21-0.48-0.38c-1.67-2.89-5.55-3.82-8.35-1.99
												c-1.12,0.73-1.79,1.81-2.15,3.04c-0.99,3.36-1.05,6.76-0.01,10.11c0.67,2.17,2.09,3.72,4.47,4.08c1.69,0.25,3.35,0.1,4.83-0.84
												c0.4-0.25,0.74-0.62,1.04-0.99c0.8-0.95,1.77-1.4,3.03-1.37c1.82,0.05,3.65,0.01,5.53,0.01c-0.76,2.92-2.18,5.35-4.59,7.15
												c-2.98,2.23-6.39,2.88-10.02,2.71c-2.42-0.12-4.71-0.71-6.74-2.09c-2.86-1.94-4.57-4.68-5.34-8c-1.02-4.39-1.05-8.79,0.52-13.06
												c1.86-5.04,5.58-7.75,10.93-8.2c3.14-0.26,6.16,0.14,9,1.61C54.71,55.59,56.7,58.96,57.44,62.11z"/>
											<path d="M185.15,62.11c-2.62,0-5.14,0.01-7.66-0.02c-0.18,0-0.42-0.23-0.51-0.41c-1.76-3.59-6.88-3.46-8.92-1.51
												c-1,0.95-1.53,2.15-1.82,3.46c-0.67,3.01-0.72,6.03,0.15,9.01c0.67,2.26,2.05,3.92,4.53,4.31c1.69,0.26,3.35,0.11,4.84-0.82
												c0.41-0.26,0.77-0.64,1.09-1.02c0.79-0.93,1.75-1.37,2.98-1.34c1.82,0.05,3.65,0.01,5.55,0.01c-0.13,0.43-0.22,0.82-0.35,1.19
												c-1.79,4.99-5.42,7.71-10.58,8.51c-2.41,0.37-4.8,0.29-7.14-0.41c-3.83-1.14-6.51-3.65-7.89-7.34c-1.93-5.14-2.01-10.41-0.06-15.56
												c1.85-4.89,5.6-7.44,10.8-7.88c2.88-0.24,5.68,0.08,8.33,1.29C182.14,55.25,184.03,58.32,185.15,62.11z"/>
											<path d="M147.38,52.99c1.67,0,3.27-0.12,4.85,0.03c1.64,0.16,2.94,1.71,3.07,3.35c0.02,0.25,0.03,0.5,0.03,0.75
												c0,8.42,0,16.85,0,25.27c0,0.21,0,0.42,0,0.67c-2.67,0-5.29,0-7.94,0C147.38,73.02,147.38,62.99,147.38,52.99z"/>
											<path d="M167.89,93.1c2.65,0.06,5.27,0.01,7.87,0.21c1.95,0.15,3.28,1.53,3.53,3.26c0.32,2.18-0.42,3.7-2.27,4.65
												c-0.08,0.04-0.16,0.09-0.29,0.15c0.84,2.13,1.68,4.25,2.55,6.45c-0.93,0-1.79,0.02-2.64-0.02c-0.12,0-0.27-0.23-0.33-0.39
												c-0.66-1.7-1.31-3.4-1.93-5.11c-0.13-0.35-0.28-0.51-0.68-0.5c-1.03,0.04-2.07,0.01-3.18,0.01c0,2.01,0,3.98,0,5.98
												c-0.91,0-1.75,0-2.63,0C167.89,102.95,167.89,98.09,167.89,93.1z M170.54,99.62c1.37,0,2.71,0.08,4.04-0.02
												c1.21-0.1,1.9-0.86,1.97-1.89c0.08-1.18-0.4-2.08-1.5-2.24c-1.48-0.21-3-0.19-4.51-0.27C170.54,96.77,170.54,98.18,170.54,99.62z"
												/>
											<path d="M154.24,108.06c-2.16,0-3.8-0.91-4.93-2.76c-1.83-3-1.61-7.41,0.4-10.13c2.24-3.02,7.4-3.08,9.51,0.35
												c1.07,1.74,1.43,3.62,1.32,5.62c-0.07,1.34-0.36,2.62-1.02,3.81C158.39,106.98,156.56,108.06,154.24,108.06z M157.79,100.45
												c-0.21-1.05-0.33-2.23-0.68-3.33c-0.44-1.41-1.42-2.03-2.8-2.03c-1.38,0.01-2.36,0.64-2.83,2.02c-0.75,2.21-0.76,4.45-0.03,6.67
												c0.49,1.48,1.49,2.14,2.93,2.12c1.31-0.02,2.47-0.87,2.85-2.27C157.51,102.63,157.59,101.59,157.79,100.45z"/>
											<path d="M200.94,104.28c0.73-0.16,1.42-0.32,2.12-0.47c0.13-0.03,0.26-0.02,0.39-0.04c0.96,1.97,3.45,2.77,5.42,1.76
												c0.68-0.35,1.11-0.87,1.06-1.7c-0.05-0.8-0.45-1.35-1.21-1.57c-1.25-0.37-2.51-0.68-3.77-1.04c-2.25-0.63-3.25-1.91-3.24-4.08
												c0.01-1.77,1.05-3.23,2.86-3.84c1.98-0.68,3.94-0.54,5.79,0.48c0.91,0.5,1.55,1.23,1.81,2.31c-0.84,0.21-1.65,0.41-2.45,0.61
												c-0.99-1.52-2.24-2-3.89-1.5c-0.83,0.25-1.33,0.8-1.37,1.52c-0.04,0.77,0.3,1.31,1.21,1.61c1.13,0.37,2.29,0.62,3.43,0.94
												c1.3,0.36,2.53,0.82,3.2,2.13c1.04,2.02,0.39,4.43-1.54,5.65c-2.18,1.38-5.95,1.29-8.06-0.19
												C201.81,106.28,201.21,105.4,200.94,104.28z"/>
											<path d="M123.08,96.13c-0.83,0.21-1.63,0.41-2.41,0.6c-0.96-1.52-2.28-2.02-3.95-1.49c-0.78,0.25-1.26,0.8-1.31,1.51
												c-0.05,0.71,0.27,1.29,1.1,1.57c1.16,0.39,2.36,0.65,3.54,0.99c1.18,0.33,2.32,0.72,3.02,1.83c1.26,2,0.7,4.58-1.27,5.89
												c-2.22,1.47-6.09,1.38-8.25-0.2c-0.86-0.63-1.38-1.47-1.69-2.54c0.86-0.18,1.69-0.36,2.51-0.54c0.99,1.98,3.39,2.78,5.38,1.83
												c0.71-0.34,1.17-0.86,1.12-1.71c-0.05-0.83-0.48-1.37-1.26-1.6c-1.25-0.36-2.52-0.67-3.77-1.03c-2-0.57-3.06-1.75-3.18-3.48
												c-0.15-2.22,0.87-3.8,2.99-4.48c1.93-0.62,3.83-0.46,5.63,0.52C122.3,94.33,122.93,95.17,123.08,96.13z"/>
											<path d="M111.96,49.76c-1.79,0.06-3.44,0.08-5.08,0.18c-1.16,0.07-1.94-0.41-2.59-1.34c-0.55-0.78-1.22-1.47-1.88-2.24
												c-0.84,1.05-1.64,2.05-2.46,3.04c-0.15,0.18-0.42,0.36-0.65,0.37c-1.53,0.04-3.07,0.05-4.61,0.04c-0.53,0-1.06-0.07-1.7-0.12
												c0.31-0.54,0.54-1.02,0.85-1.44c0.78-1.04,1.54-2.12,2.42-3.07c1.21-1.3,2.7-2.17,4.55-2.17c1.52,0,3.04-0.04,4.55,0.11
												c1.58,0.15,2.78,1.09,3.69,2.35C110.02,46.8,110.91,48.19,111.96,49.76z"/>
											<path d="M130.86,93.1c2.51,0.06,5-0.01,7.46,0.22c2.26,0.21,3.61,2.08,3.57,4.43c-0.04,2.11-1.64,3.91-3.74,4.18
												c-0.66,0.09-1.34,0.09-2.01,0.1c-0.86,0.02-1.73,0-2.65,0c0,1.94,0,3.83,0,5.76c-0.9,0-1.74,0-2.62,0
												C130.86,102.95,130.86,98.1,130.86,93.1z M133.49,99.64c1.36,0,2.67,0.08,3.96-0.03c0.97-0.08,1.58-0.9,1.66-1.93
												c0.07-0.92-0.45-1.84-1.29-2.1c-1.42-0.44-2.88-0.14-4.32-0.24C133.49,96.86,133.49,98.26,133.49,99.64z"/>
											<path d="M191.98,107.81c-1.01,0-1.9,0-2.87,0c0-4.11,0-8.19,0-12.34c-1.32,0-2.58,0-3.88,0c0-0.78,0-1.5,0-2.26
												c3.5,0,7.01,0,10.56,0c0,0.72,0,1.45,0,2.25c-1.27,0-2.51,0-3.82,0C191.98,99.59,191.98,103.68,191.98,107.81z"/>
										</g>
										</svg>
									</div>
									<div  id="escudo-peito-direito"  class="parte-impressa escudo-manequim  escudo-peito-direito active">

										<!-- Generator: Adobe Illustrator 21.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
										<svg version="1.1" id="Camada_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											 viewBox="0 0 80.9 105.4" enable-background="new 0 0 80.9 105.4" xml:space="preserve">
										<path class="escudo-camisa" fill="#949494" d="M40.6,105.4c0,0,42.4-8.1,40.2-51.3C80.3,46.8,80.9,0,80.9,0H0.2L0,55.8C0,55.8-3,94.7,40.6,105.4z"/>
										<image overflow="visible" width="152" height="200" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJgAAADICAYAAAAUTCjWAAABJmlDQ1BBZG9iZSBSR0IgKDE5OTgp
										AAAoz2NgYDJwdHFyZRJgYMjNKykKcndSiIiMUmA/z8DGwMwABonJxQWOAQE+IHZefl4qAwb4do2B
										EURf1gWZxUAa4EouKCoB0n+A2CgltTiZgYHRAMjOLi8pAIozzgGyRZKywewNIHZRSJAzkH0EyOZL
										h7CvgNhJEPYTELsI6Akg+wtIfTqYzcQBNgfClgGxS1IrQPYyOOcXVBZlpmeUKBhaWloqOKbkJ6Uq
										BFcWl6TmFit45iXnFxXkFyWWpKYA1ULcBwaCEIWgENMAarTQZKAyAMUDhPU5EBy+jGJnEGIIkFxa
										VAZlMjIZE+YjzJgjwcDgv5SBgeUPQsykl4FhgQ4DA/9UhJiaIQODgD4Dw745AMDGT/0ZOjZcAAAA
										CXBIWXMAABcSAAAXEgFnn9JSAAAGumlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0
										IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4
										bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxNDUg
										NzkuMTYzNDk5LCAyMDE4LzA4LzEzLTE2OjQwOjIyICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpy
										ZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRl
										c2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFw
										LzEuMC8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxu
										czpzdEV2dD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlRXZlbnQj
										IiB4bWxuczpwaG90b3Nob3A9Imh0dHA6Ly9ucy5hZG9iZS5jb20vcGhvdG9zaG9wLzEuMC8iIHht
										bG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIgeG1wOkNyZWF0b3JUb29s
										PSJBZG9iZSBQaG90b3Nob3AgQ0MgKFdpbmRvd3MpIiB4bXA6Q3JlYXRlRGF0ZT0iMjAyMC0xMS0w
										NlQxNjoyODozOC0wMzowMCIgeG1wOk1ldGFkYXRhRGF0ZT0iMjAyMC0xMi0xOFQxNTowNDoxMS0w
										MzowMCIgeG1wOk1vZGlmeURhdGU9IjIwMjAtMTItMThUMTU6MDQ6MTEtMDM6MDAiIHhtcE1NOklu
										c3RhbmNlSUQ9InhtcC5paWQ6MzhmYjg3ZjMtOGFlZi00MDQ3LWE5NWYtOTNkZWFiZTQ0ZmY0IiB4
										bXBNTTpEb2N1bWVudElEPSJhZG9iZTpkb2NpZDpwaG90b3Nob3A6OTYwYWU5N2ItYjM2Zi04ODQx
										LWIyNzItMjM2MjQwMjkxMTc0IiB4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ9InhtcC5kaWQ6MGI2
										OTU2ODUtMDRkMC1kNzQwLTk4ZWEtMTAzNTEwOGUwOTJlIiBwaG90b3Nob3A6Q29sb3JNb2RlPSIz
										IiBwaG90b3Nob3A6SUNDUHJvZmlsZT0iQWRvYmUgUkdCICgxOTk4KSIgZGM6Zm9ybWF0PSJpbWFn
										ZS9wbmciPiA8eG1wTU06SGlzdG9yeT4gPHJkZjpTZXE+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJj
										cmVhdGVkIiBzdEV2dDppbnN0YW5jZUlEPSJ4bXAuaWlkOjBiNjk1Njg1LTA0ZDAtZDc0MC05OGVh
										LTEwMzUxMDhlMDkyZSIgc3RFdnQ6d2hlbj0iMjAyMC0xMS0wNlQxNjoyODozOC0wMzowMCIgc3RF
										dnQ6c29mdHdhcmVBZ2VudD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSIvPiA8cmRmOmxp
										IHN0RXZ0OmFjdGlvbj0ic2F2ZWQiIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6MzY0NjA5Y2It
										NjI1NS05ZTRhLWI2ZTMtNGIzMGY2YzVmNjBmIiBzdEV2dDp3aGVuPSIyMDIwLTExLTA2VDE2OjI4
										OjM4LTAzOjAwIiBzdEV2dDpzb2Z0d2FyZUFnZW50PSJBZG9iZSBQaG90b3Nob3AgQ0MgKFdpbmRv
										d3MpIiBzdEV2dDpjaGFuZ2VkPSIvIi8+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJzYXZlZCIgc3RF
										dnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDozOGZiODdmMy04YWVmLTQwNDctYTk1Zi05M2RlYWJlNDRm
										ZjQiIHN0RXZ0OndoZW49IjIwMjAtMTItMThUMTU6MDQ6MTEtMDM6MDAiIHN0RXZ0OnNvZnR3YXJl
										QWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE5IChXaW5kb3dzKSIgc3RFdnQ6Y2hhbmdlZD0i
										LyIvPiA8L3JkZjpTZXE+IDwveG1wTU06SGlzdG9yeT4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRm
										OlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7qUmDAAACMwElEQVR42u19BZzb
										Rvr2K9vLnN0wNoxNUkjKDEkxZWa4XlNmZma4whWu3CszpHBNKSk3DA0zw2YZbOl7n3dmJFlr79rb
										tAffX/lN7DXI0swzL4PlTB30CRHtw2M5/SmHpYblfx7yPbe85+7fIe91+WxInyvkvW/es0KBc4bi
										P2f5zhH32VD8Z91zheLftwLntMLJP2t+3wol+YwV/3eTz1nx10VW0/cT/p6V4Dr50Qm87s6hf34D
										8+/OISV43Qwcju9RRhseSyL8rL1+p/OfAix56gcLNQWZ/0aDExX3mpUAEL5FC05oKAi2wMKZ56Fw
										AoCG4p+75wjH/22Go8/pnsv3PScIsrB63XzWsRKAMBFYrSTgCgIwsJHlGoIb0moGQMmARsnAZV7r
										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
										Vn0XI/4AAAAASUVORK5CYII=" transform="matrix(0.48 0 0 0.48 3.9652 4.7)">
										</image>
										</svg>

									</div>
									<div  id="escudo-peito-meio"  class="parte-impressa escudo-manequim escudo-peito-meio">

	<!-- Generator: Adobe Illustrator 21.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
	<svg version="1.1" id="Camada_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		 viewBox="0 0 80.9 105.4" enable-background="new 0 0 80.9 105.4" xml:space="preserve">
	<path class="escudo-camisa" fill="#949494" d="M40.6,105.4c0,0,42.4-8.1,40.2-51.3C80.3,46.8,80.9,0,80.9,0H0.2L0,55.8C0,55.8-3,94.7,40.6,105.4z"/>
	<image overflow="visible" width="152" height="200" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJgAAADICAYAAAAUTCjWAAABJmlDQ1BBZG9iZSBSR0IgKDE5OTgp
	AAAoz2NgYDJwdHFyZRJgYMjNKykKcndSiIiMUmA/z8DGwMwABonJxQWOAQE+IHZefl4qAwb4do2B
	EURf1gWZxUAa4EouKCoB0n+A2CgltTiZgYHRAMjOLi8pAIozzgGyRZKywewNIHZRSJAzkH0EyOZL
	h7CvgNhJEPYTELsI6Akg+wtIfTqYzcQBNgfClgGxS1IrQPYyOOcXVBZlpmeUKBhaWloqOKbkJ6Uq
	BFcWl6TmFit45iXnFxXkFyWWpKYA1ULcBwaCEIWgENMAarTQZKAyAMUDhPU5EBy+jGJnEGIIkFxa
	VAZlMjIZE+YjzJgjwcDgv5SBgeUPQsykl4FhgQ4DA/9UhJiaIQODgD4Dw745AMDGT/0ZOjZcAAAA
	CXBIWXMAABcSAAAXEgFnn9JSAAAGumlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0
	IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4
	bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxNDUg
	NzkuMTYzNDk5LCAyMDE4LzA4LzEzLTE2OjQwOjIyICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpy
	ZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRl
	c2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFw
	LzEuMC8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxu
	czpzdEV2dD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlRXZlbnQj
	IiB4bWxuczpwaG90b3Nob3A9Imh0dHA6Ly9ucy5hZG9iZS5jb20vcGhvdG9zaG9wLzEuMC8iIHht
	bG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIgeG1wOkNyZWF0b3JUb29s
	PSJBZG9iZSBQaG90b3Nob3AgQ0MgKFdpbmRvd3MpIiB4bXA6Q3JlYXRlRGF0ZT0iMjAyMC0xMS0w
	NlQxNjoyODozOC0wMzowMCIgeG1wOk1ldGFkYXRhRGF0ZT0iMjAyMC0xMi0xOFQxNTowNDoxMS0w
	MzowMCIgeG1wOk1vZGlmeURhdGU9IjIwMjAtMTItMThUMTU6MDQ6MTEtMDM6MDAiIHhtcE1NOklu
	c3RhbmNlSUQ9InhtcC5paWQ6MzhmYjg3ZjMtOGFlZi00MDQ3LWE5NWYtOTNkZWFiZTQ0ZmY0IiB4
	bXBNTTpEb2N1bWVudElEPSJhZG9iZTpkb2NpZDpwaG90b3Nob3A6OTYwYWU5N2ItYjM2Zi04ODQx
	LWIyNzItMjM2MjQwMjkxMTc0IiB4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ9InhtcC5kaWQ6MGI2
	OTU2ODUtMDRkMC1kNzQwLTk4ZWEtMTAzNTEwOGUwOTJlIiBwaG90b3Nob3A6Q29sb3JNb2RlPSIz
	IiBwaG90b3Nob3A6SUNDUHJvZmlsZT0iQWRvYmUgUkdCICgxOTk4KSIgZGM6Zm9ybWF0PSJpbWFn
	ZS9wbmciPiA8eG1wTU06SGlzdG9yeT4gPHJkZjpTZXE+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJj
	cmVhdGVkIiBzdEV2dDppbnN0YW5jZUlEPSJ4bXAuaWlkOjBiNjk1Njg1LTA0ZDAtZDc0MC05OGVh
	LTEwMzUxMDhlMDkyZSIgc3RFdnQ6d2hlbj0iMjAyMC0xMS0wNlQxNjoyODozOC0wMzowMCIgc3RF
	dnQ6c29mdHdhcmVBZ2VudD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSIvPiA8cmRmOmxp
	IHN0RXZ0OmFjdGlvbj0ic2F2ZWQiIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6MzY0NjA5Y2It
	NjI1NS05ZTRhLWI2ZTMtNGIzMGY2YzVmNjBmIiBzdEV2dDp3aGVuPSIyMDIwLTExLTA2VDE2OjI4
	OjM4LTAzOjAwIiBzdEV2dDpzb2Z0d2FyZUFnZW50PSJBZG9iZSBQaG90b3Nob3AgQ0MgKFdpbmRv
	d3MpIiBzdEV2dDpjaGFuZ2VkPSIvIi8+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJzYXZlZCIgc3RF
	dnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDozOGZiODdmMy04YWVmLTQwNDctYTk1Zi05M2RlYWJlNDRm
	ZjQiIHN0RXZ0OndoZW49IjIwMjAtMTItMThUMTU6MDQ6MTEtMDM6MDAiIHN0RXZ0OnNvZnR3YXJl
	QWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE5IChXaW5kb3dzKSIgc3RFdnQ6Y2hhbmdlZD0i
	LyIvPiA8L3JkZjpTZXE+IDwveG1wTU06SGlzdG9yeT4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRm
	OlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7qUmDAAACMwElEQVR42u19BZzb
	Rvr2K9vLnN0wNoxNUkjKDEkxZWa4XlNmZma4whWu3CszpHBNKSk3DA0zw2YZbOl7n3dmJFlr79rb
	tAffX/lN7DXI0swzL4PlTB30CRHtw2M5/SmHpYblfx7yPbe85+7fIe91+WxInyvkvW/es0KBc4bi
	P2f5zhH32VD8Z91zheLftwLntMLJP2t+3wol+YwV/3eTz1nx10VW0/cT/p6V4Dr50Qm87s6hf34D
	8+/OISV43Qwcju9RRhseSyL8rL1+p/OfAix56gcLNQWZ/0aDExX3mpUAEL5FC05oKAi2wMKZ56Fw
	AoCG4p+75wjH/22Go8/pnsv3PScIsrB63XzWsRKAMBFYrSTgCgIwsJHlGoIb0moGQMmARsnAZV7r
	BIDZfy7VCsXfTEKKZSWgMMEbtQIL7Z/oJNQqIcUKfCbkfz0cv3jBBbaa+VzID+hQAPQBsIaSXE/w
	WkOBjdaEqgY3WqLPWfGfSwlYzVGshMAyz50gwJbxGMcjNwDRzcMOW2KFToANxlGq4C4M7D5ZvFDi
	zwRZHADRhLqFm4LVSQBQK5wE1P7PhZuyLyvZ+QLsOik7DCWm3BRKvBmDlMuxvHu2EgDOsMu4v/2/
	R82xQwET/1elxC2nh34tFgkg4mceZ/xxVCxwOL63nAQfcXz36yQ6pRU/cf6f8U+eY/nObfl+Sz8P
	Wd7vhQKT6pB37riN4D+H5VsXK35z+X/bspJsQCv5HPnfd5L8hn8+Ek5kIlHF8e6f0iEnTgvv28/x
	fwZgVhBgIfqfO/wzyMQ6VstP+dHK5LvN88mBib4T0mvRoMEX0VSSH62MwC5IcA67QbPPTL2YMR78
	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
	Vn0XI/4AAAAASUVORK5CYII=" transform="matrix(0.48 0 0 0.48 3.9652 4.7)">
	</image>
	</svg>
									</div>
									<div  id="escudo-peito-meio-abdomen"  class="parte-impressa escudo-manequim escudo-peito-meio-abdomen">

	<!-- Generator: Adobe Illustrator 21.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
	<svg version="1.1" id="Camada_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		 viewBox="0 0 80.9 105.4" enable-background="new 0 0 80.9 105.4" xml:space="preserve">
	<path class="escudo-camisa" fill="#949494" d="M40.6,105.4c0,0,42.4-8.1,40.2-51.3C80.3,46.8,80.9,0,80.9,0H0.2L0,55.8C0,55.8-3,94.7,40.6,105.4z"/>
	<image overflow="visible" width="152" height="200" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJgAAADICAYAAAAUTCjWAAABJmlDQ1BBZG9iZSBSR0IgKDE5OTgp
	AAAoz2NgYDJwdHFyZRJgYMjNKykKcndSiIiMUmA/z8DGwMwABonJxQWOAQE+IHZefl4qAwb4do2B
	EURf1gWZxUAa4EouKCoB0n+A2CgltTiZgYHRAMjOLi8pAIozzgGyRZKywewNIHZRSJAzkH0EyOZL
	h7CvgNhJEPYTELsI6Akg+wtIfTqYzcQBNgfClgGxS1IrQPYyOOcXVBZlpmeUKBhaWloqOKbkJ6Uq
	BFcWl6TmFit45iXnFxXkFyWWpKYA1ULcBwaCEIWgENMAarTQZKAyAMUDhPU5EBy+jGJnEGIIkFxa
	VAZlMjIZE+YjzJgjwcDgv5SBgeUPQsykl4FhgQ4DA/9UhJiaIQODgD4Dw745AMDGT/0ZOjZcAAAA
	CXBIWXMAABcSAAAXEgFnn9JSAAAGumlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0
	IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4
	bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxNDUg
	NzkuMTYzNDk5LCAyMDE4LzA4LzEzLTE2OjQwOjIyICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpy
	ZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRl
	c2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFw
	LzEuMC8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxu
	czpzdEV2dD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlRXZlbnQj
	IiB4bWxuczpwaG90b3Nob3A9Imh0dHA6Ly9ucy5hZG9iZS5jb20vcGhvdG9zaG9wLzEuMC8iIHht
	bG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIgeG1wOkNyZWF0b3JUb29s
	PSJBZG9iZSBQaG90b3Nob3AgQ0MgKFdpbmRvd3MpIiB4bXA6Q3JlYXRlRGF0ZT0iMjAyMC0xMS0w
	NlQxNjoyODozOC0wMzowMCIgeG1wOk1ldGFkYXRhRGF0ZT0iMjAyMC0xMi0xOFQxNTowNDoxMS0w
	MzowMCIgeG1wOk1vZGlmeURhdGU9IjIwMjAtMTItMThUMTU6MDQ6MTEtMDM6MDAiIHhtcE1NOklu
	c3RhbmNlSUQ9InhtcC5paWQ6MzhmYjg3ZjMtOGFlZi00MDQ3LWE5NWYtOTNkZWFiZTQ0ZmY0IiB4
	bXBNTTpEb2N1bWVudElEPSJhZG9iZTpkb2NpZDpwaG90b3Nob3A6OTYwYWU5N2ItYjM2Zi04ODQx
	LWIyNzItMjM2MjQwMjkxMTc0IiB4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ9InhtcC5kaWQ6MGI2
	OTU2ODUtMDRkMC1kNzQwLTk4ZWEtMTAzNTEwOGUwOTJlIiBwaG90b3Nob3A6Q29sb3JNb2RlPSIz
	IiBwaG90b3Nob3A6SUNDUHJvZmlsZT0iQWRvYmUgUkdCICgxOTk4KSIgZGM6Zm9ybWF0PSJpbWFn
	ZS9wbmciPiA8eG1wTU06SGlzdG9yeT4gPHJkZjpTZXE+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJj
	cmVhdGVkIiBzdEV2dDppbnN0YW5jZUlEPSJ4bXAuaWlkOjBiNjk1Njg1LTA0ZDAtZDc0MC05OGVh
	LTEwMzUxMDhlMDkyZSIgc3RFdnQ6d2hlbj0iMjAyMC0xMS0wNlQxNjoyODozOC0wMzowMCIgc3RF
	dnQ6c29mdHdhcmVBZ2VudD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSIvPiA8cmRmOmxp
	IHN0RXZ0OmFjdGlvbj0ic2F2ZWQiIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6MzY0NjA5Y2It
	NjI1NS05ZTRhLWI2ZTMtNGIzMGY2YzVmNjBmIiBzdEV2dDp3aGVuPSIyMDIwLTExLTA2VDE2OjI4
	OjM4LTAzOjAwIiBzdEV2dDpzb2Z0d2FyZUFnZW50PSJBZG9iZSBQaG90b3Nob3AgQ0MgKFdpbmRv
	d3MpIiBzdEV2dDpjaGFuZ2VkPSIvIi8+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJzYXZlZCIgc3RF
	dnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDozOGZiODdmMy04YWVmLTQwNDctYTk1Zi05M2RlYWJlNDRm
	ZjQiIHN0RXZ0OndoZW49IjIwMjAtMTItMThUMTU6MDQ6MTEtMDM6MDAiIHN0RXZ0OnNvZnR3YXJl
	QWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE5IChXaW5kb3dzKSIgc3RFdnQ6Y2hhbmdlZD0i
	LyIvPiA8L3JkZjpTZXE+IDwveG1wTU06SGlzdG9yeT4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRm
	OlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7qUmDAAACMwElEQVR42u19BZzb
	Rvr2K9vLnN0wNoxNUkjKDEkxZWa4XlNmZma4whWu3CszpHBNKSk3DA0zw2YZbOl7n3dmJFlr79rb
	tAffX/lN7DXI0swzL4PlTB30CRHtw2M5/SmHpYblfx7yPbe85+7fIe91+WxInyvkvW/es0KBc4bi
	P2f5zhH32VD8Z91zheLftwLntMLJP2t+3wol+YwV/3eTz1nx10VW0/cT/p6V4Dr50Qm87s6hf34D
	8+/OISV43Qwcju9RRhseSyL8rL1+p/OfAix56gcLNQWZ/0aDExX3mpUAEL5FC05oKAi2wMKZ56Fw
	AoCG4p+75wjH/22Go8/pnsv3PScIsrB63XzWsRKAMBFYrSTgCgIwsJHlGoIb0moGQMmARsnAZV7r
	BIDZfy7VCsXfTEKKZSWgMMEbtQIL7Z/oJNQqIcUKfCbkfz0cv3jBBbaa+VzID+hQAPQBsIaSXE/w
	WkOBjdaEqgY3WqLPWfGfSwlYzVGshMAyz50gwJbxGMcjNwDRzcMOW2KFToANxlGq4C4M7D5ZvFDi
	zwRZHADRhLqFm4LVSQBQK5wE1P7PhZuyLyvZ+QLsOik7DCWm3BRKvBmDlMuxvHu2EgDOsMu4v/2/
	R82xQwET/1elxC2nh34tFgkg4mceZ/xxVCxwOL63nAQfcXz36yQ6pRU/cf6f8U+eY/nObfl+Sz8P
	Wd7vhQKT6pB37riN4D+H5VsXK35z+X/bspJsQCv5HPnfd5L8hn8+Ek5kIlHF8e6f0iEnTgvv28/x
	fwZgVhBgIfqfO/wzyMQ6VstP+dHK5LvN88mBib4T0mvRoMEX0VSSH62MwC5IcA67QbPPTL2YMR78
	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
	Vn0XI/4AAAAASUVORK5CYII=" transform="matrix(0.48 0 0 0.48 3.9652 4.7)">
	</image>
	</svg>
									</div>
								</div>
								<div id="calcao-frente-png" class="parte-manequim calcao active">
									<img src="images/simulador/calcao.png">
									<div id="oceanica-perna-direita"  class="parte-impressa oceanica-manequim oceanica-perna-direita">

										<svg fill="#4e4e4e" class="oceanica-calcao" version="1.1" id="oceanica-3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											 viewBox="0 0 212.67 107.95" enable-background="new 0 0 212.67 107.95" xml:space="preserve">
										<g>
											<path d="M0.12,66.04c0.16-0.96,0.29-1.92,0.47-2.88c0.65-3.44,2.11-6.4,4.99-8.54c1.81-1.34,3.86-2.03,6.07-2.29
												c2.37-0.28,4.72-0.19,7.02,0.48c3.97,1.16,6.5,3.87,7.97,7.64c1.16,2.97,1.44,6.07,1.22,9.23c-0.14,2.05-0.53,4.02-1.3,5.93
												c-1.74,4.34-4.9,6.89-9.49,7.73c-2.71,0.5-5.35,0.33-7.97-0.49C4.75,81.49,2,78.59,0.95,74.14c-0.33-1.41-0.49-2.87-0.73-4.31
												c-0.02-0.15-0.07-0.3-0.11-0.44C0.12,68.27,0.12,67.16,0.12,66.04z M7.84,67.68c0.08,1.94,0.27,4.16,1.1,6.3
												c1.05,2.67,4.43,3.68,6.46,3.08c2.06-0.62,3.26-2.09,3.99-4c0.65-1.71,0.79-3.52,0.8-5.33c0.01-1.77-0.15-3.53-0.9-5.18
												c-1.11-2.47-3.07-3.87-5.54-3.63c-2.91,0.27-4.29,1.45-5.24,4.05C7.99,64.38,7.84,65.87,7.84,67.68z"/>
											<path d="M169.33,20.05c-2.95-1.41-6.02-2.5-9.22-3.17c-4.24-0.89-8.53-1.33-12.87-1.23c-3.72,0.08-7.4,0.49-10.97,1.56
												c-1.87,0.56-3.65,1.29-5.25,2.44c-3.31,2.4-3.28,5.64-1.03,8.44c1.59,1.97,3.75,3.15,6.03,4.12c3.18,1.35,6.53,2.08,9.92,2.67
												c5.39,0.94,10.8,0.78,16.22,0.48c3.23-0.18,6.45-0.35,9.67-0.62c3.23-0.27,6.46-0.64,9.69-0.99c1.6-0.17,3.2-0.39,4.8-0.59
												c0.09-0.01,0.18,0,0.3,0.11c-0.82,0.34-1.64,0.7-2.47,1.02c-4.21,1.59-8.57,2.66-12.99,3.45c-3.5,0.62-7.01,1.16-10.53,1.59
												c-3.14,0.39-6.31,0.69-9.47,0.85c-5.09,0.26-10.19,0.5-15.28,0.5c-4.57,0-9.16-0.21-13.72-0.53c-6.9-0.49-13.75-1.42-20.4-3.44
												c-3.17-0.96-6.24-2.16-8.94-4.15c-2.14-1.58-3.59-3.61-3.96-6.31c-0.24-1.73,0.16-3.36,0.94-4.9c1.23-2.44,3.1-4.33,5.25-5.97
												c0.21-0.16,0.43-0.32,0.64-0.61c-0.21,0-0.42,0-0.63,0c-5.04,0.04-10,0.71-14.9,1.8c-10.09,2.23-19.57,6.1-28.82,10.62
												c-8.17,4-16.05,8.51-23.87,13.14c-0.2,0.12-0.4,0.23-0.69,0.27c0.09-0.14,0.18-0.29,0.29-0.42c2.39-2.98,5.13-5.64,8.04-8.1
												C49.36,20.06,65.37,11.12,83.07,5.25c5.52-1.83,11.18-3.18,16.93-4.05c5.7-0.86,11.43-1.14,17.2-0.88
												c3.98,0.18,7.94,0.54,11.86,1.21c13.44,2.28,25.85,7.03,36.75,15.38c1.25,0.96,2.41,2.02,3.62,3.03
												C169.4,19.97,169.36,20.01,169.33,20.05z M148.94,35.41c0,0.03,0,0.05,0,0.08c-0.55-0.05-1.09-0.11-1.64-0.16
												c-3.72-0.31-7.4-0.85-11.02-1.76c-3.29-0.82-6.48-1.9-9.36-3.76c-1.43-0.93-2.72-2.03-3.58-3.53c-1.49-2.62-1.23-5.4,1.49-7.37
												c1.71-1.24,3.64-1.96,5.65-2.51c3.28-0.9,6.63-1.27,10.01-1.43c4.53-0.21,9.03,0.05,13.51,0.69c0.88,0.13,1.75,0.27,2.63,0.4
												c0.01-0.06,0.02-0.11,0.03-0.17c-2.29-0.37-4.56-0.84-6.86-1.1c-3.09-0.34-6.2-0.62-9.3-0.76c-4.91-0.22-9.8,0.06-14.6,1.2
												c-2.37,0.56-4.65,1.35-6.61,2.85c-1.09,0.83-1.97,1.85-2.35,3.2c-0.6,2.14-0.13,4.11,1.14,5.9c1.31,1.84,3.14,3.03,5.14,3.98
												c4.45,2.1,9.21,3,14.04,3.59c2.46,0.3,4.93,0.49,7.41,0.65C146.1,35.49,147.53,35.41,148.94,35.41z"/>
											<path d="M67.65,70.07c0.14,1.91,0.41,3.67,1.66,5.13c0.9,1.06,2.03,1.64,3.37,1.79c1.53,0.17,3.05,0.1,4.4-0.76
												c0.46-0.29,0.9-0.67,1.24-1.09c0.61-0.76,1.36-1.31,2.32-1.33c2.07-0.05,4.15-0.02,6.28-0.02c-0.7,2.71-1.98,5.01-4.14,6.79
												c-3.05,2.51-6.63,3.25-10.47,3.06c-2.6-0.13-5.04-0.8-7.16-2.39c-2.76-2.06-4.35-4.88-5.03-8.21c-0.83-4.06-0.83-8.1,0.46-12.07
												c1.71-5.22,5.69-8.27,11.17-8.69c2.59-0.2,5.11,0.04,7.53,0.98c4.06,1.58,6.32,4.71,7.41,8.81c0.65,2.44,0.74,4.93,0.7,7.43
												c-0.01,0.52-0.28,0.56-0.7,0.56c-6.1-0.01-12.2-0.01-18.29-0.01C68.17,70.07,67.95,70.07,67.65,70.07z M79.17,64.87
												c-0.22-3.87-2.09-6.24-6.24-6.02c-2.88,0.15-5.25,2.39-5.21,6.02C71.53,64.87,75.35,64.87,79.17,64.87z"/>
											<path d="M187.97,60.55c0.25-0.82,0.43-1.67,0.77-2.44c1.26-2.83,3.52-4.55,6.45-5.29c4.12-1.04,8.24-0.86,12.26,0.54
												c2.68,0.94,4.55,2.75,5.15,5.64c0.11,0.5,0.16,1.03,0.17,1.54c0.01,3.69,0.04,7.39,0,11.08c-0.02,2.25-0.38,4.44-1.57,6.41
												c-1.83,3.03-4.63,4.59-8.01,5.17c-2.39,0.41-4.81,0.62-7.24,0.37c-2.35-0.24-4.48-1.07-6.26-2.65c-1.29-1.14-1.95-2.65-2.22-4.32
												c-0.35-2.13-0.35-4.25,0.38-6.31c0.46-1.31,1.26-2.36,2.41-3.15c2.22-1.52,4.71-2.25,7.36-2.62c1.82-0.25,3.62-0.64,5.41-1.04
												c0.52-0.12,1.04-0.43,1.46-0.77c1.25-1.01,1.03-2.89-0.45-3.49c-2.18-0.88-4.45-1.07-6.69-0.2c-0.58,0.23-1.01,0.84-1.51,1.26
												c-0.16,0.13-0.34,0.33-0.52,0.33c-2.35,0.02-4.69,0.01-7.04,0.01C188.22,60.63,188.17,60.6,187.97,60.55z M205.51,67.91
												c-0.3,0.11-0.42,0.15-0.54,0.19c-1.52,0.46-3.03,0.94-4.55,1.39c-1.23,0.36-2.48,0.66-3.69,1.06c-1.01,0.34-1.6,1.12-1.91,2.14
												c-0.7,2.32,0.43,4.34,2.72,4.73c0.64,0.11,1.3,0.07,1.95,0.04c2.75-0.12,5.1-1.94,5.62-4.61
												C205.42,71.28,205.38,69.63,205.51,67.91z"/>
											<path d="M90.07,60.57c0.28-2.1,1.17-3.87,2.7-5.32c1.68-1.59,3.72-2.45,5.96-2.77c3.52-0.51,7.03-0.37,10.42,0.77
												c2.55,0.85,4.5,2.42,5.29,5.11c0.21,0.73,0.31,1.51,0.31,2.27c0.02,3.93,0.06,7.85-0.02,11.78c-0.08,3.71-1.49,6.81-4.65,8.94
												c-1.95,1.31-4.17,1.96-6.5,2.11c-1.86,0.12-3.73,0.21-5.58,0.12c-2.26-0.11-4.29-0.98-6.06-2.41c-1.1-0.88-1.81-2.04-2.19-3.38
												c-0.67-2.34-0.71-4.7-0.04-7.05c0.43-1.51,1.3-2.73,2.61-3.61c2.22-1.48,4.69-2.21,7.32-2.57c1.8-0.25,3.58-0.63,5.36-1.03
												c0.54-0.12,1.07-0.44,1.51-0.8c1.2-0.96,1.02-2.85-0.39-3.44c-2.23-0.93-4.56-1.11-6.85-0.21c-0.56,0.22-0.96,0.83-1.45,1.26
												c-0.14,0.13-0.32,0.31-0.48,0.31c-2.37,0.02-4.73,0.01-7.1,0.01C90.21,60.63,90.16,60.6,90.07,60.57z M107.49,68.05
												c-1.68,0.49-3.2,0.94-4.73,1.37c-1.21,0.34-2.45,0.62-3.66,0.98c-1.51,0.46-2.23,1.57-2.45,3.09c-0.27,1.89,0.8,3.52,2.67,3.88
												c0.71,0.13,1.45,0.13,2.18,0.1c2.79-0.11,5.09-1.94,5.62-4.66C107.43,71.25,107.38,69.64,107.49,68.05z"/>
											<path d="M144.12,83.1c-1.48,0-2.89,0.07-4.28-0.02c-2.23-0.14-3.56-1.68-3.56-4.02c-0.01-4.96,0-9.93-0.01-14.89
												c0-0.52,0-1.04-0.07-1.55c-0.23-1.62-1.14-2.73-2.6-3.42c-1.48-0.7-3-0.79-4.54-0.28c-2.26,0.74-3.28,2.3-3.3,4.97
												c-0.02,2.62,0,5.23,0,7.85c0,3.54,0,7.08,0,10.62c0,0.23,0,0.45,0,0.72c-2.66,0-5.27,0-7.94,0c-0.01-0.21-0.03-0.42-0.03-0.62
												c0-5.66-0.01-11.31,0.01-16.97c0.01-2.31,0.22-4.6,1.12-6.77c0.7-1.69,1.81-3.01,3.39-3.95c2.59-1.54,5.39-2.46,8.4-2.52
												c3.51-0.08,6.77,0.89,9.66,2.91c2.01,1.4,2.94,3.52,3.35,5.85c0.26,1.47,0.41,2.97,0.42,4.46c0.05,5.67,0.02,11.35,0.02,17.02
												C144.15,82.66,144.14,82.85,144.12,83.1z"/>
											<path d="M57.44,62.11c-2.55,0-5.08,0.01-7.62-0.02c-0.17,0-0.39-0.21-0.48-0.38c-1.67-2.89-5.55-3.82-8.35-1.99
												c-1.12,0.73-1.79,1.81-2.15,3.04c-0.99,3.36-1.05,6.76-0.01,10.11c0.67,2.17,2.09,3.72,4.47,4.08c1.69,0.25,3.35,0.1,4.83-0.84
												c0.4-0.25,0.74-0.62,1.04-0.99c0.8-0.95,1.77-1.4,3.03-1.37c1.82,0.05,3.65,0.01,5.53,0.01c-0.76,2.92-2.18,5.35-4.59,7.15
												c-2.98,2.23-6.39,2.88-10.02,2.71c-2.42-0.12-4.71-0.71-6.74-2.09c-2.86-1.94-4.57-4.68-5.34-8c-1.02-4.39-1.05-8.79,0.52-13.06
												c1.86-5.04,5.58-7.75,10.93-8.2c3.14-0.26,6.16,0.14,9,1.61C54.71,55.59,56.7,58.96,57.44,62.11z"/>
											<path d="M185.15,62.11c-2.62,0-5.14,0.01-7.66-0.02c-0.18,0-0.42-0.23-0.51-0.41c-1.76-3.59-6.88-3.46-8.92-1.51
												c-1,0.95-1.53,2.15-1.82,3.46c-0.67,3.01-0.72,6.03,0.15,9.01c0.67,2.26,2.05,3.92,4.53,4.31c1.69,0.26,3.35,0.11,4.84-0.82
												c0.41-0.26,0.77-0.64,1.09-1.02c0.79-0.93,1.75-1.37,2.98-1.34c1.82,0.05,3.65,0.01,5.55,0.01c-0.13,0.43-0.22,0.82-0.35,1.19
												c-1.79,4.99-5.42,7.71-10.58,8.51c-2.41,0.37-4.8,0.29-7.14-0.41c-3.83-1.14-6.51-3.65-7.89-7.34c-1.93-5.14-2.01-10.41-0.06-15.56
												c1.85-4.89,5.6-7.44,10.8-7.88c2.88-0.24,5.68,0.08,8.33,1.29C182.14,55.25,184.03,58.32,185.15,62.11z"/>
											<path d="M147.38,52.99c1.67,0,3.27-0.12,4.85,0.03c1.64,0.16,2.94,1.71,3.07,3.35c0.02,0.25,0.03,0.5,0.03,0.75
												c0,8.42,0,16.85,0,25.27c0,0.21,0,0.42,0,0.67c-2.67,0-5.29,0-7.94,0C147.38,73.02,147.38,62.99,147.38,52.99z"/>
											<path d="M167.89,93.1c2.65,0.06,5.27,0.01,7.87,0.21c1.95,0.15,3.28,1.53,3.53,3.26c0.32,2.18-0.42,3.7-2.27,4.65
												c-0.08,0.04-0.16,0.09-0.29,0.15c0.84,2.13,1.68,4.25,2.55,6.45c-0.93,0-1.79,0.02-2.64-0.02c-0.12,0-0.27-0.23-0.33-0.39
												c-0.66-1.7-1.31-3.4-1.93-5.11c-0.13-0.35-0.28-0.51-0.68-0.5c-1.03,0.04-2.07,0.01-3.18,0.01c0,2.01,0,3.98,0,5.98
												c-0.91,0-1.75,0-2.63,0C167.89,102.95,167.89,98.09,167.89,93.1z M170.54,99.62c1.37,0,2.71,0.08,4.04-0.02
												c1.21-0.1,1.9-0.86,1.97-1.89c0.08-1.18-0.4-2.08-1.5-2.24c-1.48-0.21-3-0.19-4.51-0.27C170.54,96.77,170.54,98.18,170.54,99.62z"
												/>
											<path d="M154.24,108.06c-2.16,0-3.8-0.91-4.93-2.76c-1.83-3-1.61-7.41,0.4-10.13c2.24-3.02,7.4-3.08,9.51,0.35
												c1.07,1.74,1.43,3.62,1.32,5.62c-0.07,1.34-0.36,2.62-1.02,3.81C158.39,106.98,156.56,108.06,154.24,108.06z M157.79,100.45
												c-0.21-1.05-0.33-2.23-0.68-3.33c-0.44-1.41-1.42-2.03-2.8-2.03c-1.38,0.01-2.36,0.64-2.83,2.02c-0.75,2.21-0.76,4.45-0.03,6.67
												c0.49,1.48,1.49,2.14,2.93,2.12c1.31-0.02,2.47-0.87,2.85-2.27C157.51,102.63,157.59,101.59,157.79,100.45z"/>
											<path d="M200.94,104.28c0.73-0.16,1.42-0.32,2.12-0.47c0.13-0.03,0.26-0.02,0.39-0.04c0.96,1.97,3.45,2.77,5.42,1.76
												c0.68-0.35,1.11-0.87,1.06-1.7c-0.05-0.8-0.45-1.35-1.21-1.57c-1.25-0.37-2.51-0.68-3.77-1.04c-2.25-0.63-3.25-1.91-3.24-4.08
												c0.01-1.77,1.05-3.23,2.86-3.84c1.98-0.68,3.94-0.54,5.79,0.48c0.91,0.5,1.55,1.23,1.81,2.31c-0.84,0.21-1.65,0.41-2.45,0.61
												c-0.99-1.52-2.24-2-3.89-1.5c-0.83,0.25-1.33,0.8-1.37,1.52c-0.04,0.77,0.3,1.31,1.21,1.61c1.13,0.37,2.29,0.62,3.43,0.94
												c1.3,0.36,2.53,0.82,3.2,2.13c1.04,2.02,0.39,4.43-1.54,5.65c-2.18,1.38-5.95,1.29-8.06-0.19
												C201.81,106.28,201.21,105.4,200.94,104.28z"/>
											<path d="M123.08,96.13c-0.83,0.21-1.63,0.41-2.41,0.6c-0.96-1.52-2.28-2.02-3.95-1.49c-0.78,0.25-1.26,0.8-1.31,1.51
												c-0.05,0.71,0.27,1.29,1.1,1.57c1.16,0.39,2.36,0.65,3.54,0.99c1.18,0.33,2.32,0.72,3.02,1.83c1.26,2,0.7,4.58-1.27,5.89
												c-2.22,1.47-6.09,1.38-8.25-0.2c-0.86-0.63-1.38-1.47-1.69-2.54c0.86-0.18,1.69-0.36,2.51-0.54c0.99,1.98,3.39,2.78,5.38,1.83
												c0.71-0.34,1.17-0.86,1.12-1.71c-0.05-0.83-0.48-1.37-1.26-1.6c-1.25-0.36-2.52-0.67-3.77-1.03c-2-0.57-3.06-1.75-3.18-3.48
												c-0.15-2.22,0.87-3.8,2.99-4.48c1.93-0.62,3.83-0.46,5.63,0.52C122.3,94.33,122.93,95.17,123.08,96.13z"/>
											<path d="M111.96,49.76c-1.79,0.06-3.44,0.08-5.08,0.18c-1.16,0.07-1.94-0.41-2.59-1.34c-0.55-0.78-1.22-1.47-1.88-2.24
												c-0.84,1.05-1.64,2.05-2.46,3.04c-0.15,0.18-0.42,0.36-0.65,0.37c-1.53,0.04-3.07,0.05-4.61,0.04c-0.53,0-1.06-0.07-1.7-0.12
												c0.31-0.54,0.54-1.02,0.85-1.44c0.78-1.04,1.54-2.12,2.42-3.07c1.21-1.3,2.7-2.17,4.55-2.17c1.52,0,3.04-0.04,4.55,0.11
												c1.58,0.15,2.78,1.09,3.69,2.35C110.02,46.8,110.91,48.19,111.96,49.76z"/>
											<path d="M130.86,93.1c2.51,0.06,5-0.01,7.46,0.22c2.26,0.21,3.61,2.08,3.57,4.43c-0.04,2.11-1.64,3.91-3.74,4.18
												c-0.66,0.09-1.34,0.09-2.01,0.1c-0.86,0.02-1.73,0-2.65,0c0,1.94,0,3.83,0,5.76c-0.9,0-1.74,0-2.62,0
												C130.86,102.95,130.86,98.1,130.86,93.1z M133.49,99.64c1.36,0,2.67,0.08,3.96-0.03c0.97-0.08,1.58-0.9,1.66-1.93
												c0.07-0.92-0.45-1.84-1.29-2.1c-1.42-0.44-2.88-0.14-4.32-0.24C133.49,96.86,133.49,98.26,133.49,99.64z"/>
											<path d="M191.98,107.81c-1.01,0-1.9,0-2.87,0c0-4.11,0-8.19,0-12.34c-1.32,0-2.58,0-3.88,0c0-0.78,0-1.5,0-2.26
												c3.5,0,7.01,0,10.56,0c0,0.72,0,1.45,0,2.25c-1.27,0-2.51,0-3.82,0C191.98,99.59,191.98,103.68,191.98,107.81z"/>
										</g>
										</svg>
										<h3 class="numero-frente" style="margin-top:0px; color:white; font-size:20pt;">10</h3>
									</div>
									<div id="oceanica-perna-esquerda"  class="parte-impressa oceanica-manequim oceanica-perna-esquerda active">

										<svg fill="#4e4e4e" class="oceanica-calcao" version="1.1" id="oceanica-4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											 viewBox="0 0 212.67 107.95" enable-background="new 0 0 212.67 107.95" xml:space="preserve">
										<g>
											<path d="M0.12,66.04c0.16-0.96,0.29-1.92,0.47-2.88c0.65-3.44,2.11-6.4,4.99-8.54c1.81-1.34,3.86-2.03,6.07-2.29
												c2.37-0.28,4.72-0.19,7.02,0.48c3.97,1.16,6.5,3.87,7.97,7.64c1.16,2.97,1.44,6.07,1.22,9.23c-0.14,2.05-0.53,4.02-1.3,5.93
												c-1.74,4.34-4.9,6.89-9.49,7.73c-2.71,0.5-5.35,0.33-7.97-0.49C4.75,81.49,2,78.59,0.95,74.14c-0.33-1.41-0.49-2.87-0.73-4.31
												c-0.02-0.15-0.07-0.3-0.11-0.44C0.12,68.27,0.12,67.16,0.12,66.04z M7.84,67.68c0.08,1.94,0.27,4.16,1.1,6.3
												c1.05,2.67,4.43,3.68,6.46,3.08c2.06-0.62,3.26-2.09,3.99-4c0.65-1.71,0.79-3.52,0.8-5.33c0.01-1.77-0.15-3.53-0.9-5.18
												c-1.11-2.47-3.07-3.87-5.54-3.63c-2.91,0.27-4.29,1.45-5.24,4.05C7.99,64.38,7.84,65.87,7.84,67.68z"/>
											<path d="M169.33,20.05c-2.95-1.41-6.02-2.5-9.22-3.17c-4.24-0.89-8.53-1.33-12.87-1.23c-3.72,0.08-7.4,0.49-10.97,1.56
												c-1.87,0.56-3.65,1.29-5.25,2.44c-3.31,2.4-3.28,5.64-1.03,8.44c1.59,1.97,3.75,3.15,6.03,4.12c3.18,1.35,6.53,2.08,9.92,2.67
												c5.39,0.94,10.8,0.78,16.22,0.48c3.23-0.18,6.45-0.35,9.67-0.62c3.23-0.27,6.46-0.64,9.69-0.99c1.6-0.17,3.2-0.39,4.8-0.59
												c0.09-0.01,0.18,0,0.3,0.11c-0.82,0.34-1.64,0.7-2.47,1.02c-4.21,1.59-8.57,2.66-12.99,3.45c-3.5,0.62-7.01,1.16-10.53,1.59
												c-3.14,0.39-6.31,0.69-9.47,0.85c-5.09,0.26-10.19,0.5-15.28,0.5c-4.57,0-9.16-0.21-13.72-0.53c-6.9-0.49-13.75-1.42-20.4-3.44
												c-3.17-0.96-6.24-2.16-8.94-4.15c-2.14-1.58-3.59-3.61-3.96-6.31c-0.24-1.73,0.16-3.36,0.94-4.9c1.23-2.44,3.1-4.33,5.25-5.97
												c0.21-0.16,0.43-0.32,0.64-0.61c-0.21,0-0.42,0-0.63,0c-5.04,0.04-10,0.71-14.9,1.8c-10.09,2.23-19.57,6.1-28.82,10.62
												c-8.17,4-16.05,8.51-23.87,13.14c-0.2,0.12-0.4,0.23-0.69,0.27c0.09-0.14,0.18-0.29,0.29-0.42c2.39-2.98,5.13-5.64,8.04-8.1
												C49.36,20.06,65.37,11.12,83.07,5.25c5.52-1.83,11.18-3.18,16.93-4.05c5.7-0.86,11.43-1.14,17.2-0.88
												c3.98,0.18,7.94,0.54,11.86,1.21c13.44,2.28,25.85,7.03,36.75,15.38c1.25,0.96,2.41,2.02,3.62,3.03
												C169.4,19.97,169.36,20.01,169.33,20.05z M148.94,35.41c0,0.03,0,0.05,0,0.08c-0.55-0.05-1.09-0.11-1.64-0.16
												c-3.72-0.31-7.4-0.85-11.02-1.76c-3.29-0.82-6.48-1.9-9.36-3.76c-1.43-0.93-2.72-2.03-3.58-3.53c-1.49-2.62-1.23-5.4,1.49-7.37
												c1.71-1.24,3.64-1.96,5.65-2.51c3.28-0.9,6.63-1.27,10.01-1.43c4.53-0.21,9.03,0.05,13.51,0.69c0.88,0.13,1.75,0.27,2.63,0.4
												c0.01-0.06,0.02-0.11,0.03-0.17c-2.29-0.37-4.56-0.84-6.86-1.1c-3.09-0.34-6.2-0.62-9.3-0.76c-4.91-0.22-9.8,0.06-14.6,1.2
												c-2.37,0.56-4.65,1.35-6.61,2.85c-1.09,0.83-1.97,1.85-2.35,3.2c-0.6,2.14-0.13,4.11,1.14,5.9c1.31,1.84,3.14,3.03,5.14,3.98
												c4.45,2.1,9.21,3,14.04,3.59c2.46,0.3,4.93,0.49,7.41,0.65C146.1,35.49,147.53,35.41,148.94,35.41z"/>
											<path d="M67.65,70.07c0.14,1.91,0.41,3.67,1.66,5.13c0.9,1.06,2.03,1.64,3.37,1.79c1.53,0.17,3.05,0.1,4.4-0.76
												c0.46-0.29,0.9-0.67,1.24-1.09c0.61-0.76,1.36-1.31,2.32-1.33c2.07-0.05,4.15-0.02,6.28-0.02c-0.7,2.71-1.98,5.01-4.14,6.79
												c-3.05,2.51-6.63,3.25-10.47,3.06c-2.6-0.13-5.04-0.8-7.16-2.39c-2.76-2.06-4.35-4.88-5.03-8.21c-0.83-4.06-0.83-8.1,0.46-12.07
												c1.71-5.22,5.69-8.27,11.17-8.69c2.59-0.2,5.11,0.04,7.53,0.98c4.06,1.58,6.32,4.71,7.41,8.81c0.65,2.44,0.74,4.93,0.7,7.43
												c-0.01,0.52-0.28,0.56-0.7,0.56c-6.1-0.01-12.2-0.01-18.29-0.01C68.17,70.07,67.95,70.07,67.65,70.07z M79.17,64.87
												c-0.22-3.87-2.09-6.24-6.24-6.02c-2.88,0.15-5.25,2.39-5.21,6.02C71.53,64.87,75.35,64.87,79.17,64.87z"/>
											<path d="M187.97,60.55c0.25-0.82,0.43-1.67,0.77-2.44c1.26-2.83,3.52-4.55,6.45-5.29c4.12-1.04,8.24-0.86,12.26,0.54
												c2.68,0.94,4.55,2.75,5.15,5.64c0.11,0.5,0.16,1.03,0.17,1.54c0.01,3.69,0.04,7.39,0,11.08c-0.02,2.25-0.38,4.44-1.57,6.41
												c-1.83,3.03-4.63,4.59-8.01,5.17c-2.39,0.41-4.81,0.62-7.24,0.37c-2.35-0.24-4.48-1.07-6.26-2.65c-1.29-1.14-1.95-2.65-2.22-4.32
												c-0.35-2.13-0.35-4.25,0.38-6.31c0.46-1.31,1.26-2.36,2.41-3.15c2.22-1.52,4.71-2.25,7.36-2.62c1.82-0.25,3.62-0.64,5.41-1.04
												c0.52-0.12,1.04-0.43,1.46-0.77c1.25-1.01,1.03-2.89-0.45-3.49c-2.18-0.88-4.45-1.07-6.69-0.2c-0.58,0.23-1.01,0.84-1.51,1.26
												c-0.16,0.13-0.34,0.33-0.52,0.33c-2.35,0.02-4.69,0.01-7.04,0.01C188.22,60.63,188.17,60.6,187.97,60.55z M205.51,67.91
												c-0.3,0.11-0.42,0.15-0.54,0.19c-1.52,0.46-3.03,0.94-4.55,1.39c-1.23,0.36-2.48,0.66-3.69,1.06c-1.01,0.34-1.6,1.12-1.91,2.14
												c-0.7,2.32,0.43,4.34,2.72,4.73c0.64,0.11,1.3,0.07,1.95,0.04c2.75-0.12,5.1-1.94,5.62-4.61
												C205.42,71.28,205.38,69.63,205.51,67.91z"/>
											<path d="M90.07,60.57c0.28-2.1,1.17-3.87,2.7-5.32c1.68-1.59,3.72-2.45,5.96-2.77c3.52-0.51,7.03-0.37,10.42,0.77
												c2.55,0.85,4.5,2.42,5.29,5.11c0.21,0.73,0.31,1.51,0.31,2.27c0.02,3.93,0.06,7.85-0.02,11.78c-0.08,3.71-1.49,6.81-4.65,8.94
												c-1.95,1.31-4.17,1.96-6.5,2.11c-1.86,0.12-3.73,0.21-5.58,0.12c-2.26-0.11-4.29-0.98-6.06-2.41c-1.1-0.88-1.81-2.04-2.19-3.38
												c-0.67-2.34-0.71-4.7-0.04-7.05c0.43-1.51,1.3-2.73,2.61-3.61c2.22-1.48,4.69-2.21,7.32-2.57c1.8-0.25,3.58-0.63,5.36-1.03
												c0.54-0.12,1.07-0.44,1.51-0.8c1.2-0.96,1.02-2.85-0.39-3.44c-2.23-0.93-4.56-1.11-6.85-0.21c-0.56,0.22-0.96,0.83-1.45,1.26
												c-0.14,0.13-0.32,0.31-0.48,0.31c-2.37,0.02-4.73,0.01-7.1,0.01C90.21,60.63,90.16,60.6,90.07,60.57z M107.49,68.05
												c-1.68,0.49-3.2,0.94-4.73,1.37c-1.21,0.34-2.45,0.62-3.66,0.98c-1.51,0.46-2.23,1.57-2.45,3.09c-0.27,1.89,0.8,3.52,2.67,3.88
												c0.71,0.13,1.45,0.13,2.18,0.1c2.79-0.11,5.09-1.94,5.62-4.66C107.43,71.25,107.38,69.64,107.49,68.05z"/>
											<path d="M144.12,83.1c-1.48,0-2.89,0.07-4.28-0.02c-2.23-0.14-3.56-1.68-3.56-4.02c-0.01-4.96,0-9.93-0.01-14.89
												c0-0.52,0-1.04-0.07-1.55c-0.23-1.62-1.14-2.73-2.6-3.42c-1.48-0.7-3-0.79-4.54-0.28c-2.26,0.74-3.28,2.3-3.3,4.97
												c-0.02,2.62,0,5.23,0,7.85c0,3.54,0,7.08,0,10.62c0,0.23,0,0.45,0,0.72c-2.66,0-5.27,0-7.94,0c-0.01-0.21-0.03-0.42-0.03-0.62
												c0-5.66-0.01-11.31,0.01-16.97c0.01-2.31,0.22-4.6,1.12-6.77c0.7-1.69,1.81-3.01,3.39-3.95c2.59-1.54,5.39-2.46,8.4-2.52
												c3.51-0.08,6.77,0.89,9.66,2.91c2.01,1.4,2.94,3.52,3.35,5.85c0.26,1.47,0.41,2.97,0.42,4.46c0.05,5.67,0.02,11.35,0.02,17.02
												C144.15,82.66,144.14,82.85,144.12,83.1z"/>
											<path d="M57.44,62.11c-2.55,0-5.08,0.01-7.62-0.02c-0.17,0-0.39-0.21-0.48-0.38c-1.67-2.89-5.55-3.82-8.35-1.99
												c-1.12,0.73-1.79,1.81-2.15,3.04c-0.99,3.36-1.05,6.76-0.01,10.11c0.67,2.17,2.09,3.72,4.47,4.08c1.69,0.25,3.35,0.1,4.83-0.84
												c0.4-0.25,0.74-0.62,1.04-0.99c0.8-0.95,1.77-1.4,3.03-1.37c1.82,0.05,3.65,0.01,5.53,0.01c-0.76,2.92-2.18,5.35-4.59,7.15
												c-2.98,2.23-6.39,2.88-10.02,2.71c-2.42-0.12-4.71-0.71-6.74-2.09c-2.86-1.94-4.57-4.68-5.34-8c-1.02-4.39-1.05-8.79,0.52-13.06
												c1.86-5.04,5.58-7.75,10.93-8.2c3.14-0.26,6.16,0.14,9,1.61C54.71,55.59,56.7,58.96,57.44,62.11z"/>
											<path d="M185.15,62.11c-2.62,0-5.14,0.01-7.66-0.02c-0.18,0-0.42-0.23-0.51-0.41c-1.76-3.59-6.88-3.46-8.92-1.51
												c-1,0.95-1.53,2.15-1.82,3.46c-0.67,3.01-0.72,6.03,0.15,9.01c0.67,2.26,2.05,3.92,4.53,4.31c1.69,0.26,3.35,0.11,4.84-0.82
												c0.41-0.26,0.77-0.64,1.09-1.02c0.79-0.93,1.75-1.37,2.98-1.34c1.82,0.05,3.65,0.01,5.55,0.01c-0.13,0.43-0.22,0.82-0.35,1.19
												c-1.79,4.99-5.42,7.71-10.58,8.51c-2.41,0.37-4.8,0.29-7.14-0.41c-3.83-1.14-6.51-3.65-7.89-7.34c-1.93-5.14-2.01-10.41-0.06-15.56
												c1.85-4.89,5.6-7.44,10.8-7.88c2.88-0.24,5.68,0.08,8.33,1.29C182.14,55.25,184.03,58.32,185.15,62.11z"/>
											<path d="M147.38,52.99c1.67,0,3.27-0.12,4.85,0.03c1.64,0.16,2.94,1.71,3.07,3.35c0.02,0.25,0.03,0.5,0.03,0.75
												c0,8.42,0,16.85,0,25.27c0,0.21,0,0.42,0,0.67c-2.67,0-5.29,0-7.94,0C147.38,73.02,147.38,62.99,147.38,52.99z"/>
											<path d="M167.89,93.1c2.65,0.06,5.27,0.01,7.87,0.21c1.95,0.15,3.28,1.53,3.53,3.26c0.32,2.18-0.42,3.7-2.27,4.65
												c-0.08,0.04-0.16,0.09-0.29,0.15c0.84,2.13,1.68,4.25,2.55,6.45c-0.93,0-1.79,0.02-2.64-0.02c-0.12,0-0.27-0.23-0.33-0.39
												c-0.66-1.7-1.31-3.4-1.93-5.11c-0.13-0.35-0.28-0.51-0.68-0.5c-1.03,0.04-2.07,0.01-3.18,0.01c0,2.01,0,3.98,0,5.98
												c-0.91,0-1.75,0-2.63,0C167.89,102.95,167.89,98.09,167.89,93.1z M170.54,99.62c1.37,0,2.71,0.08,4.04-0.02
												c1.21-0.1,1.9-0.86,1.97-1.89c0.08-1.18-0.4-2.08-1.5-2.24c-1.48-0.21-3-0.19-4.51-0.27C170.54,96.77,170.54,98.18,170.54,99.62z"
												/>
											<path d="M154.24,108.06c-2.16,0-3.8-0.91-4.93-2.76c-1.83-3-1.61-7.41,0.4-10.13c2.24-3.02,7.4-3.08,9.51,0.35
												c1.07,1.74,1.43,3.62,1.32,5.62c-0.07,1.34-0.36,2.62-1.02,3.81C158.39,106.98,156.56,108.06,154.24,108.06z M157.79,100.45
												c-0.21-1.05-0.33-2.23-0.68-3.33c-0.44-1.41-1.42-2.03-2.8-2.03c-1.38,0.01-2.36,0.64-2.83,2.02c-0.75,2.21-0.76,4.45-0.03,6.67
												c0.49,1.48,1.49,2.14,2.93,2.12c1.31-0.02,2.47-0.87,2.85-2.27C157.51,102.63,157.59,101.59,157.79,100.45z"/>
											<path d="M200.94,104.28c0.73-0.16,1.42-0.32,2.12-0.47c0.13-0.03,0.26-0.02,0.39-0.04c0.96,1.97,3.45,2.77,5.42,1.76
												c0.68-0.35,1.11-0.87,1.06-1.7c-0.05-0.8-0.45-1.35-1.21-1.57c-1.25-0.37-2.51-0.68-3.77-1.04c-2.25-0.63-3.25-1.91-3.24-4.08
												c0.01-1.77,1.05-3.23,2.86-3.84c1.98-0.68,3.94-0.54,5.79,0.48c0.91,0.5,1.55,1.23,1.81,2.31c-0.84,0.21-1.65,0.41-2.45,0.61
												c-0.99-1.52-2.24-2-3.89-1.5c-0.83,0.25-1.33,0.8-1.37,1.52c-0.04,0.77,0.3,1.31,1.21,1.61c1.13,0.37,2.29,0.62,3.43,0.94
												c1.3,0.36,2.53,0.82,3.2,2.13c1.04,2.02,0.39,4.43-1.54,5.65c-2.18,1.38-5.95,1.29-8.06-0.19
												C201.81,106.28,201.21,105.4,200.94,104.28z"/>
											<path d="M123.08,96.13c-0.83,0.21-1.63,0.41-2.41,0.6c-0.96-1.52-2.28-2.02-3.95-1.49c-0.78,0.25-1.26,0.8-1.31,1.51
												c-0.05,0.71,0.27,1.29,1.1,1.57c1.16,0.39,2.36,0.65,3.54,0.99c1.18,0.33,2.32,0.72,3.02,1.83c1.26,2,0.7,4.58-1.27,5.89
												c-2.22,1.47-6.09,1.38-8.25-0.2c-0.86-0.63-1.38-1.47-1.69-2.54c0.86-0.18,1.69-0.36,2.51-0.54c0.99,1.98,3.39,2.78,5.38,1.83
												c0.71-0.34,1.17-0.86,1.12-1.71c-0.05-0.83-0.48-1.37-1.26-1.6c-1.25-0.36-2.52-0.67-3.77-1.03c-2-0.57-3.06-1.75-3.18-3.48
												c-0.15-2.22,0.87-3.8,2.99-4.48c1.93-0.62,3.83-0.46,5.63,0.52C122.3,94.33,122.93,95.17,123.08,96.13z"/>
											<path d="M111.96,49.76c-1.79,0.06-3.44,0.08-5.08,0.18c-1.16,0.07-1.94-0.41-2.59-1.34c-0.55-0.78-1.22-1.47-1.88-2.24
												c-0.84,1.05-1.64,2.05-2.46,3.04c-0.15,0.18-0.42,0.36-0.65,0.37c-1.53,0.04-3.07,0.05-4.61,0.04c-0.53,0-1.06-0.07-1.7-0.12
												c0.31-0.54,0.54-1.02,0.85-1.44c0.78-1.04,1.54-2.12,2.42-3.07c1.21-1.3,2.7-2.17,4.55-2.17c1.52,0,3.04-0.04,4.55,0.11
												c1.58,0.15,2.78,1.09,3.69,2.35C110.02,46.8,110.91,48.19,111.96,49.76z"/>
											<path d="M130.86,93.1c2.51,0.06,5-0.01,7.46,0.22c2.26,0.21,3.61,2.08,3.57,4.43c-0.04,2.11-1.64,3.91-3.74,4.18
												c-0.66,0.09-1.34,0.09-2.01,0.1c-0.86,0.02-1.73,0-2.65,0c0,1.94,0,3.83,0,5.76c-0.9,0-1.74,0-2.62,0
												C130.86,102.95,130.86,98.1,130.86,93.1z M133.49,99.64c1.36,0,2.67,0.08,3.96-0.03c0.97-0.08,1.58-0.9,1.66-1.93
												c0.07-0.92-0.45-1.84-1.29-2.1c-1.42-0.44-2.88-0.14-4.32-0.24C133.49,96.86,133.49,98.26,133.49,99.64z"/>
											<path d="M191.98,107.81c-1.01,0-1.9,0-2.87,0c0-4.11,0-8.19,0-12.34c-1.32,0-2.58,0-3.88,0c0-0.78,0-1.5,0-2.26
												c3.5,0,7.01,0,10.56,0c0,0.72,0,1.45,0,2.25c-1.27,0-2.51,0-3.82,0C191.98,99.59,191.98,103.68,191.98,107.81z"/>
										</g>
										</svg>
									<h3  class="numero-frente" style="margin-top: 0px;  color:white; font-size:20pt;">10</h3>
									</div>
									<div  id="escudo-perna-direita"  class="parte-impressa escudo-manequim escudo-perna-direita active">

	<!-- Generator: Adobe Illustrator 21.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
	<svg version="1.1" id="Camada_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		 viewBox="0 0 80.9 105.4" enable-background="new 0 0 80.9 105.4" xml:space="preserve">
	<path class="escudo-calcao" fill="#949494" d="M40.6,105.4c0,0,42.4-8.1,40.2-51.3C80.3,46.8,80.9,0,80.9,0H0.2L0,55.8C0,55.8-3,94.7,40.6,105.4z"/>
	<image overflow="visible" width="152" height="200" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJgAAADICAYAAAAUTCjWAAABJmlDQ1BBZG9iZSBSR0IgKDE5OTgp
	AAAoz2NgYDJwdHFyZRJgYMjNKykKcndSiIiMUmA/z8DGwMwABonJxQWOAQE+IHZefl4qAwb4do2B
	EURf1gWZxUAa4EouKCoB0n+A2CgltTiZgYHRAMjOLi8pAIozzgGyRZKywewNIHZRSJAzkH0EyOZL
	h7CvgNhJEPYTELsI6Akg+wtIfTqYzcQBNgfClgGxS1IrQPYyOOcXVBZlpmeUKBhaWloqOKbkJ6Uq
	BFcWl6TmFit45iXnFxXkFyWWpKYA1ULcBwaCEIWgENMAarTQZKAyAMUDhPU5EBy+jGJnEGIIkFxa
	VAZlMjIZE+YjzJgjwcDgv5SBgeUPQsykl4FhgQ4DA/9UhJiaIQODgD4Dw745AMDGT/0ZOjZcAAAA
	CXBIWXMAABcSAAAXEgFnn9JSAAAGumlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0
	IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4
	bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxNDUg
	NzkuMTYzNDk5LCAyMDE4LzA4LzEzLTE2OjQwOjIyICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpy
	ZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRl
	c2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFw
	LzEuMC8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxu
	czpzdEV2dD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlRXZlbnQj
	IiB4bWxuczpwaG90b3Nob3A9Imh0dHA6Ly9ucy5hZG9iZS5jb20vcGhvdG9zaG9wLzEuMC8iIHht
	bG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIgeG1wOkNyZWF0b3JUb29s
	PSJBZG9iZSBQaG90b3Nob3AgQ0MgKFdpbmRvd3MpIiB4bXA6Q3JlYXRlRGF0ZT0iMjAyMC0xMS0w
	NlQxNjoyODozOC0wMzowMCIgeG1wOk1ldGFkYXRhRGF0ZT0iMjAyMC0xMi0xOFQxNTowNDoxMS0w
	MzowMCIgeG1wOk1vZGlmeURhdGU9IjIwMjAtMTItMThUMTU6MDQ6MTEtMDM6MDAiIHhtcE1NOklu
	c3RhbmNlSUQ9InhtcC5paWQ6MzhmYjg3ZjMtOGFlZi00MDQ3LWE5NWYtOTNkZWFiZTQ0ZmY0IiB4
	bXBNTTpEb2N1bWVudElEPSJhZG9iZTpkb2NpZDpwaG90b3Nob3A6OTYwYWU5N2ItYjM2Zi04ODQx
	LWIyNzItMjM2MjQwMjkxMTc0IiB4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ9InhtcC5kaWQ6MGI2
	OTU2ODUtMDRkMC1kNzQwLTk4ZWEtMTAzNTEwOGUwOTJlIiBwaG90b3Nob3A6Q29sb3JNb2RlPSIz
	IiBwaG90b3Nob3A6SUNDUHJvZmlsZT0iQWRvYmUgUkdCICgxOTk4KSIgZGM6Zm9ybWF0PSJpbWFn
	ZS9wbmciPiA8eG1wTU06SGlzdG9yeT4gPHJkZjpTZXE+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJj
	cmVhdGVkIiBzdEV2dDppbnN0YW5jZUlEPSJ4bXAuaWlkOjBiNjk1Njg1LTA0ZDAtZDc0MC05OGVh
	LTEwMzUxMDhlMDkyZSIgc3RFdnQ6d2hlbj0iMjAyMC0xMS0wNlQxNjoyODozOC0wMzowMCIgc3RF
	dnQ6c29mdHdhcmVBZ2VudD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSIvPiA8cmRmOmxp
	IHN0RXZ0OmFjdGlvbj0ic2F2ZWQiIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6MzY0NjA5Y2It
	NjI1NS05ZTRhLWI2ZTMtNGIzMGY2YzVmNjBmIiBzdEV2dDp3aGVuPSIyMDIwLTExLTA2VDE2OjI4
	OjM4LTAzOjAwIiBzdEV2dDpzb2Z0d2FyZUFnZW50PSJBZG9iZSBQaG90b3Nob3AgQ0MgKFdpbmRv
	d3MpIiBzdEV2dDpjaGFuZ2VkPSIvIi8+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJzYXZlZCIgc3RF
	dnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDozOGZiODdmMy04YWVmLTQwNDctYTk1Zi05M2RlYWJlNDRm
	ZjQiIHN0RXZ0OndoZW49IjIwMjAtMTItMThUMTU6MDQ6MTEtMDM6MDAiIHN0RXZ0OnNvZnR3YXJl
	QWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE5IChXaW5kb3dzKSIgc3RFdnQ6Y2hhbmdlZD0i
	LyIvPiA8L3JkZjpTZXE+IDwveG1wTU06SGlzdG9yeT4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRm
	OlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7qUmDAAACMwElEQVR42u19BZzb
	Rvr2K9vLnN0wNoxNUkjKDEkxZWa4XlNmZma4whWu3CszpHBNKSk3DA0zw2YZbOl7n3dmJFlr79rb
	tAffX/lN7DXI0swzL4PlTB30CRHtw2M5/SmHpYblfx7yPbe85+7fIe91+WxInyvkvW/es0KBc4bi
	P2f5zhH32VD8Z91zheLftwLntMLJP2t+3wol+YwV/3eTz1nx10VW0/cT/p6V4Dr50Qm87s6hf34D
	8+/OISV43Qwcju9RRhseSyL8rL1+p/OfAix56gcLNQWZ/0aDExX3mpUAEL5FC05oKAi2wMKZ56Fw
	AoCG4p+75wjH/22Go8/pnsv3PScIsrB63XzWsRKAMBFYrSTgCgIwsJHlGoIb0moGQMmARsnAZV7r
	BIDZfy7VCsXfTEKKZSWgMMEbtQIL7Z/oJNQqIcUKfCbkfz0cv3jBBbaa+VzID+hQAPQBsIaSXE/w
	WkOBjdaEqgY3WqLPWfGfSwlYzVGshMAyz50gwJbxGMcjNwDRzcMOW2KFToANxlGq4C4M7D5ZvFDi
	zwRZHADRhLqFm4LVSQBQK5wE1P7PhZuyLyvZ+QLsOik7DCWm3BRKvBmDlMuxvHu2EgDOsMu4v/2/
	R82xQwET/1elxC2nh34tFgkg4mceZ/xxVCxwOL63nAQfcXz36yQ6pRU/cf6f8U+eY/nObfl+Sz8P
	Wd7vhQKT6pB37riN4D+H5VsXK35z+X/bspJsQCv5HPnfd5L8hn8+Ek5kIlHF8e6f0iEnTgvv28/x
	fwZgVhBgIfqfO/wzyMQ6VstP+dHK5LvN88mBib4T0mvRoMEX0VSSH62MwC5IcA67QbPPTL2YMR78
	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
	Vn0XI/4AAAAASUVORK5CYII=" transform="matrix(0.48 0 0 0.48 3.9652 4.7)">
	</image>
	</svg>

									</div>
									<div  id="escudo-perna-esquerda"  class="parte-impressa escudo-manequim escudo-perna-esquerda">

	<!-- Generator: Adobe Illustrator 21.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
	<svg version="1.1" id="Camada_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		 viewBox="0 0 80.9 105.4" enable-background="new 0 0 80.9 105.4" xml:space="preserve">
	<path class="escudo-calcao" fill="#949494" d="M40.6,105.4c0,0,42.4-8.1,40.2-51.3C80.3,46.8,80.9,0,80.9,0H0.2L0,55.8C0,55.8-3,94.7,40.6,105.4z"/>
	<image overflow="visible" width="152" height="200" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJgAAADICAYAAAAUTCjWAAABJmlDQ1BBZG9iZSBSR0IgKDE5OTgp
	AAAoz2NgYDJwdHFyZRJgYMjNKykKcndSiIiMUmA/z8DGwMwABonJxQWOAQE+IHZefl4qAwb4do2B
	EURf1gWZxUAa4EouKCoB0n+A2CgltTiZgYHRAMjOLi8pAIozzgGyRZKywewNIHZRSJAzkH0EyOZL
	h7CvgNhJEPYTELsI6Akg+wtIfTqYzcQBNgfClgGxS1IrQPYyOOcXVBZlpmeUKBhaWloqOKbkJ6Uq
	BFcWl6TmFit45iXnFxXkFyWWpKYA1ULcBwaCEIWgENMAarTQZKAyAMUDhPU5EBy+jGJnEGIIkFxa
	VAZlMjIZE+YjzJgjwcDgv5SBgeUPQsykl4FhgQ4DA/9UhJiaIQODgD4Dw745AMDGT/0ZOjZcAAAA
	CXBIWXMAABcSAAAXEgFnn9JSAAAGumlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0
	IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4
	bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxNDUg
	NzkuMTYzNDk5LCAyMDE4LzA4LzEzLTE2OjQwOjIyICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpy
	ZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRl
	c2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFw
	LzEuMC8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxu
	czpzdEV2dD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlRXZlbnQj
	IiB4bWxuczpwaG90b3Nob3A9Imh0dHA6Ly9ucy5hZG9iZS5jb20vcGhvdG9zaG9wLzEuMC8iIHht
	bG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIgeG1wOkNyZWF0b3JUb29s
	PSJBZG9iZSBQaG90b3Nob3AgQ0MgKFdpbmRvd3MpIiB4bXA6Q3JlYXRlRGF0ZT0iMjAyMC0xMS0w
	NlQxNjoyODozOC0wMzowMCIgeG1wOk1ldGFkYXRhRGF0ZT0iMjAyMC0xMi0xOFQxNTowNDoxMS0w
	MzowMCIgeG1wOk1vZGlmeURhdGU9IjIwMjAtMTItMThUMTU6MDQ6MTEtMDM6MDAiIHhtcE1NOklu
	c3RhbmNlSUQ9InhtcC5paWQ6MzhmYjg3ZjMtOGFlZi00MDQ3LWE5NWYtOTNkZWFiZTQ0ZmY0IiB4
	bXBNTTpEb2N1bWVudElEPSJhZG9iZTpkb2NpZDpwaG90b3Nob3A6OTYwYWU5N2ItYjM2Zi04ODQx
	LWIyNzItMjM2MjQwMjkxMTc0IiB4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ9InhtcC5kaWQ6MGI2
	OTU2ODUtMDRkMC1kNzQwLTk4ZWEtMTAzNTEwOGUwOTJlIiBwaG90b3Nob3A6Q29sb3JNb2RlPSIz
	IiBwaG90b3Nob3A6SUNDUHJvZmlsZT0iQWRvYmUgUkdCICgxOTk4KSIgZGM6Zm9ybWF0PSJpbWFn
	ZS9wbmciPiA8eG1wTU06SGlzdG9yeT4gPHJkZjpTZXE+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJj
	cmVhdGVkIiBzdEV2dDppbnN0YW5jZUlEPSJ4bXAuaWlkOjBiNjk1Njg1LTA0ZDAtZDc0MC05OGVh
	LTEwMzUxMDhlMDkyZSIgc3RFdnQ6d2hlbj0iMjAyMC0xMS0wNlQxNjoyODozOC0wMzowMCIgc3RF
	dnQ6c29mdHdhcmVBZ2VudD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSIvPiA8cmRmOmxp
	IHN0RXZ0OmFjdGlvbj0ic2F2ZWQiIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6MzY0NjA5Y2It
	NjI1NS05ZTRhLWI2ZTMtNGIzMGY2YzVmNjBmIiBzdEV2dDp3aGVuPSIyMDIwLTExLTA2VDE2OjI4
	OjM4LTAzOjAwIiBzdEV2dDpzb2Z0d2FyZUFnZW50PSJBZG9iZSBQaG90b3Nob3AgQ0MgKFdpbmRv
	d3MpIiBzdEV2dDpjaGFuZ2VkPSIvIi8+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJzYXZlZCIgc3RF
	dnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDozOGZiODdmMy04YWVmLTQwNDctYTk1Zi05M2RlYWJlNDRm
	ZjQiIHN0RXZ0OndoZW49IjIwMjAtMTItMThUMTU6MDQ6MTEtMDM6MDAiIHN0RXZ0OnNvZnR3YXJl
	QWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE5IChXaW5kb3dzKSIgc3RFdnQ6Y2hhbmdlZD0i
	LyIvPiA8L3JkZjpTZXE+IDwveG1wTU06SGlzdG9yeT4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRm
	OlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7qUmDAAACMwElEQVR42u19BZzb
	Rvr2K9vLnN0wNoxNUkjKDEkxZWa4XlNmZma4whWu3CszpHBNKSk3DA0zw2YZbOl7n3dmJFlr79rb
	tAffX/lN7DXI0swzL4PlTB30CRHtw2M5/SmHpYblfx7yPbe85+7fIe91+WxInyvkvW/es0KBc4bi
	P2f5zhH32VD8Z91zheLftwLntMLJP2t+3wol+YwV/3eTz1nx10VW0/cT/p6V4Dr50Qm87s6hf34D
	8+/OISV43Qwcju9RRhseSyL8rL1+p/OfAix56gcLNQWZ/0aDExX3mpUAEL5FC05oKAi2wMKZ56Fw
	AoCG4p+75wjH/22Go8/pnsv3PScIsrB63XzWsRKAMBFYrSTgCgIwsJHlGoIb0moGQMmARsnAZV7r
	BIDZfy7VCsXfTEKKZSWgMMEbtQIL7Z/oJNQqIcUKfCbkfz0cv3jBBbaa+VzID+hQAPQBsIaSXE/w
	WkOBjdaEqgY3WqLPWfGfSwlYzVGshMAyz50gwJbxGMcjNwDRzcMOW2KFToANxlGq4C4M7D5ZvFDi
	zwRZHADRhLqFm4LVSQBQK5wE1P7PhZuyLyvZ+QLsOik7DCWm3BRKvBmDlMuxvHu2EgDOsMu4v/2/
	R82xQwET/1elxC2nh34tFgkg4mceZ/xxVCxwOL63nAQfcXz36yQ6pRU/cf6f8U+eY/nObfl+Sz8P
	Wd7vhQKT6pB37riN4D+H5VsXK35z+X/bspJsQCv5HPnfd5L8hn8+Ek5kIlHF8e6f0iEnTgvv28/x
	fwZgVhBgIfqfO/wzyMQ6VstP+dHK5LvN88mBib4T0mvRoMEX0VSSH62MwC5IcA67QbPPTL2YMR78
	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
	Vn0XI/4AAAAASUVORK5CYII=" transform="matrix(0.48 0 0 0.48 3.9652 4.7)">
	</image>
	</svg>

								</div>
							</div>
								<div id="svg-meia-frente" class="parte-manequim meia active" style="margin-top:3px;">
									<svg version="1.1" id="Camada_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										 viewBox="0 0 241.7 264.2" enable-background="new 0 0 241.7 264.2" xml:space="preserve">
									<g id="meiao">
										<path  d="M184,198.1c-0.7-0.6-1-1.4-1.2-2.4c-0.3-1.7-0.7-3.4-1.1-5.2c-0.4-2.2-0.5-4.5,0.1-6.7
											c1.9-7.5,1.7-15-0.2-22.4c-2.1-8.2-3.9-16.4-6.3-24.6c-1.4-4.9-3.9-9.3-5.9-14c-3.4-8.1-6-16.5-5.8-25.4c0.1-6.5,0.9-12.9,1.6-19.3
											c0.3-2.5,0.6-5.1-0.1-7.6c-0.5-1.7-1.6-3.2-2.4-4.7c-1.9-3.3-3.6-6.7-5.4-10.1c-1.3-2.5-0.9-4.2,1.6-5.9c2.6-1.9,5.4-3.8,8.4-5
											c3-1.3,6.2-2.3,9.4-2.9c1.9-0.4,3.7-1,5.6-1.4c2.2-0.5,4.5-0.6,6.8-0.6c2.6,0,5.2,0.1,7.7,0.7c1.1,0.3,2.2,0.6,3.2,1.1
											c1.6,0.8,2.1,2.3,2.1,4c-0.1,2.9,0.1,5.8,0.9,8.5c0.4,1.3,0.7,2.7,1.2,4c0.9,2.3,2,4.6,2.6,7.1c0.9,3.6,1.7,7.2,2.5,10.8
											c1.3,5.6,2.4,11.2,3.1,17c0.1,0.8-0.2,1.8,0.4,2.5c0,3.1,0,6.2,0,9.4c-0.5,0.3-0.3,0.8-0.3,1.2c-0.4,6.6-0.9,13.1-1.8,19.7
											c-0.7,5.5-1.5,10.9-2.2,16.4c-0.9,7.3-1.6,14.5-2.1,21.8c-0.2,2.7-0.8,5.4-0.5,8.1c0.4,4.4,1.7,8.5,3.5,12.5
											c1.7,4,1.4,8.1,1.1,12.4c-1-0.7-1.7-1.8-2.7-2c-1.1-0.2-1.6-1-2.1-1.7c-0.2-0.2-0.3-0.4-0.5-0.7s-0.4-0.4-0.7-0.3
											c-0.3,0.1-0.2,0.4-0.2,0.6c0,0.9,0,1.8,0,2.8c-1.1-0.3-1.2-1.1-1.4-1.8c-0.5-1.5-0.9-3-2.7-3.5c-3.3-1.1-6.4,0.3-7.7,3.6
											c-0.1,0.4-0.3,0.6-0.7,0.7c-2.4,0.9-4.3,2.5-6.6,3.4C184.6,198.1,184.3,198.1,184,198.1z"/>
										<path  d="M29.4,95.3c0.6-1.3,0.4-2.8,0.6-4.2c1-7.5,2.8-14.8,4.5-22.2c0.9-3.8,2.1-7.5,3.6-11.1
											c0.2-0.6-0.1-1.4,0.2-1.8c1.5-2.4,1.4-5,1.7-7.6c0.1-0.8,0.1-1.6,0.1-2.4c-0.1-2.7,0.8-4.1,3.5-4.9c3-0.9,6.1-1.1,9.2-1.2
											c2.8,0,5.5,0.2,8.2,0.8c1.7,0.4,3.4,0.8,5,1.2c3.2,0.8,6.5,1.7,9.5,3.1c3,1.4,5.8,3.2,8.5,5.3c1.6,1.3,2.2,2.8,1.1,5
											c-2,3.9-4,7.7-6.2,11.5c-0.8,1.3-1.7,2.6-2.1,4.1c-0.1,0.3-0.1,0.7-0.1,1.1c0.2,4.1,0.4,8.1,0.8,12.1C78.1,90,78.8,96,78.3,102
											c-0.3,4.4-1.6,8.6-2.7,12.8c-1,3.6-2.2,7-4,10.3c-3.8,7.2-6,15-7.8,23c-1.2,5.3-2.8,10.5-3.9,15.8c-1.3,6.3-1.5,12.5,0.1,18.8
											c0.8,3,0.7,6,0,9c-0.3,1.4-0.6,2.9-0.9,4.3c-0.1,0.8-0.5,1.5-1.1,2.1c-0.2,0-0.5,0-0.7,0c-1.2-0.8-2.6-1.2-3.8-2.1
											c-0.7-0.6-1.6-1-2.5-1.3c-0.8-0.3-1.2-0.6-1.6-1.4c-1-1.8-2.4-3.2-4.7-3.2s-4.2,0.8-5.3,3c-0.3,0.6-0.5,1.3-0.7,1.9
											c-0.1,0.3-0.3,0.6-0.7,0.5c-0.3-0.1-0.3-0.4-0.3-0.7c0-0.6,0-1.1,0-1.7c0-0.3,0.1-0.7-0.3-0.8c-0.3-0.1-0.5,0.2-0.7,0.4
											c-0.3,0.4-0.6,0.8-0.9,1.3c-0.2,0.3-0.3,0.9-0.6,1c-1.5,0.2-2.5,1.2-3.7,2.2c-0.4-4.8-0.5-9.3,1.5-13.6c0.4-0.9,0.8-1.8,1.1-2.8
											c1.2-3.6,2.2-7.3,1.9-11.1c-0.4-5.1-0.9-10.2-1.3-15.3c-0.6-6.7-1.4-13.3-2.3-20c-1.2-9-2.4-18.1-2.9-27.2c0-0.7,0.1-1.5-0.4-2.2
											C29.4,101.7,29.4,98.5,29.4,95.3z"/>
									</g>
									</svg>

								</div>
								<div id="meia-frente" class="parte-manequim meia active">
									<img src="images/simulador/meias.png">
								</div>
								<!-- <div id="oceanica-meia-direita"   class="parte-impressa oceanica-manequim oceanica-meia-direita active">
									<svg fill="#4e4e4e" class="oceanica-meia" version="1.1" id="oceanica-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										 viewBox="0 0 212.67 107.95" enable-background="new 0 0 212.67 107.95" xml:space="preserve">
									<g>
										<path d="M0.12,66.04c0.16-0.96,0.29-1.92,0.47-2.88c0.65-3.44,2.11-6.4,4.99-8.54c1.81-1.34,3.86-2.03,6.07-2.29
											c2.37-0.28,4.72-0.19,7.02,0.48c3.97,1.16,6.5,3.87,7.97,7.64c1.16,2.97,1.44,6.07,1.22,9.23c-0.14,2.05-0.53,4.02-1.3,5.93
											c-1.74,4.34-4.9,6.89-9.49,7.73c-2.71,0.5-5.35,0.33-7.97-0.49C4.75,81.49,2,78.59,0.95,74.14c-0.33-1.41-0.49-2.87-0.73-4.31
											c-0.02-0.15-0.07-0.3-0.11-0.44C0.12,68.27,0.12,67.16,0.12,66.04z M7.84,67.68c0.08,1.94,0.27,4.16,1.1,6.3
											c1.05,2.67,4.43,3.68,6.46,3.08c2.06-0.62,3.26-2.09,3.99-4c0.65-1.71,0.79-3.52,0.8-5.33c0.01-1.77-0.15-3.53-0.9-5.18
											c-1.11-2.47-3.07-3.87-5.54-3.63c-2.91,0.27-4.29,1.45-5.24,4.05C7.99,64.38,7.84,65.87,7.84,67.68z"/>
										<path d="M169.33,20.05c-2.95-1.41-6.02-2.5-9.22-3.17c-4.24-0.89-8.53-1.33-12.87-1.23c-3.72,0.08-7.4,0.49-10.97,1.56
											c-1.87,0.56-3.65,1.29-5.25,2.44c-3.31,2.4-3.28,5.64-1.03,8.44c1.59,1.97,3.75,3.15,6.03,4.12c3.18,1.35,6.53,2.08,9.92,2.67
											c5.39,0.94,10.8,0.78,16.22,0.48c3.23-0.18,6.45-0.35,9.67-0.62c3.23-0.27,6.46-0.64,9.69-0.99c1.6-0.17,3.2-0.39,4.8-0.59
											c0.09-0.01,0.18,0,0.3,0.11c-0.82,0.34-1.64,0.7-2.47,1.02c-4.21,1.59-8.57,2.66-12.99,3.45c-3.5,0.62-7.01,1.16-10.53,1.59
											c-3.14,0.39-6.31,0.69-9.47,0.85c-5.09,0.26-10.19,0.5-15.28,0.5c-4.57,0-9.16-0.21-13.72-0.53c-6.9-0.49-13.75-1.42-20.4-3.44
											c-3.17-0.96-6.24-2.16-8.94-4.15c-2.14-1.58-3.59-3.61-3.96-6.31c-0.24-1.73,0.16-3.36,0.94-4.9c1.23-2.44,3.1-4.33,5.25-5.97
											c0.21-0.16,0.43-0.32,0.64-0.61c-0.21,0-0.42,0-0.63,0c-5.04,0.04-10,0.71-14.9,1.8c-10.09,2.23-19.57,6.1-28.82,10.62
											c-8.17,4-16.05,8.51-23.87,13.14c-0.2,0.12-0.4,0.23-0.69,0.27c0.09-0.14,0.18-0.29,0.29-0.42c2.39-2.98,5.13-5.64,8.04-8.1
											C49.36,20.06,65.37,11.12,83.07,5.25c5.52-1.83,11.18-3.18,16.93-4.05c5.7-0.86,11.43-1.14,17.2-0.88
											c3.98,0.18,7.94,0.54,11.86,1.21c13.44,2.28,25.85,7.03,36.75,15.38c1.25,0.96,2.41,2.02,3.62,3.03
											C169.4,19.97,169.36,20.01,169.33,20.05z M148.94,35.41c0,0.03,0,0.05,0,0.08c-0.55-0.05-1.09-0.11-1.64-0.16
											c-3.72-0.31-7.4-0.85-11.02-1.76c-3.29-0.82-6.48-1.9-9.36-3.76c-1.43-0.93-2.72-2.03-3.58-3.53c-1.49-2.62-1.23-5.4,1.49-7.37
											c1.71-1.24,3.64-1.96,5.65-2.51c3.28-0.9,6.63-1.27,10.01-1.43c4.53-0.21,9.03,0.05,13.51,0.69c0.88,0.13,1.75,0.27,2.63,0.4
											c0.01-0.06,0.02-0.11,0.03-0.17c-2.29-0.37-4.56-0.84-6.86-1.1c-3.09-0.34-6.2-0.62-9.3-0.76c-4.91-0.22-9.8,0.06-14.6,1.2
											c-2.37,0.56-4.65,1.35-6.61,2.85c-1.09,0.83-1.97,1.85-2.35,3.2c-0.6,2.14-0.13,4.11,1.14,5.9c1.31,1.84,3.14,3.03,5.14,3.98
											c4.45,2.1,9.21,3,14.04,3.59c2.46,0.3,4.93,0.49,7.41,0.65C146.1,35.49,147.53,35.41,148.94,35.41z"/>
										<path d="M67.65,70.07c0.14,1.91,0.41,3.67,1.66,5.13c0.9,1.06,2.03,1.64,3.37,1.79c1.53,0.17,3.05,0.1,4.4-0.76
											c0.46-0.29,0.9-0.67,1.24-1.09c0.61-0.76,1.36-1.31,2.32-1.33c2.07-0.05,4.15-0.02,6.28-0.02c-0.7,2.71-1.98,5.01-4.14,6.79
											c-3.05,2.51-6.63,3.25-10.47,3.06c-2.6-0.13-5.04-0.8-7.16-2.39c-2.76-2.06-4.35-4.88-5.03-8.21c-0.83-4.06-0.83-8.1,0.46-12.07
											c1.71-5.22,5.69-8.27,11.17-8.69c2.59-0.2,5.11,0.04,7.53,0.98c4.06,1.58,6.32,4.71,7.41,8.81c0.65,2.44,0.74,4.93,0.7,7.43
											c-0.01,0.52-0.28,0.56-0.7,0.56c-6.1-0.01-12.2-0.01-18.29-0.01C68.17,70.07,67.95,70.07,67.65,70.07z M79.17,64.87
											c-0.22-3.87-2.09-6.24-6.24-6.02c-2.88,0.15-5.25,2.39-5.21,6.02C71.53,64.87,75.35,64.87,79.17,64.87z"/>
										<path d="M187.97,60.55c0.25-0.82,0.43-1.67,0.77-2.44c1.26-2.83,3.52-4.55,6.45-5.29c4.12-1.04,8.24-0.86,12.26,0.54
											c2.68,0.94,4.55,2.75,5.15,5.64c0.11,0.5,0.16,1.03,0.17,1.54c0.01,3.69,0.04,7.39,0,11.08c-0.02,2.25-0.38,4.44-1.57,6.41
											c-1.83,3.03-4.63,4.59-8.01,5.17c-2.39,0.41-4.81,0.62-7.24,0.37c-2.35-0.24-4.48-1.07-6.26-2.65c-1.29-1.14-1.95-2.65-2.22-4.32
											c-0.35-2.13-0.35-4.25,0.38-6.31c0.46-1.31,1.26-2.36,2.41-3.15c2.22-1.52,4.71-2.25,7.36-2.62c1.82-0.25,3.62-0.64,5.41-1.04
											c0.52-0.12,1.04-0.43,1.46-0.77c1.25-1.01,1.03-2.89-0.45-3.49c-2.18-0.88-4.45-1.07-6.69-0.2c-0.58,0.23-1.01,0.84-1.51,1.26
											c-0.16,0.13-0.34,0.33-0.52,0.33c-2.35,0.02-4.69,0.01-7.04,0.01C188.22,60.63,188.17,60.6,187.97,60.55z M205.51,67.91
											c-0.3,0.11-0.42,0.15-0.54,0.19c-1.52,0.46-3.03,0.94-4.55,1.39c-1.23,0.36-2.48,0.66-3.69,1.06c-1.01,0.34-1.6,1.12-1.91,2.14
											c-0.7,2.32,0.43,4.34,2.72,4.73c0.64,0.11,1.3,0.07,1.95,0.04c2.75-0.12,5.1-1.94,5.62-4.61
											C205.42,71.28,205.38,69.63,205.51,67.91z"/>
										<path d="M90.07,60.57c0.28-2.1,1.17-3.87,2.7-5.32c1.68-1.59,3.72-2.45,5.96-2.77c3.52-0.51,7.03-0.37,10.42,0.77
											c2.55,0.85,4.5,2.42,5.29,5.11c0.21,0.73,0.31,1.51,0.31,2.27c0.02,3.93,0.06,7.85-0.02,11.78c-0.08,3.71-1.49,6.81-4.65,8.94
											c-1.95,1.31-4.17,1.96-6.5,2.11c-1.86,0.12-3.73,0.21-5.58,0.12c-2.26-0.11-4.29-0.98-6.06-2.41c-1.1-0.88-1.81-2.04-2.19-3.38
											c-0.67-2.34-0.71-4.7-0.04-7.05c0.43-1.51,1.3-2.73,2.61-3.61c2.22-1.48,4.69-2.21,7.32-2.57c1.8-0.25,3.58-0.63,5.36-1.03
											c0.54-0.12,1.07-0.44,1.51-0.8c1.2-0.96,1.02-2.85-0.39-3.44c-2.23-0.93-4.56-1.11-6.85-0.21c-0.56,0.22-0.96,0.83-1.45,1.26
											c-0.14,0.13-0.32,0.31-0.48,0.31c-2.37,0.02-4.73,0.01-7.1,0.01C90.21,60.63,90.16,60.6,90.07,60.57z M107.49,68.05
											c-1.68,0.49-3.2,0.94-4.73,1.37c-1.21,0.34-2.45,0.62-3.66,0.98c-1.51,0.46-2.23,1.57-2.45,3.09c-0.27,1.89,0.8,3.52,2.67,3.88
											c0.71,0.13,1.45,0.13,2.18,0.1c2.79-0.11,5.09-1.94,5.62-4.66C107.43,71.25,107.38,69.64,107.49,68.05z"/>
										<path d="M144.12,83.1c-1.48,0-2.89,0.07-4.28-0.02c-2.23-0.14-3.56-1.68-3.56-4.02c-0.01-4.96,0-9.93-0.01-14.89
											c0-0.52,0-1.04-0.07-1.55c-0.23-1.62-1.14-2.73-2.6-3.42c-1.48-0.7-3-0.79-4.54-0.28c-2.26,0.74-3.28,2.3-3.3,4.97
											c-0.02,2.62,0,5.23,0,7.85c0,3.54,0,7.08,0,10.62c0,0.23,0,0.45,0,0.72c-2.66,0-5.27,0-7.94,0c-0.01-0.21-0.03-0.42-0.03-0.62
											c0-5.66-0.01-11.31,0.01-16.97c0.01-2.31,0.22-4.6,1.12-6.77c0.7-1.69,1.81-3.01,3.39-3.95c2.59-1.54,5.39-2.46,8.4-2.52
											c3.51-0.08,6.77,0.89,9.66,2.91c2.01,1.4,2.94,3.52,3.35,5.85c0.26,1.47,0.41,2.97,0.42,4.46c0.05,5.67,0.02,11.35,0.02,17.02
											C144.15,82.66,144.14,82.85,144.12,83.1z"/>
										<path d="M57.44,62.11c-2.55,0-5.08,0.01-7.62-0.02c-0.17,0-0.39-0.21-0.48-0.38c-1.67-2.89-5.55-3.82-8.35-1.99
											c-1.12,0.73-1.79,1.81-2.15,3.04c-0.99,3.36-1.05,6.76-0.01,10.11c0.67,2.17,2.09,3.72,4.47,4.08c1.69,0.25,3.35,0.1,4.83-0.84
											c0.4-0.25,0.74-0.62,1.04-0.99c0.8-0.95,1.77-1.4,3.03-1.37c1.82,0.05,3.65,0.01,5.53,0.01c-0.76,2.92-2.18,5.35-4.59,7.15
											c-2.98,2.23-6.39,2.88-10.02,2.71c-2.42-0.12-4.71-0.71-6.74-2.09c-2.86-1.94-4.57-4.68-5.34-8c-1.02-4.39-1.05-8.79,0.52-13.06
											c1.86-5.04,5.58-7.75,10.93-8.2c3.14-0.26,6.16,0.14,9,1.61C54.71,55.59,56.7,58.96,57.44,62.11z"/>
										<path d="M185.15,62.11c-2.62,0-5.14,0.01-7.66-0.02c-0.18,0-0.42-0.23-0.51-0.41c-1.76-3.59-6.88-3.46-8.92-1.51
											c-1,0.95-1.53,2.15-1.82,3.46c-0.67,3.01-0.72,6.03,0.15,9.01c0.67,2.26,2.05,3.92,4.53,4.31c1.69,0.26,3.35,0.11,4.84-0.82
											c0.41-0.26,0.77-0.64,1.09-1.02c0.79-0.93,1.75-1.37,2.98-1.34c1.82,0.05,3.65,0.01,5.55,0.01c-0.13,0.43-0.22,0.82-0.35,1.19
											c-1.79,4.99-5.42,7.71-10.58,8.51c-2.41,0.37-4.8,0.29-7.14-0.41c-3.83-1.14-6.51-3.65-7.89-7.34c-1.93-5.14-2.01-10.41-0.06-15.56
											c1.85-4.89,5.6-7.44,10.8-7.88c2.88-0.24,5.68,0.08,8.33,1.29C182.14,55.25,184.03,58.32,185.15,62.11z"/>
										<path d="M147.38,52.99c1.67,0,3.27-0.12,4.85,0.03c1.64,0.16,2.94,1.71,3.07,3.35c0.02,0.25,0.03,0.5,0.03,0.75
											c0,8.42,0,16.85,0,25.27c0,0.21,0,0.42,0,0.67c-2.67,0-5.29,0-7.94,0C147.38,73.02,147.38,62.99,147.38,52.99z"/>
										<path d="M167.89,93.1c2.65,0.06,5.27,0.01,7.87,0.21c1.95,0.15,3.28,1.53,3.53,3.26c0.32,2.18-0.42,3.7-2.27,4.65
											c-0.08,0.04-0.16,0.09-0.29,0.15c0.84,2.13,1.68,4.25,2.55,6.45c-0.93,0-1.79,0.02-2.64-0.02c-0.12,0-0.27-0.23-0.33-0.39
											c-0.66-1.7-1.31-3.4-1.93-5.11c-0.13-0.35-0.28-0.51-0.68-0.5c-1.03,0.04-2.07,0.01-3.18,0.01c0,2.01,0,3.98,0,5.98
											c-0.91,0-1.75,0-2.63,0C167.89,102.95,167.89,98.09,167.89,93.1z M170.54,99.62c1.37,0,2.71,0.08,4.04-0.02
											c1.21-0.1,1.9-0.86,1.97-1.89c0.08-1.18-0.4-2.08-1.5-2.24c-1.48-0.21-3-0.19-4.51-0.27C170.54,96.77,170.54,98.18,170.54,99.62z"
											/>
										<path d="M154.24,108.06c-2.16,0-3.8-0.91-4.93-2.76c-1.83-3-1.61-7.41,0.4-10.13c2.24-3.02,7.4-3.08,9.51,0.35
											c1.07,1.74,1.43,3.62,1.32,5.62c-0.07,1.34-0.36,2.62-1.02,3.81C158.39,106.98,156.56,108.06,154.24,108.06z M157.79,100.45
											c-0.21-1.05-0.33-2.23-0.68-3.33c-0.44-1.41-1.42-2.03-2.8-2.03c-1.38,0.01-2.36,0.64-2.83,2.02c-0.75,2.21-0.76,4.45-0.03,6.67
											c0.49,1.48,1.49,2.14,2.93,2.12c1.31-0.02,2.47-0.87,2.85-2.27C157.51,102.63,157.59,101.59,157.79,100.45z"/>
										<path d="M200.94,104.28c0.73-0.16,1.42-0.32,2.12-0.47c0.13-0.03,0.26-0.02,0.39-0.04c0.96,1.97,3.45,2.77,5.42,1.76
											c0.68-0.35,1.11-0.87,1.06-1.7c-0.05-0.8-0.45-1.35-1.21-1.57c-1.25-0.37-2.51-0.68-3.77-1.04c-2.25-0.63-3.25-1.91-3.24-4.08
											c0.01-1.77,1.05-3.23,2.86-3.84c1.98-0.68,3.94-0.54,5.79,0.48c0.91,0.5,1.55,1.23,1.81,2.31c-0.84,0.21-1.65,0.41-2.45,0.61
											c-0.99-1.52-2.24-2-3.89-1.5c-0.83,0.25-1.33,0.8-1.37,1.52c-0.04,0.77,0.3,1.31,1.21,1.61c1.13,0.37,2.29,0.62,3.43,0.94
											c1.3,0.36,2.53,0.82,3.2,2.13c1.04,2.02,0.39,4.43-1.54,5.65c-2.18,1.38-5.95,1.29-8.06-0.19
											C201.81,106.28,201.21,105.4,200.94,104.28z"/>
										<path d="M123.08,96.13c-0.83,0.21-1.63,0.41-2.41,0.6c-0.96-1.52-2.28-2.02-3.95-1.49c-0.78,0.25-1.26,0.8-1.31,1.51
											c-0.05,0.71,0.27,1.29,1.1,1.57c1.16,0.39,2.36,0.65,3.54,0.99c1.18,0.33,2.32,0.72,3.02,1.83c1.26,2,0.7,4.58-1.27,5.89
											c-2.22,1.47-6.09,1.38-8.25-0.2c-0.86-0.63-1.38-1.47-1.69-2.54c0.86-0.18,1.69-0.36,2.51-0.54c0.99,1.98,3.39,2.78,5.38,1.83
											c0.71-0.34,1.17-0.86,1.12-1.71c-0.05-0.83-0.48-1.37-1.26-1.6c-1.25-0.36-2.52-0.67-3.77-1.03c-2-0.57-3.06-1.75-3.18-3.48
											c-0.15-2.22,0.87-3.8,2.99-4.48c1.93-0.62,3.83-0.46,5.63,0.52C122.3,94.33,122.93,95.17,123.08,96.13z"/>
										<path d="M111.96,49.76c-1.79,0.06-3.44,0.08-5.08,0.18c-1.16,0.07-1.94-0.41-2.59-1.34c-0.55-0.78-1.22-1.47-1.88-2.24
											c-0.84,1.05-1.64,2.05-2.46,3.04c-0.15,0.18-0.42,0.36-0.65,0.37c-1.53,0.04-3.07,0.05-4.61,0.04c-0.53,0-1.06-0.07-1.7-0.12
											c0.31-0.54,0.54-1.02,0.85-1.44c0.78-1.04,1.54-2.12,2.42-3.07c1.21-1.3,2.7-2.17,4.55-2.17c1.52,0,3.04-0.04,4.55,0.11
											c1.58,0.15,2.78,1.09,3.69,2.35C110.02,46.8,110.91,48.19,111.96,49.76z"/>
										<path d="M130.86,93.1c2.51,0.06,5-0.01,7.46,0.22c2.26,0.21,3.61,2.08,3.57,4.43c-0.04,2.11-1.64,3.91-3.74,4.18
											c-0.66,0.09-1.34,0.09-2.01,0.1c-0.86,0.02-1.73,0-2.65,0c0,1.94,0,3.83,0,5.76c-0.9,0-1.74,0-2.62,0
											C130.86,102.95,130.86,98.1,130.86,93.1z M133.49,99.64c1.36,0,2.67,0.08,3.96-0.03c0.97-0.08,1.58-0.9,1.66-1.93
											c0.07-0.92-0.45-1.84-1.29-2.1c-1.42-0.44-2.88-0.14-4.32-0.24C133.49,96.86,133.49,98.26,133.49,99.64z"/>
										<path d="M191.98,107.81c-1.01,0-1.9,0-2.87,0c0-4.11,0-8.19,0-12.34c-1.32,0-2.58,0-3.88,0c0-0.78,0-1.5,0-2.26
											c3.5,0,7.01,0,10.56,0c0,0.72,0,1.45,0,2.25c-1.27,0-2.51,0-3.82,0C191.98,99.59,191.98,103.68,191.98,107.81z"/>
									</g>
									</svg>
								</div>
								<div id="oceanica-meia-esquerda"   class="parte-impressa oceanica-manequim oceanica-meia-esquerda active">
									<svg fill="#4e4e4e" class="oceanica-meia" version="1.1" id="oceanica-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										 viewBox="0 0 212.67 107.95" enable-background="new 0 0 212.67 107.95" xml:space="preserve">
									<g>
										<path d="M0.12,66.04c0.16-0.96,0.29-1.92,0.47-2.88c0.65-3.44,2.11-6.4,4.99-8.54c1.81-1.34,3.86-2.03,6.07-2.29
											c2.37-0.28,4.72-0.19,7.02,0.48c3.97,1.16,6.5,3.87,7.97,7.64c1.16,2.97,1.44,6.07,1.22,9.23c-0.14,2.05-0.53,4.02-1.3,5.93
											c-1.74,4.34-4.9,6.89-9.49,7.73c-2.71,0.5-5.35,0.33-7.97-0.49C4.75,81.49,2,78.59,0.95,74.14c-0.33-1.41-0.49-2.87-0.73-4.31
											c-0.02-0.15-0.07-0.3-0.11-0.44C0.12,68.27,0.12,67.16,0.12,66.04z M7.84,67.68c0.08,1.94,0.27,4.16,1.1,6.3
											c1.05,2.67,4.43,3.68,6.46,3.08c2.06-0.62,3.26-2.09,3.99-4c0.65-1.71,0.79-3.52,0.8-5.33c0.01-1.77-0.15-3.53-0.9-5.18
											c-1.11-2.47-3.07-3.87-5.54-3.63c-2.91,0.27-4.29,1.45-5.24,4.05C7.99,64.38,7.84,65.87,7.84,67.68z"/>
										<path d="M169.33,20.05c-2.95-1.41-6.02-2.5-9.22-3.17c-4.24-0.89-8.53-1.33-12.87-1.23c-3.72,0.08-7.4,0.49-10.97,1.56
											c-1.87,0.56-3.65,1.29-5.25,2.44c-3.31,2.4-3.28,5.64-1.03,8.44c1.59,1.97,3.75,3.15,6.03,4.12c3.18,1.35,6.53,2.08,9.92,2.67
											c5.39,0.94,10.8,0.78,16.22,0.48c3.23-0.18,6.45-0.35,9.67-0.62c3.23-0.27,6.46-0.64,9.69-0.99c1.6-0.17,3.2-0.39,4.8-0.59
											c0.09-0.01,0.18,0,0.3,0.11c-0.82,0.34-1.64,0.7-2.47,1.02c-4.21,1.59-8.57,2.66-12.99,3.45c-3.5,0.62-7.01,1.16-10.53,1.59
											c-3.14,0.39-6.31,0.69-9.47,0.85c-5.09,0.26-10.19,0.5-15.28,0.5c-4.57,0-9.16-0.21-13.72-0.53c-6.9-0.49-13.75-1.42-20.4-3.44
											c-3.17-0.96-6.24-2.16-8.94-4.15c-2.14-1.58-3.59-3.61-3.96-6.31c-0.24-1.73,0.16-3.36,0.94-4.9c1.23-2.44,3.1-4.33,5.25-5.97
											c0.21-0.16,0.43-0.32,0.64-0.61c-0.21,0-0.42,0-0.63,0c-5.04,0.04-10,0.71-14.9,1.8c-10.09,2.23-19.57,6.1-28.82,10.62
											c-8.17,4-16.05,8.51-23.87,13.14c-0.2,0.12-0.4,0.23-0.69,0.27c0.09-0.14,0.18-0.29,0.29-0.42c2.39-2.98,5.13-5.64,8.04-8.1
											C49.36,20.06,65.37,11.12,83.07,5.25c5.52-1.83,11.18-3.18,16.93-4.05c5.7-0.86,11.43-1.14,17.2-0.88
											c3.98,0.18,7.94,0.54,11.86,1.21c13.44,2.28,25.85,7.03,36.75,15.38c1.25,0.96,2.41,2.02,3.62,3.03
											C169.4,19.97,169.36,20.01,169.33,20.05z M148.94,35.41c0,0.03,0,0.05,0,0.08c-0.55-0.05-1.09-0.11-1.64-0.16
											c-3.72-0.31-7.4-0.85-11.02-1.76c-3.29-0.82-6.48-1.9-9.36-3.76c-1.43-0.93-2.72-2.03-3.58-3.53c-1.49-2.62-1.23-5.4,1.49-7.37
											c1.71-1.24,3.64-1.96,5.65-2.51c3.28-0.9,6.63-1.27,10.01-1.43c4.53-0.21,9.03,0.05,13.51,0.69c0.88,0.13,1.75,0.27,2.63,0.4
											c0.01-0.06,0.02-0.11,0.03-0.17c-2.29-0.37-4.56-0.84-6.86-1.1c-3.09-0.34-6.2-0.62-9.3-0.76c-4.91-0.22-9.8,0.06-14.6,1.2
											c-2.37,0.56-4.65,1.35-6.61,2.85c-1.09,0.83-1.97,1.85-2.35,3.2c-0.6,2.14-0.13,4.11,1.14,5.9c1.31,1.84,3.14,3.03,5.14,3.98
											c4.45,2.1,9.21,3,14.04,3.59c2.46,0.3,4.93,0.49,7.41,0.65C146.1,35.49,147.53,35.41,148.94,35.41z"/>
										<path d="M67.65,70.07c0.14,1.91,0.41,3.67,1.66,5.13c0.9,1.06,2.03,1.64,3.37,1.79c1.53,0.17,3.05,0.1,4.4-0.76
											c0.46-0.29,0.9-0.67,1.24-1.09c0.61-0.76,1.36-1.31,2.32-1.33c2.07-0.05,4.15-0.02,6.28-0.02c-0.7,2.71-1.98,5.01-4.14,6.79
											c-3.05,2.51-6.63,3.25-10.47,3.06c-2.6-0.13-5.04-0.8-7.16-2.39c-2.76-2.06-4.35-4.88-5.03-8.21c-0.83-4.06-0.83-8.1,0.46-12.07
											c1.71-5.22,5.69-8.27,11.17-8.69c2.59-0.2,5.11,0.04,7.53,0.98c4.06,1.58,6.32,4.71,7.41,8.81c0.65,2.44,0.74,4.93,0.7,7.43
											c-0.01,0.52-0.28,0.56-0.7,0.56c-6.1-0.01-12.2-0.01-18.29-0.01C68.17,70.07,67.95,70.07,67.65,70.07z M79.17,64.87
											c-0.22-3.87-2.09-6.24-6.24-6.02c-2.88,0.15-5.25,2.39-5.21,6.02C71.53,64.87,75.35,64.87,79.17,64.87z"/>
										<path d="M187.97,60.55c0.25-0.82,0.43-1.67,0.77-2.44c1.26-2.83,3.52-4.55,6.45-5.29c4.12-1.04,8.24-0.86,12.26,0.54
											c2.68,0.94,4.55,2.75,5.15,5.64c0.11,0.5,0.16,1.03,0.17,1.54c0.01,3.69,0.04,7.39,0,11.08c-0.02,2.25-0.38,4.44-1.57,6.41
											c-1.83,3.03-4.63,4.59-8.01,5.17c-2.39,0.41-4.81,0.62-7.24,0.37c-2.35-0.24-4.48-1.07-6.26-2.65c-1.29-1.14-1.95-2.65-2.22-4.32
											c-0.35-2.13-0.35-4.25,0.38-6.31c0.46-1.31,1.26-2.36,2.41-3.15c2.22-1.52,4.71-2.25,7.36-2.62c1.82-0.25,3.62-0.64,5.41-1.04
											c0.52-0.12,1.04-0.43,1.46-0.77c1.25-1.01,1.03-2.89-0.45-3.49c-2.18-0.88-4.45-1.07-6.69-0.2c-0.58,0.23-1.01,0.84-1.51,1.26
											c-0.16,0.13-0.34,0.33-0.52,0.33c-2.35,0.02-4.69,0.01-7.04,0.01C188.22,60.63,188.17,60.6,187.97,60.55z M205.51,67.91
											c-0.3,0.11-0.42,0.15-0.54,0.19c-1.52,0.46-3.03,0.94-4.55,1.39c-1.23,0.36-2.48,0.66-3.69,1.06c-1.01,0.34-1.6,1.12-1.91,2.14
											c-0.7,2.32,0.43,4.34,2.72,4.73c0.64,0.11,1.3,0.07,1.95,0.04c2.75-0.12,5.1-1.94,5.62-4.61
											C205.42,71.28,205.38,69.63,205.51,67.91z"/>
										<path d="M90.07,60.57c0.28-2.1,1.17-3.87,2.7-5.32c1.68-1.59,3.72-2.45,5.96-2.77c3.52-0.51,7.03-0.37,10.42,0.77
											c2.55,0.85,4.5,2.42,5.29,5.11c0.21,0.73,0.31,1.51,0.31,2.27c0.02,3.93,0.06,7.85-0.02,11.78c-0.08,3.71-1.49,6.81-4.65,8.94
											c-1.95,1.31-4.17,1.96-6.5,2.11c-1.86,0.12-3.73,0.21-5.58,0.12c-2.26-0.11-4.29-0.98-6.06-2.41c-1.1-0.88-1.81-2.04-2.19-3.38
											c-0.67-2.34-0.71-4.7-0.04-7.05c0.43-1.51,1.3-2.73,2.61-3.61c2.22-1.48,4.69-2.21,7.32-2.57c1.8-0.25,3.58-0.63,5.36-1.03
											c0.54-0.12,1.07-0.44,1.51-0.8c1.2-0.96,1.02-2.85-0.39-3.44c-2.23-0.93-4.56-1.11-6.85-0.21c-0.56,0.22-0.96,0.83-1.45,1.26
											c-0.14,0.13-0.32,0.31-0.48,0.31c-2.37,0.02-4.73,0.01-7.1,0.01C90.21,60.63,90.16,60.6,90.07,60.57z M107.49,68.05
											c-1.68,0.49-3.2,0.94-4.73,1.37c-1.21,0.34-2.45,0.62-3.66,0.98c-1.51,0.46-2.23,1.57-2.45,3.09c-0.27,1.89,0.8,3.52,2.67,3.88
											c0.71,0.13,1.45,0.13,2.18,0.1c2.79-0.11,5.09-1.94,5.62-4.66C107.43,71.25,107.38,69.64,107.49,68.05z"/>
										<path d="M144.12,83.1c-1.48,0-2.89,0.07-4.28-0.02c-2.23-0.14-3.56-1.68-3.56-4.02c-0.01-4.96,0-9.93-0.01-14.89
											c0-0.52,0-1.04-0.07-1.55c-0.23-1.62-1.14-2.73-2.6-3.42c-1.48-0.7-3-0.79-4.54-0.28c-2.26,0.74-3.28,2.3-3.3,4.97
											c-0.02,2.62,0,5.23,0,7.85c0,3.54,0,7.08,0,10.62c0,0.23,0,0.45,0,0.72c-2.66,0-5.27,0-7.94,0c-0.01-0.21-0.03-0.42-0.03-0.62
											c0-5.66-0.01-11.31,0.01-16.97c0.01-2.31,0.22-4.6,1.12-6.77c0.7-1.69,1.81-3.01,3.39-3.95c2.59-1.54,5.39-2.46,8.4-2.52
											c3.51-0.08,6.77,0.89,9.66,2.91c2.01,1.4,2.94,3.52,3.35,5.85c0.26,1.47,0.41,2.97,0.42,4.46c0.05,5.67,0.02,11.35,0.02,17.02
											C144.15,82.66,144.14,82.85,144.12,83.1z"/>
										<path d="M57.44,62.11c-2.55,0-5.08,0.01-7.62-0.02c-0.17,0-0.39-0.21-0.48-0.38c-1.67-2.89-5.55-3.82-8.35-1.99
											c-1.12,0.73-1.79,1.81-2.15,3.04c-0.99,3.36-1.05,6.76-0.01,10.11c0.67,2.17,2.09,3.72,4.47,4.08c1.69,0.25,3.35,0.1,4.83-0.84
											c0.4-0.25,0.74-0.62,1.04-0.99c0.8-0.95,1.77-1.4,3.03-1.37c1.82,0.05,3.65,0.01,5.53,0.01c-0.76,2.92-2.18,5.35-4.59,7.15
											c-2.98,2.23-6.39,2.88-10.02,2.71c-2.42-0.12-4.71-0.71-6.74-2.09c-2.86-1.94-4.57-4.68-5.34-8c-1.02-4.39-1.05-8.79,0.52-13.06
											c1.86-5.04,5.58-7.75,10.93-8.2c3.14-0.26,6.16,0.14,9,1.61C54.71,55.59,56.7,58.96,57.44,62.11z"/>
										<path d="M185.15,62.11c-2.62,0-5.14,0.01-7.66-0.02c-0.18,0-0.42-0.23-0.51-0.41c-1.76-3.59-6.88-3.46-8.92-1.51
											c-1,0.95-1.53,2.15-1.82,3.46c-0.67,3.01-0.72,6.03,0.15,9.01c0.67,2.26,2.05,3.92,4.53,4.31c1.69,0.26,3.35,0.11,4.84-0.82
											c0.41-0.26,0.77-0.64,1.09-1.02c0.79-0.93,1.75-1.37,2.98-1.34c1.82,0.05,3.65,0.01,5.55,0.01c-0.13,0.43-0.22,0.82-0.35,1.19
											c-1.79,4.99-5.42,7.71-10.58,8.51c-2.41,0.37-4.8,0.29-7.14-0.41c-3.83-1.14-6.51-3.65-7.89-7.34c-1.93-5.14-2.01-10.41-0.06-15.56
											c1.85-4.89,5.6-7.44,10.8-7.88c2.88-0.24,5.68,0.08,8.33,1.29C182.14,55.25,184.03,58.32,185.15,62.11z"/>
										<path d="M147.38,52.99c1.67,0,3.27-0.12,4.85,0.03c1.64,0.16,2.94,1.71,3.07,3.35c0.02,0.25,0.03,0.5,0.03,0.75
											c0,8.42,0,16.85,0,25.27c0,0.21,0,0.42,0,0.67c-2.67,0-5.29,0-7.94,0C147.38,73.02,147.38,62.99,147.38,52.99z"/>
										<path d="M167.89,93.1c2.65,0.06,5.27,0.01,7.87,0.21c1.95,0.15,3.28,1.53,3.53,3.26c0.32,2.18-0.42,3.7-2.27,4.65
											c-0.08,0.04-0.16,0.09-0.29,0.15c0.84,2.13,1.68,4.25,2.55,6.45c-0.93,0-1.79,0.02-2.64-0.02c-0.12,0-0.27-0.23-0.33-0.39
											c-0.66-1.7-1.31-3.4-1.93-5.11c-0.13-0.35-0.28-0.51-0.68-0.5c-1.03,0.04-2.07,0.01-3.18,0.01c0,2.01,0,3.98,0,5.98
											c-0.91,0-1.75,0-2.63,0C167.89,102.95,167.89,98.09,167.89,93.1z M170.54,99.62c1.37,0,2.71,0.08,4.04-0.02
											c1.21-0.1,1.9-0.86,1.97-1.89c0.08-1.18-0.4-2.08-1.5-2.24c-1.48-0.21-3-0.19-4.51-0.27C170.54,96.77,170.54,98.18,170.54,99.62z"
											/>
										<path d="M154.24,108.06c-2.16,0-3.8-0.91-4.93-2.76c-1.83-3-1.61-7.41,0.4-10.13c2.24-3.02,7.4-3.08,9.51,0.35
											c1.07,1.74,1.43,3.62,1.32,5.62c-0.07,1.34-0.36,2.62-1.02,3.81C158.39,106.98,156.56,108.06,154.24,108.06z M157.79,100.45
											c-0.21-1.05-0.33-2.23-0.68-3.33c-0.44-1.41-1.42-2.03-2.8-2.03c-1.38,0.01-2.36,0.64-2.83,2.02c-0.75,2.21-0.76,4.45-0.03,6.67
											c0.49,1.48,1.49,2.14,2.93,2.12c1.31-0.02,2.47-0.87,2.85-2.27C157.51,102.63,157.59,101.59,157.79,100.45z"/>
										<path d="M200.94,104.28c0.73-0.16,1.42-0.32,2.12-0.47c0.13-0.03,0.26-0.02,0.39-0.04c0.96,1.97,3.45,2.77,5.42,1.76
											c0.68-0.35,1.11-0.87,1.06-1.7c-0.05-0.8-0.45-1.35-1.21-1.57c-1.25-0.37-2.51-0.68-3.77-1.04c-2.25-0.63-3.25-1.91-3.24-4.08
											c0.01-1.77,1.05-3.23,2.86-3.84c1.98-0.68,3.94-0.54,5.79,0.48c0.91,0.5,1.55,1.23,1.81,2.31c-0.84,0.21-1.65,0.41-2.45,0.61
											c-0.99-1.52-2.24-2-3.89-1.5c-0.83,0.25-1.33,0.8-1.37,1.52c-0.04,0.77,0.3,1.31,1.21,1.61c1.13,0.37,2.29,0.62,3.43,0.94
											c1.3,0.36,2.53,0.82,3.2,2.13c1.04,2.02,0.39,4.43-1.54,5.65c-2.18,1.38-5.95,1.29-8.06-0.19
											C201.81,106.28,201.21,105.4,200.94,104.28z"/>
										<path d="M123.08,96.13c-0.83,0.21-1.63,0.41-2.41,0.6c-0.96-1.52-2.28-2.02-3.95-1.49c-0.78,0.25-1.26,0.8-1.31,1.51
											c-0.05,0.71,0.27,1.29,1.1,1.57c1.16,0.39,2.36,0.65,3.54,0.99c1.18,0.33,2.32,0.72,3.02,1.83c1.26,2,0.7,4.58-1.27,5.89
											c-2.22,1.47-6.09,1.38-8.25-0.2c-0.86-0.63-1.38-1.47-1.69-2.54c0.86-0.18,1.69-0.36,2.51-0.54c0.99,1.98,3.39,2.78,5.38,1.83
											c0.71-0.34,1.17-0.86,1.12-1.71c-0.05-0.83-0.48-1.37-1.26-1.6c-1.25-0.36-2.52-0.67-3.77-1.03c-2-0.57-3.06-1.75-3.18-3.48
											c-0.15-2.22,0.87-3.8,2.99-4.48c1.93-0.62,3.83-0.46,5.63,0.52C122.3,94.33,122.93,95.17,123.08,96.13z"/>
										<path d="M111.96,49.76c-1.79,0.06-3.44,0.08-5.08,0.18c-1.16,0.07-1.94-0.41-2.59-1.34c-0.55-0.78-1.22-1.47-1.88-2.24
											c-0.84,1.05-1.64,2.05-2.46,3.04c-0.15,0.18-0.42,0.36-0.65,0.37c-1.53,0.04-3.07,0.05-4.61,0.04c-0.53,0-1.06-0.07-1.7-0.12
											c0.31-0.54,0.54-1.02,0.85-1.44c0.78-1.04,1.54-2.12,2.42-3.07c1.21-1.3,2.7-2.17,4.55-2.17c1.52,0,3.04-0.04,4.55,0.11
											c1.58,0.15,2.78,1.09,3.69,2.35C110.02,46.8,110.91,48.19,111.96,49.76z"/>
										<path d="M130.86,93.1c2.51,0.06,5-0.01,7.46,0.22c2.26,0.21,3.61,2.08,3.57,4.43c-0.04,2.11-1.64,3.91-3.74,4.18
											c-0.66,0.09-1.34,0.09-2.01,0.1c-0.86,0.02-1.73,0-2.65,0c0,1.94,0,3.83,0,5.76c-0.9,0-1.74,0-2.62,0
											C130.86,102.95,130.86,98.1,130.86,93.1z M133.49,99.64c1.36,0,2.67,0.08,3.96-0.03c0.97-0.08,1.58-0.9,1.66-1.93
											c0.07-0.92-0.45-1.84-1.29-2.1c-1.42-0.44-2.88-0.14-4.32-0.24C133.49,96.86,133.49,98.26,133.49,99.64z"/>
										<path d="M191.98,107.81c-1.01,0-1.9,0-2.87,0c0-4.11,0-8.19,0-12.34c-1.32,0-2.58,0-3.88,0c0-0.78,0-1.5,0-2.26
											c3.5,0,7.01,0,10.56,0c0,0.72,0,1.45,0,2.25c-1.27,0-2.51,0-3.82,0C191.98,99.59,191.98,103.68,191.98,107.81z"/>
									</g>
									</svg>
								</div> -->
								<h3 class="texto-nome" id="texto-nome">Jogador</h3>
								<h3 class="texto-numero" id="texto-numero">10</h3>

								<div id="camisa-costas-svg" class="parte-manequim camisa">

								</div>
								<div id="calcao-costas-svg" class="parte-manequim calcao">

								</div>
								<div id="camisa-costas-png" class="parte-manequim camisa costas">
									<img src="images/simulador/camisa-costas.png">
								</div>
								<div id="calcao-costas-png" class="parte-manequim calcao costas">
									<img src="images/simulador/calcao-costas.png">
								</div>
								<div id="svg-meia-costas" class="parte-manequim meia">
										<svg version="1.1" id="Camada_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											 viewBox="0 0 246.2 261.6" enable-background="new 0 0 246.2 261.6" xml:space="preserve">
										<g id="c-meiao">
											<path d="M43.8,44c1.4,0.6,2.9,0.4,4.3,0.6c3.4,0.4,6.8,0.6,10.2,1.1c1.8,0.3,3.6,0.7,5.4,1.2
												c1.7,0.5,3.6,0.8,5.3,1.2c2.2,0.5,4.4,0.9,6.5,1.6c3.3,1.1,6.6,2.4,9.9,3.6c0.2,0,0.3,0.1,0.4,0.2c1.8,0.9,1.9,1.2,1,2.9
												c-1.8,3.7-3.8,7.4-6.1,10.8c-0.4,0.5-0.7,1.1-0.8,1.7c0,0.3-0.1,0.7-0.3,0.8c-0.9,0.5-0.9,1.4-1.2,2.2c-0.6,1.3-0.5,2.7-0.4,4
												c0.2,1.8-0.2,3.7,0,5.5c0.7,7.2,1.4,14.5,1.7,21.8c0.2,5.1-0.9,10-2.2,14.9c-1.6,5.6-3.8,10.8-6.3,16c-2.2,4.5-3.6,9.4-4.8,14.3
												c-1.8,7.5-3.7,15-5.4,22.5c-1.4,6.2-1.4,12.4,0.1,18.5c1,4.1,0.5,8-0.4,12c-0.1,0.3-0.1,0.6-0.2,0.9c-0.6-0.3-0.8-0.9-1.1-1.3
												c-1.3-1.7-2.2-2.1-4.1-1.2c-2.4,1.1-4.8,1.5-7.4,1c-1.4-0.3-2.7-0.8-4.1-0.9c-0.7-0.1-1.3,0.1-1.9,0.6c-0.7,0.6-1.3,1.3-1.8,2.1
												c-1.3,2.3-3.3,3.5-5.9,3.9c-0.4,0.1-0.8,0-1.1,0.4c-0.3,0-0.6,0-1,0c-0.2-0.4-0.2-0.8-0.2-1.3c0-1.5,0-3.1-0.2-4.6
												c-0.4-3.6,0.2-7.1,1.6-10.4c2.2-5,3.3-10.1,3-15.6c-0.4-8.6-1.2-17.1-2.4-25.5C32,136,30.1,122.6,29.2,109
												c-0.1-0.7,0.2-1.6-0.4-2.3c0-0.9,0-1.8,0-2.6c0.3,0,0.3-0.3,0.3-0.4c0.2-5.9,1.4-11.6,2.4-17.4c1-5.6,2.7-11.1,3.9-16.7
												c0.7-3.4,2.1-6.6,3.6-9.7c0.2-0.4,0.4-0.7,0.1-1.1c-0.4-0.6-0.1-1.1,0.4-1.4c0.3-0.2,0.4-0.4,0.4-0.7c0.4-3.4,1-6.8,1-10.2
												c0-0.9,0.1-1.7,0.8-2.3C42.7,44,43.2,44,43.8,44z"/>
											<path  d="M213,206.7c-0.1-0.5-0.5-0.4-0.9-0.4c-2.3-0.5-4-1.7-5.1-3.8c-1.4-2.6-2.6-3.1-5.5-2.5
												c-1.3,0.3-2.6,0.5-3.9,0.8c-1.8,0.4-3.5,0.1-5-0.7c-0.8-0.5-1.3-0.7-2.3-0.7c-1.4,0-2.1,0.6-2.9,1.5c-0.4,0.4-0.6,1-1,1.6
												c-1.1-4.3-1.9-8.4-0.8-12.7c1.9-7.2,1.5-14.5-0.3-21.7c-2-7.9-3.9-15.9-6-23.8c-1.3-5.2-3.7-10-5.9-14.9c-3.6-7.9-6.3-16.2-6.4-25
												c-0.1-6,0.6-12,1.2-17.9c0.2-1.9,0.8-3.8,0.5-5.6c-0.4-2.6,0.5-5.1-0.1-7.5c-0.3-1.2-0.1-2.7-1.5-3.6c-0.7-0.5-0.6-1.8-1.2-2.6
												c-2.3-3.3-4.1-6.8-5.9-10.3c-0.1-0.1-0.1-0.2-0.1-0.3c-0.9-2-1-2.1,1.3-3.1c2.1-1,4.3-1.6,6.4-2.4c3.6-1.3,7.2-2.3,10.9-3.1
												c3.3-0.7,6.5-1.6,9.8-2.1c2.9-0.5,5.9-0.5,8.9-1c1.8-0.3,3.7,0,5.4-0.8c0.6,0,1.3,0,1.9,0c0.8,0.5,0.9,1.3,0.9,2.1
												c-0.1,3.5,0.6,6.9,1,10.4c0,0.3,0.1,0.5,0.3,0.6c0.7,0.4,0.9,0.9,0.5,1.6c-0.2,0.3,0,0.6,0.1,0.9c0.9,2,1.8,4,2.5,6.1
												c0.7,1.9,1,3.9,1.5,5.8c2.3,8.5,4.2,17,5.4,25.8c0.2,1.6,0.1,3.3,0.7,4.9c0,2.1,0,4.2,0,6.2c-0.2,0.1-0.2,0.3-0.2,0.5
												c-0.2,2.6-0.5,5.3-0.6,7.9c-0.5,6.9-1.3,13.8-2.4,20.7c-1.7,11.1-3,22.3-3.9,33.4c-0.6,7.1,0,13.9,3.1,20.4
												c1.2,2.5,1.6,5.3,1.6,8.1c0,1.9-0.5,3.9-0.3,5.8c0.1,0.8-0.1,1.3-0.8,1.6C213.6,206.7,213.3,206.7,213,206.7z"/>
										</g>
										</svg>
								</div>
								<div id="meia-costas" class="parte-manequim meia" style="margin-top:-3px">
									<img src="images/simulador/meias-costas.png">
								</div>

							</div><!-- fechar manequim -->
						</div>

					<div id="botoes-simulador-direita" class="botoes-simulador-direita">
						<div class="botao-simulador">
							<p class="texto-btn-simulador">Goleiro</p>
							<div class="image-box-btn-simulador icone-maior">
								<img src="images/simulador/interface-nova/goleiro.png">
							</div>
						</div>
						<div class="botao-simulador">
							<p class="texto-btn-simulador ">2ºuniforme</p>
							<div class="image-box-btn-simulador icone-maior">
								<img src="images/simulador/interface-nova/segundo-uniforme.png">
							</div>
						</div>
						<div class="botao-simulador">
							<p class="texto-btn-simulador">Passeio</p>
							<div class="image-box-btn-simulador icone-maior">
								<img src="images/simulador/interface-nova/camisa-passeio.png">
							</div>
						</div>
						<div class="botao-simulador">
							<p class="texto-btn-simulador">Agasalho</p>
							<div class="image-box-btn-simulador icone-maior">
								<img src="images/simulador/interface-nova/agasalho.png">
							</div>
						</div>
						<div class="botao-simulador">
							<p class="texto-btn-simulador">Segunda<br>pele</p>
							<div class="image-box-btn-simulador icone-maior">
								<img src="images/simulador/interface-nova/segunda-pele.png">
							</div>
						</div>
						<div class="botao-simulador">
							<p class="texto-btn-simulador">Acessorios</p>
							<div class="image-box-btn-simulador icone-maior">
								<img src="images/simulador/interface-nova/saquinho.png">
							</div>
						</div>

					</div>
					<div class="mais-produtos" onclick="mostrarBotoesDireita()">
						<div id="mais-produtos-mensagem" class="mais-produtos-mensagem">
							<p class="margin-zero">+ Produtos</p>
						</div>
					</div>
				</div>
			</div>
		</section>



<script src="js/html2canvas.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/responsive.js">

</script>
</body>
</html>
