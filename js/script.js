
  var gola = document.getElementById("estampa-primaria");
  var torso = document.getElementById("detalhe-punho");
  var mangas = document.getElementById("detalhe-lateral");
  var golaDaManga = document.getElementById("calcao-primaria");
  var bermuda = document.getElementById("calcao-detalhe-lateral");
  var lateraisBermuda = document.getElementById("gola-primaria");

  var cgola = document.getElementById("c-estampa-primaria");
  var ctorso = document.getElementById("c-detalhe-punho");
  var cmangas = document.getElementById("c-detalhe-lateral");
  var cgolaDaManga = document.getElementById("c-calcao-primaria");
  var cbermuda = document.getElementById("c-calcao-detalhe-lateral");
  var clateraisBermuda = document.getElementById("c-gola-primaria");

  var camisaFrentePng = document.getElementById("camisa-frente-png");
  var calcaoFrentePng = document.getElementById("calcao-frente-png");
  var camisaCostasPng = document.getElementById("camisa-costas-png");
  var calcaoCostasPng = document.getElementById("calcao-costas-png");

  var camisaFrenteSvg = document.getElementById("camisa-svg");
  var calcaoFrenteSvg = document.getElementById("calcao-svg");
  var camisaCostasSvg = document.getElementById("camisa-costas-svg");
  var calcaoCostasSvg = document.getElementById("calcao-costas-svg");

  var meiaFrente = document.getElementById("meia-frente");
  var meiaCostas = document.getElementById("meia-costas");
  var svgMeiaFrente = document.getElementById("svg-meia-frente");
  var svgMeiaCostas = document.getElementById("svg-meia-costas");


  var escudosManequim = document.getElementsByClassName("escudo-manequim");
  var escudoPeitoDireito = document.getElementById("escudo-peito-direito");
  var escudoPeitoMeio = document.getElementById("escudo-peito-meio");
  var escudoPeitoMeioAb = document.getElementById("escudo-peito-meio-abdomen");
  var escudoPernaDireita = document.getElementById("escudo-perna-direita");
  var escudoPernaEsquerda = document.getElementById("escudo-perna-esquerda");

  var oceanicaManequim = document.getElementsByClassName("oceanica-manequim");
  var oceanicaPeito = document.getElementById("oceanica-peito");
  var oceanicaOmbro = document.getElementById("oceanica-ombro");
  var oceanicaPernaDireita = document.getElementById("oceanica-perna-direita");
  var oceanicaPernaEsquerda = document.getElementById("oceanica-perna-esquerda");
  var oceanicaMeiaDireita = document.getElementById("oceanica-meia-direita")
  var oceanicaMeiaEsquerda = document.getElementById("oceanica-meia-esquerda")

  var parteCorpo = gola;
  var cparteCorpo = cgola;
  var posEscudoPeito = "peito-direito";
  var posEscudoPerna = "perna-direita";
  var testarPosManequim = "frente";

  var posOceanicaTorso = "peito";
  var posOceanicaPerna = "esquerda";

  var textoNome = document.getElementById("texto-nome");
  var textoNumero = document.getElementById("texto-numero");
  var numeroFrente = document.getElementsByClassName("numero-frente");

  var mudarParaCorCadastrada = true;

  var parteModelo = "camisa";


  var ocultarCalcaoCamiseta = document.getElementsByClassName("ocultar-calcao-camiseta")
  var setaMobile = document.getElementsByClassName("seta-celular")
  var seloPacote = document.getElementsByClassName("selo-pacote")

  var count = 0;
  var coresCamisa
  var coresCalcao
  var corMeia = null;

  var modeloCompleto = {
    nomeCalcao:"",
    nomeCamisa:"",
    pacoteProduto:"prata",
    coresCamisa:"",
    coresCalcao:"",
    nomeJogador:"",
    numeroJogador:"",
    precoTotal:0,
    precoCamisa:0,
    precoCalcao:0,
    precoMeiao:0,
    camisaOcultado:false,
    calcaoOcultado:false,
    meiaOcultado:false
  }


// funcoes ao carregar pagina

window.onload = funcoesAoCarregar()

function funcoesAoCarregar(){

  requestSVGNovoCamisa(309);

  mudarTextoModeloPacote(modeloCompleto.pacoteProduto)
  carregarPrecos()
  carregarPrecoUmModelo(modeloCompleto.pacoteProduto)



}


