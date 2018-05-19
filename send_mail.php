<?php

if(isset($_POST['submit'])){
    $mailto = $_POST['lgrparg@gmail.com'];
    $mailSub = $_POST['Pedido'] . 'de' . $_POST['mail_n'];
    $mailMsg = 'Nombre: '.$_POST['mail_n'].'\n'.'E-mail: '.$_POST['mail_e'].'\n'.'Documento: '.$_POST['mail_i'].'\n'.'Direccion: '.$_POST['mail_d'].'\n'.$_POST['mail_msg'];
   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "confiteria.se@gmail.com";
   $mail ->Password = "confiteria123";
   $mail ->SetFrom("confiteria.se@gmail.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);


   if(!$mail->Send())
   {
    header("Location: /santaelena/pedido.php?m=f");
    exit();
   }
   else
   {
    header("Location: /santaelena/pedido.php?m=s");
    exit();
   }
}

else {
    header("Location: /santaelena");
    exit();
}




   

