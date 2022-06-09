<?php
include('login.php');

if(isset ( $_POST ['nome'] ) || isset($_POST ['senha'] )) {

	if(strlen($_POST ['nome'] ) == 0) {
		echo "Preencha seu login";
	} else if (strlen( $_POST ['senha'] ) == 0) {
		echo "Preencha sua senha";
	} else {
		$nome = $mysqli->real_escape_string($_POST['nome']);
		$senha = $mysqli->real_escape_string($_POST['senha']);

		$sql_code = "SELECT * FROM usuarios WHERE nome = '$nome' AND senha = '$senha' ";
          $sql_query = $mysqli -> query ($sql_code) or die("Falha na execução do codigo SQL:" . $mysql->error);

          $quantidade = $sql_query -> num_rows;

          if($quantidade == 1){
               $usuario = $sql_query -> fetch_assoc();

               
               $_SESSION['id'] = $usuario['id'];
               $_SESSION['nome'] = $usuario['nome'];

               header("location: menu.php");

          } else {
               echo "falha ao logar! Usuario ou senha incorreto";
               }
          }
          
	}

?>
<!DOCTYPE html>

<html lang=pt-br>
   <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE-edge">
     <meta name="viewport" content="width-device-width, initialscale=1.0">
     <link rel="stylesheet" type="text/css" href ="style.css" media ="screen" /> 
     <title>Login</title>
   </head>
    <body class= bodylogin>
       <h1>Tela de Login</h1>
       <Form class= "telainicial" action="" method="POST">
         <p>
          <label> Nome </label>
          <input type="text" name="nome">
         </p>

         <p>
          <label> Senha </label>
          <input type="password" name="senha">
         </p>
    
         <p>
          <button id="btnentrar" type="submit">Entrar</button>
         </p>

        </Form>
     
     </body>

     Usuario:fael<br>
     Senha: 12345678

</html> 