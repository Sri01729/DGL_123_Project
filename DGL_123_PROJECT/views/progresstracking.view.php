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
$actionPath = $proj_root . "Models/profiledata.php";
?>
<div class="progress">
    <main>
        <h1 class="progressh1">Progress Tracking</h1>
        <div class="container">

            <div class="flex-container">
                <form action="<?php echo $actionPath; ?>" method="post">
                    <div class="grid">
                        <div class="cell1">
                            <p>Body Measurements (in cms)</p>
                        </div>
                        <div class="cell">
                            <input type="date" id="date" name="date" required>
                        </div>
                        <div class="cell">
                            <input type="text" placeholder="Shoulders" id="shoulders" name="shoulders" required>
                        </div>
                        <div class="cell">
                            <input type="text" placeholder="Neck" name="neck" id="neck" required>
                        </div>
                        <div class="cell">
                            <input type="text" placeholder="Forearms" name="forearms" id="forearms" required>
                        </div>
                        <div class="cell">
                            <input type="text" placeholder="Bust" name="bust" id="bust" required>
                        </div>
                        <div class="cell">
                            <input type="text" placeholder="Chest" name="chest" id="chest" required>
                        </div>
                        <div class="cell">
                            <input type="text" placeholder="Right Thigh" name="rightThigh" id="rightThigh" required>
                        </div>
                        <div class="cell">
                            <input type="text" placeholder="Left Thigh" name="leftThigh" id="leftThigh" required>
                        </div>
                        <div class="cell">
                            <input type="text" placeholder="Right Bicep" name="rightBicep" id="rightBicep" required>
                        </div>
                        <div class="cell">
                            <input type="text" placeholder="Left Bicep" name="leftBicep" id="leftBicep" required>
                        </div>
                        <div class="cell2">
                            <button type="submit" class="submit-button">Submit</button>
                        </div>
                </form>
            </div>
            <div class="chart">
                <img src="/DGL_123_PROJECT/assets/images/bodymeasgraph.png">
            </div>
        </div>
</div>
<div class="totalmeas">
    <button id="totalButton" class="bmibutton">Total Measurements (in cms)</button>
    <input class="totalmeassub" type="text" id="totalMeas" name="totalMeasurements">
</div>
</main>