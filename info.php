<?php

$array = [
    "server_ip" => $_SERVER['SERVER_ADDR'],
    "server_name" => gethostbyaddr($_SERVER['SERVER_ADDR']),
];
echo json_encode($array);
?>