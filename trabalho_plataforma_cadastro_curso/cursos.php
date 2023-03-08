<?php 
include_once 'sessao.php';
ob_start();
include_once 'banco.php';
?>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

.navbar {
  overflow: hidden;
  background-color: #333; 
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.subnav {
  float: left;
  overflow: hidden;
}

.subnav .subnavbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .subnav:hover .subnavbtn {
  background-color: blue;
}

.subnav-content {
  display: none;
  position: absolute;
  left: 0;
  background-color: blue;
  width: 100%;
  z-index: 1;
}

.subnav-content a {
  float: left;
  color: white;
  text-decoration: none;
}

.subnav-content a:hover {
  background-color: #eee;
  color: black;
}

.subnav:hover .subnav-content {
  display: block;
}
</style>
</head>
<body>

<div class="navbar">
  <a href="inicio.php">Inicio</a>
    
  <a href="cursos.php">Cursos</a>

  <a href="turmas.php">Turmas</a>

  <a href="perfil.php">Perfil</a>

  <a href="sair.php">Sair</a>
</div>

<h2>Inscreva-se para nossos cursos!</h2><br>

<div style="padding:0 16px">
<form name="cadastro_curso" action="cadastro_curso.php" method="post">
    <label>Selecione o curso:</label>
      <select name="curso">
        <option value="1">Violão iniciante</option>
        <option value="2">Violão erudito</option>
        <option value="3">Teclado iniciante</option>
        <option value="4">Violino Iniciante</option>
      </select><br>
    <input type="submit" name="enviar" value="Insrever-se">
  </form>
</div>

</body>
</html>