<?php
require_once("../conexao/banco.php");

$codigo = $_REQUEST['txt_codigo'];
$produto = $_REQUEST['sel_produto'];
$qtde = $_REQUEST['txt_qtde'];
$vrunitario = $_REQUEST['txt_vrunitario'];


$sql = "insert into tb_itenscompras (COM_CODIGO,PCO_CODIGO,ITC_QTDE,ITC_VRUNITARIO)
values ('$codigo','$produto','$qtde','$vrunitario')";


mysqli_query($con, $sql) or die ("Erro na sql!");


header ("Location: compra.php");

?>
