<!DOCTYPE html>
	<?php 
		include ("html/head.html");
	?>

<body style="background-image: url('img/fond.jpg');">

	<?php
		include ("html/header.html");
		include("html/socialMediaScripts.html");
	?>

	<div class ="container-fluid ">

		<div class="row" >
			<div id="carousel-example" class="carousel slide" data-ride="carousel" >

		  		<ol class="carousel-indicators">
			    	<li data-target="#carousel-example" data-slide-to="0" class="active"></li>
			    	<li data-target="#carousel-example" data-slide-to="1"></li>
			    	<li data-target="#carousel-example" data-slide-to="2"></li>
			    	<li data-target="#carousel-example" data-slide-to="3"></li>
			    	<li data-target="#carousel-example" data-slide-to="4"></li>
			    	<li data-target="#carousel-example" data-slide-to="5"></li>
			    	<li data-target="#carousel-example" data-slide-to="6"></li>
			  	</ol>

			  	<div class="carousel-inner" >
			    	<div class="item active">
			      	<a href="#"><img src="img/food1.1.jpg" class="imageCenter" /></a>
			      	<div class="carousel-caption">
			        	<h3>Food1</h3>			        	
			        	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			        	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			        	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			        	consequat. </p>
			      	</div>
			    </div>			    

			    <div class="item">
			      	<a href="#"><img src="img/food2.jpg" class="imageCenter"/></a>
			      	<div class="carousel-caption">
			        	<h3>Food2</h3>			        	
			      	</div>
			    </div>
			    <div class="item">
			      	<a href="#"><img src="img/food3.jpg" class="imageCenter"/></a>
			      	<div class="carousel-caption">
			        	<h3>Food3</h3>			        	
			      	</div>
			    </div>
			    <div class="item">
			      	<a href="#"><img src="img/food4.jpg" class="imageCenter"/></a>
			      	<div class="carousel-caption">
			        	<h3>Food4</h3>			        	
			      	</div>
			    </div>
			    <div class="item">
			      	<a href="#"><img src="img/food5.jpg" class="imageCenter"/></a>
			      	<div class="carousel-caption">
			        	<h3>Food5</h3>			        	
			      	</div>
			    </div>
			    <div class="item">
			      	<a href="#"><img src="img/food6.jpg" class="imageCenter"/></a>
			      	<div class="carousel-caption">
			        	<h3>Food6</h3>			        	
			      	</div>
			    </div>
		  	</div>

			  		<a class="left carousel-control" href="#carousel-example" data-slide="prev">
			    		<span class="glyphicon glyphicon-chevron-left"></span>
			  		</a>
			  		<a class="right carousel-control" href="#carousel-example" data-slide="next">
			    		<span class="glyphicon glyphicon-chevron-right"></span>
			  		</a>
			</div>
		</div>	
				
		
		<div class="row">
			<!--- Mapa-->
			<div id="map" />

			<script type="text/javascript" src="js/maps.js"></script>

		    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDU45J78q1n4M37Pk44zR1O28I9oFFa5nE&callback=initMap" ></script>
		</div>

		
		<div class="row" style="background-image: url('img/pizarra.jpg'); background-position: center; height: 180PX;">			

			<center> <h1 style="color: white;">CONECTATE CON NOSOTROS</h1></center>
			<br>			
			<Center>
				<div id="inner">
					<span class="socialbtn"><a href="https://twitter.com/chava1793" class="twitter-follow-button" data-show-count="true" data-size="large" data-show-screen-name="false">Follow</a></span>
					<span>º</span>
					<span class="fb-like socialbtn" data-href="https://www.facebook.com/Pixel-Bite-208477135860114/" data-layout="button_count" data-action="like" data-size="large" data-show-faces="false" data-share="false"></span>
					<span>º</span>
					<span class="g-ytsubscribe socialbtn" data-channel="4089268ch" data-layout="default" data-count="default"></span>
				</div>
			</Center>				
					
		</div>

		
		
		<div class="row" style="background-image: url('img/grillFire.jpg'); background-position: bottom; height: 700PX;">			
			<br><br>			
			<center> <h1 style="color: white;">HISTORIA</h1></center>
			<br>
					
			<center><div style="width: 70%;">
			<p style="font-size: 18px; font-weight: bold; color: white;" >
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				<br><br>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. 
			</p>	
			</div>
			</center>		
			
		</div>
		
		<div class="row" style="background-image: url('img/cork-wallet.png'); height: 700PX;">			
			<br><br>
			<center> <h1 style="color: gray;">HACERCA DE </h1></center>
			<center><div style="width: 70%;">
			<br>
			<p style="font-size: 18px; font-weight: bold; color: gray;" >
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				<br>
				<br>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. 
			</p>	
			</div>
			</center>
			
		</div>
		
				
		<?php include ("html/botonIrArriba.html"); ?>	
		
	</div>

		<script type="text/javascript" src="js/jquery.js"> </script>
		<script type="text/javascript" src="js/bootstrap.min.js" </script>
</body>

</html>