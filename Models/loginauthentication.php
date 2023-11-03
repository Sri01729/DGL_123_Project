<?php
require '../Core/databaseconnection.php'; // Include the database connection code

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Authenticate the user against the database
    $query = $pdo->prepare("SELECT * FROM loginform WHERE username = ?");
    $query->execute([$username]);
    $login = $query->fetch();


if($login && password_verify($password, $login['password'])){

    header('Location: ../Controllers/profile.php');

}else
{
    echo "Username or Password is invald";
}
}