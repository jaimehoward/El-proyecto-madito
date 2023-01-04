<?php
	include('config/conexion.php');
?>
<!DOCTYPE html>
<html>
<head>
<head>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/index2.css">
    <link rel="stylesheet" type="text/css" href="../css/queries.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title>Aromatic - Panel de control</title>
</head>
<body>

		<?php include("layout/_directorios.php"); ?>

		<div id="main-container">

		<h1 id="tit">PANEL DE CONTROL</h1>

		<div id="tabla">

		<div id="row">
		<h1>USUARIO</h1>
		<input class="bar" id="searchbar" onkeyup="search_animal()" type="text" name="search" placeholder="Buscar un usuario"></li>
		</div>

			<table id="maldito">
				<thead>
					<tr>
						<th style="text-align: center; width: 10%;">Codigo</th>
						<th style="text-align: center; width: 15%">ID</th>
						<th style="text-align: center;">Nombre</th>
						<th style="text-align: center; width: 20%">Apellido</th>
						<th style="text-align: center; width: 20%">email</th>
						<th style="text-align: center; width: 3%" class="td-option">Opciones</th>
					</tr>
				</thead>				
				<tbody>
					<?php
						$sql="SELECT * from users";
						$resultado=mysqli_query($con,$sql);
						while ($row=mysqli_fetch_array($resultado)) {
							echo 
					'<tr>
						<td class="gorod"; style="text-align: center;" id="rosa">'.$row['user_id'].'</td>
						<td class="krovi"; style="padding-left: 10px">'.$row['unique_id'].'</td>
						<td class="animals"; style="padding-left: 10px" id="rosa">'.$row['fname'].'</td>
						<td class="der"; style="padding-left: 10px">'.$row['lname'].'</td>
						<td class="sendra"; style="padding-left: 10px">'.$row['email'].'</td>
						<td class="zetsubo"; style="padding-left: 11px" id="rosa" class="td-option">
							<div class="revelation"; style="margin-right: 0%;" class="div-flex div-td-button">
								<button class="nuketon"; id="minib" onclick="delete_usuario('.$row['unique_id'].')"><i class="fa fa-trash" aria-hidden="true"></i></button>
							</div>
						</td>
					</tr>';
						}
					?>
				</tbody>
			</table>
		</div>
	</div>

	<?php include("footer3.php"); ?>

	<script type="text/javascript">
		function show_modal(id){
			document.getElementById(id).style.display="block";
		}
		function hide_modal(id){
			document.getElementById(id).style.display="none";
		}
		function delete_usuario(user_id){
			var c=confirm("Estas seguro de eliminar el producto de codigo "+user_id+"?");
			if (c) {
				<?php
				$sql= "delete from users where user_id=$user_id";
				$result=mysqli_query($con,$sql);
				?>
			}
		}

	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<script src="animals.js"></script>
</body>
</html>