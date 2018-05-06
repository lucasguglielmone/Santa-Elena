<?php

?>

<?php //include_once("top.php") ?>
<nav class="fh5co-nav" role="navigation">
    <div class="container">
        <div class="fh5co-top-logo">
            <div id="fh5co-logo"><a href="index.php">Santa Elena</a></div>
        </div>
        <div class="fh5co-top-menu menu-1 text-center">
            <ul>
                <li><a href="historia.html">Historia</a></li>
                <li><a href="pedido.php">Pedido Catering</a></li>
                <li><a href="sucursales.php">Sucursales</a></li>
                <li class="has-dropdown">
                    <a href="#">Productos</a>
                    <ul class="dropdown">
                        <li><a href="#">Catering Salado</a></li>
                        <li><a href="#">Catering Dulce</a></li>
                    </ul>
                </li>
                <!--li><a href="register.php">Registrarme!</a></li-->
            </ul>
        </div>
        <div>
            <ul>
                <?php if (!empty($_SESSION)){  
                    echo '<form action="/controller/login.php" method="post" class="login-form">
                        <div class="">
                            <input type="text" placeholder="E-mail" name="email" class="login-email">
                        </div>
                        <div class="">
                            <input type="password" name="password" placeholder="Contraseña" class="login-pass">
                        </div>
                        <input type="submit" name="submit" class="login-btn" value="Entrar">
                    </form>
                    ';}
                ?>
            </ul>
        </div>
    </div>
</nav>