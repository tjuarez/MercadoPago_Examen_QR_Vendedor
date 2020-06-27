<?php

header('Content-type: application/json');

include_once '../../global/functions.php';
global $access_token,$collector_id,$notificationJSON;


// Este servicio llama a la URL recibida en la notificación
// Para ver el estado del pago.

$lastResource = file_get_contents('../notifications.txt');







$urlP = 'http://5.175.225.39:8080/ords/pelu/AgendaWeb/mp_ecommerce';
	
$curlP = curl_init($urlP);


$temp = json_decode($lastResource);


//creo un objeto JSON con los datos a enviar al servicio web
$data = array(
	'url' => $temp->url
);

$payload = json_encode($data);

//adjunto el objeto JSON al request
curl_setopt($curlP, CURLOPT_POSTFIELDS, $payload);
curl_setopt($curlP, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

curl_setopt($curlP, CURLOPT_RETURNTRANSFER, true);
$json_textoP = curl_exec($curlP);
curl_close($curlP);






$url= $lastResource;

// REVISAR AQUÍ:
// Agrega la $url necesaria para revisar el estado del pago en base al recurso recibido de la notificación

// Sustituye el método por su correspondiente: get, put, post, delete

curl_call("get", $url, "");

 ?>