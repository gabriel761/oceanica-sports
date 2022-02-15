var janela = document.documentElement
var textoEstampaCamisa = document.getElementsByClassName("subtitulo-estampa-camisa");
var textoDetalheCamisa = document.getElementsByClassName("subtitulo-detalhe-camisa");
var textoImpressoesCamisa = document.getElementsByClassName("subtitulo-impressoes-camisa");
var textoEstampaCalcao = document.getElementsByClassName("subtitulo-estampa-calcao");
var textoDetalheCalcao = document.getElementsByClassName("subtitulo-detalhe-calcao");
var textoImpressoesCalcao = document.getElementsByClassName("subtitulo-detalhe-calcao")
var textoMeia = document.getElementsByClassName("texto-meia");
var tituloCamisa = document.getElementsByClassName("cores-camisa-titulo");
var tituloCalcao = document.getElementsByClassName("cores-calcao-titulo");
var tituloMeiao = document.getElementsByClassName("cores-meiao-titulo")
var botaoFiltro = document.getElementById("btn-filtros")
var filtros = document.getElementsByClassName("filtros")
var modelosDisponiveis = document.getElementsByClassName("modelos-disponiveis")
var menuNomeNumero = document.getElementById("menu-geral-emblema");
var ocultarCalcaoCamiseta = document.getElementsByClassName("ocultar-calcao-camiseta")
var menuGeralCores = document.getElementById("menu-geral-cores")
var setaMobile = document.getElementsByClassName("seta-celular")
var seloPacote = document.getElementsByClassName("selo-pacote")
var botaoMaisProdutos = document.getElementsByClassName("mais-produtos")
var header = document.getElementsByClassName("container-header")

if (janela.clientWidth <= 900) {
	textoEstampaCamisa[0].innerHTML = "Estampa";
	textoEstampaCalcao[0].innerHTML = "Estampa";
	
	textoMeia[0].innerHTML = "Meião";
	tituloCamisa[0].innerHTML = "Camisa"
	tituloCalcao[0].innerHTML = "Calção"
	tituloMeiao[0].innerHTML = "Meião"

	mudancasMenuNome()
	window.addEventListener('mouseup', function(){
		setTimeout(function(){
			
			if (menuGeralCores.classList.contains("active-menu")) {
				console.log("abriu")
				ocultarElementosMenuCores()
			}else{
				console.log("fechou")
				mostarElementosMenuCores()
			}
			
		}, 200)
	})

}




function mostrarOcultarFiltros(){

	if (!filtros[0].classList.contains("display-flex")) {
		filtros[0].classList.add("display-flex")
		botaoFiltro.innerHTML = "ocultar"
		modelosDisponiveis[0].style.height = "30%"
	}else if(filtros[0].classList.contains("display-flex")){
		filtros[0].classList.remove("display-flex")
		botaoFiltro.innerHTML = "ocultar"
		modelosDisponiveis[0].removeAttribute("style")
		botaoFiltro.innerHTML = "filtros"
	}

}

function mudancasMenuNome(){
	menuNomeNumero.children[1].innerHTML = "Aviso: Para adicionar suas logos na camisa, acesse o simulador por um computador ou notebook"
	menuNomeNumero.children[2].style.display = "none"
}
function ocultarElementosMenuCores(){
		for (var i = 0; i < ocultarCalcaoCamiseta.length; i++) {
		ocultarCalcaoCamiseta[i].style.visibility = "hidden";
		}
		setaMobile[0].style.visibility = "hidden";
		seloPacote[0].style.visibility = "hidden";
		botaoMaisProdutos[0].style.visibility = "hidden";
		header[0].style.visibility = "hidden";
}
function mostarElementosMenuCores(){
	for (var i = 0; i < ocultarCalcaoCamiseta.length; i++) {
		ocultarCalcaoCamiseta[i].removeAttribute("style")
		}
		setaMobile[0].removeAttribute("style")
		seloPacote[0].removeAttribute("style")
		botaoMaisProdutos[0].removeAttribute("style")
		header[0].removeAttribute("style")
}
function abrirMenuMobile(event){
	var menuMobile = event.children[1];
	
	if (!menuMobile.classList.contains('active-menu')) {
		menuMobile.classList.add("active-menu")
	}else{
		menuMobile.classList.remove("active-menu")
	}
	
}
function mostrarBotoesDireita(){
	
	var botoesDireita = document.getElementById('botoes-simulador-direita')
	var botoesEsquerda = document.getElementById('botoes-simulador')
	var maisProdutosMensagem = document.getElementById('mais-produtos-mensagem')
	if (!botoesDireita.hasAttribute('style')) {
		botoesDireita.style.display = "flex"
		botoesEsquerda.style.bottom = "60px";
		maisProdutosMensagem.parentElement.style.bottom = "130px";
	}else{
		
	}
}
