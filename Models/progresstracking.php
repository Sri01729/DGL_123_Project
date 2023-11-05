<?php
// Start a session
session_start();
require '../Core/databaseconnection.php'; // Include the database connection code


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get progress form data
    $date = $_POST['date'];
    $shoulders = $_POST['shoulders'];
    $neck = $_POST['neck'];
    $forearms  = $_POST['forearms'];
    $bust  = $_POST['bust'];
    $chest  = $_POST['chest'];
    $rightThigh  = $_POST['rightThigh'];
    $leftThigh  = $_POST['leftThigh'];
    $rightBicep  = $_POST['rightBicep'];
    $leftBicep  = $_POST['leftBicep'];
}