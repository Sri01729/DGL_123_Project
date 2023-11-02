<?php
require '../Core/databaseconnection.php'; // Include the database connection code



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get signup form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

}

// Insert the user's data into the database
$insertUser = $pdo->prepare('INSERT INTO users (name, email, password) VALUES (:name, :email, :password)');
$insertUser->execute(array(
    ':name' => $name,
    ':email' => $email,
    ':password' => $password
));


?>
