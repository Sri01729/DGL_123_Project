<?php
require '../Core/databaseconnection.php'; // Include the database connection code



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get signup form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];



// Check if the email already exists in the users table
$checkQuery = $pdo->prepare("SELECT email FROM users WHERE email = ?");
$checkQuery->execute([$email]);

// Fetch the result
$existingEmail = $checkQuery->fetchColumn();

if ($existingEmail) {

    echo " email already exists please choose a different email";
} else {
// Insert the user's data into the database
$insertUser = $pdo->prepare('INSERT INTO users (name, email, password) VALUES (:name, :email, :password)');
$insertUser->execute(array(
    ':name' => $name,
    ':email' => $email,
    ':password' => $password
));

        // Redirect to the profile page after successful signup
        echo "<b>Your registration is successful</b>";
        echo "<br><br>Please wait for few seconds to redirect you to login page.";
        echo '<script type="text/javascript" src="../assets/redirect.js"></script>';
        echo '<script>redirectToPage("../views/index.view.php", 3000);</script>';

exit();
}
}
?>
