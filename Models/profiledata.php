<?php
require '../Core/databaseconnection.php'; // Include the database connection code

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get profile form data
    $gender = $_POST['gender'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $age = $_POST['age'];
    $bodyfat = $_POST['bodyfat'];
}

//Update name in profile table based on the email in users table
$query -> $pdo -> prepare("UPDATE profile AS p
JOIN users AS u ON p.email = u.email
SET p.name = u.name;
");

//Update data in profile table
$query = $pdo->prepare("UPDATE profile
        SET gender = :gender, height = :height, weight = :weight, age = :age, body_fat_percent = :body_fat_percent,
        WHERE name = :name");