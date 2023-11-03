<?php
require '../Core/databaseconnection.php'; // Include the database connection code

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Authenticate the user against the database
    $query = $pdo->prepare("SELECT * FROM loginform WHERE username = ?");
    $query ->bindParam(1,$username);
    $query -> execute();

    // Fetch the result as an associative array
    $query_result = $query->fetch(PDO::FETCH_ASSOC);

    // Check if a user with the given username exists
    if($query_result){
    // Compare the submitted password with the stored password
        if($query_result['password']===$password){
            echo "Login sucessfully";
        } else{
            echo "Invalid username or passsword";
        }
    }else{
        echo "Invalid username or passsword";
    }


}