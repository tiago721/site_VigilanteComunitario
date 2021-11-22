<?php
session_start();
include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: indexLogin.php');
	exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);  //PROTECT SQL INJECTION
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);      //PROTECT SQL INJECTION

$query = "select usuario from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['usuario'] = $usuario;
	
	$select = "select nome from usuario where usuario = '{$usuario}'";
	$resultado = mysqli_query($conexao, $select);
	$row2 = mysqli_fetch_row($resultado);
	$nome = $row2[0];
	$_SESSION['nome'] = $nome;

	$select = "select sobrenome from usuario where usuario = '{$usuario}'";
	$resultado = mysqli_query($conexao, $select);
	$row2 = mysqli_fetch_row($resultado);
	$sobrenome = $row2[0];
	$_SESSION['sobrenome'] = $sobrenome;
	
	$select = "select email from usuario where usuario = '{$usuario}'";
	$resultado = mysqli_query($conexao, $select);
	$row2 = mysqli_fetch_row($resultado);
	$email = $row2[0];
	$_SESSION['email'] = $email;
	
	header('Location: Visualizador.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: indexLogin.php');
	exit();
}
