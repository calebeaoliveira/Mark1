<?php
require_once("../conexao/banco.php");

$codigo = $_REQUEST['txt_codigo'];
$produto = $_REQUEST['sel_produto'];
$qtde = $_REQUEST['txt_qtde'];
$vrunitario = $_REQUEST['txt_vrunitario'];


$sql = "insert into tb_itensvenda (VEN_CODIGO,PRO_CODIGO,ITV_QTDE,ITV_VRUNITARIO)
values ('$codigo','$produto','$qtde','$vrunitario')";


mysqli_query($con, $sql) or die ("Erro na sql!");


header ("Location: vendas.php");

?>
