<?php include 'header.view.php'; ?>

<main>
    <div class="wrapper">
        <form action="">
            <img src="assets/images/SAIKYO.png">
            <div class="input-box">
                <input type="text" placeholder="Name" required>
                <i class="bx bxs-user"></i>
            </div>
            <div class="input-box">
                <input type="email" placeholder="Email" required>
                <i class="bx bxs-user"></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="password" required>
                <i class="bx bxs-lock-alt"></i>
            </div>
            <a href="profile.html"><input type="submit" class="btn" value="signup" style="margin-top: 15px;"></a>
            <div class="register">
                <p>Have an account ? </p>
                <a href="index.html">Login now</a>
            </div>
        </form>
    </div>
</main>

<?php include 'footer.view.php'; ?>