NNNN<!DOCTYPE HTML>
<html>

	<?php include_once 'head.php' ?>

	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<?php include_once 'nav.php' ?>
	<div id="fh5co-work">
		<div class="container">
			<div class="row top-line animate-box">
				<div class="col-md-12 animate-box"> <!-- col-md-push-5 -->
					<h1>DESDE 1915 OFRECIENDO LA MEJOR CALIDAD</h1>
					<h6><span class="fh5co-highlight"> <i class="icon-heart2"></i> <a >SANTA ELENA</a> </span></h6>
				</div>
				
			</div>
			<div class="row">
                <div class="registration-container">
                    <h1>Registrate</h1>
                    <hr>
                    <div class="box registration-form">
                        <form action="/santaelena/controller/register.php" method="post">
                            <div class="x12 inp">
                                <input type="text" placeholder="Nombre" name="nombre">
                            </div>
                            <div class="x12 inp">
                                <input type="text" placeholder="Apellido" name="apellido">
                            </div>
                            <div class="x12 inp">
                                <input type="text" placeholder="E-mail" name="email">
                            </div>
                            <div class="x12 inp">
                                <input type="password" placeholder="Contraseña" name="password">
                            </div>
                            <div class="x12 inp">
                                <input type="password" placeholder="Confirmar contraseña" name="password2">
                            </div>
                            <input type="submit" name="submit" class="form-btn" value="Registrarme!">
                        </form>
                    </div>
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
					<p><a href="#" class="btn btn-primary">ORDENAR AHORA</a></p>
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

