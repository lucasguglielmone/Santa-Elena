<?php


?>
<?php include_once 'head.php' ?>
<?php include_once 'nav.php' ?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container" style="margin-top:100px;">
	<div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
          <form class="form-horizontal" action="send_mail.php" method="post">
          <fieldset>
            <legend class="text-center">Hace tu pedido</legend>
            <form method="post" action="send_mail.php">
              Nombre y Apellido: <input type="text" name="mail_n"> <br/>
              Direccion :   <input type="text" name="mail_d">
              Documento :   <input type="text" name="mail_i">
              E-mail :      <input type="text" name="mail_e">
              <br/>
              Pedido:   <textarea rows="6" cols="81" placeholder="Pedido .." name="mail_msg"></textarea>
              <br/>
              <input type="submit" value="Send Email">
            </form>
          </fieldset>
          </form>
        </div>
      </div>
	</div>
</div>
</div>