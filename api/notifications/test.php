<?php

$urlP = 'http://5.175.225.39:8080/ords/pelu/AgendaWeb/mp_ecommerce';
	
$curlP = curl_init($urlP);

//creo un objeto JSON con los datos a enviar al servicio web
$data = array(
	'nombre' => 'tomas',
	'apellido' => 'juarez'
);
$payload = json_encode($data);

//adjunto el objeto JSON al request
curl_setopt($curlP, CURLOPT_POSTFIELDS, $payload);
curl_setopt($curlP, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

curl_setopt($curlP, CURLOPT_RETURNTRANSFER, true);
$json_textoP = curl_exec($curlP);
curl_close($curlP);

echo 'pija...';
?>