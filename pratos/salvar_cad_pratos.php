<?php
require_once("../conexao/banco.php");

$descricao = $_REQUEST['txt_descricao'];

$sql = "insert into tb_pratos (PRA_DESCRICAO) values ('$descricao')";
//echo $sql;
$sql = mysqli_query($con, $sql) or die ("Erro na sql!");

header ("Location: consulta_pratos.php");

?>