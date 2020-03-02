<?php
require_once('../conexao/banco.php');

$id = $_REQUEST['txt_codigo'];
$descricao = $_REQUEST['txt_descricao'];
$precovenda = $_REQUEST['txt_precovenda'];

$sql = "update tb_produtos set PRO_DESCRICAO='$descricao',PRO_PRECOVENDA='$precovenda' where PRO_CODIGO='$id'";
mysqli_query($con, $sql) or die ("Erro na qsl!");
header("Location: consulta_produtos.php");

?>