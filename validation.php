<?php 
$adresse = "multiversu8@gmail.com"; 

$TO = $adresse; 
$head = "From: ".$adresse."\n"; 
$head .= "X-Sender: <".$adresse.">\n"; 
$head .= "X-Mailer: PHP\n"; 
$head .= "Return-Path: <".$adresse.">\n"; 
$head .= "Content-Type: text/plain; charset=iso-8859-1\n"; 
$sujet = "Formulaire formation DREAMWEAVER CC"; 
$informations = " 
Civilité: ".$_POST['Civilite']." \r\n
Nom: ".$_POST['Nom']." \r\n 
Prénom: ".$_POST['Prenom']." \r\n 
Sports: ".$_POST['Sport']." \r\n 
Niveau: ".$_POST['Niveau-sport']."\r\n 
Email du formulaire: ".$_POST['email']." \r\n 
Message: ".$_POST['Message']." \r\n 
"; 
$res = mail($TO, $sujet ,$informations, $head); 
Header("Location: http://127.0.0.1:50563/preview/app/index.html" ); 
  
?> 