<?php

$host = "sql312.infinityfree.com";
$dbname = "if0_XXXXXXX_facultymanagement";
$username = "if0_XXXXXXX";
$password = "YOUR_PASSWORD";

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