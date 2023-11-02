<?php
require '../Core/databaseconnection.php'; // Include the database connection code



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get signup form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

}



?>
