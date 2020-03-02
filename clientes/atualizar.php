<?php
require_once('../conexao/banco.php');

$id = $_REQUEST['txt_codigo'];
$nome = $_REQUEST['txt_nome'];
$email = $_REQUEST['txt_email'];
$email2 = $_REQUEST['txt_email2'];
$endereco = $_REQUEST['txt_endereco'];
$numero = $_REQUEST['txt_numero'];
$complemento = $_REQUEST['txt_complemento'];
$bairro = $_REQUEST['txt_bairro'];
$uf = $_REQUEST['sel_uf'];
$cidade = $_REQUEST['txt_cidade'];
$telefone = $_REQUEST['txt_telefone'];
$sexo = $_REQUEST['sel_sexo'];

$sql = "update tb_clientes set CLI_NOME='$nome',CLI_EMAIL='$email',CLI_ENDERECO='$endereco',CLI_NUMERO='$numero',CLI_COMPLEMENTO='$complemento',
CLI_BAIRRO='$bairro',CLI_UF='$uf',CLI_CIDADE='$cidade',CLI_TELEFONE='$telefone',CLI_SEXO='$sexo' where CLI_CODIGO='$id'";
mysqli_query($con, $sql) or die ("Erro na qsl!");
header("Location: consulta_cliente.php");

?>