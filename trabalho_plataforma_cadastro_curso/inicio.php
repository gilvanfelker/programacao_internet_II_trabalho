<?php 
session_start();
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
  <a href="#home">Inicio</a>
 
  <div class="subnav">
    <button class="subnavbtn">Cursos <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#bring">Violão_inicante</a>
      <a href="#deliver">Violão_erudito</a>
      <a href="#package">Teclado_iniciante</a>
      <a href="#express">Violino_iniciante</a>
    </div>
  </div> 
  
  <a href="sair.php">Sair</a>
</div>

<div style="padding:0 16px">
  <h3>Bem vindo!</h3>
  <p>Selecione o curso desejado e treine com nossas aulas.</p>
</div>

</body>
</html>