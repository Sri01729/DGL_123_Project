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


// Retrieve the user's email from the session
if (isset($_SESSION['user_email'])) {
    $userEmail = $_SESSION['user_email'];


    //Update name in progress table based on the email in users table using subquery
    $queryNameUpdate = $pdo->prepare("UPDATE progresstracking
        JOIN users ON progresstracking.email = users.email
        SET progresstracking.name = IFNULL(users.name, 'Default Name')
        WHERE progresstracking.email = :email");

    $queryNameUpdate->bindParam(':email', $userEmail);

    // Execute the name update query
    $nameUpdated = $queryNameUpdate->execute();


    //Update data in profile table
    $query = $pdo->prepare("UPDATE progresstracking
    SET date = :date, shoulders = :shoulders, neck = :neck, forearms = :forearms, bust = :bust, chest = :chest, rightThigh = :rightThigh, leftThigh = :leftThigh , rightBicep = :rightBicep, leftBicep = :leftBicep
    WHERE email = :email");

    // Bind the values for the profile update
    $query->bindParam(':date', $date);
    $query->bindParam(':', $shoulders);
    $query->bindParam(':', $neck);
    $query->bindParam(':', $forearms);
    $query->bindParam(':', $bust);
    $query->bindParam(':', $chest);
    $query->bindParam(':', $rightThigh);
    $query->bindParam(':', $leftThigh);
    $query->bindParam(':', $rightBicep);
    $query->bindParam(':', $leftBicep);

    //Execute the profile update query
    $progressTrackingUpdated = $query->execute();



    if ($progressTrackingUpdated) {
        echo "Your progress have been saved";
    } else {
        echo "Error updating progress or name.";
    }
} else {
    echo "User email not found";
}