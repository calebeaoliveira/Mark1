<?php
require_once("../conexao/banco.php");

$descricao = $_REQUEST['txt_descricao'];
$precovenda = $_REQUEST['txt_precovenda'];

$sql = "insert into tb_produtos (PRO_DESCRICAO,PRO_PRECOVENDA)
values ('$descricao','$precovenda')";

mysqli_query($con, $sql) or die ("Erro na sql!");

header ("Location: consulta_produtos.php");

?>