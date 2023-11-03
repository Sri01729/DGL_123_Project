<?php include 'header.view.php'; ?>

<main>
    <div class="wrapper">
        <form action="../Models/loginauthentication.php" method="POST">
            <img src="../assets/images/SAIKYO.png">
            <div class="input-box">
                <input type="text" placeholder="username" name="username"required>
                <i class="bx bxs-user"></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="password" name="password" required>
                <i class="bx bxs-lock-alt"></i>
            </div>
            <div class="remember">
                <label><input type="checkbox">Remember Me</label>
                <a href="#">Forget password?</a>
            </div>
            <button class="btn">Login</button>
            <div class="register">
                <p>Don't have an account ? </p>
                <a href="../Controllers/signup.php"> Register</a>
            </div>
        </form>
    </div>
</main>

<?php include 'footer.view.php'; ?>