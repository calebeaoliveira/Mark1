<?php
require_once("../conexao/banco.php");

$descricao = $_REQUEST['txt_descricao'];
$precocusto = $_REQUEST['txt_precocusto'];

$sql = "insert into tb_procompras (PCO_DESCRICAO,PCO_PRECOCUSTO)
values ('$descricao', '$precocusto')";

mysqli_query($con, $sql) or die ("Erro na sql!");

header ("Location: consulta_procompras.php");

?>