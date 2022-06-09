<?php

$host = "localhost";
$user= "root";
$pass = "";
$dbname = "cadastro";

try{
   $conn = new PDO("mysql:host=$host; dbname=" . $dbname, $user, $pass);

   //echo "Conexão com banco de dados realizada com sucesso";

} catch(PDOException $err){
	//echo "Erro: conexão com banco de dados não foi realizada com sucesso" . $err->getMessage();

}