<?php
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', 'Estacio2021');
define('DB', 'bd_vigilante');
 
$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');