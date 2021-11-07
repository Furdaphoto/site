[PHP]<?php
// indirizzo di chi riceve la mail è sottolineato ma nel codice non sottilineatelo
if ((trim($_POST['object']) != "") && (trim($_POST['body']) != "")) { //questo fa si che se i campi "oggetto" e "messaggio" sono vuoti la form non invia nessuna mail
$to = " \n info@furdaphoto.com   //Indirizzo e-mail protetto dal bots spam , deve abilitare Javascript per vederlo ";
$headers = "From: " . $_POST['email'] . "\n";
// soggetto della mail
$subject = "Modulo proveniente da www.tuosito.it";

// corpo messaggio
$body = "Contenuto del modulo:\n\n";

$body .= "Inviata da: " . trim(stripslashes($_POST["email"])) . "\n"; //indirizzo e-mail che manda la mail, come si vede riprende l'id del campo destinato all'inserimento della mail del mittente

$body .= "Oggetto: " . trim(stripslashes($_POST["subject"])) . "\n"; //oggetto del messaggio
$body .= "testo: " . trim(stripslashes($_POST["message"])) . "\n"; //messaggio

// invio mail
mail($to, $subject, $message, $headers); // SE L'INOLTRO E' ANDATO A BUON FINE...

echo "La mail è stata inviata con successo. Grazie per averci contattato";

} else {// altrimenti
echo "Deve compilare la form prima di inviare.";

}

?>
[/PHP]