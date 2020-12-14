<?php
require_once("conexion.php");
$query = " SELECT * FROM usuario ";
$result = mysqli_query($con,$query);
?>

<?php require_once('header.php'); ?>

<div class="container">
	
	<div  class="row">
		<div class="card mt-5">
			<table class="table table-bordered">
				<tr>
					<td>LOGIN</td>
					<td>NOMBRE</td>
					<td>CLAVE</td>
					<td>MAIL</td>
					<td>Editar</td>
					<td>Eliminar</td>
				</tr>

				<?php
				while($row=mysqli_fetch_assoc($result))
				{
					$Ulogin = $row['login'];
					$Unombre = $row['nombre'];
					$Uclave = $row['clave'];
					$Umail = $row['mail'];

				?>
				<tr>
					<td> <?php echo $Ulogin ?> </td>
					<td> <?php echo $Unombre ?> </td>
					<td> <?php echo $Uclave ?> </td>
					<td> <?php echo $Umail ?> </td>
<td> <button class="btn-primary btn"><a href="editar.php?GetID=<?php echo $Ulogin ?>" class="text-white">Editar</a></button> </td>
<td> <button class="btn-danger btn"><a href="borrar.php?Del=<?php echo $Ulogin ?>" class="text-white">Eliminar</a></button>
				</tr>	
				<?php
				}
				?>

			</table>
		</div>
	</div>

</div>

<?php require_once('footer.php'); ?>

</body>
</html>