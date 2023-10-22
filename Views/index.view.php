<?php include 'header.view.php'; ?>

<main>
    <div class="wrapper">
        <form action="">
            <img src="../assets/images/SAIKYO.png">
            <div class="input-box">
                <input type="text" placeholder="username" required>
                <i class="bx bxs-user"></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="password" required>
                <i class="bx bxs-lock-alt"></i>
            </div>
            <div class="remember">
                <label><input type="checkbox">Remember Me</label>
                <a href="#">Forget password?</a>
            </div>
            <input type="submit" class="btn" value="Login">
            <div class="register">
                <p>Don't have an account ? </p>
                <a href="signup.php"> Register</a>
            </div>
        </form>
    </div>
</main>

<?php include 'footer.view.php'; ?>