<?php
require_once('../conexao/banco.php');

$id = $_REQUEST['FOR_CODIGO'];
$sql = "delete from tb_fornecedor where FOR_CODIGO = '$id'";
mysqli_query($con, $sql) or die ("Erro na sqli");
header("Location: consulta_fornecedor.php");


?>