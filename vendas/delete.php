<?php
require_once('../conexao/banco.php');

$id = $_REQUEST['ID'];
$codigo = $_REQUEST['venda'];
$sql = "delete from tb_itensvenda
where ITV_CODIGO = '$id' and VEN_CODIGO='$codigo'";
mysqli_query($con, $sql) or die ("Erro na sqli");
header("Location: vendas.php");


?>