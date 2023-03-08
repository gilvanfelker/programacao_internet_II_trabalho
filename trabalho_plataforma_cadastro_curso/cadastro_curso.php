<?php
// a Declaração include_once inclui e avalia o arquivo informado durante a execução do script
include_once 'sessao.php';
 ob_start();
include_once 'banco.php';
 
// A cidade para a pesquisa $pesquisa
function inserir($id_turma, $id_aluno, $id_curso) {
	global $conn;
	$sql = "INSERT INTO \"er_cadastro_curso\".tb_turma (id_turma, id_aluno, id_curso) VALUES ($id_turma, $id_aluno, $id_curso)";
    $conn->query($sql);
	//return $conn->insert_id;
	return null;
}

$id_curso = $_POST['curso'];
$id_aluno = $_SESSION['id_usuario'];




$consulta = $conn->query( "SELECT id_curso
from \"er_cadastro_curso\".tb_curso where id_curso = '$id_curso'");


while ($registro = $consulta->fetch(PDO::FETCH_ASSOC)) {


$id_turma = $registro['id_curso'];


inserir($id_turma, $id_aluno, $id_curso);


}






header("Location:inicio.php");



?>
