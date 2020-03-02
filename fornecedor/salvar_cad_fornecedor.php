<?php
require_once("../conexao/banco.php");
if(isset($_POST['ciente'])) {

$nome = $_REQUEST['txt_nome'];
$cnpj = $_REQUEST['txt_cnpj'];
$telefone = $_REQUEST['txt_telefone'];
$observacao = $_REQUEST['txt_observacao'];

$sql = "insert into tb_fornecedor (FOR_NOME,FOR_CNPJ,FOR_TELEFONE,FOR_OBSERVACAO)
values ('$nome', '$cnpj','$telefone','$observacao')";

mysqli_query($con, $sql) or die ("Erro na sql!");

header ("Location: consulta_fornecedor.php");
}

else {
	?>
	<script type="text/javascript">
	alert("Marque a opção de ciente!");
	location.href='cadastro_fornecedor.php';
	</script>
	
<?php

	}
?>