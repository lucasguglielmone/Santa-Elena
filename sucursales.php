

<!DOCTYPE HTML>
<html>
    <?php include_once 'head.php'; ?>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<?php include_once 'nav.php'; ?>
	
	<div id="fh5co-work">
		<div class="container">
			<div class="row top-line animate-box">
				<div class="col-md-6 col-md-offset-3 col-md-push-2 text-left fh5co-heading">
					<h2>SUCURSALES</h2>
					<h3>chamuyo</a></h3>
					<p>chamuyo</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 text-center animate-box">
					<a class="work" href="portfolio_detail.html">
						<div class="work-grid" style="background-image:url(images/project-1.jpg);">
							<div class="inner">
								<div class="desc">
								<h3>Folding Light</h3>
								<span class="cat">Branding</span>
							</div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	

	<div id="fh5co-started">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Get Started</h2>
					<p>We create beautiful themes for your site behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					<p><a href="#" class="btn btn-primary">Let's work together</a></p>
				</div>
			</div>
		</div>
	</div>

	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a> &amp; <a href="http://blog.gessato.com/" target="_blank">Gessato</a></small>
					</p>
					
					<ul class="fh5co-social-icons">
						<li><a href="#"><i class="icon-twitter"></i></a></li>
						<li><a href="#"><i class="icon-facebook"></i></a></li>
						<li><a href="#"><i class="icon-linkedin"></i></a></li>
						<li><a href="#"><i class="icon-dribbble"></i></a></li>
					</ul>
				
				</div>
			</div>
		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoIa_kNxGbktlUj27zoLRKD_3v43SfZEE&callback=myMap"></script>
<script>
	function myMap() {
	  var myCenter = new google.maps.LatLng(-34.57829872638948,-58.41287702322006);
 	  var mapCanvas = document.getElementById("map");
 	  var mapOptions = {center: myCenter, zoom: 17};
	  var map = new google.maps.Map(mapCanvas, mapOptions);
	  var marker = new google.maps.Marker({position:myCenter});
	  marker.setMap(map);
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

	</body>
</html>

