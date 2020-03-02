<?php
require_once('../conexao/banco.php');

$id = $_REQUEST['ID'];
$codigo = $_REQUEST['cardapio'];
$sql = "delete from tb_itenscardapio
where ICP_CODIGO = '$id' and CDP_CODIGO='$codigo'";
mysqli_query($con, $sql) or die ("Erro na sqli");
header("Location: cardapio.php");


?>