function disableBtnsCamisa() {

  var menuGola = document.getElementsByClassName("name-cor-gola");
  var menuEstampaCamisa = document.getElementsByClassName("name-cor-estampa-camisa");
  var menuDetalheCamisa = document.getElementsByClassName("name-cor-detalhe-camisa");
  var menuEstampaCalcao = document.getElementsByClassName("name-cor-estampa-calcao");
  var menuDetalheCalcao = document.getElementsByClassName("name-cor-detalhe-calcao");


  for (var i = 0; i < menuGola.length; i++) {
    if (coresCamisa.gola[i] != undefined) {
      menuGola[i].children[1].style.backgroundColor = coresCamisa.gola[i];
      menuGola[i].classList.remove("disabled")
      menuGola[i].children[1].setAttribute("onclick", "abrirMenu(this)");
    }else{
      menuGola[i].classList.add("disabled")
      menuGola[i].children[1].removeAttribute("onclick");
    }
  }

  for (var i = 0; i < menuEstampaCamisa.length; i++) {

    if (coresCamisa.estampaCamisa[i] != undefined) {
      menuEstampaCamisa[i].children[1].style.backgroundColor = coresCamisa.estampaCamisa[i];
      menuEstampaCamisa[i].classList.remove("disabled")
      menuEstampaCamisa[i].children[1].setAttribute("onclick", "abrirMenu(this)");

    }else{
      menuEstampaCamisa[i].classList.add("disabled")
      menuEstampaCamisa[i].children[1].removeAttribute("onclick");
    }
  }
  for (var i = 0; i < menuDetalheCamisa.length; i++) {
    if (coresCamisa.detalheCamisa[i] != undefined) {
      if (coresCamisa.detalheCamisa[i] == coresCamisa.detalheCamisa[0]) {

      }
      menuDetalheCamisa[i].children[1].style.backgroundColor = coresCamisa.detalheCamisa[i];
      menuDetalheCamisa[i].classList.remove("disabled")
      menuDetalheCamisa[i].children[1].setAttribute("onclick", "abrirMenu(this)");
    }else{
      menuDetalheCamisa[i].classList.add("disabled")
      menuDetalheCamisa[i].children[1].removeAttribute("onclick");
    }
  }

}
function disableBtnsCalcao() {
  var menuEstampaCalcao = document.getElementsByClassName("name-cor-estampa-calcao");
  var menuDetalheCalcao = document.getElementsByClassName("name-cor-detalhe-calcao");



  for (var i = 0; i < menuEstampaCalcao.length; i++) {
    if (coresCalcao.estampaCalcao[i] != undefined) {
      menuEstampaCalcao[i].children[1].style.backgroundColor = coresCalcao.estampaCalcao[i];
      menuEstampaCalcao[i].classList.remove("disabled")
      menuEstampaCalcao[i].children[1].setAttribute('onclick','abrirMenu(this)')
    }else{
      menuEstampaCalcao[i].classList.add("disabled")
      menuEstampaCalcao[i].children[1].removeAttribute("onclick");
    }
  }
  for (var i = 0; i < menuDetalheCalcao.length; i++) {
    if (coresCalcao.detalheCalcao[i] != undefined) {
      menuDetalheCalcao[i].children[1].style.backgroundColor = coresCalcao.detalheCalcao[i];
      menuDetalheCalcao[i].classList.remove("disabled")
      menuDetalheCalcao[i].children[1].setAttribute('onclick','abrirMenu(this)')
    }else{
      menuDetalheCalcao[i].classList.add("disabled")
      menuDetalheCalcao[i].children[1].removeAttribute("onclick");
    }
  }

}
function carregarPrecos(){
        var xhr = new XMLHttpRequest();

  			xhr.open("GET","php/carregarPrecosSimulador.php" ,true);

  			xhr.onload = function(){
  				if (this.status == 200) {
  					var precosPacotes = JSON.parse(this.responseText);

            atualizarPrecosMenu(precosPacotes)
            console.log(precosPacotes)
  				}else{
            	console.log("erro ao carregar preços")
          }
  			}
  			xhr.send();
}
function carregarPrecoUmModelo(pacote){
  var xhr = new XMLHttpRequest();

  xhr.open("GET","php/carregarPrecoUmModelo.php?pacote="+pacote);

  xhr.onload = function(){
    if (this.status == 200) {

      var precosPacote = JSON.parse(this.responseText);

      modeloCompleto.precoCamisa = precosPacote.preco_camisa;
      modeloCompleto.precoCalcao = precosPacote.preco_calcao;
      modeloCompleto.precoMeiao = precosPacote.preco_meiao;

    }else{
        console.log("erro ao carregar preços")
    }
  }
  xhr.send();
}
function atualizarPrecosMenu(arrayPrecos){
  document.getElementById("preco-conjunto-supreme").innerHTML = "R$"+(parseFloat(arrayPrecos[0][2])+parseFloat(arrayPrecos[0][3])).toFixed(2).toString().replace('.',',');
  document.getElementById("preco-conjunto-prata").innerHTML = "R$"+(parseFloat(arrayPrecos[1][2])+parseFloat(arrayPrecos[1][3])).toFixed(2).toString().replace('.',',');
  document.getElementById("preco-conjunto-ouro").innerHTML = "R$"+(parseFloat(arrayPrecos[2][2])+parseFloat(arrayPrecos[2][3])).toFixed(2).toString().replace('.',',');
  document.getElementById("preco-conjunto-profissa20").innerHTML = "R$"+(parseFloat(arrayPrecos[3][2])+parseFloat(arrayPrecos[3][3])).toFixed(2).toString().replace('.',',');
  document.getElementById("preco-conjunto-libertadores").innerHTML = "R$"+(parseFloat(arrayPrecos[4][2])+parseFloat(arrayPrecos[4][3])).toFixed(2).toString().replace('.',',');
  document.getElementById("preco-conjunto-african").innerHTML = "R$"+(parseFloat(arrayPrecos[5][2])+parseFloat(arrayPrecos[5][3])).toFixed(2).toString().replace('.',',');

  document.getElementById("preco-camisa-supreme").innerHTML = "R$"+(arrayPrecos[0][2]).toString().replace('.',',');
  document.getElementById("preco-calcao-supreme").innerHTML = "R$"+(arrayPrecos[0][3]).toString().replace('.',',');
  document.getElementById("preco-meiao-supreme").innerHTML = "R$"+(arrayPrecos[0][4]).toString().replace('.',',');

  document.getElementById("preco-camisa-prata").innerHTML = "R$"+(arrayPrecos[1][2]).toString().replace('.',',');
  document.getElementById("preco-calcao-prata").innerHTML = "R$"+(arrayPrecos[1][3]).toString().replace('.',',');
  document.getElementById("preco-meiao-prata").innerHTML = "R$"+(arrayPrecos[1][4]).toString().replace('.',',');

  document.getElementById("preco-camisa-ouro").innerHTML = "R$"+(arrayPrecos[2][2]).toString().replace('.',',');
  document.getElementById("preco-calcao-ouro").innerHTML = "R$"+(arrayPrecos[2][3]).toString().replace('.',',');
  document.getElementById("preco-meiao-ouro").innerHTML = "R$"+(arrayPrecos[2][4]).toString().replace('.',',');

  document.getElementById("preco-camisa-profissa20").innerHTML = "R$"+(arrayPrecos[3][2]).toString().replace('.',',');
  document.getElementById("preco-calcao-profissa20").innerHTML = "R$"+(arrayPrecos[3][3]).toString().replace('.',',');
  document.getElementById("preco-meiao-profissa20").innerHTML = "R$"+(arrayPrecos[3][4]).toString().replace('.',',');

  document.getElementById("preco-camisa-libertadores").innerHTML = "R$"+(arrayPrecos[4][2]).toString().replace('.',',');
  document.getElementById("preco-calcao-libertadores").innerHTML = "R$"+(arrayPrecos[4][3]).toString().replace('.',',');
  document.getElementById("preco-meiao-libertadores").innerHTML = "R$"+(arrayPrecos[4][4]).toString().replace('.',',');

  document.getElementById("preco-camisa-african").innerHTML = "R$"+(arrayPrecos[5][2]).toString().replace('.',',');
  document.getElementById("preco-calcao-african").innerHTML = "R$"+(arrayPrecos[5][3]).toString().replace('.',',');
  document.getElementById("preco-meiao-african").innerHTML = "R$"+(arrayPrecos[5][4]).toString().replace('.',',');

}
function calcularPrecoFinal(){
  var precoCamisa
  var precoCalcao
  var precoMeiao
  var qtdCamisa = document.getElementById("quantidade-camisa").value
  var qtdCalcao = document.getElementById("quantidade-calcao").value
  var qtdMeiao = document.getElementById("quantidade-meiao").value
  if(modeloCompleto.camisaOcultado == false){
    precoCamisa = parseFloat(modeloCompleto.precoCamisa.replace(',','.'))
    precoCamisa *= qtdCamisa;
    modeloCompleto.precoTotal += precoCamisa;
  }
  if(modeloCompleto.calcaoOcultado == false){
    precoCalcao = parseFloat(modeloCompleto.precoCalcao.replace(',','.'))
    precoCalcao *= qtdCalcao;
    modeloCompleto.precoTotal += precoCalcao;
  }
  if(modeloCompleto.meiaOcultado == false){
    precoMeiao = parseFloat(modeloCompleto.precoMeiao.replace(',','.'))
    precoCalcao *= qtdCalcao;
    modeloCompleto.precoTotal += precoMeiao;
  }
  modeloCompleto.precoTotal = modeloCompleto.precoTotal.toFixed(2)

}



  function mudaCor(cor, event){
    mudarParaCorCadastrada = false;
    var caixaCor = event;

    caixaCor.parentElement.parentElement.parentElement.style.backgroundColor = cor;
    setTimeout(function(){
      caixaCor.parentElement.parentElement.classList.remove("active-menu")
    }, 1);
    parteCorpo.setAttribute("fill", cor);
    if (cparteCorpo != null) {
        cparteCorpo.setAttribute("fill", cor);
    }

    menuCores = document.getElementsByClassName("menu-cores");
  }
  function mudaCorTexto(cor, event){
    var caixaCor = event;

    caixaCor.parentElement.parentElement.parentElement.style.backgroundColor = cor;
    setTimeout(function(){
      caixaCor.parentElement.parentElement.classList.remove("active-menu")
    }, 1);
    if (caixaCor.parentElement.parentElement.parentElement.classList.contains("caixa-cor-nome")) {
      var caixaCoresNome = document.getElementsByClassName("caixa-cor-nome")
      for (var i = 0; i < caixaCoresNome.length; i++) {
        caixaCoresNome[i].style.backgroundColor = cor
      }
      textoNome.style.color = cor;

    }else if (caixaCor.parentElement.parentElement.parentElement.classList.contains("caixa-cor-numero")) {
      var caixaCoresNumero = document.getElementsByClassName("caixa-cor-numero")
      var corNumero = document.getElementsByClassName("numero-frente")
      for (var i = 0; i < caixaCoresNumero.length; i++) {
        caixaCoresNumero[i].style.backgroundColor = cor
      }
      textoNumero.style.color = cor;
    }else if (caixaCor.parentElement.parentElement.parentElement.classList.contains("caixa-cor-numero-calcao")) {

      var numeroFrente = document.getElementsByClassName("numero-frente")
      for (var i = 0; i < numeroFrente.length; i++) {
        numeroFrente[i].style.color = cor;
      }

    }else if (caixaCor.parentElement.parentElement.parentElement.classList.contains("caixa-cor-oceanica-camisa")) {
      var oceanicaCamisa = document.getElementsByClassName("oceanica-camisa");
      for (var i = 0; i < oceanicaCamisa.length; i++) {
        oceanicaCamisa[i].setAttribute("fill",cor);
      }
    }else if (caixaCor.parentElement.parentElement.parentElement.classList.contains("caixa-cor-oceanica-calcao")) {
      var oceanicaCalcao = document.getElementsByClassName("oceanica-calcao");
      for (var i = 0; i < oceanicaCalcao.length; i++) {
        oceanicaCalcao[i].setAttribute("fill",cor);
      }
    }else if (caixaCor.parentElement.parentElement.parentElement.classList.contains("caixa-cor-oceanica-meia")) {
      var oceanicaMeia = document.getElementsByClassName("oceanica-meia");
      for (var i = 0; i < oceanicaMeia.length; i++) {
        oceanicaMeia[i].setAttribute("fill",cor);
      }
    }else if (caixaCor.parentElement.parentElement.parentElement.classList.contains("caixa-cor-escudo")) {
      var escudoCamisa = document.getElementsByClassName("escudo-camisa");
      var escudoCalcao = document.getElementsByClassName("escudo-calcao");

      for (var i = 0; i < escudoCalcao.length; i++) {
        escudoCalcao[i].setAttribute("fill",cor);
      }
      for (var i = 0; i < escudoCamisa.length; i++) {
        escudoCamisa[i].setAttribute("fill",cor);
      }
    }


  }

