<?php
require_once('../conexao/banco.php');

$id = $_REQUEST['ID'];
$codigo = $_REQUEST['compra'];
$sql = "delete from tb_itenscompra
where ITC_CODIGO = '$id' and COM_CODIGO='$codigo'";
mysqli_query($con, $sql) or die ("Erro na sqli");
header("Location: compra.php");


?>