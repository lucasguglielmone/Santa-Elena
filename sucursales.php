

<!DOCTYPE HTML>
<html>
    <?php include_once 'head.php'; ?>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<?php include_once 'nav.php'; ?>
	
	<div id="fh5co-work">
		<div class="container" >

			<div class="row ">
				<div class="col-md-4 animate-box">
					<a class="work" >
						<div class="work-grid" id="googleMap1"></div>
					</a>
				</div>
				
				<div class="col-md-8 animate-box">
					<a class="work" >
						<h3><strong>ANABELLA</strong></h3>
						<h4>Direccion: <h5>Av. Cerviño 3379</h5></h3>
						<h4>Telefono: <h5>	011 4801-8350</h5></h3>
						<h4>Horarios: <h5>Lunes a Viernes de 6hs a 22hs</h5><h5>Sabado y Domingo de 7hs a 21hs</h5></h4>
					</a>
				</div>
			</div>
			
			<br>

			<div class="row">
				<div class="col-md-4 animate-box">
					<a class="work" >
						<div class="work-grid" id="googleMap2"></div>
					</a>
				</div>
				
				<div class="col-md-8 animate-box">
					<a class="work" >
						<br>
						<h3><strong>SANTA ELENA</strong></h3>
						<h4>Direccion: <h5>Lafinur 3245</h5></h3>
						<h4>Telefono: <h5>011 4802-3848</h5></h3>
						<h4>Horarios: <h5>Lunes a Domingo de 6hs a 21hs</h5></h4>
					</a>
				</div>
			</div>

			<br>

			<div class="row">
				<div class="col-md-4 animate-box">
					<a class="work" >
						<div class="work-grid" id="googleMap3"></div>
					</a>
				</div>
				
				<div class="col-md-8 animate-box">
					<a class="work" >
						<br>
						<h3><strong>SANTA ELENA</strong></h3>
						<h4>Direccion: <h5>Darregueyra 2488</h5></h3>
						<h4>Telefono: <h5>011 4773-0158</h5></h3>
						<h4>Horarios: <h5>Lunes a Domingo de 6:15hs a 21hs</h5></h4>
					</a>
				</div>
			</div>
		
		</div>
	</div>
	

	<div id="fh5co-started">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>HACE TU PEDIDO DE CATERING</h2>
					<p>Ofrecemos el mejor serivio de catering, recordá que tu pedido debe realizarse con 2 dias de anticipación.</p>
					<p><a href="pedido.php" class="btn btn-primary">ORDENAR AHORA</a></p>
				</div>
			</div>
		</div>
	</div>

	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2018 Santa Elena. Todos los derechos reservados.</small> 
						<small class="block">Designed by <a href="http://cegeinc.com/" target="_blank">CeGeInc.com</a></small>
					</p>					
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>
    
<script>
	function myMap() {
	
	var anabella= {
	    center:new google.maps.LatLng(-34.58085, -58.406816),
	    zoom:19,
	};

	var santaelena1= {
	    center:new google.maps.LatLng(-34.578203, -58.412737),
	    zoom:18,
	};

	var santaelena2= {
	    center:new google.maps.LatLng(-34.579924, -58.42385),
	    zoom:19,
	};

	var map1=new google.maps.Map(document.getElementById("googleMap1"),anabella);
	var map2=new google.maps.Map(document.getElementById("googleMap2"),santaelena1);
	var map3=new google.maps.Map(document.getElementById("googleMap3"),santaelena2)

	}



</script>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
	<!-- Google Maps -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFubt1TgQ52X7D-mpX1IZehePH4qa3pxw&callback=myMap"></script>
	</body>
</html>

