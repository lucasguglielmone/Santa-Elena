<?php


?>
<?php include_once 'head.php' ?>
<?php include_once 'nav.php' ?>
<!------ Include the above in your HEAD tag ---------->
<style>
body {font-family: Arial, Helvetica, sans-serif;}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

.boton {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.boton:hover  {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
}
h4{
  color: red;
}

legend{
  font-size: 40;
}

</style>

<div class="container" style="margin-top:10%; margin-bottom: 3%;">
	<div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
          <form class="form-horizontal" action="send_mail.php" method="post">
            <fieldset>
              
              <legend class="text-center">HACÉ TU PEDIDO</legend>

              <h4 id="ate">Recuerda que debe ser realizado 48hs antes.</h4>
              <h5 id="ate">Complete los campos con *</h5>
              
                Nombre y Apellido *
                <input type="text" id="nombre" placeholder="Santa Elena">
                Direccion *
                <input type="text" id="direccion" placeholder="Lafinur 3245">
                Telefono *
                <input type="text" id="telefono" placeholder="011 4802-3848">
                Fecha de Entrega *
                <input type="text" id="entrega" placeholder="Jueves 2 de Mayo">

                <select id="categoria">
                  <option value="Tortas">Tortas</option>
                  <option value="Traviatas">Traviatas</option>
                  <option value="Trensitas">Trensitas</option>
                  <option value="Portenitos">Portenitos</option>
                  <option value="Plexales">Plexales</option>
                </select>

                <select id="producto">
                    <option value="Lemon Pie">Lemon Pie</option>
                    <option value="Vithel tone">Vithel tone</option>
                    <option value="Jamon crudo y queso">Jamon crudo y queso</option>
                    <option value="Leverbush y pepino">Leverbush y pepino</option>
                    <option value="Pastron y pepino">Pastron y pepino</option>
                </select>

                <input type="text" id="cantidad"  placeholder="Cantidad" style="width: 50%;"> 
                c/u $<input type="text" id="precio" disabled="" placeholder="--" value="40" style="width: 15%;">

              <button type="button" class="boton" onclick="agregar();">AGREGAR</button>

              <textarea id="pedido" style=" height:25%; resize: none;" disabled="">PEDIDO:</textarea>

              <textarea id="comentarios" style=" height:15%; resize: none;" placeholder="COMENTARIOS:
              Ej: Sandwich de milanesa sin tomate."></textarea>

              Total: $ <input type="text" id="total" disabled="" value="0">

            </fieldset>
          </form>
        </div>
        <input type="submit" class="boton"  value="Hacer Pedido">
      </div>
	</div>
</div>
 <footer id="fh5co-footer" style="height:20px;" role="contentinfo">
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
<script> 
  function agregar()
  {
    var cat = document.getElementById("categoria").value;
    var prod = document.getElementById("producto").value;
    var cant = document.getElementById("cantidad").value;
    var precio = document.getElementById("precio").value;
    var total = document.getElementById("total").value;
    var subtotal = precio * cant;
    total = +total + +subtotal;
    document.getElementById('pedido').value += ("\r * " + prod + " - Cantidad: " + cant + " - $ " + subtotal);
    document.getElementById('total').value = total;
    document.getElementById('cantidad').value = "";
    document.getElementById('precio').value = "";


  }
</script>