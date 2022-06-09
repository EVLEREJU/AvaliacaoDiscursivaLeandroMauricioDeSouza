<?php


session_start();

ob_start();

include_once './conexao.php';

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

//var_dump($dados);

if(!empty($dados['CadUsuario'])){
    foreach($dados['nome'] as $chave => $nome){
       // echo "Chave: $chave <br>";
       // echo "Nome: $nome <br>";
       // echo "Assunto: ". $dados['assunto'][$chave] . "<br>";
       // echo "Autor: ". $dados['autor'][$chave] . "<br>";
        //echo "PalavraChave: ". $dados['palavraChave'][$chave] . "<br>";

       $query_usuario = "INSERT INTO usuarios (nome, assunto, autor, palavraChave) VALUES (:nome, :assunto, :autor, :palavraChave)";
       $cad_usuario = $conn->prepare($query_usuario);
       $cad_usuario-> bindParam (':nome', $nome);
       $cad_usuario-> bindParam (':assunto', $dados['assunto'][$chave] );
       $cad_usuario-> bindParam (':autor', $dados['autor'][$chave] );
       $cad_usuario-> bindParam (':palavraChave', $dados['palavraChave'][$chave] );
       $cad_usuario-> execute ();

    }

    $_SESSION['msg'] = "<p style = 'color: green;'> Canal cadastrado com sucesso </p>";
    header("location: menu.php");

} else{
        $_SESSION['msg'] = " <p style='color: red;' > Erro:Não foi possivel cadastrar o canal </p> ";
    header("location: menu.php");
}