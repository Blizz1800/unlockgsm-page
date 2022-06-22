<head>
	<title>UnlockGSM</title>
</head>
<body><center>
	<table border="2px">
		<?php
			include("conexion.php");
			$consulta = mysqli_query($conexion, "SELECT * FROM `pedidos`");
			echo "<tr>
			<td> ID </td>
			<td> Nombre </td>
			<td> Telefono </td>
			<td> Tipo de Pieza </td>
			<td> Dinero (CUP) </td>
			<td> Vendido </td>
			<td> Fecha de Entrada </td>
			<td> Fecha de Salida </td>
			</tr>
			";
			while ($result = mysqli_fetch_array($consulta)){
				//$TABLE_ID = "<tr><td>".$result['ID']."</td>";
				//$TABLE_NAME = "<td>".$result['Nombre']."</td>";
				echo "<tr>";
				for($i = 0; $i<8; $i++){
				if($i!=5) {
					echo "<td>".$result[$i]."</td>";
				}else{
					echo $result[$i]==0? "<td>No</td>":"<td>Si</td>";
				}
					
				}
				echo "</tr>";
				//echo $TABLE_ID;
				//echo $TABLE_NAME;
				
			}
			
		?>
	</table></center>
</body>