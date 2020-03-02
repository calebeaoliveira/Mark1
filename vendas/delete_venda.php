<?php
require_once('../conexao/banco.php');

$id = $_REQUEST['ID'];
$sql = "delete from tb_itensvenda 
where VEN_CODIGO='$id'";
mysqli_query($con, $sql) or die ("Erro na sqli");

$sql = "delete from tb_vendas 
where VEN_CODIGO='$id'";
mysqli_query($con, $sql) or die ("Erro na sqli");
header("Location: consulta.php");


?>