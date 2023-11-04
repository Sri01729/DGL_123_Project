<?php
// Start a session
session_start();

require '../Core/databaseconnection.php'; // Include the database connection code

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // set the user's email in a session variable
    $_SESSION['user_email'] = $email;

    // Authenticate the user against the database
    $query = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $query ->bindParam(1,$email);
    $query -> execute();

    // Fetch the result as an associative array
    $query_result = $query->fetch(PDO::FETCH_ASSOC);

    // Check if a user with the given email exists
    if($query_result){
    // Compare the submitted password with the stored password
        if($query_result['password']===$password){

            // Set the user's email in a session variable
            $_SESSION['user_email'] = $email;

            // Insert the email into the profile table
            $insertQuery = $pdo->prepare("INSERT INTO profile (email) VALUES (?)");
            $insertQuery->execute([$email]);

            header('Location: ../Controllers/profile.php');
            exit();

        } else{
            echo "Invalid email or passsword";
        }
    }else{
        echo "Invalid email or passsword";
    }


}