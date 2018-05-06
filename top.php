<?php 
    if(empty($_SESSION)){
        echo '
        <nav class="top fh5co-nav">
            <form action="/controller/login.php" method="post" class="login-form">
                <div class="">
                    <input type="text" placeholder="E-mail" name="email" class="login-email">
                </div>
                <div class="">
                    <input type="password" name="password" placeholder="Contraseña" class="login-pass">
                </div>
                <input type="submit" name="submit" class="login-btn" value="Entrar">
            </form>
        </nav>';
    }
    else {
        echo '
        <nav class=top>
            <a class="register pull-right" href="controller/register.php">Register</a>
        </nav>';
    }
?>