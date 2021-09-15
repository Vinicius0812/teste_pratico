<?php
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'teste_pratico');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('ERRO AO CONECTAR COM O BANCO');