<?php

$con = mysqli_connect("localhost","root","","tcc");

if (mysqli_connect_errno())	{
	echo "Falha ao se conectar ao MySQL: " . mysqli_connect_errno(); }
else {
	mysqli_select_db($con,"tcc");
}
?>