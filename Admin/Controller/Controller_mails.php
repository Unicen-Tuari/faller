


<?php

class managment_email
{
  
private $mail;


 public function __construct()
    {

     include("./phpmailer5.2.4/class.phpmailer.php"); 
     include("./phpmailer5.2.4/class.smtp.php"); 

     $this->mail = new PHPMailer(); 
    }


private function prepara_email()
      {

             $this->mail->IsSMTP(); 
             $this->mail->SMTPAuth = true; 
             $this->mail->SMTPSecure = "ssl"; 
             $this->mail->Host = "smtp.gmail.com"; 
             $this->mail->Port = 465; 

            //$mail->Timeout = 60;
            $this->mail->Username = "franco.e.aller@gmail.com";
            $this->mail->Password = "francoaller37198533h";
             

      }

 public function enviar_mail($emisor,$reseptor,$link_reclamo,$mensaje)
         {
            //prepara el los datos smtp del mail
            $this->prepara_email();

                   $this->mail->From =$emisor ; 
                   //$this->mail->FromName = "Nombre"; 
                   $this->mail->Subject = "Reclamos municipales"; 
                   $this->mail->MsgHTML("
                      <!DOCTYPE html>
                      <html>
                      <head>
                          <title></title>
                      </head>
                      <body>
                      <h1>Reclamos municipales<h2>
                      <strong>$mensaje</strong><br>
                      <strong>Ingresa en el siguiente link para verlo.</strong>
                      <a href='localhost/entregaFinal/faller/reclamos_usuario/index.php?action=claim_spesific&claims_by_email=$link_reclamo&reclaimer=$reseptor'>link al reclamo</a>
                      <img src='http://www.laprida.gob.ar/fotos_noticias/media_18_Logo_LAPRIDA.jpg'>
                      </body>
                      </html>"); 
                  // $this->mail->AddAttachment("files/files.zip"); 
                   //$this->mail->AddAttachment("files/img03.jpg"); 
                   $this->mail->AddAddress($reseptor, "Destinatario"); 
                   $this->mail->IsHTML(true); 
                    if(! $this->mail->Send()) { 
                         echo "Error: " .  $this->mail->ErrorInfo; 
                         } else { 
                         echo "Mensaje enviado correctamente"; 
                         }
          }


}

?>