function manterCorPacotesCamisa(){


 function manterCorCamisaFrente(){
   let checkAllIfs = 0
   return new Promise((resolve, reject) => {
    if (document.getElementById("gola-primaria") != null) {
      document.getElementById("gola-primaria").setAttribute("fill", coresCamisa.gola[0])
      checkAllIfs++
    }
     if (document.getElementById("gola-secundaria") != null) {
      document.getElementById("gola-secundaria").setAttribute("fill", coresCamisa.gola[1])
      checkAllIfs++
    }
     if (document.getElementById("gola-terciaria") != null) {
      document.getElementById("gola-terciaria").setAttribute("fill", coresCamisa.gola[2])
      checkAllIfs++
    }
     if (document.getElementById("estampa-primaria") != null) {
      document.getElementById("estampa-primaria").setAttribute("fill", coresCamisa.estampaCamisa[0])
      checkAllIfs++
    }
     if (document.getElementById("estampa-secundaria") != null) {
      document.getElementById("estampa-secundaria").setAttribute("fill", coresCamisa.estampaCamisa[1])
      checkAllIfs++
    }
     if (document.getElementById("estampa-terciaria") != null) {
      document.getElementById("estampa-terciaria").setAttribute("fill", coresCamisa.estampaCamisa[2])
      checkAllIfs++
    }
     if (document.getElementById("estampa-quaternaria") != null) {
      document.getElementById("estampa-quaternaria").setAttribute("fill", coresCamisa.estampaCamisa[3])
      checkAllIfs++
    }
     if (document.getElementById("estampa-quinaria") != null) {
      document.getElementById("estampa-quinaria").setAttribute("fill", coresCamisa.estampaCamisa[4])
      checkAllIfs++
    }
     if (document.getElementById("detalhe-punho") != null) {
      document.getElementById("detalhe-punho").setAttribute("fill", coresCamisa.detalheCamisa[0])
      checkAllIfs++
    }
     if (document.getElementById("detalhe-lateral") != null) {
      document.getElementById("detalhe-lateral").setAttribute("fill", coresCamisa.detalheCamisa[1])
      checkAllIfs++
    }
    if (checkAllIfs >= 3) {
      resolve()
    }else{
      reject("Erro ao manter as cores da frente da camisa")
    }
  })
}


function manterCorCamisaCostas(){

  if (document.getElementById("c-gola-primaria") != null) {
    document.getElementById("c-gola-primaria").setAttribute("fill", coresCamisa.gola[0])

  }
  //  if (coresCamisa.gola[1] != null) {
  //   document.getElementById("c-gola-secundaria").setAttribute("fill", coresCamisa.gola[1])
  // }
  //  if (coresCamisa.gola[2] != null) {
  //   document.getElementById("c-gola-terciaria").setAttribute("fill", coresCamisa.gola[2])
  //
  // }
   if (document.getElementById("c-estampa-primaria")!= null) {
    document.getElementById("c-estampa-primaria").setAttribute("fill", coresCamisa.estampaCamisa[0])

  }
   if (document.getElementById("c-estampa-secundaria") != null) {
    document.getElementById("c-estampa-secundaria").setAttribute("fill", coresCamisa.estampaCamisa[1])

  }
   if (document.getElementById("c-estampa-terciaria") != null) {
    document.getElementById("c-estampa-terciaria").setAttribute("fill", coresCamisa.estampaCamisa[2])

  }
   if (document.getElementById("c-estampa-quaternaria") != null) {
    document.getElementById("c-estampa-quaternaria").setAttribute("fill", coresCamisa.estampaCamisa[3])

  }
   if (document.getElementById("c-estampa-quinaria") != null) {
    document.getElementById("c-estampa-quinaria").setAttribute("fill", coresCamisa.estampaCamisa[4])

  }
   if (document.getElementById("c-detalhe-punho") != null) {
    document.getElementById("c-detalhe-punho").setAttribute("fill", coresCamisa.detalheCamisa[0])

  }
   if (document.getElementById("c-detalhe-lateral") != null) {
    document.getElementById("c-detalhe-lateral").setAttribute("fill", coresCamisa.detalheCamisa[1])

  }
}

manterCorCamisaFrente().then(manterCorCamisaCostas());
}
function manterCorPacotesCalcao(){

  function manterCorCalcaoFrente(){

    if (document.getElementById("calcao-primaria") != null) {
     document.getElementById("calcao-primaria").setAttribute("fill", coresCalcao.estampaCalcao[0])

   }
    if (document.getElementById("calcao-secundaria") != null) {
     document.getElementById("calcao-secundaria").setAttribute("fill", coresCalcao.estampaCalcao[1])

   }
    if (document.getElementById("calcao-terciaria") != null) {
     document.getElementById("calcao-terciaria").setAttribute("fill", coresCalcao.estampaCalcao[2])

   }
    if (document.getElementById("calcao-detalhe-lateral") != null) {
     document.getElementById("calcao-detalhe-lateral").setAttribute("fill", coresCalcao.detalheCalcao[0])

   }
}

  function manterCorCalcaoCostas(){

     if (document.getElementById("c-calcao-primaria") != null) {
      document.getElementById("c-calcao-primaria").setAttribute("fill", coresCalcao.estampaCalcao[0])
    }
     if (document.getElementById("c-calcao-secundaria") != null) {
      document.getElementById("c-calcao-secundaria").setAttribute("fill", coresCalcao.estampaCalcao[1])
    }
     if (document.getElementById("c-calcao-terciaria") != null) {
      document.getElementById("c-calcao-terciaria").setAttribute("fill", coresCalcao.estampaCalcao[2])
    }
     if (document.getElementById("c-calcao-detalhe-lateral") != null) {
      document.getElementById("c-calcao-detalhe-lateral").setAttribute("fill", coresCalcao.detalheCalcao[0])
    }
  }
manterCorCalcaoCostas()

  setTimeout(function(){
      manterCorCalcaoFrente()
  },200)

}

function abrirMenu(event){

  var testarMenu = event.children;

  if(testarMenu[0].classList.contains("active-menu") == false){

    testarMenu[0].classList.add("active-menu");
    if (testarMenu[0].classList.contains("menu-cores")) {
      parteCorpoStr = event.children[0].id;
      parteCorpo = document.getElementById(parteCorpoStr.slice(6));
      cparteCorpo = document.getElementById("c-" + parteCorpoStr.slice(6));
       girarDeFrente();


    }else if (testarMenu[0].classList.contains("menu-geral-nome")) {
      girarDeCostas()
    }
     if(testarMenu[0].parentElement.classList.contains("caixa-cor-nome") || testarMenu[0].parentElement.classList.contains("caixa-cor-numero")){
      girarDeCostas()
    }else if(testarMenu[0].classList.contains("menu-geral-modelos")){
      carregarModelosMenu("camisa");
    }
  }

}


function girarDeCostas() {

  var imagensUpload = document.getElementsByClassName("div-movel");
  for (var i = 0; i < imagensUpload.length; i++) {
    if (imagensUpload[i].classList.contains("costas-div")) {
      imagensUpload[i].classList.add("active-image");
    }else{
      imagensUpload[i].classList.remove("active-image");
    }
  }

  camisaFrentePng.classList.remove("active");
  calcaoFrentePng.classList.remove("active");
  camisaFrenteSvg.classList.remove("active");
  calcaoFrenteSvg.classList.remove("active");
  meiaFrente.classList.remove("active")
  svgMeiaFrente.classList.remove("active")
  camisaCostasPng.classList.add("active");
  calcaoCostasPng.classList.add("active");
  camisaCostasSvg.classList.add("active");
  calcaoCostasSvg.classList.add("active");
  svgMeiaCostas.classList.add("active");
  meiaCostas.classList.add("active");
  textoNome.classList.add("active");
  textoNumero.classList.add("active");
  for (var i = 0; i < escudosManequim.length; i++) {
    escudosManequim[i].classList.remove("active");
  }
  for (var i = 0; i < oceanicaManequim.length; i++) {
    oceanicaManequim[i].classList.remove("active");
  }
  testarPosManequim = "costas-div";
}
function girarDeFrente(){

  var imagensUpload = document.getElementsByClassName("div-movel");
  for (var i = 0; i < imagensUpload.length; i++) {
    if (imagensUpload[i].classList.contains("frente")) {
      imagensUpload[i].classList.add("active-image");
    }else{
      imagensUpload[i].classList.remove("active-image");
    }

  }

  calcaoFrentePng.classList.add("active");
  camisaFrentePng.classList.add("active");
  camisaFrenteSvg.classList.add("active");
  calcaoFrenteSvg.classList.add("active");
  meiaFrente.classList.add("active");
  svgMeiaFrente.classList.add("active");
  camisaCostasPng.classList.remove("active");
  calcaoCostasPng.classList.remove("active");
  camisaCostasSvg.classList.remove("active");
  calcaoCostasSvg.classList.remove("active");
  meiaCostas.classList.remove("active");
  svgMeiaCostas.classList.remove("active");
  textoNome.classList.remove("active");
  textoNumero.classList.remove("active");
  retornarEscudo()
  testarPosManequim = "frente";
}

// ****** EVENT LISTENERS ******

// botao girar
function iconeGirar(){
  if (testarPosManequim == "frente") {
    girarDeCostas();
  }else {
     girarDeFrente();
  }
};

