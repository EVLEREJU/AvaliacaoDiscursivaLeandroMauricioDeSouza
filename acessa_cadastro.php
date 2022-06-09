<?php

include_once './conexao.php';



$query_usuarios = "SELECT id, nome, assunto, autor, palavraChave FROM usuarios ORDER BY id ASC";
$result_usuarios = $conn -> prepare ($query_usuarios) ;
$result_usuarios ->execute();


if(($result_usuarios) and ($result_usuarios -> rowCount() !=0)){
    $dados = "<table class='table table-striped table-bordered table-hover'>";
    $dados .= "<thead>";
    $dados .= "<tr>";
    $dados .= "<th> ID </th>";
    $dados .= "<th> NOME </th>";
    $dados .= "<th> ASSUNTO </th>";
    $dados .= "<th> AUTOR </th>";
    $dados .= "<th> PALAVRA CHAVE </th>";
    $dados .= "</tr>";
    $dados .= "</thead>";
    $dados .= "<tbody>";
    while ($row_usuario = $result_usuarios -> fetch (PDO::FETCH_ASSOC)) {
         
        extract($row_usuario);


        $dados .="<tr>";
        $dados .="<td>$id</td>";
        $dados .="<td>$nome</td>";
        $dados .="<td>$assunto</td>";
        $dados .="<td>$autor</td>";
        $dados .="<td>$palavraChave</td>";
        $dados .="</tr>";

         // echo "ID: $id <br>" ;
          //echo "ID: $nome <br>" ;
         // echo "ID: $assunto <br>";
         // echo "ID: $autor <br> ";
         // echo "ID: $palavraChave <br>" ; 
    }
    $dados .="</tbody>";
    $dados .="</table>";



    $retorna = ['status' => true, 'dados' => $dados];
 
} else{
    $retorna = ['status' => false, 'msg' => "<p style='color:red;'>Erro: Nenhum cadastro encontrado</p>"];

}
echo json_encode($retorna);