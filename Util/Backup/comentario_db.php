<?php
session_start();
include('conexao.php');

$comentario = mysqli_real_escape_string($conexao, $_POST['comentario']);


$query = "INSERT INTO `comentarios_db` (`comentario`) VALUES ('{$comentario}');";


Echo $comentario;


mysqli_query($conexao, $query) or die ($mysqli->error);
?>