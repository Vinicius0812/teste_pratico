<?php
session_start();
include ('conexao.php');

?>

<h1>Olá, <?php echo $_SESSION['email'];?></h1>

