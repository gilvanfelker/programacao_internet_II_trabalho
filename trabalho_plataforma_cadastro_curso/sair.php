<?php
session_start();
ob_start();
unset($_SESSION['id_usuario'], $_SESSION['nome']);
		$_SESSION['msg'] = "<br><p1 style='color:green'>Deslogado com sucesso!</p1>";

header("Location: Login.php");

