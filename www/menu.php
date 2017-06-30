<!DOCTYPE html>
	<?php 
		include ("html/head.html");
	?>

<body style="background-image: url('img/gray_sand.png'); background-size:initial;">

	<header>
		<div class="contenedor">
			<div class="logo">
				<?php	include ("html/header.html"); ?>
			</div>
			<nav  class="menu">
				<ul>
					<li><a href="#menu_boneless">BONELESS</a></li>
					<li><a href="#menu_alitas">ALITAS</a></li>
					<li><a href="#menu_salsas">SALSAS</a></li>
					<li><a href="#menu_burger">HABURGUESAS</a></li>
					<li><a href="#">BEBIDAS</a></li>
					<li><a href="#">COMPLEMENTOS</a></li>
				</ul>
			</nav>
		</div>
	</header>	
	
	<div class ="container-fluid">
		<div class="row" style="background-image: url('img/food1.jpg'); height: 400PX; background-size:100%; background-position: top; ">			
			<br>
			<center> <h1 style="color: Black;">MENU</h1></center>			
		</div>
	
		<br><br>	

		
		<div class="row row_menu" id="menu_boneless">
			<center> <h1 style="color: white;"> BONELESS</h1></center>
			<center>
				<div style="width: 80%; background-image: url('img/menu/boneless.jpg'); height: 500PX; background-size:100%; background-position: center;" />
			</center>
			<center> <!--Precios-->
				<div class="columns">
					<ul class="price">
						<li>
							<h1>4 BONELESS</h1>
							<span style="color: white;"> 8 riquisimas alitas bañadas en cualquiera de nuestras salsas</span>
						</li>
						<li class="grey">$ 40.99</li>
					</ul>
				</div>
				<div class="columns">
					<ul class="price">
						<li>
							<h1>8 BONELESS</h1>
							<span style="color: white;"> 8 riquisimas alitas bañadas en cualquiera de nuestras salsas</span>
						</li>
						<li class="grey">$ 70.99</li>
					</ul>
				</div>
				<div class="columns">
					<ul class="price">
						<li>
							<h1>12 BONELESS</h1>
							<span style="color: white;"> 8 riquisimas alitas bañadas en cualquiera de nuestras salsas</span>
						</li>
						<li class="grey">$ 90.99</li>
					</ul>
				</div>
				<div class="columns">
					<ul class="price">
						<li>
							<h1>22 BONELESS</h1>
							<span style="color: white;"> 8 riquisimas alitas bañadas en cualquiera de nuestras salsas</span>
						</li>
						<li class="grey">$ 120.99</li>
					</ul>
				</div>
				<div class="columns">
					<ul class="price">
						<li>
							<h1>30 BONELESS</h1>
							<span style="color: white;"> 8 riquisimas alitas bañadas en cualquiera de nuestras salsas</span>
						</li>
						<li class="grey">$ 200.99</li>
					</ul>
				</div>
			</center>
			
		</div>
		
		<div class="row row_menu" id="menu_alitas">
			<center> <h1 style="color: white;"> ALITAS</h1></center>
			<center>
				<div style="width: 80%; background-image: url('img/food3.jpg'); height: 500PX; background-size:100%; background-position: center;" />
			</center>
			
			<center> <!--Precios-->
				<div class="columns">
					<ul class="price">
						<li>
							<h1>4 ALITAS</h1>
							<span style="color: white;"> 8 riquisimas alitas bañadas en cualquiera de nuestras salsas</span>
						</li>
						<li class="grey">$ 70.99</li>
					</ul>
				</div>
				<div class="columns">
					<ul class="price">
						<li>
							<h1>8 ALITAS</h1>
							<span style="color: white;"> 8 riquisimas alitas bañadas en cualquiera de nuestras salsas</span>
						</li>
						<li class="grey">$ 70.99</li>
					</ul>
				</div>
				<div class="columns">
					<ul class="price">
						<li>
							<h1>12 ALITAS</h1>
							<span style="color: white;"> 8 riquisimas alitas bañadas en cualquiera de nuestras salsas</span>
						</li>
						<li class="grey">$ 70.99</li>
					</ul>
				</div>
			</center>
		</div>
				
		<div class="row row_menu" id="menu_salsas" style="background-color:#f0f0f0; margin-top: 30px; padding-bottom: 40px;">
			<center> <h1 style="color: black;"> SAlSAS</h1></center>
			<table>
				<tr>
				<td style="width: 60%;">
					<center>
						<img src="img/menu/salsas.jpg"  style="position: relative;  height:auto;  width:70%;" />				
					</center>
				</td>
				<td style="width: 30%;">
					<div>
						<center>
							<h1> Buffalo</h1>
						</center>
						<center>
							<img src="img/menu/flame.svg">
							<img src="img/menu/flame.svg">
							<img src="img/menu/flame.svg">
						</center>	
					</div>
								
				</td>
			  </tr>
			</table>
			
			
			
			
		</div>
		
		<div class="row row_menu" id="menu_burger">
			<center> <h1 style="color: white;"> HAMBURGUESAS</h1></center>
			<center>
				<div style="width: 80%; background-image: url('img/menu/burger.jpg'); height: 500PX; background-size:100%; background-position: center;" />
			</center>
			
			<center> <!--Precios-->
				<div class="columns">
					<ul class="price">
						<li>
							<h1>Infantil</h1>
							<span style="color: white;"> 8 riquisimas alitas bañadas en cualquiera de nuestras salsas</span>
						</li>
						<li class="grey">$ 70.99</li>
					</ul>
				</div>
				<div class="columns">
					<ul class="price">
						<li>
							<h1>Sencilla</h1>
							<span style="color: white;">
								Papas<br>
								Queso Amarillo<br>
								Cebolla Especial<br>
								Aderezos
							</span>
						</li>
						<li class="grey">$ 70.99</li>
					</ul>
				</div>
				<div class="columns">
					<ul class="price">
						<li>
							<h1>Doble</h1>
							<span style="color: white;"> Papas<br>Queso Amariollo<br>Cebolla Especial<br>Aderezos</span>
						</li>
						<li class="grey">$ 70.99</li>
					</ul>
				</div>
				<div class="columns">
					<ul class="price">
						<li>
							<h1>Terracita</h1>
							<span style="color: white;">
								350 Gr de Carne Rellena de Queso Oaxaca<br>
								Aguacate<br>
								Cebolla Especial<br>
								Doble Queso Amarillo<br>
								1 Orden de Papas
							</span>
						</li>
						<li class="grey">$ 70.99</li>
					</ul>
				</div>
				<div class="columns">
							<ul class="price">
								<li>
									<h1>Terracita Suprema</h1>
									<span style="color: white;">
										Aros de Cebolla<br>
										BBQ<br>
										Ordenes De Papas<br>
										Queso amarillo<br>
										Aderezos
									</span>
								</li>
								<li class="grey">$ 70.99</li>
							</ul>
					</div>
			</center>
		</div>
		
		<br><br><br><br><br>			
	</div>
	<?php include ("html/botonIrArriba.html"); ?>
	
	
	<script>
		$(document).ready(function(){
		var altura = $('.menu').offset().top;
		
		$(window).on('scroll', function(){
			if ( $(window).scrollTop() > altura ){
				$('.menu').addClass('menu-fixed');
			} else {
				$('.menu').removeClass('menu-fixed');
			}
		});
	 
	});
	</script>
	<script type="text/javascript" src="js/jquery.js"> </script>
	<script type="text/javascript" src="js/bootstrap.min.js" </script>
	
</body>

</html>