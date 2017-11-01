<?php

require_once('connection.php');

$json_data = file_get_contents('usuarios.json');
$data = json_decode($json_data, true);

$stmt = $db->prepare('INSERT INTO json values');

?>