//escudo
function posicionarEscudo(escudoPosicao, oceanicaPosicao){

    if (escudoPosicao === "peito-direito" && escudoPeitoDireito.classList.contains("active") == false) {

      escudoPeitoDireito.classList.add("active");
      escudoPeitoMeioAb.classList.remove("active");
      escudoPeitoMeio.classList.remove("active");
      posEscudoPeito = "peito-direito";

    }else if (escudoPosicao === "peito-meio" && escudoPeitoMeio.classList.contains("active") == false) {

      escudoPeitoDireito.classList.remove("active");
      escudoPeitoMeioAb.classList.remove("active");
      escudoPeitoMeio.classList.add("active");
      posEscudoPeito = "peito-meio";

    }else if (escudoPosicao === "perna-direita" && escudoPernaDireita.classList.contains("active") == false) {

      escudoPernaDireita.classList.add("active");
      escudoPernaEsquerda.classList.remove("active");
      posEscudoPerna = "perna-direita";

    }else if (escudoPosicao === "perna-esquerda" && escudoPernaEsquerda.classList.contains("active") == false) {

      escudoPernaDireita.classList.remove("active");
      escudoPernaEsquerda.classList.add("active");
      posEscudoPerna = "perna-esquerda";
    }else if (escudoPosicao === "peito-meio-abdomen" && escudoPeitoMeioAb.classList.contains("active") == false) {
      escudoPeitoDireito.classList.remove("active");
      escudoPeitoMeio.classList.remove("active");
      escudoPeitoMeioAb.classList.add("active");
      posEscudoPeito = "peito-meio-ab";
    }


    if (oceanicaPosicao === "peito" && oceanicaPeito.classList.contains("active") == false ) {
      oceanicaPeito.classList.add("active");
      oceanicaOmbro.classList.remove("active");
      posOceanicaTorso = "peito";
    }else if(oceanicaPosicao === "ombro" && oceanicaOmbro.classList.contains("active") == false ){
      oceanicaOmbro.classList.add("active");
      oceanicaPeito.classList.remove("active");
      posOceanicaTorso = "ombro";
    }else if(oceanicaPosicao === "perna-direita" && oceanicaPernaDireita.classList.contains("active") == false){
      oceanicaPernaDireita.classList.add("active");
      oceanicaPernaEsquerda.classList.remove("active");
      posOceanicaPerna = "direita"
    }else if(oceanicaPosicao === "perna-esquerda" && oceanicaPernaEsquerda.classList.contains("active") == false){
      oceanicaPernaEsquerda.classList.add("active");
      oceanicaPernaDireita.classList.remove("active");
      posOceanicaPerna = "esquerda"
    }
    girarDeFrente()
  }

  function retornarEscudo(){
      if (posEscudoPeito === "peito-direito") {
          escudoPeitoDireito.classList.add("active");
      }else if (posEscudoPeito == "peito-meio") {
        escudoPeitoMeio.classList.add("active");
      }else {
        escudoPeitoMeioAb.classList.add("active")
      }

      if (posEscudoPerna === "perna-direita") {
          escudoPernaDireita.classList.add("active");
      }else{
        escudoPernaEsquerda.classList.add("active");
      }
      if (posOceanicaTorso == "peito") {
        oceanicaPeito.classList.add("active")
      }else{
        oceanicaOmbro.classList.add("active")
      }
      if (posOceanicaPerna == "direita") {
        oceanicaPernaDireita.classList.add("active")
      }else{
        oceanicaPernaEsquerda.classList.add("active")
      }
    }


function adicionarAoCarrinho(){
    var id = 1;
    var nome = "produto";
    var quantidade = document.getElementById("carrinho-quantidade").value;
    var preco = 10.00
    var imagem = "images/" + tirarPrint(document.querySelector("#manequim"));
    var produto_carrinho =  new Array(nome, quantidade, imagem, preco);
    var JSONProduto_carrinho = JSON.stringify(produto_carrinho);
    const key = id;
    const value = JSONProduto_carrinho;

     if(key && value){
        localStorage.setItem(key,value);
      }
    }


    var canvas = document.getElementById('canvas');
    canvas.width = canvas.scrollWidth;
    canvas.height = canvas.scrollHeight;
    var ctx = canvas.getContext('2d');
    ctx.fillStyle = 'white';
    ctx.fillRect(0, 0, canvas.width, canvas.height);
    window.scrollTo(0,0)
function tirarPrint(){
girarDeFrente()
gerarImagemFrente()
setTimeout(function(){
    gerarImagemCostas()
},300)

setTimeout(function(){
  baixarImagemSimulacao()
},700)

}
function gerarImagemCostas(){

  desenharSvgs("camisa-costas-svg", 247, 0, 246.4, 457)
  desenharSvgs("calcao-costas-svg", 247, 0, 246.4, 457)
  desenharSvgs("svg-meia-costas", 247, 460, 246.4, 269.31)

  setTimeout(function(){
    desenharPngs("camisa-costas-png", 247, 0, 246.4, 457)
    desenharPngs("calcao-costas-png", 247, 0, 246.4, 457)
    desenharPngs("meia-costas", 247, 460, 246.4, 276.31)
    desenharImpressosCostas()
  },200)
}
function gerarImagemFrente(){

desenharSvgs("camisa-svg", 0, 0, 246.4, 457)
desenharSvgs("calcao-svg", 0, 0, 246.4, 457)
desenharSvgs("svg-meia-frente", 0, 460, 246.4, 269.31)

setTimeout(function(){
  desenharPngs("camisa-frente-png", 0, 0, 246.4, 457)
  desenharPngs("calcao-frente-png", 0, 0, 246.4, 457)
  desenharPngs("meia-frente", 0, 460, 246.4, 269.31)
  desenharImpressosFrente()
},200)
}
function desenharSvgs(elemento, x, y,width, height){
  var svgElement = document.getElementById(elemento).children;
  svgElement = svgElement[0]
  let clonedSvgElement = svgElement.cloneNode(true);
  let outerHTML = clonedSvgElement.outerHTML;
  let blob = new Blob([outerHTML],{type:'image/svg+xml;charset=utf-8'});
  let URL = window.URL || window.webkitURL || window;
  let blobURL = URL.createObjectURL(blob);
  let imageSVGCamisa = new Image();
  imageSVGCamisa.onload = () => {
     ctx.drawImage(imageSVGCamisa, x, y, width, height );
  };
  imageSVGCamisa.src = blobURL;
}
function desenharPngs(elemento,x,y,width, height){
  var endPngSimulador = document.getElementById(elemento).children[0].src;

  var image = new Image();
  image.onload = function(){
    ctx.drawImage(image,x,y, width, height);
  }
  image.src = endPngSimulador

}
// desenhar impressos como esquido, logo da oceanica e patrocinios
function desenharImpressosFrente(){
  if(escudoPeitoDireito.classList.contains("active")){
    desenharEscudosELogos("escudo-peito-direito",153, 88, 26, 33.94,0)
  }else if (escudoPeitoMeio.classList.contains("active")) {
    desenharEscudosELogos("escudo-peito-meio",109, 83, 26, 33.94,0)
  }else if(escudoPeitoMeioAb.classList.contains("active")){
    desenharEscudosELogos("escudo-peito-meio",109, 147, 26, 33.94,0)
  }

  if (escudoPernaDireita.classList.contains("active")) {
    desenharEscudosELogos("escudo-perna-direita",124, 420, 26, 33.94,-5)
  }else if (escudoPernaEsquerda.classList.contains("active")) {
    desenharEscudosELogos("escudo-perna-esquerda",92, 403, 26, 33.94,5)
  }

  if (oceanicaPeito.classList.contains("active")) {
    desenharEscudosELogos("oceanica-peito",69, 95, 28, 14.2,0)
  }else if (oceanicaOmbro.classList.contains("active")) {
    desenharEscudosELogos("oceanica-ombro",32, 55, 26, 13,-20)
  }

  if (oceanicaPernaDireita.classList.contains("active")) {
    desenharEscudosELogos("oceanica-perna-direita",122, 409, 26, 13,-5)
    desenharNomeNumerosFrente(numeroFrente[0],122, 455,-5)
  }else if (oceanicaPernaEsquerda.classList.contains("active")) {
    desenharEscudosELogos("oceanica-perna-esquerda",92, 378, 26, 13,5)
    desenharNomeNumerosFrente(numeroFrente[0],90, 428,5)
  }

  desenharEscudosELogos("oceanica-meia-direita",118, 585, 25, 13.0,-6)
  desenharEscudosELogos("oceanica-meia-esquerda",100, 565, 25, 13.0,6)

  var divMovelPrint = document.getElementsByClassName('div-movel')


  if(divMovelPrint != null){
    for (var i = 0; i < divMovelPrint.length; i++) {
      if (divMovelPrint[i].classList.contains("frente")) {
        var computedDiv = getComputedStyle(divMovelPrint[i])
        desenharPatrocinios(divMovelPrint[i],parseFloat(computedDiv.left),parseFloat(computedDiv.top) , parseFloat(computedDiv.width),parseFloat(computedDiv.height))
      }
    }
  }
}
function desenharImpressosCostas(){
  desenharNomeNumerosCostas(document.getElementById("texto-nome"),246, 80,0)
  desenharNomeNumerosCostas(document.getElementById("texto-numero"),246, 190,0)
  var divMovelPrint = document.getElementsByClassName('div-movel')
  if(divMovelPrint != null){
    for (var i = 0; i < divMovelPrint.length; i++) {
      if (divMovelPrint[i].classList.contains("costas-div")) {
        var computedDiv = getComputedStyle(divMovelPrint[i])
        desenharPatrocinios(divMovelPrint[i],parseFloat(computedDiv.left)+246,parseFloat(computedDiv.top) , parseFloat(computedDiv.width),parseFloat(computedDiv.height))
      }
    }
  }
}
// desenhar os numeros da perna que estão na div da logo oceanica da perna
function desenharNomeNumerosFrente(elemento,x,y,degrees){
  ctx.save();
  ctx.rotate(degrees*Math.PI/180);
  var estiloNumero = getComputedStyle(elemento)
  ctx.font= estiloNumero.fontSize + " "+ estiloNumero.fontFamily;
  ctx.fillStyle = estiloNumero.color;
  ctx.textAlign = "left";
  ctx.fillText(elemento.innerText, x, y);
  ctx.restore();
}
function desenharNomeNumerosCostas(elemento,x,y,degrees){
  ctx.save();
  ctx.rotate(degrees*Math.PI/180);
  var estiloNumero = getComputedStyle(elemento)
  ctx.font= estiloNumero.fontSize + " "+ estiloNumero.fontFamily;
  ctx.fillStyle = estiloNumero.color;
  // ctx.textAlign = "left";
  var espacamentoCentralizar = (246 - parseFloat(estiloNumero.width))/2;

  ctx.fillText(elemento.innerText, x+espacamentoCentralizar, y);
  ctx.restore();
}
function desenharEscudosELogos(elemento,x,y,width,height,degrees){
  let completed = false
  var svgElement = document.getElementById(elemento).children;
  svgElement = svgElement[0]
  let clonedSvgElement = svgElement.cloneNode(true);
  let outerHTML = clonedSvgElement.outerHTML;
  let blob = new Blob([outerHTML],{type:'image/svg+xml;charset=utf-8'});
  let URL = window.URL || window.webkitURL || window;
  let blobURL = URL.createObjectURL(blob);
  let imageSVGCamisa = new Image();
  imageSVGCamisa.onload = () => {
     ctx.save();
     ctx.rotate(degrees*Math.PI/180);
     ctx.drawImage(imageSVGCamisa,x,y,width,height );
     ctx.restore();
  };
  imageSVGCamisa.src = blobURL;
}
function desenharPatrocinios(elemento,x,y,width,height){
  var endPngSimulador = elemento.children[0].src;
  console.log(x)
  console.log(y)
  console.log(width)
  console.log(height)
  var image = new Image();
  image.onload = function(){
    ctx.drawImage(image,x,y, width, height);
  }
  console.log(endPngSimulador)
  image.src = endPngSimulador
}
function baixarImagemSimulacao(){
  setTimeout(function(){
    var link = document.createElement('a');
    link.download = 'simulacao.jpg';
    link.href = canvas.toDataURL("image/jpg",0.9)
    link.click();
  },200)
}

