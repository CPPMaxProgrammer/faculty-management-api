<?php

$host = "mysql.railway.internal";
$dbname = "railway";
$username = "root";
$password = "dcZtchEGxZFCiWjsNxlSmDATMyYGYKOd";

try
{
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8",
        $username,
        $password
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    die(json_encode([
        "success" => false,
        "message" => $e->getMessage()
    ]));
}