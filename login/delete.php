<?php
require_once('../conexao/banco.php');

$id = $_REQUEST['LOG_CODIGO'];
$sql = "delete from tb_login where LOG_CODIGO = '$id'";
mysqli_query($con, $sql) or die ("Erro na sqli");
header("Location: consulta_login.php");


?>