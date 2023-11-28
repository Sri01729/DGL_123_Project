<?php
//configuration variable
$proj_root = "/DGL_123_PROJECT/";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $proj_root; ?>assets/style.css">
</head>

<body>
    <header>
        <h2 class="logo">SAIKYO</h2>
        <nav class="navigation">
            <a href="<?php echo $proj_root; ?>Controllers/profile.php">Home</a>
            <a href="<?php echo $proj_root; ?>Controllers/progresstracking.php">Progress Tracking</a>
            <a href="<?php echo $proj_root; ?>Controllers/nutritiontracking.php">Nutrition Tracking</a>
            <a href="#">About us</a>
            <a href="#">Contact us</a>
            <a href="<?php echo $proj_root; ?>index.php"><button class="btnLogin-popup">Login</button></a>
        </nav>
    </header>