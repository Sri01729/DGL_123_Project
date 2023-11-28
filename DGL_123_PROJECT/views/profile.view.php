<?php
$requestUri = $_SERVER['REQUEST_URI'];

// Find the position of "/DGL_123_PROJECT/" in the request URI
$position = strpos($requestUri, "/DGL_123_PROJECT/");

if ($position !== false) {
    // Extract "/DGL_123_PROJECT/" and everything after it
    $extractedPath = substr($requestUri, $position, strlen("/DGL_123_PROJECT/"));

    // Assign the extracted path
    $proj_root = $extractedPath;
} else {
    // "/DGL_123_PROJECT/" not found in the request URI
    echo "Not found";
}
?>

<div class="profile">
    <main>
        <h1>Set up profile</h1>
        <form action="<?php echo $proj_root; ?>Models/profiledata.php" method="post">
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