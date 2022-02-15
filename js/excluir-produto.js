function pesquisarProdutos(){
	var nomeProduto = document.getElementById("nome-produto-input").value;
	var pacote = document.getElementById("pacote-selecionado").value;
	var tabelaResultado = document.getElementById("resultado-pesquisa");

			var xhr = new XMLHttpRequest();
		
			xhr.open("GET","php/pesquisarProdutoExcluir.php?nome="+ nomeProduto + "&pacote="+ pacote,true);
			xhr.onload = function(){
				if (this.status == 200) {
					 tabelaResultado.innerHTML = this.responseText
				}
			}
			xhr.send();
}


function confirmarExcluirProduto(elemento,id ){
	var nomeProduto = elemento.parentElement.parentElement.children[0].innerHTML
	var pacote = elemento.parentElement.parentElement.children[1].innerHTML
	if(confirm("deseja excluir "+ nomeProduto + " do pacote " + pacote +"?")){
		excluirProduto(elemento,id)
	}
}
function excluirProduto(elemento, id){
		elemento.parentElement.parentElement.remove()

			var xhr = new XMLHttpRequest();
			
			xhr.open("GET","php/excluir-produto.php?id="+id,true);
			xhr.onload = function(){
				if (this.status == 200) {
					   alert(this.responseText+" excluído com sucesso!")
				}
			}
			xhr.send();
}
