

<?php
session_start();
include_once 'banco.php';
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
if(!empty($dados['SendLogin'])){
var_dump($dados);

$query_usuario= "SELECT id_usuario, nome, email, senha 
		FROM \"er_cadastro_curso\".tb_usuario 
		WHERE email=:usuario
		LIMIT 1";
$result_usuario=$conn->prepare($query_usuario);
$result_usuario->bindParam(':usuario', $dados['usuario'], PDO::PARAM_STR );
$result_usuario->execute();

if(($result_usuario) AND ($result_usuario->rowCount() !=0)){

$row_usuario = $result_usuario->fetch(PDO::FETCH_ASSOC);
var_dump($row_usuario);
}else{
$_SESSION['msg'] = "Erro: Usuario ou senha invalida!";

}
if (isset($_SESSION['msg'])){
echo $_SESSION['msg'];
unset($_SESSION['msg']);
}

}
?>