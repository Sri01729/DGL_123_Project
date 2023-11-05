<?php include 'header.view.php'; ?>

<div class="progress">
    <main>
        <h1 class="progressh1">Progress Tracking</h1>
        <div class="container">

            <div class="flex-container">
                <div class="grid">
                    <div class="cell1">
                        <p>Body Measurements (in cms)</p>
                    </div>
                    <div class="cell">
                        <input type="date">
                    </div>
                    <div class="cell">
                        <input type="text" placeholder="Shoulders" name="shoulders">
                    </div>
                    <div class="cell">
                        <input type="text" placeholder="Neck" name="neck">
                    </div>
                    <div class="cell">
                        <input type="text" placeholder="Forearms" name="forearms">
                    </div>
                    <div class="cell">
                        <input type="text" placeholder="Bust" name="bust">
                    </div>
                    <div class="cell">
                        <input type="text" placeholder="Chest" name="chest">
                    </div>
                    <div class="cell">
                        <input type="text" placeholder="Right Thigh" name="rightThigh">
                    </div>
                    <div class="cell">
                        <input type="text" placeholder="Left Thigh" name="leftThigh">
                    </div>
                    <div class="cell">
                        <input type="text" placeholder="Right Bicep" name="rightBicep">
                    </div>
                    <div class="cell">
                        <input type="text" placeholder="Left Bicep" name="leftBicep">
                    </div>
                </div>
                <div class="chart">
                    <img src="../assets/images/bodymeasgraph.png">
                </div>
            </div>
        </div>
        <div class="totalmeas">
            <span>Total Measurements</span>
            <input class="totalmeassub" type="text">
        </div>
        <button class="submit-button">Submit</button>
    </main>

    <?php include 'footer.view.php'; ?>