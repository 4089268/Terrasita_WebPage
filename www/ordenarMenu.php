<!DOCTYPE html>
<head>
	<TITLE>Terrasita</TITLE>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body">

	<div class ="container-fluid">
		<header>
			<center><a href="index.php" ><img src="img/logo.png" height="100" /></a></center>
		</header>
		<hr>

		<div style="background: #DDDDDD">
			<center><h2>PROMOCIONES</h2></center>
			<center><img src="img/food3.png" width="100%" /></center>

		</div>	
		<br>
		<div style="background: #eeeeee">
			<center><h2>COMIDA</h2></center>
			<table>
				<tr>
					<td>
						<center>Boneles</center>
						<img src="img/prom.jpg" style="width:400px; height: auto; padding: 10px">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
						<form method="post" action="DescripcionProd">
							<input type="hidden" name="tipo" value="boneles">
							<center><input type="submit" value="Agregar a la Orden" class="btn"></center>
						</form>
					</td>
					<td>
						<center>Pizza</center>
						<img src="img/food2.jpg" style="width:400px; height: auto; padding: 10px">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
						<form method="post" action="DescripcionProd">
							<input type="hidden" name="tipo" value="boneles">
							<center><input type="submit" value="Agregar a la Orden" class="btn"></center>
						</form>
					</td>
					<td>
						<center>Hamburgesa</center>
						<img src="img/food1.jpg" style="width:400px; height: auto; padding: 10px">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
						<form method="post" action="DescripcionProd">
							<input type="hidden" name="tipo" value="boneles">
							<center><input type="submit" value="Agregar a la Orden" class="btn"></center>
						</form>
					</td>
					
				</tr>
			</table>
		</div>	
		<br>
		
	</div>


</body>
</html>