window.addEventListener('mouseup', function(event){
var menuPraFechar = [document.getElementById('menu-geral-cores'),
                    document.getElementById('menu-geral-nome'),
                    document.getElementById('menu-geral-escudo'),
                    document.getElementById('menu-geral-modelos'),
                    document.getElementById('menu-geral-emblema'),
                    document.getElementById('menu-geral-pacotes'),
                    document.getElementById('cores-gola-primaria'),
                    document.getElementById('cores-gola-secundaria'),
                    document.getElementById('cores-gola-terciaria'),
                    document.getElementById('cores-detalhe-punho'),
                    document.getElementById('cores-detalhe-lateral'),
                    document.getElementById('cores-impressao-oceanica'),
                    document.getElementById('cores-impressao-numero'),
                    document.getElementById('cores-impressao-nome'),
                    document.getElementById('cores-impressao-escudo'),
                    document.getElementById('cores-estampa-primaria'),
                    document.getElementById('cores-estampa-secundaria'),
                    document.getElementById('cores-estampa-terciaria'),
                    document.getElementById('cores-estampa-quaternaria'),
                    document.getElementById('cores-calcao-primaria'),
                    document.getElementById('cores-calcao-secundaria'),
                    document.getElementById('cores-calcao-terciaria'),
                    document.getElementById('cores-calcao-quaternaria'),
                    document.getElementById('cores-calcao-impressao-numero'),
                    document.getElementById('cores-calcao-impressao-oceanica'),
                    document.getElementById('cores-calcao-detalhe-lateral'),
                    document.getElementById('cores-numero'),
                    document.getElementById('cores-nome'),
                    document.getElementById('cores-meiao'),
                    document.getElementById('camisetas'),
                    document.getElementById('botoes-simulador-direita'),
                    document.getElementById('cores-meiao-oceanica'),
                    document.getElementById('menu-geral-finalizar-compra')
                  ];

            for (var i = 0; i < menuPraFechar.length; i++) {
              if (event.target != menuPraFechar[i] && event.target.id != "camisetas") {
                menuPraFechar[i].classList.remove("active-menu")

                if(menuPraFechar[i].id == "botoes-simulador-direita"){
                  menuPraFechar[i].removeAttribute("style")
                  document.getElementById('botoes-simulador').removeAttribute('style')
                  document.getElementById('mais-produtos-mensagem').parentElement.removeAttribute('style')
                }else if (menuPraFechar[i].id == "menu-geral-finalizar-compra") {
                  prepararMenu = true;
                }
              }
            }


});

// escrever nome na blusa

var nomeInput = document.getElementById("input-nome")
nomeInput.addEventListener('keydown', function(event) {

  setTimeout(function(){
      var textoInput = nomeInput.value;
      nomeInput.value = nomeInput.value.toUpperCase()
      document.getElementById("texto-nome").innerText = textoInput;
    }, 1);
});
var numeroInput = document.getElementById("input-numero")
numeroInput.addEventListener('keydown', function(event) {
  setTimeout(function(){
      var textoInputnumero = numeroInput.value;
      if (isNaN(textoInputnumero)) {
        textoInputnumero= ''
        numeroInput.value = ""
      }
      document.getElementById("texto-numero").innerText = textoInputnumero;
      numeroFrente[0].innerText = textoInputnumero;
      numeroFrente[1].innerText = textoInputnumero;
    }, 1);
});

// mudar fonte




function passarSlide(side){
  let proximoSlide;
  let opcoesFonte = document.getElementsByClassName("fonte-op")
  let slideAtual = document.getElementsByClassName("active-font")[0]
  let slideAtualId = slideAtual.id
  slideAtualId = slideAtualId.substring((slideAtualId.indexOf("-"))+1,slideAtualId.length)
  if(side == "right"){
      proximoSlide = document.getElementById("slide-" + (++slideAtualId))
      if (proximoSlide == null) {
        proximoSlide = document.getElementById("slide-1")
      }
  }else{
    proximoSlide = document.getElementById("slide-" + (--slideAtualId))
    if (proximoSlide == null) {
      proximoSlide = document.getElementsByClassName("fonte-op")
      proximoSlide = proximoSlide[--proximoSlide.length]
    }
  }

  proximoSlide.classList.add("active-font");
  slideAtual.classList.remove("active-font")

// aplicar fonte escolhida no manequim
  var fonte = document.getElementsByClassName("active-font")[0]
  fonte = pegarFonte(fonte.children[0], "font-family")
  if (fonte.includes(",")) {
      fonte = fonte.substring(0,fonte.indexOf(","))
  }
  textoNome.style.fontFamily = fonte;
  textoNumero.style.fontFamily = fonte;
  numeroFrente[0].style.fontFamily = fonte;
  numeroFrente[1].style.fontFamily = fonte;

}

// funcao para pegar valor da propriedade fontFamily
function pegarFonte( element, property ) {
    return window.getComputedStyle( element, null ).getPropertyValue( property );
}


// upload de imagem com redimensionamento e reposicionamento
      let contadorId = 0;
      let uploadContainer = document.getElementById("image-upload")
      let inpFile = document.getElementById("inpFile");
      let previewImage;


