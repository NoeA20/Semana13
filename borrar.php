<?php
require_once("conexion.php");

if(isset($_GET['Del']))
{
	$Ulogin = $_GET['Del'];

	$query = " DELETE FROM usuario WHERE login = '".$Ulogin."'";

	$result = mysqli_query($con,$query);

	if($result)
	{
		header("location:visualizar.php");
	}
	else{
		echo ' Por favor revise la consulta';
	}
}
else
{
	header("locatio:visualizar.php");
}
?>