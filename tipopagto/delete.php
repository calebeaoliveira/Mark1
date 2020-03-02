<?php
require_once('../conexao/banco.php');

$id = $_REQUEST['TPG_CODIGO'];
$sql = "delete from tb_tipopagto where TPG_CODIGO = '$id'";
mysqli_query($con, $sql) or die ("Erro na sqli");
header("Location: consulta_tipopagto.php");


?>