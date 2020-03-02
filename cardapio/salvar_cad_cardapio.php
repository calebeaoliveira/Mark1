<?php
require_once("../conexao/banco.php");

$data = $_REQUEST['txt_data'];
//$data = implode("-",array_reverse(explode("/",$data)));

$sql = "insert into tb_cardapio (CDP_DATA) values ('$data')";


mysqli_query($con, $sql) or die ("Erro na sql!");

header ("Location: cardapio.php");

?>