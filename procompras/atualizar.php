<?php
require_once('../conexao/banco.php');

$id = $_REQUEST['txt_codigo'];
$descricao = $_REQUEST['txt_descricao'];
$precocusto = $_REQUEST['txt_precocusto'];

$sql = "update tb_procompras set PCO_DESCRICAO='$descricao',PCO_PRECOCUSTO='$precocusto' where PCO_CODIGO='$id'";
mysqli_query($con, $sql) or die ("Erro na qsl!");
header("Location: consulta_procompras.php");

?>