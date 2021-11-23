<?php
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', 'Estacio2021');
define('DB', 'id17751932_bd_cofre');
 
$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');