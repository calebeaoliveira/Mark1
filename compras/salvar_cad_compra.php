<?php
require_once("../conexao/banco.php");

//$id = $_REQUEST['COM_CODIGO'];
$fornecedor = $_REQUEST['sel_fornecedor'];
$tipopagto = $_REQUEST['sel_tipopagto'];
$obs = $_REQUEST['txt_obs'];


$sql = "insert into tb_compras (FOR_CODIGO,TPG_CODIGO,COM_OBSERVACAO)
values ('$fornecedor','$tipopagto','$obs')";


mysqli_query($con, $sql) or die ("Erro na sql!");

header ("Location: compra.php");

?>