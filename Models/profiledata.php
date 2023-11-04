<?php
require '../Core/databaseconnection.php'; // Include the database connection code

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get profile form data
    $gender = $_POST['gender'];
    $height = $_POST['name'];
    $weight = $_POST['weight'];
    $age = $_POST['age'];
    $bodyfat = $_POST['bodyfat'];
}