<?php
require_once('../conexao/banco.php');

function retorna($sel_produto, $con){
	$result_valor = "SELECT PRO_PRECOVENDA FROM tb_produtos WHERE PRO_CODIGO = '$sel_produto'";
	$resultado_valor = mysqli_query($con, $result_valor);
	if($resultado_valor->num_rows){
		$row_valor = mysqli_fetch_assoc($resultado_valor);
		$valores['sel_produto'] = $row_valor['PRO_PRECOVENDA'];
	}else{
		$valores['sel_produto'] = 'Erro';
	}
	return json_encode($valores);
}

if(isset($_REQUEST['sel_produto'])){
	echo retorna($_REQUEST['sel_produto'], $con);
}
?>