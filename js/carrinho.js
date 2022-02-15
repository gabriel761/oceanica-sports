//o for é para pegar todos os produtos do local storage

for (var i = 0; i < localStorage.length; i++) {
		const key = localStorage.key(i);
		const detalhesProduto = JSON.parse(localStorage.getItem(key));
		console.log(detalhesProduto);
		var title = detalhesProduto[0];
		var quantity = detalhesProduto[1];
		var imagem = detalhesProduto[2];
		var preco = detalhesProduto[3]
		var tipo = detalhesProduto[4];
		var acabamento = detalhesProduto[5];
		var miolo = detalhesProduto[6];
		if (tipo == null) {
			tipo = '';
		}
		if (acabamento == null) {
			acabamento = '';
		}
		if (miolo == null) {
			miolo = '';
		}
		var precoCalc = preco * quantity
		addItemToCart(title, quantity, imagem, preco, key, tipo, acabamento, miolo);

}

var removeCartItemButtons = document.getElementsByClassName('btn-remover');
for (var i = 0; i < removeCartItemButtons.length; i++) {
	var button = removeCartItemButtons[i];
	button.addEventListener('click', removeCartItem );
}
	function removeCartItem(event){
		
		var buttonClicked = event.target;
		var buttonId = event.target.id;
		buttonClicked.parentElement.parentElement.remove();

		removerDoLocalStorage(buttonId);
	}

function removerDoLocalStorage(buttonId){
	
	localStorage.removeItem(buttonId);
}



function addItemToCart(title, quantity, imagem, preco, key){
	var cartRow = document.createElement('div');
	cartRow.classList.add('produto-carrinho');
	var cartItems = document.getElementsByClassName('carrinho')[0];
	var cartRowContents = `<div class="imagem-nome" >
                    <img class="imagem-carrinho" id="imagem-carrinho" src="${imagem}">
                    <p class="nome-produto" id="nome-produto">${title}</p>
                </div>
                <div class="quantidade">
                    <input class="form-control required margin-input quantidade-produto" id="quantidade" type="number" value="${quantity}" min="0" max="1000" onkeypress="mudarTextoPreco(this)">
                    <h4 class="preco-texto">R$${precoCalc}</h4>
                    <div  id="${key}" class="close2 btn-remover">+</div>
                    <input type="hidden" name="produto" value="${title}">
                    <input type="hidden" name="produto" class="tipo-produto" value="${tipo}">
                    <input type="hidden" name="produto" class="acabamento-produto" value="${acabamento}">
                    <input type="hidden" name="produto" class="miolo-produto" value="${miolo}">
                </div>`
	cartRow.innerHTML = cartRowContents
	cartItems.append(cartRow);
	cartRow.getElementsByClassName('btn-remover')[0].addEventListener('click', removeCartItem)
	mudarTextoPreco()

}

function mudarTextoPreco(event){
	setTimeout(function(){
	var textoPreco = event.parentElement.children[1];
	precoCalc = event.value * preco;
		textoPreco.innerText = "R$" + precoCalc;
	},10)

}
