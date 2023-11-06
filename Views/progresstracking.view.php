<?php include 'header.view.php'; ?>

<div class="progress">
    <main>
        <h1 class="progressh1">Progress Tracking</h1>
        <div class="container">

            <div class="flex-container">
                <form action="../Models/progresstracking.php" method="post">
                    <div class="grid">
                        <div class="cell1">
                            <p>Body Measurements (in cms)</p>
                        </div>
                        <div class="cell">
                            <input type="date" id="date" name="date" required>
                        </div>
                        <div class="cell">
                            <input type="text" placeholder="Shoulders" id="shoulders " name="shoulders" required>
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
                            <button onclick="total()" class="btn" style="background-color: #f99c1a;">Total Measurements (in cms)</button>
                        </div>
                        <div class="cell">
                            <input class="totalmeassub" type="text" id="totalMeas" name="totalMeasurements">
                        </div>
                        <div class="cell3">
                            <button type="submit" class="submit-button">Submit</button>
                        </div>
                </form>
            </div>
            <div class="chart">
                <img src="../assets/images/bodymeasgraph.png">
            </div>
        </div>
</div>
</main>

<?php include 'footer.view.php'; ?>