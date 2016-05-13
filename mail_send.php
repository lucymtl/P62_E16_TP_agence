<?php

function pegaValor($valor) {
	return isset($_POST[$valor]) ? $_POST[$valor] : '';
}

function validaEmail($email) {
	return filter_var($email, FILTER_VALIDATE_EMAIL);
}
function enviaEmail($de, $assunto, $message, $para, $email_servidor) {
	$headers = "From: $email_servidor\r\n" .
		"Reply-To: $de\r\n" .
		"X-Mailer: PHP/" . phpversion() . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	mail($para, $assunto, nl2br($message), $headers);
}
$nom = "Votre Nom";
$email_servidor = "email@servidor.com";
$para = "edermlacerda@gmail.com";
$de = pegaValor("email");
$message = pegaValor("message");
$tel=pegaValor("tel");
$adresse=pegaValor("adresse");
$choix_forfait=pegaValor("choix_forfait");
$date=pegaValor("date");
$assunto = "Assunto da message";

if ($nom && validaEmail($de) && $message) {
	enviaEmail($de, $assunto, $message, $para, $email_servidor,$tel,$adresse,$choix_forfait);
	$pagina = "mail_ok.php";
} else {
	$pagina = "mail_error.php";
}

header("location:$pagina");

?>