var files = []
 		inpFile.addEventListener("change", function(){
      contadorId++

 			if (this.files.length > 0) {
 				const reader = new FileReader();

        reader.readAsDataURL(this.files[0]);

        reader.addEventListener("load", function(){

    var divMovel = document.createElement('div');
		var limite = document.getElementById('manequimCompleto');
		divMovel.classList.add("div-movel");
		divMovel.innerHTML = `<img src="${this.result}" class="image-preview--image">
		<div onclick="fecharImg(this)"  class="resizer ne ">
    					<img src="images/simulador/garbage.png" alt="">
    				</div>`
		limite.appendChild(divMovel)
    divMovel.classList.add("active-image")
    if(camisaFrentePng.classList.contains('active')){
      divMovel.classList.add("frente")

    }else{
      divMovel.classList.add("costas-div")
    }
		moverDiv()
		function moverDiv(){
		$(".div-movel").draggable({cursor:"move",containment:"parent"})
		$(".div-movel").resizable({aspectRatio: true, handles: "nw,sw,se", autoHide: true});
  }

})
}
})

    function fecharImg(event){
      var elementoFechar = event.parentElement
      elementoFechar.remove()
    }

    //ocultar camisa e calcao

    function ocultarCamisa(){
      var olhoCamisa = document.getElementById('olhoCamisa');
      var camisa = document.getElementsByClassName("camisa");
      if (modeloCompleto.camisaOcultado == false) {

        olhoCamisa.src = 'images/simulador/interface-nova/eye-open.png';

        for (var i = 0; i < camisa.length; i++) {
          camisa[i].style.opacity = 0.6;
        }
        modeloCompleto.camisaOcultado = true;

      }else{
        olhoCamisa.src = 'images/simulador/interface-nova/eye-closed.png';
        for (var i = 0; i < camisa.length; i++) {
          camisa[i].style.opacity = 1;
        }
        modeloCompleto.camisaOcultado = false;

      }
    }

    function ocultarCalcao(){
      var olhoCalcao = document.getElementById('olhoCalcao');
      var calcao =  document.getElementsByClassName("calcao");
      if (modeloCompleto.calcaoOcultado == false) {

        olhoCalcao.src = 'images/simulador/interface-nova/eye-open.png';

        for (var i = 0; i < calcao.length; i++) {
          calcao[i].style.opacity = 0.6;
        }
        modeloCompleto.calcaoOcultado = true;

      }else{
        olhoCalcao.src = 'images/simulador/interface-nova/eye-closed.png';
        for (var i = 0; i < calcao.length; i++) {
          calcao[i].style.opacity = 1;
        }
        modeloCompleto.calcaoOcultado = false;

      }
    }
    function ocultarMeia(){
      var olhoMeia = document.getElementById('olhoMeia');
      var meia =  document.getElementsByClassName("meia");
      if (modeloCompleto.meiaOcultado == false) {

        olhoMeia.src = 'images/simulador/interface-nova/eye-open.png';

        for (var i = 0; i < meia.length; i++) {
          meia[i].style.opacity = 0.6;
        }
        modeloCompleto.meiaOcultado = true;
      }else{
        olhoMeia.src = 'images/simulador/interface-nova/eye-closed.png';
        for (var i = 0; i < meia.length; i++) {
          meia[i].style.opacity = 1;
        }
        modeloCompleto.meiaOcultado = false;
      }
    }
    // menu modelos (estampas)
    function mudarMenuModelos(peca){
      let camisa = document.getElementById('camisetas')
      let calcao = document.getElementById('calcoes')

      if (peca == "camisa") {

        camisa.classList.add("active");
        calcao.classList.remove("active")
        carregarModelosMenu();
      }else{
        parteModelo = 'calcao';
        carregarModelosMenu()
        calcao.classList.add("active");
        camisa.classList.remove("active")
      }
    }


    // carregar svg dinamicamente

    function carregarSVGCamisa(pathSVGCamisaFrente, elementoManequim){
      return new Promise((resolve, reject)=>{
        var xhr = new XMLHttpRequest();

  			xhr.open("GET", pathSVGCamisaFrente,true);

  			xhr.onload = function(){
  				if (this.status == 200) {
  					document.getElementById(elementoManequim).innerHTML = this.responseText
            resolve()
  				}else{
            reject("Erro ao carregar SVG")
          }
  			}
  			xhr.send();
      })


		}


    function carregarSVGCalcao(pathSVGCalcaoFrente, elementoManequim){

      var xhr = new XMLHttpRequest();

			xhr.open("GET",  pathSVGCalcaoFrente,true);

			xhr.onload = function(){
				if (this.status == 200) {
					document.getElementById(elementoManequim).innerHTML = this.responseText
				}
			}
			xhr.send();
    }

    function requestSVGNovoCamisa(idProduto){
      setTimeout(function(){
          document.getElementById('menu-geral-modelos').classList.remove('active-menu')
      },1)


      var xhr = new XMLHttpRequest();

			xhr.open("GET","php/carregarUmModelo.php?id="+ idProduto + "&parteModelo=camisa",true);

			xhr.onload = function(){
				if (this.status == 200) {

					 var camisaCarregada = JSON.parse(this.responseText);
           carregarSVGCamisa(camisaCarregada[0], "camisa-svg");
           carregarSVGCamisa(camisaCarregada[1], "camisa-costas-svg");
           coresCamisa = JSON.parse(camisaCarregada[2]);

           modeloCompleto.nomeCamisa = camisaCarregada[3]
           mudarTextoModelo(camisaCarregada[3], "camisa")
           setTimeout(function(){
             disableBtnsCamisa()

           },500)
           requestSVGNovoCalcao(idProduto);

				}
			}
			xhr.send();

    }
    function requestSVGNovoCalcao(idProduto){

      var xhr = new XMLHttpRequest();

			xhr.open("GET","php/carregarUmModelo.php?id="+ idProduto + "&parteModelo=calcao",true);

			xhr.onload = function(){
				if (this.status == 200) {
          var calcaoCarregado = JSON.parse(this.responseText);
          carregarSVGCamisa(calcaoCarregado[0], "calcao-svg");
          carregarSVGCamisa(calcaoCarregado[1], "calcao-costas-svg");
          coresCalcao = JSON.parse(calcaoCarregado[2]);
          modeloCompleto.nomeCalcao = calcaoCarregado[3]
          mudarTextoModelo(calcaoCarregado[3], "calcao")
          setTimeout(function(){
            disableBtnsCalcao()
            mudaCorMeia()
            girarDeFrente()
          },700)
				}
			}
			xhr.send();
    }
    function carregarModelosMenu(){

      mudarParaCorCadastrada = true;
      var clubeMenu = document.getElementsByClassName('clube-menu');
      var tipoDeEstampaMenu = document.getElementsByClassName('tipo-de-estampa');
      var tipoDeEstampaSelecionada = [];
      var clubeSelecionado = [];
      for (var i = 0; i < tipoDeEstampaMenu.length; i++) {
        if(tipoDeEstampaMenu[i].checked == true){
          tipoDeEstampaSelecionada.push(tipoDeEstampaMenu[i].value);
        }
      }

      for (var i = 0; i < clubeMenu.length; i++) {
        if(clubeMenu[i].checked == true){
            clubeSelecionado.push(clubeMenu[i].value);
        }
      }
      if (clubeSelecionado.length == 0) {
        clubeSelecionado = "ALL"
      }else{
        clubeSelecionado = JSON.stringify(clubeSelecionado)
      }
      if (tipoDeEstampaSelecionada.length == 0) {

        tipoDeEstampaSelecionada = "ALL";
      }else{

        tipoDeEstampaSelecionada = JSON.stringify(tipoDeEstampaSelecionada)
      }
      var modelosDisponiveis;
      if (parteModelo == "camisa") {
        modelosDisponiveis = document.getElementById("camisetas");
      }else{
        modelosDisponiveis = document.getElementById("calcoes");
      }


      var xhr = new XMLHttpRequest();

			xhr.open("GET","php/carregarModelos.php?parteCorpo="+ parteModelo + "&pacote="+ modeloCompleto.pacoteProduto+"&clube=" + clubeSelecionado + "&tipoEstampa="+ tipoDeEstampaSelecionada,true);

			xhr.onload = function(){
				if (this.status == 200) {
				   modelosDisponiveis.innerHTML = this.responseText

				}
			}
			xhr.send();
    }




    function escolherPacote(pacoteNovo){

      if (pacoteNovo == "prata") {
        document.getElementById("camisa-frente-png").children[0].src = "images/simulador/prata-frente2.png"
        document.getElementById("camisa-costas-png").children[0].src = "images/simulador/camisa-costas.png"
        document.getElementById("texto-modelo-meiao").innerText = "Treino"


      }else if (pacoteNovo == "libertadores") {
        document.getElementById("camisa-frente-png").children[0].src = "images/simulador/libertadores-frente2.png"
        document.getElementById("camisa-costas-png").children[0].src = "images/simulador/libertadores-costas.png"
        document.getElementById("texto-modelo-meiao").innerText = "Jogo"

      }else if (pacoteNovo == "profissa20") {
        document.getElementById("camisa-frente-png").children[0].src = "images/simulador/camisa2.png"
        document.getElementById("camisa-costas-png").children[0].src = "images/simulador/profissa20-costas.png"
        document.getElementById("texto-modelo-meiao").innerText = "Jogo"

      }else if (pacoteNovo == "african") {
        document.getElementById("camisa-frente-png").children[0].src = "images/simulador/african-frente2.png"
        document.getElementById("camisa-costas-png").children[0].src = "images/simulador/camisa-costas.png"
        document.getElementById("texto-modelo-meiao").innerText = "Jogo"

      }else if(pacoteNovo == "bronze"){
        document.getElementById("camisa-frente-png").children[0].src = "images/simulador/camisa2.png"
        document.getElementById("camisa-costas-png").children[0].src = "images/simulador/camisa-costas.png"
        document.getElementById("texto-modelo-meiao").innerText = "Treino"

      }else {
        document.getElementById("camisa-frente-png").children[0].src = "images/simulador/camisa2.png"
        document.getElementById("camisa-costas-png").children[0].src = "images/simulador/camisa-costas.png"
        document.getElementById("texto-modelo-meiao").innerText = "Jogo"

      }
      //pacote atual é a variavel utilizada no request da função do menu de modelos
      modeloCompleto.pacoteProduto = pacoteNovo
      setTimeout(function(){
        var menuGeralPacotes = document.getElementById("menu-geral-pacotes");

        menuGeralPacotes.classList.remove("active-menu")

      },300)

      var xhr = new XMLHttpRequest();

      console.log(modeloCompleto.pacoteProduto)
			xhr.open("GET","php/trocarPacote.php?pacote="+ modeloCompleto.pacoteProduto + "&nomeProduto="+modeloCompleto.nomeCamisa + "&parteCorpo=camisa",true);

			xhr.onload = function(){
				if (this.status == 200) {


             let resposta = this.responseText.replace(/\\/g, '');


            resposta = JSON.parse(resposta)

            prepararJSONvelhoPacote("camisa").then(prepararJSONnovoPacote(resposta, "camisa"))

           mudarTextoModeloPacote(modeloCompleto.pacoteProduto)

             escolherPacoteCalcao()
             carregarPrecoUmModelo(pacoteNovo)

				}
			}
			xhr.send();
function escolherPacoteCalcao(){
      var xhr2 =  new XMLHttpRequest();
      xhr2.open("GET","php/trocarPacote.php?pacote="+ modeloCompleto.pacoteProduto + "&nomeProduto="+modeloCompleto.nomeCalcao + "&parteCorpo=calcao",true);

			xhr2.onload = function(){
				if (this.status == 200) {
          let resposta = JSON.parse(this.responseText);

           prepararJSONvelhoPacote("calcao").then(prepararJSONnovoPacote(resposta, "calcao"))

				}
			}
			xhr2.send();
      }
    }

    function prepararJSONvelhoPacote(parteCorpo){
      return new Promise((resolve, reject) => {

        let cont = 0;
        if (parteCorpo == "camisa") {
          if (document.getElementById("gola-primaria") != null) {
            coresCamisa.gola[0] = document.getElementById("gola-primaria").getAttribute("fill");
            cont++
          }else{
            cont++
          }
          if (document.getElementById("gola-secundaria") != null) {
            coresCamisa.gola[1] = document.getElementById("gola-secundaria").getAttribute("fill");
            cont++
          }else{
            cont++
          }
          if (document.getElementById("gola-terciaria") != null) {
            coresCamisa.gola[2] = document.getElementById("gola-terciaria").getAttribute("fill");
            cont++
          }else{
            cont++
          }
          if (document.getElementById("estampa-primaria") != null) {
            coresCamisa.estampaCamisa[0] = document.getElementById("estampa-primaria").getAttribute("fill");
            cont++
          }else{
            cont++
          }
          if (document.getElementById("estampa-secundaria") != null) {
            coresCamisa.estampaCamisa[1] = document.getElementById("estampa-secundaria").getAttribute("fill");
            cont++
          }else{
            cont++
          }
          if (document.getElementById("estampa-terciaria") != null) {
            coresCamisa.estampaCamisa[2] = document.getElementById("estampa-terciaria").getAttribute("fill");
            cont++
          }else{
            cont++
          }
          if (document.getElementById("estampa-quaternaria") != null) {
            coresCamisa.estampaCamisa[3] = document.getElementById("estampa-quaternaria").getAttribute("fill");
            cont++
          }else{
            cont++
          }
          if (document.getElementById("estampa-quinaria") != null) {
            coresCamisa.estampaCamisa[4] = document.getElementById("estampa-quinaria").getAttribute("fill");
            cont++
          }else{
            cont++
          }
          if (document.getElementById("detalhe-punho") != null) {
            coresCamisa.detalheCamisa[0] = document.getElementById("detalhe-punho").getAttribute("fill");
            cont++
          }else{
            cont++
          }
          if (document.getElementById("detalhe-lateral") != null) {
            coresCamisa.detalheCamisa[1] = document.getElementById("detalhe-lateral").getAttribute("fill");
            cont++
          }else{
            cont++
          }
        }else{
          if (document.getElementById("calcao-primaria") != null) {
            coresCalcao.estampaCalcao[0] = document.getElementById("calcao-primaria").getAttribute("fill");
            cont++
          }else{
            cont++
          }
          if (document.getElementById("calcao-secundaria") != null) {
            coresCalcao.estampaCalcao[1] = document.getElementById("calcao-secundaria").getAttribute("fill");
            cont++
          }else{
            cont++
          }
          if (document.getElementById("calcao-terciaria") != null) {
            coresCalcao.estampaCalcao[2] = document.getElementById("calcao-terciaria").getAttribute("fill");
            cont++
          }else{
            cont++
          }
          if (document.getElementById("calcao-detalhe-lateral") != null) {
            coresCalcao.detalheCalcao[0] = document.getElementById("calcao-detalhe-lateral").getAttribute("fill");
            cont++
          }else{
            cont++
          }
        }



if (parteCorpo == "camisa") {
  if(cont>=4){
    resolve();
  }else{
    reject('Erro ao preparar JSON das cores antigas')
  }
}else{
  if(cont>=1){
    resolve();
  }else{
    reject('Erro ao preparar JSON das cores antigas')
  }
}


      })


    }
    function prepararJSONnovoPacote(modeloNovoPacote, parteCorpo){


       // modeloNovoPacote[2] = JSON.parse(modeloNovoPacote[2])

      if (parteCorpo == "camisa") {

        carregarSVGCamisaFrenteAsync(modeloNovoPacote[0],modeloNovoPacote[1],modeloNovoPacote[2])
        async function carregarSVGCamisaFrenteAsync(modeloNovoPacote0,modeloNovoPacote1,modeloNovoPacote2){
          await carregarSVGCamisa(modeloNovoPacote0, "camisa-svg")
          carregarSVGCamisaAsync(modeloNovoPacote1, modeloNovoPacote2)
        }
        async function carregarSVGCamisaAsync(modeloNovoPacote1, modeloNovoPacote2){
          await carregarSVGCamisa(modeloNovoPacote1, "camisa-costas-svg")
          funcoesCoresCamisaRestantes(modeloNovoPacote2)
        }
        async function funcoesCoresCamisaRestantes(modeloNovoPacote){

          await atualizarCoresCamisa(modeloNovoPacote)
          manterCorPacotesCamisa()
          disableBtnsCamisa()

        }


      }else{

        carregarSVGCamisa(modeloNovoPacote[0], "calcao-svg").then(carregarSVGCamisaAsync(modeloNovoPacote[1], modeloNovoPacote[2]))

        async function carregarSVGCamisaAsync(modeloNovoPacote1, modeloNovoPacote2){
          await carregarSVGCamisa(modeloNovoPacote1, "calcao-costas-svg")
          funcoesCoresCalcaoRestantes(modeloNovoPacote2)
        }
        async function funcoesCoresCalcaoRestantes(modeloNovoPacote){
          await atualizarCoresCalcao(modeloNovoPacote)
          manterCorPacotesCalcao()

          disableBtnsCalcao()

        }

      }
    }
    function atualizarCoresCalcao(novasCoresCalcao){

      return new Promise((resolve, reject) => {
        let cont = 0;
          if (novasCoresCalcao.estampaCalcao.length >= coresCalcao.estampaCalcao.length) {
            for (var i = 0; i < coresCalcao.estampaCalcao.length; i++) {
                novasCoresCalcao.estampaCalcao[i] = coresCalcao.estampaCalcao[i];
            }
            coresCalcao.estampaCalcao = novasCoresCalcao.estampaCalcao
            cont++
          }else{

            coresCalcao.estampaCalcao = coresCalcao.estampaCalcao.slice(0, novasCoresCalcao.estampaCalcao.length);

            cont++
          }
          if (novasCoresCalcao.detalheCalcao.length >= coresCalcao.detalheCalcao.length) {
            for (var i = 0; i < coresCalcao.detalheCalcao.length; i++) {
                novasCoresCalcao.detalheCalcao[i] = coresCalcao.detalheCalcao[i];
            }
            coresCalcao.detalheCalcao = novasCoresCalcao.detalheCalcao
            cont++
          }else{
            coresCalcao.detalheCalcao = coresCalcao.detalheCalcao.slice(0, novasCoresCalcao.detalheCalcao.length);

            cont++
          }

          if (cont==2) {
            resolve()

          }else{
            reject("Erro na troca das cores do objeto novo para o antigo");
          }
      })
    }
  function atualizarCoresCamisa(novasCoresCamisa){


    return new Promise((resolve, reject) => {

      let cont = 0;
      if (novasCoresCamisa.estampaCamisa.length >= coresCamisa.estampaCamisa.length) {
        // este é um caso de upgrade do pacote então novas posições serão criadas no objeto atual
        // o novo objeto vai receber os valores do objeto atual, mantendo os valores excedentes inalterados, e então o objeto atual se torna o novo objeto
        for (var i = 0; i < coresCamisa.estampaCamisa.length; i++) {
            novasCoresCamisa.estampaCamisa[i] = coresCamisa.estampaCamisa[i];
        }

        coresCamisa.estampaCamisa = novasCoresCamisa.estampaCamisa
        cont++
      }else{
        // este é um caso de downgrade, os valores do objeto atual são agregadas ao array novo e as que restarem devem ser eliminadas
        coresCamisa.estampaCamisa = coresCamisa.estampaCamisa.slice(0, novasCoresCamisa.estampaCamisa.length);

        cont++
      }

      if (novasCoresCamisa.detalheCamisa.length >= coresCamisa.detalheCamisa.length) {

        for (var i = 0; i < coresCamisa.detalheCamisa.length; i++) {
            novasCoresCamisa.detalheCamisa[i] = coresCamisa.detalheCamisa[i];
        }

        coresCamisa.detalheCamisa = novasCoresCamisa.detalheCamisa

        cont++
      }else{

        coresCamisa.detalheCamisa = coresCamisa.detalheCamisa.slice(0, novasCoresCamisa.detalheCamisa.length);

        cont++
      }
      if (novasCoresCamisa.gola.length >= coresCamisa.gola.length) {

        for (var i = 0; i < coresCamisa.gola.length; i++) {
            novasCoresCamisa.gola[i] = coresCamisa.gola[i];
        }

        coresCamisa.gola = novasCoresCamisa.gola

        cont++
      }else{

        coresCamisa.gola = coresCamisa.gola.slice(0, novasCoresCamisa.gola.length);

        cont++
      }

      if (cont==3) {
        resolve()

      }else{
        reject("Erro na troca das cores do objeto novo para o antigo");
      }

    })

  }
