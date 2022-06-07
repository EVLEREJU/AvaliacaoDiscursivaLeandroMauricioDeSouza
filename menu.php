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

     <form method="POST" action="processa.php">
       <div id="formulario">
          <div class ="form-group">
              <labe><b><i>Nome:</i></b></labe>
              <input type="text" name="nome[]" id="nome" placeholder = "Nome do canal"/>

              <labe><b><i>Assunto:</i></b></labe>
              <input type="text" name="assunto[]" id="assunto" placeholder = "Digite o Assunto"/>

              <labe><b><i>Autor:</i></b></labe>
              <input type="text" name="autor[]" id="autor" placeholder = "Nome do Autor"/>

              <labe><b><i>Palavra chave:</i></b></labe>
              <input type="text" name="palavraChave[]" id="palavraChave" placeholder = "Digite a Palavra chave"/>


          </div>

          <div>
               <input type="submit" value = "Cadastrar" name= "CadUsuario"/>
          </div>
           
       </div>
        
     </form>
 	
 </body>
</html> 