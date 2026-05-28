<?php

header('Content-Type: application/json');

echo json_encode([
    "success" => true,
    "message" => "Render API working",
    "server_time" => date("Y-m-d H:i:s")
]);