<?php
require_once("../conexao/banco.php");

$descricao = $_REQUEST['txt_descricao'];


$sql = "insert into tb_tipopagto (tpg_descricao)
values ('$descricao')";

mysqli_query($con, $sql) or die ("Erro na sql!");

header ("Location: consulta_tipopagto.php");

?>