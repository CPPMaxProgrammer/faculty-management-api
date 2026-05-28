<?php

header('Content-Type: application/json');

require 'db.php';

echo json_encode([
    "success" => true,
    "message" => "Render API + MySQL works",
    "server_time" => date("Y-m-d H:i:s")
]);