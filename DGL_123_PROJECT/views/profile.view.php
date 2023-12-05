<?php
require_once '../config.php';
$actionPath = $proj_root . "Models/profiledata.php";
?>
<div class="profile">
    <main>
        <h1>Set up profile</h1>
        <div class="tooltip">
            <div class="tooltip_message">
                <p> About profile page</p>
            </div>
            <span class="tooltiptext">
                Your profile serves as the central hub for storing essential body data throughout your fitness journey. This is where you can conveniently update your personal details at any time.</span>
        </div>
        <form action="<?php echo $actionPath ?>" method="post">
            <div class="form-group">
                <label class="radio-label">Gender:</label>
                <div class="radio-group">
                    <label><input type="radio" name="gender" value="male"> Male</label>
                    <label><input type="radio" name="gender" value="female"> Female</label>
                    <label><input type="radio" name="gender" value="other"> Other</label>
                </div>
            </div>

            <div class="container">
                <div class="form-group">
                    <label>Height (cm):</label>
                    <input type="number" name="height" required>
                </div>
                <div class="form-group">
                    <label>Weight (kg):</label>
                    <input type="number" name="weight" required>
                </div>
                <div class="form-group">
                    <label>Age:</label>
                    <input type="number" name="age" required>
                </div>
            </div>
            <div class="container">
                <div class="form-group">
                    <label>Body Fat Percentage:</label>
                    <input type="number" name="bodyfat">
                </div>
                <div class="form-group" id="bmiButton">
                    <button type="button" id="calculateBMI" class="bmibutton">Calculate BMI</button>
                    <input type="number" name="bmi" id="bmiResult" readonly>
                </div>
            </div>
            <button type="submit" name="profile" value="profileCreate" class="submit-button">SUBMIT</button>
        </form>
    </main>
    <script src="redirect.js"></script>