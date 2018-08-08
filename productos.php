<?php

include_once 'controller/dbConnect.php';
include_once 'head.php';
include_once 'nav.php';

if(isset($_GET['c'])) {
    $ds = $_GET['c'];
    if($ds==1 || $ds==2){
        $productos = mysqli_query($conn, "SELECT * FROM productos INNER JOIN precio ON productos.id_producto = precio.id_producto WHERE dulosal = '$ds' ;");
    } else {
        header("Location: /santaelena");
        exit();
    }
} else {
    header("Location: /santaelena");
    exit();
}
?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style type="text/css"></style>	
<!------ Include the above in your HEAD tag ---------->

<div class="container table-prod">
    <div class="row">
        <div class="col-md-3 imgs">
            <img src="./images/ph/Pic1.jpeg" alt="catering" height="150" width="280" class="imgp">
            <img src="./images/ph/Pic2.jpeg" alt="catering" height="150" width="280" class="imgp">
            <img src="./images/ph/Pic3.jpeg" alt="catering" height="150" width="280" class="imgp">
            <img src="./images/ph/Pic4.jpeg" alt="catering" height="150" width="280" class="imgp">
            <img src="./images/ph/Pic6.jpeg" alt="catering" height="150" width="280" class="imgp">
        </div>
        <div class="col-md-9">
        <?php 
            if($_GET['c']==1) { /* Catering Salado  INNER JOIN categorias ON productos.categoria = categorias.idcategoria*/?>
                <div class="col-md-12"><h1 style="text-align:center;margin-bottom:30px;">Catering Salado</h1></div>
            <?php } elseif($_GET['c']==2) { /* Catering Dulce*/?>
                <div class="col-md-12"><h1 style="text-align:center;margin-bottom:30px;">Catering Dulce</h1></div>
        <?php } ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>
                            Producto
                        </th>
                        <th>
                            Precio
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($producto = mysqli_fetch_assoc($productos)){
                            echo '<tr class="active">';
                            echo '<th class="producto">'.$producto['nombre'].'</th>';
                            echo '<th class="producto">$'.$producto['precio'].'</th>';
                            echo '</tr>';

                            $producto = mysqli_fetch_assoc($productos);
                            if(isset($producto)){
                                echo '<tr class="">';
                                echo '<th class="producto">'.$producto['nombre'].'</th>';
                                echo '<th class="producto">$'.$producto['precio'].'</th>';
                                echo '</tr>';}
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
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

