<?php
$type     = 'mysql';
$server   = 'localhost';
$db       = 'database_name';
$port     = '8800';
$charset  = 'utf8mb4';
$username = 'username';
$password = 'password';


$dsn = "$type:host=$server;dbname=$db;port=$port;charset=$charset";
try {
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), $e->getCode());
}