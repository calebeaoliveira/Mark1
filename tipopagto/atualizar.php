<?php
require_once('../conexao/banco.php');

$id = $_REQUEST['txt_codigo'];
$descricao = $_REQUEST['txt_descricao'];

$sql = "update tb_tipopagto set TPG_DESCRICAO='$descricao' where TPG_CODIGO='$id'";
mysqli_query($con, $sql) or die ("Erro na qsl!");
header("Location: consulta_tipopagto.php");

?>