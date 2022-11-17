<?php
$to = "info@carboland.cz";
$extra = "Od: ".$_POST['email']."\r\nReply-To: ".$_POST['email']."\r\n";
$subject = "Zpráva od ".$_POST['jmeno']."";
$mess = "Jméno a Příjmení: ".$_POST['jmeno']."\nE-mail: ".$_POST['email']."\nTelefon: ".$_POST['telefon']."\nPředmět: ".$_POST['predmet']."\nZpráva:\n".$_POST['text']."";
mail ($to, $subject, $mess, $extra);
?>
<html><head>
<meta http-equiv="refresh" content="0; url=request#contact">
<title>Přesměrování...</title>
</head><body></body></html>