<?php
require_once("conexion.php");

$Ulogin = $_GET['GetID'];
$query = " SELECT * FROM usuario WHERE login='".$Ulogin."'";
$result = mysqli_query($con,$query);

while($row=mysqli_fetch_assoc($result))
{
	$Ulogin = $row['login'];
	$Unombre = $row['nombre'];
	$Uclave = $row['clave'];
	$Umail = $row['mail'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Editar Registro</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body class="bg-dark">
	<div class="row">
		<div class="col-lg-6 m-auto">
			<div class="card-title">
				<h3 class="bg-success text-white text-center py-3">Actualizar Formulario en PHP</h3>
			</div>

			<div class="card-body">
				<form action="actualiza.php?ID=<?php echo $Ulogin ?>" method="post">
					<input type="text" class="form-control mb-2" name="nombre" value="<?php echo $Unombre ?>">
					<input type="text" class="form-control mb-2" name="clave" value="<?php echo $Uclave ?>">
					<input type="text" class="form-control mb-2" name="mail" value="<?php echo $Umail ?>">

					<button class="btn btn-primary" name="update">Actualizar</button>

				</form>
			</div>
		</div>
	</div>
	
</body>
</html>
