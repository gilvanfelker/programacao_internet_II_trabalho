<?php
session_start();
ob_start();
include_once 'banco.php';
// função de insert - ajustar para tabela destino

	$nome_sessao = $_SESSION['nome'];
    
    $endereco = $_POST['endereco'];
  
    
	$senha = password_hash($recebe_senha, PASSWORD_DEFAULT);




try {

  $stmt = $conn->prepare('UPDATE "er_cadastro_curso".tb_usuario SET  endereco = :endereco WHERE nome = :nome_usuario');
  $stmt->execute(array(
    ':nome_usuario'=> $nome_sessao,
    
    ':endereco'=> $endereco,
    
  ));

  echo $stmt->rowCount();
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
   
header("Location: inicio.php");
 ?>