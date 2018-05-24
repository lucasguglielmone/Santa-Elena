<?php

include_once 'controller/dbConnect.php';
include_once 'head.php';
include_once 'nav.php';

?>
<?php if(isset($_GET['c'])) {
    if($_GET['c']=='s') { /* Catering Salado */?>
    <body style="margin-top:120px;">
        <div class="col-md-12"><h1 style="text-align:center;margin-bottom:30px;">Catering Salado</h1></div>
        <div class="col-md-3"></div>
        <div class="col-md-2">Categoria 1</div>
        <div class="col-md-2">Categoria 2</div>
        <div class="col-md-2">Categoria 3</div>
        <div class="col-md-3"></div>
    </body>
    <?php } elseif($_GET['c']=='d') { /* Catering Dulce*/?>
    <body style="margin-top:120px;">
        <div class="col-md-12"><h1 style="text-align:center;margin-bottom:30px;">Catering Dulce</h1></div>
        <div class="col-md-3"></div>
        <div class="col-md-2">Categoria 1</div>
        <div class="col-md-2">Categoria 2</div>
        <div class="col-md-2">Categoria 3</div>
        <div class="col-md-3"></div>
    </body>
<?php }} else {?>
<body style="margin-top:120px;">
    <div class="col-md-3"></div>
    <div class="col-md-2">Categoria 1</div>
    <div class="col-md-2">Categoria 2</div>
    <div class="col-md-2">Categoria 3</div>
    <div class="col-md-3"></div>
</body>
<?php } ?>