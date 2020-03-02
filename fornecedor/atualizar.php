<?php
require_once('../conexao/banco.php');

$id = $_REQUEST['txt_codigo'];
$nome = $_REQUEST['txt_nome'];
$cnpj = $_REQUEST['txt_cnpj'];
$telefone = $_REQUEST['txt_telefone'];
$observacao = $_REQUEST['txt_observacao'];

$sql = "update tb_fornecedor set FOR_NOME='$nome',FOR_CNPJ='$cnpj',FOR_TELEFONE='$telefone',FOR_OBSERVACAO='$observacao' where FOR_CODIGO='$id'";
mysqli_query($con, $sql) or die ("Erro na qsl!");
header("Location: consulta_fornecedor.php");

?>