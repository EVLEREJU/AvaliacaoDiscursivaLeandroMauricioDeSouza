<?

     session_start();
     include_once './acessa_cadastro.php';

    }
?>
<!DOCTYPE html>
<html lang=pt-br>
 <head>
 	<meta charset="UTF-8">
 	<meta http-equiv="X-UA-Compatible" content="IE-edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href ="style.css" media ="screen" /> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 	<title>Lista de cadastro</title>
 </head>
 <body class="bodyListaCadastro"> 

    <div class="container">            
        <form method="POST" action="menu.php">
            <h1 id="titleListaCadastro">Lista de cadastro</h1>

            <div id="btnconsultCad">
               <input type="submit" value = "Cadastrar" name= "CadUsuario"/>
           </div>
        </form>
           <span id="msgAlerta"></span>
      <div class= "row">
         <div class="col-lg-12">
             <span class="listar-usuarios"></span>
         </div>
      </div>
    </div>
     
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="custom.js"></script>
 </body>
</html> 