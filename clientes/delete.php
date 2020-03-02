<?php
require_once('../conexao/banco.php');

$id = $_REQUEST['CLI_CODIGO'];
$sql = "delete from tb_clientes where CLI_CODIGO = '$id'";
mysqli_query($con, $sql) or die ("Erro na sqli");
header("Location: consulta_cliente.php");


?>