<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
// Recibir el cuerpo de la petición.
$input = @file_get_contents("php://input");
// Parsear el contenido como JSON.
$eventJson = json_decode($input, true);

// Usar los datos del Webhooks para alguna acción.
//print $eventJson;
$json_pretty_string = json_encode($eventJson, JSON_PRETTY_PRINT);
error_log('test' . PHP_EOL . $json_pretty_string);

// Responder
http_response_code(200);
?>
