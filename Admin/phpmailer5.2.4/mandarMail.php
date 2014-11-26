
<?php

 include("class.phpmailer.php");
 include("class.smtp.php");

 $mail = new PHPMailer();
 $mail->IsSMTP();
 $mail->SMTPAuth = true;
 $mail->SMTPSecure = "ssl";
 $mail->Host = "mail.qwavee.com";//comentar por el de google
 $mail->Port = 465;
 /*
  $mail->SMTPSecure = "tls";
 $mail->Host = "smtp.gmail.com";
 $mail->Port = 587;

 
 $mail->Username = "franco.e.aller@gmail.com";
 $mail->Password = "francoaller37198533";
 */

 $mail->Timeout = 60;
 $mail->Username = "diego@qwavee.com";
 $mail->Password = "Diego221";




 $mail->From = "diego@qwavee.com";
 $mail->FromName = "Fran";
 $mail->Subject = "Asunto del Email";
 $mail->AltBody = "lalasalsdasdasdasdasdas";
 $mail->MsgHTML("<b>Este es un mensaje de prueba</b>.");
 //$mail->AddAttachment("files/files.zip");
 //$mail->AddAttachment("files/img03.jpg");
 //$mail->AddAddress("franco.e.aller@gmail.com", "Destinatario");
 for ($i=0;$i<20;$i++)
 $mail->AddAddress("perez.hgr@gmail.com", "Destinatario");
 $mail->IsHTML(true);
 if(!$mail->Send()) {
 echo "Error: " . $mail->ErrorInfo;
 die("aaaaaaaaaaaaaaaaaaaa");
 } else {
echo "Mensaje enviado correctamente";
 }


?>
