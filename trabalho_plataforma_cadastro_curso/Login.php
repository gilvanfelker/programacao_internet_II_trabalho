<?php 
session_start();
ob_start();
include_once 'banco.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>
<body>
<h1>Login:</h1>
<?php
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
if(!empty($dados['SendLogin'])){
//var_dump($dados);

$query_usuario= "SELECT id_usuario, nome, email, senha, cpf 
		FROM \"er_cadastro_curso\".tb_usuario 
		WHERE email=:usuario
		LIMIT 1";
$result_usuario=$conn->prepare($query_usuario);
$result_usuario->bindParam(':usuario', $dados['usuario'], PDO::PARAM_STR );
$result_usuario->execute();
if(($result_usuario) AND ($result_usuario->rowCount() !=0)){

$row_usuario = $result_usuario->fetch(PDO::FETCH_ASSOC);
//var_dump($row_usuario);
if(password_verify($dados['senha_usuario'], $row_usuario['senha'])){
	$_SESSION['id_usuario'] = $row_usuario['id_usuario'];
	$_SESSION['nome'] = $row_usuario['nome'];
	header("Location: inicio.php");
}else{

	$_SESSION['msg'] = "<br><p1 style='color:red'>Erro: Usuario ou senha invalida!</p1>";
}

}else{
$_SESSION['msg'] = "<br><p1 style='color:red'>Erro: Usuario ou senha invalido!</p1>";

}
}
if (isset($_SESSION['msg'])){
echo $_SESSION['msg'];
unset($_SESSION['msg']);
}
?>

<form method="POST" action="">
<label>Usuario:</label><br>
<input type="text" name="usuario" placeholder="Digite o nome de usuário" value="<?php if(isset($dados['usuario'])){echo $dados['usuario'];} ?>"><br>
<label>Senha:</label><br>
<input type="password" name="senha_usuario" placeholder="Digite a senha" value="<?php if(isset($dados['senha_usuario'])){echo $dados['senha_usuario'];} ?>"><br><br>
<input type="submit" value="Entrar" name="SendLogin">
<a href="cadastro_usuario.html">Fazer Cadastro</a>
</form>

</body>
</html>