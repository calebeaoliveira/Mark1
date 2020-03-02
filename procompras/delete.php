<?php
require_once('../conexao/banco.php');

$id = $_REQUEST['PCO_CODIGO'];
$sql = "delete from tb_procompras where PCO_CODIGO = '$id'";
mysqli_query($con, $sql) or die ("Erro na sqli");
header("Location: consulta_procompras.php");


?>