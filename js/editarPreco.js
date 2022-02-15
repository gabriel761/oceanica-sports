window.onload = function(){
	carregarPrecosPacotes()
}

function carregarPrecosPacotes(){
		console.log("foi")
		var xhr = new XMLHttpRequest();

  			xhr.open("GET","php/carregarPrecos.php" ,true);

  			xhr.onload = function(){
  				if (this.status == 200) {
  					document.getElementById('resultado-pesquisa').innerHTML = this.responseText
           
  				}else{
            	console.log("erro ao carregar preços")
          }
  			}
  			xhr.send();
}

function atualizarPrecosPacotes(){
		console.log("foi")
		var camisaSupreme =document.getElementById('camisa-supreme').value
		var camisaPrata=document.getElementById('camisa-prata').value
		var camisaOuro=document.getElementById('camisa-ouro').value
		var camisaProfissa20=document.getElementById('camisa-profissa20').value
		var camisaLibertadores=document.getElementById('camisa-libertadores').value
		var camisaAfrican=document.getElementById('camisa-african').value
		var calcaoSupreme=document.getElementById('calcao-supreme').value
		var calcaoPrata=document.getElementById('calcao-prata').value
		var calcaoOuro=document.getElementById('calcao-ouro').value
		var calcaoProfissa20=document.getElementById('calcao-profissa20').value
		var calcaoLibertadores=document.getElementById('calcao-libertadores').value
		var calcaoAfrican=document.getElementById('calcao-african').value
		var meiaoSupreme=document.getElementById('meiao-supreme').value
		var meiaoPrata=document.getElementById('meiao-prata').value
		var meiaoOuro=document.getElementById('meiao-ouro').value
		var meiaoProfissa20=document.getElementById('meiao-profissa20').value
		var meiaoLibertadores=document.getElementById('meiao-libertadores').value
		var meiaoAfrican=document.getElementById('meiao-african').value
		var xhr = new XMLHttpRequest();

  			xhr.open("GET",`php/atualizarPreco.php?camisa-supreme=${camisaSupreme}&camisa-prata=${camisaPrata}&camisa-ouro=${camisaOuro}&camisa-profissa20=${camisaProfissa20}&camisa-libertadores=${camisaLibertadores}&camisa-african=${camisaAfrican}&calcao-supreme=${calcaoSupreme}&calcao-prata=${calcaoPrata}&calcao-ouro=${calcaoOuro}&calcao-profissa20=${calcaoProfissa20}&calcao-libertadores=${calcaoLibertadores}&calcao-african=${calcaoAfrican}&meiao-supreme=${meiaoSupreme}&meiao-prata=${meiaoPrata}&meiao-ouro=${meiaoOuro}&meiao-profissa20=${meiaoProfissa20}&meiao-libertadores=${meiaoLibertadores}&meiao-african=${meiaoAfrican}` ,true);

  			xhr.onload = function(){
  				if (this.status == 200) {
  					alert("preços atualizados com sucesso")
  					console.log(this.responseText)	
           		
  				}else{
            	alert("erro ao atualizar preços")
            	console.log(this.responseText)
            	carregarPrecosPacotes()
          }
  			}
  			xhr.send();
}