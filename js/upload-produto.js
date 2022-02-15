		var groups;
		var menuCores = document.getElementById("cores-svg")
		var parteSelecionada;


		var inputCamisaFrente = document.getElementById("carregarCamisaFrente")
		var inputCalcaoFrente = document.getElementById("carregarCalcaoFrente")
		var inputCamisaCostas = document.getElementById("carregarCamisaCostas")
		var inputCalcaoCostas = document.getElementById("carregarCalcaoCostas")


		var camisaFrente = document.getElementById("camisa-frente")
		var camisaCostas = document.getElementById("camisa-costas")
		var calcaoFrente = document.getElementById("calcao-frente")
		var calcaoCostas = document.getElementById("calcao-costas")

		var thumbnailCamisa = document.getElementById("thumbnail-camisa")
		var thumbnailCalcao = document.getElementById("thumbnail-calcao")

		  var camisaCores = {
      			gola: [],
				estampaCamisa: [],
				detalheCamisa: []	
  			}
  			var calcaoCores = {
  				estampaCalcao: [],
				detalheCalcao: []
  			}

		var checkThumbnailCamisa = false;
		var checkThumbnailCalcao = false;
		var checkManipulacaoIniciada = false;



		function comecarManipulacao(){
			 camisaCores = {
      			gola: [],
				estampaCamisa: [],
				detalheCamisa: []	
  			}
  			 calcaoCores = {
  				estampaCalcao: [],
				detalheCalcao: []
  			}
			checkManipulacaoIniciada = true;
			groups = document.getElementsByTagName("g");
			var paths = document.getElementsByTagName("path");
			
			for (var i = 0; i < paths.length; i++) {
			paths[i].removeAttribute("fill")
			paths[i].removeAttribute("class")
			
			
			}
			atributoNovo()
		}
		
		

		function adicionarId(parteId){
			parteSelecionada = document.getElementsByClassName("selected")
			parteSelecionada[0].setAttribute("id", parteId)
			menuCores.classList.add("active")
		}
		function mudaCor(cor){
			parteSelecionada = document.getElementsByClassName("selected");
			parteSelecionada[0].setAttribute("fill", cor)
			parteSelecionada[0].removeAttribute("opacity")
			menuCores.classList.remove("active")
			
			switch(parteSelecionada[0].id){
				case 'gola-primaria':
					camisaCores.gola[0] = parteSelecionada[0].getAttribute('fill');
				break;
				case 'gola-secundaria':
					camisaCores.gola[1] = parteSelecionada[0].getAttribute('fill');
				break;
				case 'gola-terciaria':
					camisaCores.gola[2] = parteSelecionada[0].getAttribute('fill');
				break;
				case 'estampa-primaria':
					camisaCores.estampaCamisa[0] = parteSelecionada[0].getAttribute('fill');
				break;
				case 'estampa-secundaria':
					camisaCores.estampaCamisa[1] = parteSelecionada[0].getAttribute('fill');
				break;
				case 'estampa-terciaria':
					camisaCores.estampaCamisa[2] = parteSelecionada[0].getAttribute('fill');
				break;
				case 'estampa-quaternaria':
					camisaCores.estampaCamisa[3] = parteSelecionada[0].getAttribute('fill');
				break;
				case 'estampa-quinaria':
					camisaCores.estampaCamisa[4] = parteSelecionada[0].getAttribute('fill');
				break;
				case 'detalhe-punho':
					camisaCores.detalheCamisa[0] = parteSelecionada[0].getAttribute('fill');
				break;
				case 'detalhe-lateral':
					camisaCores.detalheCamisa[1] = parteSelecionada[0].getAttribute('fill');
				break;
				case 'calcao-primaria':
					calcaoCores.estampaCalcao[0] = parteSelecionada[0].getAttribute('fill');
				break;
				case 'calcao-secundaria':
					calcaoCores.estampaCacao[1] = parteSelecionada[0].getAttribute('fill');
				break;
				case 'calcao-terciaria':
					calcaoCores.estampaCalcao[2] = parteSelecionada[0].getAttribute('fill');
				break;
				case 'calcao-detalhe-lateral':
					calcaoCores.detalheCalcao[0] = parteSelecionada[0].getAttribute('fill');
				break;
				default:
				console.log("erro no objeto das cores do modelo")
			}
		}
		function carregarArquivo(parteModelo, input){
			switch(parteModelo){
				case "camisa-frente":
						var reader = new FileReader()
						reader.onload = function(){
							camisaFrente.innerHTML = reader.result
							
						}
						reader.readAsText(input.files[0])
						
				break;
				case "calcao-frente":
				
						var reader = new FileReader()
						reader.onload = function(){
							calcaoFrente.innerHTML = reader.result
							
						}
						reader.readAsText(input.files[0])
						
				break;
				case "camisa-costas":
						var reader = new FileReader()
						reader.onload = function(){
							camisaCostas.innerHTML = reader.result
						}
						reader.readAsText(input.files[0])
						
				break;
				case "calcao-costas":
						var reader = new FileReader()
						reader.onload = function(){
							calcaoCostas.innerHTML = reader.result
							
						}
						reader.readAsText(input.files[0])
						
				break;
				case "thumbnail-camisa":
					var reader = new FileReader()
						reader.onload = function(){
							thumbnailCamisa.src = reader.result
							
						}
						reader.readAsDataURL(input.files[0])
						checkThumbnailCamisa = true;
				break;
				case "thumbnail-calcao":
					var reader = new FileReader()
						reader.onload = function(){
							thumbnailCalcao.src = reader.result
							
						}
						reader.readAsDataURL(input.files[0])
						checkThumbnailCalcao = true;
				break;
			}
				
			
		}
		function atributoNovo(){
				
				for (var i = 0; i < groups.length; i++) {
				groups = document.getElementsByTagName("g");	
				groups[i].setAttribute("onclick","select(this)")
				}
			}	
		
		function select(e){
					
					for (var i = 0; i < groups.length; i++) {
						groups[i].classList.remove("selected")
						if (!groups[i].classList.contains("has-opacity")) {
							groups[i].removeAttribute("opacity")	
						}
						
					}
					setTimeout(function(){
						var group = e
						group.classList.add("selected")
						group.setAttribute("opacity", 0.4)
						group.classList.remove("has-opacity")
					},1)
					
					
		}

