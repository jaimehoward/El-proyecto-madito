<?php
	include('config/conexion.php');
?>
<!DOCTYPE html>
<html>
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

		<h1>HISTORIAL</h1>

			<table id="maldito">
				<thead>
					<tr>
						<th style="width: 6%;">Código</th>
						<th style="width: 15%;">Usuario</th>
						<th style="width: 20%;">Producto</th>
						<th style="width: 15%;">Fecha</th>
						<th style="width: 9%;">Estado</th>
						<th style="width: 12%;">Dirección</th>
						<th>Teléfono</th>
						<th style="width: 6%;">Opciones</th>
					</tr>
				</thead>				
				<tbody>
					<?php
							$sql="SELECT ped.*,usu.*,pro.*,
							CASE WHEN ped.estado=2
							THEN 'Por pagar'
							ELSE 
								CASE WHEN ped.estado=3
									THEN 'Por entregar'
									ELSE
									CASE WHEN ped.estado=5
										THEN 'Entregado'
										ELSE 'Otro'
									END
								END
							END estadotexto, ped.estado estadoped
							from pedido ped
							inner  join users usu
							on ped.user_id=usu.unique_id
							inner  join producto pro
							on ped.codpro=pro.codpro
							where ped.estado=5";
						$resultado=mysqli_query($con,$sql);
						while ($row=mysqli_fetch_array($resultado)) {
							echo 
					'<tr>
						<td style="text-align: center;" id="rosa">'.$row['codped'].'</td>
						<td>'.$row['unique_id'].' - '.$row['fname'].'</td>
						<td id="rosa">'.$row['codpro'].' - '.$row['nompro'].'</td>
						<td style="text-align: center;">'.$row['fecped'].'</td>
						<td id="rosa" style="text-align: center;">'.$row['estadotexto'].'</td>
						<td>'.$row['dirusuped'].'</td>
						<td id="rosa">'.$row['telusuped'].'</td>';
                        if ($row['estadoped']==5) {
							echo
						'<td class="td-option">
							<button onclick="revert('.$row['codped'].')">Revertir</button>
						</td>';	
						}
						echo
					'</tr>';
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
		function revert(codped){
			let fd=new FormData();
			fd.append('codped',codped);
			let request=new XMLHttpRequest();
			request.open('POST','api/revert.php',true);
			request.onload=function(){
				if (request.readyState==4 && request.status==200) {
					let response=JSON.parse(request.responseText);
					console.log(response);
					if (response.state) {
						window.location.reload();
					}else{
						alert(response.detail);
					}
				}
			}
			request.send(fd);
		}
	</script>
</body>
</html>