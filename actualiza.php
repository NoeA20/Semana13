<?php
require_once("conexion.php");

if(isset($_POST['update']))
{
	$Ulogin = $_GET['ID'];
	$Unombre = $_POST['nombre'];
	$Uclave = $_POST['clave'];
	$Umail = $_POST['mail'];

	$query = " UPDATE usuario SET nombre = '".$Unombre."', clave = '".$Uclave."', mail = '".$Umail."' WHERE login = '".$Ulogin."'";

	$result = mysqli_query($con, $query);

	if($result)
	{
		header("location:visualizar.php");
	}
	else
	{
		echo " Por favor revisa la consulta";
	}
}
else{
	header("location:visualizar.php");
}