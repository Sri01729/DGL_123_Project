<?php
require '../Core/databaseconnection.php'; // Include the database connection code

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Authenticate the user against the database
    $query = $pdo->prepare("SELECT * FROM loginform WHERE username = ?");
    $query ->bindParam(1,$username);
    $query -> execute();
    $query_result = $query->fetch(PDO::FETCH_ASSOC);

    if($query_result){
        if($query_result['password']===$password){
            echo "Login sucessfully";
        } else{
            echo "Invalid username or passsword";
        }
    }


}