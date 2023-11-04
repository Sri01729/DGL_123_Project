<?php
require '../Core/databaseconnection.php'; // Include the database connection code

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

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

            header('Location: ../Controllers/profile.php');
            exit();

        } else{
            echo "Invalid email or passsword";
        }
    }else{
        echo "Invalid email or passsword";
    }


}