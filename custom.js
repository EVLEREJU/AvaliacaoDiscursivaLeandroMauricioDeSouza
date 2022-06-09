const listarUsuarios = async () => {
	const dados = await fetch("acessa_cadastro.php");
	const resposta = await dados.json();
	   console.log(resposta); 

	  if(!resposta['status']) {
	  	document.getElementById("msgAlerta").innerHTML = resposta["msg"];

	  }else{
	  	const conteudo = document.querySelector(".listar-usuarios");
	  	 if(conteudo){
	  	 	document.querySelector(".listar-usuarios").innerHTML = resposta['dados'];
	  	 }
	  }

       
} 
listarUsuarios();