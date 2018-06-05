<?php
//Include database configuration file
include('dbConfig.php');

if(isset($_POST["categoria_id"]) && !empty($_POST["categoria_id"])){
    //Get all producto data
    $query = $db->query("SELECT * FROM productos WHERE id_categoria = ".$_POST['categoria_id']." ORDER BY nombre ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display productos list
    if($rowCount > 0){
        echo '<option value="">Seleccione producto</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['id_producto'].'" name="'.$row['nombre'].'">'.$row['nombre'].'</option>';
        }
    }else{
        echo '<option value="">--</option>';
    }
}

if(isset($_POST["producto_id"]) && !empty($_POST["producto_id"])){
    //Get all precio data
    $query = $db->query("SELECT * FROM precio WHERE id_producto = ".$_POST['producto_id']." ");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display cities list
    if($rowCount > 0){
        while($row = $query->fetch_assoc()){ 
            echo '<label id="prec" value="'.$row['precio'].'">'.$row['precio'].'</label>';
        }
    }else{
        echo '<label value="">N/A</label>';
    }
}
?>