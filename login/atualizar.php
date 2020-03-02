<?php
require_once('../conexao/banco.php');

$id = $_REQUEST['txt_codigo'];
$nome = $_REQUEST['txt_nome'];
$login = $_REQUEST['txt_login'];
$senha = $_REQUEST['txt_senha'];

$sql = "update tb_login set LOG_NOME='$nome',LOG_LOGIN='$login',LOG_SENHA='$senha' where LOG_CODIGO='$id'";
mysqli_query($con, $sql) or die ("Erro na qsl!");
header("Location: consulta_login.php");

?>