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

            // Check if the email already exists in the users table
            $checkQuery = $pdo->prepare("SELECT email FROM profile WHERE email = ?");
            $checkQuery->execute([$email]);

            // Fetch the result
            $existingEmail = $checkQuery->fetchColumn();
            if($existingEmail){
                header('Location: ../Controllers/profile.php');
                exit();
            }else{
            // Insert the email into the profile table
            $insertQueryProfile = $pdo->prepare("INSERT INTO profile (email) VALUES (?)");
            $insertQueryProfile->execute([$email]);

            // Insert the email into the progress tracking table
            $insertQueryProgress = $pdo->prepare("INSERT INTO progresstracking (email) VALUES (?)");
            $insertQueryProgress->execute([$email]);
                echo "<b>Your Login is successful</b>";
                echo "<br><br>Please wait for few seconds to redirect you to Profile page.";
                echo '<script type="text/javascript" src="../assets/redirect.js"></script>';
                echo '<script>redirectToPage("../views/profile.view.php", 3000);</script>';
            exit();
            }
        } else{
            echo "Invalid email or passsword";
        }
    }else{
        echo "Invalid email or passsword";
    }


}