function fazerUpload(){
	var inputNome = document.getElementById("nome")
	var inputPasta = document.getElementById("pasta")
	var inputPacote = document.getElementsByClassName("pacote")
	var inputClube = document.getElementsByClassName("clube")
	var inputTipoEstampa = document.getElementsByClassName("tipo-estampa")
	var inputLinhaReserva = document.getElementsByClassName("linhaReserva")


	var nome = inputNome.value
	var pasta = inputPasta.value
	var svgfrentecamisa = document.getElementById("camisa-frente").innerHTML;
	var svgfrentecalcao = document.getElementById("calcao-frente").innerHTML;
	var svgcostascamisa = document.getElementById("camisa-costas").innerHTML;
	var svgcostascalcao = document.getElementById("calcao-costas").innerHTML;
	var pacote
	var clube = []
	var tipoEstampa = []
	var linhaReserva = "linha"
	for (var i = 0; i < inputPacote.length; i++) {
		if(inputPacote[i].checked){
			pacote = inputPacote[i].value 
		}
	}
	for (var i = 0; i < inputClube.length; i++) {
		if(inputClube[i].checked){
			clube.push(inputClube[i].value)
		}
	}
	for (var i = 0; i < inputTipoEstampa.length; i++) {
		if(inputTipoEstampa[i].checked){
			tipoEstampa.push(inputTipoEstampa[i].value)
		}
	}


	for (var i = 0; i < groups.length; i++) {
		if(groups[i].hasAttribute("onclick")){
			groups[i].removeAttribute("onclick");
		}
		if (groups[i].classList.contains("selected")) {
			groups[i].classList.remove("selected")
			groups[i].removeAttribute("opacity")
		}
	}
	/*
	if (pacote == 'bronze') {
		camisaCores.gola[2] = undefined;
		camisaCores.gola[1] = undefined;
		camisaCores.detalheCamisa[0] = undefined;
		camisaCores.detalheCamisa[1] = undefined;
		calcaoCores.detalheCalcao[0] = undefined;
	}else if(pacote == 'prata'){
		camisaCores.gola[2] = undefined;
		camisaCores.gola[1] = undefined;
		camisaCores.detalheCamisa[1] = undefined;
		calcaoCores.detalheCalcao[0] = undefined;
	}else if (pacote == 'ouro') {
		camisaCores.gola[2] = undefined;
		camisaCores.gola[1] = undefined;
	}else if (pacote == 'profissa20') {
		camisaCores.gola[2] = undefined;
		camisaCores.gola[1] = undefined;
		camisaCores.detalheCamisa[1] = undefined;
	}else if(pacote == 'libertadores'){
		camisaCores.detalheCamisa[1] = undefined;
	}else if (pacote == 'african') {
		camisaCores.gola[2] = undefined;
	}
*/
	coresCamisaJSON = JSON.stringify(camisaCores); 
	coresCalcaoJSON = JSON.stringify(calcaoCores);
	clube = JSON.stringify(clube);
	tipoEstampa = JSON.stringify(tipoEstampa);
	console.log(inputNome.value)
	console.log(inputPasta.value)
	console.log(pacote)
	console.log(clube)
	console.log(tipoEstampa)
	console.log(linhaReserva)

	
		
	
		if (inputNome.value == "" || inputPasta.value == "" || pacote == undefined || clube == undefined || tipoEstampa == undefined || linhaReserva == undefined) {
			alert("Erro: um ou mais campos em branco")
		}else{
			if (svgfrentecamisa == "" || svgfrentecalcao == "" || svgcostascamisa == "" || svgcostascalcao == "") {
				alert("Erro: uma ou mais figuras em SVG estão faltando")
			}else{
				if (checkThumbnailCamisa == false || checkThumbnailCalcao == false) {
					alert("Erro: uma ou mais thumbnails estão faltando")
				}else{
					var xhr = new XMLHttpRequest();

				xhr.open("POST","php/cadastrar-produto.php");
				xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
				xhr.onload = function(){
					if (this.status == 200) {
						alert(this.responseText);
					}
				}
				xhr.send("linhareserva="+ linhaReserva + "&pacote="+ pacote + "&nomeproduto=" +inputNome.value+ "&nomepasta="+inputPasta.value+"&svgfrentecamisa="+svgfrentecamisa+"&svgfrentecalcao="+svgfrentecalcao+"&svgcostascamisa="+svgcostascamisa+"&svgcostascalcao="+svgcostascalcao + "&thumbnailcamisa="+thumbnailCamisa.src+ "&thumbnailcalcao="+thumbnailCalcao.src +"&clube="+clube+"&tipodeestampa="+tipoEstampa + "&corescamisa="+ coresCamisaJSON + "&corescalcao=" + coresCalcaoJSON);
				checkManipulacaoIniciada = false;
				}
			}
		}
	
	
}

function adicionarOpacidade(){
	var valorOpacidade = document.getElementById("opacidade").value;

	if(valorOpacidade > 0 && valorOpacidade < 100){
		valorOpacidade = valorOpacidade/100
		parteSelecionada = document.getElementsByClassName("selected");
		parteSelecionada[0].setAttribute("opacity", valorOpacidade);
		parteSelecionada[0].classList.add("has-opacity");
	}else{
		alert("Erro: digite um valor numerico entre 0 e 100 para opacidade")
	}

}