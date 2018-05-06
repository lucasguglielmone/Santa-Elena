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
              To : <input type="text" name="mail_to"> <br/>
              Subject :   <input type="text" name="mail_sub">
              <br/>
              Message   <input type="text" name="mail_msg">
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