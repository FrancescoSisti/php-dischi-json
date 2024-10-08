<?php
$json_file = file_get_contents('API/dischi.json');
// $dischi = json_decode($json_file, true);
echo $json_file;
header('Content-Type: application/json');