function mudarTextoModeloPacote(pacote){
  let selo = document.getElementById("imagem-selo");
  switch (pacote) {
    case 'bronze':
      selo.src = "images/simulador/selos/selo-bronze.png"
      break;
    case 'prata':
      selo.src = "images/simulador/selos/selo-prata.png"
      break;
    case 'ouro':
      selo.src = "images/simulador/selos/selo-ouro.png"
      break;
    case 'profissa20':
      selo.src = "images/simulador/selos/selo-profissa20.png"
      break;
    case 'libertadores':
      selo.src = "images/simulador/selos/selo-libertadores.png"
      break;
    case 'african':
      selo.src = "images/simulador/selos/selo-african.png"
      break;
    default:

  }
}
function mudarTextoModelo(nomeProduto){
  document.getElementById("texto-modelo-camisa").innerText = nomeProduto
  document.getElementById("texto-modelo-calcao").innerText = nomeProduto

}
// esta função pega a cor do calcao e muda a cor da meia
function mudaCorMeia(){

  var corCalcao = document.getElementById("calcao-primaria").getAttribute("fill")
  var meiao = document.getElementById("meiao")
  var meiaoCostas = document.getElementById("c-meiao")
  meiao.setAttribute("fill",corCalcao)
  meiaoCostas.setAttribute("fill",corCalcao)
}
var prepararMenu = true
function prepararMenuFalse(){
  prepararMenu = false
}
function prepararMenuCompra(objeto){

   setTimeout(function(){
     console.log(prepararMenu);
     if(prepararMenu){
       if(modeloCompleto.camisaOcultado == true && modeloCompleto.calcaoOcultado == true && modeloCompleto.meiaOcultado == false){
         alert("Não é possivel escolher apenas o meião para compra")
       }else {
         if(modeloCompleto.camisaOcultado){
           var inpQuantidadeCamisa = document.getElementById("quantidade-camisa")
           inpQuantidadeCamisa.value = 0;
           inpQuantidadeCamisa.setAttribute("disabled",true)
         }else{
           var inpQuantidadeCamisa = document.getElementById("quantidade-camisa")
           inpQuantidadeCamisa.value = 1;
           inpQuantidadeCamisa.removeAttribute("disabled")
         }
         if(modeloCompleto.calcaoOcultado){
           var inpQuantidadeCalcao = document.getElementById("quantidade-calcao")
           inpQuantidadeCalcao.value = 0;
           inpQuantidadeCalcao.setAttribute("disabled",true)
         }else{
           var inpQuantidadeCalcao = document.getElementById("quantidade-calcao")
           inpQuantidadeCalcao.value = 1;
           inpQuantidadeCalcao.removeAttribute("disabled")
         }
         if(modeloCompleto.meiaOcultado){
           var inpQuantidadeMeiao = document.getElementById("quantidade-meiao")
           inpQuantidadeMeiao.value = 0;
           inpQuantidadeMeiao.setAttribute("disabled",true)
         }else{
           var inpQuantidadeMeiao = document.getElementById("quantidade-meiao")
           inpQuantidadeMeiao.value = 1;
           inpQuantidadeMeiao.removeAttribute("disabled")
         }

       }
     }
   },1)


abrirMenu(objeto)






}
var formFinCompra = document.getElementById("formFinCompra")
 formFinCompra.addEventListener("submit", function(e){
   var submitBtn = document.getElementById("submit-btn")
  e.preventDefault()
  finalizarCompra().then(formFinCompra.submit())

 })
