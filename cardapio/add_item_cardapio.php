<?php
require_once("../conexao/banco.php");

$codigo = $_REQUEST['txt_codigo'];
$prato = $_REQUEST['sel_item'];


$sql = "insert into tb_itenscardapio (CDP_CODIGO,PRA_CODIGO)
values ('$codigo','$prato')";


mysqli_query($con, $sql) or die ("Erro na sql!");



header ("Location: cardapio.php");

?>
