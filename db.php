<?php

header('Content-Type: application/json');

try {

    $pdo = new PDO(
        "mysql:host=yamabiko.proxy.rlwy.net;port=22613;dbname=railway",
        "root",
        "dcZtchEGxZFCiWjsNxlSmDATMyYGYKOd"
    );

    echo json_encode([
        "success" => true,
        "message" => "Railway database connected",
        "server_time" => date("Y-m-d H:i:s")
    ]);

}
catch(PDOException $e)
{
    echo json_encode([
        "success" => false,
        "message" => $e->getMessage()
    ]);
}