function finalizarCompra(){
return new Promise((resolve, reject) => {
  calcularPrecoFinal()
  var inpPacote = document.getElementById("inp-pacote")
  var inpIdentificador = document.getElementById("inp-identificador")
  var inpValor = document.getElementById("inp-valor")
  var inpModelo = document.getElementById("inp-modelo")
  var id = makeid(20);
  inpPacote.value = modeloCompleto.pacoteProduto;
  inpIdentificador.value = id;
  inpValor.value = modeloCompleto.precoTotal;
  inpModelo.value = modeloCompleto.nomeCamisa;
  if (inpValor.value == modeloCompleto.precoTotal) {
    resolve()
  }else{
    reject("Erro nas funções de finalização de compra")
  }
})
}
function makeid(length) {
   var result           = '';
   var characters       = 'ABCDEFGHIJKLMNPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz123456789';
   var charactersLength = characters.length;
   for ( var i = 0; i < length; i++ ) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
   }
   return result;
}
//esta função transforma uma cor de hexadecimal para CMYK

function converterCor(corHexa){
  switch (corHexa) {
    case "#ffffff":
      return "pj 0/0/0/0";
      break;
    case "#a2cff0":
      return "pj 30/0/0/0";
      break;
    case "#a3bd31":
      return "pj 30/0/100/0";
      break;
    case "#cfee4a":
      return "pj 15/0/100/0";
      break;
    case "#edcc90":
      return "pj 0/18/18/0";
      break;
    case "#fef271":
      return "pj 0/0/60/0";
      break;
    case "#dca3c6":
      return "pj 0/30/0/0";
      break;
    case "#bf083c":
      return "pj 0/100/60/0";
      break;
    case "#ededed":
      return "pj 0/0/0/10";
      break;
    case "#71aad4":
      return "pj 60/0/0/0";
      break;
    case "#70a83b":
      return "pj 55/0/100/0";
      break;
    case "#a2cbbe":
      return "pj 28/0/12/0";
      break;
    case "#877844":
      return "pj 18/37/66/7";
      break;
    case "#ffff00":
      return "pj 0/8/100/0";
      break;
    case "#c45293":
      return "pj 0/80/0/0";
      break;
    case "#bf0811":
      return "pj 0/100/100/0";
      break;
    case "#9e9e9e":
      return "pj 0/0/0/50";
      break;
    case "#082890":
      return "pj 100/50/0/2";
      break;
    case "#009045":
      return "pj 85/0/100/0";
      break;
    case "#80b3a3":
      return "pj 48/0/24/0";
      break;
    case "#806c28":
      return "pj 18/43/91/15";
      break;
    case "#f6d101":
      return "pj 0/22/100/0";
      break;
    case "#c40f77":
      return "pj 0/100/0/0";
      break;
    case "#801815":
      return "pj 5/100/84/24";
      break;
    case "#343434":
      return "pj 0/0/0/80";
      break;
    case "#021c3b":
      return "pj 100/70/10/50";
      break;
    case "#005425":
      return "pj 90/0/100/55";
      break;
    case "#30a683":
      return "pj 75/0/50/0";
      break;
    case "#594f42":
      return "pj 50/70/80/0";
      break;
    case "#db9600":
      return "pj 0/60/100/0";
      break;
    case "#8165a2":
      return "pj 50/60/0/0";
      break;
    case "#65092d":
      return "pj 20/100/60/25";
      break;
    case "#000000":
      return "pj 0/0/0/100";
      break;
    case "#011023":
      return "pj 100/73/24/71";
      break;
    case "#586a1c":
      return "pj 50/15/100/70";
      break;
    case "#104969":
      return "pj 100/30/50/10";
      break;
    case "#382f2b":
      return "pj 70/90/93/0";
      break;
    case "#ce6b03":
      return "pj 0/70/100/0";
      break;
    case "#2f004a":
      return "pj 80/100/0/0";
      break;
    case "#45061f":
      return "pj 1/100/64/53";
      break;

    default:
    return "erro na conversão de cor de hexadecimal para CMYK";
  }
}
// responsividade
