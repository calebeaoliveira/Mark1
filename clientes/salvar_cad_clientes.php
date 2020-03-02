<?php
require_once("../conexao/banco.php");
if(isset($_POST['ciente'])) {

$nome = $_REQUEST['txt_nome'];
$email = $_REQUEST['txt_email'];
$endereco = $_REQUEST['txt_endereco'];
$numero = $_REQUEST['txt_numero'];
$complemento = $_REQUEST['txt_complemento'];
$bairro = $_REQUEST['txt_bairro'];
$uf = $_REQUEST['sel_uf'];
$cidade = $_REQUEST['txt_cidade'];
$telefone = $_REQUEST['txt_telefone'];
$sexo = $_REQUEST['sel_sexo'];

$sql = "insert into tb_clientes (CLI_NOME,CLI_EMAIL,CLI_ENDERECO,CLI_NUMERO,CLI_COMPLEMENTO,CLI_BAIRRO,CLI_UF,CLI_CIDADE,CLI_TELEFONE,CLI_SEXO)
values ('$nome', '$email','$endereco','$numero','$complemento','$bairro','$uf','$cidade','$telefone', '$sexo')";

mysqli_query($con, $sql) or die ("Erro na sql!");

header ("Location: consulta_cliente.php");
}

else {
	?>
	<script type="text/javascript">
	alert("Marque a opção de ciente!");
	location.href='cadastro_clientes.php';
	</script>
	
<?php

	}
?>