<?php
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));
$conf_senha = mysqli_real_escape_string($conexao, trim(md5($_POST['conf_senha'])));

$sql = "SELECT count (*) AS total FROM usuarios WHERE email = '{email}'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
    $_SESSION['user_existente'] = true;
    header('Location: cadastro.php');
    exit;
}else if($senha != $conf_senha){
    $_SESSION['senha_dif'] = true;
    header('Location: cadastro.php');
    exit;
}else{
    //https://youtu.be/6FdguCuauEI?t=428 CADASTRO
    //https://youtu.be/GAGRrVVD3js?t=762 LOGIN 
}


?>