<?php
require_once("../conexao/banco.php");

$codigo = $_REQUEST['txt_codigo'];
$total = $_REQUEST['txt_totalcompra'];

$totalfinalizado = explode(" ", $total);
$totalfinalizado = $totalfinalizado[1];


$sql = "UPDATE tb_compras SET COM_VALOR='$totalfinalizado' WHERE COM_CODIGO='$codigo'";
$sql=mysqli_query($con, $sql) or die ("Erro na sql! sql");

header ("Location:precompra.php");

?>