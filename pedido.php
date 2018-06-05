<?php include_once 'head.php';
      include_once 'nav.php' ;
    include('dbConfig.php');
    
    //Get all categoria data
    $query = $db->query("SELECT * FROM categorias ORDER BY nombre ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;

?>
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


    <select name="categoria" id="categoria" >
        <option value="">Seleccione categoria</option>
        <?php
        if($rowCount > 0){
            while($row = $query->fetch_assoc()){ 
                echo '<option value="'.$row['id_categoria'].'">'.$row['nombre'].'</option>';
            }
        }else{
            echo '<option value="">--</option>';
        }
        ?>
    </select>
    
    <select name="producto" id="producto">
        <option value="">Elija su producto</option>
    </select>
    
    


                <input type="text" id="cantidad"  placeholder="Cantidad" style="width: 50%;"> 
                c/u $

                <label name="precio" id="precio" value="">--</label>

                <!--<input type="text" id="prec" disabled="" placeholder="--" value="40" style="width: 15%;">-->

              <button type="button" class="boton" onclick="agregar();" id="addProdcut">AGREGAR</button>

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

<script src="jquery.min.js"></script>

<script type="text/javascript"> 

  function agregar()
  {
    var cat = document.getElementById("categoria").value;
    var prod = document.getElementById('producto').options[document.getElementById('producto').selectedIndex].text;;
    var cant = document.getElementById("cantidad").value;
    alert(cant);
    var precio = document.getElementById("prec").value;
    var total = document.getElementById("total").value;
    var subtotal = +precio * cant;
    total = +total + +subtotal;
    document.getElementById('pedido').value += ("\r * " + prod + " - Cantidad: " + cant + " - $ " + subtotal);
    document.getElementById('total').value = total;
    document.getElementById('cantidad').value = "";
    document.getElementById('precio').value = "";


  }
</script>
    <script src="jquery.min.js"></script>
    <script type="text/javascript">
$(document).ready(function(){
    $('#categoria').on('change',function(){
        var categoriaID = $(this).val();
        if(categoriaID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'categoria_id='+categoriaID,
                success:function(html){
                    $('#producto').html(html);
                    $('#precio').html('<option value="">--</option>'); 
                }
            }); 
        }else{
            $('#producto').html('<option value="">--</option>');
            $('#precio').html('<option value="">--</option>'); 
        }
    });
    
    $('#producto').on('change',function(){
        var productoID = $(this).val();
        if(productoID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'producto_id='+productoID,
                success:function(html){
                    $('#precio').html(html);
                }
            }); 
        }else{
            $('#precio').html('<option value="">--</option>'); 
        }
    });
});
</script>