<?php
// conexion al Servidor MySQL - Servidor, usuario de la BD, contraseña, nombre de la BD
$con = mysqli_connect('localhost','root','','gestion12');

if(mysqli_connect_errno()){
	echo 'Conexión Fallida : '.mysqli_connect_error();
	exit();
}
?>