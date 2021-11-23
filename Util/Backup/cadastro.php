<?php
session_start();
include('conexao.php');

if(empty($_POST['nome']) || empty($_POST['senha'])) {
	header('Location: Cadastre-se.php');
	exit();
}

$nome = mysqli_real_escape_string($conexao, $_POST['nome']);  //PROTECT SQL INJECTION
$sobrenome = mysqli_real_escape_string($conexao, $_POST['sobrenome']);      //PROTECT SQL INJECTION
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);      //PROTECT SQL INJECTION
$email = mysqli_real_escape_string($conexao, $_POST['email']);      //PROTECT SQL INJECTION
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);      //PROTECT SQL INJECTION
$senha2 = mysqli_real_escape_string($conexao, $_POST['senha2']);      //PROTECT SQL INJECTION

$query = "INSERT INTO `id17751932_bd_cofre`.`usuario` (`usuario`, `senha`, `email`, `nome`, `sobrenome`) VALUES ('{$usuario}', md5('{$senha}'), '{$email}', '{$nome}', '{$sobrenome}')";





$query2 = "select usuario from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";
$result2 = mysqli_query($conexao, $query2);
$row = mysqli_num_rows($result2);




if($senha == $senha2){
	if($row >= 1) {
		header('Location: Home.php');
		exit();
	} else {	
		$result = mysqli_query($conexao, $query);
		header('Location: indexLogin.php');
		exit();
	}
}else{
	header('Location: alerta.php');
		exit();
}

