<?php
session_start();
ob_start();
include_once 'banco.php';
// função de insert - ajustar para tabela destino
function db_insert_teste($nome, $cpf, $endereco, $email, $senha) {
	global $conn;
	$sql = "INSERT INTO \"er_cadastro_curso\".tb_usuario (nome, cpf, endereco, email, senha) VALUES ('$nome', '$cpf', '$endereco', '$email', '$senha')";
    $conn->query($sql);
	//return $conn->insert_id;
	return null;
}

require_once("./banco.php");

// verificação da chegada de dados
var_dump($_REQUEST);

// atribuição dos campos para variáveis
$nome = $_REQUEST['nome'];
$cpf = $_REQUEST['cpf'];
$endereco = $_REQUEST['endereco'];
$email=$_REQUEST['email'];
$recebe_senha =$_REQUEST['senha'];
$senha = password_hash($recebe_senha, PASSWORD_DEFAULT);
var_dump($senha);
// chamada da função
db_insert_teste($nome, $cpf, $endereco, $email, $senha);
$_SESSION['msg'] = "<br><p1 style='color:green'>Cadastro realizado com sucesso!</p1>";
header("Location:Login.php");


?>