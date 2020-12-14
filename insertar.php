<?php
require_once('header.php');
$con = mysqli_connect('localhost','root','','gestion12');

$Ulogin = $_POST['login'];
$Unombre = $_POST['nombre'];
$Uclave = $_POST['clave'];
$Umail = $_POST['mail'];

$sql = " INSERT INTO usuario (login,nombre,clave,mail) VALUES ('$Ulogin','$Unombre','$Uclave','$Umail')";

//mysqli_query($con,$sql);

if (mysqli_query($con,$sql))
{
	echo "Nuevo Registro Creado correctamente";
} else {
	echo "ERROR: ".$sql."<br>".mysqli_error($con);
}
?>