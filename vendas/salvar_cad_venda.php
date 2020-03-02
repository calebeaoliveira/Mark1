<?php
require_once("../conexao/banco.php");

$id = $_REQUEST['VEN_CODIGO'];
$cliente = $_REQUEST['sel_cliente'];
$tipopagto = $_REQUEST['sel_tipopagto'];
$obs = $_REQUEST['txt_obs'];


$sql = "insert into tb_vendas (CLI_CODIGO,TPG_CODIGO,VEN_OBSERVACAO)
values ('$cliente','$tipopagto','$obs')";


mysqli_query($con, $sql) or die ("Erro na sql!");

header ("Location: vendas.php");

?>