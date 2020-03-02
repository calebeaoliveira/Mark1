<?PHP

session_start();

require_once("conexao/banco.php");

$usuario = $_REQUEST['txt_usuario'];
$senha   = $_REQUEST['txt_senha'];

$sql = "select  
			LOG_LOGIN, 
			LOG_SENHA 
		from tb_login 
		where LOG_LOGIN = '$usuario' 
		and LOG_SENHA = '$senha'";

$sql2 = "select  
			LOG_NOME 
		from tb_login 
		where LOG_LOGIN = '$usuario' 
		and LOG_SENHA = '$senha'";
		



$sql = mysqli_query($con, $sql) or die ("Erro na sql!") ;
$sql2 = mysqli_query($con, $sql2) or die ("Erro na sql!") ;

$total = mysqli_num_rows($sql);
$array=mysqli_fetch_array($sql2);

if ($total == 1) {

	$_SESSION["usuario"] = $usuario;
	$_SESSION["senha"] = $senha;
	$_SESSION["login"] = $array['LOG_NOME'];
	header("Location: dashboard/dashboard.php");
	
} else {
	header("Location: acesso_negado.php");
}

?>




