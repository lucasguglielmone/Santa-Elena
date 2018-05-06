<?php
    $mailto = $_POST['mail_to'];
    $mailSub = $_POST['mail_sub'];
    $mailMsg = $_POST['mail_msg'];
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





   

