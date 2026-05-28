<?php

$host = "sql102.infinityfree.com";
$dbname = "if0_42024963_facultymanagement";
$username = "if0_42024963";
$password = "4NmTH4mcJLt";

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