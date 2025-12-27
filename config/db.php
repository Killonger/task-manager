<?php
$host = "localhost";
$db   = "task_manager";
$user = "root";
$pass = "";

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$db;charset=utf8",
        $user,
        $pass
    );
} catch (PDOException $e) {
    die("Database connection failed");
}
