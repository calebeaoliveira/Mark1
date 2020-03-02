<?php
require_once('../conexao/banco.php');

$id = $_REQUEST['ID'];
$sql = "delete from tb_itenscardapio 
where CDP_CODIGO='$id'";
mysqli_query($con, $sql) or die ("Erro na sqli");

$sql = "delete from tb_cardapio 
where CDP_CODIGO='$id'";
mysqli_query($con, $sql) or die ("Erro na sqli");
header("Location: consulta.php");


?>