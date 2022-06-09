<?

     session_start();

    }
?>

<!DOCTYPE html>
<html lang=pt-br>
 <head>
 	<meta charset="UTF-8">
 	<meta http-equiv="X-UA-Compatible" content="IE-edge">
 	<meta name="viewport" content="width-device-width, initialscale=1.0">
    <link rel="stylesheet" type="text/css" href ="style.css" media ="screen" /> 
 	<title>Menu</title>
 </head>
 <body class="bodymenu"> 
 	<h1>Cadastrar Canais</h1>

     <form class ="menu" method="POST" action="processa.php">
       <div id="formulario">
          <div class ="form-group">
             <div id="nome">
                 <labe id="lbnome"><b><i>Nome:</i></b></labe>
                 <input id="inpnome" size="50" type="text" name="nome[]" id="nome" placeholder = "Nome do canal"/>
             </div>
             
             <div id="assunto">
                 <labe id="lbassunto"><b><i>Assunto:</i></b></labe>
                 <input id="inpassunto" size="50" type="text" name="assunto[]" id="assunto" placeholder = "Digite o Assunto"/>
             </div>

             <div id="autor">
                 <labe id="lbautor"><b><i>Autor:</i></b></labe>
                 <input id="inpautor" size="50" type="text" name="autor[]" id="autor" placeholder = "Nome do Autor"/>
             </div>

             <div id="palavraChave">
                 <labe id="lbpalavraChave"><b><i>Palavra chave:</i></b></labe>
                 <input id="inppalavraChave" size="50" type="text" name="palavraChave[]" id="palavraChave" placeholder = "Digite a Palavra chave"/>
             </div>


          </div>

          <div>
               <input id="btnCadastrar" type="submit" value = "Cadastrar" name= "CadUsuario"/>
          </div>
        </div>
        
     </form>
        <form method="POST" action="Lista_cadastro">
            <div >
               <input id="btnconsCad" type="submit" value="Consultar cadastros" name="consult_cad">
           </div>
        </form>

 </body>
</html> 