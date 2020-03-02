<?php
require_once('../conexao/banco.php');

$id = $_REQUEST['PRA_CODIGO'];
$sql = "delete from tb_pratos where PRA_CODIGO = '$id'";
mysqli_query($con, $sql) or die ("Erro na sqli");
header("Location: consulta_pratos.php");


?>