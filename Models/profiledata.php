<?php
// Start a session
session_start();
require '../Core/databaseconnection.php'; // Include the database connection code


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get profile form data
    $gender = $_POST['gender'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $age = $_POST['age'];
    $bodyFat = $_POST['bodyfat'];
}

// Retrieve the user's email from the session
if (isset($_SESSION['user_email'])) {
$userEmail = $_SESSION['user_email'];


//Update name in profile table based on the email in users table using subquery
$queryNameUpdate = $pdo->prepare("UPDATE profile
        JOIN users ON profile.email = users.email
        SET profile.name = IFNULL(users.name, 'Default Name')
        WHERE profile.email = :email");

$queryNameUpdate->bindParam(':email', $userEmail);

// Execute the name update query
$nameUpdated = $queryNameUpdate->execute();


//Update data in profile table
$query = $pdo->prepare("UPDATE profile
    SET gender = :gender, height = :height, weight = :weight, age = :age, body_fat_percent = :body_fat_percent
    WHERE email = :email");

// Bind the values for the profile update
$query->bindParam(':gender', $gender);
$query->bindParam(':height', $height);
$query->bindParam(':weight', $weight);
$query->bindParam(':age', $age);
$query->bindParam(':body_fat_percent', $bodyFat);
$query->bindParam(':email', $userEmail);

//Execute the profile update query
$profileUpdated = $query->execute();



if ($profileUpdated ) {
    echo "Profile updated successfully!";

} else {
    echo "Error updating profile or name.";
}

} else{
    echo "User email not found";
}