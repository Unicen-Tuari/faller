<?php
include("Controller_mails.php");
$mandar_e= new managment_email();

$emisor="franco.e.aller@gmail.com";
$reseptor="franco.e.aller@gmail.com";
$mensaje="Tu reclamo ha avanzado.";
$link_al_reclamo="5";
$mandar_e->enviar_mail($emisor,$reseptor,$link_al_reclamo,$mensaje);

 ?>