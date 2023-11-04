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

// Retrieve the user's email from the session
$userEmail = $_SESSION['user_email'];

//Update name in profile table based on the email in users table using subquery
$queryNameUpdate = $pdo->prepare("UPDATE profile
        SET name = (SELECT name FROM users WHERE email = :email)
        WHERE email = :email");


//Update data in profile table
$query = $pdo->prepare("UPDATE profile
        SET gender = :gender, height = :height, weight = :weight, age = :age, body_fat_percent = :body_fat_percent,
        WHERE email = :email");